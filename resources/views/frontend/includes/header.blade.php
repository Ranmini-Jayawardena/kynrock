<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    @php

        $room = e(Request::segment(2));

        if (request()->is('stay')) {
            $meta = \App\Helpers\HeaderHelper::getMeta('stay');
        } elseif (request()->is('experience')) {
            $meta = \App\Helpers\HeaderHelper::getMeta('experience');
        } elseif (request()->is('gallery')) {
            $meta = \App\Helpers\HeaderHelper::getMeta('gallery');
        } elseif (request()->is('about-us')) {
            $meta = \App\Helpers\HeaderHelper::getMeta('about-us');
        } elseif (request()->is('contact-us')) {
            $meta = \App\Helpers\HeaderHelper::getMeta('contact-us');
        } elseif (request()->is('room-details/' . $room)) {
            $meta = \App\Helpers\HeaderHelper::getRoomDetail($room, 'room-details');
        } elseif (request()->is('wedding')) {
            $meta = \App\Helpers\HeaderHelper::getMeta('wedding');
        } elseif (request()->is('location')) {
            $meta = \App\Helpers\HeaderHelper::getMeta('location');
        } else {
            $meta = \App\Helpers\HeaderHelper::getMeta('home');
        }

    @endphp

    <meta http-equiv="cleartype" content="on">
    <meta name="MobileOptimized" content="width">
    <link rel="icon" type="image/png" href="{{ asset('public/frontend/images/favicon.png') }}">
    <meta name="description" content="{{ $meta->description }}" />
    <meta name="robots" content="{{ $meta->robots }}" />
    <meta name="keywords" content="{{ $meta->keywords }}" />
    <meta name="og:title" content="{{ $meta->og_title }}" />
    <meta name="og:type" content="{{ $meta->og_type }}" />
    <meta name="og:tag" content="{{ $meta->og_tag }}" />
    <meta name="og:url" content="{{ $meta->og_url }}" />
    <meta name="og:image" content="{{ asset('storage/app/' . $meta->og_image) }}" />
    <meta name="og:site_name" content="{{ $meta->og_sitename }}" />
    <meta name="og:description" content="{{ $meta->og_description }}" />
    <link rel="canonical" href="{{ url()->full() }}" />
    <title>{{ $meta->page_title }}</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('public/frontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('public/frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/mediaquery.css') }}" rel="stylesheet">
    <!-- Custom CSS -->


    <!--favicon-->
    <link rel="shortcut icon" href="{{ asset('public/frontend/images/favicon.png') }}" />
    <!--favicon-->

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Add icon library -->

    <!-- owl carousel -->
    <link href="{{ asset('public/frontend/owl/owl.carousel.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/owl/owl_css.css') }}">
    <!-- owl carousel -->

    <!-- Link Swiper's CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'>
    <link rel="stylesheet" href="{{ asset('public/frontend/css/style.css') }}">


    <!-- loading effect -->
    <link rel="stylesheet" href="{{ asset('public/frontend/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/loading_styles.css') }}">
    <!-- loading effect -->

    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="{{ asset('public/frontend/gallery/fancybox.min.css') }}">
    <!-- Fancybox CSS -->

    <!-- date picker -->
    <link rel='stylesheet' href='{{ asset('public/frontend/date_picker/bootstrap-datepicker.min.css') }}'>
    <link src="{{ asset('public/frontend/date_picker/date_picker.css') }}">
    </link>
    <!-- date picker -->

    <!--scroll bar style-->
    <style>
        ::-webkit-scrollbar {
            background: #000000;
            height: 5px;
            width: 5px;
        }

        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 2px #73A9AD;
        }

        ::-webkit-scrollbar-thumb {
            background: #73A9AD;
            border-radius: 2px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #73A9AD;
        }
    </style>
    <!--scroll bar style-->


</head>

<body>

    <!-- main slider start -->
    <div>

        <div class="paginacontainer">
            <div class="progress-wrap">
                <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
                </svg>
            </div>
        </div>

        <div class="nav_bar">
            <div class="container-fluid position-relative nav_col">
                <div class="align-items-center">

                    <div class="row text-end">

                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('public/frontend/images/logo_header.png') }}" alt="logo_header"
                                    class="header_logo">
                            </a>
                        </div>

                        <!-- ================ -->

                        <div
                            class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12 pe-4 d-none d-lg-flex justify-content-end align-items-center gap-4">

                            <div>
                                <div class="top_nav d-flex justify-content-end gap-4">

                                    <a href="tel: {{ $contactDetails->contact_no }}">
                                        <p class="mb-0"><i
                                                class="fa-solid fa-phone me-2"></i>{{ $contactDetails->contact_no }}
                                        </p>
                                    </a>
                                    <!-- ======================= -->
                                    <a href="mailto:{{ $contactDetails->email }}">
                                        <p class="mb-0"><i
                                                class="fa-regular fa-envelope me-2"></i>{{ $contactDetails->email }}
                                        </p>
                                    </a>

                                    <div class="d-flex gap-3">
                                        @if ($contactDetails->facebook_url != '' && $contactDetails->facebook_url != '#')
                                            <a href="{{ $contactDetails->facebook_url }}">
                                                <p class="mb-0"><i class="fab fa-facebook-f"></i></p>
                                            </a>
                                        @endif
                                        @if ($contactDetails->twitter_url != '' && $contactDetails->twitter_url != '#')
                                            <a href="{{ $contactDetails->twitter_url }}">
                                                <p class="mb-0"><i class="fa-brands fa-x-twitter"></i></i></p>
                                            </a>
                                        @endif
                                        @if ($contactDetails->youtube_url != '' && $contactDetails->youtube_url != '#')
                                            <a href="{{ $contactDetails->youtube_url }}">
                                                <p class="mb-0"><i class="fa-brands fa-youtube"></i></p>
                                            </a>
                                        @endif
                                        @if ($contactDetails->instagram_url != '' && $contactDetails->instagram_url != '#')
                                            <a href="{{ $contactDetails->instagram_url }}">
                                                <p class="mb-0"><i class="fa-brands fa-instagram"></i></p>
                                            </a>
                                        @endif
                                    </div>

                                </div>

                                <nav class="navbar navbar-expand-lg d-none d-lg-block pb-0">
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                                        <ul class="navbar-nav">
                                            <li class="nav-item">
                                                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link {{ request()->is('stay') ? 'active' : '' }}" href="{{ route('stay') }}">Stay</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="dining.html">Dining </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link {{ request()->is('wedding') ? 'active' : '' }}" href="{{ route('wedding') }}">Weddings</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link {{ request()->is('gallery') ? 'active' : '' }}" href="{{ route('gallery') }}">Gallery</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link {{ request()->is('about-us') ? 'active' : '' }}" href="{{ route('about-us') }}">About Us</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link {{ request()->is('location') ? 'active' : '' }}" 
                                                    href="{{ route('location') }}">Location</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link {{ request()->is('experience') ? 'active' : '' }}" href="{{ route('experience') }}">Experience</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link border-0 {{ request()->is('contact-us') ? 'active' : '' }}" href="{{ route('contact-us') }}">Contact Us</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>

                            <div>
                                <a href="contact.html">
                                    <button class="header_btn">
                                        <span>
                                            <i class="fa-solid fa-bell"></i>
                                            BOOK NOW</span>
                                    </button>
                                </a>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- main slider end -->
