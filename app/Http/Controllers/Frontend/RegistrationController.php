<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        $event = Event::where('slug', request('slug'))->firstOrFail();
        $step = request('step', 1);
        return view('frontend.pages.registration.step1', compact('event', 'step'));
    }

    public function step2()
    {
        $reqAll = request()->except('_token', 'step2');
        $step = 2;
        $reqJson = json_encode($reqAll);
        return view('frontend.pages.registration.step2', compact('reqJson', 'step'));

    }
    public function step3()
    {
        $reqAll = request()->except('_token', 'step3');
        $step = 3;
        $reqJson = json_encode($reqAll);
        return view('frontend.pages.registration.step3', compact('reqJson', 'step'));

    }
    public function step4()
    {
        $reqAll = request()->except('_token', 'step4');
        $step = 3;
        $reqJson = json_encode($reqAll);
        return view('frontend.pages.registration.step4', compact('reqJson', 'step'));

    }
}
