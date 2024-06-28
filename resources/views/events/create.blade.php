@extends('layouts.app')

@section('title', 'Create Event')

@section('content')
<div class="container">
    <h1>Create Event</h1>
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('events.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="event_name">Event Name</label>
            <input type="text" class="form-control" id="event_name" name="event_name" value="{{ old('event_name') }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" required>{{ old('description') }}</textarea>
        </div>
        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="datetime-local" class="form-control" id="start_date" name="start_date" value="{{ old('start_date') }}" required>
        </div>
        <div class="form-group">
            <label for="end_date">End Date</label>
            <input type="datetime-local" class="form-control" id="end_date" name="end_date" value="{{ old('end_date') }}" required>
        </div>
        <div class="form-group">
            <label for="location_id">Location</label>
            <select class="form-control" id="location_id" name="location_id" required>
                @foreach($locations as $location)
                <option value="{{ $location->id }}" {{ old('location_id') == $location->id ? 'selected' : '' }}>{{ $location->location_name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection