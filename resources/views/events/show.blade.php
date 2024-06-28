@extends('layouts.app')

@section('title', 'Event Details')

@section('content')
<div class="container">
    <h1>Event Details</h1>
    <div class="card">
        <div class="card-header">
            Event Information
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $event->event_name }}</h5>
            <p class="card-text">{{ $event->description }}</p>
            <p class="card-text"><strong>Start Date:</strong> {{ $event->start_date }}</p>
            <p class="card-text"><strong>End Date:</strong> {{ $event->end_date }}</p>
            <p class="card-text"><strong>Location:</strong> {{ $event->location->location_name }}</p>
            <a href="{{ route('events.edit', $event->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('events.destroy', $event->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="{{ route('events.index') }}" class="btn btn-secondary">Back to Events</a>
        </div>
    </div>
</div>
@endsection