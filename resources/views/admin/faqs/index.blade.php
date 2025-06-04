@extends('include.master1')

@section('content')
<div class="container mt-4">
    <h3>faqs</h3>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('faq.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-2">
            <input type="text" name="question" class="form-control" placeholder="faq Name" required>
        </div>
        <div class="mb-2">
            <input type="text" name="answer" class="form-control" placeholder="answer">
        </div>
        <button class="btn btn-primary">Create faq</button>
    </form>

    <hr>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Questions</th>
                <th>Ans</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($faqs as $faq)
                <tr>
                    <td>{{ $faq->question }}</td>
                    <td>{{ $faq->answer }}</td>
                    <td>
                        <a href="{{ route('faq.edit', ['id' => $faq->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('faq.delete') }}" method="POST" style="display:inline-block">
                            @csrf
                            <input type="hidden" name="id" value="{{ $faq->id }}">
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Delete?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
