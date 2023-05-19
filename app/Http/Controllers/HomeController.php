<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Mail\SendMail2;
use App\Models\Category;
use App\Models\District;
use App\Models\Job;
use App\Models\Location;
use App\Models\Lowongan;
use App\Models\Pembayaran;
use App\Models\Price;
use App\Models\province;
use App\Models\Regency;
use App\Models\Riwayat;
use App\Models\Village;
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
        $searchLocations  = Regency::pluck('name', 'id');
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

        // $province = province::get(); 

        $regency = Regency::all();
        $provinsi = province::all();

        // dd($searchLocations);

        return view('index', compact(['title','riwayatlist','wishlist','ipaddress','searchLocations','searchCategories','searchByCategory','jobs','sidbarJobs','wishh','regency','provinsi']));
    }

    public function search(Request $req)
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
        $searchLocations  = Regency::pluck('name', 'id');
        $searchCategories = Category::pluck('name', 'id');

        if ($req->search and $req->location and $req->categories){
            $jobs = Job::where('title', 'LIKE' , '%' .$req->search. '%')->where('regency_id' , $req->location)->where('categories_id', $req->categories)->with('company')->get();
        } 
        elseif ($req->search and $req->location) {
            $jobs = Job::where('title', 'LIKE', '%' . $req->search . '%')->where('regency_id', $req->location)->with('company')->get();
        } 
        elseif ($req->search and $req->categories) {
            $jobs = Job::where('title', 'LIKE', '%' . $req->search . '%')->where('categories_id', $req->categories)->with('company')->get();
        }
        elseif ($req->location and $req->categories) {
            $jobs = Job::where('regency_id', $req->location)->where('categories_id', $req->categories)->with('company')->get();
        }
        elseif ($req->location) {
            $jobs = Job::where('regency_id' , $req->location)->with('company')->get();
        }
        elseif ($req->categories) {
            $jobs = Job::where('categories_id' , $req->categories)->with('company')->get();
        } 
        elseif ($req->search) {
            $jobs = Job::where('title', 'LIKE', '%' . $req->search . '%')->with('company')->get();
        }
        else {
            $jobs = Job::with('company')->get();
        }
        
        $sidbarJobs = Job::whereTopRated(true)
            ->orderBy('id', 'desc')
            ->get();

        $banner = 'Search results';
        $title  = 'Lowongan Kerja di Yogyakarta';
        
        $province = province::all(); 
        // dd($jobs);

        return view('jobs.index', compact(['title', 'wishh', 'riwayatlist', 'wishlist', 'ipaddress', 'jobs', 'banner', 'searchLocations', 'sidbarJobs', 'searchCategories','province']));
    }

    public function aboutus()
    {
        // Carbon::setLocale('id');
        // echo Carbon::now()->diffForHumans();

        $title = 'Tentang Kami';
        $provinsi = province::all();

        return view('user.aboutus', compact(['title','provinsi']));
    }

    public function kontak()
    {
        $title = 'Kontak Kami';
        $provinsi = province::all();

        return view('user.kontak', compact(['title','provinsi']));
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

    public function province(Request $req,$id)
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
        $searchLocations  = Regency::where('province_id' , $id)->pluck('name', 'id');
        $job              = Job::where('regency_id' , $id)->get();
        $wishh            = Wish::where([['ip', '=', $ipaddress]])->get();
        $searchCategories = Category::pluck('name', 'id');
        $searchByCategory = Category::withCount('jobs')
            ->orderBy('jobs_count', 'desc')
            ->take(5)
            ->pluck('name', 'id');

        $Locationfirst  = Regency::where('province_id', $id)->pluck('id')->first();
        $Locations  = Regency::where('province_id', $id)->pluck('id')->forget(0);
            
        $querry = Job::Where('regency_id', $Locationfirst);
        foreach ($Locations as $key => $value) {
            $querry->OrWhere('regency_id', $value);
        }
        $querry->with('company')->orderBy('id', 'desc');

        $jobs = $querry->get();
        
        $sidbarJobs = Job::whereTopRated(true)
            ->orderBy('id', 'desc')
            ->get();

        $title = 'Lowongan Kerja di Yogyakarta';

        $provinceshow = province::where('id',$id)->first();
        $province = province::all();

        // dd($provinceshow);
        return view('index', compact(['title', 'riwayatlist', 'wishlist', 'ipaddress', 'searchLocations', 'searchCategories', 'searchByCategory', 'jobs', 'sidbarJobs', 'wishh', 'province','provinceshow']));
    }
}