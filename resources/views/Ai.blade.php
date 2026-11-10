
@extends('layouts.app')

@section('title', 'AI')

@section('content')

<div style="font-family: Arial, sans-serif; text-align: center; padding-top: 50px;">

    <h2>Anda sedang dialihkan ke ChatGPT...</h2>

    <p>Mohon tunggu 2 detik.</p>

    <p>
        Jika halaman tidak berpindah secara otomatis,
        silakan klik tombol berikut.
    </p>

    <a href="https://chatgpt.com"
       target="_blank"
       rel="noopener noreferrer"
       style="
           display: inline-block;
           padding: 12px 25px;
           background-color: #10a37f;
           color: white;
           text-decoration: none;
           border-radius: 8px;
           font-weight: bold;
       ">
       Buka ChatGPT
    </a>

</div>

<script>
    // Membuka ChatGPT di tab baru setelah 2 detik
    setTimeout(function() {
        window.open("https://chatgpt.com", "_blank");
    }, 2000);
</script>

@endsection
