@extends('layouts.app')

@section('content')

<div style="max-width:1200px;margin:50px auto;">

    <div style="text-align:center;margin-bottom:40px;">
        <h2 style="color:#e88ab5;font-weight:700;">
            Pilih Donasi 💖
        </h2>

        <p style="color:#999;">
            Pilih kategori donasi yang ingin kamu bantu
        </p>
    </div>

    <!-- Pendidikan -->
    <div style="padding:25px 0;border-top:1px solid #eee;">
        <h5 style="color:#777;">🎓 Pendidikan</h5>

        <p style="color:#999;">
            Bantu anak-anak sekolah.
        </p>

        <a href="{{ route('donasi.create', 1) }}"
           style="
                display:block;
                width:100%;
                background:#e88ab5;
                color:white;
                text-align:center;
                padding:12px;
                border-radius:4px;
                text-decoration:none;">
            Donasi
        </a>
    </div>

    <!-- Kesehatan -->
    <div style="padding:25px 0;border-top:1px solid #eee;">
        <h5 style="color:#777;">🏥 Kesehatan</h5>

        <p style="color:#999;">
            Bantu biaya pengobatan.
        </p>

        <a href="{{ route('donasi.create', 2) }}"
           style="
                display:block;
                width:100%;
                background:#e88ab5;
                color:white;
                text-align:center;
                padding:12px;
                border-radius:4px;
                text-decoration:none;">
            Donasi
        </a>
    </div>

    <!-- Bencana -->
    <div style="padding:25px 0;border-top:1px solid #eee;">
        <h5 style="color:#777;">🌍 Bencana</h5>

        <p style="color:#999;">
            Bantu korban bencana.
        </p>

        <a href="{{ route('donasi.create', 3) }}"
           style="
                display:block;
                width:100%;
                background:#e88ab5;
                color:white;
                text-align:center;
                padding:12px;
                border-radius:4px;
                text-decoration:none;">
            Donasi
        </a>
    </div>

</div>

@endsection