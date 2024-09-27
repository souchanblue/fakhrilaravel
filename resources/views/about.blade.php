@extends('layouts.app')

@section('content')
    <!-- Biografi Singkat -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4" style="border-radius: 10px; overflow: hidden;">
                    <div class="card-image">
                        <img src="{{ asset('images/pp.jpg') }}" alt="Foto Utama" class="img-fluid" style="border-radius: 10px;">
                        <div class="card-content d-flex flex-column align-items-center">
                            <h4 class="pt-2">Darfian Fahkri</h4>
                            <h5>Programmer</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="about-section p-4" style="background-color: #fff; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
                    <h2 class="text-left">Biografi</h2>
                    <p class="text-left">Nama: Darfian Fahkri</p>
                    <p class="text-left">Kelas: XII PPLG 1</p>
                    <p class="text-left">Umur: 17 Tahun</p>
                    <p class="text-left">Tempat Lahir: Bandung</p>
                    <p class="text-left">Alamat Sekolah: SMK Bakti Nusantara 666</p>
                    <p class="text-left">Saya memiliki minat besar dalam pemrograman dan telah mengikuti beberapa kursus terkait pengembangan web.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Keterampilan dan Keahlian -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="skills-section p-4" style="background-color: #fff; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
                    <h2 class="text-left">Keterampilan dan Keahlian</h2>
                    <ul class="list-group">
                        <li class="list-group-item">Pemrograman: HTML, CSS, JavaScript, PHP, Laravel</li>
                        <li class="list-group-item">Desain Grafis: Adobe Photoshop, CorelDRAW</li>
                        <li class="list-group-item">Teknik Jaringan: Konfigurasi Router, Troubleshooting Jaringan</li>
                        <li class="list-group-item">Proyek: Website e-commerce, Sistem Manajemen Perpustakaan</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Tujuan dan Aspirasi -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="goals-section p-4" style="background-color: #fff; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
                    <h2 class="text-left">Tujuan dan Aspirasi</h2>
                    <p class="text-left">Saya berencana untuk melanjutkan pendidikan ke bidang teknik informatika dan bekerja sebagai pengembang perangkat lunak. Saya juga tertarik dengan pengembangan aplikasi mobile dan Laravel.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
