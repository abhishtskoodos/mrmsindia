@extends('include.master1')

@section('content')
<div class="container mt-4">
    <h3>Edit media</h3>

    <form method="POST" action="{{ route('media.update') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $media->id }}">
        
        <div class="mb-2">
            <input type="text" name="name" class="form-control" value="{{ $media->name }}" required>
        </div>
        <div class="mb-2">
            <input type="text" name="alt" class="form-control" value="{{ $media->alt }}">
        </div>
        <div class="mb-2">
            <input type="file" name="image" class="form-control">
            @if($media->image)
            <img src="{{ asset($media->image) }}" width="50">
        @endif
        </div>

        <button class="btn btn-primary">Update media</button>
    </form>
</div>
@endsection
