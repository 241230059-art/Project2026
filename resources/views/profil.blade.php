<div>
 <style>
    /* CSS MANUAL (Biar tetep cantik walau internet lambat) */
    body {
        background-color: #fff0f5;
        font-family: 'Segoe UI', Arial, sans-serif;
        display: flex;
        justify-content: center;
        padding-top: 50px;
        color: #444;
    }
    .container { width: 100%; max-width: 400px; text-align: center; }
    
    /* Navigasi */
    .nav { margin-bottom: 30px; display: flex; justify-content: center; gap: 10px; }
    .nav a { 
        text-decoration: none; padding: 8px 20px; border-radius: 20px; 
        font-size: 14px; border: 1px solid #ffb6c1; color: #ffb6c1;
    }
    .nav a.active { background: #ffb6c1; color: white; }

    /* Kartu Profil */
    .card {
        background: white; padding: 30px; border-radius: 25px;
        box-shadow: 0 10px 25px rgba(255, 182, 193, 0.3);
        position: relative; margin-top: 60px;
    }
    .circle-avatar {
        width: 100px; height: 100px; background: #ffb6c1;
        border-radius: 50%; display: flex; align-items: center;
        justify-content: center; font-size: 40px; color: white;
        font-weight: bold; margin: -80px auto 20px auto;
        border: 5px solid white; box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    h2 { color: #ff8fa3; margin: 10px 0 5px 0; }
    .sub { color: #888; font-size: 14px; margin-bottom: 20px; display: block; }
    hr { border: 0; border-top: 1px dashed #ffdae0; margin: 20px 0; }
    .bio-title { color: #ff8fa3; font-size: 12px; font-weight: bold; text-align: left; display: block; }
    .bio-text { text-align: left; font-size: 13px; line-height: 1.6; color: #666; margin-top: 5px; }
    
    /* Tombol */
    .btn-back {
        display: block; width: 100%; background: #ffb6c1;
        color: white; text-decoration: none; padding: 12px;
        border-radius: 15px; margin-top: 25px; font-weight: bold;
    }
</style>

<div class="container">
    <div class="nav">
        <a href="/">Home</a>
        <a href="/kontak">Kontak</a>
        <a href="/profil" class="active">Profil</a>
    </div>

    <div class="card">
        <div class="circle-avatar">NA</div>
        
        <h2>Natasya Helmalia</h2>
        <span class="sub">Mahasiswa / Sistem Informasi</span>
        
        <hr>
        
        <span class="bio-title">BIODATA SINGKAT</span>
        <p class="bio-text">
            "Hai, saya Natasya! Seorang calon pengembang web yang suka belajar hal-hal baru. Melalui project praktikum ini, saya mengasah kemampuan saya dalam membangun website yang fungsional dan menarik secara visual. Senang bisa berbagi perjalanan belajar saya di sini!"
        </p>

        <a href="/" class="btn-back">Kembali ke Beranda</a>
    </div>
</div>
</div>
