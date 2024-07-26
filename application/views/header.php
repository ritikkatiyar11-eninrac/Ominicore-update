<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/fonts.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <style>
        .header_list li .header-link{
            color: #0f3f6e;
        }

        .header_list li a:hover{
            color: #3243e9;
        }
    </style>
</head>

<body>

    <header class="position-sticky top-0" style="background:rgba(255 255 255 / 90%);backdrop-filter:blur(2px); z-index:11; height:80px;">
        <div class="container-xxl px-0">
            <div class="d-flex justify-content-between align-items-center w-100">
                <div class="w-25">
                    <div class="logo" style="max-width: 140px; object-fit:cover;padding-right:10px;padding-top:0;">
                        <a href="<?= base_url() ?>">
                            <img class="w-100" src="<?= base_url() ?>assets/images/Omnicore-new-logo-4.svg" id="logo-img" alt="logo">
                        </a>
                    </div>

                </div>
                <ul style="margin-bottom: 0; padding-left:0;" class="d-flex flex-wrap gap-1 list-style-none"></ul>
                <div class="" style="height:80px; width:calc(100% - 370px);margin-bottom: 0; background-image: -webkit-gradient(linear, left top, right top, from(transparent), to(#fff)), -webkit-gradient(linear, left top, left bottom, from(transparent), to(#fff)), -webkit-gradient(linear, left top, left bottom, from(#eee9ff), to(#eee9ff));">
                    <ul class="header_list d-flex list-style-none justify-content-end align-items-center" style="height: 100%;">
                        <li class="NewsLetter  d-flex justify-content-center align-items-center  py-2 px-3  cursor-pointer">
                            <a href="<?= base_url('infographicpage') ?>" class="header-link" target="_blank" rel="noopener noreferrer">Infographics</a>
                        </li>
                        <li class="subscriptions d-flex justify-content-center align-items-center py-2 px-3  cursor-pointer" style=" border-radius:6px">
                            <a href="<?= base_url('subscribe') ?>" class="header-link" style="line-height:20px" target="_blank" rel="noopener noreferrer">Subscriptions</a>
                        </li>
                        <li class="NewsLetter  d-flex justify-content-center align-items-center  py-2 px-3  cursor-pointer" >
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