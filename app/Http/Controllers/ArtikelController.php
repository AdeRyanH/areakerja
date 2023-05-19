<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\cabang;
use App\Models\Category;
use App\Models\Job;
use App\Models\Location;
use App\Models\province;
use App\Models\Riwayat;
use App\Models\Wish;

class ArtikelController extends Controller
{
    public function artikel()
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
        $riwayatlist      = Riwayat::where('ip', $ipaddress)->get();
        $wishlist         = Wish::where('ip', $ipaddress)->get();
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

        $article = Article::all();

        $sidebarCategories = Category::withCount('jobs')
            ->whereHas('jobs')
            ->orderBy('jobs_count', 'desc')
            ->get();

        $title       = 'Artikel';
        $riwayatlist = Riwayat::where('ip', $ipaddress)->get();

        $provinsi = province::all(); 

        return view(
            'artikel.index' ,
            compact([
                'title',
                'searchCategories',
                'searchByCategory',
                'jobs',
                'sidebarJobs',
                'sidebarCategories',
                'article',
                'wishlist',
                'riwayatlist',
                'provinsi'
            ])
        );
    }

    public function show($slug)
    {
        $ipaddress        = '';
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

        $art = Article::where('slug', $slug)->first();

        $sidebarCategories = Category::withCount('jobs')
            ->whereHas('jobs')
            ->orderBy('jobs_count', 'desc')
            ->get();
            
        $title       = $art->judul;
        $riwayatlist = Riwayat::where('ip', $ipaddress)->get();
        
        $provinsi = province::all(); 

        return view(
            'artikel.show',
            compact([
                'title',
                'searchCategories',
                'searchByCategory',
                'jobs',
                'sidebarJobs',
                'sidebarCategories',
                'art',
                'riwayatlist',
                'provinsi'
            ])
        );
    }
}