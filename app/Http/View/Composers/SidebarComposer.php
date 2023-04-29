<?php

namespace App\Http\View\Composers;

use App\Models\Category;
use App\Models\Job;
use App\Models\Location;
use App\Models\Province;
use App\Models\Regency;
use Illuminate\View\View;

class SidebarComposer
{
    /**
     * Bind data to the view.
     *
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('sidebarLocations', Regency::withCount('jobs')->whereHas('jobs')->orderBy('jobs_count', 'desc')->take(5)->get());
        $view->with('sidebarJobs', Job::whereTopRated(true)->orderBy('id', 'desc')->take(5)->get());
        $view->with('sidebarCategories', Category::withCount('jobs')->whereHas('jobs')->orderBy('jobs_count', 'desc')->get());
        $view->with('provinsi' , Province::all());
    }
}