<?php require($this->config->item('views') . '/header.php'); ?>


<style>
    @media (min-width: 641px) {
        .bn-single .bn-single-image .bn-container.bn-container--image {
            padding: 40px 0 0;
        }
    }

    .bn-single .bn-single-image .bn-container.bn-container--image {
        padding: 20px 0 0;
    }

    @media (min-width: 801px) {
        .bn-container {
            width: calc(100% - 100px);
        }
    }

    .bn-container {
        margin: auto;
        max-width: 1440px;
        width: calc(100% - 40px);
    }

    .bn-single .bn-single-image img {
        height: 100%;
        margin: auto;
        max-width: 100%;
        width: 100%;
    }

    .bn-single .bn-single-image .bn-container.bn-container--actions {
        padding: 0 0 20px;
    }


    @media (min-width: 641px) {
        .bn-single .bn-single-image--1x1 img {
            max-width: calc(100% - 20px);
            min-width: 540px;
            width: 75vh;
        }
    }

    .breadcrumb-item+.breadcrumb-item::before {
        padding-right: 0;
    }

    @media (min-width: 641px) {
    .bn-single .bn-single-image--1x2 img, .bn-single .bn-single-meta-col {
        max-width: calc(100% - 20px);
        min-width: 540px;
        width: 75vh;
        margin:auto;
        margin-top: 10px;
    }
}
.bn-single-image--action button:hover{
text-decoration: underline;
}
</style>

<main class="bn-content-area">
    <div class="bn-single">
        <div class="container mt-3">
            <nav aria-label="breadcrumb" id="breadcrumb-nav">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item px-0"><a href="#">Inforaphics</a></li>
                    <li class="breadcrumb-item active px-0" aria-current="page">detailspage</li>
                </ol>
            </nav>
        </div>

        <div class="bn-single-image bn-single-image--1x1">
            <div class="bn-container bn-container--image">
                <div class="bn-single-image--main d-flex">
                    <img src="<?= base_url() ?>assets/images/1290-vaccine-candidates.svg" alt="">
                </div>
            </div>
            <div class="bn-container bn-container--actions">
                <div class="bn-single-image--actions bn-single-meta-col d-flex justify-content-between">
                    <div class="bn-single-image--action">
                        <button class="bn-single-nav bn-single-nav--prev bn-single-nav--active" data-dir="prev" data-id="1289">
                            <i class="icon-left-open"></i><span>Older</span>
                        </button>
                    </div>
                    <div class="bn-single-image--action">
                    <button href="#" class="bn-single-like" data-state="off" data-id="1290">
                        <span>Like this post</span>
                    </button>
                    </div>
                    <div class="bn-single-image--action">
                    <button class="bn-single-nav bn-single-nav--next bn-single-nav--active" data-dir="next" data-id="1292"><span>Newer</span><i class="icon-right-open"></i></button>
                    </div>
                </div>
            </div>
        </div>


    </div>

</main>