@extends('include.master1')

@section('content')
<div class="container mt-4">
    <h3>Edit pageantsubtitlef</h3>

    <form method="POST" action="{{ route('pageantsubtitlef.update') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $pageantsubtitlef->id }}">
        
        <div class="mb-2">
            <input type="text" name="name" class="form-control" value="{{ $pageantsubtitlef->name }}" required>
        </div>

        <button class="btn btn-primary">Update pageantsubtitlef</button>
    </form>
</div>
@endsection
