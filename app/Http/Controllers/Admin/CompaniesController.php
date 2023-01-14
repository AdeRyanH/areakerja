<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyCompanyRequest;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class CompaniesController extends Controller
{
    // use MediaUploadingTrait;

    public function index()
    {
        $companies = Company::all();

        return view('admin.companies.index', compact('companies'));
    }

    public function create()
    {
        return view('admin.companies.create');
    }

    public function store(Request $request)
    {
        // $company = Company::create($request->all());
        // $request->validate([
        //     'gambar' => 'required|gambar|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        $namaFile = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('img/companylogo'), $namaFile);
        $slug_judul = Str::slug($request->get('name'));
        Company::insert([
            'name'      => $request->name,
            'gambar'    => $namaFile,
            'deskripsi' => $request->deskripsi,
            'alamat'    => $request->alamat,
            'slug'      => $slug_judul,
        ]);

        // if ($request->input('logo', false)) {
        //     $company->addMedia(storage_path('tmp/uploads/' . $request->input('logo')))->toMediaCollection('logo');
        // }

        return redirect()->route('admin.companies.index');
    }

    public function edit(Company $company)
    {
        // dd($company);
        return view('admin.companies.edit', compact('company'));
    }

    public function update(Request $request, $id)
    {
        // $company->update($request->all());

        // if ($request->input('logo', false)) {
        //     if (!$company->logo || $request->input('logo') !== $company->logo->file_name) {
        //         $company->addMedia(storage_path('tmp/uploads/' . $request->input('logo')))->toMediaCollection('logo');
        //     }
        // } elseif ($company->logo) {
        //     $company->logo->delete();
        // }
        $companies = Company::find($id);

        if ($request->gambar !== '') {
            $path = public_path() . '/img/companylogo/';

            // code for remove old file
            if ($companies->gambar !== '' && $companies->gambar !== null) {
                $file_old = $path . $companies->gambar;
                unlink($file_old);
            }

            // upload new gambar
            $file = $request->gambar;
            // atur nama gambar dengan nama company
            $filename = Str::slug($request->name . ' ' . time(), '-') . '.' . $file->getClientOriginalExtension();
            $file->move($path, $filename);

            // for update in table
            $post_data = [
                'name'      => $request->name,
                'deskripsi' => $request->deskripsi,
                'alamat'    => $request->alamat,
                'gambar'    => $filename,
            ];

            $companies->update($post_data);
        }

        return redirect()->route('admin.companies.index');
    }

    public function show(Company $company)
    {
        return view('admin.companies.show', compact('company'));
    }

    public function destroy(Company $company)
    {
        $company->delete();

        return back();
    }

    public function massDestroy(MassDestroyCompanyRequest $request)
    {
        Company::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
