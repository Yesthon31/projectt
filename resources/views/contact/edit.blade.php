@extends('layouts.admin')

@section('content')
    <h2 class="text-xl font-bold mb-4">Edit Message</h2>

    <form action="{{ route('contact.update', $contact->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <input name="name" placeholder="Your Name" class="w-full border px-3 py-2 rounded"
               value="{{ old('name', $contact->name) }}">
        <input name="email" placeholder="Your Email" class="w-full border px-3 py-2 rounded"
               value="{{ old('email', $contact->email) }}">
        <input name="subject" placeholder="Subject" class="w-full border px-3 py-2 rounded"
               value="{{ old('subject', $contact->subject) }}">
        <textarea name="message" placeholder="Your Message" class="w-full border px-3 py-2 rounded">{{ old('message', $contact->message) }}</textarea>

        <button class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
    </form>
@endsection
