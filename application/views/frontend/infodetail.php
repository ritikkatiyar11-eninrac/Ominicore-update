<?php require(APPPATH . 'views/frontend/header.php'); ?>
<?php require(APPPATH . 'views/frontend/menu.php'); ?>
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

        .bn-single .bn-single-image--1x2 img,
        .bn-single .bn-single-meta-col {
            max-width: calc(100% - 20px);
            min-width: 540px;
            width: 75vh;
            margin: auto;
            margin-top: 10px;
        }
    }

    .bn-single-image--action button:focus {
        outline: none;
    }

    .bn-single-image--action button:hover {
        transform: scale(0.98);
    }
</style>


<main class="container-fluid">
    <div class="bn-single">
        <div class="container-fluid py-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mt-3">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="icofont-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Infographic</a></li>
                    <li class="breadcrumb-item active" id="btbreadcrumbactiveurllast" aria-current="page"></li>
                </ol>
            </nav>
        </div>

        <div class="bn-single-image bn-single-image--1x1">
            <div class="container bn-container--image">
                <div class="bn-single-image--main d-flex">
                    <img src="<?= base_url() ?>assets/images/1290-vaccine-candidates.svg" alt="">
                </div>
            </div>
            <div class="container bn-container--actions">
                <div class="bn-single-image--actions bn-single-meta-col d-flex justify-content-between">
                    <div class="bn-single-image--action">
                        <button class="bn-single-nav btn btn-sm d-flex align-items-center  bn-single-nav--prev bn-single-nav--active" data-dir="prev" data-id="1289">
                            <i class="icofont-simple-left fs-20"></i><span>Older</span>
                        </button>
                    </div>
                    <div class="bn-single-image--action">
                        <button href="#" class="btn  btn-sm bn-single-like" data-state="off" data-id="1290">
                            <span>Like this post</span>
                        </button>
                    </div>
                    <div class="bn-single-image--action">
                        <button class="bn-single-nav btn btn-sm d-flex align-items-center  bn-single-nav--next bn-single-nav--active" data-dir="next" data-id="1292"><span>Newer</span><i class="icofont-rounded-right fs-20"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="bn-single-meta bn-single-meta--text">
            <div class="container">
                <div class="bn-single-meta-col">
                    <div class="bn-single-meta-description" >
                        <p>
                            The US National School Lunch Program is nearly 75 years old. It provides billions of low-cost or free lunches to children from low-income families every year.
                            <br>
                            <br>
                            That means improved food security for millions of families. Better nutrition for kids. Improvements in health, behaviour and academic performance. Everyone wins.
                        </p>
                        <h3 role="heading" aria-level="3" class="bn-single-meta-title ">Topics</h3>
                        <ul class="bn-single-topics">
                            <li class="bn-single-topic">
                                <span class="bn-single-topic-wrapper border text-uppercase">
                                    <a href="" class="bn-single-topic--child bn-int-link">solar</a>
                                </span>
                            </li>
                            <li class="bn-single-topic">
                                <span class="bn-single-topic-wrapper border text-uppercase">
                                    <a href="" class="bn-single-topic--child bn-int-link">wind</a>
                                </span>
                            </li>

                            <li class="bn-single-topic">
                                <span class="bn-single-topic-wrapper border text-uppercase">
                                    <a href="" class="bn-single-topic--child bn-int-link">Hydrogen</a>
                                </span>
                            </li>
                            <li class="bn-single-topic">
                                <span class="bn-single-topic-wrapper border text-uppercase">
                                    <a href="" class="bn-single-topic--child bn-int-link">Oil & Gas</a>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="bn-single-meta bn-single-meta--signup">
            <div class="bn-container">
                <form class="bn-signup" method="post" action="" target="_blank">
                    <div class="bn-signup--col bn-signup--info">
                        <h3><i class="icofont-email"></i> Beautiful Newsletter</h3>
                        <p>An uplifting occasional roundup: every new chart plus bonus extras</p>
                    </div>
                    <div class="bn-signup--col bn-signup--input"><input type="email" name="MERGE0" id="MERGE0" placeholder="Your email..."><button type="submit">Sign up</button></div>
                </form>
            </div>
        </div> -->
    </div>
</main>

<script src="<?= base_url() ?>assets/js/singleItem.js"></script>
<?php require(APPPATH . 'views/frontend/footer.php'); ?>