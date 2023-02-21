<?php

namespace App\Http\Controllers\Admin;

use App\Models\cabang;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File; 
use Illuminate\Http\Request;

class CabangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cabang = cabang::all();
        return view('admin.cabang.show',compact('cabang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cabang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecabangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'cabang' => 'required',
            'url' => 'required',
            'logo' => 'image'
        ]);
        
        $namaFile = time() . '.' . $request->logo->extension();
        $request->logo->move(public_path('img/logo_cabang'), $namaFile);

        $data = [
            'cabang' => $request->cabang,
            'url' => $request->url,
            'logo' => $namaFile,
        ];

        cabang::insert($data);
        return redirect('/admin/cabang')->withsucces('Cabang Baru Telah Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cabang  $cabang
     * @return \Illuminate\Http\Response
     */
    public function show(cabang $cabang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cabang  $cabang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = cabang::findorfail($id);
        return view('admin.cabang.edit' , compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecabangRequest  $request
     * @param  \App\Models\cabang  $cabang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $cabang = cabang::findorfail($id);
        $request->validate([
            'cabang' => 'required',
            'url' => 'required',
            'logo' => 'image'
        ]);

        if ($request->logo){
            $namaFile = time() . '.' . $request->logo->extension();
            $request->logo->move(public_path('img/logo_cabang'), $namaFile);

            $path = public_path('img/logo_cabang/' . $request->logo_lama);
            File::delete($path);
            
        } else {
            $namaFile = $request->logo_lama;
            
        }
        
        $data = [
            'cabang' => $request->cabang,
            'url' => $request->url,
            'logo' => $namaFile,
        ];

        $cabang->update($data);
        return redirect('/admin/cabang')->withsucces('Cabang Baru Telah Ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cabang  $cabang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = cabang::findorfail($id);
        $data->delete();
        $path = public_path('img/logo_cabang/' . $data->logo);
        File::delete($path);

        return back();
    }
}