@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
<!-- Header: Nama Lengkap dan Foto Profil -->
<header class="text-center mb-5">
    <h1><strong>Darfian Fahkri</strong></h1> <!-- Ganti dengan nama lengkap Anda -->
    <!-- Foto profil tanpa tampilan bulat dan dengan efek bayangan -->
    <img src="{{ asset('images/pp2.jpg') }}" alt="Foto Profil" class="img-fluid" style="border: 5px solid #007bff; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);" width="250">
</header>

<!-- Hero Section -->
<section class="hero-section text-center mb-5">
    <div class="hero-background" style="background-image: url('{{ asset('images/hero-bg.jpg') }}'); height: 300px; background-size: cover;">
        <div class="overlay d-flex flex-column justify-content-center align-items-center" style="background: rgba(0, 0, 0, 0.5); height: 100%;">
            <h2 class="text-white">Siswa SMK Pengembangan Perangkat Lunak dan Gim</h2>
            <a href="/about" class="btn btn-primary mt-3"> Lebih Lanjut</a>
        </div>
    </div>
</section>

<!-- Tentang Saya (Sekilas) -->
<section id="about" class="text-center mb-5">
    <h2 class="heading-section">Tentang Saya</h2>
    <p>Nama saya darfian fakhri, saat ini saya bersekolah di SMK Bakti Nusantara 666 kelas XII jurusan PPlG.</p>
    <a href="{{ url('/about') }}" class="btn btn-secondary">Lebih Lanjut</a>
</section>

<!-- Proyek Unggulan -->
<section class="projects-section text-center mb-5">
    <h2 class="heading-section">Proyek Saya</h2>
    <div class="row justify-content-center">
        <!-- Contoh Proyek -->
        <div class="col-md-4">
            <div class="card mb-4" style="border: 1px solid #007bff; border-radius: 10px;">
                <img src="{{ asset('images/gambar2.png') }}" class="card-img-top" alt="Proyek 1">

                <div class="card-body">
                    <h5 class="card-title">Bandung lautan api</h5>
                    <p class="card-text">Project STS kelas 11</p>
                    <a href="https://github.com/Darfianfahkhri/UPRAK-BLA" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4" style="border: 1px solid #007bff; border-radius: 10px;">
                <img src="{{ asset('images/gambar1.jpg') }}" class="card-img-top" alt="Proyek 1">
                <div class="card-body">
                    <h5 class="card-title">Blog tentang hewan</h5>
                    <p class="card-text">Website informasi Hewan</p>
                    <a href="https://github.com/Darfianfahkhri/darfianfahkhri" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4" style="border: 1px solid #007bff; border-radius: 10px;">
                <img src="{{ asset('images/cv.png') }}" class="card-img-top" alt="Proyek 1">

                <div class="card-body">
                    <h5 class="card-title">CV</h5>
                    <p class="card-text">Project pertama saya.</p>
                    <a href="Darfianfahkhri.github.io" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
    
        <!-- Tambahkan proyek lainnya jika diperlukan -->
    </div>
</section>
@endsection