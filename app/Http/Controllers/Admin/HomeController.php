<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;

class HomeController
{
    public function index()
    {
        $jobs       = DB::table('jobs')->count();
        $companies  = DB::table('companies')->count();
        $categories = DB::table('categories')->count();
        $locations  = DB::table('locations')->count();

        return view('admin.home', compact(['jobs', 'companies', 'categories', 'locations']));
    }
}
