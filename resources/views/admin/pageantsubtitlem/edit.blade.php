@extends('include.master1')

@section('content')
<div class="container mt-4">
    <h3>Edit pageantsubtitlem</h3>

    <form method="POST" action="{{ route('pageantsubtitlem.update') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $pageantsubtitlem->id }}">
        
        <div class="mb-2">
            <input type="text" name="name" class="form-control" value="{{ $pageantsubtitlem->name }}" required>
        </div>

        <button class="btn btn-primary">Update pageantsubtitlem</button>
    </form>
</div>
@endsection
