<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Location;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::with('location')->get();
        return view('events.index', compact('events'));
    }

    public function create()
    {
        $locations = Location::all();
        return view('events.create', compact('locations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'event_name' => 'required',
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'location_id' => 'required|exists:locations,id'
        ]);

        Event::create($request->all());
        return redirect()->route('events.index')->with('success', 'Event created successfully.');
    }

    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    public function edit(Event $event)
    {
        $locations = Location::all();
        return view('events.edit', compact('event', 'locations'));
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'event_name' => 'required',
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'location_id' => 'required|exists:locations,id'
        ]);

        $event->update($request->all());
        return redirect()->route('events.index')->with('success', 'Event updated successfully.');
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index')->with('success', 'Event deleted successfully.');
    }
}
