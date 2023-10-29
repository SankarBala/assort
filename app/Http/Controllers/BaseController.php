<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{

    public function home()
    {
        return view('home');
    }

    public function term_of_use()
    {
        return view('term-of-use');
    }

    public function message_from_md()
    {
        return view('message-from-md');
    }

    public function contact_us()
    {
        return view('contact-us');
    }

    public function about_us()
    {
        return view('about-us');
    }
}
