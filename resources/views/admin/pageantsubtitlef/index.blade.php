@extends('include.master1')

@section('content')
<div class="container mt-4">
    <h3>pageantsubtitlefs</h3>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('pageantsubtitlef.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-2">
            <input type="text" name="name" class="form-control" placeholder="pageantsubtitlef Name" required>
        <button class="btn btn-primary">Create pageantsubtitlef</button>
    </form>

    <hr>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pageantsubtitlefs as $pageantsubtitlef)
                <tr>
                    <td>{{ $pageantsubtitlef->name }}</td>
                    <td>
                        <a href="{{ route('pageantsubtitlef.edit', ['id' => $pageantsubtitlef->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('pageantsubtitlef.delete') }}" method="POST" style="display:inline-block">
                            @csrf
                            <input type="hidden" name="id" value="{{ $pageantsubtitlef->id }}">
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Delete?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
