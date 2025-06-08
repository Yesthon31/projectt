@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto mt-10 bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4 text-center">Admin Login</h2>

    @if($errors->any())
        <div class="bg-red-100 text-red-700 p-2 rounded mb-4">
            {{ $errors->first() }}
        </div>
    @endif

    <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-4">
        @csrf
        <input type="email" name="email" placeholder="Email" required class="w-full border px-3 py-2 rounded">
        <input type="password" name="password" placeholder="Password" required class="w-full border px-3 py-2 rounded">
        <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded">Login</button>
    </form>
</div>
@endsection
