@extends('layouts.admin')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">Home Page Content</h2>
        <a href="{{ route('home.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">+ Add</a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid gap-4">
        @foreach($homes as $home)
            <div class="p-4 bg-white rounded shadow">
                <h3 class="text-lg font-semibold">{{ $home->title }}</h3>
                <p class="text-gray-700">{{ $home->description }}</p>
                <div class="mt-2 flex gap-2">
                    <a href="{{ route('home.edit', $home->id) }}" class="text-blue-600">Edit</a>
                    <form action="{{ route('home.destroy', $home->id) }}" method="POST">
                        @csrf @method('DELETE')
                        <button class="text-red-600" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
