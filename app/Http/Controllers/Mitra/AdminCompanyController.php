<?php

namespace App\Http\Controllers\Mitra;

use App\Models\Mitra;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdminCompanyController
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $mitra   = Mitra::where('idUser', $user_id)->first();

        return view('mitra.home', compact('mitra'));
    }

    public function out()
    {
        User::where('id', Auth::user()->id)->update(['status' => 'offline']);
        Auth::logout();

        return Redirect::to('/');
    }
}
