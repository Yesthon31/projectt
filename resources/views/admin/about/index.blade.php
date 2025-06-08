@extends('layouts.admin')

@section('content')
    <div class="flex items-center justify-between mb-4">
        <h2 class="text-2xl font-semibold">About</h2>
        <a href="{{ route('about.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">+ Tambah</a>
    </div>

    @if (session('success'))
        <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white shadow rounded overflow-x-auto">
        <table class="min-w-full">
            <thead class="bg-gray-100">
                <tr>
                    <th class="text-left p-4">Judul</th>
                    <th class="text-left p-4">Deskripsi</th>
                    <th class="text-left p-4">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($abouts as $about)
                    <tr class="border-t">
                        <td class="p-4">{{ $about->title }}</td>
                        <td class="p-4">{{ Str::limit($about->description, 50) }}</td>
                        <td class="p-4 space-x-2">
                            <a href="{{ route('about.edit', $about->id) }}" class="text-blue-600 hover:underline">Edit</a>
                            <form action="{{ route('about.destroy', $about->id) }}" method="POST" class="inline">
                                @csrf @method('DELETE')
                                <button onclick="return confirm('Yakin hapus?')" class="text-red-600 hover:underline">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
