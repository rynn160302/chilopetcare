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
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

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
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#testimoni">Testimoni</a>
                    </li>
                </ul>
                <div>
                    <a href="{{route('register')}}" class="btn button-primary rounded">Daftar</a>
                    <a href="{{route('login')}}" class="btn btn-secondary rounded">Masuk</a>
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
                    <div class="selamat-datang-di-container">
                        <p class="blank-line text-center">Selamat Datang di</p>
                        <p class="chilo-pet-care text-center">
                            <span>CHILO PET CARE</span>
                            <span class="span"> </span>
                        </p>
                    </div>
                    <div class="kami-menyediakan-berbagai-container">
                        <p class="blank-line text-center">Kami menyediakan berbagai service grooming</p>
                        <p class="blank-line text-center">untuk kucing peliharaan anda.</p>
                    </div>
                </div>
            </div>
            <img src="{{ asset('assets/img/fotokucing.png') }}" alt=""
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
            <div class="row">
                <div class="col-md-3 text-center">
                    <div class="card-pelayanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="{{ asset('assets/img/kuman.png') }}" alt=""
                                class="position-absolute top-50 start-50 translate-middle" />
                        </div>
                        <h3 class="mandi mt-4">MANDI BASIC</h3>
                        <p class="isi-1 mt-3">Bagian yang paling penting dari perawatan kucing peliharaan karena untuk
                            menghilangkan bau tidak sedap dan kotoran yang menumpuk pada kucing, sehingga kulit dan bulu
                            pada kucing menjadi sehat.</p>
                    </div>
                </div>

                <div class="col-md-3 text-center">
                    <div class="card-pelayanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="{{ asset('assets/img/kuman2.jpeg') }}" alt=""
                                class="position-absolute top-50 start-50 translate-middle" />
                        </div>
                        <h3 class="mandi mt-4">MANDI JAMUR</h3>
                        <p class="isi-1 mt-3">Perawatan dengan membersihkan kucing dengan menggunakan sampo khusus
                            jamur. Karena jamur sangat berbahaya dan menular kemudian akan merusak rambut dan membuat
                            rambut kucing peliharaan menjadi rontok.</p>
                    </div>
                </div>

                <div class="col-md-3 text-center">
                    <div class="card-pelayanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="{{ asset('assets/img/kuman3.png') }}" alt=""
                                class="position-absolute top-50 start-50 translate-middle" />
                        </div>
                        <h3 class="mandi mt-4">CUKUR BOTAK</h3>
                        <p class="isi-1 mt-3">Mencukur habis seluruh bulu kucing karna kebutuhan tertentu, misalnya
                            jika
                            kucingmu terkena infeksi jamur dan treatment kutu jika berlebih agar pengobatannya menjadi
                            lebih cepat karna tidak terhalang oleh bulu.</p>
                    </div>
                </div>

                <div class="col-md-3 text-center">
                    <div class="card-pelayanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="{{ asset('assets/img/kuman4.png') }}" alt=""
                                class="position-absolute top-50 start-50 translate-middle" />
                        </div>
                        <h3 class="mandi mt-4">CUKUR MODEL</h3>
                        <p class="isi-1 mt-3">Mencukur bulu kucing agar terlihat lebih rapi dan lucu,cukur model ini
                            bisa kamu request di chilo petcare atau menggunakan model yang kami sediakan.cukur model ini
                            pun cocok digunakan jika kucingmu akan di operasi agar lebih memudahkan prosesnya.</p>
                    </div>
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

    <!-- Testimoni -->
    <section id="testimoni" class="mb-5">
        <div class="text-center mb-4">
            <h2 class="title-pelayanan">Testimoni</h2>
            <span class="sub-title">Berikut beberapa testimoni dari customer.</span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="card border-0" style="margin-top: 5rem; min-height: 30rem">
                        <div class="bg-warning px-5">
                            <img src="{{ asset('assets/testi/testi1.png') }}" class="card-img-top"
                                style="margin-top: -5rem; height: 344px" alt="..." />
                        </div>
                        <div class="card-body testimoni-card border-0 text-center">
                            <h5 class="card-title">Sadyani & Cici</h5>
                            <p class="card-text">"Terima kasih kepada tim grooming di Chilo pet care ini! Hewan
                                kesayangan saya sekarang terlihat begitu memesona dan wangi."</p>
                            <div class="d-flex justify-content-center align-items-end">
                                <img src="{{ asset('assets/img/svg/icon-pet-pill.svg') }}" alt="" />
                                <img src="{{ asset('assets/img/svg/icon-pet-pill.svg') }}" alt="" />
                                <img src="{{ asset('assets/img/svg/icon-pet-pill.svg') }}" alt="" />
                                <img src="{{ asset('assets/img/svg/icon-pet-pill.svg') }}" alt="" />
                                <img src="{{ asset('assets/img/svg/icon-pet.svg') }}" alt="" />

                                <small class="d-block ms-2"> 4/5 </small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card border-0" style="margin-top: 5rem; min-height: 30rem">
                        <div class="bg-warning px-5">
                            <img src="{{ asset('assets/testi/testi3.png') }}" class="card-img-top"
                                style="margin-top: -5rem; height: 344px" alt="..." />
                        </div>
                        <div class="card-body testimoni-card border-0 text-center">
                            <h5 class="card-title">Daffa & Olip</h5>
                            <p class="card-text">"Saya sangat senang dengan hasil grooming di sini. Bulu kucing saya
                                kini terlihat lebih lembut dan bersinar."</p>
                            <div class="d-flex justify-content-center align-items-end">
                                <img src="{{ asset('assets/img/svg/icon-pet-pill.svg') }}" alt="" />
                                <img src="{{ asset('assets/img/svg/icon-pet-pill.svg') }}" alt="" />
                                <img src="{{ asset('assets/img/svg/icon-pet-pill.svg') }}" alt="" />
                                <img src="{{ asset('assets/img/svg/icon-pet-pill.svg') }}" alt="" />
                                <img src="{{ asset('assets/img/svg/icon-pet.svg') }}" alt="" />

                                <small class="d-block ms-2"> 4/5 </small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card border-0" style="margin-top: 5rem; min-height: 30rem">
                        <div class="bg-warning px-5">
                            <img src="{{ asset('assets/testi/testi2.png') }}" class="card-img-top"
                                style="margin-top: -5rem; height: 344px" alt="..." />
                        </div>
                        <div class="card-body testimoni-card border-0 text-center">
                            <h5 class="card-title">Nanda & Sikembar</h5>
                            <p class="card-text">"Tim grooming di Chilo pet care ini benar-benar berkomitmen untuk
                                memberikan perawatan terbaik pada hewan kesayangan kami."</p>
                            <div class="d-flex justify-content-center align-items-end">
                                <img src="{{ asset('assets/img/svg/icon-pet-pill.svg') }}" alt="" />
                                <img src="{{ asset('assets/img/svg/icon-pet-pill.svg') }}" alt="" />
                                <img src="{{ asset('assets/img/svg/icon-pet-pill.svg') }}" alt="" />
                                <img src="{{ asset('assets/img/svg/icon-pet-pill.svg') }}" alt="" />
                                <img src="{{ asset('assets/img/svg/icon-pet.svg') }}" alt="" />

                                <small class="d-block ms-2"> 4/5 </small>
                            </div>
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
