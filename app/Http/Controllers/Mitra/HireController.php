<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Models\Hire;
use App\Models\Kandidat;
use App\Models\Lowonganmitra;
use App\Models\MainSkill;
use App\Models\Mitra;
use App\Models\Organisasi;
use App\Models\Pengalaman;
use App\Models\RiwayatPendidikan;
use App\Models\Sertifikasi;
use App\Models\Skill;

class HireController extends Controller
{
    public function index()
    {
        $user_id   = auth()->user()->id;
        $lowongan  = Lowonganmitra::all();
        $mainSkill = MainSkill::all();
        // $kandidat = Kandidat::all();
        $mitra    = Mitra::where('idUser', $user_id)->first();
        $kandidat = Hire::where('idMitra', $mitra->id)->get();

        return view('mitra.hire.index', compact('lowongan', 'mitra', 'kandidat', 'mainSkill'));
    }

    public function show($slug)
    {
        $user_id  = auth()->user()->id;
        $lowongan = Lowonganmitra::all();
        $mitra    = Mitra::where('idUser', $user_id)->first();

        $kandidat    = Kandidat::where('slug', $slug)->first();
        $idkandidat  = $kandidat->id;
        $organisasi  = Organisasi::where('idKandidat', $idkandidat)->get();
        $pendidikan  = RiwayatPendidikan::where('idKandidat', $idkandidat)->get();
        $pengalaman  = Pengalaman::where('idKandidat', $idkandidat)->get();
        $sertifikasi = Sertifikasi::where('idKandidat', $idkandidat)->get();
        $skill       = Skill::where('idKandidat', $idkandidat)->get();

        return view('mitra.hire.show', compact(
            'lowongan',
            'mitra',
            'kandidat',
            'idkandidat',
            'organisasi',
            'pendidikan',
            'pengalaman',
            'sertifikasi',
            'skill',
        ));
    }
}
