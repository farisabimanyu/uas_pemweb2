@extends('layouts.app')

@section('title', 'Edit Event')

@section('content')
<div class="container mt-5">
    <h2>Edit Event</h2>
    <form action="{{ route('events.update', $event->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="event_name">Event Name</label>
            <input type="text" class="form-control" id="event_name" name="event_name" value="{{ $event->event_name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" required>{{ $event->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="date" class="form-control" id="start_date" name="start_date" value="{{ $event->start_date }}" required>
        </div>
        <div class="form-group">
            <label for="end_date">End Date</label>
            <input type="date" class="form-control" id="end_date" name="end_date" value="{{ $event->end_date }}" required>
        </div>
        <div class="form-group">
            <label for="location_id">Location</label>
            <select class="form-control" id="location_id" name="location_id" required>
                @foreach($locations as $location)
                <option value="{{ $location->id }}" {{ $location->id == $event->location_id ? 'selected' : '' }}>{{ $location->location_name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Event</button>
    </form>
</div>
@endsection