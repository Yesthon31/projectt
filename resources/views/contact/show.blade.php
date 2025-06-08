@extends('layouts.app')

@section('content')
    <h2 class="text-xl font-bold mb-4">{{ $contact->subject }}</h2>

    <div class="bg-white p-4 rounded shadow">
        <p><strong>From:</strong> {{ $contact->name }} ({{ $contact->email }})</p>
        <p class="mt-4 text-gray-700">{{ $contact->message }}</p>
        <a href="{{ route('contact.index') }}" class="text-blue-600 mt-4 inline-block">← Back to messages</a>
    </div>
@endsection
    