@extends('layouts.admin')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">Experience</h2>
        <a href="{{ route('experience.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">+ Add</a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid gap-4">
        @foreach($experiences as $exp)
            <div class="bg-white p-4 rounded shadow">
                <h3 class="text-lg font-semibold">{{ $exp->title }}</h3>
                <p class="text-sm text-gray-700">{{ $exp->company }} ({{ $exp->start_year }} - {{ $exp->end_year }})</p>
                <p class="mt-1 text-gray-600">{{ $exp->description }}</p>
                <div class="mt-2 flex gap-2">
                    <a href="{{ route('experience.edit', $exp->id) }}" class="text-blue-600">Edit</a>
                    <form action="{{ route('experience.destroy', $exp->id) }}" method="POST">
                        @csrf @method('DELETE')
                        <button class="text-red-600" onclick="return confirm('Delete this experience?')">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
