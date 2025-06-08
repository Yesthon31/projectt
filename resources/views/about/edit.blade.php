@extends('layouts.app')

@section('content')
    <h2 class="text-xl font-bold mb-4">Edit About Info</h2>

    <form action="{{ route('about.update', $about->id) }}" method="POST" class="space-y-4">
        @csrf @method('PUT')
        <input name="name" class="w-full border px-3 py-2 rounded" value="{{ old('name', $about->name) }}">
        <input name="major" class="w-full border px-3 py-2 rounded" value="{{ old('major', $about->major) }}">
        <input name="phone" class="w-full border px-3 py-2 rounded" value="{{ old('phone', $about->phone) }}">
        <textarea name="description" class="w-full border px-3 py-2 rounded">{{ old('description', $about->description) }}</textarea>
        <button class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
    </form>
@endsection
