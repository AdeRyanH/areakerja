<?php

namespace App\Http\Controllers;

use App\Models\cabang;
use App\Models\Category;
use App\Models\Job;
use App\Models\Location;
use App\Models\province;
use App\Models\Regency;
use App\Models\Riwayat;
use App\Models\Wish;

class LocationController extends Controller
{
    public function show($name)
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

        $location         = Regency::where('name', $name)->first();
        $wishlist         = Wish::where('ip', $ipaddress)->get();
        $wishh            = Wish::where([['ip', '=', $ipaddress]])->get();
        $riwayatlist      = Riwayat::where('ip', $ipaddress)->get();
        $searchLocations  = Regency::pluck('name', 'id');
        $searchCategories = Category::pluck('name', 'id');
        $jobs             = Job::with('company')->where('regency_id' , $location->id)->paginate(7);
        $sidbarJobs = Job::whereTopRated(true)
            ->orderBy('id', 'desc')
            ->get();

        $banner = 'Location: ' . $location->name;

        $title = 'Lowongan Kerja daerah' . ' ' . $location->name;

        $cabang = cabang::get();
        $cabanghr = cabang::get()->last();
        $provinsi = Province::all(); 

        return view('jobs.index', compact(['title', 'wishh', 'riwayatlist', 'ipaddress', 'wishlist', 'jobs', 'banner', 'searchCategories', 'searchLocations', 'sidbarJobs','cabang','cabanghr','provinsi']));
    }
}