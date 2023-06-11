<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyCompanyRequest;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
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
        $namaFile = '/img/companylogo/' . time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('img/companylogo'), $namaFile);
        
        $slug_judul = Str::slug($request->get('name'));
        Company::insert([
            'name'      => $request->name,
            'gambar'    => $namaFile,
            'deskripsi' => $request->deskripsi,
            'alamat'    => $request->alamat,
            'slug'      => $slug_judul,
        ]);

        Alert::success('Success', 'Berhasil Menambah Company!');
        return redirect()->route('admin.companies.index');
    }

    public function edit(Company $company)
    {
        return view('admin.companies.edit', compact('company'));
    }

    public function update(Request $request, $id)
    {
        $companies = Company::find($id);
        $slug_judul = Str::slug($request->get('name'));

        if ($request->gambar) {
            $namaFile = '/img/companylogo/' . time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('img/companylogo'), $namaFile);
            unlink(public_path($companies->gambar));

            $post_data = [
                'name'      => $request->name,
                'deskripsi' => $request->deskripsi,
                'alamat'    => $request->alamat,
                'gambar'    => $namaFile,
                'slug'      => $slug_judul,
            ];
        } else {
            $post_data = [
                'name'      => $request->name,
                'deskripsi' => $request->deskripsi,
                'alamat'    => $request->alamat,
                'gambar'    => $companies->gambar,
                'slug'      => $slug_judul,
            ];   
        }
            $companies->update($post_data);

        Alert::success('Success', 'Berhasil Memperbarui Company!');
        return redirect()->route('admin.companies.index');
    }

    public function show(Company $company)
    {
        return view('admin.companies.show', compact('company'));
    }

    public function destroy(Company $company)
    {
        unlink(public_path($company->gambar));
        $company->delete();   

        return back();
    }

    public function massDestroy(MassDestroyCompanyRequest $request)
    {
        Company::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}