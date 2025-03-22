<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $title = "About Us";
        $item = CompanyProfile::first();
        return view('frontend.pages.about', compact('title', 'item'));
    }
}
