@extends('include.master1')

@section('content')
<div class="container mt-4">
    <h3>Edit category</h3>

    <form method="POST" action="{{ route('category.update') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $category->id }}">
        
        <div class="mb-2">
            <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
        </div>
        <div class="mb-2">
            <input type="text" name="alt" class="form-control" value="{{ $category->alt }}">
        </div>
        <div class="mb-2">
            <input type="file" name="image" class="form-control">
            @if($category->image)
            <img src="{{ asset($category->image) }}" width="50">
        @endif
        </div>

        <button class="btn btn-primary">Update category</button>
    </form>
</div>
@endsection