<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PreviousEvent;
use Illuminate\Http\Request;

class PreviousEventController extends Controller
{
    public function show($slug)
    {
        $item = PreviousEvent::where('slug', $slug)->firstOrFail();
        $title = 'Detail Event';
        return view('frontend.pages.previous-event.show', compact('title', 'item'));
    }
}
