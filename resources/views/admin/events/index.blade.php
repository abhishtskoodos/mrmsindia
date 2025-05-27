@extends('include.master1')

@section('content')
<div class="container mt-4">
    <h3>Events</h3>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('event.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-2">
            <input type="text" name="name" class="form-control" placeholder="Event Name" required>
        </div>
        <div class="mb-2">
            <input type="text" name="alt" class="form-control" placeholder="Alt Text">
        </div>
        <div class="mb-2">
            <input type="file" name="image" class="form-control">
        </div>
        <button class="btn btn-primary">Create Event</button>
    </form>

    <hr>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Alt</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
                <tr>
                    <td>{{ $event->name }}</td>
                    <td>{{ $event->alt }}</td>
                    <td>
                        @if($event->image)
                            <img src="{{ asset($event->image) }}" width="50">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('event.edit', ['id' => $event->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('event.delete') }}" method="POST" style="display:inline-block">
                            @csrf
                            <input type="hidden" name="id" value="{{ $event->id }}">
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Delete?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
