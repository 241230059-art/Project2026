@extends('layouts.app')

@section('content')

<div style="
    max-width:800px;
    margin:50px auto;
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0 2px 10px rgba(0,0,0,0.08);
">

    <h2 style="
        text-align:center;
        color:#e88ab5;
        margin-bottom:30px;
    ">
        📞 Kontak Kami
    </h2>

    <div style="line-height:2;">
        <p><strong>Email :</strong> donasiku@gmail.com</p>
        <p><strong>Telepon :</strong> 0812-3456-7890</p>
        <p><strong>Alamat :</strong> Jakarta, Indonesia</p>
    </div>

    <hr style="margin:25px 0;">

    <h4>Kirim Pesan</h4>

    <form>
        <input type="text"
               placeholder="Nama"
               style="width:100%;padding:12px;margin-bottom:15px;border:1px solid #ddd;border-radius:6px;">

        <input type="email"
               placeholder="Email"
               style="width:100%;padding:12px;margin-bottom:15px;border:1px solid #ddd;border-radius:6px;">

        <textarea rows="4"
                  placeholder="Pesan"
                  style="width:100%;padding:12px;margin-bottom:15px;border:1px solid #ddd;border-radius:6px;"></textarea>

        <button type="submit"
                style="
                    background:#e88ab5;
                    color:white;
                    border:none;
                    padding:12px 20px;
                    border-radius:6px;
                    cursor:pointer;
                ">
            Kirim Pesan
        </button>
    </form>

</div>

@endsection