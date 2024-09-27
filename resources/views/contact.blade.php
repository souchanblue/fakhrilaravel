@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<style>
    .contact-section {
        padding: 60px 0;
    }
    .contact-text {
        margin-bottom: 30px;
    }
    .contact-avatar img {
        width: 100%;
        border-radius: 10px;
    }
    .contact-list {
        margin-top: 20px;
    }
    .media {
        margin-bottom: 15px;
    }
    .info-data {
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
    }
    .info-data h6 {
        font-size: 2.5rem;
        color: #007bff; /* Warna tema */
    }
    label {
        font-weight: bold;
        color: #007bff; /* Warna untuk label */
    }
    p {
        margin-bottom: 0; /* Menghilangkan margin bawah pada paragraf */
    }
</style>

<section class="section contact-section gray-bg" id="contact">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-6">
                <div class="contact-text go-to">
                    <h3 class="dark-color">Contact</h3>
                    <h6 class="theme-color lead">Hubungi kami</h6>
                    <p>Jika Anda memiliki pertanyaan atau pertanyaan, jangan ragu untuk menghubungi saya. Saya di sini untuk membantu Anda!</p>
                    <div class="row contact-list">
                        <div class="col-md-6">
                            <div class="media">
                                <label>Email:</label>
                                <p> drfnfkhri12@gmail.com</p>
                            </div>
                            <div class="media">
                                <label>No Telp:</label>
                                <p> +62 851-4324-4459</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                <label>Alamat:</label>
                                <p> Jl. Percobaan No.83, Bandung, Jawa Barat</p>
                            </div>
                            <div class="media">
                                <label>Instagram:</label>
                                <p><a href="https://www.instagram.com/daafirh/" target="_blank">Instagram Profile</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-avatar">
                    <img src="{{ asset('images/contak.jpg') }}" alt="Foto Utama" class="img-fluid" style="border-radius: 10px;">
                </div>
                <br><br>
            </div>
        </div>
        <div class="contact-info">
            <div class="row">
                <div class="col-6 col-lg-3">
                    <div class="info-data text-center">
                        <h6 class="info h2" data-to="50" data-speed="50">50</h6>
                        <p class="m-0px font-w-600">Projects Collaborated</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="info-data text-center">
                        <h6 class="info h2" data-to="300" data-speed="300">300</h6>
                        <p class="m-0px font-w-600">Emails Received</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="info-data text-center">
                        <h6 class="info h2" data-to="150" data-speed="150">150</h6>
                        <p class="m-0px font-w-600">Calls Made</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="info-data text-center">
                        <h6 class="info h2" data-to="100" data-speed="100">100</h6>
                        <p class="m-0px font-w-600">Happy Clients</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
