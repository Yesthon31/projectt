@extends('layouts.app')

@section('content')
    <h2 class="text-xl font-bold mb-4">About Detail</h2>

    <div class="bg-white p-4 rounded shadow">
        <h3 class="text-lg font-semibold">{{ $about->name }}</h3>
        <p><strong>Major:</strong> {{ $about->major }}</p>
        <p><strong>Phone:</strong> {{ $about->phone }}</p>
        <p class="mt-2">{{ $about->description }}</p>

        <div class="mt-4">
            <a href="{{ route('about.index') }}" class="text-blue-600">← Back to list</a>
        </div>
    </div>
@endsection
