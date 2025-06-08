@extends('include.master1')

@section('content')
<div class="container mt-4">
    <h3>{{ $title ?? 'Records' }}</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Create Form --}}
    <form method="POST" action="{{ route($route_prefix . '.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            @foreach($inputfields as $field)
                <div class="col-md-4 mb-3">
                    @if($field === 'image')
                        <input type="file" name="{{ $field }}" class="form-control">
                    @else
                        <input type="text" name="{{ $field }}" class="form-control" placeholder="{{ ucfirst($field) }}">
                    @endif
                </div>
            @endforeach
        </div>
        <button class="btn btn-primary">Create {{ $title ?? 'Record' }}</button>
    </form>

    <hr>

    {{-- Table --}}
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                @foreach($inputfields as $field)
                    <th>{{ ucfirst($field) }}</th>
                @endforeach
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($records as $record)
                <tr>
                    @foreach($inputfields as $field)
                        <td>
                            @if($field === 'image' && !empty($record->$field))
                                <img src="{{ asset($record->$field) }}" width="50">
                            @else
                                {{ $record->$field }}
                            @endif
                        </td>
                    @endforeach
                    <td>
                        <a href="{{ route($route_prefix . '.edit', ['id' => $record->id]) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route($route_prefix . '.delete') }}" method="POST" style="display:inline-block">
                            @csrf
                            <input type="hidden" name="id" value="{{ $record->id }}">
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this item?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
