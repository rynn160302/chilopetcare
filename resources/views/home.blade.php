<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Slackey&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&family=Slackey&display=swap"
        rel="stylesheet" />

    <!-- My style -->
    <link rel="stylesheet" href="{{ asset('assets/css/homestyle.css') }}" />

    <!-- Logo Title Bar -->
    <link rel="icon" href="{{ asset('assets/img/logo2.png') }}" type="image/x-icon" />
    <title>Chilo Pet Care</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg- position-fixed w-100">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/img/logo2.png') }}" alt="Logo" width="30"
                    class="d-inline-block align-text-top me-3" />
                Chilo Pet Care</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-2">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#pelayanan">Pelayanan</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#info">Info</a>
                    </li>
                </ul>
                <div>
                    <a href="{{ route('profile.edit') }}"
                        class="btn button-primary rounded">{{ Auth::user()->name }}</a>
                    <form class="d-inline" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn btn-secondary rounded">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero">
        <div class="container h100">
            <div class="row h-100">
                <div class="col-md-10">
                    <!--<h1>Selamat Datang di
                            CHILO PET CARE.</h1>
                            <p class="text-end">Kami menyediakan berbagai service grooming
                                untuk kucing peliharaan anda.</p>-->
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
            <img src="{{ asset('assets/img/kucinguser.png') }}" alt=""
                class="position-absolute bottom-0 start-0 img-hero" />
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
                    <div class="box">
                        <img src="{{ asset('assets/img/kuman.png') }}" alt="">
                        <h3>MANDI BASIC</h3>
                        <p>Include :</p>
                        <ul style="list-style-type:disc;">
                            <li>Gunting Kuku</li>
                            <li>Cukur Bulu Kaki</li>
                            <li>Bersihkan Mata & Hidung</li>
                        </ul>
                        <h4> Rp. 80.000</h4>
                        <a href="#" class="btn">Pesan Sekarang</a>
                    </div>
                    <div class="box">
                        <img src="{{ asset('assets/img/kuman2.jpeg') }}" alt="">
                        <h3>MANDI JAMUR/KUTU</h3>
                        <p>Include :</p>
                        <ul style="list-style-type:disc;">
                            <li>Gunting Kuku</li>
                            <li>Cukur Bulu Kaki</li>
                            <li>Bersihkan Mata & Hidung</li>
                        </ul>
                        <h4> Rp. 100.000</h4>
                        <a href="#" class="btn">Pesan Sekarang</a>
                    </div>
                    <div class="box">
                        <img src="{{ asset('assets/img/kuman3.png') }}" alt="">
                        <h3>CUKUR BOTAK</h3>
                        <p>Include :</p>
                        <ul style="list-style-type:disc;">
                            <li>Gunting Kuku</li>
                            <li>Cukur Bulu Kaki</li>
                            <li>Bersihkan Mata & Hidung</li>
                            <li>Bersihkan Telinga</li>
                        </ul>
                        <h4> Rp. 120.000</h4>
                        <a href="#" class="btn">Pesan Sekarang</a>
                    </div>
                    <div class="box">
                        <img src="{{ asset('assets/img/kuman4.png') }}" alt="">
                        <h3>CUKUR MODEL</h3>
                        <p>Include :</p>
                        <ul style="list-style-type:disc;">
                            <li>Gunting Kuku</li>
                            <li>Cukur Bulu Kaki</li>
                            <li>Bersihkan Mata & Hidung</li>
                            <li>Bersihkan Telinga</li>
                        </ul>
                        <h4> Rp. 120.000</h4>
                        <a href="#" class="btn">Pesan Sekarang</a>
                    </div>
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
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9"></path>
                                    <path
                                        d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1">
                                    </path>
                                </svg>
                            </span>
                            <span class="d-block fw-semibold"> Hubungi di Whatsapp </span>
                            <small class="d-block mt-2 mb-4"> Berbicara dengan team kami. </small>
                            <a href="https://api.whatsapp.com/message/BMTP7S6BQWRQM1?autoload=1&app_absent=0"
                                target="_blank" class="fw-medium text-dark mb-1 d-block">+62 8382 299 4764</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card border-0 rounded-3">
                        <div class="card-body border-0 p-4">
                            <span class="icon-info d-block mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z">
                                    </path>
                                    <path d="M3 7l9 6l9 -6"></path>
                                </svg>
                            </span>
                            <span class="d-block fw-semibold"> Chat di Email </span>
                            <small class="d-block mt-2 mb-4"> Berbicara dengan team kami. </small>
                            <a href="mailto:chilopetcare@gmail.com" target="_blank"
                                class="fw-medium text-dark mb-1 d-block">chilopetcare@gmail.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card border-0 rounded-3">
                        <div class="card-body border-0 p-4">
                            <span class="icon-info d-block mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M12 9.5m-2.5 0a2.5 2.5 0 1 0 5 0a2.5 2.5 0 1 0 -5 0"></path>
                                    <path d="M6.428 12.494l7.314 -9.252"></path>
                                    <path d="M10.002 7.935l-2.937 -2.545"></path>
                                    <path d="M17.693 6.593l-8.336 9.979"></path>
                                    <path
                                        d="M17.591 6.376c.472 .907 .715 1.914 .709 2.935a7.263 7.263 0 0 1 -.72 3.18a19.085 19.085 0 0 1 -2.089 3c-.784 .933 -1.49 1.93 -2.11 2.98c-.314 .62 -.568 1.27 -.757 1.938c-.121 .36 -.277 .591 -.622 .591c-.315 0 -.463 -.136 -.626 -.593a10.595 10.595 0 0 0 -.779 -1.978a18.18 18.18 0 0 0 -1.423 -2.091c-.877 -1.184 -2.179 -2.535 -2.853 -4.071a7.077 7.077 0 0 1 -.621 -2.967a6.226 6.226 0 0 1 1.476 -4.055a6.25 6.25 0 0 1 4.811 -2.245a6.462 6.462 0 0 1 1.918 .284a6.255 6.255 0 0 1 3.686 3.092z">
                                    </path>
                                </svg>
                            </span>
                            <span class="d-block fw-semibold"> Lokasi Kami </span>
                            <small class="d-block mt-2 mb-4"> Pergi ke lokasi kami. </small>
                            <a href="https://goo.gl/maps/VoEPB511sivjB7A9A" target="_blank"
                                class="fw-medium text-dark mb-1 d-block">Buka di Google Maps</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card border-0 rounded-3">
                        <div class="card-body border-0 p-4">
                            <span class="icon-info d-block mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z">
                                    </path>
                                    <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                                    <path d="M16.5 7.5l0 .01"></path>
                                </svg>
                            </span>
                            <span class="d-block fw-semibold"> Social Media </span>
                            <small class="d-block mt-2 mb-4"> Kunjungi kami disini. </small>
                            <a href="https://www.instagram.com/chilo.petcare/?igshid=MzRlODBiNWFlZA%3D%3D"
                                target="_blank" class="fw-medium text-dark mb-1 d-block">@Chilo.Petcare</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
