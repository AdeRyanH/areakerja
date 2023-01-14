<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use App\Models\Mitra;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $mitra   = Mitra::where('idUser', $user_id)->first();
        // $akunmitra = Mitra::where('id',$id)->first();
        $user = User::where('id', $user_id)->first();

        return view('mitra.user.index', compact('mitra', 'user'));
    }

    public function store(Request $request)
    {
        $user_id = auth()->user()->id;
        $mitra   = Mitra::where('idUser', $user_id)->first();
        $user    = User::where('id', $user_id)->first();
        $user->update([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return view('mitra.home', compact('mitra'));
    }
}
