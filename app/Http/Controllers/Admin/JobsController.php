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
use App\Models\province;
use App\Models\Regency;
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

        $kota = Regency::all();

        return view('admin.jobs.create', compact('companies', 'locations', 'categories','kota'));
    }

    public function store(Request $request)
    {
        
        $companyName      = Company::where('id', $request->company_id)->first('name');
        $slug_title       = Str::slug($request->get('title'));
        $slug_companyname = Str::slug($companyName->name);
        $slug             = $slug_title . '-di-' . $slug_companyname;
        
        $data = [
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
            'email'            => $request->email,
            'notelp'           => $request->notelp,
            'website'          => $request->website,
            'full_description' => $request->full_description,
            'slug'             => $slug,
            'categories_id'    => $request->categories[0],
            'regency_id' => $request->regency_id,
            'formulir' => $request->formulir
        ];
        // dd($data);
            $job = Job::create($data);
            $job->categories()->sync($request->input('categories', []));
        
        Alert::success('Berhasil Menambah Lowongan');

        
        return redirect()->route('admin.jobs.index');
    }

    public function edit(Job $job)
    {
        // dd($job);
        $companies = Company::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        // $locations = Location::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $categories = Category::all()->pluck('name', 'id');

        $job->load('company', 'categories');

        $kotasekarang = Regency::where('id' , $job->regency_id)->first() ;

        $kota = Regency::all();
        
        return view('admin.jobs.edit', compact('companies', 'categories', 'job', 'kota', 'kotasekarang'));
    }

    public function update(Request $request, Job $job)
    {
        $companyName      = Company::where('id', $request->company_id)->first('name');
        $slug_title       = Str::slug($request->get('title'));
        $slug_companyname = Str::slug($companyName->name);
        $slug             = $slug_title . '-di-' . $slug_companyname;

        $data = [
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
            'email'            => $request->email,
            'notelp'           => $request->notelp,
            'website'          => $request->website,
            'full_description' => $request->full_description,
            'slug'             => $slug,
            'categories_id'    => $request->categories[0],
            'regency_id' => $request-> regency_id,
            'formulir' => $request->formulir
        ];
        $job->update($data);
        $job->categories()->sync($request->input('categories', []));

        return redirect()->route('admin.jobs.index');
    }

    public function show(Job $job)
    {
        $job->load('company', 'categories');

        $kotasekarang = Regency::where('id', $job->regency_id)->first();
        

        return view('admin.jobs.show', compact('job','kotasekarang'));
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