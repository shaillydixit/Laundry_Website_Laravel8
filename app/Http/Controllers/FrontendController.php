<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{


    public function About()
    {
        return view('about');
    }

    public function Contact()
    {
        return view('contact');
    }

    public function OurServices()
    {
        return view('ourservices');
    }

    public function Pricing()
    {
        return view('pricing');
    }

    public function TermAndConditions()
    {
        return view('terms');
    }
}
