<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="<?= base_url('assets/fonts/fonts.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
    <style>
        .toggleClass {
            transform: scale(1);
            opacity: 1;
        }

        .showTransition {
            transform: translateY(10px);
            opacity: 0;
        }
    </style>
</head>

<body>

    <header>
        <div class="container-xxl">
            <div class="d-flex justify-content-between" style="padding: 20px 0 0;">
                <div class="logo">
                    <a href="">
                        <img src="<?= base_url() ?>assets/images/logo_dark.png" style="max-width: 200px;" id="logo-img" alt="logo">
                    </a>
                </div>
                <ul style="margin-bottom: 0;"></ul>
                <ul class="d-flex list-style-none" style="margin-bottom: 0;">
                    <li class="subscriptions text-center d-flex justify-content-center align-items-center py-2 px-3 border cursor-pointer" style="padding:13px 37px;background-color: black;">
                        <a href="" class="text-white" style="line-height:20px" target="_blank" rel="noopener noreferrer">Subscriptions</a>
                    </li>
                    <li class="NewsLetter  text-center d-flex justify-content-center align-items-center  py-2 px-3 border cursor-pointer" style="border-width:1px;border-style:solid;padding:13px 37px;">
                        <a href="" class="text-dark" target="_blank" rel="noopener noreferrer">NewsLetter</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
</body>
</html>
