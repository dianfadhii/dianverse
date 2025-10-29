<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LARAVETI')</title>

    {{-- ===== Google Fonts (Poppins) ===== --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    {{-- ===== Bootstrap ===== --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- ===== Custom CSS ===== --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @stack('css')
</head>

<body>
    {{-- ===== HEADER ===== --}}
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
            <div class="container">
                {{-- Brand --}}
                <a class="navbar-brand fw-bold" href="{{ url('/home') }}">LARAVETI</a>

                {{-- Toggle Button --}}
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                {{-- Navbar Menu --}}
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item"><a href="{{ url('/home') }}" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="{{ url('/mahasiswa') }}" class="nav-link">Mahasiswa</a></li>
                        <li class="nav-item"><a href="{{ url('/berita') }}" class="nav-link">Berita</a></li>
                        <li class="nav-item"><a href="{{ url('/profile') }}" class="nav-link">Profile</a></li>
                        <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>

                        {{-- Dark Mode Button --}}
                        <li class="nav-item">
                            <button id="darkModeToggle" class="btn btn-outline-light ms-3">🌙 Mode Gelap</button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    {{-- ===== MAIN CONTENT ===== --}}
    <main class="container my-5">
        @yield('content')
    </main>

    {{-- ===== FOOTER ===== --}}
    <footer class="bg-primary text-white text-center py-3">
        <p class="mb-0">&copy; {{ date('Y') }} LARAVETI - All Rights Reserved.</p>
    </footer>

    {{-- ===== Bootstrap JS ===== --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- ===== Dark Mode Script ===== --}}
    <script>
        const toggle = document.getElementById('darkModeToggle');

        toggle.addEventListener('click', function() {
            document.body.classList.toggle('dark-mode');

            if (document.body.classList.contains('dark-mode')) {
                this.textContent = '☀️ Mode Terang';
                localStorage.setItem('theme', 'dark');
            } else {
                this.textContent = '🌙 Mode Gelap';
                localStorage.setItem('theme', 'light');
            }
        });

        // Simpan preferensi pengguna
        if (localStorage.getItem('theme') === 'dark') {
            document.body.classList.add('dark-mode');
            toggle.textContent = '☀️ Mode Terang';
        }
    </script>

    @stack('js')
</body>
</html>
