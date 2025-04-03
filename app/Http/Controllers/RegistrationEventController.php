<?php

namespace App\Http\Controllers;

use App\Models\RegistrationEvent;
use Illuminate\Http\Request;

class RegistrationEventController extends Controller
{
    public function index()
    {
        $items = RegistrationEvent::latest()->get();
        return view('pages.registration-event.index', [
            'title' => 'Registration Event',
            'items' => $items
        ]);
    }

    public function show($id)
    {
        $item = RegistrationEvent::with(['event', 'user'])->findOrFail($id);
        return view('pages.registration-event.show', [
            'title' => 'Detail Registration Event',
            'item' => $item,
        ]);
    }

    public function update_status()
    {
        $id = request('id');
        $status = request('status');
        $item = RegistrationEvent::findOrFail($id);
        $item->update([
            'status' => $status
        ]);
        return redirect()->back()->with('success', 'Status updated successfully');
    }

    public function ticket($id)
    {
        $item = RegistrationEvent::with(['event', 'user'])->findOrFail($id);
        return view('pages.registration-event.ticket', [
            'title' => 'Ticket Registration Event',
            'item' => $item,
        ]);
    }

    public function upload_ticket($id)
    {
        request()->validate([
            'file' => ['required', 'mimes:pdf']
        ]);


        $item = RegistrationEvent::with(['event', 'user'])->findOrFail($id);

        $item->update([
            'ticket_file' => request()->file('file')->store('ticket', 'public')
        ]);

        return redirect()->back()->with('success', 'Ticket uploaded successfully');
    }
}
