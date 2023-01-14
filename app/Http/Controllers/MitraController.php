<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use App\Models\Location;
use App\Models\MainSkill;
use App\Models\Mitra;
use App\Models\Riwayat;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class MitraController extends Controller
{
    public function index(Request $request)
    {
        $logo = time() . '.' . $request->logo->extension();
        $request->logo->move(public_path('img/mitralogo/'), $logo);
        $slug_judul = Str::slug($request->nama);
        Mitra::create([
            'nama'      => $request->nama,
            'email'     => $request->email,
            'deskripsi' => $request->deskripsi,
            'alamat'    => $request->alamat,
            'no'        => $request->no,
            'logo'      => $logo,
            'slug'      => $slug_judul,
        ]);

        Alert::success('Berhasil Mendaftar Mitra(Cek Email Untuk Akun Login)', 'Admin sedang memproses akun anda');

        return redirect(route('home'));
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
                'skill',
                'mainSkill1',
            ])
        );
    }
}
