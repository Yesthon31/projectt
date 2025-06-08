@extends('layouts.admin')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">About Me</h2>
        <a href="{{ route('about.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">+ Add</a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @foreach($abouts as $about)
        <div class="bg-white p-4 rounded shadow mb-4">
            <h3 class="text-lg font-semibold">{{ $about->name }}</h3>
            <p><strong>Major:</strong> {{ $about->major }}</p>
            <p><strong>Phone:</strong> {{ $about->phone }}</p>
            <p class="mt-2">{{ $about->description }}</p>
            <div class="mt-2 flex gap-2">
                <a href="{{ route('about.edit', $about->id) }}" class="text-blue-600">Edit</a>
                <form action="{{ route('about.destroy', $about->id) }}" method="POST">
                    @csrf @method('DELETE')
                    <button class="text-red-600" onclick="return confirm('Delete this?')">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
@endsection
