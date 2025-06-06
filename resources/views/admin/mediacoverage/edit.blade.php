@extends('include.master1')

@section('content')
<div class="container mt-4">
    <h3>Edit mediacoverage</h3>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form method="POST" action="{{ route('mediacoverage.update') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $mediacoverage->id }}">
        
        <div class="mb-2">
            <input type="text" name="name" class="form-control" value="{{ $mediacoverage->name }}" required>
        </div>
        <div class="mb-2">
            <input type="text" name="alt" class="form-control" value="{{ $mediacoverage->alt }}">
        </div>
        <div class="mb-2">
            <input type="text" name="title" class="form-control" value="{{ $mediacoverage->title }}">
        </div>
        <div class="mb-2">
            <input type="text" name="description" class="form-control" value="{{ $mediacoverage->description }}">
        </div>
        <div class="mb-2">
            <input type="file" name="image" class="form-control">
            @if($mediacoverage->image)
            <img src="{{ asset($mediacoverage->image) }}" width="50">
        @endif
        </div>
        <button class="btn btn-primary">Update mediacoverage</button>
    </form>
</div>
@endsection
