@extends('layouts.app')

@section('content')
    <h2 class="text-xl font-bold mb-4">Edit Home Content</h2>

    <form action="{{ route('home.update', $home->id) }}" method="POST" class="space-y-4">
        @csrf @method('PUT')
        <div>
            <label class="block">Title</label>
            <input name="title" class="w-full border px-3 py-2 rounded" value="{{ old('title', $home->title) }}">
        </div>
        <div>
            <label class="block">Description</label>
            <textarea name="description" class="w-full border px-3 py-2 rounded">{{ old('description', $home->description) }}</textarea>
        </div>
        <button class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
    </form>
@endsection
