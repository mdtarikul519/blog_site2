<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $data = Banner::first();
        return view('website.index', compact('data'));
    }
}
