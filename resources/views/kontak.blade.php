<div>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    /* Custom Warna Pink Baby */
    body {
        background-color: #fff0f5; /* Background pink sangat muda */
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
    /* Warna fokus input form */
    .form-control:focus {
        border-color: #ffb6c1;
        box-shadow: 0 0 0 0.25rem rgba(255, 182, 193, 0.25);
    }
</style>

<div class="container mt-4">
    <div class="mb-5 text-center">
        <a href="/" class="btn btn-outline-pink btn-sm shadow-sm">Home</a>
        <a href="/kontak" class="btn btn-pink btn-sm shadow-sm">Kontak</a>
        <a href="/profil" class="btn btn-outline-pink btn-sm shadow-sm">Profil</a>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-pink shadow-sm rounded-4">
                <div class="card-body p-4">
                    <h2 class="text-pink fw-bold mb-3">Hubungi Saya</h2>
                    <p class="text-muted mb-4">Punya pertanyaan? Silakan kirim pesan di bawah ini.</p>
                    
                    <form>
                        <div class="mb-3">
                            <label class="form-label text-secondary fw-semibold">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Nama kamu...">
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-secondary fw-semibold">Email</label>
                            <input type="email" class="form-control" placeholder="email@contoh.com">
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-secondary fw-semibold">Pesan</label>
                            <textarea class="form-control" rows="4" placeholder="Tulis pesanmu di sini..."></textarea>
                        </div>
                        <button type="button" class="btn btn-pink w-100 shadow-sm py-2 fw-bold mt-2">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>