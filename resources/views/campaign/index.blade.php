@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="text-center mb-5">
        <h2 class="judul-donasi">Pilih Donasi 💖</h2>
        <p class="text-muted">
            Pilih kategori donasi yang ingin kamu bantu
        </p>
    </div>

    <div class="card donasi-card mb-4">
        <div class="card-body">
            <h5>🎓 Pendidikan</h5>
            <p>Bantu anak-anak sekolah.</p>

            <a href="{{ route('donasi.create',1) }}"
               class="btn btn-donasi w-100">
                Donasi
            </a>
        </div>
    </div>

    <div class="card donasi-card mb-4">
        <div class="card-body">
            <h5>🏥 Kesehatan</h5>
            <p>Bantu biaya pengobatan.</p>

            <a href="{{ route('donasi.create',2) }}"
               class="btn btn-donasi w-100">
                Donasi
            </a>
        </div>
    </div>

    <div class="card donasi-card">
        <div class="card-body">
            <h5>🌍 Bencana</h5>
            <p>Bantu korban bencana.</p>

            <a href="{{ route('donasi.create',3) }}"
               class="btn btn-donasi w-100">
                Donasi
            </a>
        </div>
    </div>

</div>

@endsection