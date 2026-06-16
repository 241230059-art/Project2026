<header class="bg-pink-50 shadow-sm">
    <div class="container mx-auto flex justify-between items-center p-4">    <!-- Logo -->
    <div class="text-xl font-semibold text-pink-600">
        DonasiKu
    </div>

    <!-- Menu -->
    <nav class="space-x-6">
        <a href="{{ route('home') }}"
           class="text-gray-600 hover:text-pink-500 transition">
            Home
        </a>

        <a href="{{ route('home') }}"
           class="text-gray-600 hover:text-pink-500 transition">
            Donasi
        </a>

        <a href="{{ route('profil') }}"
           class="text-gray-600 hover:text-pink-500 transition">
            Profil
        </a>

        <a href="{{ route('kontak') }}"
           class="text-gray-600 hover:text-pink-500 transition">
            Kontak
        </a>
    </nav>

    <!-- Button -->
    <a href="{{ route('donasi.create', 1) }}"
       class="bg-pink-400 text-white px-4 py-2 rounded-lg hover:bg-pink-500 transition shadow-sm">
        Donasi Sekarang
    </a>

</div>

</header>