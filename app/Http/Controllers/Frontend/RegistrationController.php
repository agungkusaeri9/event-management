<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\RegistrationEvent;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        $event = Event::where('slug', request('slug'))->firstOrFail();
        $step = request('step', 1);
        return view('frontend.pages.registration.step1', compact('event', 'step'));
    }

    public function submit()
    {
        request()->validate([
            'event_id' => ['required', 'numeric'],
            'pax_total' => ['required', 'numeric'],
            'country' => ['required'],
            'city' => ['required'],
            'address' => ['required'],
            'postal_code' => ['required'],
            'telephone' => ['required'],
            'certificate_name' => ['required'],
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required'],
            'email_confirmation' => ['required'],
            'phone_number' => ['required'],
            'performance_type' => ['required'],
            'performance_name' => ['required'],
            'performance_minute' => ['required'],
            'music_type' => ['required'],
            'performance_number' => ['required'],
        ]);

        try {
            $data = request()->all();
            $data['user_id'] = auth()->user()->id ?? null;
            RegistrationEvent::create($data);
            return redirect()->back()->with('success', 'Event Registered Successfully.');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
