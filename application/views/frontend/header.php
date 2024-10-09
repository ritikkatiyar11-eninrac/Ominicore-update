<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Omnicore</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/fonts.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">

    <link rel="icon" type="image/png" href="<?= base_url() ?>assets/images/Omnicore-favicon.svg">

    <style>
        .header_list li:hover {
            background: rgba(96, 50, 233, 0.08);
        }

        .page-header a {
            color: #0f3f6e;
            width: max-content;
            transition: all 0.4s ease-in-out;
            transition-timing-function: cubic-bezier(.4, 0, .2, 1);
        }

        .page-header a:hover {
            transform: scale(0.98);
            color: #3243e9;
            transition-duration: .4s;
        }

        .page-header a span {
            text-transform: uppercase;
        }

        .page-header a i {
            font-size: 1.5rem;
        }

        .card-meta a::after {
            content: "/";
        }

        .card-meta a:last-child::after {
            display: none;
        }

        .trending-card.card-placeholder-img-01 {
            grid-area: trendingfull-card;
        }

        .trending-card.card-half.placeholder-image-03.w-inline-block {
            grid-area: trendinghalf-1;
        }

        .trending-card .bg-overlay {
            background: linear-gradient(180deg, transparent 48%, rgba(0, 0, 0, 0.8) 86%)
        }

        .trending-card .trending-data {
            bottom: 10px;
            left: 15px;
            color: white;
            font-size: 14px;
        }

        .trending-card-content .card-meta a span {
            color: #0f3f6e;
            font-weight: 600;
            opacity: 1;
        }

        .trending-card-content .trending-card-title {
            font-size: 18px;
            line-height: 1.2;
            font-weight: 600;
            margin-top: 0;
            margin-bottom: 0;
        }
    </style>
</head>

