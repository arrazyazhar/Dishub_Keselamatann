{{-- resources/views/auth/login.blade.php --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Informasi Keselamatan LLAJ</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased">

<div class="flex min-h-screen">
    <!-- Kiri -->
    <div class="w-[70%] bg-[#3754A5] flex flex-col items-center justify-center text-white p-8">
        <div class="flex flex-col items-center">
            <!-- Logo -->
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-64 h-64 mb-6">
            <!-- ukuran logo diperbesar dari w-40 h-40 menjadi w-64 h-64 -->
            
            <!-- Judul -->
            <h1 class="text-center text-xl font-bold uppercase">
                Sistem Informasi <br> Keselamatan LLAJ Kab. Bogor
            </h1>

            <!-- Deskripsi -->
            <p class="text-sm mt-4 text-center leading-relaxed">
                lorem ipsumsdvnds lorem ipsumsdvnds lorem <br>
                ipsumsdvnds lorem ipsumsdvnds
            </p>
        </div>
    </div>

    <!-- Kanan -->
    <div class="w-[30%] flex flex-col items-center justify-center p-8 bg-white">
        <h2 class="text-2xl font-bold mb-8">SELAMAT DATANG</h2>

        <form method="POST" action="{{ route('login') }}" class="w-80 space-y-4">
            @csrf

            <!-- Username -->
            <div>
                <input type="text" name="email" placeholder="Nama Pengguna"
                    class="w-full border border-gray-300 rounded-full px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Password -->
            <div class="relative">
                <input type="password" name="password" placeholder="Kata Sandi"
                    class="w-full border border-gray-300 rounded-full px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <!-- Icon mata -->
                <div class="absolute inset-y-0 right-3 flex items-center text-gray-500 cursor-pointer">
                    <!-- Pakai SVG icon mata -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </div>
            </div>

            <!-- Remember Me -->
            <div class="flex items-center">
                <input type="checkbox" id="remember" name="remember"
                    class="border-gray-300 rounded">
                <label for="remember" class="ml-2 text-sm text-gray-600">Remember me</label>
            </div>

            <!-- Tombol Login -->
            <button type="submit"
                class="w-full bg-[#3754A5] text-white py-2 px-4 rounded-full font-semibold hover:bg-blue-800">
                Masuk
            </button>
        </form>
    </div>
</div>

</body>
</html>
