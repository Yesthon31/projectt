@extends('layouts.app')

@section('content')
    <h2 class="text-xl font-bold mb-4">Add Skill</h2>

    <form action="{{ route('skill.store') }}" method="POST" class="space-y-4">
        @csrf
        <input name="name" placeholder="Skill Name" class="w-full border px-3 py-2 rounded" value="{{ old('name') }}">
        <input type="number" name="level" placeholder="Skill Level (%)" class="w-full border px-3 py-2 rounded" value="{{ old('level') }}">
        <button class="bg-green-500 text-white px-4 py-2 rounded">Save</button>
    </form>
@endsection
