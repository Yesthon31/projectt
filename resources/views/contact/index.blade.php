@extends('layouts.admin')

@section('content')
    <div class="flex justify-between mb-4">
        <h2 class="text-2xl font-semibold">Contact</h2>
        <a href="{{ route('contact.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">+ Tambah</a>
    </div>

    <div class="bg-white shadow rounded overflow-x-auto">
        <table class="min-w-full">
                <tr>
                    <th class="p-4">Nama</th>
                    <th class="p-4">Email</th>
                    <th class="p-4">Pesan</th>
                </tr>
            <tbody>
                @foreach ($contacts as $c)
                    <tr class="border-t">
                        <td class="p-4">{{ $c->name }}</td>
                        <td class="p-4">{{ $c->email }}</td>
                        <td class="p-4">{{ Str::limit($c->message, 50) }}</td>
                        <td class="p-4 space-x-2">
                            <a href="{{ route('contact.edit', $c->id) }}" class="text-blue-600 hover:underline">Edit</a>
                            <form action="{{ route('contact.destroy', $c->id) }}" method="POST" class="inline">
                                @csrf @method('DELETE')
                                <button onclick="return confirm('Hapus?')" class="text-red-600 hover:underline">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
