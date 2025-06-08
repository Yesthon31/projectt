@extends('layouts.app')

@section('content')
    <h2 class="text-xl font-bold mb-4">Add About Info</h2>

    <form action="{{ route('about.store') }}" method="POST" class="space-y-4">
        @csrf
        <input name="name" placeholder="Name" class="w-full border px-3 py-2 rounded" value="{{ old('name') }}">
        <input name="major" placeholder="Major" class="w-full border px-3 py-2 rounded" value="{{ old('major') }}">
        <input name="phone" placeholder="Phone" class="w-full border px-3 py-2 rounded" value="{{ old('phone') }}">
        <textarea name="description" placeholder="Description" class="w-full border px-3 py-2 rounded">{{ old('description') }}</textarea>
        <button class="bg-green-500 text-white px-4 py-2 rounded">Save</button>
    </form>
@endsection
