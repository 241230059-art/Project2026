@extends('app')

@section('title', 'Donasi')

@section('content')

<div class="max-w-6xl mx-auto px-6 mt-16">

  <!-- Judul -->
  <div class="text-center mb-12">
    <h1 class="text-3xl font-bold text-pink-500">
      Pilih Donasi 💖
    </h1>
    <p class="text-gray-600 mt-2">
      Pilih kategori donasi yang ingin kamu bantu
    </p>
  </div>

  <!-- GRID -->
  <div class="grid md:grid-cols-3 gap-8">

    <!-- Pendidikan -->
    <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md transition">
      <h2 class="text-lg font-semibold text-pink-500 mb-2">🎓 Pendidikan</h2>
      <p class="text-gray-600 text-sm">Bantu anak-anak sekolah.</p>
      <div class="w-full bg-gray-200 rounded-full h-2 mt-4">
        <div class="bg-pink-400 h-2 rounded-full w-2/3"></div>
      </div>
      <button class="mt-5 w-full bg-pink-400 text-white py-2 rounded-lg hover:bg-pink-500">
        Donasi
      </button>
    </div>

    <!-- Kesehatan -->
    <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md transition">
      <h2 class="text-lg font-semibold text-pink-500 mb-2">🏥 Kesehatan</h2>
      <p class="text-gray-600 text-sm">Bantu biaya pengobatan.</p>
      <div class="w-full bg-gray-200 rounded-full h-2 mt-4">
        <div class="bg-pink-400 h-2 rounded-full w-1/2"></div>
      </div>
      <button class="mt-5 w-full bg-pink-400 text-white py-2 rounded-lg hover:bg-pink-500">
        Donasi
      </button>
    </div>

    <!-- Bencana -->
    <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md transition">
      <h2 class="text-lg font-semibold text-pink-500 mb-2">🌍 Bencana</h2>
      <p class="text-gray-600 text-sm">Bantu korban bencana.</p>
      <div class="w-full bg-gray-200 rounded-full h-2 mt-4">
        <div class="bg-pink-400 h-2 rounded-full w-3/4"></div>
      </div>
      <button class="mt-5 w-full bg-pink-400 text-white py-2 rounded-lg hover:bg-pink-500">
        Donasi
      </button>
    </div>

    <!-- Sosial -->
    <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md transition">
      <h2 class="text-lg font-semibold text-pink-500 mb-2">🍽️ Sosial</h2>
      <p class="text-gray-600 text-sm">Bantu kebutuhan sehari-hari.</p>
      <div class="w-full bg-gray-200 rounded-full h-2 mt-4">
        <div class="bg-pink-400 h-2 rounded-full w-1/3"></div>
      </div>
      <button class="mt-5 w-full bg-pink-400 text-white py-2 rounded-lg hover:bg-pink-500">
        Donasi
      </button>
    </div>

    <!-- Anak & Yatim -->
    <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md transition">
      <h2 class="text-lg font-semibold text-pink-500 mb-2">👶 Anak & Yatim</h2>
      <p class="text-gray-600 text-sm">Bantu anak-anak kurang mampu.</p>
      <div class="w-full bg-gray-200 rounded-full h-2 mt-4">
        <div class="bg-pink-400 h-2 rounded-full w-2/4"></div>
      </div>
      <button class="mt-5 w-full bg-pink-400 text-white py-2 rounded-lg hover:bg-pink-500">
        Donasi
      </button>
    </div>

    <!-- Lingkungan -->
    <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md transition">
      <h2 class="text-lg font-semibold text-pink-500 mb-2">🌱 Lingkungan</h2>
      <p class="text-gray-600 text-sm">Bantu menjaga alam.</p>
      <div class="w-full bg-gray-200 rounded-full h-2 mt-4">
        <div class="bg-pink-400 h-2 rounded-full w-1/2"></div>
      </div>
      <button class="mt-5 w-full bg-pink-400 text-white py-2 rounded-lg hover:bg-pink-500">
        Donasi
      </button>
    </div>

  </div>

</div>

@endsection