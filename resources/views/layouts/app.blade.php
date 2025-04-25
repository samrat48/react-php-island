<!DOCTYPE html>
<html>
<head>
    <title>{{ $title ?? 'My App' }}</title>
    <meta name="description" content="{{ $description ?? 'Default description' }}">
    @vite(['resources/js/app.jsx']) <!-- Load React hydration script -->
</head>
<body>
    <!-- Shared header/nav -->
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('contact') }}">Contact</a>
    </nav>

    <!-- Main content -->
    <main>
        @yield('content')  <!-- This replaces $slot -->
    </main>

    <!-- Shared footer -->
    <footer>© 2023 My App</footer>
</body>
</html>