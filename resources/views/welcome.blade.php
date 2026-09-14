<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CANYVENTURE</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Figtree', 'sans-serif'],
                    },
                    colors: {
                        primary: '#42642B',
                        'primary-hover': '#345022',
                    }
                }
            }
        }
    </script>

    <!-- Alpine.js CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="antialiased font-sans bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-white min-h-screen flex flex-col justify-between">

    <div class="relative flex flex-col justify-between min-h-screen">

        <!-- Header Navigasi -->
        <header class="w-full max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <!-- Logo Brand -->
                <div class="w-10 h-10 bg-primary text-white flex items-center justify-center font-bold text-xl rounded-lg shadow-md">
                    C
                </div>
                <span class="text-xl font-bold tracking-wider text-primary dark:text-green-400">CANYVENTURE</span>
            </div>

            <!-- Auth Navigation (Login / Register / Dashboard) -->
            @if (Route::has('login'))
                <nav class="flex items-center gap-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white transition">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white transition">
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="bg-primary hover:bg-primary-hover text-white px-4 py-2 rounded-lg font-semibold transition shadow-sm">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>

        <!-- Main Content Grid Ala Jetstream -->
        <main class="flex-grow flex items-center justify-center px-6 py-12">
            <div class="max-w-7xl mx-auto w-full">
                
                <!-- Hero Section Banner -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 md:p-12 shadow-xl border border-gray-200 dark:border-gray-700 mb-8 flex flex-col items-center text-center">
                    <div class="inline-flex items-center gap-2 bg-green-50 dark:bg-green-900/30 border border-green-200 dark:border-green-800 text-primary dark:text-green-400 px-4 py-1.5 rounded-full text-xs font-semibold mb-6">
                        <span>⛰️ Official Canyoning Platform</span>
                    </div>

                    <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight mb-4">
                        Welcome to <span class="text-primary dark:text-green-400">CANYVENTURE</span>
                    </h1>

                    <p class="text-gray-600 dark:text-gray-300 max-w-2xl text-base md:text-lg mb-8 leading-relaxed">
                        Nikmati sensasi jelajah alam, air terjun, dan tebing dengan sistem manajemen serta pemesan layanan Canyoning terbaik secara instan.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="px-6 py-3 bg-primary hover:bg-primary-hover text-white font-bold rounded-xl shadow transition text-center">
                                Buka Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="px-6 py-3 bg-primary hover:bg-primary-hover text-white font-bold rounded-xl shadow transition text-center">
                                Mulai Sekarang
                            </a>
                        @endauth
                    </div>
                </div>

                <!-- Grid Feature Cards (Ciri Khas Layout Jetstream) -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl border border-gray-200 dark:border-gray-700 shadow-sm">
                        <div class="w-10 h-10 bg-green-100 dark:bg-green-900/50 text-primary dark:text-green-400 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Petualangan Seru</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                            Penelusuran ngarai dan air terjun didampingi oleh instruktur bersertifikat internasional.
                        </p>
                    </div>

                    <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl border border-gray-200 dark:border-gray-700 shadow-sm">
                        <div class="w-10 h-10 bg-green-100 dark:bg-green-900/50 text-primary dark:text-green-400 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Sistem Keamanan Tinggi</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                            Peralatan standar keselamatan tinggi (UIAA/CE certified) untuk menjaga kenyamanan aktivitasmu.
                        </p>
                    </div>

                </div>

            </div>
        </main>

        <!-- Footer Jetstream Style -->
        <footer class="w-full max-w-7xl mx-auto px-6 py-6 text-center text-xs text-gray-500 dark:text-gray-400">
            &copy; {{ date('Y') }} CANYVENTURE. Powered by Laravel Jetstream.
        </footer>

    </div>

</body>
</html>