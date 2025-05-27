@extends('include.master1')

@section('content')
<div class="container mt-4">
    <h3>Edit guest</h3>

    <form method="POST" action="{{ route('guest.update') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $guest->id }}">
        
        <div class="mb-2">
            <input type="text" name="name" class="form-control" value="{{ $guest->name }}" required>
        </div>
        <div class="mb-2">
            <input type="text" name="alt" class="form-control" value="{{ $guest->alt }}">
        </div>
        <div class="mb-2">
            <input type="file" name="image" class="form-control">
            @if($guest->image)
            <img src="{{ asset($guest->image) }}" width="50">
        @endif
        </div>

        <button class="btn btn-primary">Update guest</button>
    </form>
</div>
@endsection
