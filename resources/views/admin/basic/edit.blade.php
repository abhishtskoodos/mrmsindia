@extends('include.master1')

@section('content')
<div class="container mt-4">
    <h3>Edit {{ $title }}</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route($route_prefix . '.update') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $record->id }}">

        @foreach($inputfields as $field)
            <div class="mb-3">
                @if($field === 'image')
                    <input type="file" name="{{ $field }}" class="form-control">
                    @if(!empty($record->$field))
                        <img src="{{ asset($record->$field) }}" width="60" class="mt-1">
                    @endif
                @elseif($field === 'description')
                    <textarea name="{{ $field }}" class="form-control" rows="4">{{ $record->$field }}</textarea>
                @else
                    <input type="text" name="{{ $field }}" class="form-control" value="{{ $record->$field }}">
                @endif
            </div>
        @endforeach

        <button class="btn btn-primary">Update {{ $title }}</button>
    </form>
</div>
@endsection
