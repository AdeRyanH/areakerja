<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPriceRequest;
use App\Http\Requests\StorePriceRequest;
use App\Http\Requests\UpdatePriceRequest;
use App\Models\Job;
use App\Models\Price;
use Symfony\Component\HttpFoundation\Response;

class PriceController extends Controller
{
    public function index()
    {
        $prices = Price::all();
        $jobs   = Job::all();

        return view('admin.price.index', compact('prices', 'jobs'));
    }

    public function create()
    {
        return view('admin.price.create');
    }

    public function store(StorePriceRequest $request)
    {
        $price = Price::create([
            'nama'              => $request->nama,
            'deskripsi_singkat' => $request->deskripsi_singkat,
            'deskripsi_full'    => $request->deskripsi_full,
            'list'              => $request->list,
            'harga'             => $request->harga,
            'warna'             => $request->warna,
        ]);

        return redirect()->route('admin.price.index');
    }

    public function edit(Price $price)
    {
        return view('admin.price.edit', compact('price'));
    }

    public function update(UpdatePriceRequest $request, Price $price)
    {
        $price->update($request->all());

        return redirect()->route('admin.price.index');
    }

    public function show(Price $price)
    {
        return view('admin.price.show', compact('price'));
    }

    public function destroy(Price $price)
    {
        $price->delete();

        return back();
    }

    public function massDestroy(MassDestroyPriceRequest $request)
    {
        Price::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
