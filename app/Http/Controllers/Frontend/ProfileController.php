<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $title = 'Profile';
        return view('frontend.pages.profile.index', compact('title'));
    }

    public function update()
    {
        request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required'],
            'phone_number' => ['required'],
        ]);


        try {
            $data = request()->all();
            $data['name'] = request('first_name') . ' ' . request('last_name');
            $user = auth()->user()->update($data);
            Auth::login($user->fresh());
            return redirect()->back()->with('success', 'Profile updated successfully');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
