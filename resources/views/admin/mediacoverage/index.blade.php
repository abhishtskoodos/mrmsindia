@extends('include.master1')

@section('content')
<div class="container mt-4">
    <h3>mediacoverages</h3>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('mediacoverage.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-2">
            <input type="text" name="name" class="form-control" placeholder="mediacoverage Name" required>
        </div>
        <div class="mb-2">
            <input type="text" name="alt" class="form-control" placeholder="Alt Text">
        </div>
        <div class="mb-2">
            <input type="text" name="title" class="form-control" placeholder="Title">
        </div>
        <div class="mb-2">
            <input type="text" name="description" class="form-control" placeholder="description">
        </div>
        <div class="mb-2">
            <input type="file" name="image" class="form-control">
        </div>
        <button class="btn btn-primary">Create mediacoverage</button>
    </form>

    <hr>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Alt</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mediacoverages as $mediacoverage)
                <tr>
                    <td>{{ $mediacoverage->name }}</td>
                    <td>{{ $mediacoverage->alt }}</td>
                    <td>{{ $mediacoverage->title }}</td>
                    <td>{{ $mediacoverage->description }}</td>
                    <td>
                        @if($mediacoverage->image)
                            <img src="{{ asset($mediacoverage->image) }}" width="50">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('mediacoverage.edit', ['id' => $mediacoverage->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('mediacoverage.delete') }}" method="POST" style="display:inline-block">
                            @csrf
                            <input type="hidden" name="id" value="{{ $mediacoverage->id }}">
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Delete?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
