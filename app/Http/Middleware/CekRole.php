<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

// Use App\Models\Role;

class CekRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        $roles = [
            'admin'    => [1],
            'user'     => [1, 2],
            'mitra'    => [3],
            'kandidat' => [4],
            'superadmin' => [5],
        ];

        if (Auth::check() && in_array(Auth::user()->role_user()->first()->role_id, $roles[$role], true)) {
            return $next($request);
        }

        return redirect()->route('login');
        // abort(404);
    }
}