<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $items = Event::isOpen()->latest()->paginate(10);
        return view('frontend.pages.event.index', compact('items'));
    }

    public function show()
    {
        $title = 'Detail Event';
        return view('frontend.pages.event.show', compact('title'));
    }
}
