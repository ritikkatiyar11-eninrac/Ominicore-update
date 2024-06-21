<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/fonts.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
</head>

<body>
    <div class="wrapper-container mobi-v-width">
        <div class="d-flex">
            <aside class="sidebar-width menu-wrapper h-100">
                <div class="logo d-flex">
                    <a href="index.html" class="nav_logo">
                        <img src="<?= base_url() ?>assets/images/Group-1.png" alt="">
                    </a>
                </div>
                <nav class="nav">
                    <?php require('sidebar.php') ?>
                </nav>
            </aside>
            <div class="full-width-container content-wrapper position-relative">
                <div class="d-block">
                    <header class="d-flex justify-content-between align-items-center w-100 px-3">
                        <div class="header_toggle">
                            <div class="d-flex align-items-center">
                                <i class="icon-enin icon-burger-icon fs-25 text-primary-700" id="header-toggle"></i>
                                <?php echo $HEADER_PATH ?>
                            </div>
                        </div>
                        <style>
                            .currency-exchange select {
                                background: white;
                                outline: none;
                                box-shadow: inset 3px 3px 6px var(--primary-200), inset -3px -3px 3px #fff;
                                border: none;
                                padding: 5px 10px;
                                border-radius: 16px;
                            }
                        </style>
                        <div class="d-flex align-items-center">
                            <div class="currency-exchange me-4">
                                <select class="fs-14" name="" id="">
                                    <option value="INR"> INR</option>
                                    <option value="USD">USD</option>
                                    <option value="EUR">EUR</option>
                                </select>
                            </div>
                            <div class="notification_img me-4">
                                <i class="icon-enin icon-updates fs-25 text-primary-700"></i>
                            </div>
                            <div class="header_img">
                                <i class="icon-enin icon-profile-icon fs-30 text-primary-700 d-block"></i>
                            </div>
                        </div>
                    </header>
                    <div class="main-content-container">