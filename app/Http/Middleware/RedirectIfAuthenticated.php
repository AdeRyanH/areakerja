<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param string|null              $guard
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // $role = Auth::user()->role;

        $roles = [
            1 => 'admin',
            3 => 'mitra',
            4 => 'kandidat',
        ];

        if (Auth::check()) {
            $expiresAt = now()->addMinutes(2); // keep online for 2 min
            Cache::put('user-is-online-' . Auth::user()->id, true, $expiresAt);

            // last seen
            User::where('id', Auth::user()->id)->update(['status' => 'online']);

            if (! empty(Auth::user()->role_user()->first()->role_id)) {
                return redirect('/' . $roles[Auth::user()->role_user()->first()->role_id]);
            }
        }

        return $next($request);
    }
}
