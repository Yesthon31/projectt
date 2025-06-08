@extends('layouts.app')

@section('content')
    <h2 class="text-xl font-bold mb-4">Edit Skill</h2>

    <form action="{{ route('skill.update', $skill->id) }}" method="POST" class="space-y-4">
        @csrf @method('PUT')
        <input name="name" class="w-full border px-3 py-2 rounded" value="{{ old('name', $skill->name) }}">
        <input type="number" name="level" class="w-full border px-3 py-2 rounded" value="{{ old('level', $skill->level) }}">
        <button class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
    </form>
@endsection
