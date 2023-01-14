<?php

namespace App\Http\Controllers\Kandidat;

use App\Http\Controllers\Controller;
use App\Models\Hire;
use App\Models\Kandidat;
use App\Models\Mitra;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class KandidatKController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $mitra   = Kandidat::where('idUser', $user_id)->first();

        return view('mitra.home', compact('mitra'));
    }

    public function lowongan()
    {
        $user_id  = auth()->user()->id;
        $mitra    = Kandidat::where('idUser', $user_id)->first();
        $kandidat = Hire::where('idKandidat', $mitra->id)->get();

        return view('kandidat.lowongan.index', compact(['mitra', 'kandidat']));
    }

    public function show($slug)
    {
        $user_id = auth()->user()->id;
        $mitra   = Kandidat::where('idUser', $user_id)->first();

        $mitra2  = Mitra::where('slug', $slug)->first();
        $idmitra = $mitra2->id;

        return view('kandidat.lowongan.show', compact(['mitra', 'mitra2', 'idmitra']));
    }

    public function out()
    {
        User::where('id', Auth::user()->id)->update(['status' => 'offline']);
        Auth::logout();

        return redirect()->route('home');
    }
}
