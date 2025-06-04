@extends('include.master1')

@section('content')
<div class="container mt-4">
    <h3>Edit faq</h3>

    <form method="POST" action="{{ route('faq.update') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $faq->id }}">
        
        <div class="mb-2">
            <input type="text" name="name" class="form-control" value="{{ $faq->question }}" required>
        </div>
        <div class="mb-2">
            <input type="text" name="alt" class="form-control" value="{{ $faq->answer }}">
        </div>

        <button class="btn btn-primary">Update faq</button>
    </form>
</div>
@endsection