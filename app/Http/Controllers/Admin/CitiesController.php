<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\province;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = province::with('location')->get();
        // dd($data);
        return view('admin.city.show', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = province::all();
        return view('admin.city.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'province' => 'required',
            'city' => 'required'
        ]);

        $slug = Str::slug($request->city);
        
        $data = [
            'province_id' => $request->province,
            'name' => $request->city,
            'slug' => $slug
        ];
        Location::insert($data);
        
        return redirect('/admin/cities');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Location::findorfail($id);
        $prov = province::where('id' , $data->province_id)->first();
        $dataprov = province::all();
        // dd($prov);
        return view('admin.city.edit', compact('data','dataprov','prov'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $location = Location::findorfail($id);
        $request->validate([
            'province' => 'required',
            'city' => 'required'
        ]);

        $slug = Str::slug($request->city);

        $data = [
            'province_id' => $request->province,
            'name' => $request->city,
            'slug' => $slug
        ];

        $location->update($data);
        return redirect('/admin/cities')->withsucces('provinsi Baru Telah Ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Location::findorfail($id);
        $data->delete();

        return back()->withsucces('provinsi Telah Dihapus!');
    }

}