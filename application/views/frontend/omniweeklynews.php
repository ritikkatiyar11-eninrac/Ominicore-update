<?php require(APPPATH . 'views/frontend/header.php'); ?>
<style>
    .dw-banner-bcg-img {
        min-height: 250px;
        display: flex;
    }

    #preloader {
        position: fixed;
        bottom: -100%;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: end;
        align-items: flex-end;
        z-index: 9999;
        transition: bottom 0.5s ease-in-out;
    }

    .preloader-inner {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        background: linear-gradient(to bottom, #30cfd0 0%, #330867 100%);
        position: relative;
        margin: 10px 30px 30px 0px;
        animation: preloader-spin 2s linear infinite;
    }

    .preloader-circle {
        width: 70px;
        height: 70px;
        background-color: white;
        border-radius: 50%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    @keyframes preloader-spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }
</style>

<div id="preloader">
    <div class="preloader-inner">
        <div class="preloader-circle"></div>
    </div>
</div>



<div class="container-fluid p-0 overflow-hidden">
    <section class="position-relative w-100 h-auto pb-2 mb-2 mx-auto overflow-hidden" style="z-index: 0 ;">
        <div class="">
            <div class="dw-banner-bcg-img">
                <img src="http://localhost/omnicore/assets/images/Omnicore-new-logo-4.svg" width="400px" style="display:block;margin: 0 auto;" alt="">
            </div>
            <div class="w-100 position-absolute" style="top:-4px;z-index: -1;background-color: #dbd3f7;max-height: 128px;min-height: 128px;">
            </div>
        </div>
    </section>



    <section>
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mt-3">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="icofont-home"></i></a></li>
                    <li class="breadcrumb-item active" id="btbreadcrumbactiveurllast" aria-current="page">Weekly news</li>
                </ol>
            </nav>
        </div>
    </section>

    <section>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="">
                    <h1 class="fs-32"></h1>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </section>
</div>