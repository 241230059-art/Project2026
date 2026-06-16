@extends('layouts.app')

@section('content')

<div style="
    max-width:600px;
    margin:150px auto 80px auto;
    background:white;
    padding:40px;
    text-align:center;
    border-radius:10px;
    box-shadow:0 2px 10px rgba(0,0,0,0.1);
">

    <h2 style="
        color:#e88ab5;
        margin-bottom:20px;
    ">
        💖 Terima Kasih
    </h2>

    <p style="
        font-size:18px;
        margin-bottom:25px;
    ">
        Donasi Anda berhasil dikirim.
    </p>

    <a href="{{ route('home') }}"
       style="
       display:inline-block;
       padding:12px 25px;
       background:#e88ab5;
       color:white;
       text-decoration:none;
       border-radius:5px;">
        Kembali ke Home
    </a>

</div>

@endsection