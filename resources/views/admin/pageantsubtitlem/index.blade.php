@extends('include.master1')

@section('content')
<div class="container mt-4">
    <h3>pageantsubtitlems</h3>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('pageantsubtitlem.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-2">
            <input type="text" name="name" class="form-control" placeholder="pageantsubtitlem Name" required>
        <button class="btn btn-primary">Create pageantsubtitlem</button>
    </form>

    <hr>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pageantsubtitlems as $pageantsubtitlem)
                <tr>
                    <td>{{ $pageantsubtitlem->name }}</td>
                    <td>
                        <a href="{{ route('pageantsubtitlem.edit', ['id' => $pageantsubtitlem->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('pageantsubtitlem.delete') }}" method="POST" style="display:inline-block">
                            @csrf
                            <input type="hidden" name="id" value="{{ $pageantsubtitlem->id }}">
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Delete?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
