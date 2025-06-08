<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'My Portfolio' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">
    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold">My Portfolio</h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="/" class="hover:text-blue-600">Home</a></li>
                    <li><a href="/about" class="hover:text-blue-600">About</a></li>
                    <li><a href="/skill" class="hover:text-blue-600">Skill</a></li>
                    <li><a href="/education" class="hover:text-blue-600">Education</a></li>
                    <li><a href="/experience" class="hover:text-blue-600">Experience</a></li>
                    <li><a href="/contact" class="hover:text-blue-600">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container mx-auto px-4 py-6">
        @yield('content')
    </main>
</body>
</html>