<body>
    <div class="progress-indicator">
        <svg viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="50" cy="50" r="40" stroke="url(#progress_gradient)" stroke-width="20"></circle>
            <defs>
                <linearGradient id="progress_gradient" x1="57" y1="91" x2="19" y2="20" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#14355B"></stop>
                    <stop offset="1" stop-color="#3878CD"></stop>
                </linearGradient>
            </defs>
        </svg>
    </div>
    <header class="position-sticky top-0" style="background-image: -webkit-gradient( linear, left top, right top, from(transparent), to(#fff) ), -webkit-gradient(linear, left top, left bottom, from(transparent), to(#fff)), -webkit-gradient(linear, left top, left bottom, from(#dbd3f7), to(#eee9ff));backdrop-filter:blur(7px); z-index:11;">
        <div class="container-fluid position-relative px-0 overflow-hidden">
            <div class="d-flex justify-content-between align-items-center w-100">
                <div class="w-25">
                    <div class="logo" style="max-width: 140px; ">
                        <a href="<?= base_url() ?>">
                            <img src="<?= base_url() ?>assets/images/Omnicore-new-logo-4.svg" id="logo-img" alt="logo" style="width: 100px;margin: auto;">
                        </a>
                    </div>
                </div>
                <div class="header-right d-flex justify-content-end">
                    <ul style="margin-bottom: 0; padding-left:0; height:100%;" class="header-iconlist">
                        <li>
                            <button class="btn btn-outline-primary border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                                <i class="icofont-navigation-menu"></i>
                            </button>
                        </li>
                    </ul>
                    <ul class="header_list">
                        <li class="d-flex justify-content-center align-items-center  py-4 px-3  cursor-pointer h-100">
                            <a href="<?= base_url() ?>infographic" class="header-link">Infographics</a>
                        </li>
                        <li class="d-flex justify-content-center align-items-center py-4 px-3  cursor-pointer h-100">
                            <a href="<?= base_url() ?>check-pricing" class="header-link">Check Pricing</a>
                        </li>
                        <li class="d-flex justify-content-center align-items-center  py-4 px-3  cursor-pointer h-100">
                            <a href="<?= base_url() ?>newsletter" class="header-link">Newsletter</a>
                        </li>
                        <li id="auth-button" class="d-flex justify-content-center align-items-center  py-4 px-3  cursor-pointer h-100">
                            <a href="<?= base_url() ?>login" class="header-link">Login</a>
                        </li>
                        <li class="d-flex justify-content-center align-items-center py-4 px-3  cursor-pointer h-100">
                            <a href="<?= base_url() ?>" class="header-link">
                                <i class="icofont-search-1"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="progress-container position-absolute bottom-0 w-100">
                <div class="progress-bar " id="myBar" style="width: 0%;background-color: #0f3f6e;height: 5px;"></div>
            </div>
        </div>

    </header>
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
            <div class="w-100">
                <div class="logo" style="max-width: 140px; ">
                    <a href="<?= base_url() ?>">
                        <img src="<?= base_url() ?>assets/images/Omnicore-new-logo-4.svg" id="logo-img" alt="logo" style="width: 100px;margin: auto;">
                    </a>
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="mt-3">
                <ul class="d-flex flex-column justify-content-between align-items-center">
                    <li class="d-flex justify-content-center align-items-start  py-4 px-3  cursor-pointer h-100">
                        <a href="<?= base_url() ?>infographic" class="header-link fs-20">Infographics</a>
                    </li>
                    <li class="d-flex justify-content-center align-items-start py-4 px-3  cursor-pointer h-100">
                        <a href="<?= base_url() ?>check-pricing" class="header-link fs-20">Check Pricing</a>
                    </li>
                    <li class="d-flex justify-content-center align-items-start  py-4 px-3  cursor-pointer h-100">
                        <a href="<?= base_url() ?>newsletter" class="header-link fs-20">Newsletter</a>
                    </li>
                    <li id="auth-button" class="d-flex justify-content-center align-items-start  py-4 px-3  cursor-pointer h-100">
                        <a href="<?= base_url() ?>login" class="header-link fs-20">Login</a>
                    </li>
                    <li class="d-flex justify-content-center align-items-start py-4 px-3  cursor-pointer h-100">
                        <a href="<?= base_url() ?>" class="header-link fs-20">
                            <i class="icofont-search-1"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="row w-100 position-absolute mb-2" style="bottom: 20px;">
                <div class="col-12 px-0">
                    <p class="text-center">© 2013-2024 <a class="text-decoration-underline text-darklight-600" href="https://eninrac.com">Eninrac Consulting Pvt. Ltd.</a></p>
                </div>
            </div>
        </div>
    </div>
    <script>
        let loader = document.querySelector(".progress-indicator")

        function showSpinner() {
            loader.classList.add("is-animating")
        }

        function hideSpinner() {
            loader.classList.remove("is-animating")
        }


        if (window.location.href.includes("http://localhost/omnicore/omniweeklynews")) {
            window.onscroll = function() {
                scrollbarWidth()
            }

            function scrollbarWidth() {
                let winScroll = document.body.scrollTop || document.documentElement.scrollTop
                let winHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                let scrolled = (winScroll / winHeight) * 100;
                document.getElementById("myBar").style.width = scrolled + "%"
            }
        }


        // function getCookie(token) {
        //     const nameEQ = token + "=";
        //     const ca = document.cookie.split(';');
        //     for (let i = 0; i < ca.length; i++) {
        //         let c = ca[i];
        //         while (c.charAt(0) === ' ') c = c.substring(1, c.length);
        //         if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
        //     }
        //     return null;
        // }

        // function deleteCookie(token) {
        //     document.cookie = token + '=; Max-Age=-99999999; path=/;';
        // }

        // function updateLoginInheader() {
        //     const token = getCookie("token")
        //     const authButton = document.getElementById('auth-button');
        //     if (token) {
        //         authButton.innerHTML = `<a href="" id="logout-user-tbn" class="header-link">Logout</a>`
        //     } else {
        //         authButton.innerHTML = `<a href="<?= base_url() ?>login" class="header-link">Login</a>`
        //     }
        // }


        // updateLoginInheader()
    </script>