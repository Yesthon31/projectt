@extends('layouts.admin')

@section('content')
    <h2 class="text-xl font-bold mb-4">Edit About</h2>

    <form method="POST" action="{{ route('admin.about.update', $about) }}" class="bg-white p-6 rounded shadow space-y-4">
        @csrf @method('PUT')
        <div>
            <label class="block text-gray-700">Deskripsi</label>
            <textarea name="description" class="w-full border rounded p-2">{{ old('description', $about->description) }}</textarea>
            @error('description')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
    </form>
@endsection
