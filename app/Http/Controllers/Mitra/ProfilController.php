<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Models\Mitra;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;

        $mitra = Mitra::where('idUser', $user_id)->first();
        // dd($mitra);
        return view('mitra.profil.index', compact('mitra'));
    }

    public function edit()
    {
        $user_id = auth()->user()->id;
        $mitra   = Mitra::where('idUser', $user_id)->first();

        return view('mitra.profil.edit', compact('mitra'));
    }

    public function store(Request $request)
    {
        $user_id = auth()->user()->id;
        $mitra   = Mitra::where('idUser', $user_id)->first();
        $mitra->update([
            'nama'      => $request->nama,
            'deskripsi' => $request->deskripsi,
            'alamat'    => $request->alamat,
            'no'        => $request->no,
            'instagram' => $request->instagram,
            'facebook'  => $request->facebook,
        ]);

        return view('mitra.profil.index', compact('mitra'));
    }
}
