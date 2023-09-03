@extends('layouts.app')
@section('title', 'Home')
@section('content')

    <!-- Hero Section -->
    <section id="hero">
        <div class="container h100">
            <div class="row h-100">
                <div class="col-md-10">
                    <div class="paragraf-1">
                        <p class="blank-line text-justify">Selamat datang di Chilo Pet Care, rumah bagi setiap pemilik
                            hewan peliharaan yang peduli dan penuh cinta.
                            Di sini, kami mengutamakan kesehatan, kebahagiaan, dan kenyamanan setiap hewan kesayangan
                            Anda, karena kami percaya bahwa mereka adalah bagian berharga dari keluarga Anda.</p> <br>
                        Dengan hati yang tulus, tim profesional kami berkomitmen untuk memberikan perawatan terbaik
                        untuk hewan kesayangan Anda, tidak peduli ukuran, jenis, atau usia mereka.
                        Kami memahami bahwa setiap hewan memiliki kebutuhan unik, dan itulah mengapa kami menyesuaikan
                        layanan kami dengan penuh perhatian dan keahlian.
                    </div>
                </div>
            </div>
            <img src="{{ asset('assets/img/kucinguser.png') }}" alt="" class="position-absolute bottom-0 start-0 img-hero" />
        </div>
    </section>

    <!-- Pelayanan Section-->
    <section id="pelayanan">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="title-pelayanan">Pelayanan</h2>
                    <span class="sub-title">Chilo Pet Care menjadi solusi Anabul anda</span>
                </div>
            </div>
            <br />
            <br />
            <div class="container">
                <div class="box-container">
                    @forelse ($products as $product)
                        <div class="box">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="">
                            <h3>{{ $product->name }}</h3>
                            <p>Include :</p>
                            <p>
                                {{ $product->description }}
                            </p>
                            <h4>{{ $product->formatPrice($product->price) }}</h4>
                            <a href="{{ route('product.show', $product->id) }}" class="btn">Pesan Sekarang</a>
                        </div>
                    @empty
                        <div class="text-center">
                            No data
                        </div>
                    @endforelse
                </div>
            </div>
    </section>

    <!-- Contact us / Info -->
    <section id="info" class="mb-5 pb-5">
        <div class="text-center mb-5">
            <h2 class="title-pelayanan">Info</h2>
            <span class="sub-title">Hubungi kami disini.</span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="card border-0 rounded-3">
                        <div class="card-body border-0 p-4">
                            <span class="icon-info d-block mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9"></path>
                                    <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1">
                                    </path>
                                </svg>
                            </span>
                            <span class="d-block fw-semibold"> Hubungi di Whatsapp </span>
                            <small class="d-block mt-2 mb-4"> Berbicara dengan team kami. </small>
                            <a href="https://api.whatsapp.com/message/BMTP7S6BQWRQM1?autoload=1&app_absent=0" target="_blank" class="fw-medium text-dark mb-1 d-block">+62 8382 299 4764</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card border-0 rounded-3">
                        <div class="card-body border-0 p-4">
                            <span class="icon-info d-block mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z">
                                    </path>
                                    <path d="M3 7l9 6l9 -6"></path>
                                </svg>
                            </span>
                            <span class="d-block fw-semibold"> Chat di Email </span>
                            <small class="d-block mt-2 mb-4"> Berbicara dengan team kami. </small>
                            <a href="mailto:chilopetcare@gmail.com" target="_blank" class="fw-medium text-dark mb-1 d-block">chilopetcare@gmail.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card border-0 rounded-3">
                        <div class="card-body border-0 p-4">
                            <span class="icon-info d-block mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M12 9.5m-2.5 0a2.5 2.5 0 1 0 5 0a2.5 2.5 0 1 0 -5 0"></path>
                                    <path d="M6.428 12.494l7.314 -9.252"></path>
                                    <path d="M10.002 7.935l-2.937 -2.545"></path>
                                    <path d="M17.693 6.593l-8.336 9.979"></path>
                                    <path d="M17.591 6.376c.472 .907 .715 1.914 .709 2.935a7.263 7.263 0 0 1 -.72 3.18a19.085 19.085 0 0 1 -2.089 3c-.784 .933 -1.49 1.93 -2.11 2.98c-.314 .62 -.568 1.27 -.757 1.938c-.121 .36 -.277 .591 -.622 .591c-.315 0 -.463 -.136 -.626 -.593a10.595 10.595 0 0 0 -.779 -1.978a18.18 18.18 0 0 0 -1.423 -2.091c-.877 -1.184 -2.179 -2.535 -2.853 -4.071a7.077 7.077 0 0 1 -.621 -2.967a6.226 6.226 0 0 1 1.476 -4.055a6.25 6.25 0 0 1 4.811 -2.245a6.462 6.462 0 0 1 1.918 .284a6.255 6.255 0 0 1 3.686 3.092z">
                                    </path>
                                </svg>
                            </span>
                            <span class="d-block fw-semibold"> Lokasi Kami </span>
                            <small class="d-block mt-2 mb-4"> Pergi ke lokasi kami. </small>
                            <a href="https://goo.gl/maps/VoEPB511sivjB7A9A" target="_blank" class="fw-medium text-dark mb-1 d-block">Buka di Google Maps</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card border-0 rounded-3">
                        <div class="card-body border-0 p-4">
                            <span class="icon-info d-block mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z">
                                    </path>
                                    <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                    <path d="M16.5 7.5l0 .01"></path>
                                </svg>
                            </span>
                            <span class="d-block fw-semibold"> Social Media </span>
                            <small class="d-block mt-2 mb-4"> Kunjungi kami disini. </small>
                            <a href="https://www.instagram.com/chilo.petcare/?igshid=MzRlODBiNWFlZA%3D%3D" target="_blank" class="fw-medium text-dark mb-1 d-block">@Chilo.Petcare</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
