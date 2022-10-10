<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Tanah Merdeka</title>
    <link rel="icon" type="image/x-icon" href="{{asset('')}}uploads/sengketa-logo_pas.ico">
    <meta name="keywords" content="sengketa tanah, sengketa, tanah, konflik tanah, tanah">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs5/dt-1.12.1/b-2.2.3/datatables.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnify/2.3.3/css/magnify.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/js-image-zoom/js-image-zoom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-image-zoom/js-image-zoom.min.js"></script>


    <style>
        body {
            width: 100%;
            margin: 0px;
            padding: 0px;
            overflow-x: hidden;
        }

        .blink {
            animation: blink-animation 1s steps(5, start) infinite;
            -webkit-animation: blink-animation 1s steps(5, start) infinite;
        }

        .aboute-bottom {
            position: fixed;
            bottom: 0;
            z-index: 1030;
            left: 0;
            right: 0;
        }

        .aboute-bottom svg {
            opacity: 75%;
        }

        .aboute-bottom h6 {
            opacity: 75%;
        }


        @keyframes blink-animation {

            to {

                visibility: hidden;

            }

        }

        @-webkit-keyframes blink-animation {
            to {
                visibility: hidden;
            }
        }

        .line-1 {
            height: 3px;
            background: black;
            width: 96.999%;
            margin: 0px auto;
        }

        .dot {
            height: 15px;
            width: 15px;
            background-color: #dc3545 !important;
            border-radius: 50%;
            display: inline-block;
            margin-top: -30px;
        }

        .center {
            padding: 70px 0;
            text-align: center;
        }

        .ribbon-pop {
            background: linear-gradient(270deg, #4f396a 5.25%, #576bb0 96.68%);
            display: block;
            padding: 5px 30px 5px 10px;
            color: white;
            position: absolute;
            width: 100px;
            z-index: 999;
            margin-top: 0px;
            margin-left: -15px;
            margin-bottom: -10px;

        }

        .ribbon-pop:after {
            content: "";
            width: 0;
            height: 0;
            top: 0;
            position: absolute;
            right: 0;
            border-right: 20px solid transparent;
            border-top: 17px solid transparent;
            border-bottom: 17px solid transparent;
        }

        .ribbon-pop:before {
            height: 0;
            width: 0;
            border-top: 15px solid #381f57;
            border-left: 15px solid transparent;
            bottom: -15px;
            position: absolute;
            content: "";
            left: 0;
        }

        section {
            $h1-font-size: 55px;

            color: rgba(255, 255, 255, 0.738);
            flex-direction: column;

            >h2 {
                font-size: 25px;
            }

            >h1 {
                font-size: $h1-font-size;
            }

            ul {
                margin-top: 15px;
                list-style: none;

                column-gap: 50px;

                li {
                    text-align: center;

                    h1 {
                        font-size: $h1-font-size;
                    }

                    p {
                        font-size: 14px;
                    }
                }
            }
        }

    </style>

    <style>
        body {
            background-color: #eee;

        }



        .bdge {
            height: 21px;
            background-color: orange;
            color: #fff;
            font-size: 11px;
            padding: 8px;
            border-radius: 4px;
            line-height: 3px;
        }

        .comments {
            text-decoration: underline;
            text-underline-position: under;
            cursor: pointer;
        }

        .dot {
            height: 7px;
            width: 7px;
            margin-top: 3px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
        }

        .hit-voting:hover {
            color: blue;
        }

        .hit-voting {
            cursor: pointer;
        }

        .btn.btn-outline-gold.active {
            color: #fff;
            background: linear-gradient(90deg, rgba(223, 189, 105, 1) 0%, rgba(146, 111, 52, 1) 100%);
            border: 1px solid black;
        }

        .btn.btn-outline-abu.active {
            color: #fff;
            background: linear-gradient(90deg, hsla(337, 85%, 31%, 1) 42%, hsla(337, 83%, 30%, 1) 64%, hsla(318, 57%, 22%, 1) 86%);

        }

        .btn.btn-outline-abu:hover {
            color: #fff;
            background: linear-gradient(90deg, hsla(337, 85%, 31%, 1) 42%, hsla(337, 83%, 30%, 1) 64%, hsla(318, 57%, 22%, 1) 86%);
        }

        .btn .btn-outline.abu {
            color: rgba(146, 111, 52, 1);
            background: #fff;
            border: 1px solid black;
        }

        .btn .btn-outline.gold {
            color: rgba(146, 111, 52, 1);
            background: #fff;
            border: 1px solid red;
        }

        .btn.btn-outline-pem.active {
            color: #fff;
            background: rgba(88, 24, 69, 1);
        }

        .searchlink {
            cursor: pointer;
            display: block;
            position: relative;
        }

        .searchlink:hover,
        .searchlink.open {
            cursor: pointer;
        }

        .searchlink.open>.searchform {
            display: block;
        }

        .searchform {
            display: none;
            position: absolute;
            width: 200px;
            height: 70px;
            line-height: 40px;
            top: 70px;
            right: 0;
            padding: 0 15px;
            cursor: default;
            border-radius: 2px;
            border-style: solid;
            border-width: 1px;
            border-color: #e1e1e1;
            box-shadow: 0 3px 13px 0 rgba(0, 0, 0, 0.2);
            margin-left: -120px;
            z-index: 9999999;
            background-color: #fff;
        }

        .searchlink.open .searchform {
            display: block;
        }

        #search {
            display: block;
            position: relative;
        }

        #s {
            width: 135px;
            background: #fff;
            padding: 0 11px;
            border: 1px solid #e1e1e1;
            border-right: none;
            color: #888;
            margin: 14px 0;
        }

        .sbtn {
            display: block;
            position: absolute;
            background: none;
            border: 1px solid #f00f00;
            color: #fff;
            font-size: 0.6em;
            cursor: pointer;
            right: 0px;
            top: 14px;
            width: 35px;
            background-color: #f00f00;
        }

    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .btn-secondary-custom {
            background: #BF9742;
            color: white;
        }

        .chat-btn {
            /* position: absolute;
            right: 14px;
            bottom: 30px; */
            cursor: pointer
        }

        .chat-btn .close {
            display: none
        }

        .chat-btn i {
            transition: all 0.9s ease
        }

        #check:checked~.chat-btn i {
            display: block;
            pointer-events: auto;
            transform: rotate(180deg)
        }

        #check:checked~.chat-btn .comment {
            display: none;

        }

        #check:checked~.chat-btn .ilangono {
            display: none;

        }

        .chat-btn i {
            font-size: 22px;
            color: #fff !important
        }

        .chat-btn {
            width: 50px;
            height: 50px;
            /* display: flex; */
            justify-content: center;
            align-items: center;
            border-radius: 50px;
            background-color: #007bff !important;
            color: #fff;
            font-size: 22px;
            border: none
        }

        .wrapper.btn-chatz {
            position: absolute;
            /* right: 20px; */
            bottom: 100px;
            width: 340px;
            height: auto;
            background-color: #fff;
            border-radius: 5px;
            border: 2px solid white;
            opacity: 0;
            transition: all 0.4s
        }

        #check:checked~.wrapper.btn-chatz {
            opacity: 1;

        }

        .header.btn-chatz {
            /* padding: 13px; */
            background-color: #007bff !important;
            border-radius: 5px 5px 0px 0px;
            margin-bottom: 10px;
            color: #fff
        }

        .chat-form {
            padding: 15px
        }

        .chat-form input,
        textarea,
        button {
            margin-bottom: 10px
        }

        .chat-form textarea {
            resize: none
        }

        .form-control:focus,
        .btn:focus {
            box-shadow: none
        }

        #check {
            display: none !important
        }

        .carousel-item {
            transition: transform 0.75s ease;
        }

        .dropdown-menu {
            position: relative !important;
            transform: none !important;
            display: none !important
        }

        .dropdown-menu.show {
            display: block !important;
        }

        .bg-brown {
            color: #fff;
            background: #61481C;
            border: 1px solid #61481C;
        }

        .jumbotron {
            background: #61481C;
            padding: 3rem 0.5rem;
        }

        @media (min-width: 1400px) {
            .jumbotron {
                padding: 3rem 10rem;
            }
        }

        @media (min-width: 1200px) {
            .jumbotron {
                padding: 3rem 20rem;
            }
        }

        .bg-brown {
            color: #fff;
            background: #61481C;
            border: 1px solid #61481C;
        }

        .btn.btn-outline-brown {
            color: #61481C;
            background: #fff;
            border: 1px solid #61481C;
        }

        .btn.btn-outline-brown:hover {
            color: #fff;
            background: #61481C;
            border: 1px solid #61481C;
        }

        .btn.btn-brown {
            color: #fff;
            background: #61481C;
            border: 1px solid #61481C;
        }

        .btn.btn-brown:hover {
            color: #fff;
            background: #533e18;
            border: 1px solid #61481C;
        }

        .vr.vr-none {
            display: none !important;
        }

        hr.hr-none {
            display: block !important;
            margin-top: 0px
        }

        .login-mb {
            margin-bottom: 0.5rem;
        }

        @media (min-width: 1000px) {
            .vr.vr-none {
                display: block !important;
            }

            hr.hr-none {
                display: none !important;
            }

            .login-mb {
                margin-bottom: 0rem;
            }

            body {
                height: 100vh;
            }
        }

        .mobile {
            display: none;
        }

        .desktop-2 {
            display: block;
        }

        .gambar-sesuai {
            height: auto;
            width: 100%;
            object-fit: cover;
        }

        @media (max-width: 1000px) {
            .mobile {
                display: block;
            }

            .gambar-sesuai {
                height: 250px;
                width: 100%;
                object-fit: cover;
            }

            .desktop {
                display: none;
            }

            .desktop-2 {
                display: none;
            }

            .puter {
                margin-bottom: 40px;
            }
        }

        .col-12.custom {
            width: 33.3333%
        }

        @media (max-width: 992px) {
            .col-12.custom {
                width: 51% !important
            }

        }

        @media (max-width: 768px) {
            .col-12.custom {
                width: 100% !important
            }

        }

        .mobile-scroll {
            overflow-x: hidden
        }

        @media (max-width: 1199.98px) {
            .mobile-scroll {
                overflow-x: scroll;


            }

            .mobile-scroll::-webkit-scrollbar {
                opacity: 100;
            }

            .mobile-scroll::-webkit-scrollbar-thumb {
                background: transparent;
            }

            .desktop-arrow {
                width: 100%
            }

            .arrow-desktop {
                display: none
            }

            .arrow-desktop {
                display: none
            }

        }

        table {
            width: 100%;
            text-align: start
        }

        .card {
            border-radius: 10px
        }

        .a-image {
            max-height: 200px;
            object-fit: cover;
        }

        .bg-pengacara {
            background: #8f8f8f;
        }

        .scroll-simple::-webkit-scrollbar {
            width: 7px;
            height: 7px;
        }

        .scroll-simple::-webkit-scrollbar-track {
            border-radius: 10px;
            background: rgba(0, 0, 0, 0.1);
        }

        .scroll-simple::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background: rgba(0, 0, 0, 0.2);
        }

        .scroll-simple::-webkit-scrollbar-thumb:hover {
            background: rgba(0, 0, 0, 0.4);
        }

        .scroll-simple::-webkit-scrollbar-thumb:active {
            background: rgba(0, 0, 0, .9);
        }

        .fav-icon {
            color: #ffc107 !important
        }

        .text-fav-disable {
            color: rgb(199, 199, 199)
        }

        .share-icon {
            position: absolute;
            z-index: 999;
            right: 0.5rem;
            top: 0.5rem;
        }

        @media (max-width: 1199.98px) {
            .gambar-banner {
                width: 80%
            }
        }


        @media (max-width: 991.98px) {
            .gambar-banner {
                width: 75%
            }
        }

        @media (max-width: 575.98px) {
            .gambar-banner {
                width: 90%
            }
        }

    </style>

</head>

