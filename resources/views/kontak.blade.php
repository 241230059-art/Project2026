@extends('app')

@section('title', 'Kontak')

@section('content')
<div class="max-w-xl mx-auto mt-16 bg-white p-8 rounded-2xl shadow-md">

  <h1 class="text-2xl font-bold text-pink-500 mb-6 text-center">
    Hubungi Kami
  </h1>

  <form class="space-y-4">

    <input type="text" placeholder="Nama"
      class="w-full border rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-pink-300">

    <input type="email" placeholder="Email"
      class="w-full border rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-pink-300">

    <textarea placeholder="Pesan"
      class="w-full border rounded-lg p-3 h-32 focus:outline-none focus:ring-2 focus:ring-pink-300"></textarea>

    <button class="w-full bg-pink-400 text-white py-3 rounded-lg hover:bg-pink-500">
      Kirim Pesan
    </button>

  </form>

</div>
@endsection