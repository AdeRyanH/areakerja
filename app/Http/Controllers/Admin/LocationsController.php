<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyLocationRequest;
use App\Http\Requests\StoreLocationRequest;
use App\Http\Requests\UpdateLocationRequest;
use App\Models\Location;
use App\Models\Regency;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class LocationsController extends Controller
{
    public function index()
    {
        $regencies = Regency::all();
        return view('admin.region.show', compact('regencies'));

        // $locations = Location::all();

        // return view('admin.locations.index', compact('locations'));
    }

    public function create()
    {
        return view('admin.locations.create');
    }

    public function store(StoreLocationRequest $request)
    {
        // $location = Location::create($request->all());

        $slug = Str::slug($request->get('name'));
        // dd($slug);
        // $category = Category::create($request->all());
        $location = Location::create([
            'name' => $request->name,
            'slug' => $slug,
        ]);

        return redirect()->route('admin.locations.index');
    }

    public function edit(Location $location)
    {
        return view('admin.locations.edit', compact('location'));
    }

    public function update(UpdateLocationRequest $request, Location $location)
    {
        $location->update($request->all());

        return redirect()->route('admin.locations.index');
    }

    public function show(Location $location)
    {
        return view('admin.locations.show', compact('location'));
    }

    public function destroy(Location $location)
    {
        $location->delete();

        return back();
    }

    public function massDestroy(MassDestroyLocationRequest $request)
    {
        Location::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}