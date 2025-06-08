@extends('layouts.app')

@section('content')
    <h2 class="text-xl font-bold mb-4">Edit Education</h2>

    <form action="{{ route('education.update', $education->id) }}" method="POST" class="space-y-4">
        @csrf @method('PUT')
        <input name="school" class="w-full border px-3 py-2 rounded" value="{{ old('school', $education->school) }}">
        <input name="degree" class="w-full border px-3 py-2 rounded" value="{{ old('degree', $education->degree) }}">
        <input name="start_year" class="w-full border px-3 py-2 rounded" value="{{ old('start_year', $education->start_year) }}">
        <input name="end_year" class="w-full border px-3 py-2 rounded" value="{{ old('end_year', $education->end_year) }}">
        <button class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
    </form>
@endsection
