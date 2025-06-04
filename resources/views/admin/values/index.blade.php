@extends('include.master1')

@section('content')
    <div class="container">
        <h2>Edit Dynamic Values</h2>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ route('values.update') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @php
                $fieldLabels = [
                    1 => 'Address',
                    2 => 'Contact',
                    3 => 'Branding and Marketing',
                    // 4 => 'Age',
                    // 5 => 'Gender',
                    // 6 => 'City',
                    // 7 => 'State',
                    // 8 => 'Country',
                    // 9 => 'Occupation',
                    // 10 => 'Company',
                    // 11 => 'Experience',
                    // 12 => 'Skills',
                    // 13 => 'LinkedIn Profile',
                    // 14 => 'Portfolio URL',
                    // 15 => 'Availability',
                    // 16 => 'Expected Salary',
                    // 17 => 'Preferred Location',
                    // 18 => 'Reference Name',
                    // 19 => 'Reference Contact',
                    // 20 => 'Notes',
                ];
            @endphp

            @foreach ($fieldLabels as $index => $label)
                @php $field = "value_$index"; @endphp
                <div class="mb-3">
                    <label for="{{ $field }}" class="form-label">{{ $label }}</label>

                    @if ($index === 3)
                        <input type="file" class="form-control" name="{{ $field }}" id="{{ $field }}">
                        @if (!empty($value->$field))
                            <div class="mt-2">
                                <img src="{{ asset($value->$field) }}" alt="Uploaded Image" width="150">
                            </div>
                        @endif
                    @else
                        <input type="text" class="form-control" name="{{ $field }}" id="{{ $field }}"
                            value="{{ $value->$field ?? '' }}">
                    @endif
                </div>
            @endforeach

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
