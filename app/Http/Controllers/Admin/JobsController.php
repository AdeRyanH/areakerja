<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyJobRequest;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Category;
use App\Models\Company;
use App\Models\Job;
use App\Models\Location;
use App\Models\Lowongan;
use App\Models\Lowonganmitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\Response;

class JobsController extends Controller
{
    public function index()
    {
        $jobs = Job::all();

        return view('admin.jobs.index', compact('jobs'));
    }

    public function create()
    {
        $companies = Company::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $locations = Location::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $categories = Category::all()->pluck('name', 'id');

        return view('admin.jobs.create', compact('companies', 'locations', 'categories'));
    }

    public function store(StoreJobRequest $request)
    {
        // $imglowongan = Company::where('id', $request->company_id)->first('gambar');
        // File::copy(public_path("storage/tmpcompanylogo/{$imglowongan->gambar}"), public_path("img/companylogo/{$imglowongan->gambar}"));
        $companyName      = Company::where('id', $request->company_id)->first('name');
        $slug_title       = Str::slug($request->get('title'));
        $slug_companyname = Str::slug($companyName->name);
        $slug             = $slug_title . '-di-' . $slug_companyname;
        if ($request->location_id === 1) {
            $sluglocation = Str::slug($request->new_location);

            $location       = new Location();
            $location->name = $request->new_location;
            $location->slug = $sluglocation;
            $location->save();

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
                'location_id'      => $location->id,
                'email'            => $request->email,
                'notelp'           => $request->notelp,
                'website'          => $request->website,
                'full_description' => $request->full_description,
                'slug'             => $slug,
            ]);
            $job->categories()->sync($request->input('categories', []));
        } else {
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
        }

        // $lowongan = Lowongan::where('id', $request->id)->first();
        // $lowongan->delete();
        // $mitra = Lowonganmitra::where('id', $request['id'])->first();
        // if ($mitra != null) {
        //     $cek = Lowonganmitra::where('status_pemasangan', "Terpasang")->first();
        //     $mitra->status_pemasangan = $cek->status_pemasangan;
        //     $mitra->update();
        //     dd($mitra);
        // } else {
        //     echo 'gagal';
        // }
        // return request('requirements');
        Alert::success('Berhasil Menambah Lowongan', ' ');

        return redirect()->route('admin.jobs.index');
    }

    public function edit(Job $job)
    {
        // dd($job);
        $companies = Company::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $locations = Location::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $categories = Category::all()->pluck('name', 'id');

        $job->load('company', 'location', 'categories');

        return view('admin.jobs.edit', compact('companies', 'locations', 'categories', 'job'));
    }

    public function update(UpdateJobRequest $request, Job $job)
    {
        $job->update($request->all());
        $job->categories()->sync($request->input('categories', []));

        return redirect()->route('admin.jobs.index');
    }

    public function show(Job $job)
    {
        $job->load('company', 'location', 'categories');

        return view('admin.jobs.show', compact('job'));
    }

    public function destroy(Job $job)
    {
        $job->delete();

        return back();
    }

    public function massDestroy(MassDestroyJobRequest $request)
    {
        Job::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}