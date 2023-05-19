<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class IdSuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acc = User::where('name', 'SuperAdmin')->get();
        return view('superadmin.idsuperadmin.index', compact('acc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $acc = User::findorfail($id);

        return view('superadmin.idsuperadmin.edit', compact('acc'));
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
        $user = User::find($id);

        $request->validate([
            'superadmin_password' => 'required',
            'new_password_confirmation' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $verified = Hash::check($request->superadmin_password, $user->password);

        if ($verified) {
            $acc = User::findorfail($id);
            $newPassword = $request->input('new_password');
            $acc->password = Hash::make($newPassword);
            $acc->save();

            Alert::success('Berhasil!', 'berhasil memperbarui password superadmin');
            return redirect('superadmin/superadmin ');
        } else {
            return back()->with('old_password' , 'old password is incorrect');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}