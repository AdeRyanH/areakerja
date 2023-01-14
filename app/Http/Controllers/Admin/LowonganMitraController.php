<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreJobRequest;
use App\Models\Category;
use App\Models\Company;
use App\Models\Job;
use App\Models\Location;
use App\Models\Lowonganmitra;
use App\Models\Mitra;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class LowonganMitraController extends Controller
{
    public function index()
    {
        $lowongan = Lowonganmitra::all();

        return view('admin.lowonganmitra.index', compact('lowongan'));
    }

    public function edit($id, Job $job)
    {
        $mitra     = Lowonganmitra::where('id', $id)->first();
        $mitraAsli = Mitra::where('idUser', $mitra->idUser)->first();
        $company   = Company::where('name', $mitraAsli->nama)->first();

        $companies = Company::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $locations = Location::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $categories = Category::all()->pluck('name', 'id');

        $job->load('company', 'location', 'categories');

        return view('admin.lowonganmitra.create', compact('companies', 'locations', 'categories', 'job', 'mitra', 'company'));
    }

    public function addjob($id, Job $job)
    {
        $mitra = Lowonganmitra::where('id', $id)->first();

        $mitraAsli  = Mitra::where('idUser', $mitra->idUser)->first();
        $cekcompany = Company::where('name', $mitraAsli->nama)->first();
        $companies  = Company::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
        $locations  = Location::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
        $categories = Category::all()->pluck('name', 'id');
        $job->load('company', 'location', 'categories');

        if ($cekcompany === null) {
            $slug_judul = Str::slug($mitraAsli->nama);
            Company::create([
                'name'      => $mitraAsli->nama,
                'deskripsi' => $mitraAsli->deskripsi,
                'alamat'    => $mitraAsli->alamat,
                'gambar'    => $mitraAsli->logo,
                'slug'      => $slug_judul,
            ]);
            $company = Company::where('name', $mitraAsli->nama)->first();

            return view('admin.lowonganmitra.create', compact('companies', 'locations', 'categories', 'job', 'mitra', 'cekcompany', 'company'));
        }
        $company = Company::where('name', $mitraAsli->nama)->first();

        return view('admin.lowonganmitra.create', compact('companies', 'locations', 'categories', 'job', 'mitra', 'cekcompany', 'company'));
    }

    public function storejob(StoreJobRequest $request)
    {
        $request->validate([
            'bataslamaran' => 'required|after:yesterday',
        ]);

        $companyName      = Company::where('id', $request->company_id)->first('name');
        $slug_title       = Str::slug($request->get('title'));
        $slug_companyname = Str::slug($companyName->name);
        $slug             = $slug_title . '-di-' . $slug_companyname;
        $gambar           = Mitra::where('nama', $companyName->name)->first();
        File::copy(public_path("img/mitralogo/{$gambar->logo}"), public_path("img/companylogo/{$gambar->logo}"));
        $job = Job::create([
            'title'            => $request->title,
            'salary'           => $request->salary,
            'address'          => $request->address,
            'top_rated'        => $request->top_rated,
            'company_id'       => $request->company_id,
            'job_nature'       => $request->job_nature,
            'pendidikan'       => $request->pendidikan,
            'umur'             => $request->umur,
            'gender'           => $request->gender,
            'lokasikerja'      => $request->lokasikerja,
            'requirements'     => $request->requirements,
            'bataslamaran'     => $request->bataslamaran,
            'location_id'      => $request->location_id,
            'email'            => $request->email,
            'notelp'           => $request->notelp,
            'website'          => $request->website,
            'full_description' => $request->full_description,
            'slug'             => $slug,
        ]);
        $job->categories()->sync($request->input('categories', []));

        $mitra                    = Lowonganmitra::where('id', $request->id)->first();
        $mitra->status_pemasangan = 'Terpasang';
        $mitra->update();

        Alert::success('Berhasil Menambah Lowongan', ' ');

        return redirect()->route('admin.jobs.index');
    }
}
