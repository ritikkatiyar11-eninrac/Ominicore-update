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
    <header class="position-sticky top-0" style="background-image: -webkit-gradient( linear, left top, right top, from(transparent), to(#fff) ), -webkit-gradient(linear, left top, left bottom, from(transparent), to(#fff)), -webkit-gradient(linear, left top, left bottom, from(#dbd3f7), to(#eee9ff));backdrop-filter:blur(7px); z-index:11;">
        <div class="container-fluid">
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
                        <li class="d-flex justify-content-center align-items-center py-2 px-3  cursor-pointer">
                            <a href="">
                                <i class="icofont-navigation-menu"></i>
                            </a>
                        </li>
                        <li class="d-flex justify-content-center align-items-center py-2 px-3  cursor-pointer">
                            <a href="">
                                <i class="icofont-search-1"></i>
                            </a>
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
        </div>
    </header>
    <script>
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