<body>

    @include('layouts.template-public.header')

    <div id="carouselMobile" class="carousel slide mobile" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="{{url('')}}/join">
                    <img src="{{asset('')}}images/banner_tanah_merdeka.png" class="d-block mx-auto" style="width: 95%"
                        alt="...">
                </a>
            </div>
            <div class="carousel-item">
                <img src="{{asset('')}}uploads/banner_sengketa_tanah_2.png" class="d-block mx-auto" style="width: 95%"
                    alt="...">
            </div>
        </div>
    </div>

    <div class="text-white rounded-0 jumbotron desktop" style="background: transparent !important">

        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="{{url('')}}/join">
                        <img src="{{asset('')}}images/banner_tanah_merdeka.png" class="d-block mx-auto gambar-banner"
                            style="width: 100%" alt="...">
                    </a>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('')}}uploads/banner_sengketa_tanah_2.png" class="d-block mx-auto gambar-banner"
                        style="width: 100%" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev desktop" type="button" style="left: -5%"
                data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next desktop" type="button" style="right: -5%"
                data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>

    </div>

    <div class="card aboute-bottom rounded-0 mobile">
        <div class="card border-0 shadow-sm" style="margin-top:-10px">
            <div class="card-body p-0">
                <div class="row g-0">

                    <div class="col text-center">

                        <a class="btn btn-sm mb-0 p-0 w-100" href="{{url('')}}/">
                            <div class="card rounded-0">
                                <div class="card-body p-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        width="45px" x="0" y="0" viewBox="0 0 512 512"
                                        style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="256" cx="256" cy="256" fill="#ffffff" shape="circle"></circle>
                                        <g transform="matrix(0.7,0,0,0.7,76.79200973510743,76.80000000000001)">
                                            <path
                                                d="m498.195312 222.695312c-.011718-.011718-.023437-.023437-.035156-.035156l-208.855468-208.847656c-8.902344-8.90625-20.738282-13.8125-33.328126-13.8125-12.589843 0-24.425781 4.902344-33.332031 13.808594l-208.746093 208.742187c-.070313.070313-.140626.144531-.210938.214844-18.28125 18.386719-18.25 48.21875.089844 66.558594 8.378906 8.382812 19.445312 13.238281 31.277344 13.746093.480468.046876.964843.070313 1.453124.070313h8.324219v153.699219c0 30.414062 24.746094 55.160156 55.167969 55.160156h81.710938c8.28125 0 15-6.714844 15-15v-120.5c0-13.878906 11.289062-25.167969 25.167968-25.167969h48.195313c13.878906 0 25.167969 11.289063 25.167969 25.167969v120.5c0 8.285156 6.714843 15 15 15h81.710937c30.421875 0 55.167969-24.746094 55.167969-55.160156v-153.699219h7.71875c12.585937 0 24.421875-4.902344 33.332031-13.808594 18.359375-18.371093 18.367187-48.253906.023437-66.636719zm0 0"
                                                fill="#61481c" data-original="#000000" class=""></path>
                                        </g>
                                    </svg>
                                    <h6 class="mt-0 mb-0" style="font-size: 12px">HOME</h6>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col text-center">

                        <button class="btn btn-sm mb-0 p-0 w-100" id="btn-panduan-m" type="button">
                            <div class="card rounded-0">
                                <div class="card-body p-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        width="45px" x="0" y="0" viewBox="0 0 296.999 296.999"
                                        style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="148.4995" cx="148.4995" cy="148.4995" fill="#ffffff" shape="circle">
                                        </circle>
                                        <g transform="matrix(0.7,0,0,0.7,44.54984436035157,44.54998970031738)">
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <g>
                                                        <path
                                                            d="M45.432,35.049c-0.008,0-0.017,0-0.025,0c-2.809,0-5.451,1.095-7.446,3.085c-2.017,2.012-3.128,4.691-3.128,7.543     v159.365c0,5.844,4.773,10.61,10.641,10.625c24.738,0.059,66.184,5.215,94.776,35.136V84.023c0-1.981-0.506-3.842-1.461-5.382     C115.322,40.849,70.226,35.107,45.432,35.049z"
                                                            fill="#61481c" data-original="#000000" class=""></path>
                                                        <path
                                                            d="M262.167,205.042V45.676c0-2.852-1.111-5.531-3.128-7.543c-1.995-1.99-4.639-3.085-7.445-3.085c-0.009,0-0.018,0-0.026,0     c-24.793,0.059-69.889,5.801-93.357,43.593c-0.955,1.54-1.46,3.401-1.46,5.382v166.779     c28.592-29.921,70.038-35.077,94.776-35.136C257.394,215.651,262.167,210.885,262.167,205.042z"
                                                            fill="#61481c" data-original="#000000" class=""></path>
                                                        <path
                                                            d="M286.373,71.801h-7.706v133.241c0,14.921-12.157,27.088-27.101,27.125c-20.983,0.05-55.581,4.153-80.084,27.344     c42.378-10.376,87.052-3.631,112.512,2.171c3.179,0.724,6.464-0.024,9.011-2.054c2.538-2.025,3.994-5.052,3.994-8.301V82.427     C297,76.568,292.232,71.801,286.373,71.801z"
                                                            fill="#61481c" data-original="#000000" class=""></path>
                                                        <path
                                                            d="M18.332,205.042V71.801h-7.706C4.768,71.801,0,76.568,0,82.427v168.897c0,3.25,1.456,6.276,3.994,8.301     c2.545,2.029,5.827,2.78,9.011,2.054c25.46-5.803,70.135-12.547,112.511-2.171c-24.502-23.19-59.1-27.292-80.083-27.342     C30.49,232.13,18.332,219.963,18.332,205.042z"
                                                            fill="#61481c" data-original="#000000" class=""></path>
                                                    </g>
                                                </g>
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                        </g>
                                    </svg>
                                    <h6 class="mt-0 mb-0" style="font-size: 12px">PANDUAN</h6>
                                </div>
                            </div>
                        </button>

                        <script>
                            $("#btn-panduan-m").click(function () {
                                $("#panduan-m").toggleClass('show');
                                $("#jaminan-m").removeClass('show');
                                $("#chat-m").removeClass('show');
                                $("#tentang-m").removeClass('show');
                            });

                        </script>
                    </div>

                    <div class="col text-center">
                        <button class="btn btn-sm mb-0 p-0 w-100" id="btn-jaminan-m" type="button">
                            <div class="card rounded-0">
                                <div class="card-body p-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        width="45px" x="0" y="0" viewBox="0 0 32 32"
                                        style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="16" cx="16" cy="16" fill="#ffffff" shape="circle"></circle>
                                        <g transform="matrix(0.7,0,0,0.7,4.799999713897705,4.800377225875856)">
                                            <g xmlns="http://www.w3.org/2000/svg" id="_26-Guranteed"
                                                data-name="26-Guranteed">
                                                <path
                                                    d="m27 6c-5.56 0-10.33-3.74-10.38-3.78a1 1 0 0 0 -1.24 0c-.05.04-4.8 3.78-10.38 3.78a1 1 0 0 0 -1 1v9c0 6.71 2.71 10 11.59 13.91a1 1 0 0 0 .82 0c8.88-3.91 11.59-7.2 11.59-13.91v-9a1 1 0 0 0 -1-1zm-11 18a8 8 0 1 1 8-8 8 8 0 0 1 -8 8z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                                <path
                                                    d="m18.29 13.29-3.29 3.3-1.29-1.3a1 1 0 0 0 -1.42 1.42l2 2a1 1 0 0 0 1.42 0l4-4a1 1 0 0 0 -1.42-1.42z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <h6 class="mt-0 mb-0" style="font-size: 12px">JAMINAN</h6>
                                </div>
                        </button>

                        <script>
                            $("#btn-jaminan-m").click(function () {
                                $("#panduan-m").removeClass('show');
                                $("#jaminan-m").toggleClass('show');
                                $("#chat-m").removeClass('show');
                                $("#tentang-m").removeClass('show');
                            });

                        </script>

                    </div>

                    <div class="col text-center">
                        <button class="btn btn-sm mb-0 p-0 w-100" id="btn-chat-m" type="button">
                            <div class="card rounded-0">
                                <div class="card-body p-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        width="45px" x="0" y="0" viewBox="0 0 361.014 361.014"
                                        style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="180.507" cx="180.507" cy="180.507" fill="#ffffff" shape="circle">
                                        </circle>
                                        <g transform="matrix(0.7,0,0,0.7,54.15209197998048,54.151945495605474)">
                                            <g>
                                                <g id="Layer_5_47_">
                                                    <path d="M331.035,126.94H318.01c-3.563,0-3.682-2.333-3.805-3.494C307.375,59.094,252.77,8.791,186.637,8.791h-12.26
                                                    c-65.644,0-119.929,49.56-127.409,113.229c-0.191,1.631-0.291,4.92-3.291,4.92H29.978C20.987,126.94,0,136.401,0,184.18v25.075
                                                    c0,35.436,20.987,43.609,29.978,43.609h43.584c8.991,0,16.347-7.356,16.347-16.347v-93.23c0-8.991-7.356-16.347-16.347-16.347
                                                    c0,0-2.052-0.18-1.529-3.835c7.192-50.319,50.129-89.313,102.344-89.313h12.26c51.86,0,94.912,38.418,102.2,88.288
                                                    c0.235,1.608,1.111,4.86-1.385,4.86c-8.991,0-16.347,7.356-16.347,16.347v93.23c0,8.991,7.356,16.347,16.347,16.347h8.184
                                                    c2.25,0,1.868,1.798,1.667,2.704c-6.667,30.104-21.637,64.256-55.238,64.256h-24.889c-2.54,0-3.167-1.861-3.65-2.743
                                                    c-4.032-7.367-11.851-12.364-20.841-12.364h-22.933c-13.118,0-23.753,10.634-23.753,23.753c0,13.119,10.635,23.752,23.753,23.752
                                                    h22.933c9.112,0,17.023-5.132,21.005-12.662c0.348-0.658,0.633-2.026,3.321-2.026h25.054c22.823,0,53.365-11.341,69.259-65.373
                                                    c1.694-5.758,3.068-11.496,4.187-17.026c0.154-0.761,0.25-2.27,2.625-2.27h12.9c8.991,0,29.978-8.174,29.978-43.609v-25.075
                                                    C361.013,137.082,340.026,126.94,331.035,126.94z" fill="#61481c"
                                                        data-original="#000000" class=""></path>
                                                </g>
                                    </svg>
                                    <h6 class="mt-0 mb-0" style="font-size: 12px;margin-top:13px">CHAT</h6>
                                </div>
                            </div>
                        </button>

                        <script>
                            $("#btn-chat-m").click(function () {
                                $("#panduan-m").removeClass('show');
                                $("#jaminan-m").removeClass('show');
                                $("#chat-m").toggleClass('show');
                                $("#tentang-m").removeClass('show');
                            });

                        </script>
                    </div>

                    <div class="col text-center">
                        <button class="btn btn-sm mb-0 p-0 w-100" id="btn-tentang-m" type="button">
                            <div class="card rounded-0">
                                <div class="card-body p-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        width="45px" x="0" y="0" viewBox="0 0 24 24"
                                        style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="12" cx="12" cy="12" fill="#ffffff" shape="circle"></circle>
                                        <g transform="matrix(0.7,0,0,0.7,3.600000000000003,3.600000000000003)">
                                            <g xmlns="http://www.w3.org/2000/svg" fill="rgb(0,0,0)">
                                                <path
                                                    d="m12 0a12 12 0 1 0 12 12 12.013 12.013 0 0 0 -12-12zm0 22a10 10 0 1 1 10-10 10.011 10.011 0 0 1 -10 10z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                                <path d="m12 9a1 1 0 0 0 -1 1v8a1 1 0 0 0 2 0v-8a1 1 0 0 0 -1-1z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                                <circle cx="12" cy="6" r="1" fill="#61481c" data-original="#000000"
                                                    class=""></circle>
                                            </g>
                                        </g>
                                    </svg>
                                    <h6 class="mt-0 mb-0" style="font-size: 12px">TENTANG</h6>
                                </div>
                            </div>
                        </button>

                        <script>
                            $("#btn-tentang-m").click(function () {
                                $("#panduan-m").removeClass('show');
                                $("#jaminan-m").removeClass('show');
                                $("#chat-m").removeClass('show');
                                $("#tentang-m").toggleClass('show');
                            });

                        </script>

                    </div>





                    <ol id="panduan-m" class="list-group panduan list-group-numbered shadow dropdown-menu rounded-0 p-0"
                        style="inset: auto auto 0px 0px; margin: 0px; border-top: none">
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold" style="color: #61481C">Buat Akun Sengketa Tanah</div>
                                Daftarkan diri Anda sesuai dengan role yang diinginkan (Korban, Sponsor,
                                Pengacara).
                            </div>
                            <i class="fa-solid fa-user-plus fs-6" style="color: #61481C"></i>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold" style="color: #61481C">Buat Laporan Sengketa Tanah
                                </div>
                                Laporkan dengan jelas melalui formulir korban tentang masalah sengketa tanah
                                Anda.
                            </div>
                            <i class="fa-solid fa-file-circle-plus fs-6" style="color: #61481C"></i>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold" style="color: #61481C">Tampilkan Dokumen</div>
                                Upload dan kirimkan dokumen pendukung laporan Anda.
                            </div>
                            <i class="fa-solid fa-file-lines fs-6" style="color: #61481C"></i>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold" style="color: #61481C">Temukan Bantuan</div>
                                Pilih bantuan yang diinginkan mulai dari bantuan pendanaan sponsor, bantuan
                                hukum pengacara, dan
                                bantuan pemerintah.
                            </div>
                            <i class="fa fa-circle-question fs-6" style="color: #61481C"></i>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold" style="color: #61481C">Pilih Bantuan</div>
                                Pilih bantuan yang masuk sesuai dengan kesepakatanmu.
                            </div>
                            <i class="fa-regular fa-circle-question fs-6" style="color: #61481C"></i>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold" style="color: #61481C">Dapatkan Bantuan</div>
                                Yay! Selamat, kamu telah mendapatkan bantuan.
                            </div>
                            <i class="fa-solid fa-handshake-angle fs-6" style="color: #61481C"></i>
                        </li>
                    </ol>

                    <ol id="jaminan-m" class="list-group list-group-numbered shadow dropdown-menu rounded-0 p-3"
                        style="inset: auto auto 0px 0px; margin: 0px; border-top: none">
                        <div class="col-md-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <h5 style="color: #61481C" class="mb-0"><b><i class="fa-solid fa-user-tie"></i></b>
                                    </h5>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 style="color: #61481C" class="mb-0"><b>Sponsor Terverifikasi</b>
                                    </h5>
                                    Setiap sponsor yang terlibat di verifikasi kemampuan dan sumber dananya.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <h5 style="color: #61481C" class="mb-0"><b><i class="fa-solid fa-gavel"></i></b>
                                    </h5>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 ms-3">
                                        <h5 style="color: #61481C" class="mb-0"><b>Pengacara
                                                Terverifikasi</b></h5>
                                        Setiap pengacara wajib memiliki sertifikasi advokat yang dibutuhkan.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <h5 style="color: #61481C" class="mb-0"><b><i
                                                class="fa-solid fa-hand-holding-dollar"></i></b>
                                    </h5>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 ms-3">
                                        <h5 style="color: #61481C" class="mb-0"><b>Pembayaran Aman</b></h5>
                                        Setiap transaksi yang terjadi menggunakan platform pembayaran
                                        Sengketa Tanah.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <h5 style="color: #61481C" class="mb-0"><b><i
                                                class="fa-solid fa-chart-line"></i></b></h5>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 ms-3">
                                        <h5 style="color: #61481C" class="mb-0"><b>Bantuan Analisa</b></h5>
                                        Kami memberikan bantuan analisa terhadap permasalahan yang relevan
                                        untuk diatasi.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <h5 style="color: #61481C" class="mb-0"><b><i class="fa-solid fa-handshake"></i></b>
                                    </h5>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 ms-3">
                                        <h5 style="color: #61481C" class="mb-0"><b>Kesepakatan
                                                Terlindungi</b></h5>
                                        Semua kesepakatan yang terjadi dilindungi perjanjian hukum yang
                                        ketat dan mengikat.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <h5 style="color: #61481C" class="mb-0"><b><i class="fa-solid fa-user-gear"></i></b>
                                    </h5>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 ms-3">
                                        <h5 style="color: #61481C" class="mb-0"><b>Bantuan Customer
                                                Support</b></h5>
                                        Layanan CS 24 jam siap membantu anda.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ol>

                    <ol id="chat-m"
                        class="list-group list-group-numbered shadow dropdown-menu rounded-0 p-3 text-center"
                        style="inset: auto auto 0px 0px; margin: 0px; border-top: none">
                        <h2>
                            <div class="fw-bold" style="color: #61481C"> Customer Service</div>
                        </h2>
                        <div class="chat-form"> <input type="text" class="form-control" placeholder="Nama">
                            <input type="text" class="form-control" placeholder="Email"> <textarea class="form-control"
                                placeholder="Masukan Pesan"></textarea> <button
                                class="btn btn-brown btn-block">Kirim</button>
                        </div>
                    </ol>

                    <ol id="tentang-m"
                        class="list-group list-group-numbered shadow dropdown-menu rounded-0 p-3 text-center"
                        style="inset: auto auto 0px 0px; margin: 0px; border-top: none; max-height: 500px; overflow-y: auto">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row desktop mb-4">
                                    <div class="col-md">
                                        <div class="card-body text-center container" style="height:500px">
                                            <img src="{{asset('/uploads/sengketa-tanah-jokowi.png')}}"
                                                style="width:300px; height:400px;object-fit:cover" alt="" srcset=""
                                                class="img-fluid">
                                            <div class="card rounded-0"
                                                style="width: 17rem; position:relative; left:50%;transform: translate(-50%, -50%);">
                                                <div class="card-body">
                                                    <p class="card-text">"Presiden Joko Widodo menegaskan kepada
                                                        Kementerian
                                                        ATR/BPN untuk
                                                        serius dalam memberantas mafia tanah"
                                                        <br> -<b> Ir. H. Joko Widodo (Presiden RI)</b>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="card-title fw-bolder text-dark"></p>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="card-body text-center container" style="height:500px">
                                            <img src="{{asset('/uploads/atr-hadi-tjahjanto.png')}}"
                                                style="width:300px; height:400px;object-fit:cover" alt="" srcset=""
                                                class="img-fluid">
                                            <div class="card rounded-0"
                                                style="width: 17rem; position:relative; left:50%;transform: translate(-50%, -50%);">
                                                <div class="card-body">
                                                    <p class="card-text">"Sesuai perintah Bapak Presiden, semua
                                                        kasus mafia
                                                        tanah yang ada
                                                        di
                                                        Indonesia harus
                                                        diselesaikan" <br> -<b> Hadi Tjahjanto (Mentri ATR/BPN)
                                                        </b>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="card-title fw-bolder text-dark"></p>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="card-body text-center container" style="height:500px">
                                            <img src="{{asset('/uploads/kapolri.png')}}"
                                                style="width:300px; height:400px;object-fit:cover" alt="" srcset=""
                                                class="img-fluid">
                                            <div class="card rounded-0"
                                                style="width: 17rem; position:relative; left:50%;transform: translate(-50%, -50%);">
                                                <div class="card-body">
                                                    <p class="card-text">"Penyidik tidak perlu ragu ragu dalam
                                                        mengusut
                                                        tuntas masalah mafia
                                                        tanah, penyidik agar tindak tegas siapapun dalang dan
                                                        bekingannya"
                                                        <br> -<b> Listyo
                                                            Sigit Prabowo (Kapolri) </b>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="card-title fw-bolder text-dark"></p>
                                        </div>
                                    </div>
                                </div>
                                <div id="carouselExampleControlsPres" class="carousel slide mobile mb-4">
                                    <div class="carousel-inner mb-5">
                                        <div class="carousel-item active">
                                            <div class="card-body text-center container" style="height:505px">
                                                <img src="{{asset('/uploads/sengketa-tanah-jokowi.png')}}"
                                                    style="width:300px; height:400px;object-fit:cover" alt="" srcset=""
                                                    class="img-fluid">
                                                <div class="card rounded-0"
                                                    style="width: 14rem; position:relative; left:50%;transform: translate(-50%, -50%);z-index:10">
                                                    <div class="card-body">
                                                        <p class="card-text">"Presiden Joko Widodo menegaskan
                                                            kepada Kementerian ATR/BPN untuk serius dalam
                                                            memberantas mafia tanah" <br> -<b>
                                                                Ir. H. Joko Widodo (Presiden RI)</b>
                                                        </p>
                                                    </div>
                                                </div>
                                                <p class="card-title fw-bolder text-dark"></p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="card-body text-center container" style="height:505px">
                                                <img src="{{asset('/uploads/atr-hadi-tjahjanto.png')}}"
                                                    style="width:300px; height:400px;object-fit:cover" alt="" srcset=""
                                                    class="img-fluid">
                                                <div class="card rounded-0"
                                                    style="width: 14rem; position:relative; left:50%;transform: translate(-50%, -50%);">
                                                    <div class="card-body">
                                                        <p class="card-text">"Sesuai perintah Bapak Presiden,
                                                            semua kasus
                                                            mafia tanah yang
                                                            ada
                                                            di Indonesia harus
                                                            diselesaikan"<br> -<b> Hadi Tjahjanto (Mentri
                                                                ATR/BPN) </b>
                                                        </p>
                                                    </div>
                                                </div>
                                                <p class="card-title fw-bolder text-dark"></p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="card-body text-center container" style="height:505px">
                                                <img src="{{asset('/uploads/kapolri.png')}}"
                                                    style="width:300px; height:400px;object-fit:cover" alt="" srcset=""
                                                    class="img-fluid">
                                                <div class="card rounded-0"
                                                    style="width: 14rem; position:relative; left:50%;transform: translate(-50%, -50%);">
                                                    <div class="card-body">
                                                        <p class="card-text">"Penyidik tidak perlu ragu ragu
                                                            dalam mengusut
                                                            tuntas masalah
                                                            mafia

                                                            tanah, penyidik agar tindak tegas siapapun dalang
                                                            dan
                                                            bekingannya" <br> -<b>
                                                                Listyo
                                                                Sigit Prabowo (Kapolri) </b>
                                                        </p>
                                                    </div>
                                                </div>
                                                <p class="card-title fw-bolder text-dark"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev my-auto"
                                        style="background: rgba(0, 0, 0, 0.75); height: 35px; width: 10%;border-radius: 50%"
                                        type="button" data-bs-target="#carouselExampleControlsPres"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next my-auto"
                                        style="background: rgba(0, 0, 0, 0.75); height: 35px; width: 10%;border-radius: 50%"
                                        type="button" data-bs-target="#carouselExampleControlsPres"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <style>
                            @media (min-width: 1400px) {
                                .container-lsa {
                                    max-width: 1000px !important;
                                }
                            }

                        </style>
                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png" class="mb-2" style="width: 75px" alt="">
                        <div class="container-lsa mx-auto mb-3">
                            <h2>
                                <div class="fw-bold" style="color: #61481C"> TENTANG KAMI</div>
                            </h2>
                            SENGKETA TANAH adalah platform digital dengan spesialisasi penanganan
                            masalah
                            sengketa tanah di seluruh wilayah Indonesia. Kami mempertemukan korban sengketa
                            tanah
                            atau korban
                            mafia
                            tanah dengan Sponsor, Kantor hukum, dan Pemerintah untuk menuntaskan masalah
                            persengketaan tanah
                            tersebut.

                            <h2>
                                <div class="fw-bold mt-5" style="color: #61481C"> VISI MISI</div>
                            </h2>
                            <div class="text-start">
                                <h5>VISI</h5>
                                Membantu Masyarakat dan Pemerintah Indonesia dalam penyelesaian Sengketa
                                Pertanahan, Konflik Pertanahan dan Perkara Pertanahan dengan membangun ekosistem
                                steakholder terkait, seperti Korban Sengketa, Sponsor, Pengacara dan
                                Pemerintahnya itu sendiri agar semua jenis permasalahan tanah lebih cepat
                                diselesaikan. Tujuan utama Platform Sengketa Tanah adalah membawa persoalan
                                tanah yang dulunya tabu menjadi lebih terbuka dengan pendekatan ecommerce yang
                                profit oriented.
                                <h5 class="mt-3">MISI</h5>
                                <ol style="padding-left: 1rem">
                                    <li>Membantu masyarakat Indonesia menyelesaikan persolan sengketa
                                        pertanahan, konflik pertanahan dan perkara pertanahan dengan menyediakan
                                        bantuan akses pada sponsor, pengacara dan pemerintah.</li>
                                    <li>Membantu Pemerintah Indonesia dalam hal ini Kementrian ATR/BPN untuk
                                        menyelesaikan persolan sengketa pertanahan, konflik pertanahan dan
                                        perkara pertanahan dengan menyediakan sortasi data persengketaan tanah
                                        yang terjadi di masyarakat.</li>
                                    <li>Mengangkat semua jenis persoalan tanah dengan multi komprehensif, mulai
                                        dari dokumen pertanahan, analisa, pengecekan sampai kepada wawancara
                                        mendalam pada korban dan pihak terkait yang disajikan dengan audio
                                        visual untuk memudahkan steak holder mengambil keputusan.
                                    <li>Menjadi platform khusus pertanahan yang dipercaya publik dengan komitmen
                                        kuat penyelesaian kasus-kasus persengketaan tanah.</li>
                                    <li>Mengintegrasikan semua jenis bidang seputar pertanahan dalam satu
                                        platform seperti sengketa pertanahan, jual beli lahan, kerja sama lahan
                                        sampai dengan pelelangan lahan.</li>
                                    <li>Menyediakan berbagai tenaga ahli pertanahan dalam platform untuk
                                        membantu desiminasi permasalahan dalam rangka menentukan tindakan yang
                                        akan diambil, baik untuk korban, sponsor, pengacara maupun pemerintah.
                                    </li>
                                    <li>Menjadi platform yang terintegrasi dengan kementrian ATR/BPN</li>
                                </ol>

                            </div>
                        </div>

                    </ol>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <style>
            .search-bar {
                position: relative;
                top: -23px;
            }

        </style>

        <div class="row desktop mb-3 g-0">

            <div class="col-auto">
                <div class="card rounded-5 border-0 shadow-sm desktop">
                    <div class="card-header custom bg-brown text-white"
                        style="padding: 6px !important; border-top-right-radius: 0px !important; border-bottom-right-radius: 0px !important">
                        <center>
                            <h6 class="blink mb-0" style="display:inline-block">Pre Launching 1 Desember 2022</h6>
                        </center>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card border-0"
                    style="border-top-left-radius: 0px !important; border-bottom-left-radius: 0px !important">

                    <div class="col-auto">
                        <div class="input-group">
                            <div class="input-group-prepend my-auto">
                                <span class="px-3">
                                    <i class="fa fa-search"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control border-0" placeholder="Search" name="" id="">
                            <button class="btn h-100 mb-0"
                                style="color: #fff; background: #E6B325; border-top-left-radius: 0px !important; border-bottom-left-radius: 0px !important">Search</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="card border-0 mt-3 mb-3 mobile">
            <div class="input-group">
                <div class="input-group-prepend my-auto">
                    <span class="px-3">
                        <i class="fa fa-search"></i>
                    </span>
                </div>
                <input type="text" class="form-control border-0" placeholder="Search" name="" id="">
                <button class="btn h-100 mb-0" style="color: #fff; background: #E6B325">Search</button>
            </div>
        </div>


        <div class="row justify-content-center mb-4">

            <div class="col-lg-12">

                <div class="card mb-0 border-0 mb-3" style="z-index:999">
                    <div class="card-body pb-0">
                        <div class="row g-2 justify-content-between text-center scroll-simple"
                            style="overflow-x: auto; flex-wrap: nowrap;">
                            <div class="col mb-4">
                                <a href="{{url('/')}}/join"
                                    class="btn d-flex align-items-center h-100 rounded-4 shadow btn-outline-light"
                                    style="width: 200px">
                                    <img src="{{asset('')}}images/tanah_merdeka_join.png" style="width: 100%"
                                        alt=""><br>
                                </a>
                            </div>

                            <div class="col mb-4">
                                <a href="{{url('/')}}/bid-lahan"
                                    class="btn btn-outline-light text-dark w-100 rounded-4 shadow"
                                    href="https://mitra.atrbpn.go.id">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        width="85px" x="0" y="0" viewBox="0 0 512.00015 512"
                                        style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="256.000075" cx="256.000075" cy="256" fill="#ffffff" shape="circle">
                                        </circle>
                                        <g transform="matrix(0.7,0,0,0.7,76.80007324218752,71.998388671875)">
                                            <path
                                                d="m509.445312 249.359375-41.695312-36.148437c6.902344-9.628907 12.222656-20.054688 12.222656-29.324219 0-26.246094-21.355468-47.601563-47.601562-47.601563-13.972656 0-26.558594 6.054688-35.273438 15.675782l-98.984375-85.816407c3.332031-6.3125 5.488281-12.660156 5.488281-18.542969 0-26.246093-21.355468-47.601562-47.601562-47.601562s-47.601562 21.355469-47.601562 47.601562c0 5.914063 2.183593 12.300782 5.542968 18.648438l-98.769531 86.023438c-8.722656-9.800782-21.421875-15.988282-35.542969-15.988282-26.246094 0-47.601562 21.355469-47.601562 47.601563 0 9.433593 5.511718 20.066406 12.59375 29.835937l-42.078125 36.648438c-3.390625 2.949218-3.390625 8.386718 0 11.335937l248.519531 216.457031c2.800781 2.4375 7.09375 2.433594 9.886719-.011718l137.015625-119.890625c3.125-2.730469 3.441406-7.480469.707031-10.605469-2.734375-3.121094-7.484375-3.4375-10.605469-.707031l-22.953125 20.085937-85.5625-97.785156v-48.871094l105.75-58.753906 3.53125 3.0625c-2.601562 5.875-4.058593 12.371094-4.058593 19.199219 0 24.902343 38.363281 58.144531 42.738281 61.851562 2.769531 2.347657 6.953125 2.347657 9.71875 0 2.050781-1.738281 11.574219-9.96875 21.113281-20.789062l34.738281 30.113281-77.226562 67.570312c-2.878907 2.519532-3.386719 6.941407-1.152344 10.046876 2.550781 3.546874 7.757813 4.148437 11.050781 1.265624l83.71875-73.253906c3.382813-2.957031 3.367188-8.390625-.027344-11.332031zm-253.445312-234.328125c17.957031 0 32.566406 14.609375 32.566406 32.570312 0 12.121094-18.339844 33.011719-32.566406 46.082032-8.84375-8.125-19.273438-19.269532-25.90625-29.457032-.144531-.257812-.304688-.507812-.480469-.753906-3.757812-5.917968-6.183593-11.472656-6.183593-15.875 0-17.957031 14.609374-32.566406 32.570312-32.566406zm-4.859375 94.417969c2.769531 2.351562 6.953125 2.351562 9.71875 0 2.632813-2.230469 17.566406-15.15625 29.046875-30.523438l83.304688 72.21875-100.027344 55.574219-94.988282-89.402344 43.96875-38.292968c11.472657 15.324218 26.347657 28.203124 28.976563 30.425781zm-171.511719 41.871093c17.957032 0 32.566406 14.609376 32.566406 32.566407 0 12.125-18.339843 33.015625-32.566406 46.085937-14.226562-13.074218-32.570312-33.964844-32.570312-46.085937 0-17.957031 14.609375-32.566407 32.570312-32.566407zm-25.550781 74.097657c9.394531 10.585937 18.667969 18.605469 20.691406 20.320312 2.765625 2.347657 6.949219 2.347657 9.71875 0 4.375-3.707031 42.738281-36.949219 42.738281-61.851562 0-6.675781-1.386718-13.03125-3.878906-18.800781l43.453125-37.847657 97.714844 91.964844v45.355469h-72.652344c-1.628906 0-3.210937.527344-4.511719 1.5l-84.320312 63.242187-84.113281-73.261719zm201.910156 237.101562-141.363281-123.125 79.746094-59.808593h74.253906l85.175781 97.347656zm176.382813-232.546875c-14.226563-13.074218-32.570313-33.964844-32.570313-46.085937 0-17.957031 14.613281-32.566407 32.570313-32.566407 17.957031 0 32.570312 14.609376 32.570312 32.566407 0 12.121093-18.34375 33.015625-32.570312 46.085937zm0 0"
                                                fill="#61481c" data-original="#000000" class=""></path>
                                            <path
                                                d="m256 71.148438c12.984375 0 23.550781-10.5625 23.550781-23.546876 0-12.988281-10.566406-23.550781-23.550781-23.550781s-23.550781 10.5625-23.550781 23.550781c0 12.984376 10.566406 23.546876 23.550781 23.546876zm0-32.066407c4.695312 0 8.519531 3.820313 8.519531 8.519531 0 4.695313-3.824219 8.515626-8.519531 8.515626s-8.519531-3.820313-8.519531-8.515626c0-4.699218 3.824219-8.519531 8.519531-8.519531zm0 0"
                                                fill="#61481c" data-original="#000000" class=""></path>
                                            <path
                                                d="m432.371094 160.335938c-12.984375 0-23.550782 10.566406-23.550782 23.550781s10.566407 23.550781 23.550782 23.550781 23.550781-10.566406 23.550781-23.550781-10.566406-23.550781-23.550781-23.550781zm0 32.070312c-4.695313 0-8.519532-3.820312-8.519532-8.519531 0-4.695313 3.824219-8.515625 8.519532-8.515625 4.695312 0 8.519531 3.820312 8.519531 8.515625 0 4.699219-3.824219 8.519531-8.519531 8.519531zm0 0"
                                                fill="#61481c" data-original="#000000" class=""></path>
                                            <path
                                                d="m208.398438 368.277344c0 24.898437 38.367187 58.140625 42.742187 61.847656 1.398437 1.191406 3.128906 1.785156 4.859375 1.785156s3.457031-.59375 4.859375-1.785156c4.375-3.707031 42.742187-36.949219 42.742187-61.847656 0-26.25-21.355468-47.601563-47.601562-47.601563s-47.601562 21.351563-47.601562 47.601563zm80.167968 0c0 12.121094-18.339844 33.011718-32.566406 46.082031-14.226562-13.070313-32.570312-33.964844-32.570312-46.082031 0-17.960938 14.609374-32.570313 32.570312-32.570313 17.957031 0 32.566406 14.609375 32.566406 32.570313zm0 0"
                                                fill="#61481c" data-original="#000000" class=""></path>
                                            <path
                                                d="m232.449219 368.277344c0 12.984375 10.566406 23.546875 23.550781 23.546875s23.550781-10.5625 23.550781-23.546875c0-12.988282-10.566406-23.550782-23.550781-23.550782s-23.550781 10.5625-23.550781 23.550782zm32.070312 0c0 4.695312-3.824219 8.515625-8.519531 8.515625s-8.519531-3.820313-8.519531-8.515625c0-4.699219 3.824219-8.519532 8.519531-8.519532s8.519531 3.820313 8.519531 8.519532zm0 0"
                                                fill="#61481c" data-original="#000000" class=""></path>
                                            <path
                                                d="m103.179688 183.886719c0-12.984375-10.566407-23.550781-23.550782-23.550781s-23.550781 10.566406-23.550781 23.550781 10.566406 23.550781 23.550781 23.550781 23.550782-10.566406 23.550782-23.550781zm-32.070313 0c0-4.695313 3.820313-8.515625 8.519531-8.515625 4.695313 0 8.515625 3.820312 8.515625 8.515625 0 4.699219-3.820312 8.519531-8.515625 8.519531-4.699218 0-8.519531-3.824219-8.519531-8.519531zm0 0"
                                                fill="#61481c" data-original="#000000" class=""></path>
                                        </g>
                                    </svg>
                                    <div class="mt-0" style="font-size: 12px">Bid <br> Tanah</div>
                                </a>
                            </div>

                            <div class="col mb-4">
                                <a href="{{url('/')}}/jasa-appraisal"
                                    class="btn btn-outline-light text-dark w-100 rounded-4 shadow"
                                    href="https://mitra.atrbpn.go.id">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        width="85px" x="0" y="0" viewBox="0 0 1600 1600"
                                        style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="800" cx="800" cy="800" fill="#ffffff" shape="circle"></circle>
                                        <g transform="matrix(0.7,0,0,0.7,240.0000114440918,240)">
                                            <g>
                                                <g>
                                                    <path
                                                        d="m1075.1 1463h-813.2c-25 0-45.3-20.3-45.3-45.3v-1049.6c0-25 20.3-45.3 45.3-45.3h142.6c13.3 0 24 10.7 24 24s-10.7 24-24 24h-139.9v1044.2h807.8v-1044.2h-139.9c-13.3 0-24-10.7-24-24s10.7-24 24-24h142.6c25 0 45.3 20.3 45.3 45.3v1049.6c0 25-20.3 45.3-45.3 45.3z"
                                                        fill="#61481c" data-original="#000000" class=""></path>
                                                    <path
                                                        d="m932.5 418.1h-528c-13.3 0-24-10.7-24-24v-190.8c0-39 31.7-70.7 70.7-70.7h76.7c13.3 0 24 10.7 24 24s-10.7 24-24 24h-76.7c-12.5 0-22.7 10.2-22.7 22.7v166.7h480v-166.7c0-12.5-10.2-22.7-22.7-22.7h-76.7c-13.3 0-24-10.7-24-24s10.7-24 24-24h76.7c39 0 70.7 31.7 70.7 70.7v190.8c0 13.2-10.8 24-24 24z"
                                                        fill="#61481c" data-original="#000000" class=""></path>
                                                    <g>
                                                        <path
                                                            d="m1158.8 1568h-980.6c-36.7 0-66.6-29.9-66.6-66.6v-1217c0-36.7 29.9-66.6 66.6-66.6h226.3c13.3 0 24 10.7 24 24s-10.7 24-24 24h-226.3c-10.3 0-18.6 8.4-18.6 18.6v1217c0 10.3 8.4 18.6 18.6 18.6h980.6c10.3 0 18.6-8.4 18.6-18.6v-1217c0-10.3-8.4-18.6-18.6-18.6h-226.3c-13.3 0-24-10.7-24-24s10.7-24 24-24h226.3c36.7 0 66.6 29.9 66.6 66.6v1217c0 36.7-29.9 66.6-66.6 66.6z"
                                                            fill="#61481c" data-original="#000000" class=""></path>
                                                    </g>
                                                    <g fill="rgb(0,0,0)">
                                                        <path
                                                            d="m809.1 236.3h-281.2c-13.3 0-24-10.7-24-24v-136.3c0-24.3 19.7-44 44-44h241.2c24.3 0 44 19.7 44 44v135.6.7c0 13.3-10.7 24-24 24zm-257.2-48h233.2v-108.3h-233.2z"
                                                            fill="#61481c" data-original="#000000" class=""></path>
                                                        <g>
                                                            <g>
                                                                <path
                                                                    d="m967.6 638h-391.7c-13.3 0-24-10.7-24-24s10.7-24 24-24h391.7c13.3 0 24 10.7 24 24s-10.7 24-24 24z"
                                                                    fill="#61481c" data-original="#000000" class="">
                                                                </path>
                                                                <path
                                                                    d="m402.7 657.3c-6.1 0-12.3-2.3-17-7l-33.2-33.3c-9.4-9.4-9.4-24.6 0-33.9 9.4-9.4 24.6-9.4 33.9 0l16.3 16.3 60-60c9.4-9.4 24.6-9.4 33.9 0 9.4 9.4 9.4 24.6 0 33.9l-77 77c-4.6 4.6-10.8 7-16.9 7z"
                                                                    fill="#61481c" data-original="#000000" class="">
                                                                </path>
                                                            </g>
                                                            <g>
                                                                <path
                                                                    d="m967.6 844.5h-391.7c-13.3 0-24-10.7-24-24s10.7-24 24-24h391.7c13.3 0 24 10.7 24 24s-10.7 24-24 24z"
                                                                    fill="#61481c" data-original="#000000" class="">
                                                                </path>
                                                                <path
                                                                    d="m402.7 863.8c-6.1 0-12.3-2.3-17-7l-33.3-33.3c-9.4-9.4-9.4-24.6 0-33.9 9.4-9.4 24.6-9.4 33.9 0l16.3 16.3 60-60c9.4-9.4 24.6-9.4 33.9 0 9.4 9.4 9.4 24.6 0 33.9l-77 77c-4.5 4.6-10.7 7-16.8 7z"
                                                                    fill="#61481c" data-original="#000000" class="">
                                                                </path>
                                                            </g>
                                                            <g>
                                                                <path
                                                                    d="m967.6 1051h-391.7c-13.3 0-24-10.7-24-24s10.7-24 24-24h391.7c13.3 0 24 10.7 24 24s-10.7 24-24 24z"
                                                                    fill="#61481c" data-original="#000000" class="">
                                                                </path>
                                                                <path
                                                                    d="m402.7 1070.3c-6.4 0-12.5-2.5-17-7l-33.3-33.3c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l16.3 16.3 60-60c9.4-9.4 24.6-9.4 33.9 0 9.4 9.4 9.4 24.6 0 33.9l-77 77c-4.3 4.5-10.4 7-16.8 7z"
                                                                    fill="#61481c" data-original="#000000" class="">
                                                                </path>
                                                            </g>
                                                            <g>
                                                                <path
                                                                    d="m967.6 1257.6h-391.7c-13.3 0-24-10.7-24-24s10.7-24 24-24h391.7c13.3 0 24 10.7 24 24s-10.7 24-24 24z"
                                                                    fill="#61481c" data-original="#000000" class="">
                                                                </path>
                                                                <path
                                                                    d="m402.7 1276.8c-6.1 0-12.3-2.3-17-7l-33.3-33.3c-9.4-9.4-9.4-24.6 0-33.9 9.4-9.4 24.6-9.4 33.9 0l16.3 16.3 60-60c9.4-9.4 24.6-9.4 33.9 0 9.4 9.4 9.4 24.6 0 33.9l-77 77c-4.5 4.7-10.7 7-16.8 7z"
                                                                    fill="#61481c" data-original="#000000" class="">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g fill="rgb(0,0,0)">
                                                    <path
                                                        d="m1464.4 1170.5h-141.8c-13.3 0-24-10.7-24-24v-486.2c0-13.3 10.7-24 24-24h141.8c13.3 0 24 10.7 24 24v486.2c0 13.3-10.7 24-24 24zm-117.8-48h93.9v-438.2h-93.9z"
                                                        fill="#61481c" data-original="#000000" class=""></path>
                                                    <path
                                                        d="m1393.5 1343.5c-9.7 0-18.5-5.9-22.2-14.9l-70.9-173c-3-7.4-2.2-15.8 2.3-22.5 4.5-6.6 11.9-10.6 19.9-10.6h141.8c8 0 15.5 4 19.9 10.6 4.5 6.6 5.3 15.1 2.3 22.5l-70.9 173c-3.7 9-12.5 14.9-22.2 14.9zm-35.2-173 35.1 85.7 35.1-85.7z"
                                                        fill="#61481c" data-original="#000000" class=""></path>
                                                    <path
                                                        d="m1464.4 684.3h-141.8c-13.3 0-24-10.7-24-24v-75.3c0-46.3 37.7-84 84-84h21.8c46.3 0 84 37.7 84 84v75.3c0 13.3-10.8 24-24 24zm-117.9-48h93.8v-51.3c0-19.9-16.1-36-36-36h-21.8c-19.9 0-36 16.1-36 36z"
                                                        fill="#61481c" data-original="#000000" class=""></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="mt-0" style="font-size: 12px">Jasa <br> Appraisal</div>
                                </a>
                            </div>

                            <div class="col mb-4">
                                <a href="{{url('/')}}/jasa-pengacara"
                                    class="btn btn-outline-light text-dark w-100 rounded-4 shadow">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        width="85px" x="0" y="0" viewBox="0 0 512 512"
                                        style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="256" cx="256" cy="256" fill="#ffffff" shape="circle"></circle>
                                        <g transform="matrix(0.7,0,0,0.7,76.80000457763674,76.81020755767824)">
                                            <g id="Outline">
                                                <path
                                                    d="M459.642,296.664l-55.32-15.656L384,260.686V231.992A79.9,79.9,0,0,0,416,168v-2.414a32,32,0,0,0,0-64v-24c0-22-11.1-42.048-28.283-51.063q-.312-.163-.638-.3a133.54,133.54,0,0,0-102.158,0q-.325.135-.638.3C267.1,35.54,256,55.584,256,77.588v24a32,32,0,1,0,0,64V168a79.868,79.868,0,0,0,17.011,49.32,35.751,35.751,0,0,1-26.136-3.091,51.935,51.935,0,0,0-46.051-1.62l-1.265.577A31.359,31.359,0,0,0,200,208a32,32,0,0,0-64,0,31.359,31.359,0,0,0,.441,5.186l-1.266-.577a51.772,51.772,0,0,0-46.055,1.623,36.11,36.11,0,0,1-27.462,2.718l-3.349-1.01-4.618,15.32,3.328,1a51.822,51.822,0,0,0,12.81,2.19L16.845,340.422l.006,0A7.952,7.952,0,0,0,16,344a40.045,40.045,0,0,0,40,40h48a40.045,40.045,0,0,0,40-40,7.952,7.952,0,0,0-.851-3.575l.006,0L88.818,231.748a50.221,50.221,0,0,0,7.978-3.477,36.178,36.178,0,0,1,31.749-1.1L144,234.209V416.8a40.015,40.015,0,0,0-31.325,31.876A39.993,39.993,0,0,0,80,488a8,8,0,0,0,8,8H192V343.231a31.954,31.954,0,0,1,24.239-31.044l22.669-5.668L232.04,375.2A8,8,0,0,0,240,384h21.754l-5.515,22.06a8,8,0,0,0,3.323,8.6L328,460.281V496h16V460.281l68.438-45.625a8,8,0,0,0,3.323-8.6L410.246,384H432a8,8,0,0,0,7.96-8.8l-6.869-68.685,22.67,5.668A31.954,31.954,0,0,1,480,343.231V496h16V343.231A47.931,47.931,0,0,0,459.642,296.664ZM104,368H56a24.042,24.042,0,0,1-22.629-16h93.258A24.042,24.042,0,0,1,104,368ZM36.944,336,80,249.889,123.056,336Zm198.562-45.123L256,249.889l14.266,28.531-2.588,2.588ZM328,325.626l8-9.333,8,9.333v86.9l-8,21-8-21Zm-16,44.9-6.919-18.164L312,344.292Zm48,0V344.292l6.919,8.072Zm-61.4-35.184-17.277-45.35L296,275.314l29.1,29.1Zm74.806,0L346.9,304.418l29.1-29.1,14.68,14.68ZM368,260.686l-32,32-32-32V241.331a80.108,80.108,0,0,0,64,0Zm-80-28.694v28.694l-5.809,5.809-16.02-32.041a51.807,51.807,0,0,0,12.788-2.184l6.872-1.961Q286.9,231.169,288,231.992Zm144-98.406a16.019,16.019,0,0,1-16,16v-32A16.019,16.019,0,0,1,432,133.586Zm-160-56c0-15.994,7.611-30.369,19.419-36.736a117.457,117.457,0,0,1,89.162,0C392.389,47.219,400,61.594,400,77.588v7.267A195.151,195.151,0,0,1,386.27,58.44a8,8,0,0,0-10.15-4.347,114.855,114.855,0,0,1-80.239,0,8,8,0,0,0-10.15,4.348A195.059,195.059,0,0,1,272,84.856Zm-32,56a16.019,16.019,0,0,1,16-16v32A16.019,16.019,0,0,1,240,133.586Zm32-21.179a200.571,200.571,0,0,0,25.407-40.9,130.866,130.866,0,0,0,77.188,0,200.548,200.548,0,0,0,25.4,40.9V168a64,64,0,1,1-128,0ZM168,192a16.019,16.019,0,0,1,16,16,15.78,15.78,0,0,1-5.354,11.828A8,8,0,0,0,176,225.771V416H160V225.771a8,8,0,0,0-2.646-5.943A15.78,15.78,0,0,1,152,208,16.019,16.019,0,0,1,168,192ZM135.027,439.027A23.847,23.847,0,0,1,152,432h24v16H129.357A23.908,23.908,0,0,1,135.027,439.027ZM97.357,480A24.037,24.037,0,0,1,120,464h56v16ZM192,307.443V234.209l15.455-7.038A35.9,35.9,0,0,1,222.23,224a35.477,35.477,0,0,1,16.971,4.269,50.3,50.3,0,0,0,7.979,3.483l-32.118,64.236-2.7.676A47.929,47.929,0,0,0,192,307.443Zm81.129,97.028,6.632-26.531A8,8,0,0,0,272,368H248.84l6.6-66.049,11.81-3.936,52.361,137.447ZM400,368a8,8,0,0,0-7.761,9.94l6.632,26.531-46.486,30.991,52.361-137.447,11.81,3.936L423.16,368Z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                                <path d="M300,136a12,12,0,1,0-12-12A12.013,12.013,0,0,0,300,136Z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                                <path d="M372,136a12,12,0,1,0-12-12A12.013,12.013,0,0,0,372,136Z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                                <path
                                                    d="M312,184h14.891c13.9,0,27.091-3.228,37.14-9.09l-8.062-13.82c-7.529,4.391-18.127,6.91-29.078,6.91H312Z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                                <rect x="296" y="464" width="16" height="16" fill="#61481c"
                                                    data-original="#000000" class=""></rect>
                                                <rect x="232" y="424" width="16" height="72" fill="#61481c"
                                                    data-original="#000000" class=""></rect>
                                                <rect x="424" y="424" width="16" height="72" fill="#61481c"
                                                    data-original="#000000" class=""></rect>
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="mt-0" style="font-size: 12px">Jasa <br> Pengacara</div>
                                </a>
                            </div>

                            <div class="col mb-4">
                                <a href="{{url('/')}}/jasa-ppat"
                                    class="btn btn-outline-light text-dark w-100 rounded-4 shadow"
                                    href="https://mitra.atrbpn.go.id">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        width="85px" x="0" y="0" viewBox="0 0 512 512"
                                        style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="256" cx="256" cy="256" fill="#ffffff" shape="circle"></circle>
                                        <g transform="matrix(0.7,0,0,0.7,76.80001373291017,76.80002059936524)">
                                            <g>
                                                <path
                                                    d="m416.652 358.622-67.31-20.727-10.825-21.648c-1.882-3.766-5.269-6.639-9.291-7.884-3.172-.981-6.585-.887-9.693.192v-16.899c25.014-17.396 42.619-44.741 47.02-76.253h4.457c14.618 0 27.156-10.862 28.544-24.728.778-7.771-1.764-15.53-6.974-21.287-.319-.352-.646-.694-.981-1.028v-64.667c0-57.176-46.516-103.693-103.693-103.693h-72.146c-13.014 0-24.578 6.318-31.793 16.046-.091-.003-.18-.014-.272-.014-35.076 0-63.613 28.537-63.613 63.613v89.276c-4.292 4.301-7.171 9.906-7.794 16.126-.779 7.771 1.762 15.531 6.972 21.289 5.214 5.762 12.659 9.067 20.426 9.067h5.598c4.399 31.521 22.003 58.869 47.022 76.263v16.889c-3.108-1.079-6.52-1.173-9.692-.192-4.022 1.244-7.409 4.118-9.292 7.884l-10.853 21.706-67.121 20.669c-23.468 7.227-39.235 28.58-39.235 53.135v92.743c0 4.143 3.358 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-92.743c0-17.93 11.513-33.522 28.649-38.799l20.4-6.282v9.565c0 12.976 10.557 23.533 23.532 23.533h6.884l-4.063 20.317c-1.799 8.998.399 18.312 6.033 25.556l49.355 63.457c1.479 1.901 3.69 2.896 5.925 2.896 1.609 0 3.23-.516 4.599-1.58 3.27-2.543 3.859-7.255 1.315-10.524l-49.355-63.457c-2.955-3.8-4.108-8.687-3.165-13.406l5.857-29.288c.44-2.203-.13-4.488-1.555-6.226-1.424-1.738-3.553-2.745-5.8-2.745h-16.032c-4.705 0-8.532-3.828-8.532-8.533v-14.184l28.952-8.915 85.235 154.972c1.318 2.396 3.836 3.886 6.572 3.886s5.253-1.489 6.572-3.886l85.259-155.014 28.928 8.908v14.234c0 4.705-3.828 8.533-8.532 8.533h-16.032c-2.247 0-4.375 1.007-5.8 2.745s-1.995 4.022-1.555 6.226l5.857 29.288c.944 4.72-.209 9.605-3.164 13.405l-49.355 63.457c-2.543 3.27-1.954 7.981 1.315 10.524 1.369 1.064 2.99 1.58 4.599 1.58 2.235 0 4.447-.994 5.925-2.896l49.356-63.457c5.634-7.244 7.833-16.559 6.033-25.556l-4.063-20.317h6.884c12.976 0 23.532-10.557 23.532-23.533v-9.615l20.56 6.331c17.136 5.277 28.649 20.869 28.649 38.799v92.744c0 4.143 3.358 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-92.743c0-24.555-15.767-45.908-39.235-53.135zm-136 85.35-4.672-42.017c3.07-2.69 5.465-6.185 6.822-10.255l1.708-5.123 15.279 13.096c1.184 1.015 2.5 1.821 3.892 2.43zm-72.491-41.87c1.392-.609 2.707-1.415 3.891-2.43l15.403-13.202 1.743 5.23c1.356 4.069 3.751 7.564 6.821 10.254l-4.698 42.257zm35.268-15.145-3.676-11.028 16.167-13.858 16.291 13.964-3.64 10.922c-1.163 3.489-4.416 5.834-8.094 5.834h-8.954c-3.678 0-6.931-2.345-8.094-5.834zm81.363-64.264c.21.065.284.213.309.262l10.493 20.986-25.261 44.206c-.036.063-.121.211-.36.252-.245.04-.369-.069-.424-.116l-40.563-34.769 55.403-30.78c.047-.026.191-.106.403-.041zm-147.768-291.192c-.541 2.604-.828 5.301-.828 8.063 0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5c0-13.544 11.019-24.564 24.564-24.564h72.146c48.906 0 88.693 39.788 88.693 88.693v56.995c-1.461-.24-2.946-.366-4.444-.366h-12.025c-4.705 0-8.532-3.828-8.532-8.547l-.04-20.221c-.03-15.096-10.815-28.103-25.646-30.928l-129.797-24.723c-6.911-1.315-13.985.501-19.406 4.987s-8.53 11.094-8.53 18.13v28.722c0 17.965-14.616 32.581-32.581 32.581-.174 0-.345.012-.516.023v-80.701c.001-24.541 18.284-44.88 41.942-48.144zm-17.813 168.386c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v.516h-4.524c-3.537 0-6.927-1.506-9.303-4.131-2.407-2.66-3.532-6.115-3.17-9.729.63-6.292 6.612-11.221 13.619-11.221 1.188 0 2.311-.276 3.309-.768 22.173-4.037 39.038-23.493 39.038-46.813v-28.721c0-2.551 1.127-4.947 3.093-6.573 1.965-1.626 4.53-2.286 7.036-1.808l129.797 24.723c7.779 1.481 13.437 8.304 13.452 16.223l.04 20.206c0 12.976 10.557 23.533 23.532 23.533h12.024c3.537 0 6.928 1.505 9.303 4.13 2.406 2.659 3.532 6.114 3.17 9.729-.63 6.292-6.612 11.222-13.619 11.222h-3.382v-.439c0-4.141-3.356-7.499-7.497-7.5-.001 0-.002 0-.003 0-4.14 0-7.497 3.354-7.5 7.495-.039 53.286-43.421 96.638-96.706 96.638-53.325-.002-96.709-43.386-96.709-96.712zm27.528 123.068c.024-.049.099-.197.309-.262.21-.063.355.015.403.042l16.389 9.105c3.622 2.013 8.188.707 10.199-2.914 2.012-3.621.707-8.187-2.914-10.199l-3.817-2.121v-16.156c14.706 7.138 31.2 11.147 48.614 11.147 17.411 0 33.905-4.012 48.612-11.153v16.163l-48.612 27.007-18.224-10.125c-3.622-2.011-8.187-.706-10.199 2.914-2.012 3.621-.707 8.187 2.914 10.199l12.443 6.913-40.564 34.77c-.055.047-.182.159-.424.116-.24-.042-.324-.189-.36-.252l-25.26-44.206zm69.181 165.983-12.051-21.911c.007-.052.019-.101.024-.153l6.574-59.124c.352.016.701.042 1.056.042h8.954c.354 0 .704-.026 1.055-.042l6.566 59.049z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                                <path
                                                    d="m207.823 168.339c-4.142 0-7.5 3.358-7.5 7.5v8.016c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-8.016c0-4.142-3.358-7.5-7.5-7.5z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                                <path
                                                    d="m304.017 168.339c-4.142 0-7.5 3.358-7.5 7.5v8.016c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-8.016c0-4.142-3.358-7.5-7.5-7.5z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                                <path
                                                    d="m285.308 226.684c-2.91-2.949-7.659-2.98-10.606-.071-2.737 2.701-9.298 5.855-18.781 5.855s-16.043-3.154-18.781-5.855c-2.95-2.91-7.698-2.877-10.606.071-2.909 2.948-2.877 7.697.071 10.606 6.459 6.373 17.418 10.177 29.316 10.177s22.857-3.805 29.316-10.177c2.948-2.909 2.98-7.658.071-10.606z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                                <path
                                                    d="m215.84 144.291h-16.033c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h16.033c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                                <path
                                                    d="m296.001 159.291h16.032c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-16.032c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="mt-0" style="font-size: 12px">Jasa <br> PPAT</div>
                                </a>
                            </div>

                            <div class="col mb-4">
                                <a href="{{url('/')}}/jasa-notaris"
                                    class="btn btn-outline-light text-dark w-100 rounded-4 shadow"
                                    href="https://mitra.atrbpn.go.id">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        width="85px" x="0" y="0" viewBox="0 0 512 512"
                                        style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="256" cx="256" cy="256" fill="#ffffff" shape="circle"></circle>
                                        <g transform="matrix(0.7,0,0,0.7,76.80001373291017,76.80002059936524)">
                                            <g>
                                                <path
                                                    d="m416.652 358.622-67.31-20.727-10.825-21.648c-1.882-3.766-5.269-6.639-9.291-7.884-3.172-.981-6.585-.887-9.693.192v-16.899c25.014-17.396 42.619-44.741 47.02-76.253h4.457c14.618 0 27.156-10.862 28.544-24.728.778-7.771-1.764-15.53-6.974-21.287-.319-.352-.646-.694-.981-1.028v-64.667c0-57.176-46.516-103.693-103.693-103.693h-72.146c-13.014 0-24.578 6.318-31.793 16.046-.091-.003-.18-.014-.272-.014-35.076 0-63.613 28.537-63.613 63.613v89.276c-4.292 4.301-7.171 9.906-7.794 16.126-.779 7.771 1.762 15.531 6.972 21.289 5.214 5.762 12.659 9.067 20.426 9.067h5.598c4.399 31.521 22.003 58.869 47.022 76.263v16.889c-3.108-1.079-6.52-1.173-9.692-.192-4.022 1.244-7.409 4.118-9.292 7.884l-10.853 21.706-67.121 20.669c-23.468 7.227-39.235 28.58-39.235 53.135v92.743c0 4.143 3.358 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-92.743c0-17.93 11.513-33.522 28.649-38.799l20.4-6.282v9.565c0 12.976 10.557 23.533 23.532 23.533h6.884l-4.063 20.317c-1.799 8.998.399 18.312 6.033 25.556l49.355 63.457c1.479 1.901 3.69 2.896 5.925 2.896 1.609 0 3.23-.516 4.599-1.58 3.27-2.543 3.859-7.255 1.315-10.524l-49.355-63.457c-2.955-3.8-4.108-8.687-3.165-13.406l5.857-29.288c.44-2.203-.13-4.488-1.555-6.226-1.424-1.738-3.553-2.745-5.8-2.745h-16.032c-4.705 0-8.532-3.828-8.532-8.533v-14.184l28.952-8.915 85.235 154.972c1.318 2.396 3.836 3.886 6.572 3.886s5.253-1.489 6.572-3.886l85.259-155.014 28.928 8.908v14.234c0 4.705-3.828 8.533-8.532 8.533h-16.032c-2.247 0-4.375 1.007-5.8 2.745s-1.995 4.022-1.555 6.226l5.857 29.288c.944 4.72-.209 9.605-3.164 13.405l-49.355 63.457c-2.543 3.27-1.954 7.981 1.315 10.524 1.369 1.064 2.99 1.58 4.599 1.58 2.235 0 4.447-.994 5.925-2.896l49.356-63.457c5.634-7.244 7.833-16.559 6.033-25.556l-4.063-20.317h6.884c12.976 0 23.532-10.557 23.532-23.533v-9.615l20.56 6.331c17.136 5.277 28.649 20.869 28.649 38.799v92.744c0 4.143 3.358 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-92.743c0-24.555-15.767-45.908-39.235-53.135zm-136 85.35-4.672-42.017c3.07-2.69 5.465-6.185 6.822-10.255l1.708-5.123 15.279 13.096c1.184 1.015 2.5 1.821 3.892 2.43zm-72.491-41.87c1.392-.609 2.707-1.415 3.891-2.43l15.403-13.202 1.743 5.23c1.356 4.069 3.751 7.564 6.821 10.254l-4.698 42.257zm35.268-15.145-3.676-11.028 16.167-13.858 16.291 13.964-3.64 10.922c-1.163 3.489-4.416 5.834-8.094 5.834h-8.954c-3.678 0-6.931-2.345-8.094-5.834zm81.363-64.264c.21.065.284.213.309.262l10.493 20.986-25.261 44.206c-.036.063-.121.211-.36.252-.245.04-.369-.069-.424-.116l-40.563-34.769 55.403-30.78c.047-.026.191-.106.403-.041zm-147.768-291.192c-.541 2.604-.828 5.301-.828 8.063 0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5c0-13.544 11.019-24.564 24.564-24.564h72.146c48.906 0 88.693 39.788 88.693 88.693v56.995c-1.461-.24-2.946-.366-4.444-.366h-12.025c-4.705 0-8.532-3.828-8.532-8.547l-.04-20.221c-.03-15.096-10.815-28.103-25.646-30.928l-129.797-24.723c-6.911-1.315-13.985.501-19.406 4.987s-8.53 11.094-8.53 18.13v28.722c0 17.965-14.616 32.581-32.581 32.581-.174 0-.345.012-.516.023v-80.701c.001-24.541 18.284-44.88 41.942-48.144zm-17.813 168.386c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v.516h-4.524c-3.537 0-6.927-1.506-9.303-4.131-2.407-2.66-3.532-6.115-3.17-9.729.63-6.292 6.612-11.221 13.619-11.221 1.188 0 2.311-.276 3.309-.768 22.173-4.037 39.038-23.493 39.038-46.813v-28.721c0-2.551 1.127-4.947 3.093-6.573 1.965-1.626 4.53-2.286 7.036-1.808l129.797 24.723c7.779 1.481 13.437 8.304 13.452 16.223l.04 20.206c0 12.976 10.557 23.533 23.532 23.533h12.024c3.537 0 6.928 1.505 9.303 4.13 2.406 2.659 3.532 6.114 3.17 9.729-.63 6.292-6.612 11.222-13.619 11.222h-3.382v-.439c0-4.141-3.356-7.499-7.497-7.5-.001 0-.002 0-.003 0-4.14 0-7.497 3.354-7.5 7.495-.039 53.286-43.421 96.638-96.706 96.638-53.325-.002-96.709-43.386-96.709-96.712zm27.528 123.068c.024-.049.099-.197.309-.262.21-.063.355.015.403.042l16.389 9.105c3.622 2.013 8.188.707 10.199-2.914 2.012-3.621.707-8.187-2.914-10.199l-3.817-2.121v-16.156c14.706 7.138 31.2 11.147 48.614 11.147 17.411 0 33.905-4.012 48.612-11.153v16.163l-48.612 27.007-18.224-10.125c-3.622-2.011-8.187-.706-10.199 2.914-2.012 3.621-.707 8.187 2.914 10.199l12.443 6.913-40.564 34.77c-.055.047-.182.159-.424.116-.24-.042-.324-.189-.36-.252l-25.26-44.206zm69.181 165.983-12.051-21.911c.007-.052.019-.101.024-.153l6.574-59.124c.352.016.701.042 1.056.042h8.954c.354 0 .704-.026 1.055-.042l6.566 59.049z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                                <path
                                                    d="m207.823 168.339c-4.142 0-7.5 3.358-7.5 7.5v8.016c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-8.016c0-4.142-3.358-7.5-7.5-7.5z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                                <path
                                                    d="m304.017 168.339c-4.142 0-7.5 3.358-7.5 7.5v8.016c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-8.016c0-4.142-3.358-7.5-7.5-7.5z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                                <path
                                                    d="m285.308 226.684c-2.91-2.949-7.659-2.98-10.606-.071-2.737 2.701-9.298 5.855-18.781 5.855s-16.043-3.154-18.781-5.855c-2.95-2.91-7.698-2.877-10.606.071-2.909 2.948-2.877 7.697.071 10.606 6.459 6.373 17.418 10.177 29.316 10.177s22.857-3.805 29.316-10.177c2.948-2.909 2.98-7.658.071-10.606z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                                <path
                                                    d="m215.84 144.291h-16.033c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h16.033c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                                <path
                                                    d="m296.001 159.291h16.032c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-16.032c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5z"
                                                    fill="#61481c" data-original="#000000" class=""></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="mt-0" style="font-size: 12px">Jasa <br> Notaris</div>
                                </a>
                            </div>

                            <div class="col mb-4">
                                <a href="{{url('/')}}/jasa-tukang-ukur"
                                    class="btn btn-outline-light text-dark w-100 rounded-4 shadow">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                        width="77px" x="0" y="0" viewBox="0 0 54 60"
                                        style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <circle r="27" cx="27" cy="30" fill="#ffffff" shape="circle"></circle>
                                        <g transform="matrix(0.7,0,0,0.7,8.084528160095218,8.999380803108217)">
                                            <g xmlns="http://www.w3.org/2000/svg" id="Page-1" fill="none"
                                                fill-rule="evenodd">
                                                <g id="022---Tape-Measure" fill="rgb(0,0,0)" fill-rule="nonzero"
                                                    transform="translate(0 -1)">
                                                    <path id="Shape"
                                                        d="m35.264 1.609c-3.7378983-.44229717-7.5002037-.64571016-11.264-.609-13.458 0-24 5.271-24 12v16c0 5.383 6.783 9.917 16.775 11.445-2.7926667 2.016-5.7446667 4.0936667-8.856 6.233-.52171701.3581018-.84249019.9425814-.86438596 1.5749943s.25768537 1.2376783.75338596 1.6310057l13.344 10.677c.7075125.5643386 1.7047481.5868449 2.437.055 2.234-1.627 4.415-3.327 6.539-5.072 2.0666667-1.7006667 4.0666667-3.4456667 6-5.235.01-.011.024-.014.033-.025l.007-.012c1.8933333-1.75 3.708-3.5286667 5.444-5.336.021-.02.049-.028.068-.051s.016-.033.027-.048c1.274-1.329 2.516-2.666 3.689-4.011 3.332-3.822 7.478-8.577 8.268-14.434.806-5.974-.307-14.827-6.094-20.117-3.615-3.316-8.248-4.147-12.306-4.666zm-11.264 1.391c11.925 0 22 4.58 22 10 0 6.481-12.9 10-22 10-11.925 0-22-4.58-22-10s10.075-10 22-10zm-22 26v-11.126c3.67 4.233 12.033 7.126 22 7.126 5.2574546.0850922 10.482356-.8399846 15.391-2.725-6.137036 5.6608759-12.6126553 10.9432928-19.391 15.818v-5.093c0-.5522847-.4477153-1-1-1s-1 .4477153-1 1v5.6c-1.6868152-.2203923-3.35715-.5524548-5-.994v-5.606c0-.5522847-.4477153-1-1-1s-1 .4477153-1 1v5c-1.38319746-.4632171-2.72192488-1.0499144-4-1.753v-6.247c0-.5522847-.44771525-1-1-1s-1 .4477153-1 1v4.931c-1.9-1.482-3-3.176-3-4.931zm20.4 30-13.349-10.673c1.525-1.048 3.157-2.182 4.851-3.375.8795125.5637678 1.9341854.788068 2.967.631.6467275-.1382595 1.3217636.0033584 1.858396.3898785s.8848318.9819079.958604 1.6391215c.402216 2.320963 2.5831155 3.8968216 4.913 3.55.6475955-.1324477 1.3210571.0126426 1.8566662.3999993.535609.3873568.8843101.9815027.9613338 1.6380007.1115411.5302585.3016372 1.040889.564 1.515-1.819 1.467-3.681 2.902-5.581 4.285zm29.291-32.88c-.2314302 1.5810662-.7085194 3.1162541-1.414 4.55l-1.422-2c-.3203252-.4501121-.9448879-.5553252-1.395-.235s-.5553252.9448879-.235 1.395l1.991 2.8c-.9637169 1.5504227-2.0385323 3.0289622-3.216 4.424l-2.783-3.182c-.2344926-.2711789-.5962086-.3960829-.9480668-.3273765-.3518582.0687063-.6400157.3205093-.7552681.6599819-.1152523.3394726-.0399631.7146672.1973349.9833946l2.977 3.412c-.267.309-.532.614-.791.91-.974 1.118-2 2.23-3.046 3.337l-4.2-3.6c-.2690133-.2485449-.6523779-.3301409-.9992902-.2126907-.3469124.1174502-.6018621.415153-.66456.7760016-.0626979.3608485.0768884.7271025.3638502.9546891l4.117 3.533c-1.315 1.345-2.685 2.675-4.093 3.99l-4.725-4.048c-.2715218-.2322227-.6463077-.3019501-.9831793-.1829166-.3368717.1190335-.5846503.4087439-.6500001.7600001-.0653497.3512561.0616575.7106939.3331794.9429165l4.55 3.894c-1.4 1.273-2.857 2.52-4.334 3.75-.0840051-.2267706-.1538069-.4585525-.209-.694-.4011847-2.3176237-2.5798838-3.8905859-4.906-3.542-.6498109.1317688-1.3251096-.0145721-1.8620778-.4035225-.5369682-.3889505-.8865429-.9849718-.9639222-1.6434775-.3956791-2.3200929-2.5801354-3.8932042-4.906-3.533-.2990527.032209-.6006079.0338843-.9.005 11.38-8.1 24.973-18.56 30.1-25.628 1.2497329-1.3192534 1.9876535-3.0411864 2.081-4.856.052-3.144-2.156-5.638-4.789-7.387 1.0986623.52852923 2.1165304 1.21069956 3.023 2.026 4.878 4.462 6.256 12.442 5.457 18.372z"
                                                        fill="#61481c" data-original="#000000" class=""></path>
                                                    <path id="Shape"
                                                        d="m23.969 19c4.091 0 10.919-1.174 12.678-4.88 1.194-2.516-.879-5.1-3.215-6.678-2.2044717-1.3965907-4.6319185-2.40518012-7.177-2.982-.778402-.19740877-1.6042675-.03956041-2.255.431-.3982804.28692111-.7127686.67493952-.911 1.124-6.945.227-12.089 2.953-12.089 6.485 0 4.715 7.876 6.5 12.969 6.5zm7.343-3.2.358-7.106c.2226667.13333333.4376667.26966667.645.409 3.756 2.532 3.677 4.942-1.003 6.697zm-6.456-8.717v-.019c.017091-.22037403.1305214-.42198743.31-.551.1701891-.12668716.3886521-.16934997.594-.116 1.3508165.33520878 2.6737454.77417913 3.957 1.313l-.438 8.706c-1.6840136.3905512-3.4072936.5865005-5.136.5840236zm-2.072.946-.639 8.9c-5.511-.398-9.145-2.538-9.145-4.429 0-1.977 3.965-4.19 9.784-4.471z"
                                                        fill="#61481c" data-original="#000000" class=""></path>
                                                    <path id="Shape"
                                                        d="m27 11c-.5522847 0-1 .4477153-1 1v1c0 .5522847.4477153 1 1 1s1-.4477153 1-1v-1c0-.5522847-.4477153-1-1-1z"
                                                        fill="#61481c" data-original="#000000" class=""></path>
                                                    <path id="Shape"
                                                        d="m16.625 49.219c-.4313344-.3451779-1.060822-.2753344-1.406.156-.3451779.4313344-.2753344 1.060822.156 1.406l5 4c.4313344.3451779 1.060822.2753344 1.406-.156.3451779-.4313344.2753344-1.060822-.156-1.406z"
                                                        fill="#61481c" data-original="#000000" class=""></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="mt-0" style="font-size: 12px">Jasa <br> Petugas Ukur</div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <style>
                    .custom.card-header:first-child {
                        border-radius: 10px 10px !important;
                    }

                    .card-header:first-child {
                        border-radius: 10px 10px 0px 0px !important;
                    }

                </style>

                <div class="card mb-3 mobile rounded-5">
                    <div class="custom card-header bg-brown text-white">
                        <center>
                            <h6 class="blink mb-0">Pre Launching 1 Desember 2022</h6>
                        </center>

                    </div>
                </div>
            </div>


            <!-- orang bulet appraisal -->
            <div class="card border-0 ">
                <div class="card-body">
                    <div class="mt-2 ">

                        <div class="row justify-content-center align-items-center">

                            <div class="col-1 arrow-desktop text-center">
                                <button id="left-orang-app" class="btn rounded-5 text-white bg-secondary"
                                    style="background-color: #61481C">
                                    <i class="fa-solid fa-arrow-left"></i>
                                </button>
                            </div>
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col mobile-scroll" id='orang-bulet-app'
                                        style="white-space:nowrap;flex-wrap:nowarp;display:flex">

                                        <?php
                                            $name = [
                                                "Rudi H.",
                                                "Budi K.",
                                                "Joko Afdal",
                                                "Ustman A.",
                                                "Robert K.",
                                                "James Tate", "Hadi Ismail", 'Abdullah', 'Nugraha D.', 'Ade Syarief', "Adhi Utomo", 'Leman wan', 'Pranoto Adi', 'Agus Susan'
                                            ];
                                            ?>
                                        <button
                                            class="container-gambar mb-0 text-center p-1 me-1 text-decoration-none border-0 bg-white me-2">
                                            <img src="data:image/png;base64,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"
                                                alt="" srcset="" class="rounded-circle img-thumbnail "
                                                style="width:70px;height:70px;object-fit:cover;background:#61481C">
                                            <div style="width: 70px">
                                                Appraisal
                                            </div>
                                        </button>
                                        @for($i=0;$i< 14;$i++)<form action="{{url('')}}/detail-main-petugas"
                                            method="get" id="form-appraisal-{{$i}}">
                                            <input type="hidden" name="name" value="{{$name[$i]}}">
                                            <input type="hidden" name="img"
                                                value="https://randomuser.me/api/portraits/men/{{$i}}.jpg">
                                            <input type="hidden" name="jenis_petugas" value="Appraisal">
                                            </form>
                                            <button
                                                class="mb-0 container-gambar text-center p-1 me-1 text-decoration-none border-0 bg-white"
                                                onclick="return  $('form#form-appraisal-<?= $i ?>').submit()"
                                                style='display: inline-block;flex: 0 0 auto'>
                                                <img src="https://randomuser.me/api/portraits/men/{{$i}}.jpg" alt=""
                                                    srcset="" class="rounded-circle img-thumbnail "
                                                    style="width:70px !important;height:70px;object-fit:cover;"> <br>
                                                {{$name[$i]}}
                                            </button>

                                            @endfor
                                            <a href="{{url('')}}/jasa-appraisal"
                                                class="container-gambar mb-0 text-center p-1 me-1 text-decoration-none border-0 bg-white me-2">
                                                <img src="data:image/png;base64,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"
                                                    alt="" srcset="" class="rounded-circle img-thumbnail "
                                                    style="width:70px;height:70px;object-fit:cover;background-color:#007bff">
                                                <br>
                                                Lihat Semua
                                            </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1 arrow-desktop text-center">
                                <button id="right-orang-app" class="btn rounded-5 text-white bg-secondary"
                                    style="background-color: #61481C">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </div>

                            <script>
                                $('#right-orang-app').click(function () {
                                    event.preventDefault();
                                    $('#orang-bulet-app').animate({
                                        scrollLeft: "+=300px"
                                    }, "slow");
                                });

                                $('#left-orang-app').click(function () {
                                    event.preventDefault();
                                    $('#orang-bulet-app').animate({
                                        scrollLeft: "-=300px"
                                    }, "slow");
                                });

                            </script>
                        </div>


                    </div>
                </div>
            </div>

            
            <!-- Bidding Tanah -->
            <div class="card mt-3 border-0 shadow-sm ">
                <div class="card-header bg-white">
                    <table style="width:100%">
                        <tr>
                            <td rowspan="2" style="width: 40px">
                                <img src="{{asset('/uploads/sengketa-logo_pas.png')}}" style="width:30px">
                            </td>
                            <td>
                                <h5 color="text-dark" style="margin-bottom: 0px !important">
                                    Bidding Tanah
                                </h5>
                            </td>
                            <td class="text-end" rowspan="2">
                                <a href="{{url('')}}/bid-lahan" class="text-success fw-bold"
                                    style="text-decoration: none">Lihat
                                    Semua</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="mb-0">Tanah Tersedia <span class="badge bg-danger">2,353</span></p>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="card-body bg-card-dark-mode">

                    <div class="row align-items-center justify-content-center">


                        <div class="col-12 desktop-arrow text-center">
                            <div class="row mobile-scroll mt-2 align-items-center bidding-card-a"
                                style="flex-wrap: nowrap">

                                <div class="col-12 custom ">
                                    <div class="card mx-auto">
                                        <div class="ribbon-pop">
                                            <i class="fa-solid fa-star"></i>&nbsp;HOT
                                        </div>
                                        <div class="share-icon">
                                            <button class="btn btn-sm text-white rounded-5"
                                                style="background: rgba(0, 0, 0, 0.5)">
                                                <i class="fa-solid fa-share-from-square"></i>
                                            </button>
                                        </div>
                                        <div id="ll4" class="carousel slide" data-bs-interval="false">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#ll4" data-bs-slide-to="0"
                                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#ll4" data-bs-slide-to="1"
                                                    aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#ll4" data-bs-slide-to="2"
                                                    aria-label="Slide 3"></button>
                                                <button type="button" data-bs-target="#ll4" data-bs-slide-to="3"
                                                    aria-label="Slide 4"></button>
                                            </div>

                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('')}}images/lahan1.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan1.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan2.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan2.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan3.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan3.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev opacity-90 text-dark" type="button"
                                                data-bs-target="#ll4" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next opacity-90 text-dark" type="button"
                                                data-bs-target="#ll4" data-bs-slide="next">
                                                <span class="carousel-control-next-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <h5 class="mb-0 text-center">Kode Bidang BL-004 <img
                                                            src="https://sengketatanah.id/uploads/biru_centang.png"
                                                            alt="" class="mb-1" style="height:20px"></h5>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="card-body pt-0">
                                            <table class="mt-2 mb-2">
                                                <tr>
                                                    <td>
                                                        <b>Nilai Pinjaman :</b>
                                                    </td>

                                                    <td rowspan="2">
                                                        <div class="d-flex align-items-center">

                                                            <a id="fav-c1 my-auto" style="margin-right: 10px">
                                                                <h5 class="mb-0 text-fav-disable" id="fav-ch-c1">
                                                                    <i class="fas fa-star"></i>
                                                                </h5>
                                                            </a>
                                                            <button
                                                                class="btn float-end btn-brown text-white mb-0 my-auto w-100"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID</button>
                                                        </div>


                                                        <script>
                                                            $("#fav-c1").click(function () {
                                                                $("#fav-ch-c1").toggleClass('fav-icon');
                                                            });

                                                        </script>


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">
                                                        <h5 class="mb-0">
                                                            <b class="text-primary">
                                                                Rp.450.000.000
                                                            </b>
                                                        </h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="fw-bold">
                                                            Fee : 30%
                                                        </h5>
                                                    </td>
                                                </tr>
                                            </table>
                                            <hr style="margin-top:-4px">

                                            <table>
                                                <tbody>
                                                    </tr>

                                                    <td>Lokasi</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;Pancawati, Bogor</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Luas</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;1 Ha</td>
                                                    </tr>
                                                    <tr>

                                                        <td>Objek Tanah</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Tanah Darat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nilai ZNT BPN</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;750.000/meter</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penawaran</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Open Bidding</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Jumlah Bid</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;3</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>


                                            <div class="row g-0">
                                                <div class="col text-start">

                                                    <a href="#" class="  mx-auto rounded-5" data-bs-toggle="modal"
                                                        data-bs-target="#modal-lihat-lahan"
                                                        style="text-decoration:none">
                                                        <i class="fa-solid fa-eye"></i> Lihat Detail
                                                    </a>


                                                    <div class="modal fade my-auto text-center" id="berkasC"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header p-0">
                                                                    <h1
                                                                        class="modal-title mx-auto text-danger display-1">
                                                                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                            style="width: 100px" alt="">
                                                                    </h1>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda harus memiliki akun peserta lelang sebelum
                                                                    melihat
                                                                    detail.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary me-auto"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <a type="button" class="btn btn-success"
                                                                        href="https://server.sengketatanah.id/login">Login</a>
                                                                    <a type="button" class="btn btn-danger"
                                                                        href="https://server.sengketatanah.id/login">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <form action="{{url('')}}/bid-sengketa/podcast" class="form-sengketa1"
                                                method="get">
                                                <input type="hidden" name="owner" value=" Bahru">
                                                <input type="hidden" name="objek" value=" Sengketa Pertanahan">
                                                <input type="hidden" name="luas" value=" 1 Ha">
                                                <input type="hidden" name="lokasi" value=" Pancawati, Bogor">
                                                <input type="hidden" name="komentar" value="">
                                                <input type="hidden" name="link_yt"
                                                    value="https://www.youtube.com/embed/-RkCcavzXq8">
                                                <input type="hidden" name="form" value="sponsor">
                                            </form>


                                            <hr>
                                            <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                <div class="col-4">

                                                    <div class="d-grid gap-2 ">

                                                        <!-- <button type="button"
                                                    class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                    data-bs-toggle="modal" data-bs-target="#exampleC">
                                                    BID
                                                </button> -->


                                                        <div class="modal fade my-auto" id="exampleC" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                                class="mb-2" style="width: 100px"
                                                                                alt="">
                                                                        </h1>
                                                                    </div>
                                                                    <div class="modal-body" style="text-align: justify">

                                                                        Anda harus memiliki akun <b>LENDER</b> sebelum
                                                                        melakukan
                                                                        Bid (Bid adalah proses penawaran anda dengan
                                                                        owner).
                                                                        Jika anda belum menemukan kesepakatan anda bisa
                                                                        close
                                                                        bidding kapan saja.
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary me-auto"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a type="button" class="btn btn-success"
                                                                            href="https://server.sengketatanah.id/login">Login</a>
                                                                        <a type="button" class="btn btn-danger"
                                                                            href="https://server.sengketatanah.id/login">Register</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>

                                <div class="col-12 custom">
                                    <div class="card mb-2 mx-auto">
                                        <div class="ribbon-pop">
                                            <i class="fa-solid fa-star"></i>&nbsp;HOT
                                        </div>
                                        <div class="share-icon">
                                            <button class="btn btn-sm text-white rounded-5"
                                                style="background: rgba(0, 0, 0, 0.5)">
                                                <i class="fa-solid fa-share-from-square"></i>
                                            </button>
                                        </div>
                                        <div id="ll2" class="carousel slide" data-bs-interval="false">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#ll2" data-bs-slide-to="0"
                                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#ll2" data-bs-slide-to="1"
                                                    aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#ll2" data-bs-slide-to="2"
                                                    aria-label="Slide 3"></button>
                                                <button type="button" data-bs-target="#ll2" data-bs-slide-to="3"
                                                    aria-label="Slide 4"></button>
                                            </div>

                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('')}}images/lahan2.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan2.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan1.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan1.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan3.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan3.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev opacity-90 text-dark" type="button"
                                                data-bs-target="#ll2" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next opacity-90 text-dark" type="button"
                                                data-bs-target="#ll2" data-bs-slide="next">
                                                <span class="carousel-control-next-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <h5 class="mb-0 text-center">Kode Bidang BL-001 <img
                                                            src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                            class="mb-1" style="height:20px"></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body pt-0">
                                            <table class="mt-2 mb-2">
                                                <tr>
                                                    <td>
                                                        <b>Nilai Pinjaman :</b>
                                                    </td>

                                                    <td rowspan="2">
                                                        <div class="d-flex align-items-center">

                                                            <a id="fav-c1 my-auto" style="margin-right: 10px">
                                                                <h5 class="mb-0 text-fav-disable" id="fav-ch-c1">
                                                                    <i class="fas fa-star"></i>
                                                                </h5>
                                                            </a>
                                                            <button
                                                                class="btn float-end btn-brown text-white mb-0 my-auto w-100"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID</button>
                                                        </div>


                                                        <script>
                                                            $("#fav-c1").click(function () {
                                                                $("#fav-ch-c1").toggleClass('fav-icon');
                                                            });

                                                        </script>


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">
                                                        <h5 class="mb-0">
                                                            <b class="text-primary">
                                                                Rp.500.000.000
                                                            </b>
                                                        </h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="fw-bold">
                                                            Fee : 30%
                                                        </h5>
                                                    </td>
                                                </tr>
                                            </table>
                                            <hr style="margin-top:-4px">


                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Lokasi</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Pancawati, Bogor</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Luas</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;5000 M</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Objek Tanah</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Tanah Darat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nilai ZNT BPN</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;750.000/meter</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penawaran</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Open Bidding</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah Bid</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;4</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>



                                            <div class="row g-0">
                                                <div class="col text-start">

                                                    <a href="#" class="  mx-auto rounded-5" data-bs-toggle="modal"
                                                        data-bs-target="#modal-lihat-lahan"
                                                        style="text-decoration:none">
                                                        <i class="fa-solid fa-eye"></i> Lihat Detail
                                                    </a>


                                                    <div class="modal fade my-auto text-center" id="berkasC"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header p-0">
                                                                    <h1
                                                                        class="modal-title mx-auto text-danger display-1">
                                                                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                            style="width: 100px" alt="">
                                                                    </h1>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda harus memiliki akun peserta lelang sebelum
                                                                    melihat detail.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary me-auto"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <a type="button" class="btn btn-success"
                                                                        href="https://server.sengketatanah.id/login">Login</a>
                                                                    <a type="button" class="btn btn-danger"
                                                                        href="https://server.sengketatanah.id/login">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <form action="{{url('')}}/bid-sengketa/podcast" class="form-sengketa2"
                                                method="get">
                                                <input type="hidden" name="owner" value=" Fatah">
                                                <input type="hidden" name="objek" value=" Konflik Pertanahan">
                                                <input type="hidden" name="luas" value=" 5000 M">
                                                <input type="hidden" name="lokasi" value=" Pancawati, Bogor">
                                                <input type="hidden" name="komentar" value="">
                                                <input type="hidden" name="link_yt"
                                                    value="https://www.youtube.com/embed/byby3HJ3OCI">
                                                <input type="hidden" name="form" value="sponsor">
                                            </form>


                                            <hr>
                                            <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                <div class="col-4">

                                                    <div class="d-grid gap-2 ">

                                                        <!-- <button type="button"
                                                    class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                    data-bs-toggle="modal" data-bs-target="#exampleC">
                                                    BID
                                                </button> -->


                                                        <div class="modal fade my-auto" id="exampleC" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                                class="mb-2" style="width: 100px"
                                                                                alt="">
                                                                        </h1>
                                                                    </div>
                                                                    <div class="modal-body" style="text-align: justify">

                                                                        Anda harus memiliki akun <b>LENDER</b> sebelum
                                                                        melakukan
                                                                        Bid (Bid adalah proses penawaran anda dengan
                                                                        owner).
                                                                        Jika anda belum menemukan kesepakatan anda bisa
                                                                        close
                                                                        bidding kapan saja.</div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary me-auto"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a type="button" class="btn btn-success"
                                                                            href="https://server.sengketatanah.id/login">Login</a>
                                                                        <a type="button" class="btn btn-danger"
                                                                            href="https://server.sengketatanah.id/login">Register</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 custom">
                                    <div class="card mb-2 mx-auto">
                                        <div class="ribbon-pop">
                                            <i class="fa-solid fa-star"></i>&nbsp;HOT
                                        </div>
                                        <div class="share-icon">
                                            <button class="btn btn-sm text-white rounded-5"
                                                style="background: rgba(0, 0, 0, 0.5)">
                                                <i class="fa-solid fa-share-from-square"></i>
                                            </button>
                                        </div>
                                        <div id="ll3" class="carousel slide" data-bs-interval="false">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#ll3" data-bs-slide-to="0"
                                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#ll3" data-bs-slide-to="1"
                                                    aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#ll3" data-bs-slide-to="2"
                                                    aria-label="Slide 3"></button>
                                                <button type="button" data-bs-target="#ll3" data-bs-slide-to="3"
                                                    aria-label="Slide 4"></button>
                                            </div>

                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('')}}images/lahan3.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan3.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan1.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan1.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan2.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan2.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev opacity-90 text-dark" type="button"
                                                data-bs-target="#ll3" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next opacity-90 text-dark" type="button"
                                                data-bs-target="#ll3" data-bs-slide="next">
                                                <span class="carousel-control-next-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <h5 class="mb-0 text-center">Kode Bidang BL-002 <img
                                                            src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                            class="mb-1" style="height:20px"></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body pt-0">
                                            <table class="mt-2 mb-2">
                                                <tr>
                                                    <td>
                                                        <b>Nilai Pinjaman :</b>
                                                    </td>

                                                    <td rowspan="2">
                                                        <div class="d-flex align-items-center">

                                                            <a id="fav-c1 my-auto" style="margin-right: 10px">
                                                                <h5 class="mb-0 text-fav-disable" id="fav-ch-c1">
                                                                    <i class="fas fa-star"></i>
                                                                </h5>
                                                            </a>
                                                            <button
                                                                class="btn float-end btn-brown text-white mb-0 my-auto w-100"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID</button>
                                                        </div>


                                                        <script>
                                                            $("#fav-c1").click(function () {
                                                                $("#fav-ch-c1").toggleClass('fav-icon');
                                                            });

                                                        </script>


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">
                                                        <h5 class="mb-0">
                                                            <b class="text-primary">
                                                                Rp.100.000.000
                                                            </b>
                                                        </h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="fw-bold">
                                                            Fee : 30%
                                                        </h5>
                                                    </td>
                                                </tr>
                                            </table>
                                            <hr style="margin-top:-4px">

                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Lokasi</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Medan, Sumatra Utara</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Luas</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;3.2 Ha</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Objek Tanah</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Tanah Darat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nilai ZNT BPN</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;750.000/meter</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penawaran</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Open Bidding</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah Bid</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;6</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>



                                            <div class="row g-0">
                                                <div class="col text-start">

                                                    <a href="#" class="  mx-auto rounded-5" data-bs-toggle="modal"
                                                        data-bs-target="#modal-lihat-lahan"
                                                        style="text-decoration:none">
                                                        <i class="fa-solid fa-eye"></i> Lihat Detail
                                                    </a>


                                                    <div class="modal fade my-auto text-center" id="berkasC"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header p-0">
                                                                    <h1
                                                                        class="modal-title mx-auto text-danger display-1">
                                                                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                            style="width: 100px" alt="">
                                                                    </h1>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda harus memiliki akun peserta lelang sebelum
                                                                    melihat
                                                                    detail.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary me-auto"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <a type="button" class="btn btn-success"
                                                                        href="https://server.sengketatanah.id/login">Login</a>
                                                                    <a type="button" class="btn btn-danger"
                                                                        href="https://server.sengketatanah.id/login">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <form action="{{url('')}}/bid-sengketa/podcast" class="form-sengketa3"
                                                method="get">
                                                <input type="hidden" name="owner" value=" Ophelia Suartini">
                                                <input type="hidden" name="objek" value=" Perkara Pertanahan">
                                                <input type="hidden" name="luas" value=" 3.2 Ha">
                                                <input type="hidden" name="lokasi" value=" Medan, Sumatra Utara">
                                                <input type="hidden" name="komentar" value="">
                                                <input type="hidden" name="link_yt"
                                                    value="https://www.youtube.com/embed/1I4iEKK1qbQ">
                                                <input type="hidden" name="form" value="sponsor">
                                            </form>


                                            <hr>
                                            <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                <div class="col-4">

                                                    <div class="d-grid gap-2 ">
                                                        <!-- <button type="button"
                                                                class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID
                                                            </button> -->


                                                        <div class="modal fade my-auto" id="exampleC" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                                class="mb-2" style="width: 100px"
                                                                                alt="">
                                                                        </h1>
                                                                    </div>
                                                                    <div class="modal-body" style="text-align: justify">

                                                                        Anda harus memiliki akun <b>LENDER</b> sebelum
                                                                        melakukan
                                                                        Bid (Bid adalah proses penawaran anda dengan
                                                                        owner).
                                                                        Jika anda belum menemukan kesepakatan anda bisa
                                                                        close
                                                                        bidding kapan saja.</div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary me-auto"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a type="button" class="btn btn-success"
                                                                            href="https://server.sengketatanah.id/login">Login</a>
                                                                        <a type="button" class="btn btn-danger"
                                                                            href="https://server.sengketatanah.id/login">Register</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 custom">
                                    <div class="card mb-2 mx-auto">
                                        <div class="ribbon-pop">
                                            <i class="fa-solid fa-star"></i>&nbsp;HOT
                                        </div>
                                        <div class="share-icon">
                                            <button class="btn btn-sm text-white rounded-5"
                                                style="background: rgba(0, 0, 0, 0.5)">
                                                <i class="fa-solid fa-share-from-square"></i>
                                            </button>
                                        </div>
                                        <div id="ll44" class="carousel slide" data-bs-interval="false">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#ll44" data-bs-slide-to="0"
                                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#ll44" data-bs-slide-to="1"
                                                    aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#ll44" data-bs-slide-to="2"
                                                    aria-label="Slide 3"></button>
                                                <button type="button" data-bs-target="#ll44" data-bs-slide-to="3"
                                                    aria-label="Slide 4"></button>
                                            </div>

                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan3.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan3.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan1.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan1.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev opacity-90 text-dark" type="button"
                                                data-bs-target="#ll44" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next opacity-90 text-dark" type="button"
                                                data-bs-target="#ll44" data-bs-slide="next">
                                                <span class="carousel-control-next-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <h5 class="mb-0 text-center">Kode Bidang BL-003 <img
                                                            src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                            class="mb-1" style="height:20px"></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body pt-0">
                                            <table class="mt-2 mb-2">
                                                <tr>
                                                    <td>
                                                        <b>Nilai Pinjaman :</b>
                                                    </td>

                                                    <td rowspan="2">
                                                        <div class="d-flex align-items-center">

                                                            <a id="fav-c1 my-auto" style="margin-right: 10px">
                                                                <h5 class="mb-0 text-fav-disable" id="fav-ch-c1">
                                                                    <i class="fas fa-star"></i>
                                                                </h5>
                                                            </a>
                                                            <button
                                                                class="btn float-end btn-brown text-white mb-0 my-auto w-100"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID</button>
                                                        </div>


                                                        <script>
                                                            $("#fav-c1").click(function () {
                                                                $("#fav-ch-c1").toggleClass('fav-icon');
                                                            });

                                                        </script>


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">
                                                        <h5 class="mb-0">
                                                            <b class="text-primary">
                                                                Rp.200.000.000
                                                            </b>
                                                        </h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="fw-bold">
                                                            Fee : 30%
                                                        </h5>
                                                    </td>
                                                </tr>
                                            </table>
                                            <hr style="margin-top:-4px">

                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Lokasi</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Medan, Sumatra Utara</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Luas</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;3.2 Ha</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Objek Tanah</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Tanah Darat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nilai ZNT BPN</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;750.000/meter</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penawaran</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Open Bidding</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah Bid</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;6</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>


                                            <div class="row g-0">
                                                <div class="col text-start">

                                                    <a href="#" class="  mx-auto rounded-5" data-bs-toggle="modal"
                                                        data-bs-target="#modal-lihat-lahan"
                                                        style="text-decoration:none">
                                                        <i class="fa-solid fa-eye"></i> Lihat Detail
                                                    </a>


                                                    <div class="modal fade my-auto text-center" id="berkasC"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header p-0">
                                                                    <h1
                                                                        class="modal-title mx-auto text-danger display-1">
                                                                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                            style="width: 100px" alt="">
                                                                    </h1>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda harus memiliki akun peserta lelang sebelum
                                                                    melihat
                                                                    detail.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary me-auto"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <a type="button" class="btn btn-success"
                                                                        href="https://server.sengketatanah.id/login">Login</a>
                                                                    <a type="button" class="btn btn-danger"
                                                                        href="https://server.sengketatanah.id/login">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <form action="{{url('')}}/bid-sengketa/podcast" class="form-sengketa3"
                                                method="get">
                                                <input type="hidden" name="owner" value=" Ophelia Suartini">
                                                <input type="hidden" name="objek" value=" Perkara Pertanahan">
                                                <input type="hidden" name="luas" value=" 3.2 Ha">
                                                <input type="hidden" name="lokasi" value=" Medan, Sumatra Utara">
                                                <input type="hidden" name="komentar" value="">
                                                <input type="hidden" name="link_yt"
                                                    value="https://www.youtube.com/embed/1I4iEKK1qbQ">
                                                <input type="hidden" name="form" value="sponsor">
                                            </form>


                                            <hr>
                                            <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                <div class="col-4">

                                                    <div class="d-grid gap-2 ">
                                                        <!-- <button type="button"
                                                    class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                    data-bs-toggle="modal" data-bs-target="#exampleC">
                                                    BID
                                                </button> -->


                                                        <div class="modal fade my-auto" id="exampleC" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                                class="mb-2" style="width: 100px"
                                                                                alt="">
                                                                        </h1>
                                                                    </div>
                                                                    <div class="modal-body" style="text-align: justify">

                                                                        Anda harus memiliki akun <b>LENDER</b> sebelum
                                                                        melakukan
                                                                        Bid (Bid adalah proses penawaran anda dengan
                                                                        owner).
                                                                        Jika anda belum menemukan kesepakatan anda bisa
                                                                        close
                                                                        bidding kapan saja.</div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary me-auto"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a type="button" class="btn btn-success"
                                                                            href="https://server.sengketatanah.id/login">Login</a>
                                                                        <a type="button" class="btn btn-danger"
                                                                            href="https://server.sengketatanah.id/login">Register</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="row align-items-center justify-content-center">

                        <div class="col-12 desktop-arrow text-center">
                            <div class="row mobile-scroll mt-2 align-items-center bidding-card-a2"
                                style="flex-wrap: nowrap">

                                <div class="col-12 custom ">
                                    <div class="card mx-auto">
                                        <div class="ribbon-pop">
                                            <i class="fa-solid fa-star"></i>&nbsp;HOT
                                        </div>
                                        <div class="share-icon">
                                            <button class="btn btn-sm text-white rounded-5"
                                                style="background: rgba(0, 0, 0, 0.5)">
                                                <i class="fa-solid fa-share-from-square"></i>
                                            </button>
                                        </div>
                                        <div id="ll4a" class="carousel slide" data-bs-interval="false">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#ll4a" data-bs-slide-to="0"
                                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#ll4a" data-bs-slide-to="1"
                                                    aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#ll4a" data-bs-slide-to="2"
                                                    aria-label="Slide 3"></button>
                                                <button type="button" data-bs-target="#ll4a" data-bs-slide-to="3"
                                                    aria-label="Slide 4"></button>
                                            </div>

                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('')}}images/lahan1.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan1.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan2.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan2.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan3.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan3.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev opacity-90 text-dark" type="button"
                                                data-bs-target="#ll4a" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next opacity-90 text-dark" type="button"
                                                data-bs-target="#ll4a" data-bs-slide="next">
                                                <span class="carousel-control-next-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <h5 class="mb-0 text-center">Kode Bidang BL-004 <img
                                                            src="https://sengketatanah.id/uploads/biru_centang.png"
                                                            alt="" class="mb-1" style="height:20px"></h5>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="card-body pt-0">
                                            <table class="mt-2 mb-2">
                                                <tr>
                                                    <td>
                                                        <b>Nilai Pinjaman :</b>
                                                    </td>

                                                    <td rowspan="2">
                                                        <div class="d-flex align-items-center">

                                                            <a id="fav-c1 my-auto" style="margin-right: 10px">
                                                                <h5 class="mb-0 text-fav-disable" id="fav-ch-c1">
                                                                    <i class="fas fa-star"></i>
                                                                </h5>
                                                            </a>
                                                            <button
                                                                class="btn float-end btn-brown text-white mb-0 my-auto w-100"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID</button>
                                                        </div>


                                                        <script>
                                                            $("#fav-c1").click(function () {
                                                                $("#fav-ch-c1").toggleClass('fav-icon');
                                                            });

                                                        </script>


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">
                                                        <h5 class="mb-0">
                                                            <b class="text-primary">
                                                                Rp.450.000.000
                                                            </b>
                                                        </h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="fw-bold">
                                                            Fee : 30%
                                                        </h5>
                                                    </td>
                                                </tr>
                                            </table>
                                            <hr style="margin-top:-4px">

                                            <table>
                                                <tbody>
                                                    </tr>

                                                    <td>Lokasi</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;Pancawati, Bogor</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Luas</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;1 Ha</td>
                                                    </tr>
                                                    <tr>

                                                        <td>Objek Tanah</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Tanah Darat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nilai ZNT BPN</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;750.000/meter</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penawaran</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Open Bidding</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Jumlah Bid</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;3</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>


                                            <div class="row g-0">
                                                <div class="col text-start">

                                                    <a href="#" class="  mx-auto rounded-5" data-bs-toggle="modal"
                                                        data-bs-target="#modal-lihat-lahan"
                                                        style="text-decoration:none">
                                                        <i class="fa-solid fa-eye"></i> Lihat Detail
                                                    </a>


                                                    <div class="modal fade my-auto text-center" id="berkasC"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header p-0">
                                                                    <h1
                                                                        class="modal-title mx-auto text-danger display-1">
                                                                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                            style="width: 100px" alt="">
                                                                    </h1>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda harus memiliki akun peserta lelang sebelum
                                                                    melihat
                                                                    detail.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary me-auto"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <a type="button" class="btn btn-success"
                                                                        href="https://server.sengketatanah.id/login">Login</a>
                                                                    <a type="button" class="btn btn-danger"
                                                                        href="https://server.sengketatanah.id/login">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <form action="{{url('')}}/bid-sengketa/podcast" class="form-sengketa1"
                                                method="get">
                                                <input type="hidden" name="owner" value=" Bahru">
                                                <input type="hidden" name="objek" value=" Sengketa Pertanahan">
                                                <input type="hidden" name="luas" value=" 1 Ha">
                                                <input type="hidden" name="lokasi" value=" Pancawati, Bogor">
                                                <input type="hidden" name="komentar" value="">
                                                <input type="hidden" name="link_yt"
                                                    value="https://www.youtube.com/embed/-RkCcavzXq8">
                                                <input type="hidden" name="form" value="sponsor">
                                            </form>


                                            <hr>
                                            <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                <div class="col-4">

                                                    <div class="d-grid gap-2 ">

                                                        <!-- <button type="button"
                                                    class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                    data-bs-toggle="modal" data-bs-target="#exampleC">
                                                    BID
                                                </button> -->


                                                        <div class="modal fade my-auto" id="exampleC" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                                class="mb-2" style="width: 100px"
                                                                                alt="">
                                                                        </h1>
                                                                    </div>
                                                                    <div class="modal-body" style="text-align: justify">

                                                                        Anda harus memiliki akun <b>LENDER</b> sebelum
                                                                        melakukan
                                                                        Bid (Bid adalah proses penawaran anda dengan
                                                                        owner).
                                                                        Jika anda belum menemukan kesepakatan anda bisa
                                                                        close
                                                                        bidding kapan saja.</div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary me-auto"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a type="button" class="btn btn-success"
                                                                            href="https://server.sengketatanah.id/login">Login</a>
                                                                        <a type="button" class="btn btn-danger"
                                                                            href="https://server.sengketatanah.id/login">Register</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>

                                <div class="col-12 custom">
                                    <div class="card mb-2 mx-auto">
                                        <div class="ribbon-pop">
                                            <i class="fa-solid fa-star"></i>&nbsp;HOT
                                        </div>
                                        <div class="share-icon">
                                            <button class="btn btn-sm text-white rounded-5"
                                                style="background: rgba(0, 0, 0, 0.5)">
                                                <i class="fa-solid fa-share-from-square"></i>
                                            </button>
                                        </div>
                                        <div id="ll2a" class="carousel slide" data-bs-interval="false">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#ll2a" data-bs-slide-to="0"
                                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#ll2a" data-bs-slide-to="1"
                                                    aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#ll2a" data-bs-slide-to="2"
                                                    aria-label="Slide 3"></button>
                                                <button type="button" data-bs-target="#ll2a" data-bs-slide-to="3"
                                                    aria-label="Slide 4"></button>
                                            </div>

                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('')}}images/lahan2.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan2.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan1.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan1.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan3.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan3.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev opacity-90 text-dark" type="button"
                                                data-bs-target="#ll2a" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next opacity-90 text-dark" type="button"
                                                data-bs-target="#ll2a" data-bs-slide="next">
                                                <span class="carousel-control-next-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <h5 class="mb-0 text-center">Kode Bidang BL-001 <img
                                                            src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                            class="mb-1" style="height:20px"></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body pt-0">
                                            <table class="mt-2 mb-2">
                                                <tr>
                                                    <td>
                                                        <b>Nilai Pinjaman :</b>
                                                    </td>

                                                    <td rowspan="2">
                                                        <div class="d-flex align-items-center">

                                                            <a id="fav-c1 my-auto" style="margin-right: 10px">
                                                                <h5 class="mb-0 text-fav-disable" id="fav-ch-c1">
                                                                    <i class="fas fa-star"></i>
                                                                </h5>
                                                            </a>
                                                            <button
                                                                class="btn float-end btn-brown text-white mb-0 my-auto w-100"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID</button>
                                                        </div>


                                                        <script>
                                                            $("#fav-c1").click(function () {
                                                                $("#fav-ch-c1").toggleClass('fav-icon');
                                                            });

                                                        </script>


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">
                                                        <h5 class="mb-0">
                                                            <b class="text-primary">
                                                                Rp.500.000.000
                                                            </b>
                                                        </h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="fw-bold">
                                                            Fee : 30%
                                                        </h5>
                                                    </td>
                                                </tr>
                                            </table>
                                            <hr style="margin-top:-4px">


                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Lokasi</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Pancawati, Bogor</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Luas</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;5000 M</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Objek Tanah</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Tanah Darat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nilai ZNT BPN</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;750.000/meter</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penawaran</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Open Bidding</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah Bid</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;4</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>



                                            <div class="row g-0">
                                                <div class="col text-start">

                                                    <a href="#" class="  mx-auto rounded-5" data-bs-toggle="modal"
                                                        data-bs-target="#modal-lihat-lahan"
                                                        style="text-decoration:none">
                                                        <i class="fa-solid fa-eye"></i> Lihat Detail
                                                    </a>


                                                    <div class="modal fade my-auto text-center" id="berkasC"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header p-0">
                                                                    <h1
                                                                        class="modal-title mx-auto text-danger display-1">
                                                                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                            style="width: 100px" alt="">
                                                                    </h1>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda harus memiliki akun peserta lelang sebelum
                                                                    melihat detail.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary me-auto"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <a type="button" class="btn btn-success"
                                                                        href="https://server.sengketatanah.id/login">Login</a>
                                                                    <a type="button" class="btn btn-danger"
                                                                        href="https://server.sengketatanah.id/login">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <form action="{{url('')}}/bid-sengketa/podcast" class="form-sengketa2"
                                                method="get">
                                                <input type="hidden" name="owner" value=" Fatah">
                                                <input type="hidden" name="objek" value=" Konflik Pertanahan">
                                                <input type="hidden" name="luas" value=" 5000 M">
                                                <input type="hidden" name="lokasi" value=" Pancawati, Bogor">
                                                <input type="hidden" name="komentar" value="">
                                                <input type="hidden" name="link_yt"
                                                    value="https://www.youtube.com/embed/byby3HJ3OCI">
                                                <input type="hidden" name="form" value="sponsor">
                                            </form>


                                            <hr>
                                            <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                <div class="col-4">

                                                    <div class="d-grid gap-2 ">

                                                        <!-- <button type="button"
                                                    class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                    data-bs-toggle="modal" data-bs-target="#exampleC">
                                                    BID
                                                </button> -->


                                                        <div class="modal fade my-auto" id="exampleC" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                                class="mb-2" style="width: 100px"
                                                                                alt="">
                                                                        </h1>
                                                                    </div>
                                                                    <div class="modal-body" style="text-align: justify">

                                                                        Anda harus memiliki akun <b>LENDER</b> sebelum
                                                                        melakukan
                                                                        Bid (Bid adalah proses penawaran anda dengan
                                                                        owner).
                                                                        Jika anda belum menemukan kesepakatan anda bisa
                                                                        close
                                                                        bidding kapan saja.</div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary me-auto"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a type="button" class="btn btn-success"
                                                                            href="https://server.sengketatanah.id/login">Login</a>
                                                                        <a type="button" class="btn btn-danger"
                                                                            href="https://server.sengketatanah.id/login">Register</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 custom">
                                    <div class="card mb-2 mx-auto">
                                        <div class="ribbon-pop">
                                            <i class="fa-solid fa-star"></i>&nbsp;HOT
                                        </div>
                                        <div class="share-icon">
                                            <button class="btn btn-sm text-white rounded-5"
                                                style="background: rgba(0, 0, 0, 0.5)">
                                                <i class="fa-solid fa-share-from-square"></i>
                                            </button>
                                        </div>
                                        <div id="ll3a" class="carousel slide" data-bs-interval="false">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#ll3a" data-bs-slide-to="0"
                                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#ll3a" data-bs-slide-to="1"
                                                    aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#ll3a" data-bs-slide-to="2"
                                                    aria-label="Slide 3"></button>
                                                <button type="button" data-bs-target="#ll3a" data-bs-slide-to="3"
                                                    aria-label="Slide 4"></button>
                                            </div>

                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('')}}images/lahan3.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan3.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan1.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan1.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan2.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan2.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev opacity-90 text-dark" type="button"
                                                data-bs-target="#ll3a" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next opacity-90 text-dark" type="button"
                                                data-bs-target="#ll3a" data-bs-slide="next">
                                                <span class="carousel-control-next-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <h5 class="mb-0 text-center">Kode Bidang BL-002 <img
                                                            src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                            class="mb-1" style="height:20px"></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body pt-0">
                                            <table class="mt-2 mb-2">
                                                <tr>
                                                    <td>
                                                        <b>Nilai Pinjaman :</b>
                                                    </td>

                                                    <td rowspan="2">
                                                        <div class="d-flex align-items-center">

                                                            <a id="fav-c1 my-auto" style="margin-right: 10px">
                                                                <h5 class="mb-0 text-fav-disable" id="fav-ch-c1">
                                                                    <i class="fas fa-star"></i>
                                                                </h5>
                                                            </a>
                                                            <button
                                                                class="btn float-end btn-brown text-white mb-0 my-auto w-100"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID</button>
                                                        </div>


                                                        <script>
                                                            $("#fav-c1").click(function () {
                                                                $("#fav-ch-c1").toggleClass('fav-icon');
                                                            });

                                                        </script>


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">
                                                        <h5 class="mb-0">
                                                            <b class="text-primary">
                                                                Rp.100.000.000
                                                            </b>
                                                        </h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="fw-bold">
                                                            Fee : 30%
                                                        </h5>
                                                    </td>
                                                </tr>
                                            </table>
                                            <hr style="margin-top:-4px">

                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Lokasi</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Medan, Sumatra Utara</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Luas</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;3.2 Ha</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Objek Tanah</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Tanah Darat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nilai ZNT BPN</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;750.000/meter</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penawaran</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Open Bidding</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah Bid</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;6</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>



                                            <div class="row g-0">
                                                <div class="col text-start">

                                                    <a href="#" class="  mx-auto rounded-5" data-bs-toggle="modal"
                                                        data-bs-target="#modal-lihat-lahan"
                                                        style="text-decoration:none">
                                                        <i class="fa-solid fa-eye"></i> Lihat Detail
                                                    </a>


                                                    <div class="modal fade my-auto text-center" id="berkasC"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header p-0">
                                                                    <h1
                                                                        class="modal-title mx-auto text-danger display-1">
                                                                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                            style="width: 100px" alt="">
                                                                    </h1>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda harus memiliki akun peserta lelang sebelum
                                                                    melihat
                                                                    detail.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary me-auto"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <a type="button" class="btn btn-success"
                                                                        href="https://server.sengketatanah.id/login">Login</a>
                                                                    <a type="button" class="btn btn-danger"
                                                                        href="https://server.sengketatanah.id/login">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <form action="{{url('')}}/bid-sengketa/podcast" class="form-sengketa3"
                                                method="get">
                                                <input type="hidden" name="owner" value=" Ophelia Suartini">
                                                <input type="hidden" name="objek" value=" Perkara Pertanahan">
                                                <input type="hidden" name="luas" value=" 3.2 Ha">
                                                <input type="hidden" name="lokasi" value=" Medan, Sumatra Utara">
                                                <input type="hidden" name="komentar" value="">
                                                <input type="hidden" name="link_yt"
                                                    value="https://www.youtube.com/embed/1I4iEKK1qbQ">
                                                <input type="hidden" name="form" value="sponsor">
                                            </form>


                                            <hr>
                                            <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                <div class="col-4">

                                                    <div class="d-grid gap-2 ">
                                                        <!-- <button type="button"
                                                                class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID
                                                            </button> -->


                                                        <div class="modal fade my-auto" id="exampleC" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                                class="mb-2" style="width: 100px"
                                                                                alt="">
                                                                        </h1>
                                                                    </div>
                                                                    <div class="modal-body" style="text-align: justify">

                                                                        Anda harus memiliki akun <b>LENDER</b> sebelum
                                                                        melakukan
                                                                        Bid (Bid adalah proses penawaran anda dengan
                                                                        owner).
                                                                        Jika anda belum menemukan kesepakatan anda bisa
                                                                        close
                                                                        bidding kapan saja.</div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary me-auto"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a type="button" class="btn btn-success"
                                                                            href="https://server.sengketatanah.id/login">Login</a>
                                                                        <a type="button" class="btn btn-danger"
                                                                            href="https://server.sengketatanah.id/login">Register</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 custom">
                                    <div class="card mb-2 mx-auto">
                                        <div class="ribbon-pop">
                                            <i class="fa-solid fa-star"></i>&nbsp;HOT
                                        </div>
                                        <div class="share-icon">
                                            <button class="btn btn-sm text-white rounded-5"
                                                style="background: rgba(0, 0, 0, 0.5)">
                                                <i class="fa-solid fa-share-from-square"></i>
                                            </button>
                                        </div>
                                        <div id="ll44a" class="carousel slide" data-bs-interval="false">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#ll44a" data-bs-slide-to="0"
                                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#ll44a" data-bs-slide-to="1"
                                                    aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#ll44a" data-bs-slide-to="2"
                                                    aria-label="Slide 3"></button>
                                                <button type="button" data-bs-target="#ll44a" data-bs-slide-to="3"
                                                    aria-label="Slide 4"></button>
                                            </div>

                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan3.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan3.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan1.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan1.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev opacity-90 text-dark" type="button"
                                                data-bs-target="#ll44a" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next opacity-90 text-dark" type="button"
                                                data-bs-target="#ll44a" data-bs-slide="next">
                                                <span class="carousel-control-next-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <h5 class="mb-0 text-center">Kode Bidang BL-003 <img
                                                            src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                            class="mb-1" style="height:20px"></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body pt-0">
                                            <table class="mt-2 mb-2">
                                                <tr>
                                                    <td>
                                                        <b>Nilai Pinjaman :</b>
                                                    </td>

                                                    <td rowspan="2">
                                                        <div class="d-flex align-items-center">

                                                            <a id="fav-c1 my-auto" style="margin-right: 10px">
                                                                <h5 class="mb-0 text-fav-disable" id="fav-ch-c1">
                                                                    <i class="fas fa-star"></i>
                                                                </h5>
                                                            </a>
                                                            <button
                                                                class="btn float-end btn-brown text-white mb-0 my-auto w-100"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID</button>
                                                        </div>


                                                        <script>
                                                            $("#fav-c1").click(function () {
                                                                $("#fav-ch-c1").toggleClass('fav-icon');
                                                            });

                                                        </script>


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">
                                                        <h5 class="mb-0">
                                                            <b class="text-primary">
                                                                Rp.200.000.000
                                                            </b>
                                                        </h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="fw-bold">
                                                            Fee : 30%
                                                        </h5>
                                                    </td>
                                                </tr>
                                            </table>
                                            <hr style="margin-top:-4px">

                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Lokasi</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Medan, Sumatra Utara</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Luas</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;3.2 Ha</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Objek Tanah</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Tanah Darat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nilai ZNT BPN</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;750.000/meter</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penawaran</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Open Bidding</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah Bid</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;6</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>


                                            <div class="row g-0">
                                                <div class="col text-start">

                                                    <a href="#" class="  mx-auto rounded-5" data-bs-toggle="modal"
                                                        data-bs-target="#modal-lihat-lahan"
                                                        style="text-decoration:none">
                                                        <i class="fa-solid fa-eye"></i> Lihat Detail
                                                    </a>


                                                    <div class="modal fade my-auto text-center" id="berkasC"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header p-0">
                                                                    <h1
                                                                        class="modal-title mx-auto text-danger display-1">
                                                                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                            style="width: 100px" alt="">
                                                                    </h1>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda harus memiliki akun peserta lelang sebelum
                                                                    melihat
                                                                    detail.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary me-auto"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <a type="button" class="btn btn-success"
                                                                        href="https://server.sengketatanah.id/login">Login</a>
                                                                    <a type="button" class="btn btn-danger"
                                                                        href="https://server.sengketatanah.id/login">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <form action="{{url('')}}/bid-sengketa/podcast" class="form-sengketa3"
                                                method="get">
                                                <input type="hidden" name="owner" value=" Ophelia Suartini">
                                                <input type="hidden" name="objek" value=" Perkara Pertanahan">
                                                <input type="hidden" name="luas" value=" 3.2 Ha">
                                                <input type="hidden" name="lokasi" value=" Medan, Sumatra Utara">
                                                <input type="hidden" name="komentar" value="">
                                                <input type="hidden" name="link_yt"
                                                    value="https://www.youtube.com/embed/1I4iEKK1qbQ">
                                                <input type="hidden" name="form" value="sponsor">
                                            </form>


                                            <hr>
                                            <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                <div class="col-4">

                                                    <div class="d-grid gap-2 ">
                                                        <!-- <button type="button"
                                                    class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                    data-bs-toggle="modal" data-bs-target="#exampleC">
                                                    BID
                                                </button> -->


                                                        <div class="modal fade my-auto" id="exampleC" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                                class="mb-2" style="width: 100px"
                                                                                alt="">
                                                                        </h1>
                                                                    </div>
                                                                    <div class="modal-body" style="text-align: justify">

                                                                        Anda harus memiliki akun <b>LENDER</b> sebelum
                                                                        melakukan
                                                                        Bid (Bid adalah proses penawaran anda dengan
                                                                        owner).
                                                                        Jika anda belum menemukan kesepakatan anda bisa
                                                                        close
                                                                        bidding kapan saja.</div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary me-auto"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a type="button" class="btn btn-success"
                                                                            href="https://server.sengketatanah.id/login">Login</a>
                                                                        <a type="button" class="btn btn-danger"
                                                                            href="https://server.sengketatanah.id/login">Register</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3 custom text-start">
                                    <button class="btn btn-sm">
                                        <div class="row p-4">
                                            <div class="col-md-12">
                                                <span class="fa-stack fa-2x">
                                                    <i class="fa fa-circle fa-stack-2x text-brown"></i>
                                                    <i class="fa-solid fa-arrow-right fa-stack-1x text-white"></i>
                                                </span>
                                            </div>
                                            <div class="col-md-12 mt-1 fw-bold">
                                                Lihat Semua
                                            </div>
                                        </div>
                                    </button>
                                </div>

                            </div>
                        </div>

                    </div>

                    <script>
                        $('#right-button-bid-lahan').click(function () {
                            event.preventDefault();


                            $('div.bidding-card-a').animate({
                                scrollLeft: "+=300px"
                            }, "slow");

                            let outerWidth = Math.floor($('div.bidding-card-a').outerWidth())
                            let scrollWidth = Math.floor($('div.bidding-card-a')[0].scrollWidth)
                            let scrollLeft = Math.floor($('div.bidding-card-a').scrollLeft())
                            if ((outerWidth - scrollWidth) + scrollLeft == 0) {
                                $('div.bidding-card-a2').animate({
                                    scrollLeft: "+=300px"
                                }, "slow")

                            }
                        });

                        $('#left-button-bid-lahan').click(function () {
                            event.preventDefault();

                            if ($('div.bidding-card-a2').scrollLeft() > 0) {
                                $('div.bidding-card-a2').animate({
                                    scrollLeft: "-=300px"
                                }, "slow");
                            } else {
                                $('div.bidding-card-a').animate({
                                    scrollLeft: "-=300px"
                                }, "slow");
                            }

                        });

                    </script>


                </div>

            </div>

            <!-- orang kotak lawyer -->
            <div class="card mt-3 border-0 ">
                <div class="card-body">
                    <div class="mt-2 ">

                        <div class="row justify-content-center align-items-center">


                            <div class="col-1 arrow-desktop text-center">
                                <button id="left-orang1" class="btn rounded-5 text-white bg-secondary"
                                    style="background-color: #61481C">
                                    <i class="fa-solid fa-arrow-left"></i>
                                </button>
                            </div>
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col mobile-scroll" id='orang-kotak'
                                        style="white-space:nowrap;flex-wrap:nowarp;display:flex">

                                        <?php
                                            $name = [
                                                "Budi K.",
                                                "Rudi H.",

                                                "Ustman A.",
                                                "Joko L.",

                                                "James Tate",
                                                "Robert K.",
                                                "Hadi Ismail", 'Abdullah', 'Nugraha D.', 'Ade Syarief', "Adhi Utomo", 'Leman wan', 'Noto Adi', 'Agus Susan'
                                            ];
                                            ?>
                                        <button
                                            class="container-gambar mb-0 text-center p-1 me-1 text-decoration-none border-0 bg-white me-2">
                                            <img src="data:image/png;base64,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"
                                                alt="" srcset="" class="rounded-circle img-thumbnail "
                                                style="width:70px;height:70px;object-fit:cover;background:#61481C">
                                            <div style="width: 70px">
                                                Lawyer
                                            </div>
                                        </button>
                                        @for($i=13;$i> 0;$i--)
                                        <form action="{{url('')}}/detail-main-petugas" method="get"
                                            id="form-Lawyer-{{$i}}">
                                            <input type="hidden" name="name" value="{{$name[$i]}}">
                                            <input type="hidden" name="img"
                                                value="https://randomuser.me/api/portraits/men/{{$i}}.jpg">
                                            <input type="hidden" name="jenis_petugas" value="Lawyer">
                                        </form>
                                        <button
                                            class="mb-0 container-gambar text-center p-1 me-1 text-decoration-none border-0 bg-white"
                                            onclick="return  $('form#form-Lawyer-<?= $i ?>').submit()"
                                            style='display: inline-block;flex: 0 0 auto'>
                                            <img src="https://randomuser.me/api/portraits/men/{{$i}}.jpg" alt=""
                                                srcset="" class="rounded-circle img-thumbnail "
                                                style="width:70px !important;height:70px;object-fit:cover;"> <br>
                                            {{$name[$i]}}
                                        </button>
                                        @endfor

                                        <a href="{{url('')}}/jasa-pengacara"
                                            class="container-gambar mb-0 text-center p-1 me-1 text-decoration-none border-0 bg-white me-2">
                                            <img src="data:image/png;base64,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"
                                                alt="" srcset="" class="rounded-circle img-thumbnail "
                                                style="width:70px;height:70px;object-fit:cover;background-color:#007bff">
                                            <br>
                                            Lihat Semua
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-1 arrow-desktop text-center">
                                <button id="right-orang1" class="btn rounded-5 text-white bg-secondary"
                                    style="background-color: #61481C">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </div>

                            <script>
                                $('#right-orang1').click(function () {
                                    event.preventDefault();
                                    $('#orang-kotak').animate({
                                        scrollLeft: "+=300px"
                                    }, "slow");
                                });

                                $('#left-orang1').click(function () {
                                    event.preventDefault();
                                    $('#orang-kotak').animate({
                                        scrollLeft: "-=300px"
                                    }, "slow");
                                });

                            </script>
                        </div>


                    </div>
                </div>
            </div>

            <!-- Bidding Tanah -->
            <div class="card mt-3 border-0 shadow-sm ">

                <div class="card-body bg-card-dark-mode">

                    <div class="row align-items-center justify-content-center">


                        <div class="col-12 desktop-arrow text-center">
                            <div class="row mobile-scroll mt-2 align-items-center bidding-card-a"
                                style="flex-wrap: nowrap">

                                <div class="col-12 custom ">
                                    <div class="card mx-auto">
                                        <div class="ribbon-pop">
                                            <i class="fa-solid fa-star"></i>&nbsp;HOT
                                        </div>
                                        <div class="share-icon">
                                            <button class="btn btn-sm text-white rounded-5"
                                                style="background: rgba(0, 0, 0, 0.5)">
                                                <i class="fa-solid fa-share-from-square"></i>
                                            </button>
                                        </div>
                                        <div id="ll4" class="carousel slide" data-bs-interval="false">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#ll4" data-bs-slide-to="0"
                                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#ll4" data-bs-slide-to="1"
                                                    aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#ll4" data-bs-slide-to="2"
                                                    aria-label="Slide 3"></button>
                                                <button type="button" data-bs-target="#ll4" data-bs-slide-to="3"
                                                    aria-label="Slide 4"></button>
                                            </div>

                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('')}}images/lahan1.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan1.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan2.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan2.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan3.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan3.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev opacity-90 text-dark" type="button"
                                                data-bs-target="#ll4" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next opacity-90 text-dark" type="button"
                                                data-bs-target="#ll4" data-bs-slide="next">
                                                <span class="carousel-control-next-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <h5 class="mb-0 text-center">Kode Bidang BL-004 <img
                                                            src="https://sengketatanah.id/uploads/biru_centang.png"
                                                            alt="" class="mb-1" style="height:20px"></h5>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="card-body pt-0">
                                            <table class="mt-2 mb-2">
                                                <tr>
                                                    <td>
                                                        <b>Nilai Pinjaman :</b>
                                                    </td>

                                                    <td rowspan="2">
                                                        <div class="d-flex align-items-center">

                                                            <a id="fav-c1 my-auto" style="margin-right: 10px">
                                                                <h5 class="mb-0 text-fav-disable" id="fav-ch-c1">
                                                                    <i class="fas fa-star"></i>
                                                                </h5>
                                                            </a>
                                                            <button
                                                                class="btn float-end btn-brown text-white mb-0 my-auto w-100"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID</button>
                                                        </div>


                                                        <script>
                                                            $("#fav-c1").click(function () {
                                                                $("#fav-ch-c1").toggleClass('fav-icon');
                                                            });

                                                        </script>


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">
                                                        <h5 class="mb-0">
                                                            <b class="text-primary">
                                                                Rp.450.000.000
                                                            </b>
                                                        </h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="fw-bold">
                                                            Fee : 30%
                                                        </h5>
                                                    </td>
                                                </tr>
                                            </table>
                                            <hr style="margin-top:-4px">

                                            <table>
                                                <tbody>
                                                    </tr>

                                                    <td>Lokasi</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;Pancawati, Bogor</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Luas</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;1 Ha</td>
                                                    </tr>
                                                    <tr>

                                                        <td>Objek Tanah</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Tanah Darat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nilai ZNT BPN</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;750.000/meter</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penawaran</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Open Bidding</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Jumlah Bid</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;3</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>


                                            <div class="row g-0">
                                                <div class="col text-start">

                                                    <a href="#" class="  mx-auto rounded-5" data-bs-toggle="modal"
                                                        data-bs-target="#modal-lihat-lahan"
                                                        style="text-decoration:none">
                                                        <i class="fa-solid fa-eye"></i> Lihat Detail
                                                    </a>


                                                    <div class="modal fade my-auto text-center" id="berkasC"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header p-0">
                                                                    <h1
                                                                        class="modal-title mx-auto text-danger display-1">
                                                                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                            style="width: 100px" alt="">
                                                                    </h1>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda harus memiliki akun peserta lelang sebelum
                                                                    melihat
                                                                    detail.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary me-auto"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <a type="button" class="btn btn-success"
                                                                        href="https://server.sengketatanah.id/login">Login</a>
                                                                    <a type="button" class="btn btn-danger"
                                                                        href="https://server.sengketatanah.id/login">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <form action="{{url('')}}/bid-sengketa/podcast" class="form-sengketa1"
                                                method="get">
                                                <input type="hidden" name="owner" value=" Bahru">
                                                <input type="hidden" name="objek" value=" Sengketa Pertanahan">
                                                <input type="hidden" name="luas" value=" 1 Ha">
                                                <input type="hidden" name="lokasi" value=" Pancawati, Bogor">
                                                <input type="hidden" name="komentar" value="">
                                                <input type="hidden" name="link_yt"
                                                    value="https://www.youtube.com/embed/-RkCcavzXq8">
                                                <input type="hidden" name="form" value="sponsor">
                                            </form>


                                            <hr>
                                            <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                <div class="col-4">

                                                    <div class="d-grid gap-2 ">

                                                        <!-- <button type="button"
                                                    class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                    data-bs-toggle="modal" data-bs-target="#exampleC">
                                                    BID
                                                </button> -->


                                                        <div class="modal fade my-auto" id="exampleC" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                                class="mb-2" style="width: 100px"
                                                                                alt="">
                                                                        </h1>
                                                                    </div>
                                                                    <div class="modal-body" style="text-align: justify">

                                                                        Anda harus memiliki akun <b>LENDER</b> sebelum
                                                                        melakukan
                                                                        Bid (Bid adalah proses penawaran anda dengan
                                                                        owner).
                                                                        Jika anda belum menemukan kesepakatan anda bisa
                                                                        close
                                                                        bidding kapan saja.
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary me-auto"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a type="button" class="btn btn-success"
                                                                            href="https://server.sengketatanah.id/login">Login</a>
                                                                        <a type="button" class="btn btn-danger"
                                                                            href="https://server.sengketatanah.id/login">Register</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>

                                <div class="col-12 custom">
                                    <div class="card mb-2 mx-auto">
                                        <div class="ribbon-pop">
                                            <i class="fa-solid fa-star"></i>&nbsp;HOT
                                        </div>
                                        <div class="share-icon">
                                            <button class="btn btn-sm text-white rounded-5"
                                                style="background: rgba(0, 0, 0, 0.5)">
                                                <i class="fa-solid fa-share-from-square"></i>
                                            </button>
                                        </div>
                                        <div id="ll2" class="carousel slide" data-bs-interval="false">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#ll2" data-bs-slide-to="0"
                                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#ll2" data-bs-slide-to="1"
                                                    aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#ll2" data-bs-slide-to="2"
                                                    aria-label="Slide 3"></button>
                                                <button type="button" data-bs-target="#ll2" data-bs-slide-to="3"
                                                    aria-label="Slide 4"></button>
                                            </div>

                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('')}}images/lahan2.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan2.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan1.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan1.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan3.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan3.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev opacity-90 text-dark" type="button"
                                                data-bs-target="#ll2" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next opacity-90 text-dark" type="button"
                                                data-bs-target="#ll2" data-bs-slide="next">
                                                <span class="carousel-control-next-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <h5 class="mb-0 text-center">Kode Bidang BL-001 <img
                                                            src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                            class="mb-1" style="height:20px"></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body pt-0">
                                            <table class="mt-2 mb-2">
                                                <tr>
                                                    <td>
                                                        <b>Nilai Pinjaman :</b>
                                                    </td>

                                                    <td rowspan="2">
                                                        <div class="d-flex align-items-center">

                                                            <a id="fav-c1 my-auto" style="margin-right: 10px">
                                                                <h5 class="mb-0 text-fav-disable" id="fav-ch-c1">
                                                                    <i class="fas fa-star"></i>
                                                                </h5>
                                                            </a>
                                                            <button
                                                                class="btn float-end btn-brown text-white mb-0 my-auto w-100"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID</button>
                                                        </div>


                                                        <script>
                                                            $("#fav-c1").click(function () {
                                                                $("#fav-ch-c1").toggleClass('fav-icon');
                                                            });

                                                        </script>


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">
                                                        <h5 class="mb-0">
                                                            <b class="text-primary">
                                                                Rp.500.000.000
                                                            </b>
                                                        </h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="fw-bold">
                                                            Fee : 30%
                                                        </h5>
                                                    </td>
                                                </tr>
                                            </table>
                                            <hr style="margin-top:-4px">


                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Lokasi</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Pancawati, Bogor</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Luas</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;5000 M</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Objek Tanah</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Tanah Darat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nilai ZNT BPN</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;750.000/meter</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penawaran</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Open Bidding</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah Bid</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;4</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>



                                            <div class="row g-0">
                                                <div class="col text-start">

                                                    <a href="#" class="  mx-auto rounded-5" data-bs-toggle="modal"
                                                        data-bs-target="#modal-lihat-lahan"
                                                        style="text-decoration:none">
                                                        <i class="fa-solid fa-eye"></i> Lihat Detail
                                                    </a>


                                                    <div class="modal fade my-auto text-center" id="berkasC"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header p-0">
                                                                    <h1
                                                                        class="modal-title mx-auto text-danger display-1">
                                                                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                            style="width: 100px" alt="">
                                                                    </h1>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda harus memiliki akun peserta lelang sebelum
                                                                    melihat detail.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary me-auto"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <a type="button" class="btn btn-success"
                                                                        href="https://server.sengketatanah.id/login">Login</a>
                                                                    <a type="button" class="btn btn-danger"
                                                                        href="https://server.sengketatanah.id/login">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <form action="{{url('')}}/bid-sengketa/podcast" class="form-sengketa2"
                                                method="get">
                                                <input type="hidden" name="owner" value=" Fatah">
                                                <input type="hidden" name="objek" value=" Konflik Pertanahan">
                                                <input type="hidden" name="luas" value=" 5000 M">
                                                <input type="hidden" name="lokasi" value=" Pancawati, Bogor">
                                                <input type="hidden" name="komentar" value="">
                                                <input type="hidden" name="link_yt"
                                                    value="https://www.youtube.com/embed/byby3HJ3OCI">
                                                <input type="hidden" name="form" value="sponsor">
                                            </form>


                                            <hr>
                                            <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                <div class="col-4">

                                                    <div class="d-grid gap-2 ">

                                                        <!-- <button type="button"
                                                    class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                    data-bs-toggle="modal" data-bs-target="#exampleC">
                                                    BID
                                                </button> -->


                                                        <div class="modal fade my-auto" id="exampleC" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                                class="mb-2" style="width: 100px"
                                                                                alt="">
                                                                        </h1>
                                                                    </div>
                                                                    <div class="modal-body" style="text-align: justify">

                                                                        Anda harus memiliki akun <b>LENDER</b> sebelum
                                                                        melakukan
                                                                        Bid (Bid adalah proses penawaran anda dengan
                                                                        owner).
                                                                        Jika anda belum menemukan kesepakatan anda bisa
                                                                        close
                                                                        bidding kapan saja.</div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary me-auto"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a type="button" class="btn btn-success"
                                                                            href="https://server.sengketatanah.id/login">Login</a>
                                                                        <a type="button" class="btn btn-danger"
                                                                            href="https://server.sengketatanah.id/login">Register</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 custom">
                                    <div class="card mb-2 mx-auto">
                                        <div class="ribbon-pop">
                                            <i class="fa-solid fa-star"></i>&nbsp;HOT
                                        </div>
                                        <div class="share-icon">
                                            <button class="btn btn-sm text-white rounded-5"
                                                style="background: rgba(0, 0, 0, 0.5)">
                                                <i class="fa-solid fa-share-from-square"></i>
                                            </button>
                                        </div>
                                        <div id="ll3" class="carousel slide" data-bs-interval="false">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#ll3" data-bs-slide-to="0"
                                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#ll3" data-bs-slide-to="1"
                                                    aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#ll3" data-bs-slide-to="2"
                                                    aria-label="Slide 3"></button>
                                                <button type="button" data-bs-target="#ll3" data-bs-slide-to="3"
                                                    aria-label="Slide 4"></button>
                                            </div>

                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('')}}images/lahan3.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan3.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan1.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan1.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan2.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan2.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev opacity-90 text-dark" type="button"
                                                data-bs-target="#ll3" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next opacity-90 text-dark" type="button"
                                                data-bs-target="#ll3" data-bs-slide="next">
                                                <span class="carousel-control-next-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <h5 class="mb-0 text-center">Kode Bidang BL-002 <img
                                                            src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                            class="mb-1" style="height:20px"></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body pt-0">
                                            <table class="mt-2 mb-2">
                                                <tr>
                                                    <td>
                                                        <b>Nilai Pinjaman :</b>
                                                    </td>

                                                    <td rowspan="2">
                                                        <div class="d-flex align-items-center">

                                                            <a id="fav-c1 my-auto" style="margin-right: 10px">
                                                                <h5 class="mb-0 text-fav-disable" id="fav-ch-c1">
                                                                    <i class="fas fa-star"></i>
                                                                </h5>
                                                            </a>
                                                            <button
                                                                class="btn float-end btn-brown text-white mb-0 my-auto w-100"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID</button>
                                                        </div>


                                                        <script>
                                                            $("#fav-c1").click(function () {
                                                                $("#fav-ch-c1").toggleClass('fav-icon');
                                                            });

                                                        </script>


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">
                                                        <h5 class="mb-0">
                                                            <b class="text-primary">
                                                                Rp.100.000.000
                                                            </b>
                                                        </h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="fw-bold">
                                                            Fee : 30%
                                                        </h5>
                                                    </td>
                                                </tr>
                                            </table>
                                            <hr style="margin-top:-4px">

                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Lokasi</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Medan, Sumatra Utara</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Luas</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;3.2 Ha</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Objek Tanah</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Tanah Darat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nilai ZNT BPN</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;750.000/meter</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penawaran</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Open Bidding</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah Bid</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;6</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>



                                            <div class="row g-0">
                                                <div class="col text-start">

                                                    <a href="#" class="  mx-auto rounded-5" data-bs-toggle="modal"
                                                        data-bs-target="#modal-lihat-lahan"
                                                        style="text-decoration:none">
                                                        <i class="fa-solid fa-eye"></i> Lihat Detail
                                                    </a>


                                                    <div class="modal fade my-auto text-center" id="berkasC"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header p-0">
                                                                    <h1
                                                                        class="modal-title mx-auto text-danger display-1">
                                                                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                            style="width: 100px" alt="">
                                                                    </h1>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda harus memiliki akun peserta lelang sebelum
                                                                    melihat
                                                                    detail.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary me-auto"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <a type="button" class="btn btn-success"
                                                                        href="https://server.sengketatanah.id/login">Login</a>
                                                                    <a type="button" class="btn btn-danger"
                                                                        href="https://server.sengketatanah.id/login">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <form action="{{url('')}}/bid-sengketa/podcast" class="form-sengketa3"
                                                method="get">
                                                <input type="hidden" name="owner" value=" Ophelia Suartini">
                                                <input type="hidden" name="objek" value=" Perkara Pertanahan">
                                                <input type="hidden" name="luas" value=" 3.2 Ha">
                                                <input type="hidden" name="lokasi" value=" Medan, Sumatra Utara">
                                                <input type="hidden" name="komentar" value="">
                                                <input type="hidden" name="link_yt"
                                                    value="https://www.youtube.com/embed/1I4iEKK1qbQ">
                                                <input type="hidden" name="form" value="sponsor">
                                            </form>


                                            <hr>
                                            <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                <div class="col-4">

                                                    <div class="d-grid gap-2 ">
                                                        <!-- <button type="button"
                                                                class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID
                                                            </button> -->


                                                        <div class="modal fade my-auto" id="exampleC" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                                class="mb-2" style="width: 100px"
                                                                                alt="">
                                                                        </h1>
                                                                    </div>
                                                                    <div class="modal-body" style="text-align: justify">

                                                                        Anda harus memiliki akun <b>LENDER</b> sebelum
                                                                        melakukan
                                                                        Bid (Bid adalah proses penawaran anda dengan
                                                                        owner).
                                                                        Jika anda belum menemukan kesepakatan anda bisa
                                                                        close
                                                                        bidding kapan saja.</div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary me-auto"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a type="button" class="btn btn-success"
                                                                            href="https://server.sengketatanah.id/login">Login</a>
                                                                        <a type="button" class="btn btn-danger"
                                                                            href="https://server.sengketatanah.id/login">Register</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 custom">
                                    <div class="card mb-2 mx-auto">
                                        <div class="ribbon-pop">
                                            <i class="fa-solid fa-star"></i>&nbsp;HOT
                                        </div>
                                        <div class="share-icon">
                                            <button class="btn btn-sm text-white rounded-5"
                                                style="background: rgba(0, 0, 0, 0.5)">
                                                <i class="fa-solid fa-share-from-square"></i>
                                            </button>
                                        </div>
                                        <div id="ll44" class="carousel slide" data-bs-interval="false">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#ll44" data-bs-slide-to="0"
                                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#ll44" data-bs-slide-to="1"
                                                    aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#ll44" data-bs-slide-to="2"
                                                    aria-label="Slide 3"></button>
                                                <button type="button" data-bs-target="#ll44" data-bs-slide-to="3"
                                                    aria-label="Slide 4"></button>
                                            </div>

                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan3.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan3.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan1.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan1.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev opacity-90 text-dark" type="button"
                                                data-bs-target="#ll44" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next opacity-90 text-dark" type="button"
                                                data-bs-target="#ll44" data-bs-slide="next">
                                                <span class="carousel-control-next-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <h5 class="mb-0 text-center">Kode Bidang BL-003 <img
                                                            src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                            class="mb-1" style="height:20px"></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body pt-0">
                                            <table class="mt-2 mb-2">
                                                <tr>
                                                    <td>
                                                        <b>Nilai Pinjaman :</b>
                                                    </td>

                                                    <td rowspan="2">
                                                        <div class="d-flex align-items-center">

                                                            <a id="fav-c1 my-auto" style="margin-right: 10px">
                                                                <h5 class="mb-0 text-fav-disable" id="fav-ch-c1">
                                                                    <i class="fas fa-star"></i>
                                                                </h5>
                                                            </a>
                                                            <button
                                                                class="btn float-end btn-brown text-white mb-0 my-auto w-100"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID</button>
                                                        </div>


                                                        <script>
                                                            $("#fav-c1").click(function () {
                                                                $("#fav-ch-c1").toggleClass('fav-icon');
                                                            });

                                                        </script>


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">
                                                        <h5 class="mb-0">
                                                            <b class="text-primary">
                                                                Rp.200.000.000
                                                            </b>
                                                        </h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="fw-bold">
                                                            Fee : 30%
                                                        </h5>
                                                    </td>
                                                </tr>
                                            </table>
                                            <hr style="margin-top:-4px">

                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Lokasi</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Medan, Sumatra Utara</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Luas</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;3.2 Ha</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Objek Tanah</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Tanah Darat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nilai ZNT BPN</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;750.000/meter</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penawaran</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Open Bidding</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah Bid</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;6</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>


                                            <div class="row g-0">
                                                <div class="col text-start">

                                                    <a href="#" class="  mx-auto rounded-5" data-bs-toggle="modal"
                                                        data-bs-target="#modal-lihat-lahan"
                                                        style="text-decoration:none">
                                                        <i class="fa-solid fa-eye"></i> Lihat Detail
                                                    </a>


                                                    <div class="modal fade my-auto text-center" id="berkasC"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header p-0">
                                                                    <h1
                                                                        class="modal-title mx-auto text-danger display-1">
                                                                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                            style="width: 100px" alt="">
                                                                    </h1>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda harus memiliki akun peserta lelang sebelum
                                                                    melihat
                                                                    detail.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary me-auto"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <a type="button" class="btn btn-success"
                                                                        href="https://server.sengketatanah.id/login">Login</a>
                                                                    <a type="button" class="btn btn-danger"
                                                                        href="https://server.sengketatanah.id/login">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <form action="{{url('')}}/bid-sengketa/podcast" class="form-sengketa3"
                                                method="get">
                                                <input type="hidden" name="owner" value=" Ophelia Suartini">
                                                <input type="hidden" name="objek" value=" Perkara Pertanahan">
                                                <input type="hidden" name="luas" value=" 3.2 Ha">
                                                <input type="hidden" name="lokasi" value=" Medan, Sumatra Utara">
                                                <input type="hidden" name="komentar" value="">
                                                <input type="hidden" name="link_yt"
                                                    value="https://www.youtube.com/embed/1I4iEKK1qbQ">
                                                <input type="hidden" name="form" value="sponsor">
                                            </form>


                                            <hr>
                                            <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                <div class="col-4">

                                                    <div class="d-grid gap-2 ">
                                                        <!-- <button type="button"
                                                    class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                    data-bs-toggle="modal" data-bs-target="#exampleC">
                                                    BID
                                                </button> -->


                                                        <div class="modal fade my-auto" id="exampleC" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                                class="mb-2" style="width: 100px"
                                                                                alt="">
                                                                        </h1>
                                                                    </div>
                                                                    <div class="modal-body" style="text-align: justify">

                                                                        Anda harus memiliki akun <b>LENDER</b> sebelum
                                                                        melakukan
                                                                        Bid (Bid adalah proses penawaran anda dengan
                                                                        owner).
                                                                        Jika anda belum menemukan kesepakatan anda bisa
                                                                        close
                                                                        bidding kapan saja.</div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary me-auto"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a type="button" class="btn btn-success"
                                                                            href="https://server.sengketatanah.id/login">Login</a>
                                                                        <a type="button" class="btn btn-danger"
                                                                            href="https://server.sengketatanah.id/login">Register</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="row align-items-center justify-content-center">

                        <div class="col-12 desktop-arrow text-center">
                            <div class="row mobile-scroll mt-2 align-items-center bidding-card-a2"
                                style="flex-wrap: nowrap">

                                <div class="col-12 custom ">
                                    <div class="card mx-auto">
                                        <div class="ribbon-pop">
                                            <i class="fa-solid fa-star"></i>&nbsp;HOT
                                        </div>
                                        <div class="share-icon">
                                            <button class="btn btn-sm text-white rounded-5"
                                                style="background: rgba(0, 0, 0, 0.5)">
                                                <i class="fa-solid fa-share-from-square"></i>
                                            </button>
                                        </div>
                                        <div id="ll4a" class="carousel slide" data-bs-interval="false">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#ll4a" data-bs-slide-to="0"
                                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#ll4a" data-bs-slide-to="1"
                                                    aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#ll4a" data-bs-slide-to="2"
                                                    aria-label="Slide 3"></button>
                                                <button type="button" data-bs-target="#ll4a" data-bs-slide-to="3"
                                                    aria-label="Slide 4"></button>
                                            </div>

                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('')}}images/lahan1.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan1.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan2.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan2.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan3.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan3.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev opacity-90 text-dark" type="button"
                                                data-bs-target="#ll4a" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next opacity-90 text-dark" type="button"
                                                data-bs-target="#ll4a" data-bs-slide="next">
                                                <span class="carousel-control-next-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <h5 class="mb-0 text-center">Kode Bidang BL-004 <img
                                                            src="https://sengketatanah.id/uploads/biru_centang.png"
                                                            alt="" class="mb-1" style="height:20px"></h5>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="card-body pt-0">
                                            <table class="mt-2 mb-2">
                                                <tr>
                                                    <td>
                                                        <b>Nilai Pinjaman :</b>
                                                    </td>

                                                    <td rowspan="2">
                                                        <div class="d-flex align-items-center">

                                                            <a id="fav-c1 my-auto" style="margin-right: 10px">
                                                                <h5 class="mb-0 text-fav-disable" id="fav-ch-c1">
                                                                    <i class="fas fa-star"></i>
                                                                </h5>
                                                            </a>
                                                            <button
                                                                class="btn float-end btn-brown text-white mb-0 my-auto w-100"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID</button>
                                                        </div>


                                                        <script>
                                                            $("#fav-c1").click(function () {
                                                                $("#fav-ch-c1").toggleClass('fav-icon');
                                                            });

                                                        </script>


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">
                                                        <h5 class="mb-0">
                                                            <b class="text-primary">
                                                                Rp.450.000.000
                                                            </b>
                                                        </h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="fw-bold">
                                                            Fee : 30%
                                                        </h5>
                                                    </td>
                                                </tr>
                                            </table>
                                            <hr style="margin-top:-4px">

                                            <table>
                                                <tbody>
                                                    </tr>

                                                    <td>Lokasi</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;Pancawati, Bogor</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Luas</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;1 Ha</td>
                                                    </tr>
                                                    <tr>

                                                        <td>Objek Tanah</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Tanah Darat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nilai ZNT BPN</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;750.000/meter</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penawaran</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Open Bidding</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Jumlah Bid</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;3</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>


                                            <div class="row g-0">
                                                <div class="col text-start">

                                                    <a href="#" class="  mx-auto rounded-5" data-bs-toggle="modal"
                                                        data-bs-target="#modal-lihat-lahan"
                                                        style="text-decoration:none">
                                                        <i class="fa-solid fa-eye"></i> Lihat Detail
                                                    </a>


                                                    <div class="modal fade my-auto text-center" id="berkasC"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header p-0">
                                                                    <h1
                                                                        class="modal-title mx-auto text-danger display-1">
                                                                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                            style="width: 100px" alt="">
                                                                    </h1>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda harus memiliki akun peserta lelang sebelum
                                                                    melihat
                                                                    detail.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary me-auto"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <a type="button" class="btn btn-success"
                                                                        href="https://server.sengketatanah.id/login">Login</a>
                                                                    <a type="button" class="btn btn-danger"
                                                                        href="https://server.sengketatanah.id/login">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <form action="{{url('')}}/bid-sengketa/podcast" class="form-sengketa1"
                                                method="get">
                                                <input type="hidden" name="owner" value=" Bahru">
                                                <input type="hidden" name="objek" value=" Sengketa Pertanahan">
                                                <input type="hidden" name="luas" value=" 1 Ha">
                                                <input type="hidden" name="lokasi" value=" Pancawati, Bogor">
                                                <input type="hidden" name="komentar" value="">
                                                <input type="hidden" name="link_yt"
                                                    value="https://www.youtube.com/embed/-RkCcavzXq8">
                                                <input type="hidden" name="form" value="sponsor">
                                            </form>


                                            <hr>
                                            <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                <div class="col-4">

                                                    <div class="d-grid gap-2 ">

                                                        <!-- <button type="button"
                                                    class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                    data-bs-toggle="modal" data-bs-target="#exampleC">
                                                    BID
                                                </button> -->


                                                        <div class="modal fade my-auto" id="exampleC" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                                class="mb-2" style="width: 100px"
                                                                                alt="">
                                                                        </h1>
                                                                    </div>
                                                                    <div class="modal-body" style="text-align: justify">

                                                                        Anda harus memiliki akun <b>LENDER</b> sebelum
                                                                        melakukan
                                                                        Bid (Bid adalah proses penawaran anda dengan
                                                                        owner).
                                                                        Jika anda belum menemukan kesepakatan anda bisa
                                                                        close
                                                                        bidding kapan saja.</div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary me-auto"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a type="button" class="btn btn-success"
                                                                            href="https://server.sengketatanah.id/login">Login</a>
                                                                        <a type="button" class="btn btn-danger"
                                                                            href="https://server.sengketatanah.id/login">Register</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>

                                <div class="col-12 custom">
                                    <div class="card mb-2 mx-auto">
                                        <div class="ribbon-pop">
                                            <i class="fa-solid fa-star"></i>&nbsp;HOT
                                        </div>
                                        <div class="share-icon">
                                            <button class="btn btn-sm text-white rounded-5"
                                                style="background: rgba(0, 0, 0, 0.5)">
                                                <i class="fa-solid fa-share-from-square"></i>
                                            </button>
                                        </div>
                                        <div id="ll2a" class="carousel slide" data-bs-interval="false">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#ll2a" data-bs-slide-to="0"
                                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#ll2a" data-bs-slide-to="1"
                                                    aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#ll2a" data-bs-slide-to="2"
                                                    aria-label="Slide 3"></button>
                                                <button type="button" data-bs-target="#ll2a" data-bs-slide-to="3"
                                                    aria-label="Slide 4"></button>
                                            </div>

                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('')}}images/lahan2.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan2.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan1.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan1.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan3.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan3.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev opacity-90 text-dark" type="button"
                                                data-bs-target="#ll2a" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next opacity-90 text-dark" type="button"
                                                data-bs-target="#ll2a" data-bs-slide="next">
                                                <span class="carousel-control-next-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <h5 class="mb-0 text-center">Kode Bidang BL-001 <img
                                                            src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                            class="mb-1" style="height:20px"></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body pt-0">
                                            <table class="mt-2 mb-2">
                                                <tr>
                                                    <td>
                                                        <b>Nilai Pinjaman :</b>
                                                    </td>

                                                    <td rowspan="2">
                                                        <div class="d-flex align-items-center">

                                                            <a id="fav-c1 my-auto" style="margin-right: 10px">
                                                                <h5 class="mb-0 text-fav-disable" id="fav-ch-c1">
                                                                    <i class="fas fa-star"></i>
                                                                </h5>
                                                            </a>
                                                            <button
                                                                class="btn float-end btn-brown text-white mb-0 my-auto w-100"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID</button>
                                                        </div>


                                                        <script>
                                                            $("#fav-c1").click(function () {
                                                                $("#fav-ch-c1").toggleClass('fav-icon');
                                                            });

                                                        </script>


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">
                                                        <h5 class="mb-0">
                                                            <b class="text-primary">
                                                                Rp.500.000.000
                                                            </b>
                                                        </h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="fw-bold">
                                                            Fee : 30%
                                                        </h5>
                                                    </td>
                                                </tr>
                                            </table>
                                            <hr style="margin-top:-4px">


                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Lokasi</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Pancawati, Bogor</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Luas</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;5000 M</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Objek Tanah</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Tanah Darat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nilai ZNT BPN</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;750.000/meter</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penawaran</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Open Bidding</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah Bid</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;4</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>



                                            <div class="row g-0">
                                                <div class="col text-start">

                                                    <a href="#" class="  mx-auto rounded-5" data-bs-toggle="modal"
                                                        data-bs-target="#modal-lihat-lahan"
                                                        style="text-decoration:none">
                                                        <i class="fa-solid fa-eye"></i> Lihat Detail
                                                    </a>


                                                    <div class="modal fade my-auto text-center" id="berkasC"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header p-0">
                                                                    <h1
                                                                        class="modal-title mx-auto text-danger display-1">
                                                                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                            style="width: 100px" alt="">
                                                                    </h1>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda harus memiliki akun peserta lelang sebelum
                                                                    melihat detail.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary me-auto"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <a type="button" class="btn btn-success"
                                                                        href="https://server.sengketatanah.id/login">Login</a>
                                                                    <a type="button" class="btn btn-danger"
                                                                        href="https://server.sengketatanah.id/login">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <form action="{{url('')}}/bid-sengketa/podcast" class="form-sengketa2"
                                                method="get">
                                                <input type="hidden" name="owner" value=" Fatah">
                                                <input type="hidden" name="objek" value=" Konflik Pertanahan">
                                                <input type="hidden" name="luas" value=" 5000 M">
                                                <input type="hidden" name="lokasi" value=" Pancawati, Bogor">
                                                <input type="hidden" name="komentar" value="">
                                                <input type="hidden" name="link_yt"
                                                    value="https://www.youtube.com/embed/byby3HJ3OCI">
                                                <input type="hidden" name="form" value="sponsor">
                                            </form>


                                            <hr>
                                            <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                <div class="col-4">

                                                    <div class="d-grid gap-2 ">

                                                        <!-- <button type="button"
                                                    class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                    data-bs-toggle="modal" data-bs-target="#exampleC">
                                                    BID
                                                </button> -->


                                                        <div class="modal fade my-auto" id="exampleC" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                                class="mb-2" style="width: 100px"
                                                                                alt="">
                                                                        </h1>
                                                                    </div>
                                                                    <div class="modal-body" style="text-align: justify">

                                                                        Anda harus memiliki akun <b>LENDER</b> sebelum
                                                                        melakukan
                                                                        Bid (Bid adalah proses penawaran anda dengan
                                                                        owner).
                                                                        Jika anda belum menemukan kesepakatan anda bisa
                                                                        close
                                                                        bidding kapan saja.</div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary me-auto"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a type="button" class="btn btn-success"
                                                                            href="https://server.sengketatanah.id/login">Login</a>
                                                                        <a type="button" class="btn btn-danger"
                                                                            href="https://server.sengketatanah.id/login">Register</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 custom">
                                    <div class="card mb-2 mx-auto">
                                        <div class="ribbon-pop">
                                            <i class="fa-solid fa-star"></i>&nbsp;HOT
                                        </div>
                                        <div class="share-icon">
                                            <button class="btn btn-sm text-white rounded-5"
                                                style="background: rgba(0, 0, 0, 0.5)">
                                                <i class="fa-solid fa-share-from-square"></i>
                                            </button>
                                        </div>
                                        <div id="ll3a" class="carousel slide" data-bs-interval="false">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#ll3a" data-bs-slide-to="0"
                                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#ll3a" data-bs-slide-to="1"
                                                    aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#ll3a" data-bs-slide-to="2"
                                                    aria-label="Slide 3"></button>
                                                <button type="button" data-bs-target="#ll3a" data-bs-slide-to="3"
                                                    aria-label="Slide 4"></button>
                                            </div>

                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('')}}images/lahan3.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan3.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan1.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan1.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan2.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan2.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev opacity-90 text-dark" type="button"
                                                data-bs-target="#ll3a" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next opacity-90 text-dark" type="button"
                                                data-bs-target="#ll3a" data-bs-slide="next">
                                                <span class="carousel-control-next-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <h5 class="mb-0 text-center">Kode Bidang BL-002 <img
                                                            src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                            class="mb-1" style="height:20px"></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body pt-0">
                                            <table class="mt-2 mb-2">
                                                <tr>
                                                    <td>
                                                        <b>Nilai Pinjaman :</b>
                                                    </td>

                                                    <td rowspan="2">
                                                        <div class="d-flex align-items-center">

                                                            <a id="fav-c1 my-auto" style="margin-right: 10px">
                                                                <h5 class="mb-0 text-fav-disable" id="fav-ch-c1">
                                                                    <i class="fas fa-star"></i>
                                                                </h5>
                                                            </a>
                                                            <button
                                                                class="btn float-end btn-brown text-white mb-0 my-auto w-100"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID</button>
                                                        </div>


                                                        <script>
                                                            $("#fav-c1").click(function () {
                                                                $("#fav-ch-c1").toggleClass('fav-icon');
                                                            });

                                                        </script>


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">
                                                        <h5 class="mb-0">
                                                            <b class="text-primary">
                                                                Rp.100.000.000
                                                            </b>
                                                        </h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="fw-bold">
                                                            Fee : 30%
                                                        </h5>
                                                    </td>
                                                </tr>
                                            </table>
                                            <hr style="margin-top:-4px">

                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Lokasi</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Medan, Sumatra Utara</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Luas</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;3.2 Ha</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Objek Tanah</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Tanah Darat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nilai ZNT BPN</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;750.000/meter</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penawaran</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Open Bidding</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah Bid</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;6</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>



                                            <div class="row g-0">
                                                <div class="col text-start">

                                                    <a href="#" class="  mx-auto rounded-5" data-bs-toggle="modal"
                                                        data-bs-target="#modal-lihat-lahan"
                                                        style="text-decoration:none">
                                                        <i class="fa-solid fa-eye"></i> Lihat Detail
                                                    </a>


                                                    <div class="modal fade my-auto text-center" id="berkasC"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header p-0">
                                                                    <h1
                                                                        class="modal-title mx-auto text-danger display-1">
                                                                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                            style="width: 100px" alt="">
                                                                    </h1>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda harus memiliki akun peserta lelang sebelum
                                                                    melihat
                                                                    detail.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary me-auto"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <a type="button" class="btn btn-success"
                                                                        href="https://server.sengketatanah.id/login">Login</a>
                                                                    <a type="button" class="btn btn-danger"
                                                                        href="https://server.sengketatanah.id/login">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <form action="{{url('')}}/bid-sengketa/podcast" class="form-sengketa3"
                                                method="get">
                                                <input type="hidden" name="owner" value=" Ophelia Suartini">
                                                <input type="hidden" name="objek" value=" Perkara Pertanahan">
                                                <input type="hidden" name="luas" value=" 3.2 Ha">
                                                <input type="hidden" name="lokasi" value=" Medan, Sumatra Utara">
                                                <input type="hidden" name="komentar" value="">
                                                <input type="hidden" name="link_yt"
                                                    value="https://www.youtube.com/embed/1I4iEKK1qbQ">
                                                <input type="hidden" name="form" value="sponsor">
                                            </form>


                                            <hr>
                                            <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                <div class="col-4">

                                                    <div class="d-grid gap-2 ">
                                                        <!-- <button type="button"
                                                                class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID
                                                            </button> -->


                                                        <div class="modal fade my-auto" id="exampleC" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                                class="mb-2" style="width: 100px"
                                                                                alt="">
                                                                        </h1>
                                                                    </div>
                                                                    <div class="modal-body" style="text-align: justify">

                                                                        Anda harus memiliki akun <b>LENDER</b> sebelum
                                                                        melakukan
                                                                        Bid (Bid adalah proses penawaran anda dengan
                                                                        owner).
                                                                        Jika anda belum menemukan kesepakatan anda bisa
                                                                        close
                                                                        bidding kapan saja.</div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary me-auto"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a type="button" class="btn btn-success"
                                                                            href="https://server.sengketatanah.id/login">Login</a>
                                                                        <a type="button" class="btn btn-danger"
                                                                            href="https://server.sengketatanah.id/login">Register</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 custom">
                                    <div class="card mb-2 mx-auto">
                                        <div class="ribbon-pop">
                                            <i class="fa-solid fa-star"></i>&nbsp;HOT
                                        </div>
                                        <div class="share-icon">
                                            <button class="btn btn-sm text-white rounded-5"
                                                style="background: rgba(0, 0, 0, 0.5)">
                                                <i class="fa-solid fa-share-from-square"></i>
                                            </button>
                                        </div>
                                        <div id="ll44a" class="carousel slide" data-bs-interval="false">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#ll44a" data-bs-slide-to="0"
                                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#ll44a" data-bs-slide-to="1"
                                                    aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#ll44a" data-bs-slide-to="2"
                                                    aria-label="Slide 3"></button>
                                                <button type="button" data-bs-target="#ll44a" data-bs-slide-to="3"
                                                    aria-label="Slide 4"></button>
                                            </div>

                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan3.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan3.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan1.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan1.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev opacity-90 text-dark" type="button"
                                                data-bs-target="#ll44a" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next opacity-90 text-dark" type="button"
                                                data-bs-target="#ll44a" data-bs-slide="next">
                                                <span class="carousel-control-next-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <h5 class="mb-0 text-center">Kode Bidang BL-003 <img
                                                            src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                            class="mb-1" style="height:20px"></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body pt-0">
                                            <table class="mt-2 mb-2">
                                                <tr>
                                                    <td>
                                                        <b>Nilai Pinjaman :</b>
                                                    </td>

                                                    <td rowspan="2">
                                                        <div class="d-flex align-items-center">

                                                            <a id="fav-c1 my-auto" style="margin-right: 10px">
                                                                <h5 class="mb-0 text-fav-disable" id="fav-ch-c1">
                                                                    <i class="fas fa-star"></i>
                                                                </h5>
                                                            </a>
                                                            <button
                                                                class="btn float-end btn-brown text-white mb-0 my-auto w-100"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID</button>
                                                        </div>


                                                        <script>
                                                            $("#fav-c1").click(function () {
                                                                $("#fav-ch-c1").toggleClass('fav-icon');
                                                            });

                                                        </script>


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">
                                                        <h5 class="mb-0">
                                                            <b class="text-primary">
                                                                Rp.200.000.000
                                                            </b>
                                                        </h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="fw-bold">
                                                            Fee : 30%
                                                        </h5>
                                                    </td>
                                                </tr>
                                            </table>
                                            <hr style="margin-top:-4px">

                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Lokasi</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Medan, Sumatra Utara</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Luas</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;3.2 Ha</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Objek Tanah</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Tanah Darat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nilai ZNT BPN</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;750.000/meter</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penawaran</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Open Bidding</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah Bid</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;6</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>


                                            <div class="row g-0">
                                                <div class="col text-start">

                                                    <a href="#" class="  mx-auto rounded-5" data-bs-toggle="modal"
                                                        data-bs-target="#modal-lihat-lahan"
                                                        style="text-decoration:none">
                                                        <i class="fa-solid fa-eye"></i> Lihat Detail
                                                    </a>


                                                    <div class="modal fade my-auto text-center" id="berkasC"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header p-0">
                                                                    <h1
                                                                        class="modal-title mx-auto text-danger display-1">
                                                                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                            style="width: 100px" alt="">
                                                                    </h1>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda harus memiliki akun peserta lelang sebelum
                                                                    melihat
                                                                    detail.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary me-auto"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <a type="button" class="btn btn-success"
                                                                        href="https://server.sengketatanah.id/login">Login</a>
                                                                    <a type="button" class="btn btn-danger"
                                                                        href="https://server.sengketatanah.id/login">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <form action="{{url('')}}/bid-sengketa/podcast" class="form-sengketa3"
                                                method="get">
                                                <input type="hidden" name="owner" value=" Ophelia Suartini">
                                                <input type="hidden" name="objek" value=" Perkara Pertanahan">
                                                <input type="hidden" name="luas" value=" 3.2 Ha">
                                                <input type="hidden" name="lokasi" value=" Medan, Sumatra Utara">
                                                <input type="hidden" name="komentar" value="">
                                                <input type="hidden" name="link_yt"
                                                    value="https://www.youtube.com/embed/1I4iEKK1qbQ">
                                                <input type="hidden" name="form" value="sponsor">
                                            </form>


                                            <hr>
                                            <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                <div class="col-4">

                                                    <div class="d-grid gap-2 ">
                                                        <!-- <button type="button"
                                                    class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                    data-bs-toggle="modal" data-bs-target="#exampleC">
                                                    BID
                                                </button> -->


                                                        <div class="modal fade my-auto" id="exampleC" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                                class="mb-2" style="width: 100px"
                                                                                alt="">
                                                                        </h1>
                                                                    </div>
                                                                    <div class="modal-body" style="text-align: justify">

                                                                        Anda harus memiliki akun <b>LENDER</b> sebelum
                                                                        melakukan
                                                                        Bid (Bid adalah proses penawaran anda dengan
                                                                        owner).
                                                                        Jika anda belum menemukan kesepakatan anda bisa
                                                                        close
                                                                        bidding kapan saja.</div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary me-auto"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a type="button" class="btn btn-success"
                                                                            href="https://server.sengketatanah.id/login">Login</a>
                                                                        <a type="button" class="btn btn-danger"
                                                                            href="https://server.sengketatanah.id/login">Register</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3 custom text-start">
                                    <button class="btn btn-sm">
                                        <div class="row p-4">
                                            <div class="col-md-12">
                                                <span class="fa-stack fa-2x">
                                                    <i class="fa fa-circle fa-stack-2x text-brown"></i>
                                                    <i class="fa-solid fa-arrow-right fa-stack-1x text-white"></i>
                                                </span>
                                            </div>
                                            <div class="col-md-12 mt-1 fw-bold">
                                                Lihat Semua
                                            </div>
                                        </div>
                                    </button>
                                </div>

                            </div>
                        </div>

                    </div>

                    <script>
                        $('#right-button-bid-lahan').click(function () {
                            event.preventDefault();


                            $('div.bidding-card-a').animate({
                                scrollLeft: "+=300px"
                            }, "slow");

                            let outerWidth = Math.floor($('div.bidding-card-a').outerWidth())
                            let scrollWidth = Math.floor($('div.bidding-card-a')[0].scrollWidth)
                            let scrollLeft = Math.floor($('div.bidding-card-a').scrollLeft())
                            if ((outerWidth - scrollWidth) + scrollLeft == 0) {
                                $('div.bidding-card-a2').animate({
                                    scrollLeft: "+=300px"
                                }, "slow")

                            }
                        });

                        $('#left-button-bid-lahan').click(function () {
                            event.preventDefault();

                            if ($('div.bidding-card-a2').scrollLeft() > 0) {
                                $('div.bidding-card-a2').animate({
                                    scrollLeft: "-=300px"
                                }, "slow");
                            } else {
                                $('div.bidding-card-a').animate({
                                    scrollLeft: "-=300px"
                                }, "slow");
                            }

                        });

                    </script>


                </div>

            </div>

            <!-- orang kotak ppat -->
            <div class="card mt-3 border-0 ">
                <div class="card-body">
                    <div class="mt-2 ">

                        <div class="row justify-content-center align-items-center">


                            <div class="col-1 arrow-desktop text-center">
                                <button id="left-orang2" class="btn rounded-5 text-white bg-secondary"
                                    style="background-color: #61481C">
                                    <i class="fa-solid fa-arrow-left"></i>
                                </button>
                            </div>
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col mobile-scroll" id='orang-bulet2'
                                        style="white-space:nowrap;flex-wrap:nowarp;display:flex">

                                        <?php
                                            $name = [
                                                "Rudi H.",
                                                "Budi K.",
                                                "Joko Afdal",
                                                "Ustman A.",
                                                "Robert K.",
                                                "James Tate", "Hadi Ismail", 'Abdullah', 'Nugraha D.', 'Ade Syarief', "Adhi Utomo", 'Leman wan', 'Pranoto Adi', 'Agus Susan'
                                            ];
                                            ?>
                                        <button
                                            class="container-gambar mb-0 text-center p-1 me-1 text-decoration-none border-0 bg-white me-2">
                                            <img src="data:image/png;base64,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"
                                                alt="" srcset="" class="rounded-circle img-thumbnail "
                                                style="width:70px;height:70px;object-fit:cover;background:#61481C">
                                            <div style="width: 70px">
                                                PPAT
                                            </div>
                                        </button>


                                        @for($i=0;$i< 14;$i++) <form action="{{url('')}}/detail-main-petugas"
                                            method="get" id="form-ppat-{{$i}}">
                                            <input type="hidden" name="name" value="{{$name[$i]}}">
                                            <input type="hidden" name="img"
                                                value="https://randomuser.me/api/portraits/men/{{$i}}.jpg">
                                            <input type="hidden" name="jenis_petugas" value="PPAT">
                                            </form>
                                            <button
                                                class="mb-0 container-gambar text-center p-1 me-1 text-decoration-none border-0 bg-white"
                                                onclick="return  $('form#form-ppat-<?= $i ?>').submit()"
                                                style='display: inline-block;flex: 0 0 auto'>
                                                <img src="https://randomuser.me/api/portraits/men/{{$i}}.jpg" alt=""
                                                    srcset="" class="rounded-circle img-thumbnail "
                                                    style="width:70px !important;height:70px;object-fit:cover;"> <br>
                                                {{$name[$i]}}
                                            </button>

                                            @endfor
                                            <a href="{{url('')}}/jasa-ppat"
                                                class="container-gambar mb-0 text-center p-1 me-1 text-decoration-none border-0 bg-white me-2">
                                                <img src="data:image/png;base64,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"
                                                    alt="" srcset="" class="rounded-circle img-thumbnail "
                                                    style="width:70px;height:70px;object-fit:cover;background-color:#007bff">
                                                <br>
                                                Lihat Semua
                                            </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1 arrow-desktop text-center">
                                <button id="right-orang2" class="btn rounded-5 text-white bg-secondary"
                                    style="background-color: #61481C">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </div>

                            <script>
                                $('#right-orang2').click(function () {
                                    event.preventDefault();
                                    $('#orang-bulet2').animate({
                                        scrollLeft: "+=300px"
                                    }, "slow");
                                });

                                $('#left-orang2').click(function () {
                                    event.preventDefault();
                                    $('#orang-bulet2').animate({
                                        scrollLeft: "-=300px"
                                    }, "slow");
                                });

                            </script>
                        </div>


                    </div>
                </div>

            </div>

            <!-- Bidding Tanah -->
            <div class="card mt-3 border-0 shadow-sm ">

                <div class="card-body bg-card-dark-mode">

                    <div class="row align-items-center justify-content-center">


                        <div class="col-12 desktop-arrow text-center">
                            <div class="row mobile-scroll mt-2 align-items-center bidding-card-a"
                                style="flex-wrap: nowrap">

                                <div class="col-12 custom ">
                                    <div class="card mx-auto">
                                        <div class="ribbon-pop">
                                            <i class="fa-solid fa-star"></i>&nbsp;HOT
                                        </div>
                                        <div class="share-icon">
                                            <button class="btn btn-sm text-white rounded-5"
                                                style="background: rgba(0, 0, 0, 0.5)">
                                                <i class="fa-solid fa-share-from-square"></i>
                                            </button>
                                        </div>
                                        <div id="ll4" class="carousel slide" data-bs-interval="false">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#ll4" data-bs-slide-to="0"
                                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#ll4" data-bs-slide-to="1"
                                                    aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#ll4" data-bs-slide-to="2"
                                                    aria-label="Slide 3"></button>
                                                <button type="button" data-bs-target="#ll4" data-bs-slide-to="3"
                                                    aria-label="Slide 4"></button>
                                            </div>

                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('')}}images/lahan1.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan1.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan2.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan2.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan3.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan3.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev opacity-90 text-dark" type="button"
                                                data-bs-target="#ll4" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next opacity-90 text-dark" type="button"
                                                data-bs-target="#ll4" data-bs-slide="next">
                                                <span class="carousel-control-next-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <h5 class="mb-0 text-center">Kode Bidang BL-004 <img
                                                            src="https://sengketatanah.id/uploads/biru_centang.png"
                                                            alt="" class="mb-1" style="height:20px"></h5>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="card-body pt-0">
                                            <table class="mt-2 mb-2">
                                                <tr>
                                                    <td>
                                                        <b>Nilai Pinjaman :</b>
                                                    </td>

                                                    <td rowspan="2">
                                                        <div class="d-flex align-items-center">

                                                            <a id="fav-c1 my-auto" style="margin-right: 10px">
                                                                <h5 class="mb-0 text-fav-disable" id="fav-ch-c1">
                                                                    <i class="fas fa-star"></i>
                                                                </h5>
                                                            </a>
                                                            <button
                                                                class="btn float-end btn-brown text-white mb-0 my-auto w-100"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID</button>
                                                        </div>


                                                        <script>
                                                            $("#fav-c1").click(function () {
                                                                $("#fav-ch-c1").toggleClass('fav-icon');
                                                            });

                                                        </script>


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">
                                                        <h5 class="mb-0">
                                                            <b class="text-primary">
                                                                Rp.450.000.000
                                                            </b>
                                                        </h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="fw-bold">
                                                            Fee : 30%
                                                        </h5>
                                                    </td>
                                                </tr>
                                            </table>
                                            <hr style="margin-top:-4px">

                                            <table>
                                                <tbody>
                                                    </tr>

                                                    <td>Lokasi</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;Pancawati, Bogor</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Luas</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;1 Ha</td>
                                                    </tr>
                                                    <tr>

                                                        <td>Objek Tanah</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Tanah Darat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nilai ZNT BPN</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;750.000/meter</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penawaran</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Open Bidding</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Jumlah Bid</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;3</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>


                                            <div class="row g-0">
                                                <div class="col text-start">

                                                    <a href="#" class="  mx-auto rounded-5" data-bs-toggle="modal"
                                                        data-bs-target="#modal-lihat-lahan"
                                                        style="text-decoration:none">
                                                        <i class="fa-solid fa-eye"></i> Lihat Detail
                                                    </a>


                                                    <div class="modal fade my-auto text-center" id="berkasC"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header p-0">
                                                                    <h1
                                                                        class="modal-title mx-auto text-danger display-1">
                                                                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                            style="width: 100px" alt="">
                                                                    </h1>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda harus memiliki akun peserta lelang sebelum
                                                                    melihat
                                                                    detail.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary me-auto"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <a type="button" class="btn btn-success"
                                                                        href="https://server.sengketatanah.id/login">Login</a>
                                                                    <a type="button" class="btn btn-danger"
                                                                        href="https://server.sengketatanah.id/login">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <form action="{{url('')}}/bid-sengketa/podcast" class="form-sengketa1"
                                                method="get">
                                                <input type="hidden" name="owner" value=" Bahru">
                                                <input type="hidden" name="objek" value=" Sengketa Pertanahan">
                                                <input type="hidden" name="luas" value=" 1 Ha">
                                                <input type="hidden" name="lokasi" value=" Pancawati, Bogor">
                                                <input type="hidden" name="komentar" value="">
                                                <input type="hidden" name="link_yt"
                                                    value="https://www.youtube.com/embed/-RkCcavzXq8">
                                                <input type="hidden" name="form" value="sponsor">
                                            </form>


                                            <hr>
                                            <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                <div class="col-4">

                                                    <div class="d-grid gap-2 ">

                                                        <!-- <button type="button"
                                                    class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                    data-bs-toggle="modal" data-bs-target="#exampleC">
                                                    BID
                                                </button> -->


                                                        <div class="modal fade my-auto" id="exampleC" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                                class="mb-2" style="width: 100px"
                                                                                alt="">
                                                                        </h1>
                                                                    </div>
                                                                    <div class="modal-body" style="text-align: justify">

                                                                        Anda harus memiliki akun <b>LENDER</b> sebelum
                                                                        melakukan
                                                                        Bid (Bid adalah proses penawaran anda dengan
                                                                        owner).
                                                                        Jika anda belum menemukan kesepakatan anda bisa
                                                                        close
                                                                        bidding kapan saja.
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary me-auto"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a type="button" class="btn btn-success"
                                                                            href="https://server.sengketatanah.id/login">Login</a>
                                                                        <a type="button" class="btn btn-danger"
                                                                            href="https://server.sengketatanah.id/login">Register</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>

                                <div class="col-12 custom">
                                    <div class="card mb-2 mx-auto">
                                        <div class="ribbon-pop">
                                            <i class="fa-solid fa-star"></i>&nbsp;HOT
                                        </div>
                                        <div class="share-icon">
                                            <button class="btn btn-sm text-white rounded-5"
                                                style="background: rgba(0, 0, 0, 0.5)">
                                                <i class="fa-solid fa-share-from-square"></i>
                                            </button>
                                        </div>
                                        <div id="ll2" class="carousel slide" data-bs-interval="false">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#ll2" data-bs-slide-to="0"
                                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#ll2" data-bs-slide-to="1"
                                                    aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#ll2" data-bs-slide-to="2"
                                                    aria-label="Slide 3"></button>
                                                <button type="button" data-bs-target="#ll2" data-bs-slide-to="3"
                                                    aria-label="Slide 4"></button>
                                            </div>

                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('')}}images/lahan2.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan2.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan1.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan1.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan3.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan3.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev opacity-90 text-dark" type="button"
                                                data-bs-target="#ll2" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next opacity-90 text-dark" type="button"
                                                data-bs-target="#ll2" data-bs-slide="next">
                                                <span class="carousel-control-next-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <h5 class="mb-0 text-center">Kode Bidang BL-001 <img
                                                            src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                            class="mb-1" style="height:20px"></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body pt-0">
                                            <table class="mt-2 mb-2">
                                                <tr>
                                                    <td>
                                                        <b>Nilai Pinjaman :</b>
                                                    </td>

                                                    <td rowspan="2">
                                                        <div class="d-flex align-items-center">

                                                            <a id="fav-c1 my-auto" style="margin-right: 10px">
                                                                <h5 class="mb-0 text-fav-disable" id="fav-ch-c1">
                                                                    <i class="fas fa-star"></i>
                                                                </h5>
                                                            </a>
                                                            <button
                                                                class="btn float-end btn-brown text-white mb-0 my-auto w-100"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID</button>
                                                        </div>


                                                        <script>
                                                            $("#fav-c1").click(function () {
                                                                $("#fav-ch-c1").toggleClass('fav-icon');
                                                            });

                                                        </script>


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">
                                                        <h5 class="mb-0">
                                                            <b class="text-primary">
                                                                Rp.500.000.000
                                                            </b>
                                                        </h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="fw-bold">
                                                            Fee : 30%
                                                        </h5>
                                                    </td>
                                                </tr>
                                            </table>
                                            <hr style="margin-top:-4px">


                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Lokasi</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Pancawati, Bogor</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Luas</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;5000 M</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Objek Tanah</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Tanah Darat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nilai ZNT BPN</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;750.000/meter</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penawaran</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Open Bidding</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah Bid</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;4</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>



                                            <div class="row g-0">
                                                <div class="col text-start">

                                                    <a href="#" class="  mx-auto rounded-5" data-bs-toggle="modal"
                                                        data-bs-target="#modal-lihat-lahan"
                                                        style="text-decoration:none">
                                                        <i class="fa-solid fa-eye"></i> Lihat Detail
                                                    </a>


                                                    <div class="modal fade my-auto text-center" id="berkasC"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header p-0">
                                                                    <h1
                                                                        class="modal-title mx-auto text-danger display-1">
                                                                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                            style="width: 100px" alt="">
                                                                    </h1>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda harus memiliki akun peserta lelang sebelum
                                                                    melihat detail.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary me-auto"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <a type="button" class="btn btn-success"
                                                                        href="https://server.sengketatanah.id/login">Login</a>
                                                                    <a type="button" class="btn btn-danger"
                                                                        href="https://server.sengketatanah.id/login">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <form action="{{url('')}}/bid-sengketa/podcast" class="form-sengketa2"
                                                method="get">
                                                <input type="hidden" name="owner" value=" Fatah">
                                                <input type="hidden" name="objek" value=" Konflik Pertanahan">
                                                <input type="hidden" name="luas" value=" 5000 M">
                                                <input type="hidden" name="lokasi" value=" Pancawati, Bogor">
                                                <input type="hidden" name="komentar" value="">
                                                <input type="hidden" name="link_yt"
                                                    value="https://www.youtube.com/embed/byby3HJ3OCI">
                                                <input type="hidden" name="form" value="sponsor">
                                            </form>


                                            <hr>
                                            <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                <div class="col-4">

                                                    <div class="d-grid gap-2 ">

                                                        <!-- <button type="button"
                                                    class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                    data-bs-toggle="modal" data-bs-target="#exampleC">
                                                    BID
                                                </button> -->


                                                        <div class="modal fade my-auto" id="exampleC" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                                class="mb-2" style="width: 100px"
                                                                                alt="">
                                                                        </h1>
                                                                    </div>
                                                                    <div class="modal-body" style="text-align: justify">

                                                                        Anda harus memiliki akun <b>LENDER</b> sebelum
                                                                        melakukan
                                                                        Bid (Bid adalah proses penawaran anda dengan
                                                                        owner).
                                                                        Jika anda belum menemukan kesepakatan anda bisa
                                                                        close
                                                                        bidding kapan saja.</div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary me-auto"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a type="button" class="btn btn-success"
                                                                            href="https://server.sengketatanah.id/login">Login</a>
                                                                        <a type="button" class="btn btn-danger"
                                                                            href="https://server.sengketatanah.id/login">Register</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 custom">
                                    <div class="card mb-2 mx-auto">
                                        <div class="ribbon-pop">
                                            <i class="fa-solid fa-star"></i>&nbsp;HOT
                                        </div>
                                        <div class="share-icon">
                                            <button class="btn btn-sm text-white rounded-5"
                                                style="background: rgba(0, 0, 0, 0.5)">
                                                <i class="fa-solid fa-share-from-square"></i>
                                            </button>
                                        </div>
                                        <div id="ll3" class="carousel slide" data-bs-interval="false">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#ll3" data-bs-slide-to="0"
                                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#ll3" data-bs-slide-to="1"
                                                    aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#ll3" data-bs-slide-to="2"
                                                    aria-label="Slide 3"></button>
                                                <button type="button" data-bs-target="#ll3" data-bs-slide-to="3"
                                                    aria-label="Slide 4"></button>
                                            </div>

                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('')}}images/lahan3.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan3.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan1.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan1.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan2.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan2.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev opacity-90 text-dark" type="button"
                                                data-bs-target="#ll3" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next opacity-90 text-dark" type="button"
                                                data-bs-target="#ll3" data-bs-slide="next">
                                                <span class="carousel-control-next-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <h5 class="mb-0 text-center">Kode Bidang BL-002 <img
                                                            src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                            class="mb-1" style="height:20px"></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body pt-0">
                                            <table class="mt-2 mb-2">
                                                <tr>
                                                    <td>
                                                        <b>Nilai Pinjaman :</b>
                                                    </td>

                                                    <td rowspan="2">
                                                        <div class="d-flex align-items-center">

                                                            <a id="fav-c1 my-auto" style="margin-right: 10px">
                                                                <h5 class="mb-0 text-fav-disable" id="fav-ch-c1">
                                                                    <i class="fas fa-star"></i>
                                                                </h5>
                                                            </a>
                                                            <button
                                                                class="btn float-end btn-brown text-white mb-0 my-auto w-100"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID</button>
                                                        </div>


                                                        <script>
                                                            $("#fav-c1").click(function () {
                                                                $("#fav-ch-c1").toggleClass('fav-icon');
                                                            });

                                                        </script>


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">
                                                        <h5 class="mb-0">
                                                            <b class="text-primary">
                                                                Rp.100.000.000
                                                            </b>
                                                        </h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="fw-bold">
                                                            Fee : 30%
                                                        </h5>
                                                    </td>
                                                </tr>
                                            </table>
                                            <hr style="margin-top:-4px">

                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Lokasi</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Medan, Sumatra Utara</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Luas</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;3.2 Ha</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Objek Tanah</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Tanah Darat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nilai ZNT BPN</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;750.000/meter</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penawaran</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Open Bidding</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah Bid</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;6</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>



                                            <div class="row g-0">
                                                <div class="col text-start">

                                                    <a href="#" class="  mx-auto rounded-5" data-bs-toggle="modal"
                                                        data-bs-target="#modal-lihat-lahan"
                                                        style="text-decoration:none">
                                                        <i class="fa-solid fa-eye"></i> Lihat Detail
                                                    </a>


                                                    <div class="modal fade my-auto text-center" id="berkasC"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header p-0">
                                                                    <h1
                                                                        class="modal-title mx-auto text-danger display-1">
                                                                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                            style="width: 100px" alt="">
                                                                    </h1>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda harus memiliki akun peserta lelang sebelum
                                                                    melihat
                                                                    detail.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary me-auto"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <a type="button" class="btn btn-success"
                                                                        href="https://server.sengketatanah.id/login">Login</a>
                                                                    <a type="button" class="btn btn-danger"
                                                                        href="https://server.sengketatanah.id/login">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <form action="{{url('')}}/bid-sengketa/podcast" class="form-sengketa3"
                                                method="get">
                                                <input type="hidden" name="owner" value=" Ophelia Suartini">
                                                <input type="hidden" name="objek" value=" Perkara Pertanahan">
                                                <input type="hidden" name="luas" value=" 3.2 Ha">
                                                <input type="hidden" name="lokasi" value=" Medan, Sumatra Utara">
                                                <input type="hidden" name="komentar" value="">
                                                <input type="hidden" name="link_yt"
                                                    value="https://www.youtube.com/embed/1I4iEKK1qbQ">
                                                <input type="hidden" name="form" value="sponsor">
                                            </form>


                                            <hr>
                                            <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                <div class="col-4">

                                                    <div class="d-grid gap-2 ">
                                                        <!-- <button type="button"
                                                                class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID
                                                            </button> -->


                                                        <div class="modal fade my-auto" id="exampleC" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                                class="mb-2" style="width: 100px"
                                                                                alt="">
                                                                        </h1>
                                                                    </div>
                                                                    <div class="modal-body" style="text-align: justify">

                                                                        Anda harus memiliki akun <b>LENDER</b> sebelum
                                                                        melakukan
                                                                        Bid (Bid adalah proses penawaran anda dengan
                                                                        owner).
                                                                        Jika anda belum menemukan kesepakatan anda bisa
                                                                        close
                                                                        bidding kapan saja.</div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary me-auto"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a type="button" class="btn btn-success"
                                                                            href="https://server.sengketatanah.id/login">Login</a>
                                                                        <a type="button" class="btn btn-danger"
                                                                            href="https://server.sengketatanah.id/login">Register</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 custom">
                                    <div class="card mb-2 mx-auto">
                                        <div class="ribbon-pop">
                                            <i class="fa-solid fa-star"></i>&nbsp;HOT
                                        </div>
                                        <div class="share-icon">
                                            <button class="btn btn-sm text-white rounded-5"
                                                style="background: rgba(0, 0, 0, 0.5)">
                                                <i class="fa-solid fa-share-from-square"></i>
                                            </button>
                                        </div>
                                        <div id="ll44" class="carousel slide" data-bs-interval="false">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#ll44" data-bs-slide-to="0"
                                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#ll44" data-bs-slide-to="1"
                                                    aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#ll44" data-bs-slide-to="2"
                                                    aria-label="Slide 3"></button>
                                                <button type="button" data-bs-target="#ll44" data-bs-slide-to="3"
                                                    aria-label="Slide 4"></button>
                                            </div>

                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan3.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan3.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan1.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan1.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev opacity-90 text-dark" type="button"
                                                data-bs-target="#ll44" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next opacity-90 text-dark" type="button"
                                                data-bs-target="#ll44" data-bs-slide="next">
                                                <span class="carousel-control-next-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <h5 class="mb-0 text-center">Kode Bidang BL-003 <img
                                                            src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                            class="mb-1" style="height:20px"></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body pt-0">
                                            <table class="mt-2 mb-2">
                                                <tr>
                                                    <td>
                                                        <b>Nilai Pinjaman :</b>
                                                    </td>

                                                    <td rowspan="2">
                                                        <div class="d-flex align-items-center">

                                                            <a id="fav-c1 my-auto" style="margin-right: 10px">
                                                                <h5 class="mb-0 text-fav-disable" id="fav-ch-c1">
                                                                    <i class="fas fa-star"></i>
                                                                </h5>
                                                            </a>
                                                            <button
                                                                class="btn float-end btn-brown text-white mb-0 my-auto w-100"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID</button>
                                                        </div>


                                                        <script>
                                                            $("#fav-c1").click(function () {
                                                                $("#fav-ch-c1").toggleClass('fav-icon');
                                                            });

                                                        </script>


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">
                                                        <h5 class="mb-0">
                                                            <b class="text-primary">
                                                                Rp.200.000.000
                                                            </b>
                                                        </h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="fw-bold">
                                                            Fee : 30%
                                                        </h5>
                                                    </td>
                                                </tr>
                                            </table>
                                            <hr style="margin-top:-4px">

                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Lokasi</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Medan, Sumatra Utara</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Luas</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;3.2 Ha</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Objek Tanah</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Tanah Darat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nilai ZNT BPN</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;750.000/meter</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penawaran</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Open Bidding</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah Bid</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;6</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>


                                            <div class="row g-0">
                                                <div class="col text-start">

                                                    <a href="#" class="  mx-auto rounded-5" data-bs-toggle="modal"
                                                        data-bs-target="#modal-lihat-lahan"
                                                        style="text-decoration:none">
                                                        <i class="fa-solid fa-eye"></i> Lihat Detail
                                                    </a>


                                                    <div class="modal fade my-auto text-center" id="berkasC"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header p-0">
                                                                    <h1
                                                                        class="modal-title mx-auto text-danger display-1">
                                                                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                            style="width: 100px" alt="">
                                                                    </h1>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda harus memiliki akun peserta lelang sebelum
                                                                    melihat
                                                                    detail.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary me-auto"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <a type="button" class="btn btn-success"
                                                                        href="https://server.sengketatanah.id/login">Login</a>
                                                                    <a type="button" class="btn btn-danger"
                                                                        href="https://server.sengketatanah.id/login">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <form action="{{url('')}}/bid-sengketa/podcast" class="form-sengketa3"
                                                method="get">
                                                <input type="hidden" name="owner" value=" Ophelia Suartini">
                                                <input type="hidden" name="objek" value=" Perkara Pertanahan">
                                                <input type="hidden" name="luas" value=" 3.2 Ha">
                                                <input type="hidden" name="lokasi" value=" Medan, Sumatra Utara">
                                                <input type="hidden" name="komentar" value="">
                                                <input type="hidden" name="link_yt"
                                                    value="https://www.youtube.com/embed/1I4iEKK1qbQ">
                                                <input type="hidden" name="form" value="sponsor">
                                            </form>


                                            <hr>
                                            <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                <div class="col-4">

                                                    <div class="d-grid gap-2 ">
                                                        <!-- <button type="button"
                                                    class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                    data-bs-toggle="modal" data-bs-target="#exampleC">
                                                    BID
                                                </button> -->


                                                        <div class="modal fade my-auto" id="exampleC" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                                class="mb-2" style="width: 100px"
                                                                                alt="">
                                                                        </h1>
                                                                    </div>
                                                                    <div class="modal-body" style="text-align: justify">

                                                                        Anda harus memiliki akun <b>LENDER</b> sebelum
                                                                        melakukan
                                                                        Bid (Bid adalah proses penawaran anda dengan
                                                                        owner).
                                                                        Jika anda belum menemukan kesepakatan anda bisa
                                                                        close
                                                                        bidding kapan saja.</div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary me-auto"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a type="button" class="btn btn-success"
                                                                            href="https://server.sengketatanah.id/login">Login</a>
                                                                        <a type="button" class="btn btn-danger"
                                                                            href="https://server.sengketatanah.id/login">Register</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="row align-items-center justify-content-center">

                        <div class="col-12 desktop-arrow text-center">
                            <div class="row mobile-scroll mt-2 align-items-center bidding-card-a2"
                                style="flex-wrap: nowrap">

                                <div class="col-12 custom ">
                                    <div class="card mx-auto">
                                        <div class="ribbon-pop">
                                            <i class="fa-solid fa-star"></i>&nbsp;HOT
                                        </div>
                                        <div class="share-icon">
                                            <button class="btn btn-sm text-white rounded-5"
                                                style="background: rgba(0, 0, 0, 0.5)">
                                                <i class="fa-solid fa-share-from-square"></i>
                                            </button>
                                        </div>
                                        <div id="ll4a" class="carousel slide" data-bs-interval="false">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#ll4a" data-bs-slide-to="0"
                                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#ll4a" data-bs-slide-to="1"
                                                    aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#ll4a" data-bs-slide-to="2"
                                                    aria-label="Slide 3"></button>
                                                <button type="button" data-bs-target="#ll4a" data-bs-slide-to="3"
                                                    aria-label="Slide 4"></button>
                                            </div>

                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('')}}images/lahan1.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan1.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan2.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan2.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan3.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan3.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev opacity-90 text-dark" type="button"
                                                data-bs-target="#ll4a" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next opacity-90 text-dark" type="button"
                                                data-bs-target="#ll4a" data-bs-slide="next">
                                                <span class="carousel-control-next-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <h5 class="mb-0 text-center">Kode Bidang BL-004 <img
                                                            src="https://sengketatanah.id/uploads/biru_centang.png"
                                                            alt="" class="mb-1" style="height:20px"></h5>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="card-body pt-0">
                                            <table class="mt-2 mb-2">
                                                <tr>
                                                    <td>
                                                        <b>Nilai Pinjaman :</b>
                                                    </td>

                                                    <td rowspan="2">
                                                        <div class="d-flex align-items-center">

                                                            <a id="fav-c1 my-auto" style="margin-right: 10px">
                                                                <h5 class="mb-0 text-fav-disable" id="fav-ch-c1">
                                                                    <i class="fas fa-star"></i>
                                                                </h5>
                                                            </a>
                                                            <button
                                                                class="btn float-end btn-brown text-white mb-0 my-auto w-100"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID</button>
                                                        </div>


                                                        <script>
                                                            $("#fav-c1").click(function () {
                                                                $("#fav-ch-c1").toggleClass('fav-icon');
                                                            });

                                                        </script>


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">
                                                        <h5 class="mb-0">
                                                            <b class="text-primary">
                                                                Rp.450.000.000
                                                            </b>
                                                        </h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="fw-bold">
                                                            Fee : 30%
                                                        </h5>
                                                    </td>
                                                </tr>
                                            </table>
                                            <hr style="margin-top:-4px">

                                            <table>
                                                <tbody>
                                                    </tr>

                                                    <td>Lokasi</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;Pancawati, Bogor</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Luas</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;1 Ha</td>
                                                    </tr>
                                                    <tr>

                                                        <td>Objek Tanah</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Tanah Darat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nilai ZNT BPN</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;750.000/meter</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penawaran</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Open Bidding</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Jumlah Bid</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;3</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>


                                            <div class="row g-0">
                                                <div class="col text-start">

                                                    <a href="#" class="  mx-auto rounded-5" data-bs-toggle="modal"
                                                        data-bs-target="#modal-lihat-lahan"
                                                        style="text-decoration:none">
                                                        <i class="fa-solid fa-eye"></i> Lihat Detail
                                                    </a>


                                                    <div class="modal fade my-auto text-center" id="berkasC"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header p-0">
                                                                    <h1
                                                                        class="modal-title mx-auto text-danger display-1">
                                                                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                            style="width: 100px" alt="">
                                                                    </h1>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda harus memiliki akun peserta lelang sebelum
                                                                    melihat
                                                                    detail.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary me-auto"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <a type="button" class="btn btn-success"
                                                                        href="https://server.sengketatanah.id/login">Login</a>
                                                                    <a type="button" class="btn btn-danger"
                                                                        href="https://server.sengketatanah.id/login">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <form action="{{url('')}}/bid-sengketa/podcast" class="form-sengketa1"
                                                method="get">
                                                <input type="hidden" name="owner" value=" Bahru">
                                                <input type="hidden" name="objek" value=" Sengketa Pertanahan">
                                                <input type="hidden" name="luas" value=" 1 Ha">
                                                <input type="hidden" name="lokasi" value=" Pancawati, Bogor">
                                                <input type="hidden" name="komentar" value="">
                                                <input type="hidden" name="link_yt"
                                                    value="https://www.youtube.com/embed/-RkCcavzXq8">
                                                <input type="hidden" name="form" value="sponsor">
                                            </form>


                                            <hr>
                                            <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                <div class="col-4">

                                                    <div class="d-grid gap-2 ">

                                                        <!-- <button type="button"
                                                    class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                    data-bs-toggle="modal" data-bs-target="#exampleC">
                                                    BID
                                                </button> -->


                                                        <div class="modal fade my-auto" id="exampleC" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                                class="mb-2" style="width: 100px"
                                                                                alt="">
                                                                        </h1>
                                                                    </div>
                                                                    <div class="modal-body" style="text-align: justify">

                                                                        Anda harus memiliki akun <b>LENDER</b> sebelum
                                                                        melakukan
                                                                        Bid (Bid adalah proses penawaran anda dengan
                                                                        owner).
                                                                        Jika anda belum menemukan kesepakatan anda bisa
                                                                        close
                                                                        bidding kapan saja.</div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary me-auto"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a type="button" class="btn btn-success"
                                                                            href="https://server.sengketatanah.id/login">Login</a>
                                                                        <a type="button" class="btn btn-danger"
                                                                            href="https://server.sengketatanah.id/login">Register</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>

                                <div class="col-12 custom">
                                    <div class="card mb-2 mx-auto">
                                        <div class="ribbon-pop">
                                            <i class="fa-solid fa-star"></i>&nbsp;HOT
                                        </div>
                                        <div class="share-icon">
                                            <button class="btn btn-sm text-white rounded-5"
                                                style="background: rgba(0, 0, 0, 0.5)">
                                                <i class="fa-solid fa-share-from-square"></i>
                                            </button>
                                        </div>
                                        <div id="ll2a" class="carousel slide" data-bs-interval="false">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#ll2a" data-bs-slide-to="0"
                                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#ll2a" data-bs-slide-to="1"
                                                    aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#ll2a" data-bs-slide-to="2"
                                                    aria-label="Slide 3"></button>
                                                <button type="button" data-bs-target="#ll2a" data-bs-slide-to="3"
                                                    aria-label="Slide 4"></button>
                                            </div>

                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('')}}images/lahan2.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan2.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan1.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan1.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan3.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan3.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev opacity-90 text-dark" type="button"
                                                data-bs-target="#ll2a" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next opacity-90 text-dark" type="button"
                                                data-bs-target="#ll2a" data-bs-slide="next">
                                                <span class="carousel-control-next-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <h5 class="mb-0 text-center">Kode Bidang BL-001 <img
                                                            src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                            class="mb-1" style="height:20px"></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body pt-0">
                                            <table class="mt-2 mb-2">
                                                <tr>
                                                    <td>
                                                        <b>Nilai Pinjaman :</b>
                                                    </td>

                                                    <td rowspan="2">
                                                        <div class="d-flex align-items-center">

                                                            <a id="fav-c1 my-auto" style="margin-right: 10px">
                                                                <h5 class="mb-0 text-fav-disable" id="fav-ch-c1">
                                                                    <i class="fas fa-star"></i>
                                                                </h5>
                                                            </a>
                                                            <button
                                                                class="btn float-end btn-brown text-white mb-0 my-auto w-100"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID</button>
                                                        </div>


                                                        <script>
                                                            $("#fav-c1").click(function () {
                                                                $("#fav-ch-c1").toggleClass('fav-icon');
                                                            });

                                                        </script>


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">
                                                        <h5 class="mb-0">
                                                            <b class="text-primary">
                                                                Rp.500.000.000
                                                            </b>
                                                        </h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="fw-bold">
                                                            Fee : 30%
                                                        </h5>
                                                    </td>
                                                </tr>
                                            </table>
                                            <hr style="margin-top:-4px">


                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Lokasi</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Pancawati, Bogor</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Luas</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;5000 M</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Objek Tanah</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Tanah Darat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nilai ZNT BPN</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;750.000/meter</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penawaran</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Open Bidding</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah Bid</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;4</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>



                                            <div class="row g-0">
                                                <div class="col text-start">

                                                    <a href="#" class="  mx-auto rounded-5" data-bs-toggle="modal"
                                                        data-bs-target="#modal-lihat-lahan"
                                                        style="text-decoration:none">
                                                        <i class="fa-solid fa-eye"></i> Lihat Detail
                                                    </a>


                                                    <div class="modal fade my-auto text-center" id="berkasC"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header p-0">
                                                                    <h1
                                                                        class="modal-title mx-auto text-danger display-1">
                                                                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                            style="width: 100px" alt="">
                                                                    </h1>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda harus memiliki akun peserta lelang sebelum
                                                                    melihat detail.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary me-auto"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <a type="button" class="btn btn-success"
                                                                        href="https://server.sengketatanah.id/login">Login</a>
                                                                    <a type="button" class="btn btn-danger"
                                                                        href="https://server.sengketatanah.id/login">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <form action="{{url('')}}/bid-sengketa/podcast" class="form-sengketa2"
                                                method="get">
                                                <input type="hidden" name="owner" value=" Fatah">
                                                <input type="hidden" name="objek" value=" Konflik Pertanahan">
                                                <input type="hidden" name="luas" value=" 5000 M">
                                                <input type="hidden" name="lokasi" value=" Pancawati, Bogor">
                                                <input type="hidden" name="komentar" value="">
                                                <input type="hidden" name="link_yt"
                                                    value="https://www.youtube.com/embed/byby3HJ3OCI">
                                                <input type="hidden" name="form" value="sponsor">
                                            </form>


                                            <hr>
                                            <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                <div class="col-4">

                                                    <div class="d-grid gap-2 ">

                                                        <!-- <button type="button"
                                                    class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                    data-bs-toggle="modal" data-bs-target="#exampleC">
                                                    BID
                                                </button> -->


                                                        <div class="modal fade my-auto" id="exampleC" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                                class="mb-2" style="width: 100px"
                                                                                alt="">
                                                                        </h1>
                                                                    </div>
                                                                    <div class="modal-body" style="text-align: justify">

                                                                        Anda harus memiliki akun <b>LENDER</b> sebelum
                                                                        melakukan
                                                                        Bid (Bid adalah proses penawaran anda dengan
                                                                        owner).
                                                                        Jika anda belum menemukan kesepakatan anda bisa
                                                                        close
                                                                        bidding kapan saja.</div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary me-auto"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a type="button" class="btn btn-success"
                                                                            href="https://server.sengketatanah.id/login">Login</a>
                                                                        <a type="button" class="btn btn-danger"
                                                                            href="https://server.sengketatanah.id/login">Register</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 custom">
                                    <div class="card mb-2 mx-auto">
                                        <div class="ribbon-pop">
                                            <i class="fa-solid fa-star"></i>&nbsp;HOT
                                        </div>
                                        <div class="share-icon">
                                            <button class="btn btn-sm text-white rounded-5"
                                                style="background: rgba(0, 0, 0, 0.5)">
                                                <i class="fa-solid fa-share-from-square"></i>
                                            </button>
                                        </div>
                                        <div id="ll3a" class="carousel slide" data-bs-interval="false">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#ll3a" data-bs-slide-to="0"
                                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#ll3a" data-bs-slide-to="1"
                                                    aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#ll3a" data-bs-slide-to="2"
                                                    aria-label="Slide 3"></button>
                                                <button type="button" data-bs-target="#ll3a" data-bs-slide-to="3"
                                                    aria-label="Slide 4"></button>
                                            </div>

                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('')}}images/lahan3.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan3.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan1.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan1.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan2.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan2.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev opacity-90 text-dark" type="button"
                                                data-bs-target="#ll3a" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next opacity-90 text-dark" type="button"
                                                data-bs-target="#ll3a" data-bs-slide="next">
                                                <span class="carousel-control-next-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <h5 class="mb-0 text-center">Kode Bidang BL-002 <img
                                                            src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                            class="mb-1" style="height:20px"></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body pt-0">
                                            <table class="mt-2 mb-2">
                                                <tr>
                                                    <td>
                                                        <b>Nilai Pinjaman :</b>
                                                    </td>

                                                    <td rowspan="2">
                                                        <div class="d-flex align-items-center">

                                                            <a id="fav-c1 my-auto" style="margin-right: 10px">
                                                                <h5 class="mb-0 text-fav-disable" id="fav-ch-c1">
                                                                    <i class="fas fa-star"></i>
                                                                </h5>
                                                            </a>
                                                            <button
                                                                class="btn float-end btn-brown text-white mb-0 my-auto w-100"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID</button>
                                                        </div>


                                                        <script>
                                                            $("#fav-c1").click(function () {
                                                                $("#fav-ch-c1").toggleClass('fav-icon');
                                                            });

                                                        </script>


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">
                                                        <h5 class="mb-0">
                                                            <b class="text-primary">
                                                                Rp.100.000.000
                                                            </b>
                                                        </h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="fw-bold">
                                                            Fee : 30%
                                                        </h5>
                                                    </td>
                                                </tr>
                                            </table>
                                            <hr style="margin-top:-4px">

                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Lokasi</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Medan, Sumatra Utara</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Luas</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;3.2 Ha</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Objek Tanah</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Tanah Darat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nilai ZNT BPN</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;750.000/meter</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penawaran</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Open Bidding</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah Bid</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;6</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>



                                            <div class="row g-0">
                                                <div class="col text-start">

                                                    <a href="#" class="  mx-auto rounded-5" data-bs-toggle="modal"
                                                        data-bs-target="#modal-lihat-lahan"
                                                        style="text-decoration:none">
                                                        <i class="fa-solid fa-eye"></i> Lihat Detail
                                                    </a>


                                                    <div class="modal fade my-auto text-center" id="berkasC"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header p-0">
                                                                    <h1
                                                                        class="modal-title mx-auto text-danger display-1">
                                                                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                            style="width: 100px" alt="">
                                                                    </h1>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda harus memiliki akun peserta lelang sebelum
                                                                    melihat
                                                                    detail.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary me-auto"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <a type="button" class="btn btn-success"
                                                                        href="https://server.sengketatanah.id/login">Login</a>
                                                                    <a type="button" class="btn btn-danger"
                                                                        href="https://server.sengketatanah.id/login">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <form action="{{url('')}}/bid-sengketa/podcast" class="form-sengketa3"
                                                method="get">
                                                <input type="hidden" name="owner" value=" Ophelia Suartini">
                                                <input type="hidden" name="objek" value=" Perkara Pertanahan">
                                                <input type="hidden" name="luas" value=" 3.2 Ha">
                                                <input type="hidden" name="lokasi" value=" Medan, Sumatra Utara">
                                                <input type="hidden" name="komentar" value="">
                                                <input type="hidden" name="link_yt"
                                                    value="https://www.youtube.com/embed/1I4iEKK1qbQ">
                                                <input type="hidden" name="form" value="sponsor">
                                            </form>


                                            <hr>
                                            <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                <div class="col-4">

                                                    <div class="d-grid gap-2 ">
                                                        <!-- <button type="button"
                                                                class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID
                                                            </button> -->


                                                        <div class="modal fade my-auto" id="exampleC" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                                class="mb-2" style="width: 100px"
                                                                                alt="">
                                                                        </h1>
                                                                    </div>
                                                                    <div class="modal-body" style="text-align: justify">

                                                                        Anda harus memiliki akun <b>LENDER</b> sebelum
                                                                        melakukan
                                                                        Bid (Bid adalah proses penawaran anda dengan
                                                                        owner).
                                                                        Jika anda belum menemukan kesepakatan anda bisa
                                                                        close
                                                                        bidding kapan saja.</div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary me-auto"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a type="button" class="btn btn-success"
                                                                            href="https://server.sengketatanah.id/login">Login</a>
                                                                        <a type="button" class="btn btn-danger"
                                                                            href="https://server.sengketatanah.id/login">Register</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 custom">
                                    <div class="card mb-2 mx-auto">
                                        <div class="ribbon-pop">
                                            <i class="fa-solid fa-star"></i>&nbsp;HOT
                                        </div>
                                        <div class="share-icon">
                                            <button class="btn btn-sm text-white rounded-5"
                                                style="background: rgba(0, 0, 0, 0.5)">
                                                <i class="fa-solid fa-share-from-square"></i>
                                            </button>
                                        </div>
                                        <div id="ll44a" class="carousel slide" data-bs-interval="false">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#ll44a" data-bs-slide-to="0"
                                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#ll44a" data-bs-slide-to="1"
                                                    aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#ll44a" data-bs-slide-to="2"
                                                    aria-label="Slide 3"></button>
                                                <button type="button" data-bs-target="#ll44a" data-bs-slide-to="3"
                                                    aria-label="Slide 4"></button>
                                            </div>

                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan3.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan3.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan1.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan1.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev opacity-90 text-dark" type="button"
                                                data-bs-target="#ll44a" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next opacity-90 text-dark" type="button"
                                                data-bs-target="#ll44a" data-bs-slide="next">
                                                <span class="carousel-control-next-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <h5 class="mb-0 text-center">Kode Bidang BL-003 <img
                                                            src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                            class="mb-1" style="height:20px"></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body pt-0">
                                            <table class="mt-2 mb-2">
                                                <tr>
                                                    <td>
                                                        <b>Nilai Pinjaman :</b>
                                                    </td>

                                                    <td rowspan="2">
                                                        <div class="d-flex align-items-center">

                                                            <a id="fav-c1 my-auto" style="margin-right: 10px">
                                                                <h5 class="mb-0 text-fav-disable" id="fav-ch-c1">
                                                                    <i class="fas fa-star"></i>
                                                                </h5>
                                                            </a>
                                                            <button
                                                                class="btn float-end btn-brown text-white mb-0 my-auto w-100"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID</button>
                                                        </div>


                                                        <script>
                                                            $("#fav-c1").click(function () {
                                                                $("#fav-ch-c1").toggleClass('fav-icon');
                                                            });

                                                        </script>


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">
                                                        <h5 class="mb-0">
                                                            <b class="text-primary">
                                                                Rp.200.000.000
                                                            </b>
                                                        </h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="fw-bold">
                                                            Fee : 30%
                                                        </h5>
                                                    </td>
                                                </tr>
                                            </table>
                                            <hr style="margin-top:-4px">

                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Lokasi</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Medan, Sumatra Utara</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Luas</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;3.2 Ha</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Objek Tanah</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Tanah Darat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nilai ZNT BPN</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;750.000/meter</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penawaran</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Open Bidding</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah Bid</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;6</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>


                                            <div class="row g-0">
                                                <div class="col text-start">

                                                    <a href="#" class="  mx-auto rounded-5" data-bs-toggle="modal"
                                                        data-bs-target="#modal-lihat-lahan"
                                                        style="text-decoration:none">
                                                        <i class="fa-solid fa-eye"></i> Lihat Detail
                                                    </a>


                                                    <div class="modal fade my-auto text-center" id="berkasC"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header p-0">
                                                                    <h1
                                                                        class="modal-title mx-auto text-danger display-1">
                                                                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                            style="width: 100px" alt="">
                                                                    </h1>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda harus memiliki akun peserta lelang sebelum
                                                                    melihat
                                                                    detail.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary me-auto"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <a type="button" class="btn btn-success"
                                                                        href="https://server.sengketatanah.id/login">Login</a>
                                                                    <a type="button" class="btn btn-danger"
                                                                        href="https://server.sengketatanah.id/login">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <form action="{{url('')}}/bid-sengketa/podcast" class="form-sengketa3"
                                                method="get">
                                                <input type="hidden" name="owner" value=" Ophelia Suartini">
                                                <input type="hidden" name="objek" value=" Perkara Pertanahan">
                                                <input type="hidden" name="luas" value=" 3.2 Ha">
                                                <input type="hidden" name="lokasi" value=" Medan, Sumatra Utara">
                                                <input type="hidden" name="komentar" value="">
                                                <input type="hidden" name="link_yt"
                                                    value="https://www.youtube.com/embed/1I4iEKK1qbQ">
                                                <input type="hidden" name="form" value="sponsor">
                                            </form>


                                            <hr>
                                            <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                <div class="col-4">

                                                    <div class="d-grid gap-2 ">
                                                        <!-- <button type="button"
                                                    class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                    data-bs-toggle="modal" data-bs-target="#exampleC">
                                                    BID
                                                </button> -->


                                                        <div class="modal fade my-auto" id="exampleC" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                                class="mb-2" style="width: 100px"
                                                                                alt="">
                                                                        </h1>
                                                                    </div>
                                                                    <div class="modal-body" style="text-align: justify">

                                                                        Anda harus memiliki akun <b>LENDER</b> sebelum
                                                                        melakukan
                                                                        Bid (Bid adalah proses penawaran anda dengan
                                                                        owner).
                                                                        Jika anda belum menemukan kesepakatan anda bisa
                                                                        close
                                                                        bidding kapan saja.</div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary me-auto"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a type="button" class="btn btn-success"
                                                                            href="https://server.sengketatanah.id/login">Login</a>
                                                                        <a type="button" class="btn btn-danger"
                                                                            href="https://server.sengketatanah.id/login">Register</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3 custom text-start">
                                    <button class="btn btn-sm">
                                        <div class="row p-4">
                                            <div class="col-md-12">
                                                <span class="fa-stack fa-2x">
                                                    <i class="fa fa-circle fa-stack-2x text-brown"></i>
                                                    <i class="fa-solid fa-arrow-right fa-stack-1x text-white"></i>
                                                </span>
                                            </div>
                                            <div class="col-md-12 mt-1 fw-bold">
                                                Lihat Semua
                                            </div>
                                        </div>
                                    </button>
                                </div>

                            </div>
                        </div>

                    </div>

                    <script>
                        $('#right-button-bid-lahan').click(function () {
                            event.preventDefault();


                            $('div.bidding-card-a').animate({
                                scrollLeft: "+=300px"
                            }, "slow");

                            let outerWidth = Math.floor($('div.bidding-card-a').outerWidth())
                            let scrollWidth = Math.floor($('div.bidding-card-a')[0].scrollWidth)
                            let scrollLeft = Math.floor($('div.bidding-card-a').scrollLeft())
                            if ((outerWidth - scrollWidth) + scrollLeft == 0) {
                                $('div.bidding-card-a2').animate({
                                    scrollLeft: "+=300px"
                                }, "slow")

                            }
                        });

                        $('#left-button-bid-lahan').click(function () {
                            event.preventDefault();

                            if ($('div.bidding-card-a2').scrollLeft() > 0) {
                                $('div.bidding-card-a2').animate({
                                    scrollLeft: "-=300px"
                                }, "slow");
                            } else {
                                $('div.bidding-card-a').animate({
                                    scrollLeft: "-=300px"
                                }, "slow");
                            }

                        });

                    </script>


                </div>

            </div>

            <!-- orang kotak ukur -->  
            <div class="card mt-4 border-0 ">
                <div class="card-body">
                    <div class="mt-2 ">
                    
                        <div class="row justify-content-center align-items-center">
                        
                        
                            <div class="col-1 arrow-desktop text-center">
                                <button id="left-orang" class="btn rounded-5 text-white bg-secondary"
                                    style="background-color: #61481C">
                                    <i class="fa-solid fa-arrow-left"></i>
                                </button>
                            </div>
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col mobile-scroll" id='orang-bulet'
                                        style="white-space:nowrap;flex-wrap:nowarp;display:flex">
                                
                                        <?php
                                                    $name = [
                                                        "Rudi H.",
                                                        "Budi K.",
                                                        "Joko Afdal",
                                                        "Ustman A.",
                                                        "Robert K.",
                                                        "James Tate", "Hadi Ismail", 'Abdullah', 'Nugraha D.', 'Ade Syarief', "Adhi Utomo", 'Leman wan', 'Pranoto Adi', 'Agus Susan'
                                                    ];
                                                    ?>
                                        <button
                                            class="container-gambar mb-0 text-center p-1 me-1 text-decoration-none border-0 bg-white me-2">
                                            <img src="data:image/png;base64,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"
                                                alt="" srcset="" class="rounded-circle img-thumbnail "
                                                style="width:70px;height:70px;object-fit:cover;background:#61481C"> <br>
                                            Petugas Ukur
                                        </button>
                                        @for($i=0;$i< 14;$i++)<form action="{{url('')}}/detail-main-petugas" method="get"
                                            id="form-ukur-{{$i}}">
                                            <input type="hidden" name="name" value="{{$name[$i]}}">
                                            <input type="hidden" name="img"
                                                value="https://randomuser.me/api/portraits/men/{{$i}}.jpg">
                                            <input type="hidden" name="jenis_petugas" value="Petugas Ukur">
                                            </form>
                                            <button
                                                class=" mb-0 container-gambar text-center p-1 me-1 text-decoration-none border-0 bg-white"
                                                onclick="return  $('form#form-ukur-<?= $i ?>').submit()"
                                                style='display: inline-block;flex: 0 0 auto'>
                                                <img src="https://randomuser.me/api/portraits/men/{{$i}}.jpg" alt="" srcset=""
                                                    class="rounded-circle img-thumbnail "
                                                    style="width:70px !important;height:70px;object-fit:cover;"> <br>
                                                {{$name[$i]}}
                                            </button>
                                        
                                            @endfor
                                            <a href="{{url('')}}/jasa-tukang-ukur"
                                                class="container-gambar mb-0 text-center p-1 me-1 text-decoration-none border-0 bg-white me-2">
                                                <img src="data:image/png;base64,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"
                                                    alt="" srcset="" class="rounded-circle img-thumbnail "
                                                    style="width:70px;height:70px;object-fit:cover;background-color:#007bff">
                                                <br>
                                                Lihat Semua
                                            </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1 arrow-desktop text-center">
                                <button id="right-orang" class="btn rounded-5 text-white bg-secondary"
                                    style="background-color: #61481C">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </div>
                        
                            <script>
                                $('#right-orang').click(function () {
                                    event.preventDefault();
                                    $('#orang-bulet').animate({
                                        scrollLeft: "+=300px"
                                    }, "slow");
                                });
                            
                                $('#left-orang').click(function () {
                                    event.preventDefault();
                                    $('#orang-bulet').animate({
                                        scrollLeft: "-=300px"
                                    }, "slow");
                                });
                            
                            </script>
                        </div>
                    
                    
                    </div>
                </div>
            </div>

            <!-- Bidding Tanah -->
            <div class="card mt-3 border-0 shadow-sm ">

                <div class="card-body bg-card-dark-mode">

                    <div class="row align-items-center justify-content-center">


                        <div class="col-12 desktop-arrow text-center">
                            <div class="row mobile-scroll mt-2 align-items-center bidding-card-a"
                                style="flex-wrap: nowrap">

                                <div class="col-12 custom ">
                                    <div class="card mx-auto">
                                        <div class="ribbon-pop">
                                            <i class="fa-solid fa-star"></i>&nbsp;HOT
                                        </div>
                                        <div class="share-icon">
                                            <button class="btn btn-sm text-white rounded-5"
                                                style="background: rgba(0, 0, 0, 0.5)">
                                                <i class="fa-solid fa-share-from-square"></i>
                                            </button>
                                        </div>
                                        <div id="ll4" class="carousel slide" data-bs-interval="false">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#ll4" data-bs-slide-to="0"
                                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#ll4" data-bs-slide-to="1"
                                                    aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#ll4" data-bs-slide-to="2"
                                                    aria-label="Slide 3"></button>
                                                <button type="button" data-bs-target="#ll4" data-bs-slide-to="3"
                                                    aria-label="Slide 4"></button>
                                            </div>

                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('')}}images/lahan1.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan1.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan2.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan2.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan3.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan3.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev opacity-90 text-dark" type="button"
                                                data-bs-target="#ll4" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next opacity-90 text-dark" type="button"
                                                data-bs-target="#ll4" data-bs-slide="next">
                                                <span class="carousel-control-next-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <h5 class="mb-0 text-center">Kode Bidang BL-004 <img
                                                            src="https://sengketatanah.id/uploads/biru_centang.png"
                                                            alt="" class="mb-1" style="height:20px"></h5>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="card-body pt-0">
                                            <table class="mt-2 mb-2">
                                                <tr>
                                                    <td>
                                                        <b>Nilai Pinjaman :</b>
                                                    </td>

                                                    <td rowspan="2">
                                                        <div class="d-flex align-items-center">

                                                            <a id="fav-c1 my-auto" style="margin-right: 10px">
                                                                <h5 class="mb-0 text-fav-disable" id="fav-ch-c1">
                                                                    <i class="fas fa-star"></i>
                                                                </h5>
                                                            </a>
                                                            <button
                                                                class="btn float-end btn-brown text-white mb-0 my-auto w-100"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID</button>
                                                        </div>


                                                        <script>
                                                            $("#fav-c1").click(function () {
                                                                $("#fav-ch-c1").toggleClass('fav-icon');
                                                            });

                                                        </script>


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">
                                                        <h5 class="mb-0">
                                                            <b class="text-primary">
                                                                Rp.450.000.000
                                                            </b>
                                                        </h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="fw-bold">
                                                            Fee : 30%
                                                        </h5>
                                                    </td>
                                                </tr>
                                            </table>
                                            <hr style="margin-top:-4px">

                                            <table>
                                                <tbody>
                                                    </tr>

                                                    <td>Lokasi</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;Pancawati, Bogor</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Luas</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;1 Ha</td>
                                                    </tr>
                                                    <tr>

                                                        <td>Objek Tanah</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Tanah Darat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nilai ZNT BPN</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;750.000/meter</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penawaran</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Open Bidding</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Jumlah Bid</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;3</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>


                                            <div class="row g-0">
                                                <div class="col text-start">

                                                    <a href="#" class="  mx-auto rounded-5" data-bs-toggle="modal"
                                                        data-bs-target="#modal-lihat-lahan"
                                                        style="text-decoration:none">
                                                        <i class="fa-solid fa-eye"></i> Lihat Detail
                                                    </a>


                                                    <div class="modal fade my-auto text-center" id="berkasC"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header p-0">
                                                                    <h1
                                                                        class="modal-title mx-auto text-danger display-1">
                                                                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                            style="width: 100px" alt="">
                                                                    </h1>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda harus memiliki akun peserta lelang sebelum
                                                                    melihat
                                                                    detail.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary me-auto"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <a type="button" class="btn btn-success"
                                                                        href="https://server.sengketatanah.id/login">Login</a>
                                                                    <a type="button" class="btn btn-danger"
                                                                        href="https://server.sengketatanah.id/login">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <form action="{{url('')}}/bid-sengketa/podcast" class="form-sengketa1"
                                                method="get">
                                                <input type="hidden" name="owner" value=" Bahru">
                                                <input type="hidden" name="objek" value=" Sengketa Pertanahan">
                                                <input type="hidden" name="luas" value=" 1 Ha">
                                                <input type="hidden" name="lokasi" value=" Pancawati, Bogor">
                                                <input type="hidden" name="komentar" value="">
                                                <input type="hidden" name="link_yt"
                                                    value="https://www.youtube.com/embed/-RkCcavzXq8">
                                                <input type="hidden" name="form" value="sponsor">
                                            </form>


                                            <hr>
                                            <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                <div class="col-4">

                                                    <div class="d-grid gap-2 ">

                                                        <!-- <button type="button"
                                                    class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                    data-bs-toggle="modal" data-bs-target="#exampleC">
                                                    BID
                                                </button> -->


                                                        <div class="modal fade my-auto" id="exampleC" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                                class="mb-2" style="width: 100px"
                                                                                alt="">
                                                                        </h1>
                                                                    </div>
                                                                    <div class="modal-body" style="text-align: justify">

                                                                        Anda harus memiliki akun <b>LENDER</b> sebelum
                                                                        melakukan
                                                                        Bid (Bid adalah proses penawaran anda dengan
                                                                        owner).
                                                                        Jika anda belum menemukan kesepakatan anda bisa
                                                                        close
                                                                        bidding kapan saja.
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary me-auto"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a type="button" class="btn btn-success"
                                                                            href="https://server.sengketatanah.id/login">Login</a>
                                                                        <a type="button" class="btn btn-danger"
                                                                            href="https://server.sengketatanah.id/login">Register</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>

                                <div class="col-12 custom">
                                    <div class="card mb-2 mx-auto">
                                        <div class="ribbon-pop">
                                            <i class="fa-solid fa-star"></i>&nbsp;HOT
                                        </div>
                                        <div class="share-icon">
                                            <button class="btn btn-sm text-white rounded-5"
                                                style="background: rgba(0, 0, 0, 0.5)">
                                                <i class="fa-solid fa-share-from-square"></i>
                                            </button>
                                        </div>
                                        <div id="ll2" class="carousel slide" data-bs-interval="false">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#ll2" data-bs-slide-to="0"
                                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#ll2" data-bs-slide-to="1"
                                                    aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#ll2" data-bs-slide-to="2"
                                                    aria-label="Slide 3"></button>
                                                <button type="button" data-bs-target="#ll2" data-bs-slide-to="3"
                                                    aria-label="Slide 4"></button>
                                            </div>

                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('')}}images/lahan2.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan2.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan1.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan1.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan3.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan3.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev opacity-90 text-dark" type="button"
                                                data-bs-target="#ll2" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next opacity-90 text-dark" type="button"
                                                data-bs-target="#ll2" data-bs-slide="next">
                                                <span class="carousel-control-next-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <h5 class="mb-0 text-center">Kode Bidang BL-001 <img
                                                            src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                            class="mb-1" style="height:20px"></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body pt-0">
                                            <table class="mt-2 mb-2">
                                                <tr>
                                                    <td>
                                                        <b>Nilai Pinjaman :</b>
                                                    </td>

                                                    <td rowspan="2">
                                                        <div class="d-flex align-items-center">

                                                            <a id="fav-c1 my-auto" style="margin-right: 10px">
                                                                <h5 class="mb-0 text-fav-disable" id="fav-ch-c1">
                                                                    <i class="fas fa-star"></i>
                                                                </h5>
                                                            </a>
                                                            <button
                                                                class="btn float-end btn-brown text-white mb-0 my-auto w-100"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID</button>
                                                        </div>


                                                        <script>
                                                            $("#fav-c1").click(function () {
                                                                $("#fav-ch-c1").toggleClass('fav-icon');
                                                            });

                                                        </script>


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">
                                                        <h5 class="mb-0">
                                                            <b class="text-primary">
                                                                Rp.500.000.000
                                                            </b>
                                                        </h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="fw-bold">
                                                            Fee : 30%
                                                        </h5>
                                                    </td>
                                                </tr>
                                            </table>
                                            <hr style="margin-top:-4px">


                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Lokasi</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Pancawati, Bogor</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Luas</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;5000 M</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Objek Tanah</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Tanah Darat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nilai ZNT BPN</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;750.000/meter</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penawaran</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Open Bidding</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah Bid</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;4</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>



                                            <div class="row g-0">
                                                <div class="col text-start">

                                                    <a href="#" class="  mx-auto rounded-5" data-bs-toggle="modal"
                                                        data-bs-target="#modal-lihat-lahan"
                                                        style="text-decoration:none">
                                                        <i class="fa-solid fa-eye"></i> Lihat Detail
                                                    </a>


                                                    <div class="modal fade my-auto text-center" id="berkasC"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header p-0">
                                                                    <h1
                                                                        class="modal-title mx-auto text-danger display-1">
                                                                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                            style="width: 100px" alt="">
                                                                    </h1>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda harus memiliki akun peserta lelang sebelum
                                                                    melihat detail.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary me-auto"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <a type="button" class="btn btn-success"
                                                                        href="https://server.sengketatanah.id/login">Login</a>
                                                                    <a type="button" class="btn btn-danger"
                                                                        href="https://server.sengketatanah.id/login">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <form action="{{url('')}}/bid-sengketa/podcast" class="form-sengketa2"
                                                method="get">
                                                <input type="hidden" name="owner" value=" Fatah">
                                                <input type="hidden" name="objek" value=" Konflik Pertanahan">
                                                <input type="hidden" name="luas" value=" 5000 M">
                                                <input type="hidden" name="lokasi" value=" Pancawati, Bogor">
                                                <input type="hidden" name="komentar" value="">
                                                <input type="hidden" name="link_yt"
                                                    value="https://www.youtube.com/embed/byby3HJ3OCI">
                                                <input type="hidden" name="form" value="sponsor">
                                            </form>


                                            <hr>
                                            <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                <div class="col-4">

                                                    <div class="d-grid gap-2 ">

                                                        <!-- <button type="button"
                                                    class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                    data-bs-toggle="modal" data-bs-target="#exampleC">
                                                    BID
                                                </button> -->


                                                        <div class="modal fade my-auto" id="exampleC" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                                class="mb-2" style="width: 100px"
                                                                                alt="">
                                                                        </h1>
                                                                    </div>
                                                                    <div class="modal-body" style="text-align: justify">

                                                                        Anda harus memiliki akun <b>LENDER</b> sebelum
                                                                        melakukan
                                                                        Bid (Bid adalah proses penawaran anda dengan
                                                                        owner).
                                                                        Jika anda belum menemukan kesepakatan anda bisa
                                                                        close
                                                                        bidding kapan saja.</div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary me-auto"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a type="button" class="btn btn-success"
                                                                            href="https://server.sengketatanah.id/login">Login</a>
                                                                        <a type="button" class="btn btn-danger"
                                                                            href="https://server.sengketatanah.id/login">Register</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 custom">
                                    <div class="card mb-2 mx-auto">
                                        <div class="ribbon-pop">
                                            <i class="fa-solid fa-star"></i>&nbsp;HOT
                                        </div>
                                        <div class="share-icon">
                                            <button class="btn btn-sm text-white rounded-5"
                                                style="background: rgba(0, 0, 0, 0.5)">
                                                <i class="fa-solid fa-share-from-square"></i>
                                            </button>
                                        </div>
                                        <div id="ll3" class="carousel slide" data-bs-interval="false">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#ll3" data-bs-slide-to="0"
                                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#ll3" data-bs-slide-to="1"
                                                    aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#ll3" data-bs-slide-to="2"
                                                    aria-label="Slide 3"></button>
                                                <button type="button" data-bs-target="#ll3" data-bs-slide-to="3"
                                                    aria-label="Slide 4"></button>
                                            </div>

                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('')}}images/lahan3.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan3.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan1.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan1.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan2.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan2.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev opacity-90 text-dark" type="button"
                                                data-bs-target="#ll3" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next opacity-90 text-dark" type="button"
                                                data-bs-target="#ll3" data-bs-slide="next">
                                                <span class="carousel-control-next-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <h5 class="mb-0 text-center">Kode Bidang BL-002 <img
                                                            src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                            class="mb-1" style="height:20px"></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body pt-0">
                                            <table class="mt-2 mb-2">
                                                <tr>
                                                    <td>
                                                        <b>Nilai Pinjaman :</b>
                                                    </td>

                                                    <td rowspan="2">
                                                        <div class="d-flex align-items-center">

                                                            <a id="fav-c1 my-auto" style="margin-right: 10px">
                                                                <h5 class="mb-0 text-fav-disable" id="fav-ch-c1">
                                                                    <i class="fas fa-star"></i>
                                                                </h5>
                                                            </a>
                                                            <button
                                                                class="btn float-end btn-brown text-white mb-0 my-auto w-100"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID</button>
                                                        </div>


                                                        <script>
                                                            $("#fav-c1").click(function () {
                                                                $("#fav-ch-c1").toggleClass('fav-icon');
                                                            });

                                                        </script>


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">
                                                        <h5 class="mb-0">
                                                            <b class="text-primary">
                                                                Rp.100.000.000
                                                            </b>
                                                        </h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="fw-bold">
                                                            Fee : 30%
                                                        </h5>
                                                    </td>
                                                </tr>
                                            </table>
                                            <hr style="margin-top:-4px">

                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Lokasi</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Medan, Sumatra Utara</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Luas</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;3.2 Ha</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Objek Tanah</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Tanah Darat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nilai ZNT BPN</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;750.000/meter</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penawaran</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Open Bidding</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah Bid</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;6</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>



                                            <div class="row g-0">
                                                <div class="col text-start">

                                                    <a href="#" class="  mx-auto rounded-5" data-bs-toggle="modal"
                                                        data-bs-target="#modal-lihat-lahan"
                                                        style="text-decoration:none">
                                                        <i class="fa-solid fa-eye"></i> Lihat Detail
                                                    </a>


                                                    <div class="modal fade my-auto text-center" id="berkasC"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header p-0">
                                                                    <h1
                                                                        class="modal-title mx-auto text-danger display-1">
                                                                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                            style="width: 100px" alt="">
                                                                    </h1>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda harus memiliki akun peserta lelang sebelum
                                                                    melihat
                                                                    detail.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary me-auto"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <a type="button" class="btn btn-success"
                                                                        href="https://server.sengketatanah.id/login">Login</a>
                                                                    <a type="button" class="btn btn-danger"
                                                                        href="https://server.sengketatanah.id/login">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <form action="{{url('')}}/bid-sengketa/podcast" class="form-sengketa3"
                                                method="get">
                                                <input type="hidden" name="owner" value=" Ophelia Suartini">
                                                <input type="hidden" name="objek" value=" Perkara Pertanahan">
                                                <input type="hidden" name="luas" value=" 3.2 Ha">
                                                <input type="hidden" name="lokasi" value=" Medan, Sumatra Utara">
                                                <input type="hidden" name="komentar" value="">
                                                <input type="hidden" name="link_yt"
                                                    value="https://www.youtube.com/embed/1I4iEKK1qbQ">
                                                <input type="hidden" name="form" value="sponsor">
                                            </form>


                                            <hr>
                                            <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                <div class="col-4">

                                                    <div class="d-grid gap-2 ">
                                                        <!-- <button type="button"
                                                                class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID
                                                            </button> -->


                                                        <div class="modal fade my-auto" id="exampleC" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                                class="mb-2" style="width: 100px"
                                                                                alt="">
                                                                        </h1>
                                                                    </div>
                                                                    <div class="modal-body" style="text-align: justify">

                                                                        Anda harus memiliki akun <b>LENDER</b> sebelum
                                                                        melakukan
                                                                        Bid (Bid adalah proses penawaran anda dengan
                                                                        owner).
                                                                        Jika anda belum menemukan kesepakatan anda bisa
                                                                        close
                                                                        bidding kapan saja.</div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary me-auto"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a type="button" class="btn btn-success"
                                                                            href="https://server.sengketatanah.id/login">Login</a>
                                                                        <a type="button" class="btn btn-danger"
                                                                            href="https://server.sengketatanah.id/login">Register</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 custom">
                                    <div class="card mb-2 mx-auto">
                                        <div class="ribbon-pop">
                                            <i class="fa-solid fa-star"></i>&nbsp;HOT
                                        </div>
                                        <div class="share-icon">
                                            <button class="btn btn-sm text-white rounded-5"
                                                style="background: rgba(0, 0, 0, 0.5)">
                                                <i class="fa-solid fa-share-from-square"></i>
                                            </button>
                                        </div>
                                        <div id="ll44" class="carousel slide" data-bs-interval="false">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#ll44" data-bs-slide-to="0"
                                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#ll44" data-bs-slide-to="1"
                                                    aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#ll44" data-bs-slide-to="2"
                                                    aria-label="Slide 3"></button>
                                                <button type="button" data-bs-target="#ll44" data-bs-slide-to="3"
                                                    aria-label="Slide 4"></button>
                                            </div>

                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan3.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan3.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan1.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan1.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev opacity-90 text-dark" type="button"
                                                data-bs-target="#ll44" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next opacity-90 text-dark" type="button"
                                                data-bs-target="#ll44" data-bs-slide="next">
                                                <span class="carousel-control-next-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <h5 class="mb-0 text-center">Kode Bidang BL-003 <img
                                                            src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                            class="mb-1" style="height:20px"></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body pt-0">
                                            <table class="mt-2 mb-2">
                                                <tr>
                                                    <td>
                                                        <b>Nilai Pinjaman :</b>
                                                    </td>

                                                    <td rowspan="2">
                                                        <div class="d-flex align-items-center">

                                                            <a id="fav-c1 my-auto" style="margin-right: 10px">
                                                                <h5 class="mb-0 text-fav-disable" id="fav-ch-c1">
                                                                    <i class="fas fa-star"></i>
                                                                </h5>
                                                            </a>
                                                            <button
                                                                class="btn float-end btn-brown text-white mb-0 my-auto w-100"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID</button>
                                                        </div>


                                                        <script>
                                                            $("#fav-c1").click(function () {
                                                                $("#fav-ch-c1").toggleClass('fav-icon');
                                                            });

                                                        </script>


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">
                                                        <h5 class="mb-0">
                                                            <b class="text-primary">
                                                                Rp.200.000.000
                                                            </b>
                                                        </h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="fw-bold">
                                                            Fee : 30%
                                                        </h5>
                                                    </td>
                                                </tr>
                                            </table>
                                            <hr style="margin-top:-4px">

                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Lokasi</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Medan, Sumatra Utara</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Luas</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;3.2 Ha</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Objek Tanah</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Tanah Darat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nilai ZNT BPN</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;750.000/meter</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penawaran</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Open Bidding</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah Bid</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;6</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>


                                            <div class="row g-0">
                                                <div class="col text-start">

                                                    <a href="#" class="  mx-auto rounded-5" data-bs-toggle="modal"
                                                        data-bs-target="#modal-lihat-lahan"
                                                        style="text-decoration:none">
                                                        <i class="fa-solid fa-eye"></i> Lihat Detail
                                                    </a>


                                                    <div class="modal fade my-auto text-center" id="berkasC"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header p-0">
                                                                    <h1
                                                                        class="modal-title mx-auto text-danger display-1">
                                                                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                            style="width: 100px" alt="">
                                                                    </h1>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda harus memiliki akun peserta lelang sebelum
                                                                    melihat
                                                                    detail.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary me-auto"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <a type="button" class="btn btn-success"
                                                                        href="https://server.sengketatanah.id/login">Login</a>
                                                                    <a type="button" class="btn btn-danger"
                                                                        href="https://server.sengketatanah.id/login">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <form action="{{url('')}}/bid-sengketa/podcast" class="form-sengketa3"
                                                method="get">
                                                <input type="hidden" name="owner" value=" Ophelia Suartini">
                                                <input type="hidden" name="objek" value=" Perkara Pertanahan">
                                                <input type="hidden" name="luas" value=" 3.2 Ha">
                                                <input type="hidden" name="lokasi" value=" Medan, Sumatra Utara">
                                                <input type="hidden" name="komentar" value="">
                                                <input type="hidden" name="link_yt"
                                                    value="https://www.youtube.com/embed/1I4iEKK1qbQ">
                                                <input type="hidden" name="form" value="sponsor">
                                            </form>


                                            <hr>
                                            <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                <div class="col-4">

                                                    <div class="d-grid gap-2 ">
                                                        <!-- <button type="button"
                                                    class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                    data-bs-toggle="modal" data-bs-target="#exampleC">
                                                    BID
                                                </button> -->


                                                        <div class="modal fade my-auto" id="exampleC" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                                class="mb-2" style="width: 100px"
                                                                                alt="">
                                                                        </h1>
                                                                    </div>
                                                                    <div class="modal-body" style="text-align: justify">

                                                                        Anda harus memiliki akun <b>LENDER</b> sebelum
                                                                        melakukan
                                                                        Bid (Bid adalah proses penawaran anda dengan
                                                                        owner).
                                                                        Jika anda belum menemukan kesepakatan anda bisa
                                                                        close
                                                                        bidding kapan saja.</div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary me-auto"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a type="button" class="btn btn-success"
                                                                            href="https://server.sengketatanah.id/login">Login</a>
                                                                        <a type="button" class="btn btn-danger"
                                                                            href="https://server.sengketatanah.id/login">Register</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="row align-items-center justify-content-center">

                        <div class="col-12 desktop-arrow text-center">
                            <div class="row mobile-scroll mt-2 align-items-center bidding-card-a2"
                                style="flex-wrap: nowrap">

                                <div class="col-12 custom ">
                                    <div class="card mx-auto">
                                        <div class="ribbon-pop">
                                            <i class="fa-solid fa-star"></i>&nbsp;HOT
                                        </div>
                                        <div class="share-icon">
                                            <button class="btn btn-sm text-white rounded-5"
                                                style="background: rgba(0, 0, 0, 0.5)">
                                                <i class="fa-solid fa-share-from-square"></i>
                                            </button>
                                        </div>
                                        <div id="ll4a" class="carousel slide" data-bs-interval="false">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#ll4a" data-bs-slide-to="0"
                                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#ll4a" data-bs-slide-to="1"
                                                    aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#ll4a" data-bs-slide-to="2"
                                                    aria-label="Slide 3"></button>
                                                <button type="button" data-bs-target="#ll4a" data-bs-slide-to="3"
                                                    aria-label="Slide 4"></button>
                                            </div>

                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('')}}images/lahan1.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan1.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan2.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan2.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan3.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan3.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev opacity-90 text-dark" type="button"
                                                data-bs-target="#ll4a" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next opacity-90 text-dark" type="button"
                                                data-bs-target="#ll4a" data-bs-slide="next">
                                                <span class="carousel-control-next-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <h5 class="mb-0 text-center">Kode Bidang BL-004 <img
                                                            src="https://sengketatanah.id/uploads/biru_centang.png"
                                                            alt="" class="mb-1" style="height:20px"></h5>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="card-body pt-0">
                                            <table class="mt-2 mb-2">
                                                <tr>
                                                    <td>
                                                        <b>Nilai Pinjaman :</b>
                                                    </td>

                                                    <td rowspan="2">
                                                        <div class="d-flex align-items-center">

                                                            <a id="fav-c1 my-auto" style="margin-right: 10px">
                                                                <h5 class="mb-0 text-fav-disable" id="fav-ch-c1">
                                                                    <i class="fas fa-star"></i>
                                                                </h5>
                                                            </a>
                                                            <button
                                                                class="btn float-end btn-brown text-white mb-0 my-auto w-100"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID</button>
                                                        </div>


                                                        <script>
                                                            $("#fav-c1").click(function () {
                                                                $("#fav-ch-c1").toggleClass('fav-icon');
                                                            });

                                                        </script>


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">
                                                        <h5 class="mb-0">
                                                            <b class="text-primary">
                                                                Rp.450.000.000
                                                            </b>
                                                        </h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="fw-bold">
                                                            Fee : 30%
                                                        </h5>
                                                    </td>
                                                </tr>
                                            </table>
                                            <hr style="margin-top:-4px">

                                            <table>
                                                <tbody>
                                                    </tr>

                                                    <td>Lokasi</td>
                                                    <td></td>
                                                    <td>:</td>
                                                    <td>&nbsp;Pancawati, Bogor</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Luas</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;1 Ha</td>
                                                    </tr>
                                                    <tr>

                                                        <td>Objek Tanah</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Tanah Darat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nilai ZNT BPN</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;750.000/meter</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penawaran</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Open Bidding</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Jumlah Bid</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;3</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>


                                            <div class="row g-0">
                                                <div class="col text-start">

                                                    <a href="#" class="  mx-auto rounded-5" data-bs-toggle="modal"
                                                        data-bs-target="#modal-lihat-lahan"
                                                        style="text-decoration:none">
                                                        <i class="fa-solid fa-eye"></i> Lihat Detail
                                                    </a>


                                                    <div class="modal fade my-auto text-center" id="berkasC"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header p-0">
                                                                    <h1
                                                                        class="modal-title mx-auto text-danger display-1">
                                                                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                            style="width: 100px" alt="">
                                                                    </h1>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda harus memiliki akun peserta lelang sebelum
                                                                    melihat
                                                                    detail.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary me-auto"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <a type="button" class="btn btn-success"
                                                                        href="https://server.sengketatanah.id/login">Login</a>
                                                                    <a type="button" class="btn btn-danger"
                                                                        href="https://server.sengketatanah.id/login">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <form action="{{url('')}}/bid-sengketa/podcast" class="form-sengketa1"
                                                method="get">
                                                <input type="hidden" name="owner" value=" Bahru">
                                                <input type="hidden" name="objek" value=" Sengketa Pertanahan">
                                                <input type="hidden" name="luas" value=" 1 Ha">
                                                <input type="hidden" name="lokasi" value=" Pancawati, Bogor">
                                                <input type="hidden" name="komentar" value="">
                                                <input type="hidden" name="link_yt"
                                                    value="https://www.youtube.com/embed/-RkCcavzXq8">
                                                <input type="hidden" name="form" value="sponsor">
                                            </form>


                                            <hr>
                                            <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                <div class="col-4">

                                                    <div class="d-grid gap-2 ">

                                                        <!-- <button type="button"
                                                    class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                    data-bs-toggle="modal" data-bs-target="#exampleC">
                                                    BID
                                                </button> -->


                                                        <div class="modal fade my-auto" id="exampleC" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                                class="mb-2" style="width: 100px"
                                                                                alt="">
                                                                        </h1>
                                                                    </div>
                                                                    <div class="modal-body" style="text-align: justify">

                                                                        Anda harus memiliki akun <b>LENDER</b> sebelum
                                                                        melakukan
                                                                        Bid (Bid adalah proses penawaran anda dengan
                                                                        owner).
                                                                        Jika anda belum menemukan kesepakatan anda bisa
                                                                        close
                                                                        bidding kapan saja.</div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary me-auto"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a type="button" class="btn btn-success"
                                                                            href="https://server.sengketatanah.id/login">Login</a>
                                                                        <a type="button" class="btn btn-danger"
                                                                            href="https://server.sengketatanah.id/login">Register</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>

                                <div class="col-12 custom">
                                    <div class="card mb-2 mx-auto">
                                        <div class="ribbon-pop">
                                            <i class="fa-solid fa-star"></i>&nbsp;HOT
                                        </div>
                                        <div class="share-icon">
                                            <button class="btn btn-sm text-white rounded-5"
                                                style="background: rgba(0, 0, 0, 0.5)">
                                                <i class="fa-solid fa-share-from-square"></i>
                                            </button>
                                        </div>
                                        <div id="ll2a" class="carousel slide" data-bs-interval="false">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#ll2a" data-bs-slide-to="0"
                                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#ll2a" data-bs-slide-to="1"
                                                    aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#ll2a" data-bs-slide-to="2"
                                                    aria-label="Slide 3"></button>
                                                <button type="button" data-bs-target="#ll2a" data-bs-slide-to="3"
                                                    aria-label="Slide 4"></button>
                                            </div>

                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('')}}images/lahan2.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan2.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan1.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan1.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan3.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan3.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev opacity-90 text-dark" type="button"
                                                data-bs-target="#ll2a" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next opacity-90 text-dark" type="button"
                                                data-bs-target="#ll2a" data-bs-slide="next">
                                                <span class="carousel-control-next-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <h5 class="mb-0 text-center">Kode Bidang BL-001 <img
                                                            src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                            class="mb-1" style="height:20px"></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body pt-0">
                                            <table class="mt-2 mb-2">
                                                <tr>
                                                    <td>
                                                        <b>Nilai Pinjaman :</b>
                                                    </td>

                                                    <td rowspan="2">
                                                        <div class="d-flex align-items-center">

                                                            <a id="fav-c1 my-auto" style="margin-right: 10px">
                                                                <h5 class="mb-0 text-fav-disable" id="fav-ch-c1">
                                                                    <i class="fas fa-star"></i>
                                                                </h5>
                                                            </a>
                                                            <button
                                                                class="btn float-end btn-brown text-white mb-0 my-auto w-100"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID</button>
                                                        </div>


                                                        <script>
                                                            $("#fav-c1").click(function () {
                                                                $("#fav-ch-c1").toggleClass('fav-icon');
                                                            });

                                                        </script>


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">
                                                        <h5 class="mb-0">
                                                            <b class="text-primary">
                                                                Rp.500.000.000
                                                            </b>
                                                        </h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="fw-bold">
                                                            Fee : 30%
                                                        </h5>
                                                    </td>
                                                </tr>
                                            </table>
                                            <hr style="margin-top:-4px">


                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Lokasi</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Pancawati, Bogor</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Luas</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;5000 M</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Objek Tanah</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Tanah Darat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nilai ZNT BPN</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;750.000/meter</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penawaran</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Open Bidding</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah Bid</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;4</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>



                                            <div class="row g-0">
                                                <div class="col text-start">

                                                    <a href="#" class="  mx-auto rounded-5" data-bs-toggle="modal"
                                                        data-bs-target="#modal-lihat-lahan"
                                                        style="text-decoration:none">
                                                        <i class="fa-solid fa-eye"></i> Lihat Detail
                                                    </a>


                                                    <div class="modal fade my-auto text-center" id="berkasC"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header p-0">
                                                                    <h1
                                                                        class="modal-title mx-auto text-danger display-1">
                                                                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                            style="width: 100px" alt="">
                                                                    </h1>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda harus memiliki akun peserta lelang sebelum
                                                                    melihat detail.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary me-auto"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <a type="button" class="btn btn-success"
                                                                        href="https://server.sengketatanah.id/login">Login</a>
                                                                    <a type="button" class="btn btn-danger"
                                                                        href="https://server.sengketatanah.id/login">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <form action="{{url('')}}/bid-sengketa/podcast" class="form-sengketa2"
                                                method="get">
                                                <input type="hidden" name="owner" value=" Fatah">
                                                <input type="hidden" name="objek" value=" Konflik Pertanahan">
                                                <input type="hidden" name="luas" value=" 5000 M">
                                                <input type="hidden" name="lokasi" value=" Pancawati, Bogor">
                                                <input type="hidden" name="komentar" value="">
                                                <input type="hidden" name="link_yt"
                                                    value="https://www.youtube.com/embed/byby3HJ3OCI">
                                                <input type="hidden" name="form" value="sponsor">
                                            </form>


                                            <hr>
                                            <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                <div class="col-4">

                                                    <div class="d-grid gap-2 ">

                                                        <!-- <button type="button"
                                                    class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                    data-bs-toggle="modal" data-bs-target="#exampleC">
                                                    BID
                                                </button> -->


                                                        <div class="modal fade my-auto" id="exampleC" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                                class="mb-2" style="width: 100px"
                                                                                alt="">
                                                                        </h1>
                                                                    </div>
                                                                    <div class="modal-body" style="text-align: justify">

                                                                        Anda harus memiliki akun <b>LENDER</b> sebelum
                                                                        melakukan
                                                                        Bid (Bid adalah proses penawaran anda dengan
                                                                        owner).
                                                                        Jika anda belum menemukan kesepakatan anda bisa
                                                                        close
                                                                        bidding kapan saja.</div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary me-auto"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a type="button" class="btn btn-success"
                                                                            href="https://server.sengketatanah.id/login">Login</a>
                                                                        <a type="button" class="btn btn-danger"
                                                                            href="https://server.sengketatanah.id/login">Register</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 custom">
                                    <div class="card mb-2 mx-auto">
                                        <div class="ribbon-pop">
                                            <i class="fa-solid fa-star"></i>&nbsp;HOT
                                        </div>
                                        <div class="share-icon">
                                            <button class="btn btn-sm text-white rounded-5"
                                                style="background: rgba(0, 0, 0, 0.5)">
                                                <i class="fa-solid fa-share-from-square"></i>
                                            </button>
                                        </div>
                                        <div id="ll3a" class="carousel slide" data-bs-interval="false">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#ll3a" data-bs-slide-to="0"
                                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#ll3a" data-bs-slide-to="1"
                                                    aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#ll3a" data-bs-slide-to="2"
                                                    aria-label="Slide 3"></button>
                                                <button type="button" data-bs-target="#ll3a" data-bs-slide-to="3"
                                                    aria-label="Slide 4"></button>
                                            </div>

                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('')}}images/lahan3.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan3.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan1.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan1.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan2.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan2.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev opacity-90 text-dark" type="button"
                                                data-bs-target="#ll3a" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next opacity-90 text-dark" type="button"
                                                data-bs-target="#ll3a" data-bs-slide="next">
                                                <span class="carousel-control-next-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <h5 class="mb-0 text-center">Kode Bidang BL-002 <img
                                                            src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                            class="mb-1" style="height:20px"></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body pt-0">
                                            <table class="mt-2 mb-2">
                                                <tr>
                                                    <td>
                                                        <b>Nilai Pinjaman :</b>
                                                    </td>

                                                    <td rowspan="2">
                                                        <div class="d-flex align-items-center">

                                                            <a id="fav-c1 my-auto" style="margin-right: 10px">
                                                                <h5 class="mb-0 text-fav-disable" id="fav-ch-c1">
                                                                    <i class="fas fa-star"></i>
                                                                </h5>
                                                            </a>
                                                            <button
                                                                class="btn float-end btn-brown text-white mb-0 my-auto w-100"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID</button>
                                                        </div>


                                                        <script>
                                                            $("#fav-c1").click(function () {
                                                                $("#fav-ch-c1").toggleClass('fav-icon');
                                                            });

                                                        </script>


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">
                                                        <h5 class="mb-0">
                                                            <b class="text-primary">
                                                                Rp.100.000.000
                                                            </b>
                                                        </h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="fw-bold">
                                                            Fee : 30%
                                                        </h5>
                                                    </td>
                                                </tr>
                                            </table>
                                            <hr style="margin-top:-4px">

                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Lokasi</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Medan, Sumatra Utara</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Luas</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;3.2 Ha</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Objek Tanah</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Tanah Darat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nilai ZNT BPN</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;750.000/meter</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penawaran</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Open Bidding</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah Bid</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;6</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>



                                            <div class="row g-0">
                                                <div class="col text-start">

                                                    <a href="#" class="  mx-auto rounded-5" data-bs-toggle="modal"
                                                        data-bs-target="#modal-lihat-lahan"
                                                        style="text-decoration:none">
                                                        <i class="fa-solid fa-eye"></i> Lihat Detail
                                                    </a>


                                                    <div class="modal fade my-auto text-center" id="berkasC"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header p-0">
                                                                    <h1
                                                                        class="modal-title mx-auto text-danger display-1">
                                                                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                            style="width: 100px" alt="">
                                                                    </h1>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda harus memiliki akun peserta lelang sebelum
                                                                    melihat
                                                                    detail.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary me-auto"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <a type="button" class="btn btn-success"
                                                                        href="https://server.sengketatanah.id/login">Login</a>
                                                                    <a type="button" class="btn btn-danger"
                                                                        href="https://server.sengketatanah.id/login">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <form action="{{url('')}}/bid-sengketa/podcast" class="form-sengketa3"
                                                method="get">
                                                <input type="hidden" name="owner" value=" Ophelia Suartini">
                                                <input type="hidden" name="objek" value=" Perkara Pertanahan">
                                                <input type="hidden" name="luas" value=" 3.2 Ha">
                                                <input type="hidden" name="lokasi" value=" Medan, Sumatra Utara">
                                                <input type="hidden" name="komentar" value="">
                                                <input type="hidden" name="link_yt"
                                                    value="https://www.youtube.com/embed/1I4iEKK1qbQ">
                                                <input type="hidden" name="form" value="sponsor">
                                            </form>


                                            <hr>
                                            <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                <div class="col-4">

                                                    <div class="d-grid gap-2 ">
                                                        <!-- <button type="button"
                                                                class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID
                                                            </button> -->


                                                        <div class="modal fade my-auto" id="exampleC" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                                class="mb-2" style="width: 100px"
                                                                                alt="">
                                                                        </h1>
                                                                    </div>
                                                                    <div class="modal-body" style="text-align: justify">

                                                                        Anda harus memiliki akun <b>LENDER</b> sebelum
                                                                        melakukan
                                                                        Bid (Bid adalah proses penawaran anda dengan
                                                                        owner).
                                                                        Jika anda belum menemukan kesepakatan anda bisa
                                                                        close
                                                                        bidding kapan saja.</div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary me-auto"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a type="button" class="btn btn-success"
                                                                            href="https://server.sengketatanah.id/login">Login</a>
                                                                        <a type="button" class="btn btn-danger"
                                                                            href="https://server.sengketatanah.id/login">Register</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 custom">
                                    <div class="card mb-2 mx-auto">
                                        <div class="ribbon-pop">
                                            <i class="fa-solid fa-star"></i>&nbsp;HOT
                                        </div>
                                        <div class="share-icon">
                                            <button class="btn btn-sm text-white rounded-5"
                                                style="background: rgba(0, 0, 0, 0.5)">
                                                <i class="fa-solid fa-share-from-square"></i>
                                            </button>
                                        </div>
                                        <div id="ll44a" class="carousel slide" data-bs-interval="false">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#ll44a" data-bs-slide-to="0"
                                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#ll44a" data-bs-slide-to="1"
                                                    aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#ll44a" data-bs-slide-to="2"
                                                    aria-label="Slide 3"></button>
                                                <button type="button" data-bs-target="#ll44a" data-bs-slide-to="3"
                                                    aria-label="Slide 4"></button>
                                            </div>

                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan3.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan3.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan1.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan1.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="{{asset('')}}images/lahan4.jpeg" data-bs-toggle="modal"
                                                        data-bs-target="#image-modal"
                                                        data-src="{{asset('')}}images/lahan4.jpeg"
                                                        class="d-block image-kunam w-100"
                                                        style="height:200px;width:auto;object-fit:cover">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev opacity-90 text-dark" type="button"
                                                data-bs-target="#ll44a" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next opacity-90 text-dark" type="button"
                                                data-bs-target="#ll44a" data-bs-slide="next">
                                                <span class="carousel-control-next-icon bg-dark rounded-circle"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="card-header text-white px-3 py-1" style="background: #8f8f8f">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <h5 class="mb-0 text-center">Kode Bidang BL-003 <img
                                                            src="{{asset('')}}uploads/biru_centang.png" alt=""
                                                            class="mb-1" style="height:20px"></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body pt-0">
                                            <table class="mt-2 mb-2">
                                                <tr>
                                                    <td>
                                                        <b>Nilai Pinjaman :</b>
                                                    </td>

                                                    <td rowspan="2">
                                                        <div class="d-flex align-items-center">

                                                            <a id="fav-c1 my-auto" style="margin-right: 10px">
                                                                <h5 class="mb-0 text-fav-disable" id="fav-ch-c1">
                                                                    <i class="fas fa-star"></i>
                                                                </h5>
                                                            </a>
                                                            <button
                                                                class="btn float-end btn-brown text-white mb-0 my-auto w-100"
                                                                data-bs-toggle="modal" data-bs-target="#exampleC">
                                                                BID</button>
                                                        </div>


                                                        <script>
                                                            $("#fav-c1").click(function () {
                                                                $("#fav-ch-c1").toggleClass('fav-icon');
                                                            });

                                                        </script>


                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">
                                                        <h5 class="mb-0">
                                                            <b class="text-primary">
                                                                Rp.200.000.000
                                                            </b>
                                                        </h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="fw-bold">
                                                            Fee : 30%
                                                        </h5>
                                                    </td>
                                                </tr>
                                            </table>
                                            <hr style="margin-top:-4px">

                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Lokasi</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Medan, Sumatra Utara</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Luas</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;3.2 Ha</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Objek Tanah</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Tanah Darat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nilai ZNT BPN</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;750.000/meter</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penawaran</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;Open Bidding</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah Bid</td>
                                                        <td></td>
                                                        <td>:</td>
                                                        <td>&nbsp;6</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <hr>


                                            <div class="row g-0">
                                                <div class="col text-start">

                                                    <a href="#" class="  mx-auto rounded-5" data-bs-toggle="modal"
                                                        data-bs-target="#modal-lihat-lahan"
                                                        style="text-decoration:none">
                                                        <i class="fa-solid fa-eye"></i> Lihat Detail
                                                    </a>


                                                    <div class="modal fade my-auto text-center" id="berkasC"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header p-0">
                                                                    <h1
                                                                        class="modal-title mx-auto text-danger display-1">
                                                                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                            style="width: 100px" alt="">
                                                                    </h1>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Anda harus memiliki akun peserta lelang sebelum
                                                                    melihat
                                                                    detail.
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary me-auto"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <a type="button" class="btn btn-success"
                                                                        href="https://server.sengketatanah.id/login">Login</a>
                                                                    <a type="button" class="btn btn-danger"
                                                                        href="https://server.sengketatanah.id/login">Register</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <form action="{{url('')}}/bid-sengketa/podcast" class="form-sengketa3"
                                                method="get">
                                                <input type="hidden" name="owner" value=" Ophelia Suartini">
                                                <input type="hidden" name="objek" value=" Perkara Pertanahan">
                                                <input type="hidden" name="luas" value=" 3.2 Ha">
                                                <input type="hidden" name="lokasi" value=" Medan, Sumatra Utara">
                                                <input type="hidden" name="komentar" value="">
                                                <input type="hidden" name="link_yt"
                                                    value="https://www.youtube.com/embed/1I4iEKK1qbQ">
                                                <input type="hidden" name="form" value="sponsor">
                                            </form>


                                            <hr>
                                            <div class="row justify-content-center g-0" style="margin-top:-15px;">
                                                <div class="col-4">

                                                    <div class="d-grid gap-2 ">
                                                        <!-- <button type="button"
                                                    class="text-center mt-2 mb-0 mt-0 btn btn-sm btn-outline-dark"
                                                    data-bs-toggle="modal" data-bs-target="#exampleC">
                                                    BID
                                                </button> -->


                                                        <div class="modal fade my-auto" id="exampleC" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header p-0">
                                                                        <h1
                                                                            class="modal-title mx-auto text-danger display-1">
                                                                            <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png"
                                                                                class="mb-2" style="width: 100px"
                                                                                alt="">
                                                                        </h1>
                                                                    </div>
                                                                    <div class="modal-body" style="text-align: justify">

                                                                        Anda harus memiliki akun <b>LENDER</b> sebelum
                                                                        melakukan
                                                                        Bid (Bid adalah proses penawaran anda dengan
                                                                        owner).
                                                                        Jika anda belum menemukan kesepakatan anda bisa
                                                                        close
                                                                        bidding kapan saja.</div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary me-auto"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a type="button" class="btn btn-success"
                                                                            href="https://server.sengketatanah.id/login">Login</a>
                                                                        <a type="button" class="btn btn-danger"
                                                                            href="https://server.sengketatanah.id/login">Register</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-3 custom text-start">
                                    <button class="btn btn-sm">
                                        <div class="row p-4">
                                            <div class="col-md-12">
                                                <span class="fa-stack fa-2x">
                                                    <i class="fa fa-circle fa-stack-2x text-brown"></i>
                                                    <i class="fa-solid fa-arrow-right fa-stack-1x text-white"></i>
                                                </span>
                                            </div>
                                            <div class="col-md-12 mt-1 fw-bold">
                                                Lihat Semua
                                            </div>
                                        </div>
                                    </button>
                                </div>

                            </div>
                        </div>

                    </div>

                    <script>
                        $('#right-button-bid-lahan').click(function () {
                            event.preventDefault();


                            $('div.bidding-card-a').animate({
                                scrollLeft: "+=300px"
                            }, "slow");

                            let outerWidth = Math.floor($('div.bidding-card-a').outerWidth())
                            let scrollWidth = Math.floor($('div.bidding-card-a')[0].scrollWidth)
                            let scrollLeft = Math.floor($('div.bidding-card-a').scrollLeft())
                            if ((outerWidth - scrollWidth) + scrollLeft == 0) {
                                $('div.bidding-card-a2').animate({
                                    scrollLeft: "+=300px"
                                }, "slow")

                            }
                        });

                        $('#left-button-bid-lahan').click(function () {
                            event.preventDefault();

                            if ($('div.bidding-card-a2').scrollLeft() > 0) {
                                $('div.bidding-card-a2').animate({
                                    scrollLeft: "-=300px"
                                }, "slow");
                            } else {
                                $('div.bidding-card-a').animate({
                                    scrollLeft: "-=300px"
                                }, "slow");
                            }

                        });

                    </script>


                </div>

            </div>



        </div>


        <script>
            $('button.right-button3').click(function () {
                event.preventDefault();
                $('div.lelang-card3').animate({
                    scrollLeft: "+=300px"
                }, "slow");
            });

            $('button.left-button3').click(function () {
                event.preventDefault();
                $('div.lelang-card3').animate({
                    scrollLeft: "-=300px"
                }, "slow");
            });

            $('button.right-button4').click(function () {
                event.preventDefault();
                $('div.lelang-card4').animate({
                    scrollLeft: "+=300px"
                }, "slow");
            });

            $('button.left-button4').click(function () {
                event.preventDefault();
                $('div.lelang-card4').animate({
                    scrollLeft: "-=300px"
                }, "slow");
            });

        </script>

        <style>
            .store {
                width: 171px;
            }

            .appstore {
                width: 140px;
                margin-left: 10px
            }

            @media screen and (min-width: 768px) {
                .store {
                    width: 216px;
                }

                .appstore {
                    width: 185px;
                }
            }

        </style>

        <style>
            .icon-wrapper {
                width: 62px;
                height: 64px;
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: center;
                -webkit-justify-content: center;
                -ms-flex-pack: center;
                justify-content: center;
                -webkit-align-items: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                background: #61481C;
                box-shadow: 0px 4px 8pxrgba(41, 128, 185, 0.24);
                border-radius: 100px;
            }

            /* width */
            #row-why::-webkit-scrollbar {
                width: 0px;
            }

            #row-why::-webkit-scrollbar {
                width: 0px;
            }

            /* Track */
            #row-why::-webkit-scrollbar-track {
                background: #f1f1f1;
                width: 0px;
            }

            /* Handle */
            #row-why::-webkit-scrollbar-thumb {
                background: #888;
                width: 0px;
            }

            /* Handle on hover */
            #row-why::-webkit-scrollbar-thumb:hover {
                background: #555;
                width: 0px;
            }

        </style>

        <hr>


        <div class="row justify-content-center">
            <div class="col-12 mt-2 text-center">
                <b>Download Aplikasinya!</b>
                <p class="fw-lighter mb-0">Platform Seputar Tanah No. 1 di Indonesia</p>
            </div>
            <div class="col-12 mb-2 text-center">
                <a href="#"><img src="{{asset('/')}}uploads/google-play-badge.png" class="store" alt=""></a>
                <a href="#"><img src="{{asset('/')}}uploads/appstore-badge.png" class="appstore" alt=""></a>
            </div>
        </div>

        <hr>

        <script async defer crossorigin="anonymous"
            src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v14.0" nonce="Ee2Zutm6"></script>

    </div>
    </div>

    @include('layouts.template-public.footer')



    @include('sengketa.modal-detail-index')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>



    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> -->

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/b-2.2.3/datatables.min.js">
    </script>
    <script>
        $('#jenis_objek').on('change', function () {
            let jenisObjek = $(this).find('option').filter(':selected').val();
            if (jenisObjek == "sp") {

                $('div.col-md-6.kp').hide()
                $('div.col-md-6.pp').hide()
                $('div.col-md-6.sp').show()
            } else if (jenisObjek == "kp") {

                $('div.col-md-6.kp').show()
                $('div.col-md-6.pp').hide()
                $('div.col-md-6.sp').hide()
            } else if (jenisObjek == "pp") {
                $('div.col-md-6.kp').hide()
                $('div.col-md-6.pp').show()
                $('div.col-md-6.sp').hide()
            } else {
                $('div.col-md-6.kp').show()
                $('div.col-md-6.pp').show()
                $('div.col-md-6.sp').show()
            }

        });

        $('#btnLawyer').on('click', function () {
            $('#dataSponsor').hide()
            $('#dataPemerintah').hide()
            $('#dataLawyer').show()

        });
        $('#btnSponsor').on('click', function () {
            $('#dataSponsor').show()
            $('#dataLawyer').hide()
            $('#dataPemerintah').hide()
        });
        $('#btnPemerintah').on('click', function () {
            $('#dataLawyer').hide()
            $('#dataSponsor').hide()
            $('#dataPemerintah').show()
        });

        $(document).ready(function () {
            $(".tab").click(function () {
                $(".tab").removeClass("active");
                // $(".tab").addClass("active"); // instead of this do the below 
                $(this).addClass("active");
            });
        });

        $(document).ready(function () {
            $('#myTable').DataTable();
        });

        $('#btnLawyer').on('click', function () {
            $('#titleSponsor').hide()
            $('#titlePemerintah').hide()
            $('#titleLawyer').show()

        });

        $('#btnSponsor').on('click', function () {
            $('#titleSponsor').show()
            $('#titleLawyer').hide()
            $('#titlePemerintah').hide()
        });
        $('#btnPemerintah').on('click', function () {
            $('#titleLawyer').hide()
            $('#titleSponsor').hide()
            $('#titlePemerintah').show()
        });

        $(function () {
            $('#searchlink').on('click', function (e) {
                $(this).toggleClass('open');
            });
        });



        $(function () {
            var hidestuff = function () {
                $(".jaminan_berupa").hide();
            }

            $("select[name='jaminan']").change(function () {
                hidestuff();

                var value = $(this).val();
                if (value == "ada") {
                    $(".jaminan_berupa").show();
                }
            });
            hidestuff();
        });

        $(function () {
            var hidestuff = function () {
                $(".pengelolaan-platform, .pengelolaan-sendiri").hide();
            }

            $("select[name='pengelolaan_dana']").change(function () {
                hidestuff();

                var value = $(this).val();
                if (value == "platform") {
                    $(".pengelolaan-platform").show();
                }
                if (value == "sendiri") {
                    $(".pengelolaan-sendiri").show();
                }
            });
            hidestuff();
        });

        $(function () {
            var hidestuff = function () {
                $(".law-firm").hide();
            }

            $("select[name='mewakili']").change(function () {
                hidestuff();

                var value = $(this).val();
                if (value == "law-firm") {
                    $(".law-firm").show();
                }
            });
            hidestuff();
        });


        $(document).ready(function () {
            $("#carouselExampleControlsPres").swiperight(function () {
                $(this).carousel('prev');
            });
            $("#carouselExampleControlsPres").swipeleft(function () {
                $(this).carousel('next');
            });
        });

        $(function () {
            var hidestuff = function () {
                $(".sponsor, .pengacara, .pemerintah").hide();
            }

            $("select[name='jenis_pertolongan']").change(function () {
                hidestuff();

                var value = $(this).val();
                if (value == "sponsor") {
                    $(".sponsor").show();
                }
                if (value == "pengacara") {
                    $(".pengacara").show();
                }
                if (value == "pemerintah") {
                    $(".pemerintah").show();
                }
            });
            hidestuff();
        });

    </script>
    <script>
        // let dayBox = document.getElementById("day-box");
        // let hrBox = document.getElementById("hr-box");
        // let minBox = document.getElementById("min-box");
        // let secBox = document.getElementById("sec-box");
        // let endDate = new Date(2022, 11, 2, 09, 00);
        // let endTime = endDate.getTime();

        // function countdown() {
        //     let todayDate = new Date();
        //     let todayTime = todayDate.getTime();
        //     let remainingTime = endTime - todayTime;
        //     let oneMin = 60 * 1000;
        //     let oneHr = 60 * oneMin;
        //     let oneDay = 24 * oneHr;

        //     let addZeroes = (num) => (num < 10 ? `0${num}` : num);

        //     if (endTime < todayTime) {
        //         clearInterval(i);
        //         document.querySelector(".countdown").innerHTML = `<h1>Countdown Has Expired</h1>`;
        //     } else {
        //         let daysLeft = Math.floor(remainingTime / oneDay);
        //         let hrsLeft = Math.floor((remainingTime % oneDay) / oneHr);
        //         let minsLeft = Math.floor((remainingTime % oneHr) / oneMin);
        //         let secsLeft = Math.floor((remainingTime % oneMin) / 1000);

        //         dayBox.textContent = addZeroes(daysLeft);
        //         hrBox.textContent = addZeroes(hrsLeft);
        //         minBox.textContent = addZeroes(minsLeft);
        //         secBox.textContent = addZeroes(secsLeft);
        //     }
        // }

        // let i = setInterval(countdown, 1000);
        // countdown();

    </script>


    @include('layouts.dark_mode')

</body>

</html>
