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
</head>

<body>
    <header class="position-sticky top-0">
        <div class="container-xxl px-0">
            <div class="d-flex justify-content-between align-items-center w-100">
                <div class="w-25">
                    <div class="logo">
                        <a href="<?= base_url() ?>">
                            <img class="w-100" src="<?= base_url() ?>assets/images/Omnicore-new-logo-4.svg" id="logo-img" alt="logo">
                        </a>
                    </div>
                </div>

                <div class="header-right">
                    <ul class=" h-100 header-iconlist mb-0 pl-0">
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
                    <ul class="header_list h-100">
                        <li class="NewsLetter  d-flex justify-content-center align-items-center  py-2 px-3  cursor-pointer">
                            <a href="<?= base_url('infographicpage') ?>" class="header-link" target="_blank" rel="noopener noreferrer">Infographics</a>
                        </li>
                        <li class="subscriptions d-flex justify-content-center align-items-center py-2 px-3  cursor-pointer">
                            <a href="<?= base_url('subscribe') ?>" class="header-link" style="line-height:20px" target="_blank" rel="noopener noreferrer">Subscriptions</a>
                        </li>
                        <li class="NewsLetter  d-flex justify-content-center align-items-center  py-2 px-3  cursor-pointer">
                            <a href="<?= base_url('newsletter') ?>" class="header-link" target="_blank" rel="noopener noreferrer">NewsLetter</a>
                        </li>
                        <li class="NewsLetter  d-flex justify-content-center align-items-center  py-2 px-3  cursor-pointer">
                            <a href="<?= base_url('login') ?>" class="header-link" target="_blank" rel="noopener noreferrer">Login</a>
                        </li>
                        <li class="NewsLetter  d-flex justify-content-center align-items-center  py-2 px-3  cursor-pointer">
                            <a href="<?= base_url('') ?>" class="header-link" target="_blank" rel="noopener noreferrer">
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