<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Banner;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    { 
           $data = Banner::first();
        return view('website.index', compact('data'));
    }

    public function about()
    { 
           $data = About::first();
        return view('website.index', compact('data'));
    }
}
    
