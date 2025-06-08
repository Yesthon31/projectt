@extends('layouts.admin')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">Education</h2>
        <a href="{{ route('education.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">+ Add</a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid gap-4">
        @foreach($educations as $edu)
            <div class="bg-white p-4 rounded shadow">
                <h3 class="text-lg font-semibold">{{ $edu->school }}</h3>
                <p>{{ $edu->degree }}</p>
                <p class="text-sm text-gray-600">{{ $edu->start_year }} - {{ $edu->end_year }}</p>
                <div class="mt-2 flex gap-2">
                    <a href="{{ route('education.edit', $edu->id) }}" class="text-blue-600">Edit</a>
                    <form action="{{ route('education.destroy', $edu->id) }}" method="POST">
                        @csrf @method('DELETE')
                        <button class="text-red-600" onclick="return confirm('Delete this education?')">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
