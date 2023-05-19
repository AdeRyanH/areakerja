<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Riwayat;
use App\Models\Wish;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use RealRashid\SweetAlert\Facades\Alert;

class CacheController extends Controller
{
    public function index($id)
    {
        $job   = Job::where('id', $id)->first();
        $title = $job->title;
        $name  = $job->company->name;
        Cache::add('title', $title, now()->addMinutes(10));
        Cache::add('name', $name, now()->addMinutes(10));

        alert()->warning($name, $title);

        return redirect('pasang');
    }

    public function get()
    {
        
        echo Cache::get('title');
        echo '<br>';
        echo Cache::get('name');
    }

    public function get_client_ip($id)
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

        $wish = Wish::where([['idJob', $id], ['ip', $ipaddress]])->first();
        if (isset($wish)) {
            $wish->delete();

            return back();
        }
        Wish::insert([
            'ip'    => $ipaddress,
            'idJob' => $id,

        ]);
        return back();
    }

    public function riwayat($slug)
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
        $idJob = Job::where('slug', $slug)->first();
        $riwayat = Riwayat::where([['idJob', $idJob->id], ['ip', $ipaddress]])->first();

        if (isset($riwayat)) {
            return redirect()->route('jobs.show', ['slug' => $slug]);
        }
        Riwayat::insert([
            'ip'         => $ipaddress,
            'idJob'      => $idJob->id,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('jobs.show', ['slug' => $slug]);
    }
}