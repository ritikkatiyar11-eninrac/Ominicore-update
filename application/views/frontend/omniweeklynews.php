<?php require(APPPATH . 'views/frontend/header.php'); ?>
<style>
    .dw-banner-bcg-img {
        min-height: 250px;
        display: flex;

    }
</style>
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