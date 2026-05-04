@extends('app')

@section('title', 'Profil')

@section('content')

<div class="max-w-5xl mx-auto px-6 mt-16">

  <!-- Judul -->
  <h1 class="text-3xl font-bold text-pink-500 mb-6">
    Profil DonasiKu 💖
  </h1>

  <!-- Tentang -->
  <div class="bg-white p-6 rounded-2xl shadow-sm mb-8">
    <h2 class="text-xl font-semibold text-gray-700 mb-2">Tentang Kami</h2>
    <p class="text-gray-600">
      DonasiKu adalah platform yang membantu menghubungkan donatur dengan mereka yang membutuhkan.
      Kami berkomitmen untuk transparansi dan kemudahan dalam berbagi kebaikan.
    </p>
  </div>

  <!-- Visi Misi -->
  <div class="grid md:grid-cols-2 gap-6 mb-8">
    
    <div class="bg-white p-6 rounded-2xl shadow-sm">
      <h2 class="text-lg font-semibold text-pink-500 mb-2">Visi</h2>
      <p class="text-gray-600">
        Menjadi platform donasi terpercaya yang memudahkan semua orang untuk berbagi kebaikan.
      </p>
    </div>

    <div class="bg-white p-6 rounded-2xl shadow-sm">
      <h2 class="text-lg font-semibold text-pink-500 mb-2">Misi</h2>
      <ul class="text-gray-600 list-disc ml-5 space-y-1">
        <li>Menyediakan sistem donasi yang mudah digunakan</li>
        <li>Menjamin transparansi dana</li>
        <li>Menghubungkan donatur dengan penerima secara cepat</li>
      </ul>
    </div>

  </div>

  <!-- Keunggulan -->
  <div class="bg-pink-50 p-6 rounded-2xl">
    <h2 class="text-xl font-semibold text-pink-500 mb-4">
      Kenapa Pilih DonasiKu?
    </h2>

    <div class="grid md:grid-cols-3 gap-4 text-center">

      <div>
        <h3 class="font-semibold text-gray-700">🔒 Aman</h3>
        <p class="text-gray-600 text-sm">Data dan transaksi terjamin</p>
      </div>

      <div>
        <h3 class="font-semibold text-gray-700">⚡ Cepat</h3>
        <p class="text-gray-600 text-sm">Proses donasi instan</p>
      </div>

      <div>
        <h3 class="font-semibold text-gray-700">📊 Transparan</h3>
        <p class="text-gray-600 text-sm">Laporan dana jelas</p>
      </div>

    </div>
  </div>

</div>

@endsection