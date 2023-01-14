<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Models\Mitra;
use Illuminate\Support\Carbon;

class TopupController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $mitra   = Mitra::where('idUser', $user_id)->first();

        return view('mitra.topop.index', compact('mitra'));
    }

    public function topup($id, $harga, $jumlah)
    {
        $mitra1 = Mitra::where('idUser', $id)->first();
        $number = mt_rand(000, 999);
        $total  = $harga + $number;
        $tgl    = Carbon::now();
        $code   = 'AK' . ($id + 100000) . $tgl->year . $tgl->month . $tgl->day . $total . 00 . $jumlah;

        $this->_generatePaymentToken($mitra1, $total, $code);
        $url = $mitra1->payment_url;

        $user_id = auth()->user()->id;
        $mitra   = Mitra::where('idUser', $user_id)->first();

        return redirect($url);
    }

    private function _generatePaymentToken($order, $total, $code)
    {
        $this->initPaymentGateway2();

        // $code = "INV/202107006/VII/XXI/00003";
        $customerDetails = [
            'first_name' => $order->nama,
            'email'      => $order->email,
            'phone'      => $order->no,
        ];

        $params = [
            'enable_payments'     => \App\Models\Topup::PAYMENT_CHANNELS,
            'transaction_details' => [
                'order_id'     => $code,
                'gross_amount' => $total,
            ],
            'customer_details' => $customerDetails,
            'expiry'           => [
                'start_time' => date('Y-m-d H:i:s T'),
                'unit'       => \App\Models\Topup::EXPIRY_UNIT,
                'duration'   => \App\Models\Topup::EXPIRY_DURATION,
            ],
        ];

        $snap = \Midtrans\Snap::createTransaction($params);
        // dd($snap);exit;

        if ($snap->token) {
            // dd($snap->redirect_url);
            $order->payment_token = $snap->token;
            $order->payment_url   = $snap->redirect_url;
            // $order->save();
            // dd($snap->redirect_url);
            // return redirect()->to($snap->redirect_url);
        }
    }
}
