<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Mail\SendMail2;
use App\Models\cabang;
use App\Models\Category;
use App\Models\Job;
use App\Models\Location;
use App\Models\Lowongan;
use App\Models\Pembayaran;
use App\Models\Price;
use App\Models\Riwayat;
use App\Models\Wish;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function index()
    {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } elseif (isset($_SERVER['HTTP_X_FORWARDED'])) {
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        } elseif (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        } elseif (isset($_SERVER['HTTP_FORWARDED'])) {
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        } elseif (isset($_SERVER['REMOTE_ADDR'])) {
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        } else {
            $ipaddress = 'UNKNOWN';
        }
        Carbon::setLocale('id');
        $wishlist         = Wish::where('ip', $ipaddress)->get();
        $riwayatlist      = Riwayat::where('ip', $ipaddress)->get();
        $searchLocations  = Location::pluck('name', 'id');
        $job              = Job::all();
        $wishh            = Wish::where([['ip', '=', $ipaddress]])->get();
        $searchCategories = Category::pluck('name', 'id');
        $searchByCategory = Category::withCount('jobs')
            ->orderBy('jobs_count', 'desc')
            ->take(5)
            ->pluck('name', 'id');
        $jobs = Job::with('company')
            ->orderBy('id', 'desc')
            ->take(5)
            ->get();
        $sidbarJobs = Job::whereTopRated(true)
            ->orderBy('id', 'desc')
            ->get();

        $title = 'Lowongan Kerja di Yogyakarta';
        
        $cabang = cabang::get();
        $cabanghr = cabang::get()->last();

        return view('index', compact(['title', 'riwayatlist', 'wishlist', 'ipaddress', 'searchLocations', 'searchCategories', 'searchByCategory', 'jobs', 'sidbarJobs', 'wishh', 'cabang', 'cabanghr']));
    }

    public function search(Request $request)
    {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } elseif (isset($_SERVER['HTTP_X_FORWARDED'])) {
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        } elseif (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        } elseif (isset($_SERVER['HTTP_FORWARDED'])) {
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        } elseif (isset($_SERVER['REMOTE_ADDR'])) {
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        } else {
            $ipaddress = 'UNKNOWN';
        }
        Carbon::setLocale('id');
        $wishlist         = Wish::where('ip', $ipaddress)->get();
        $riwayatlist      = Riwayat::where('ip', $ipaddress)->get();
        $wishh            = Wish::where([['ip', '=', $ipaddress]])->get();
        $searchLocations  = Location::pluck('name', 'id');
        $searchCategories = Category::pluck('name', 'id');
        $jobs             = Job::with('company')
            ->searchResults()
            ->paginate(7);

        $sidbarJobs = Job::whereTopRated(true)
            ->orderBy('id', 'desc')
            ->get();

        $banner = 'Search results';
        $title  = 'Lowongan Kerja di Yogyakarta';

        return view('jobs.index', compact(['title', 'wishh', 'riwayatlist', 'wishlist', 'ipaddress', 'jobs', 'banner', 'searchLocations', 'sidbarJobs', 'searchCategories']));
    }

    public function aboutus()
    {
        // Carbon::setLocale('id');
        // echo Carbon::now()->diffForHumans();

        $title = 'Tentang Kami';
        $cabang = cabang::get();
        $cabanghr = cabang::get()->last();

        return view('user.aboutus', compact(['title','cabang','cabanghr']));
    }

    public function kontak()
    {
        $title = 'Kontak Kami';
        $cabang = cabang::get();
        $cabanghr = cabang::get()->last();

        return view('user.kontak', compact(['title','cabang','cabanghr']));
    }

    public function formpasang(Request $request)
    {
        $paket            = Price::where('nama', $request->paket)->get()->first();
        $number           = mt_rand(000, 999);
        $number2          = mt_rand(0000, 9999);
        $total_pembayaran = $paket->harga + $number2;
        $total            = number_format($total_pembayaran, 0, '.', '.');
        $search           = Pembayaran::create([
            'paket'  => $paket->nama,
            'harga'  => $total_pembayaran,
            'status' => 'NDANGDIBAYAR',
        ]);

        $code = '' . $search->id . '' . $total . '' . $number . '' . ($search->id + 100000) . '';

        $this->_generatePaymentToken($request, $total_pembayaran, $code);

        $gambar = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('storage/tmpcompanylogo'), $gambar);
        Lowongan::create([
            'idPembayaran'        => '' . $search->id . '',
            'namaperusahaan'      => $request->namaperusahaan,
            'deskripsiperusahaan' => $request->deskripsiperusahaan,
            'alamatperusahaan'    => $request->alamatperusahaan,
            'gambar'              => $gambar,
            'posisi'              => $request->title,
            'gaji'                => $request->salary,
            'job_nature'          => $request->job_nature,
            'alamat_kantor'       => $request->alamat_kantor,
            'min_pendidikan'      => $request->min_pendidikan,
            'gender'              => $request->gender,
            'min_umur'            => $request->min_umur,
            'bataslamaran'        => $request->bataslamaran,
            'syarat_pekerjaan'    => $request->full_description,
            'deskripsi_pekerjaan' => $request->short_description,
            'email'               => $request->email,
            'notelp'              => $request->notelp,
            'web'                 => $request->web,
        ]);

        $url = $request->payment_url;

        Alert::success('Berhasil Mengirim Lowongan', 'Admin sedang memproses lowongan anda');

        return redirect($url);
    }

    public function kirimmail(Request $request)
    {
        $this->validate($request, [
            'nama'  => ['required', 'string'],
            'email' => ['required', 'string', 'email'],
            'nomor' => ['required', 'string'],
            'saran' => ['required', 'string'],
        ]);

        $contact = [
            'nama'  => $request['nama'],
            'email' => $request['email'],
            'nomor' => $request['nomor'],
            'saran' => $request['saran'],
        ];

        $penerima = env('MAIL_ADMIN_ADDRESS'); // kirim email ke admin

        Mail::to($penerima)->send(new SendMail($contact));

        if (Mail::failures() === []) {
            // redirect to
            return redirect()->back()->with('success', 'Pesan berhasil dikirim');
        }

        return redirect()->back()->with('error', 'Pesan gagal dikirim.');
    }

    public function lamarmail($name, $umur)
    {
        // $request = [$name,];
        // dd($name,$umur);
        // $nama = $request->nama;
        // $nomor = $request->nomor;
        // $email1 = $request->email;
        // $saran = $request->saran;
        $email = 'ti.fadelirsyad04@gmail.com';
        $kirim = Mail::to($email)->send(new SendMail2($umur));

        if ($kirim) {
            echo 'Email telah dikirim';
        }

        return view('user.kontak');
    }

    // public function addcart(Request $request)
    // {
    //     $id   = $request->id;
    //     $time = 60 * 24 * 14;
    //     echo $id;
    //     $value = 0;
    //     if (Cookie::get('cart') !== null) {
    //         $anonim = Cookie::get('cart');
    //         DB::table("cart")->insert(["anonim" => $anonim, "product_id" => $id]);

    //         return 0;
    //     } else {
    //         $value = DB::table("cart")->max("anonim") + 1;
    //         if (empty($value)) {
    //             $value = 0;
    //         }
    //         DB::table("cart")->insert(["anonim" => $value, "product_id" => $id]);
    //         $cookie = cookie('cart', $value, $time);

    //         return response()->cookie($cookie);
    //     }
    // }

    // function getMAcAddressExec()
    // {
    //     echo getMAcAddressExec();
    //         return substr(exec('getmac'), 0, 17);
    // }

    // function getMAcAddressShellExec()
    // {
    //     echo getMAcAddressShellExec();
    //     return substr(shell_exec('getmac'), 159,20);
    // }

    private function _generatePaymentToken($order, $total, $code)
    {
        $this->initPaymentGateway();

        // dd($total);
        // $code = "INV/202107006/VII/XXI/00003";
        $customerDetails = [
            'first_name' => $order->namaperusahaan,
            'email'      => $order->email,
            'phone'      => $order->notelp,
        ];

        $params = [
            'enable_payments'     => \App\Models\Pembayaran::PAYMENT_CHANNELS,
            'transaction_details' => [
                'order_id'     => $code,
                'gross_amount' => $total,
            ],
            'customer_details' => $customerDetails,
            'expiry'           => [
                'start_time' => date('Y-m-d H:i:s T'),
                'unit'       => \App\Models\Pembayaran::EXPIRY_UNIT,
                'duration'   => \App\Models\Pembayaran::EXPIRY_DURATION,
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