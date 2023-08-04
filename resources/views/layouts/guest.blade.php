{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html> --}}

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="Assets/img/logo2.png" type="image/x-icon" />
    <title>Chilo Pet Care</title>
    <link rel="stylesheet" href="{{asset('assets/css/style1.css')}}" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&family=Slackey&display=swap" rel="stylesheet">
  </head>
  <body class="bg-custom">
    <div class="element-1">
      <svg viewBox="0 0 153 101" fill="none" xmlns="http://www.w3.org/2000/svg">
        <ellipse cx="56.5" cy="39.5" rx="96.5" ry="61.5" fill="#9ED1DA" />
      </svg>
    </div>
    <div class="element-2">
      <svg viewBox="0 0 150 133" fill="none" xmlns="http://www.w3.org/2000/svg">
        <ellipse cx="53.5" cy="89" rx="96.5" ry="89" fill="#EBD29C" />
      </svg>
    </div>
    <main class="d-flex container">
      <div class="w-50 p-5 content-form">
        <div class="element-3">
          <svg
            width="141"
            height="98"
            viewBox="0 0 141 98"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M0.00763512 26.5735L140.806 0.925202L94.3227 134.215L0.00763512 26.5735Z"
              fill="#9ED1DA"
            />
          </svg>
        </div>
        <div class="element-4">
          <svg
            width="220"
            height="121"
            viewBox="0 0 290 121"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M116.827 0.836955L290 83.5L110.574 120.859L0.752184 32L76.5 32L116.827 0.836955Z"
              fill="#9ED1DA"
            />
          </svg>
        </div>
        <div class="element-5">
          <svg
            width="153"
            height="160"
            viewBox="0 0 153 160"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M151.5 108.082C151.5 109.738 117.697 159.582 76 159.582C34.3025 159.582 0.5 109.738 0.5 108.082C0.5 106.425 78.8025 0.5 120.5 0.5C162.197 0.5 151.5 106.425 151.5 108.082Z"
              fill="#EBD29C"
            />
          </svg>
        </div>
        <div class="element-6">
          <svg
            width="101"
            height="86"
            viewBox="0 0 101 86"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M0.292777 33.6376L87.496 -37.7407L100.5 85.1912L0.292777 33.6376Z"
              fill="#EBD29C"
            />
          </svg>
        </div>
        <h2 class="text-pet mt-5">CHILO <br />PET CARE</h2>
        {{ $slot }}
    </div>
      <div class="w-50">
        <img class="img-fluid" src="Assets/img/kucinglucu.png" alt="" />
      </div>
    </main>
  </body>
</html>
