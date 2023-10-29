<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
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
