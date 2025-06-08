@extends('layouts.app')

@section('content')
    <h2 class="text-xl font-bold mb-4">Add Education</h2>

    <form action="{{ route('education.store') }}" method="POST" class="space-y-4">
        @csrf
        <input name="school" placeholder="School Name" class="w-full border px-3 py-2 rounded" value="{{ old('school') }}">
        <input name="degree" placeholder="Degree" class="w-full border px-3 py-2 rounded" value="{{ old('degree') }}">
        <input name="start_year" placeholder="Start Year" class="w-full border px-3 py-2 rounded" value="{{ old('start_year') }}">
        <input name="end_year" placeholder="End Year" class="w-full border px-3 py-2 rounded" value="{{ old('end_year') }}">
        <button class="bg-green-500 text-white px-4 py-2 rounded">Save</button>
    </form>
@endsection
