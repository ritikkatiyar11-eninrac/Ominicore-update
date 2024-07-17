<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/fonts/fonts.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
    <title>Document</title>
    <style>
        .category-card-items-list {
            display: grid;
            gap: 2rem;
        }



        @media (min-width:1280px) {
            .category-card-items-list {
                grid-template-columns: repeat(5, minmax(0, 1fr));
            }
        }

        @media (min-width:1024px) {
            .category-card-items-list {
                display: grid;
                grid-template-columns: repeat(4, minmax(0, 1fr));
            }
        }

        @media only screen and (min-width:768px) and (max-width:1024px) {
            .category-card-items-list {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
        }


        @media only screen and (max-width:640px) {
            .category-card-items-list {
                grid-template-columns: repeat(1, minmax(0, 1fr));
            }
        }

        @media only screen and (min-width:520px) and (max-width:768px) {
            .category-card-items-list {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .category-card-items-list h4 {
                font-size: 18px;
            }
        }

        .category-card-items-list h4 {
            font-size: 16px;
        }

        .sm-mb {
            margin-bottom: .5rem;
        }

        .category-card-item img {
            -webkit-transition: all .4s ease-in-out;
            -moz-transition: all .4s ease-in-out;
            -o-transition: all .4s ease-in-out;
            -ms-transition: all .4s ease-in-out;
        }

        .category-card-item img:hover {
            -webkit-transform: scale(1.6);
            -moz-transform: scale(1.6);
            -o-transform: scale(1.6);
            transform: scale(1.6);
        }
    </style>
</head>

<body>
    <section class="section category-section">
        <div class="container-xl">
            <div class="category-container pt-xl">
                <div class="position-relative d-flex my-3">
                    <div class="position-relative w-100">
                        <h3 style="letter-spacing: .0075rem; line-height:1.2; font-size: 24px;">
                            First category
                        </h3>
                    </div>
                </div>
                <div class="position-relative d-flex my-3" style="padding-top: 2rem; padding-bottom:3.5rem; width:100%; margin-top:2rem; margin-bottom:2rem;">
                    <div class="position-relative category-card-items-list">
                        <div class="category-card-item position-relative" style="margin-bottom:3rem; width:100%;">
                            <div class="w-100 " style="margin-bottom: .75rem;">
                                <a href="" class="cursor-pointer" style="color:inherit;text-decoration: inherit;">
                                    <div class="overflow-hidden">
                                        <img src="<?= base_url() ?>assets/images/category-item-1.webp" width="208" height="156" loading="lazy" class="" style="color:transparent; height:auto;width:100%;transition-timing-function: cubic-bezier(0,0,.2,1);transition-duration: 1s;transition-property: transform;" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="mb-1 ">
                                <div class="fs-14" style=" letter-spacing: .015em; line-height:1.1;">
                                    <span class="mr-1">
                                        <a href="">First Category</a>
                                    </span>
                                    <span class="mr-1 -mb-1" style="width:.5rem; display:inline-block;">//</span>
                                    <span class="text-capitalize">review</span>
                                </div>
                            </div>
                            <a href="" class="cursor-pointer d-block mb-md-1">
                                <h4 class="fs-16 text-dark" style="letter-spacing: .015em; font-weight:inherit; line-height: 1.1;">
                                    In Guggenheim exhibition, Jenny Holzer grapples with the post-internet world she helped inspire
                                </h4>
                            </a>
                            <div class="w-100 mb-1">
                                <p class="fs-14 w-100" style="line-height: 1.3;"></p>
                            </div>
                            <div class="sm-mb" style="line-height: 1;">
                                <span class="fs-14 text-nowrap">
                                    Author name
                                </span>
                            </div>
                        </div>

                        <div class="category-card-item position-relative" style="margin-bottom:3rem; width:100%;">
                            <div class="w-100 " style="margin-bottom: .75rem;">
                                <a href="" class="cursor-pointer" style="color:inherit;text-decoration: inherit;">
                                    <div class="overflow-hidden">
                                        <img src="<?= base_url() ?>assets/images/category-item-2.webp" width="208" height="156" loading="lazy" class="" style="color:transparent; height:auto;width:100%;transition-timing-function: cubic-bezier(0,0,.2,1);transition-duration: 1s;transition-property: transform;" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="mb-1 ">
                                <div class="fs-14" style=" letter-spacing: .015em; line-height:1.1;">
                                    <span class="mr-1">
                                        <a href="">First Category</a>
                                    </span>
                                    <span class="mr-1 -mb-1" style="width:.5rem; display:inline-block;">//</span>
                                    <span class="text-capitalize">review</span>
                                </div>
                            </div>
                            <a href="" class="cursor-pointer d-block mb-md-1">
                                <h4 class="fs-16 text-dark" style="letter-spacing: .015em; font-weight:inherit; line-height: 1.1;">
                                    In Guggenheim exhibition, Jenny Holzer grapples with the post-internet world she helped inspire
                                </h4>
                            </a>
                            <div class="w-100 mb-1">
                                <p class="fs-14 w-100" style="line-height: 1.3;"></p>
                            </div>
                            <div class="sm-mb" style="line-height: 1;">
                                <span class="fs-14 text-nowrap">
                                    Author name
                                </span>
                            </div>
                        </div>

                        <div class="category-card-item position-relative" style="margin-bottom:3rem; width:100%;">
                            <div class="w-100 " style="margin-bottom: .75rem;">
                                <a href="" class="cursor-pointer" style="color:inherit;text-decoration: inherit;">
                                    <div class="overflow-hidden">
                                        <img src="<?= base_url() ?>assets/images/category-item-3.webp" width="208" height="156" loading="lazy" class="" style="color:transparent; height:auto;width:100%;transition-timing-function: cubic-bezier(0,0,.2,1);transition-duration: 1s;transition-property: transform;" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="mb-1 ">
                                <div class="fs-14" style=" letter-spacing: .015em; line-height:1.1;">
                                    <span class="mr-1">
                                        <a href="">First Category</a>
                                    </span>
                                    <span class="mr-1 -mb-1" style="width:.5rem; display:inline-block;">//</span>
                                    <span class="text-capitalize">review</span>
                                </div>
                            </div>
                            <a href="" class="cursor-pointer d-block mb-md-1">
                                <h4 class="fs-16 text-dark" style="letter-spacing: .015em; font-weight:inherit; line-height: 1.1;">
                                    In Guggenheim exhibition, Jenny Holzer grapples with the post-internet world she helped inspire
                                </h4>
                            </a>
                            <div class="w-100 mb-1">
                                <p class="fs-14 w-100" style="line-height: 1.3;"></p>
                            </div>
                            <div class="sm-mb" style="line-height: 1;">
                                <span class="fs-14 text-nowrap">
                                    Author name
                                </span>
                            </div>
                        </div>

                        <div class="category-card-item position-relative" style="margin-bottom:3rem; width:100%;">
                            <div class="w-100 " style="margin-bottom: .75rem;">
                                <a href="" class="cursor-pointer" style="color:inherit;text-decoration: inherit;">
                                    <div class="overflow-hidden">
                                        <img src="<?= base_url() ?>assets/images/category-item-4.webp" width="208" height="156" loading="lazy" class="" style="color:transparent; height:auto;width:100%;transition-timing-function: cubic-bezier(0,0,.2,1);transition-duration: 1s;transition-property: transform;" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="mb-1 ">
                                <div class="fs-14" style=" letter-spacing: .015em; line-height:1.1;">
                                    <span class="mr-1">
                                        <a href="">First Category</a>
                                    </span>
                                    <span class="mr-1 -mb-1" style="width:.5rem; display:inline-block;">//</span>
                                    <span class="text-capitalize">review</span>
                                </div>
                            </div>
                            <a href="" class="cursor-pointer d-block mb-md-1">
                                <h4 class="fs-16 text-dark" style="letter-spacing: .015em; font-weight:inherit; line-height: 1.1;">
                                    In Guggenheim exhibition, Jenny Holzer grapples with the post-internet world she helped inspire
                                </h4>
                            </a>
                            <div class="w-100 mb-1">
                                <p class="fs-14 w-100" style="line-height: 1.3;"></p>
                            </div>
                            <div class="sm-mb" style="line-height: 1;">
                                <span class="fs-14 text-nowrap">
                                    Author name
                                </span>
                            </div>
                        </div>

                        <div class="category-card-item position-relative" style="margin-bottom:3rem; width:100%;">
                            <div class="w-100 " style="margin-bottom: .75rem;">
                                <a href="" class="cursor-pointer" style="color:inherit;text-decoration: inherit;">
                                    <div class="overflow-hidden">
                                        <img src="<?= base_url() ?>assets/images/category-item-5.webp" width="208" height="156" loading="lazy" class="" style="color:transparent; height:auto;width:100%;transition-timing-function: cubic-bezier(0,0,.2,1);transition-duration: 1s;transition-property: transform;" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="mb-1 ">
                                <div class="fs-14" style=" letter-spacing: .015em; line-height:1.1;">
                                    <span class="mr-1">
                                        <a href="">First Category</a>
                                    </span>
                                    <span class="mr-1 -mb-1" style="width:.5rem; display:inline-block;">//</span>
                                    <span class="text-capitalize">review</span>
                                </div>
                            </div>
                            <a href="" class="cursor-pointer d-block mb-md-1">
                                <h4 class="fs-16 text-dark" style="letter-spacing: .015em; font-weight:inherit; line-height: 1.1;">
                                    In Guggenheim exhibition, Jenny Holzer grapples with the post-internet world she helped inspire
                                </h4>
                            </a>
                            <div class="w-100 mb-1">
                                <p class="fs-14 w-100" style="line-height: 1.3;"></p>
                            </div>
                            <div class="sm-mb" style="line-height: 1;">
                                <span class="fs-14 text-nowrap">
                                    Author name
                                </span>
                            </div>
                        </div>

                        <div class="category-card-item position-relative" style="margin-bottom:3rem; width:100%;">
                            <div class="w-100 " style="margin-bottom: .75rem;">
                                <a href="" class="cursor-pointer" style="color:inherit;text-decoration: inherit;">
                                    <div class="overflow-hidden">
                                        <img src="<?= base_url() ?>assets/images/category-item-6.webp" width="208" height="156" loading="lazy" class="" style="color:transparent; height:auto;width:100%;transition-timing-function: cubic-bezier(0,0,.2,1);transition-duration: 1s;transition-property: transform;" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="mb-1 ">
                                <div class="fs-14" style=" letter-spacing: .015em; line-height:1.1;">
                                    <span class="mr-1">
                                        <a href="">First Category</a>
                                    </span>
                                    <span class="mr-1 -mb-1" style="width:.5rem; display:inline-block;">//</span>
                                    <span class="text-capitalize">review</span>
                                </div>
                            </div>
                            <a href="" class="cursor-pointer d-block mb-md-1">
                                <h4 class="fs-16 text-dark" style="letter-spacing: .015em; font-weight:inherit; line-height: 1.1;">
                                    In Guggenheim exhibition, Jenny Holzer grapples with the post-internet world she helped inspire
                                </h4>
                            </a>
                            <div class="w-100 mb-1">
                                <p class="fs-14 w-100" style="line-height: 1.3;"></p>
                            </div>
                            <div class="sm-mb" style="line-height: 1;">
                                <span class="fs-14 text-nowrap">
                                    Author name
                                </span>
                            </div>
                        </div>

                        <div class="category-card-item position-relative" style="margin-bottom:3rem; width:100%;">
                            <div class="w-100 " style="margin-bottom: .75rem;">
                                <a href="" class="cursor-pointer" style="color:inherit;text-decoration: inherit;">
                                    <div class="overflow-hidden">
                                        <img src="<?= base_url() ?>assets/images/category-item-7.webp" width="208" height="156" loading="lazy" class="" style="color:transparent; height:auto;width:100%;transition-timing-function: cubic-bezier(0,0,.2,1);transition-duration: 1s;transition-property: transform;" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="mb-1 ">
                                <div class="fs-14" style=" letter-spacing: .015em; line-height:1.1;">
                                    <span class="mr-1">
                                        <a href="">First Category</a>
                                    </span>
                                    <span class="mr-1 -mb-1" style="width:.5rem; display:inline-block;">//</span>
                                    <span class="text-capitalize">review</span>
                                </div>
                            </div>
                            <a href="" class="cursor-pointer d-block mb-md-1">
                                <h4 class="fs-16 text-dark" style="letter-spacing: .015em; font-weight:inherit; line-height: 1.1;">
                                    In Guggenheim exhibition, Jenny Holzer grapples with the post-internet world she helped inspire
                                </h4>
                            </a>
                            <div class="w-100 mb-1">
                                <p class="fs-14 w-100" style="line-height: 1.3;"></p>
                            </div>
                            <div class="sm-mb" style="line-height: 1;">
                                <span class="fs-14 text-nowrap">
                                    Author name
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>