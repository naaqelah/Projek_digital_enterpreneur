<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CANYVENTURE</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine.js untuk fitur toggle password -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4 md:p-6 font-sans">

    <!-- Container Card Utama (Rounded & Shadow) -->
    <div class="bg-white rounded-3xl shadow-xl w-full max-w-5xl flex flex-col md:flex-row overflow-hidden p-3 md:p-4 gap-4">
        
        <!-- Kolom Kiri: Gambar Waterfall (Rounded & Presisi) -->
        <div class="w-full md:w-1/2 h-64 md:h-[520px] relative flex-shrink-0 overflow-hidden rounded-2xl">
            <img 
                src="{{ asset('lojin.jpg') }}" 
                alt="Canyoning Waterfall" 
                class="w-full h-full object-cover rounded-2xl"
            />
        </div>

        <!-- Kolom Kanan: Form Login (Rounded Element) -->
        <div class="w-full md:w-1/2 flex items-center justify-center p-4 sm:p-8 bg-white rounded-2xl">
            <div class="max-w-md w-full">
                
                <!-- Judul -->
                <h2 class="text-2xl sm:text-3xl font-extrabold text-[#42642B] text-center mb-6">
                    Selamat Datang Kembali!
                </h2>

                <!-- Tombol Google (Rounded) -->
                <a href="#" class="flex items-center justify-center gap-3 w-full border border-gray-300 py-2.5 px-4 text-gray-700 text-sm font-medium hover:bg-gray-50 transition rounded-xl mb-5">
                    <svg class="w-5 h-5" viewBox="0 0 24 24">
                        <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                        <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                        <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/>
                        <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/>
                    </svg>
                    <span>Masuk dengan Google</span>
                </a>

                <!-- Pemisah / Divider -->
                <div class="flex items-center mb-5">
                    <div class="flex-grow border-t border-gray-200"></div>
                    <span class="px-3 text-xs text-gray-400">Atau</span>
                    <div class="flex-grow border-t border-gray-200"></div>
                </div>

                <!-- Error Validation -->
                <x-validation-errors class="mb-3" />

                @session('status')
                    <div class="mb-3 font-medium text-sm text-green-600 bg-green-50 p-2.5 rounded-xl">
                        {{ $value }}
                    </div>
                @endsession

                <!-- Form -->
                <form method="POST" action="{{ route('login') }}" class="space-y-3.5" x-data="{ showPassword: false }">
                    @csrf

                    <!-- Input Email (Rounded) -->
                    <div>
                        <input 
                            id="email" 
                            type="email" 
                            name="email" 
                            value="{{ old('email') }}" 
                            required 
                            autofocus 
                            autocomplete="username" 
                            placeholder="Email" 
                            class="w-full px-4 py-2.5 border border-gray-300 text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:border-[#42642B] focus:ring-1 focus:ring-[#42642B] transition rounded-xl"
                        />
                    </div>

                    <!-- Input Kata Sandi (Rounded) -->
                    <div class="relative">
                        <input 
                            :type="showPassword ? 'text' : 'password'" 
                            id="password" 
                            name="password" 
                            required 
                            autocomplete="current-password" 
                            placeholder="Kata Sandi" 
                            class="w-full px-4 py-2.5 border border-gray-300 text-sm text-gray-700 placeholder-gray-400 focus:outline-none focus:border-[#42642B] focus:ring-1 focus:ring-[#42642B] transition rounded-xl pr-12"
                        />
                        <button 
                            type="button" 
                            @click="showPassword = !showPassword" 
                            class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 focus:outline-none"
                        >
                            <svg x-show="!showPassword" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            <svg x-show="showPassword" x-cloak class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858-5.908a10.025 10.025 0 013.68-.863c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21f-9-9 0 00-18-18l18 18z" />
                            </svg>
                        </button>
                    </div>

                    <!-- Checkbox & Lupa Password -->
                    <div class="flex items-center justify-between text-xs text-gray-500 pt-0.5">
                        <label for="remember_me" class="flex items-center cursor-pointer select-none">
                            <input id="remember_me" type="checkbox" name="remember" class="w-4 h-4 border-gray-300 rounded text-[#42642B] focus:ring-[#42642B]">
                            <span class="ms-2">Ingatkan saya</span>
                        </label>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="hover:underline text-gray-400">Lupa password?</a>
                        @endif
                    </div>

                    <!-- Tombol Submit (Rounded) -->
                    <div class="pt-1">
                        <button type="submit" class="w-full py-3 bg-[#42642B] hover:bg-[#345022] text-white font-bold text-base transition duration-200 rounded-xl">
                            Masuk
                        </button>
                    </div>

                    <!-- Link Daftar -->
                    <div class="text-center text-xs text-gray-400 pt-1">
                        Belum punya akun? <a href="{{ route('register') }}" class="text-[#42642B] font-semibold hover:underline">Daftar</a>
                    </div>
                </form>

            </div>
        </div>

    </div>

</body>
</html>