<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'yesthon' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">

    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md p-6">
            <h1 class="text-xl font-bold mb-6">Dashboard</h1>
            <nav class="space-y-2">
                <a href="{{ route('admin.dashboard') }}" class="block py-2 px-3 rounded hover:bg-gray-100">Dashboard</a>
                <a href="{{ route('about.index') }}" class="block py-2 px-3 rounded hover:bg-gray-100">About</a>
                <a href="{{ route('skill.index') }}" class="block py-2 px-3 rounded hover:bg-gray-100">Skill</a>
                <a href="{{ route('education.index') }}" class="block py-2 px-3 rounded hover:bg-gray-100">Education</a>
                <a href="{{ route('experience.index') }}" class="block py-2 px-3 rounded hover:bg-gray-100">Experience</a>
                <a href="{{ route('contact.index') }}" class="block py-2 px-3 rounded hover:bg-gray-100">Contact</a>
                <!-- Tambah menu lainnya -->
            </nav>
        </aside>

        <!-- Content -->
        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>

</body>
</html>
