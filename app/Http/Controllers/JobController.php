<?php

namespace App\Http\Controllers;

use App\Models\cabang;
use App\Models\Category;
use App\Models\contact;
use App\Models\Job;
use App\Models\Location;
use App\Models\MainSkill;
use App\Models\Price;
use App\Models\province;
use App\Models\Regency;
use App\Models\Riwayat;
use App\Models\Wish;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class JobController extends Controller
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
        $jobs             = Job::with('company')->paginate(0);
        $searchLocations  = Regency::pluck('name', 'id');
        $searchCategories = Category::pluck('name', 'id');
        $wishh            = Wish::all();
        $sidbarJobs       = Job::whereTopRated(true)
            ->orderBy('id', 'desc')
            ->get();

        $banner = 'Jobs';
        $title  = 'Lowongan Kerja di Yogyakarta';
        $cabang = cabang::get();
        $cabanghr = cabang::get()->last();
        $province = province::all(); 

        return view(
            'jobs.index',
            compact([
                'title',
                'jobs',
                'banner',
                'searchLocations',
                'searchCategories',
                'sidbarJobs', 'riwayatlist', 'wishlist', 'ipaddress', 'wishh',
                'cabang',
                'cabanghr',
                'province'
            ])
        );
    }

    public function show($slug)
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

        $job = Job::where('slug', $slug)->first();
        $job->load('company');
        $searchLocations  = Regency::pluck('name', 'id');
        $searchCategories = Category::pluck('name', 'id');
        $wishlist         = Wish::where('ip', $ipaddress)->get();
        $wishh            = Wish::where([['ip', '=', $ipaddress], ['idJob', '=', $job->id]])->get();

        $riwayatlist = Riwayat::where('ip', $ipaddress)->get();

        $title = 'Lowongan Kerja ' . $job->title . ' di ' . $job->company->name;
        $cabang = cabang::get();
        $cabanghr = cabang::get()->last();
        $province = province::all(); 
        // Alert::success('Sukses Membuka');

        return view(
            'jobs.show',
            compact(['title', 'job', 'riwayatlist', 'searchLocations', 'searchCategories', 'wishlist', 'ipaddress', 'wishh',
                'cabang',
                'cabanghr',
                'province'])
        );
    }

    public function pasang($nama)
    {
        $jenis     = $nama;
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

        $paket            = Price::where('nama', $jenis)->first();
        $warna            = $paket->warna;
        $searchLocations  = Location::pluck('name', 'id');
        $searchCategories = Category::pluck('name', 'id');
        $searchByCategory = Category::withCount('jobs')
            ->orderBy('jobs_count', 'desc')
            ->take(5)
            ->pluck('name', 'id');
        $jobs = Job::with('company')
            ->orderBy('id', 'desc')
            ->take(5)
            ->get();
        $sidebarJobs = Job::whereTopRated(true)
            ->orderBy('id', 'desc')
            ->take(0)
            ->get();

        $sidebarLocations = Location::withCount('jobs')
            ->whereHas('jobs')
            ->orderBy('jobs_count', 'desc')
            ->get();

        $sidebarCategories = Category::withCount('jobs')
            ->whereHas('jobs')
            ->orderBy('jobs_count', 'desc')
            ->get();
        $riwayatlist = Riwayat::where('ip', $ipaddress)->get();
        $title       = 'Pasang Lowongan Kerja';

        return view(
            'pasang.pasang',
            compact([
                'title',
                'searchLocations',
                'searchCategories',
                'searchByCategory',
                'jobs',
                'sidebarJobs',
                'sidebarLocations',
                'sidebarCategories',
                'riwayatlist',
                'jenis',
                'warna',
            ])
        );
    }

    public function daftarmitra()
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

        $searchLocations  = Location::pluck('name', 'id');
        $searchCategories = Category::pluck('name', 'id');
        $searchByCategory = Category::withCount('jobs')
            ->orderBy('jobs_count', 'desc')
            ->take(5)
            ->pluck('name', 'id');
        $jobs = Job::with('company')
            ->orderBy('id', 'desc')
            ->take(5)
            ->get();
        $sidebarJobs = Job::whereTopRated(true)
            ->orderBy('id', 'desc')
            ->take(0)
            ->get();

        $sidebarLocations = Location::withCount('jobs')
            ->whereHas('jobs')
            ->orderBy('jobs_count', 'desc')
            ->get();

        $sidebarCategories = Category::withCount('jobs')
            ->whereHas('jobs')
            ->orderBy('jobs_count', 'desc')
            ->get();
        $riwayatlist = Riwayat::where('ip', $ipaddress)->get();
        $title       = 'Pasang Lowongan Kerja';

        return view(
            'pasang.mitra',
            compact([
                'title',
                'searchLocations',
                'searchCategories',
                'searchByCategory',
                'jobs',
                'sidebarJobs',
                'sidebarLocations',
                'sidebarCategories',
                'riwayatlist',
            ])
        );
    }

    public function pilihpaket()
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
        $paket            = Price::get();
        // $paket            = Price::where('keterangan', 'biasa')->get();
        // $searchLocations  = Location::pluck('name', 'id');
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

        // $sidebarLocations = Location::withCount('jobs')
        //     ->whereHas('jobs')
        //     ->orderBy('jobs_count', 'desc')
        //     ->get();

        $sidebarCategories = Category::withCount('jobs')
            ->whereHas('jobs')
            ->orderBy('jobs_count', 'desc')
            ->get();
        $riwayatlist = Riwayat::where('ip', $ipaddress)->get();
        $title       = 'Pasang Lowongan Kerja';

        $cabang = cabang::get();
        $cabanghr = cabang::get()->last();
        $contact = contact::first();
        $provinsi = province::all();
        // dd($paket);
        return view(
            'pasang.paket',
            compact([
                'title',
                'paket',
                // 'paket2',
                'searchCategories',
                'searchByCategory',
                'jobs',
                'sidbarJobs',
                'sidebarCategories',
                'riwayatlist',
                'cabang',
                'cabanghr',
                'contact',
                'provinsi'
            ])
        );
    }

    public function delete($id)
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

        $wish = Wish::where([['ip', '=', $ipaddress], ['idJob', '=', $id]])->first();
        // dd($Wish);
        $wish->delete();

        return redirect()->back();
    }

    public function rekomendasi()
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

        $wishh            = Wish::all();
        $wishlist         = Wish::where('ip', $ipaddress)->get();
        $riwayatlist      = Riwayat::where('ip', $ipaddress)->get();
        $searchLocations  = Location::pluck('name', 'id');
        $searchCategories = Category::pluck('name', 'id');
        $sidbarJobs       = Job::whereTopRated(true)
            ->orderBy('id', 'desc')
            ->get();

        $banner = 'Jobs';
        $title  = 'Rekomendasi Lowongan Kerja';
        $cabang = cabang::get();
        $cabanghr = cabang::get()->last();
        $province = province::all(); 

        return view(
            'jobs.rekomendasi',
            compact([
                'title',
                'riwayatlist',
                'banner',
                'searchLocations',
                'searchCategories',
                'sidbarJobs', 'wishlist', 'ipaddress', 'wishh','cabang','cabanghr','province'
            ])
        );
    }

    public function daftarkandidat()
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
        $mainSkill1       = MainSkill::all();
        $searchLocations  = Location::pluck('name', 'id');
        $searchCategories = Category::pluck('name', 'id');
        $searchByCategory = Category::withCount('jobs')
            ->orderBy('jobs_count', 'desc')
            ->take(5)
            ->pluck('name', 'id');
        $jobs = Job::with('company')
            ->orderBy('id', 'desc')
            ->take(5)
            ->get();
        $sidebarJobs = Job::whereTopRated(true)
            ->orderBy('id', 'desc')
            ->take(0)
            ->get();

        $sidebarLocations = Location::withCount('jobs')
            ->whereHas('jobs')
            ->orderBy('jobs_count', 'desc')
            ->get();

        $sidebarCategories = Category::withCount('jobs')
            ->whereHas('jobs')
            ->orderBy('jobs_count', 'desc')
            ->get();
        $riwayatlist = Riwayat::where('ip', $ipaddress)->get();
        $title       = 'Pasang Lowongan Kerja';
        $skill       = MainSkill::get();

        return view(
            'pasang.kandidat',
            compact([
                'title',
                'searchLocations',
                'searchCategories',
                'searchByCategory',
                'jobs',
                'sidebarJobs',
                'sidebarLocations',
                'sidebarCategories',
                'riwayatlist',
                'skill',
                'mainSkill1',
            ])
        );
    }
}