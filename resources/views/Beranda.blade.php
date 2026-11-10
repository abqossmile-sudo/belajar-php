@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

<section class="hero">
    <div class="hero-text">
        <span class="eyebrow">
            <i class="bi bi-code-slash"></i>
            WEBSITE PEMBELAJARAN
        </span>

        <h2 style="color: yellow;">Selamat Datang di<br>Website Saya</h2>

        <p>
            Belajar pemrograman PHP dan Laravel,
            mengenal data diri, aktivitas, serta informasi kontak
            dalam satu website serta peroject yang telah dikerjakan
        </p>

        <a href="{{ route('DataDiri') }}" class="btn">
            Jelajahi Sekarang
            <i class="bi bi-arrow-right"></i>
        </a>
    </div>

    <div class="hero-image">
        <img
            src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=1000&q=85"
            alt="Laptop untuk belajar pemrograman">
    </div>
</section>


<section class="cards">

    <!-- PROJEK 1 -->
    <div class="card">
        <div class="icon-circle blue">
            <i class="bi bi-globe"></i>
        </div>
        <h3>Projek 1</h3>
        <p>Pengembangan website dan aplikasi berbasis teknologi informasi.</p>
        
    </div>

    <!-- PROJEK 2 -->
    <div class="card">
        <div class="icon-circle green">
            <i class="bi bi-database-fill"></i>
        </div>
        <h3>Projek 2</h3>
        <p>Pembuatan dan pengelolaan database menggunakan MySQL.</p>
        
    </div>

    <!-- PROJEK 3 -->
    <div class="card">
        <div class="icon-circle purple">
            <i class="bi bi-code-slash"></i>
        </div>
        <h3>Projek 3</h3>
        <p>Pengembangan aplikasi menggunakan PHP dan Laravel.</p>
        
    </div>

    <!-- PROJEK 4 -->
    <div class="card">
        <div class="icon-circle red">
            <i class="bi bi-bar-chart-fill"></i>
        </div>
        <h3>Projek 4</h3>
        <p>Pengolahan data, analisis informasi dan visualisasi data.</p>
        
    </div>

    <!-- PROJEK 5 -->
    <div class="card">
        <div class="icon-circle yellow">
            <i class="bi bi-robot"></i>
        </div>
        <h3>Projek 5</h3>
        <p>Eksplorasi kecerdasan buatan atau Artificial Intelligence.</p>
        
    </div>

</section>


@endsection
