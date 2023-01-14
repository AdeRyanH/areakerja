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
use App\Models\Rekomendasi;
use App\Models\RiwayatPendidikan;
use App\Models\Sertifikasi;
use App\Models\Skill;
use Illuminate\Http\Request;

class KandidatController extends Controller
{
    public function index()
    {
        $id        = auth()->user()->id;
        $mitra     = Mitra::where('idUser', $id)->first();
        $lowongan  = Lowonganmitra::all();
        $mainSkill = MainSkill::all();
        $kandidat  = Kandidat::all();
        $kandidat  = Rekomendasi::where('idMitra', $mitra->id)->get();

        return view('mitra.kandidat.index', compact('lowongan', 'mitra', 'kandidat', 'mainSkill'));
    }

    public function open(Request $request)
    {
        $user_id      = auth()->user()->id;
        $mitra        = Mitra::where('idUser', $user_id)->first();
        $mainKandidat = Kandidat::all();
        $kandidat     = Rekomendasi::where('idMitra', $user_id)->get();
        $b            = $request->jumlah + 1;

        for ($i = 1; $i < $b; $i++) {
            $a = $i - 1;
            if (empty($kandidat[$a]->idKandidat) || empty(Rekomendasi::where([['idMitra', $mitra->id], ['idKandidat', $i]])->first())) {
                if (empty(Kandidat::where('id', $i)->first()->id)) {
                    return redirect()->route('mitra.kandidat.index');
                }
                if (
                    '' . $mainKandidat[$a]->idSkill . '' === $request->idSkill
                    && empty(Rekomendasi::where([['idMitra', $mitra->id], ['idKandidat', $i]])->first())
                    && $mainKandidat[$a]->status === 'unhire'
                ) {
                    if ($mitra->koin === 0) {
                        return redirect()->route('mitra.kandidat.index');
                    }
                    $newKoin = $mitra->koin - 2;
                    $mitra->update(['koin' => $newKoin]);
                    Rekomendasi::create([
                        'idMitra'    => $mitra->id,
                        'idKandidat' => $i,
                    ]);
                } else {
                    $b++;
                }
            } else {
                $b++;
            }
        }

        return redirect()->route('mitra.kandidat.index');
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

        return view('mitra.kandidat.show', compact(
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

    public function hire($id)
    {
        $user_id = auth()->user()->id;
        $mitra   = Mitra::where('idUser', $user_id)->first();

        $kandidat = Kandidat::where('id', $id)->first();
        $kandidat->update(['status' => 'hire']);

        $rekomendasi = Rekomendasi::where('idKandidat', $id)->get();

        foreach ($rekomendasi as $rekomendasi) {
            $rekomendasi->delete();
        }

        Hire::create([
            'idMitra'    => $mitra->id,
            'idKandidat' => $id,
        ]);

        return redirect('mitra');
    }
}
