<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layouts.main', 'App\Http\View\Composers\SidebarComposer');

        Blade::if('admin', static fn () => Auth::check() && Auth::User()->role_user()->first()->role_id === 1);
        Blade::if('mitra', static fn () => Auth::check() && in_array(Auth::User()->role_user()->first()->role_id, [3], true));
        Blade::if('kandidat', static fn () => Auth::check() && in_array(Auth::User()->role_user()->first()->role_id, [4], true));
    }
}
