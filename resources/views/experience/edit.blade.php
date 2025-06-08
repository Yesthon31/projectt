@extends('layouts.app')

@section('content')
    <h2 class="text-xl font-bold mb-4">Edit Experience</h2>

    <form action="{{ route('experience.update', $experience->id) }}" method="POST" class="space-y-4">
        @csrf @method('PUT')
        <input name="title" class="w-full border px-3 py-2 rounded" value="{{ old('title', $experience->title) }}">
        <input name="company" class="w-full border px-3 py-2 rounded" value="{{ old('company', $experience->company) }}">
        <input name="start_year" class="w-full border px-3 py-2 rounded" value="{{ old('start_year', $experience->start_year) }}">
        <input name="end_year" class="w-full border px-3 py-2 rounded" value="{{ old('end_year', $experience->end_year) }}">
        <textarea name="description" class="w-full border px-3 py-2 rounded">{{ old('description', $experience->description) }}</textarea>
        <button class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
    </form>
@endsection
