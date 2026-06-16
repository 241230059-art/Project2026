<!DOCTYPE html>
<html>
<head>
    <title>Form Laporan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color:#eaf4ff;">

<div class="container mt-5">

    <div class="card shadow p-4 rounded-4">

        <h2 class="text-primary fw-bold mb-4">
            Form Laporan Bullying
        </h2>

        <form action="/laporan" method="POST">

            @csrf

            <div class="mb-3">
                <label>Nama Siswa</label>
                <input type="text" name="nama_siswa" class="form-control">
            </div>

            <div class="mb-3">
                <label>Kelas</label>
                <input type="text" name="kelas" class="form-control">
            </div>

            <div class="mb-3">
                <label>Jenis Bullying</label>

                <select name="jenis_bullying" class="form-control">
                    <option>Verbal</option>
                    <option>Fisik</option>
                    <option>Cyberbullying</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Lokasi</label>
                <input type="text" name="lokasi" class="form-control">
            </div>

            <div class="mb-3">
                <label>Deskripsi</label>
                <textarea name="deskripsi" class="form-control"></textarea>
            </div>

            <div class="form-check mb-3">
                <input type="checkbox" name="anonymous" class="form-check-input">

                <label class="form-check-label">
                    Kirim sebagai anonim
                </label>
            </div>

            <button class="btn btn-primary rounded-pill">
                Kirim Laporan
            </button>

        </form>

    </div>

</div>

</body>
</html>