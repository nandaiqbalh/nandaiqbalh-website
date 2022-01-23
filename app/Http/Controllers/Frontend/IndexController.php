<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function aboutUs()
    {
        return view('frontend.section.about_us');
    }

    public function portfolio()
    {
        return view('frontend.section.portfolio');
    }

    public function blogHome()
    {
        return view('frontend.section.blog.home_blog');
    }

    public function contact()
    {
        return view('frontend.section.contact');
    }
}
