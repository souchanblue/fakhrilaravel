@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-1 text-center mb-4">
            <h1>
                <span class="text-primary">Projects</span>
            </h1>
            <p>
                Selamat datang di halaman Projects. Berikut adalah beberapa proyek yang telah saya kerjakan.
            </p>
        </div>
    </div>

    <div class="row mb-4">
        <!-- Proyek 1 -->
        <div class="col-md-8 offset-md-1">
            <div class="border border-primary p-3 rounded mb-3 bg-light">
                <h3 class="text-primary">Blog tentang Hewan</h3>
                <img src="{{ asset('images/gambar1.jpg') }}" class="img-fluid" alt="Blog tentang Hewan">
                <p>Proyek ini adalah sebuah blog yang membahas berbagai jenis hewan. Tujuannya adalah untuk meningkatkan kesadaran dan pengetahuan masyarakat tentang keberagaman fauna dan pentingnya pelestarian lingkungan.</p>
                <p><small class="text-muted">Teknologi: HTML, CSS, JavaScript</small></p>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <!-- Proyek 2 -->
        <div class="col-md-8 offset-md-1">
            <div class="border border-success p-3 rounded mb-3 bg-light">
                <h3 class="text-primary">Bandung Lautan Api</h3>
                <img src="{{ asset('images/gambar2.png') }}" class="img-fluid" alt="Bandung Lautan Api">
                <p>Proyek ini menceritakan peristiwa bersejarah Bandung Lautan Api. Dengan tujuan untuk mengenang perjuangan masyarakat Bandung dalam mempertahankan kemerdekaan.</p>
                <p><small class="text-muted">Teknologi: Multimedia</small></p>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <!-- Proyek 3 -->
        <div class="col-md-8 offset-md-1">
            <div class="border border-warning p-3 rounded mb-3 bg-light">
                <h3 class="text-primary">Curriculum Vitae (CV)</h3>
                <img src="{{ asset('images/cv.png') }}" class="img-fluid" alt="Curriculum Vitae">
                <p>Ini adalah proyek CV saya, yang mencakup informasi pribadi, pendidikan, pengalaman kerja, dan keterampilan. Proyek ini dirancang untuk menampilkan kualifikasi saya secara profesional dan menarik.</p>
                <p><small class="text-muted">Teknologi: HTML, CSS</small></p>
            </div>
        </div>
    </div>
</div>
@endsection
