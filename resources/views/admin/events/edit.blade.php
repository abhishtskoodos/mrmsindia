@extends('include.master1')

@section('content')
<div class="container mt-4">
    <h3>Edit Event</h3>

    <form method="POST" action="{{ route('event.update') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $event->id }}">
        
        <div class="mb-2">
            <input type="text" name="name" class="form-control" value="{{ $event->name }}" required>
        </div>
        <div class="mb-2">
            <input type="text" name="alt" class="form-control" value="{{ $event->alt }}">
        </div>
        <div class="mb-2">
            <input type="file" name="image" class="form-control">
            @if($event->image)
            <img src="{{ asset($event->image) }}" width="50">
        @endif
        </div>

        <button class="btn btn-primary">Update Event</button>
    </form>
</div>
@endsection
