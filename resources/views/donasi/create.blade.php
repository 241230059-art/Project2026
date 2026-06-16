@extends('layouts.app')

@section('content')

<div style="
    max-width:700px;
    margin:50px auto;
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0 2px 10px rgba(0,0,0,0.1);
"><h2 style="
    text-align:center;
    margin-bottom:30px;
    color:#e88ab5;
">
    💖 Form Donation
</h2>

@if(session('success'))
    <div style="
        background:#d4edda;
        color:#155724;
        padding:10px;
        border-radius:5px;
        margin-bottom:20px;
    ">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div style="
        background:#f8d7da;
        color:#721c24;
        padding:10px;
        border-radius:5px;
        margin-bottom:20px;
    ">
        {{ session('error') }}
    </div>
@endif

<form action="{{ route('donasi.store') }}" method="POST">
    @csrf

    <div style="margin-bottom:15px;">
        <label>Campaign</label>

        <input type="text"
               value="{{ $campaign }}"
               readonly
               style="
               width:100%;
               padding:10px;
               border:1px solid #ddd;
               border-radius:5px;
               background:#f5f5f5;">

        <input type="hidden"
               name="campaign_id"
               value="{{ $id }}">
    </div>

    <div style="margin-bottom:15px;">
        <label>Nama Donatur</label>
        <input type="text"
               name="donor_name"
               style="
               width:100%;
               padding:10px;
               border:1px solid #ddd;
               border-radius:5px;">
    </div>

    <div style="margin-bottom:15px;">
        <label>Jumlah Donasi</label>
        <input type="text"
               name="amount"
               placeholder="Contoh: 50000"
               style="
               width:100%;
               padding:10px;
               border:1px solid #ddd;
               border-radius:5px;">
    </div>

    <div style="margin-bottom:15px;">
        <label>Pesan</label>
        <textarea name="message"
                  rows="4"
                  style="
                  width:100%;
                  padding:10px;
                  border:1px solid #ddd;
                  border-radius:5px;"></textarea>
    </div>

    <button type="submit"
            style="
            width:100%;
            background:#e88ab5;
            color:white;
            border:none;
            padding:12px;
            border-radius:5px;
            cursor:pointer;">
        Kirim Donasi
    </button>

</form>

</div>@endsection