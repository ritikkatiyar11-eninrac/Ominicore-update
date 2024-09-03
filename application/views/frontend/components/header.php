<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Omnicore</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/fonts.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/daterangepicker.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="icon" type="image/png" href="<?= base_url() ?>assets/images/Omnicore-favicon.svg">
    <script src="<?= base_url() ?>assets/js/apirequest.js" defer></script>
</head>

<body>
    <header class="position-sticky top-0" style="background-image: -webkit-gradient( linear, left top, right top, from(transparent), to(#fff) ), -webkit-gradient(linear, left top, left bottom, from(transparent), to(#fff)), -webkit-gradient(linear, left top, left bottom, from(#dbd3f7), to(#eee9ff));backdrop-filter:blur(7px); z-index:11;">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center w-100">
                <div class="w-25">
                    <div class="logo" style="max-width: 140px; ">
                        <a href="https://omnicoreplus.com/omni/">
                            <img src="https://omnicoreplus.com/omni/assets/images/Omnicore-new-logo-4.svg" id="logo-img" alt="logo" style="width: 100px;margin: auto;">
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
                            <a href="https://omnicoreplus.com/omni/infographic" class="header-link">Infographics</a>
                        </li>
                        <li class="d-flex justify-content-center align-items-center py-4 px-3  cursor-pointer h-100">
                            <a href="https://omnicoreplus.com/omni/check-pricing" class="header-link">Check Pricing</a>
                        </li>
                        <li class="d-flex justify-content-center align-items-center  py-4 px-3  cursor-pointer h-100">
                            <a href="https://omnicoreplus.com/omni/newsletter" class="header-link">Newsletter</a>
                        </li>
                        <li class="d-flex justify-content-center align-items-center  py-4 px-3  cursor-pointer h-100">
                            <a href="https://omnicoreplus.com/omni/login" class="header-link">Login</a>
                        </li>
                        <li class="d-flex justify-content-center align-items-center py-4 px-3  cursor-pointer h-100">
                            <a href="https://omnicoreplus.com/omni/" class="header-link">
                                <i class="icofont-search-1"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </header>

    <script>
        document.querySelector(".icofont-navigation-menu").addEventListener("click", function(e) {
            e.preventDefault()
            console.log("click")
        })
    </script>