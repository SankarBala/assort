<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectType;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        view()->share('projects', Project::all());
        view()->share('project_types', ProjectType::all());
        return view('admin.home');
    }

    public function site_details()
    {
        return view('admin.site');
    }

    public function site_edit()
    {
        return view('admin.site-edit');
    }

    public function site_logo()
    {
        return view('admin.site-logo');
    }
}
