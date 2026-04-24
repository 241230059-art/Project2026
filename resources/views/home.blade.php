<div>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    /* Custom Warna Pink Baby */
    body {
        background-color: #fff0f5; /* Warna background pink sangat muda */
    }
    .btn-pink {
        background-color: #ffb6c1; /* Pink Baby */
        color: white;
        border: none;
    }
    .btn-pink:hover {
        background-color: #ff9fb2;
        color: white;
    }
    .btn-outline-pink {
        border-color: #ffb6c1;
        color: #ffb6c1;
    }
    .btn-outline-pink:hover {
        background-color: #ffb6c1;
        color: white;
    }
    .text-pink {
        color: #ff8fa3 !important;
    }
    .card-pink {
        background-color: #ffffff;
        border: 2px solid #ffdae0;
    }
</style>

<div class="container mt-4">
    <div class="mb-5 text-center">
        <a href="/" class="btn btn-pink btn-sm shadow-sm">Home</a>
        <a href="/kontak" class="btn btn-outline-pink btn-sm shadow-sm">Kontak</a>
        <a href="/profil" class="btn btn-outline-pink btn-sm shadow-sm">Profil</a>
    </div>

    <div class="p-5 mb-4 card-pink rounded-4 shadow-sm">
        <div class="container-fluid py-5 text-center">
            <h1 class="display-5 fw-bold text-pink">Selamat Datang!</h1>
            <p class="col-md-12 fs-5 text-muted">
                Ini adalah halaman utama project Laravel saya untuk Praktikum 2026.
            </p>
            <hr class="my-4" style="border-top: 2px solid #ffdae0; opacity: 1;">
            <p class="text-secondary">Silakan klik menu di atas untuk menjelajahi halaman lainnya.</p>
            <a href="/profil" class="btn btn-pink btn-lg shadow px-5 mt-3">Lihat Profil Saya</a>
        </div>
</div>