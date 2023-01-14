<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyLowonganRequest;
use App\Models\Category;
use App\Models\Company;
use App\Models\Job;
use App\Models\Location;
use App\Models\Lowongan;
use App\Models\Mitra;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class LowongannController extends Controller
{
    public function index()
    {
        $lowongan = Lowongan::all();

        return view('admin.lowongan.index', compact('lowongan'));
    }

    public function show(Lowongan $lowongan)
    {
        return view('admin.lowongan.show', compact('lowongan'));
    }

    public function edit(Lowongan $lowongan)
    {
        $lowongan->load('pembayaran');

        return view('admin.lowongan.pembayaran', compact('lowongan'));
    }

    public function addjob($id, Job $job)
    {
        $mitra = Lowongan::where('id', $id)->first();

        $cekcompany = Company::where('name', $mitra->namaperusahaan)->first();
        // $mitraAsli = Mitra::where('idUser', $mitra->idUser)->first();
        // $company   = Company::where('deskripsi', $mitraAsli->deskripsi)->first();
        $companies  = Company::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
        $locations  = Location::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
        $categories = Category::all()->pluck('name', 'id');
        $job->load('company', 'location', 'categories');

        if ($cekcompany === null) {
            $slug_judul = Str::slug($mitra->namaperusahaan);
            Company::create([
                'name'      => $mitra->namaperusahaan,
                'deskripsi' => $mitra->deskripsiperusahaan,
                'alamat'    => $mitra->alamatperusahaan,
                'gambar'    => $mitra->gambar,
                'slug'      => $slug_judul,
            ]);
            $company = Company::where('name', $mitra->namaperusahaan)->first();

            return view('admin.lowongan.create', compact('companies', 'locations', 'categories', 'job', 'mitra', 'cekcompany', 'company'));
        }
        $company = Company::where('name', $mitra->namaperusahaan)->first();

        return view('admin.lowongan.create', compact('companies', 'locations', 'categories', 'job', 'mitra', 'cekcompany', 'company'));

        // return view('admin.lowongan.create', compact('companies', 'locations', 'categories', 'job', 'mitra', 'company'));
    }

    public function destroy(Lowongan $lowongan)
    {
        $lowongan->delete();

        return back();
    }

    public function massDestroy(MassDestroyLowonganRequest $request)
    {
        Lowongan::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
