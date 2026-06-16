@extends('layout.app')

@section('content')

<h1 class="fw-bold text-primary mb-4">
    Dashboard Guru BK
</h1>

<div class="row">

@foreach($laporans as $laporan)

<div class="col-md-6 mb-4">

    <div class="card shadow rounded-4 p-3">

        <h4 class="text-primary">
            {{ $laporan->nama_siswa }}
        </h4>

        <p>
            <b>Kelas:</b>
            {{ $laporan->kelas }}
        </p>

        <p>
            <b>Jenis:</b>
            {{ $laporan->jenis_bullying }}
        </p>

        <p>
            <b>Lokasi:</b>
            {{ $laporan->lokasi }}
        </p>

        <p>
            {{ $laporan->deskripsi }}
        </p>

        <span class="badge bg-warning text-dark mb-3">
            {{ $laporan->status }}
        </span>

 …
[14:42, 13/05/2026] Natasya Helmalia: @extends('layout.app')

@section('content')

<div class="card shadow-lg rounded-4 p-4">

    <h2 class="text-primary fw-bold mb-4">
        Edit Laporan
    </h2>

    <form action="/laporan/{{ $laporan->id }}"
          method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">

            <label>Status</label>

            <select name="status"
                    class="form-control">

                <option>Menunggu</option>
                <option>Diproses</option>
                <option>Selesai</option>

            </select>

        </div>

        <button class="btn btn-primary">
            Update
        </button>

    </form>

</div>

@endsection