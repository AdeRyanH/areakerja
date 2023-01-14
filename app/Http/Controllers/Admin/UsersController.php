<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Company;
use App\Models\Mitra;
use App\Models\Role;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::all()->pluck('title', 'id');

        $mitra = Mitra::all()->pluck('nama');

        return view('admin.users.create', compact('roles', 'mitra'));
    }

    public function store(StoreUserRequest $request)
    {
        $mitra = Mitra::where('email', $request['email'])->first();
        // dd($mitra);
        if ($mitra !== null) {
            $user = User::create($request->all());
            $user->roles()->sync($request->input('roles', []));
            $cek           = User::where('email', $request['email'])->first();
            $mitra->idUser = $cek->id;
            $mitra->update();

            Company::create([
                'name'      => $request->name,
                'deskripsi' => $mitra->deskripsi,
                'alamat'    => $mitra->alamat,
                'gambar'    => $mitra->logo,
                'slug'      => $request->name,
            ]);

            return redirect()->route('admin.users.index');
        }

        return redirect()->route('admin.users.index');
    }

    public function edit(User $user)
    {
        $roles = Role::all()->pluck('title', 'id');

        $user->load('roles');

        return view('admin.users.edit', compact('roles', 'user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->all());
        $user->roles()->sync($request->input('roles', []));

        return redirect()->route('admin.users.index');
    }

    public function show(User $user)
    {
        $user->load('roles');

        return view('admin.users.show', compact('user'));
    }

    public function destroy(User $user)
    {
        $user->delete();

        return back();
    }

    public function massDestroy(MassDestroyUserRequest $request)
    {
        User::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
