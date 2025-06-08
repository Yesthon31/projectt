@extends('layouts.admin')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">Skills</h2>
        <a href="{{ route('skill.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">+ Add</a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid gap-4">
        @foreach($skills as $skill)
            <div class="bg-white p-4 rounded shadow">
                <div class="flex justify-between items-center">
                    <h3 class="text-lg font-semibold">{{ $skill->name }}</h3>
                    <span class="text-sm text-gray-600">{{ $skill->level }}%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-3 mt-2">
                    <div class="bg-blue-500 h-3 rounded-full" style="width: {{ $skill->level }}%"></div>
                </div>
                <div class="mt-2 flex gap-2">
                    <a href="{{ route('skill.edit', $skill->id) }}" class="text-blue-600">Edit</a>
                    <form action="{{ route('skill.destroy', $skill->id) }}" method="POST">
                        @csrf @method('DELETE')
                        <button class="text-red-600" onclick="return confirm('Delete this skill?')">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
