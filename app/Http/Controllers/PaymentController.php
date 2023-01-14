<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Midtrans\notification;
use RealRashid\SweetAlert\Facades\Alert;

class PaymentController extends Controller
{
    public function notification(Request $request)
    {
        // dd($request);
        // $payload      = $request->getContent();
        // $notification = json_decode($payload);

        // $validSignatureKey = hash('sha512', $notification->order_id . $notification->status_code . $notification->gross_amount . env('MIDTRANS_SERVER_KEY'));

        // if ($notification->signature_key !== $validSignatureKey) {
        //     return response(['message' => 'Invalid signature'], 403);
        // }

        // $this->initPaymentGateway();
        // $statusCode = null;

        // $paymentNotification = new Notification();
        // $order               = Lowongan::where('idPembayaran', $request->order_id)->firstOrFail();

        // if ($order->isPaid()) {
        //     return response(['message' => 'The order has been paid before'], 422);
        // }

        $transaction = $request->transaction_status;
        $type        = $request->payment_type;
        $orderId     = $request->order_id;
        $fraud       = $request->fraud_status;

        // $vaNumber   = null;
        // $vendorName = null;
        // if (!empty($request->va_numbers[0])) {
        //     $vaNumber   = $request->va_numbers[0]->va_number;
        //     $vendorName = $request->va_numbers[0]->bank;
        // }

        $paymentStatus = null;
        if ($transaction === 'capture') {
            // For credit card transaction, we need to check whether transaction is challenge by FDS or not
            if ($type === 'credit_card') {
                if ($fraud === 'challenge') {
                    // TODO set payment status in merchant's database to 'Challenge by FDS'
                    // TODO merchant should decide whether this transaction is authorized or not in MAP
                    $paymentStatus = Pembayaran::CHALLENGE;
                } else {
                    // TODO set payment status in merchant's database to 'Success'
                    $paymentStatus = Pembayaran::SUCCESS;
                }
            }
        } elseif ($transaction === 'settlement') {
            // TODO set payment status in merchant's database to 'Settlement'
            $id                = (int) substr($request->order_id, -5);
            $companies         = Pembayaran::where('id', $id)->first();
            $companies->status = 'LUNAS';
            $companies->save();
            $paymentStatus = Pembayaran::SETTLEMENT;
        } elseif ($transaction === 'pending') {
            // TODO set payment status in merchant's database to 'Pending'
            $paymentStatus = Pembayaran::PENDING;
        } elseif ($transaction === 'deny') {
            // TODO set payment status in merchant's database to 'Denied'
            $paymentStatus = Pembayaran::DENY;
        } elseif ($transaction === 'expire') {
            // TODO set payment status in merchant's database to 'expire'
            $paymentStatus = Pembayaran::EXPIRE;
        } elseif ($transaction === 'cancel') {
            // TODO set payment status in merchant's database to 'Denied'
            $paymentStatus = Pembayaran::CANCEL;
        }

        $paymentParams = [
            'status' => 'gagal',
        ];
        // $companies = Pembayaran::where('id', $order->id);
        // echo $companies;
        // $companies->update($paymentParams);

        // if ($paymentStatus && $payment) {
        // 	\DB::transaction(
        // 		function () use ($order, $payment) {
        // 			if (in_array($payment->status, [Pembayaran::SUCCESS, Pembayaran::SETTLEMENT])) {
        // 				$order->payment_status = Pembayaran::PAID;
        // 				$order->status = Pembayaran::CONFIRMED;
        // 				$order->save();
        // 			}
        // 		}
        // 	);
        // }

        $message = 'Payment status is : ' . $paymentStatus;

        $response = [
            'code'    => 200,
            'message' => $message,
        ];

        return response($response, 200);
    }

    public function completed(Request $request)
    {
        // dd($request);
        Alert::success('Berhasil Mengirim Lowongan', 'Admin sedang memproses lowongan anda');

        return redirect(route('home'));
    }

    public function unfinish(Request $request)
    {
        return redirect(route('home'));
    }

    public function failed(Request $request)
    {
        return redirect(route('home'));
    }

    public function index(Request $request)
    {
    }
}
