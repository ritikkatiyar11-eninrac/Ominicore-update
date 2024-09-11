<?php require(APPPATH . 'views/frontend/header.php'); ?>

<style>
    .toprightcard {
        position: relative;
        display: flex;
        justify-content: flex-start;
        align-items: center;
        border-radius: 20px;
        background: linear-gradient(135deg, #ffffff, #133260);
        backdrop-filter: blur(2px);
        box-shadow: 0 20px 30px rgba(0, 0, 0, 0.1);
        transition: 0.5s;
        height: 340px
    }

    .first-section-right {
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        justify-content: center;
    }

    .toprightcard:hover {
        height: 400px;
    }

    .toprightcard img {
        position: absolute;
        bottom: -4%;
        left: 50%;
        transform: translateX(-50%);
        max-height: 380px;
        transition: 0.5s;
    }

    .toprightcard:hover img {
        left: 80%;
        height: 250px;
        bottom: -5%;
    }

    .toprightcard:hover .content {
        opacity: 1;
        visibility: visible;
        left: 0%;
    }

    .toprightcard .content {
        position: relative;
        width: 80%;
        left: 20%;
        padding: 20px 20px 20px 40px;
        opacity: 0;
        visibility: hidden;
        transition: 0.5s;
    }

    .toprightcard .content h2 {
        font-size: 2em;
        line-height: 0.8em;
        z-index: 9999;
    }

    .toprightcard .content p {
        width: 60%;
        z-index: 9999;
    }

    .toprightcard .content a {
        position: relative;
        display: inline-block;
        color: #0f3f6e;
        padding: 10px 40px;
        background: #fff;
        margin-top: 25px;
        text-decoration: none;
        background-color: #dbd3f7;
        border: solid 2px #dbd3f7;
        transition: 0.3s;
        z-index: 99;
    }

    .toprightcard .content a:hover {
        color: #0f3f6e;
        background-color: #fff;
    }


    .decorated>span:after {
        content: '';
        position: absolute;
        top: 50%;
        border-bottom: 2px solid #cecece;
        width: 1400px;
        margin: 0 20px;
    }

    .decorated>span:after {
        left: 100%;
    }

    .dw {
        min-height: 250px;
        background-repeat: no-repeat;
        background-color: transparent;
        position: static;
        width: 100%;
        background-position: center top;
        background-size: contain;
        margin: 0 0 0;
    }

    .row h2 a:hover {
        color: #0f3f6e;
    }

    .dw-banner-bcg-img {
        min-height: 250px;
        display: flex;
    }
</style>

<div class="container-fluid px-0 overflow-hidden">
    <section class="position-relative w-100 h-auto pb-2 mb-2 mx-auto overflow-hidden" style="z-index: 0 ;">
        <div class="">
            <div class="dw-banner-bcg-img">
                <img src="http://localhost/omnicore/assets/images/Omnicore-new-logo-4.svg" width="400px" style="display:block;margin: 0 auto;" alt="">
            </div>
            <div class="w-100 position-absolute" style="top:-4px;z-index: -1;background-color: #dbd3f7;max-height: 128px;min-height: 128px;">
            </div>
        </div>
    </section>
    <section class="container w-100 mx-auto ps-4 pe-4">
        <h1 class="text-center fs-60 mt-5 fw-bold" style="font-size:60px;">
            Our Omnicore newsletters
        </h1>
        <div class="text-justify mt-5 mx-0 pt-2 px-0">
            <p></p>
        </div>
    </section>
    <section class="container w-100 mx-auto ps-4 pe-4 my-5">
        <div class="row gy-5">
            <div class="col-md-6">
                <div class="first-section-right ">
                    <h2 class="fs-40 mb-3 fw-600 text-end" style="line-height: 42px;">
                        <a href="" class="text-decoration-none text-darklight-700">
                            The Digital
                            <br>
                            Watch weekly
                        </a>
                    </h2>
                    <p class="fs-20 text-end" style="letter-spacing: 0.002em;">
                        Published every Friday, wrapping up the news of the previous week and what to expect in the week ahead.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class=" toprightcard">
                    <div class="content">
                        <h2 class="mb-3 fw-600">
                            Omnicore Weekly #176 &#8211; 6 September 2024
                        </h2>
                        <p class="fs-16">
                            Council of Europe opens AI convention for signature. Global AI framework signed to safeguard human rights. Musk's X wins...
                        </p>
                        <a href="" class="dbtn1">Subscribe</a>
                    </div>
                    <img src="https://dig.watch/wp-content/uploads/2022/10/dw-weekly.png" alt="">
                </div>
            </div>
        </div>

    </section>
    <section class="container w-100 mx-auto ps-4 pe-4 py-5 mt-5">
        <div class="row flex-row-reverse  gy-5">
            <div class="col-md-6">
                <div class="first-section-right align-items-start ">
                    <h2 class="fs-40 mb-3 fw-600 text-left" style="line-height: 42px;">
                        <a href="" class="text-decoration-none text-darklight-700">
                            The Omnicore
                            <br>
                            Monthly newsletter
                        </a>
                    </h2>
                    <p class="fs-20 text-left" style="letter-spacing: 0.002em;">
                        Published every Friday, wrapping up the news of the previous week and what to expect in the week ahead.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class=" toprightcard">
                    <div class="content">
                        <h2 class="mb-3 fw-600 ">
                            OMNICORE monthly #176 &#8211; 6 September 2024
                        </h2>
                        <p class="fs-16">
                            Council of Europe opens AI convention for signature. Global AI framework signed to safeguard human rights. Musk's X wins...
                        </p>
                        <a href="" class="dbtn1">Subscribe</a>
                    </div>
                    <img src="https://dig.watch/wp-content/uploads/2022/10/dw-weekly.png" alt="">
                </div>
            </div>
        </div>

    </section>
    <section class="my-5 w-100 mx-auto px-4">
        <h5 class="m-0 fs-28 fw-700 decorated overflow-hidden text-left" style="line-height:32px;color: #0f3f6e;">
            <span class="position-relative d-inline-block">Find us here</span>
        </h5>
    </section>
    <section>
        <div class="row">
            <div class="col-md-4">
                <div class="h-100 d-flex justify-content-center align-items-center">
                    <div class="d-flex justify-content-center align-items-center gap-2">
                        <div class="" style="width: 40px; height:40px;transition:0.3s">
                            <a href="" class="d-flex justify-content-center align-items-center">
                                <svg id="svg5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 963.66 963.66">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: #fff;
                                            }

                                            .cls-2 {
                                                stroke: #fff;
                                                stroke-miterlimit: 10;
                                            }
                                        </style>
                                    </defs>
                                    <circle class="cls-2" cx="481.83" cy="481.83" r="481.33"></circle>
                                    <g id="layer1">
                                        <path id="path1009" class="cls-1" d="M185.33,202.96l230.07,307.62-231.52,250.11h52.11l202.7-218.98,163.77,218.98h177.32l-243.02-324.92,215.5-232.81h-52.11l-186.67,201.67-150.83-201.67H185.33Zm76.63,38.38h81.46l359.72,480.97h-81.46L261.96,241.34Z"></path>
                                    </g>
                                </svg>
                            </a>
                        </div>

                        <div class="" style="width: 40px; height:40px;transition:0.3s">
                            <a href="" class="d-flex justify-content-center align-items-center">
                                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M405.33,0H106.67A106.69,106.69,0,0,0,0,106.67V405.33A106.69,106.69,0,0,0,106.67,512H405.33A106.67,106.67,0,0,0,512,405.33V106.67A106.67,106.67,0,0,0,405.33,0ZM170.67,405.33h-64V170.67h64Zm-32-261.71A37.64,37.64,0,1,1,176,106,37.5,37.5,0,0,1,138.67,143.62Zm288,261.71h-64V285.78c0-71.85-85.34-66.41-85.34,0V405.33h-64V170.67h64v37.65c29.78-55.17,149.34-59.24,149.34,52.82Z"></path>
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-8 border-start px-5">
                <div class="h-100 d-flex justify-content-center flex-column gap-2">
                    <span class="fw-600 my-2 fs-28">Subscribe to the Omnicore newsletters</span>
                    <span>Choose whether you would like to receive our weekly and/or monthly newsletters.</span>
                    <span>By clicking on the Subscribe button, you are agreeing to our <a href="<?= base_url() ?>privacy-policy" class="fst-italic" target="_blank">Privacy Policy</a> </span>
                    <div class="redered-form w-100 fs-14">
                        <section class="mb-4">
                            <form action="" class="d-block w-100" id="omni-news-form" style="max-width: 460px;">
                                <div class="form-group p-2">
                                    <label for="" class="form-label"></label>
                                    <input type="text" class="form-control rounded-pill py-2 " placeholder="Email">
                                </div>
                                <div class="form-group p-2">
                                    <div class="form-check fs-18">
                                        <input class="form-check-input" type="checkbox" value="" id="omnicore-weekly">
                                        <label class="form-check-label" for="omnicore-weekly">
                                            Omnicore weekly NewsLetter
                                        </label>
                                    </div>
                                    <div class="form-check fs-18">
                                        <input class="form-check-input" type="checkbox" value="" id="omnicore-monthly">
                                        <label class="form-check-label" for="omnicore-monthly">
                                            Omnicore monthly NewsLetter
                                        </label>
                                    </div>

                                </div>
                                <div class="form-group p-2">
                                    <button class="btn btn-primary fs-16 fw-600 w-50 py-2 rounded-pill">Subscribe</button>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    let omniNewsForm = document.querySelector("#omni-news-form")
</script>

<?php require(APPPATH . 'views/frontend/footer.php'); ?>