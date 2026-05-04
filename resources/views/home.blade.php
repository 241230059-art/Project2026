@extends('app')

@section('title', 'Home')

@section('content')

<div class="max-w-6xl mx-auto px-6 mt-16 grid md:grid-cols-2 gap-10 items-center">

  <!-- TEXT -->
  <div>
    <h1 class="text-4xl font-bold text-pink-500 mb-4">
      Berbagi Kebaikan 💖
    </h1>

    <p class="text-gray-600 mb-6">
      DonasiKu membantu kamu menyalurkan bantuan dengan mudah dan transparan.
    </p>

    <a href="/donasi"
       class="bg-pink-400 text-white px-6 py-3 rounded-xl hover:bg-pink-500">
       Mulai Donasi
    </a>
  </div>

  <!-- GAMBAR BESAR -->
  <div>
    <img src="{{ asset('images/donasi.jpg') }}"
         class="w-full h-[400px] object-cover rounded-2xl shadow-lg">
         <div class="text-center mt-16">
  <h2 class="text-2xl font-semibold text-gray-700">
    Yuk mulai berdonasi hari ini 💕
  </h2>
</div>
  </div>

</div>

@endsection