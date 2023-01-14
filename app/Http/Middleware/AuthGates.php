<?php

namespace App\Http\Middleware;

use App\Models\Role;
use App\Models\User;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthGates
{
    public function handle($request, Closure $next)
    {
        if (! Auth::check()) {
            redirect()->route('login');
        } else {
            $user = Auth::user();
            if (! app()->runningInConsole() && $user) {
                User::where('id', Auth::user()->id)->update(['status' => 'online']);
                $roles            = Role::with('permissions')->get();
                $permissionsArray = [];

                foreach ($roles as $role) {
                    foreach ($role->permissions as $permissions) {
                        $permissionsArray[$permissions->title][] = $role->id;
                    }
                }

                foreach ($permissionsArray as $title => $roles) {
                    Gate::define($title, static fn (User $user) => count(array_intersect($user->roles->pluck('id')->toArray(), $roles)) > 0);
                }
            }
        }

        return $next($request);
    }
}
