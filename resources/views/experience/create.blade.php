@extends('layouts.app')

@section('content')
    <h2 class="text-xl font-bold mb-4">Add Experience</h2>

    <form action="{{ route('experience.store') }}" method="POST" class="space-y-4">
        @csrf
        <input name="title" placeholder="Job Title" class="w-full border px-3 py-2 rounded" value="{{ old('title') }}">
        <input name="company" placeholder="Company" class="w-full border px-3 py-2 rounded" value="{{ old('company') }}">
        <input name="start_year" placeholder="Start Year" class="w-full border px-3 py-2 rounded" value="{{ old('start_year') }}">
        <input name="end_year" placeholder="End Year" class="w-full border px-3 py-2 rounded" value="{{ old('end_year') }}">
        <textarea name="description" placeholder="Description" class="w-full border px-3 py-2 rounded">{{ old('description') }}</textarea>
        <button class="bg-green-500 text-white px-4 py-2 rounded">Save</button>
    </form>
@endsection
