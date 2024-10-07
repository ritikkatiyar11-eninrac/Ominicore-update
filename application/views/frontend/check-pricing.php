<?php require(APPPATH . 'views/frontend/header.php'); ?>
<style>
    .border-all-left-none {
        border: 1px solid rgb(232, 234, 237);
        border-left: 1px solid #fff;
    }

    .position_section {
        box-shadow: 0 2px 4px rgb(218, 220, 224);
        background: rgb(248, 249, 250);
        position: fixed;
        top: 72px;
        left: 0;
        right: 0;
        opacity: 0;
        visibility: hidden;
        z-index: 99999;
        /* max-width: 1246px; */
        margin: 0px auto;
        transition: all .1s ease-out;
    }

    @media (min-width:1240px) {
        .position_section .topcard-child {
            width: 15%;
        }
    }

    .position_section-visible {
        opacity: 1;
        visibility: visible;
    }

    .scrolltag {
        height: 208px;
    }

    @media (min-width: 936px) {
        .wa6ntc {
            display: none;
        }
    }

    @media (max-width: 936px) {
        .CtNnib {
            display: none;
        }

        .JICFe {
            height: 150px;
        }
    }

    .topcard-child {
        padding: 36px 0 24px;
        position: relative;
        vertical-align: middle;
    }

    .wa6ntc {
        line-height: 1rem;
        font-size: .75rem;
        letter-spacing: .025em;
        font-weight: 400;
        bottom: 0;
        color: rgb(95, 99, 104);
        left: 50%;
        margin: 0 0 25px;
        position: absolute;
        transform: rotate(-90deg);
        transform-origin: 0 50%;
        white-space: nowrap;
    }

    .tab-scrollbar-list {
        overflow-x: scroll;
        display: flex;
        -webkit-overflow-scrolling: touch;
    }

    .tab-scrollbar-list span {
        position: relative;
        display: flex;
        flex: 1 0 auto;
        transform: translateX(0px);
    }

    .tab-scrollbar-list-item-active {
        border-bottom: 2px solid var(--primary-500);
    }

    .tab-scrollbar-list a {
        height: 48px;
        background-color: #fff;
        color: var(--primary-700);
        transition: all 0.4s ease-in-out;
    }

    .tab-scrollbar-list a:hover {
        background: var(--primary-700);
        color: var(--darklight-100);
    }

    .pricing-btn {
        border: 1px solid var(--primary-700);
        cursor: pointer;
    }

    .pricing-btn.active {
        background: var(--primary-700);
        color: var(--darklight-100);
    }
</style>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<? base_url() ?>"><i class="icofont-home"></i></a></li>
            <li class="breadcrumb-item active">Check Pricing</li>
        </ol>
    </nav>
</div>
<div class="container-fluid">
    <section class="pricing-page pricing-category  py-2">
        <div class="my-4 d-flex w-100 mx-auto justify-content-end align-items-center">

            <div class="d-flex mt-4 position-relative">
                <div style="top: -62px;left: -151px;height: 100px;width: 149px;" class="wrapper-get-2 position-absolute">
                    <img src="<?= base_url() ?>assets/images/freeget2months.gif" width="113px" alt="" class="" style="object-fit: cover;height: 100%;width: 100%;margin-top: -10px;">
                </div>
                <div class="fs-14 fw-600 px-3 py-2 pricing-btn active" style="border-radius: 20px 0 0 20px;">Annual Billing</div>
                <div class="fs-14 fw-600 px-3 py-2 pricing-btn" style="border-radius: 0 20px 20px 0;">Monthly Billing</div>
            </div>
        </div>
        <script>
            document.querySelectorAll('.pricing-btn').forEach((item, key) => {
                item.addEventListener('click', () => {
                    item.classList.add('active');
                    removeActive(key)
                    updatePriceValue(key)
                })
            })

            function removeActive(index) {
                document.querySelectorAll('.pricing-btn').forEach((item, key) => {
                    if (index != key) item.classList.remove('active');
                })
            }

            function updatePriceValue(key) {
                let data = [
                    [4166.67, 4583.33, 5000.00, 5833.33],
                    [5000.00, 5500.00, 6000.00, 7000.00]
                ]
                document.querySelector('.business-starter').innerHTML = `₹ ${data[key][0]} <span class="fs-14">INR</span>`
                document.querySelector('.business-standard').innerHTML = `₹ ${data[key][1]} <span class="fs-14">INR</span>`
                document.querySelector('.business-plus').innerHTML = `₹ ${data[key][2]} <span class="fs-14">INR</span>`
                document.querySelector('.enterprise').innerHTML = `₹ ${data[key][3]} <span class="fs-14">INR</span>`
            }
        </script>
        <div class="d-none d-md-flex d-lg-flex w-100">
            <div style="flex:1;" id="freeforever">
                <div class="price-content border py-4 px-3">
                    <div class="d-flex align-items-center flex-column">
                        <div class="fs-22 fw-400 mb-1 text-center">Free Forever!</div>
                        <div class="d-flex align-items-center flex-column justify-content-center my-2 mx-0">
                            <div class="fs-36 fw-400 text-primary-400 free-forever">
                                ₹ 0.00 <span class="fs-14">INR</span>
                            </div>
                            <div class="fs-16 fw-500 text-center"></div>
                            <div class="fs-12 mt-1 text-center mb-2">
                                <span>Price/User/Month*</span>
                                <span>
                                    <i class="icofont-info-circle"></i>
                                </span>
                            </div>
                        </div>
                        <div class="d-inline">
                            <a href="#scrolltag-smooth" class="btn btn-outline-primary">Learn More</a>
                        </div>
                    </div>
                    <ul class="list-style-none fs-14 fw-400 mt-3 border-top ps-0" style="line-height: 1.25rem;">
                        <li class="my-2 py-2 mx-0 d-flex gap-1 justify-content-center">
                            <i class="icofont-tick-mark text-primary" style="line-height: 18px;"></i>
                            <span> 1 User </span>
                        </li>
                        <li class="my-2 py-2 mx-0 d-flex gap-1 justify-content-center">
                            <i class="icofont-tick-mark text-primary" style="line-height: 18px;"></i>
                            <span>Any 5 Content</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div style="flex:1;" id="businessstarter">
                <div class="price-content border py-4 px-3">
                    <div class="d-flex align-items-center flex-column">
                        <div class="fs-22 fw-400 mb-1 text-center">Business Starter</div>
                        <div class="d-flex align-items-center flex-column justify-content-center my-2 mx-0">
                            <div class="fs-36 fw-400 text-primary-400 business-starter">
                                ₹ 4166.67 <span class="fs-14">INR</span>
                            </div>
                            <div class="fs-16 fw-500 text-center"></div>
                            <div class="fs-12 mt-1 text-center mb-2">
                                <span>Price/User/Month*</span>
                                <span>
                                    <i class="icofont-info-circle"></i>
                                </span>
                            </div>
                        </div>
                        <div class="d-inline">
                            <a href="#scrolltag-smooth" class="btn btn-outline-primary">Learn More</a>
                        </div>
                    </div>
                    <ul class="list-style-none fs-14 fw-400 mt-3 border-top ps-0" style="line-height: 1.25rem;">
                        <li class="my-2 py-2 mx-0 d-flex gap-1 justify-content-center">
                            <i class="icofont-tick-mark text-primary" style="line-height: 18px;"></i>
                            <span><b>5 </b>Users</span>
                        </li>
                        <li class="my-2 py-2 mx-0 d-flex gap-1 justify-content-center">
                            <i class="icofont-tick-mark text-primary" style="line-height: 18px;"></i>
                            <span><b>5 </b>States</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div style="flex:1;">
                <div class="price-content border py-4 px-3">
                    <div class="d-flex align-items-center flex-column">
                        <div class="fs-22 fw-400 mb-1 text-center">Business Standard</div>
                        <div class="d-flex align-items-center flex-column justify-content-center my-2 mx-0">
                            <div class="fs-36 fw-400 text-primary-400 business-standard">
                                ₹ 4583.33 <span class="fs-14">INR</span>
                            </div>
                            <div class="fs-16 fw-500 text-center"></div>
                            <div class="fs-12 mt-1 text-center mb-2">
                                <span>Price/User/Month*</span>
                                <span>
                                    <i class="icofont-info-circle"></i>
                                </span>
                            </div>
                        </div>
                        <div class="d-inline">
                            <a href="#scrolltag-smooth" class="btn btn-outline-primary">Learn More</a>
                        </div>
                    </div>
                    <ul class="list-style-none fs-14 fw-400 mt-3 border-top ps-0" style="line-height: 1.25rem;">
                        <li class="my-2 py-2 mx-0 d-flex gap-1 justify-content-center">
                            <i class="icofont-tick-mark text-primary" style="line-height: 18px;"></i>
                            <span><b>10 </b>Users</span>
                        </li>
                        <li class="my-2 py-2 mx-0 d-flex gap-1 justify-content-center">
                            <i class="icofont-tick-mark text-primary" style="line-height: 18px;"></i>
                            <span><b>10 </b>States</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div style="flex:1;">
                <div class="price-content border py-4 px-3">
                    <div class="d-flex align-items-center flex-column">
                        <div class="fs-22 fw-400 mb-1 text-center">Business Plus</div>
                        <div class="d-flex align-items-center flex-column justify-content-center my-2 mx-0">
                            <div class="fs-36 fw-400 text-primary-400 business-plus">
                                ₹ 5000.00 <span class="fs-14">INR</span>
                            </div>
                            <div class="fs-16 fw-500 text-center"></div>
                            <div class="fs-12 mt-1 text-center mb-2">
                                <span>Price/User/Month*</span>
                                <span>
                                    <i class="icofont-info-circle"></i>
                                </span>
                            </div>
                        </div>
                        <div class="d-inline">
                            <a href="#scrolltag-smooth" class="btn btn-outline-primary">Learn More</a>
                        </div>
                    </div>
                    <ul class="list-style-none fs-14 fw-400 mt-3 border-top ps-0" style="line-height: 1.25rem;">
                        <li class="my-2 py-2 mx-0 d-flex gap-1 justify-content-center">
                            <i class="icofont-tick-mark text-primary" style="line-height: 18px;"></i>
                            <span><b>15 </b>Users</span>
                        </li>
                        <li class="my-2 py-2 mx-0 d-flex gap-1 justify-content-center">
                            <i class="icofont-tick-mark text-primary" style="line-height: 18px;"></i>
                            <span><b>15 </b>States</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div style="flex:1;">
                <div class="price-content border py-4 px-3">
                    <div class="d-flex align-items-center flex-column">
                        <div class="fs-22 fw-400 mb-1 text-center">Enterprise</div>
                        <div class="d-flex align-items-center flex-column justify-content-center my-2 mx-0">
                            <div class="fs-36 fw-400 text-primary-400 enterprise">
                                ₹ 5833.33 <span class="fs-14">INR</span>
                            </div>
                            <div class="fs-16 fw-500 text-center"></div>
                            <div class="fs-12 mt-1 text-center mb-2">
                                <span>Price/User/Month*</span>
                                <span>
                                    <i class="icofont-info-circle"></i>
                                </span>
                            </div>
                        </div>
                        <div class="d-inline">
                            <a href="#scrolltag-smooth" class="btn btn-outline-primary">Learn More</a>
                        </div>
                    </div>
                    <ul class="list-style-none fs-14 fw-400 mt-3 border-top ps-0" style="line-height: 1.25rem;">
                        <li class="my-2 py-2 mx-0 d-flex gap-1 justify-content-center">
                            <i class="icofont-tick-mark text-primary" style="line-height: 18px;"></i>
                            <span><b>15 </b>Users</span>
                        </li>
                        <li class="my-2 py-2 mx-0 d-flex gap-1 justify-content-center">
                            <i class="icofont-tick-mark text-primary" style="line-height: 18px;"></i>
                            <span>All States</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="d-sm-block  d-md-none d-lg-none text-center">
            <div class="border-bottom">
                <div class="overflow-hidden">
                    <div class="tab-scrollbar-list container" style="scrollbar-width: none;">
                        <span class="d-flex gap-2">
                            <a href="#freeforever" style="line-height: 30px;" class=" tab-scrollbar-list-item-active price-tab-btn flex-grow-1 px-2 fw-500 cursor-pointer px-2 py-2">Free Forever!</a>
                            <a href="#businessstarter" style="line-height: 30px;" class=" flex-grow-1 px-2 fw-500 cursor-pointer px-2 py-2">Business Starter</a>
                            <a href="#" style="line-height: 30px;" class=" flex-grow-1 px-2 fw-500 cursor-pointer px-2 py-2">Business Standard</a>
                            <a href="#" style="line-height: 30px;" class=" flex-grow-1 px-2 fw-500 cursor-pointer px-2 py-2">Business Plus</a>
                            <a href="#" style="line-height: 30px;" class=" flex-grow-1 px-2 fw-500 cursor-pointer px-2 py-2">Enterprise</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <div class="d-flex justify-content-center w-100">
                    <div style="flex:1; max-width:300px">
                        <div class="price-content border py-4 px-3">
                            <div class="d-flex align-items-center flex-column">
                                <div class="fs-22 fw-400 mb-1 text-center">Free Forever!</div>
                                <div class="d-flex align-items-center flex-column justify-content-center my-2 mx-0">
                                    <div class="fs-36 fw-400 text-primary-400">
                                        ₹ 0.00 <span class="fs-14">INR</span>
                                    </div>
                                    <div class="fs-16 fw-500 text-center"></div>
                                    <div class="fs-12 mt-1 text-center mb-2">
                                        <span>Price/User/Month*</span>
                                        <span>
                                            <i class="icofont-info-circle"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="d-inline">
                                    <a href="#scrolltag-smooth" class="btn btn-outline-primary">Learn More</a>
                                </div>
                            </div>
                            <ul class="list-style-none fs-14 fw-400 mt-3 border-top ps-0" style="line-height: 1.25rem;">
                                <li class="my-2 py-2 mx-0 d-flex gap-1 justify-content-center">
                                    <i class="icofont-tick-mark text-primary" style="line-height: 18px;"></i>
                                    <span> --- </span>
                                </li>
                                <li class="my-2 py-2 mx-0 d-flex gap-1 justify-content-center">
                                    <i class="icofont-tick-mark text-primary" style="line-height: 18px;"></i>
                                    <span>Any 5 Content</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-none" style="flex:1;  max-width:300px">
                        <div class="price-content border py-4 px-3">
                            <div class="d-flex align-items-center flex-column">
                                <div class="fs-22 fw-400 mb-1 text-center">Business Starter</div>
                                <div class="d-flex align-items-center flex-column justify-content-center my-2 mx-0">
                                    <div class="fs-36 fw-400 text-primary-400">
                                        ₹ 4166.67 <span class="fs-14">INR</span>
                                    </div>
                                    <div class="fs-16 fw-500 text-center"></div>
                                    <div class="fs-12 mt-1 text-center mb-2">
                                        <span>Price/User/Month*</span>
                                        <span>
                                            <i class="icofont-info-circle"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="d-inline">
                                    <a href="#scrolltag-smooth" class="btn btn-outline-primary">Learn More</a>
                                </div>
                            </div>
                            <ul class="list-style-none fs-14 fw-400 mt-3 border-top ps-0" style="line-height: 1.25rem;">
                                <li class="my-2 py-2 mx-0 d-flex gap-1 justify-content-center">
                                    <i class="icofont-tick-mark text-primary" style="line-height: 18px;"></i>
                                    <span><b>5 </b>Users</span>
                                </li>
                                <li class="my-2 py-2 mx-0 d-flex gap-1 justify-content-center">
                                    <i class="icofont-tick-mark text-primary" style="line-height: 18px;"></i>
                                    <span><b>5 </b>States</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-none" style="flex:1;  max-width:300px">
                        <div class="price-content border py-4 px-3">
                            <div class="d-flex align-items-center flex-column">
                                <div class="fs-22 fw-400 mb-1 text-center">Business Standard</div>
                                <div class="d-flex align-items-center flex-column justify-content-center my-2 mx-0">
                                    <div class="fs-36 fw-400 text-primary-400">
                                        ₹ 4583.33 <span class="fs-14">INR</span>
                                    </div>
                                    <div class="fs-16 fw-500 text-center"></div>
                                    <div class="fs-12 mt-1 text-center mb-2">
                                        <span>Price/User/Month*</span>
                                        <span>
                                            <i class="icofont-info-circle"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="d-inline">
                                    <a href="#scrolltag-smooth" class="btn btn-outline-primary">Learn More</a>
                                </div>
                            </div>
                            <ul class="list-style-none fs-14 fw-400 mt-3 border-top ps-0" style="line-height: 1.25rem;">
                                <li class="my-2 py-2 mx-0 d-flex gap-1 justify-content-center">
                                    <i class="icofont-tick-mark text-primary" style="line-height: 18px;"></i>
                                    <span><b>10 </b>Users</span>
                                </li>
                                <li class="my-2 py-2 mx-0 d-flex gap-1 justify-content-center">
                                    <i class="icofont-tick-mark text-primary" style="line-height: 18px;"></i>
                                    <span><b>10 </b>States</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-none" style="flex:1;  max-width:300px">
                        <div class="price-content border py-4 px-3">
                            <div class="d-flex align-items-center flex-column">
                                <div class="fs-22 fw-400 mb-1 text-center">Business Plus</div>
                                <div class="d-flex align-items-center flex-column justify-content-center my-2 mx-0">
                                    <div class="fs-36 fw-400 text-primary-400">
                                        ₹ 5000.00 <span class="fs-14">INR</span>
                                    </div>
                                    <div class="fs-16 fw-500 text-center"></div>
                                    <div class="fs-12 mt-1 text-center mb-2">
                                        <span>Price/User/Month*</span>
                                        <span>
                                            <i class="icofont-info-circle"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="d-inline">
                                    <a href="#scrolltag-smooth" class="btn btn-outline-primary">Learn More</a>
                                </div>
                            </div>
                            <ul class="list-style-none fs-14 fw-400 mt-3 border-top ps-0" style="line-height: 1.25rem;">
                                <li class="my-2 py-2 mx-0 d-flex gap-1 justify-content-center">
                                    <i class="icofont-tick-mark text-primary" style="line-height: 18px;"></i>
                                    <span><b>15 </b>Users</span>
                                </li>
                                <li class="my-2 py-2 mx-0 d-flex gap-1 justify-content-center">
                                    <i class="icofont-tick-mark text-primary" style="line-height: 18px;"></i>
                                    <span><b>15 </b>States</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-none" style="flex:1;  max-width:300px">
                        <div class="price-content border py-4 px-3">
                            <div class="d-flex align-items-center flex-column">
                                <div class="fs-22 fw-400 mb-1 text-center">Enterprise</div>
                                <div class="d-flex align-items-center flex-column justify-content-center my-2 mx-0">
                                    <div class="fs-36 fw-400 text-primary-400">
                                        ₹ 5833.33 <span class="fs-14">INR</span>
                                    </div>
                                    <div class="fs-16 fw-500 text-center"></div>
                                    <div class="fs-12 mt-1 text-center mb-2">
                                        <span>Price/User/Month*</span>
                                        <span>
                                            <i class="icofont-info-circle"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="d-inline">
                                    <a href="#scrolltag-smooth" class="btn btn-outline-primary">Learn More</a>
                                </div>
                            </div>
                            <ul class="list-style-none fs-14 fw-400 mt-3 border-top ps-0" style="line-height: 1.25rem;">
                                <li class="my-2 py-2 mx-0 d-flex gap-1 justify-content-center">
                                    <i class="icofont-tick-mark text-primary" style="line-height: 18px;"></i>
                                    <span><b>15 </b>Users</span>
                                </li>
                                <li class="my-2 py-2 mx-0 d-flex gap-1 justify-content-center">
                                    <i class="icofont-tick-mark text-primary" style="line-height: 18px;"></i>
                                    <span>All States</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="scrolltag-smooth" class="scrolltag d-flex flex-column justify-content-center align-items-center pt-5">
        <a href="" class="text-primary fs-16 fw-500">Compare plans in details</a>
        <i class="icofont-long-arrow-down text-primary mt-2 fs-18"></i>
    </section>
    <section class="position_section">
        <div class="container-fluid">
            <table class="w-100">
                <tbody>
                    <tr>
                        <td class="JICFe w-25 border-all-left-none">
                            <div class="d-flex">
                                <div class="me-1 d-block"></div>
                                <h3 class="fs-14 fw-400 me-1 lh-1">
                                </h3>
                            </div>
                        </td>
                        <td class="JICFe topcard-child  border text-center">
                            <p class="wa6ntc">Free Forever!</p>
                            <div class="CtNnib">
                                <div class="fs-18 fw-400 pb-1 text-center">Free Forever!</div>
                                <div class="d-inline">
                                    <button class="btn btn-outline-primary">Start a trial</button>
                                </div>
                            </div>
                        </td>
                        <td class="JICFe topcard-child  border text-center">
                            <p class="wa6ntc">Business Starter</p>
                            <div class="CtNnib">
                                <div class="fs-18 fw-400 mb-1 text-center">Business Starter</div>
                                <div class="d-inline">
                                    <button class="btn btn-outline-primary">Start a trial</button>
                                </div>
                            </div>
                        </td>
                        <td class="JICFe topcard-child  border text-center">
                            <p class="wa6ntc">Business Standard</p>
                            <div class="CtNnib">
                                <div class="fs-18 fw-400 pb-1 text-center">Business Standard</div>
                                <div class="d-inline">
                                    <button class="btn btn-outline-primary">Start a trial</button>
                                </div>
                            </div>
                        </td>
                        <td class="JICFe topcard-child  border text-center">
                            <p class="wa6ntc">Business Plus</p>
                            <div class="CtNnib">
                                <div class="fs-18 fw-400 mb-1 text-center">Business Plus</div>
                                <div class="d-inline">
                                    <button class="btn btn-outline-primary">Start a trial</button>
                                </div>
                            </div>
                        </td>
                        <td class=" JICFe topcard-child  border text-center">
                            <p class="wa6ntc">Enterprise</p>
                            <div class="CtNnib">
                                <div class="fs-18 fw-400 mb-1 text-center">Enterprise</div>
                                <div class="d-inline">
                                    <button class="btn btn-outline-primary">Start a trial</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <section class="pricing-details mb-3">
        <div class="mt-5">
            <div class="heading pb-3" style="border-bottom: 2px solid rgb(95, 99, 104);">
                <h3>Productivity and collaboration</h3>
            </div>
            <!-- Central -->

            <table class="w-100">
                <tr>
                    <td class="py-3">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                <b>Central Updates</b>
                            </h3>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                CERC
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                MoP
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                MNRE
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                MoF
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                Apellate Tribunal
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                Hon'ble Supreme Court
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                Others
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>
            </table>
            <!-- State -->
            <table class="w-100">
                <tr>
                    <td class=" py-3">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                <b>State Updates</b>
                            </h3>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                Upto 5 States
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                >5 & Upto 10 States
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                >10 & Upto 15 States
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                All States
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>

                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>
            </table>
            <!-- Thermal -->
            <table class="w-100">
                <tr>
                    <td class=" py-3">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                <b>Power Generation Updates</b>
                            </h3>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                Thermal
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                Solar
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                Wind
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                Biomass
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                Small Hydro Plants
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                Nuclear
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                Others
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>
            </table>
            <!-- Power Distribution -->
            <table class="w-100">
                <tr>
                    <td class=" py-3">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                <b>Power Distribution Updates</b>
                            </h3>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                Power Tariffs
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                C&I Consumers
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                Network Augmentation
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>
            </table>
            <!-- Power Transmission Updates -->
            <table class="w-100">
                <tr>
                    <td class=" py-3">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                <b>Power Transmission Updates</b>
                            </h3>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                Connectivity
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                Charges & Losses
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                Projects
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                Goverment Announcements
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>
            </table>
            <!-- Bid Updates -->
            <table class="w-100">
                <tr>
                    <td class=" py-3">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                <b>Bid Updates</b>
                            </h3>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                Bid Invites
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                Bid Results
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                Others
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>

            </table>

            <!-- New Energies -->

            <table class="w-100">
                <tr>
                    <td class=" py-3">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                <b>New Energies</b>
                            </h3>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                BESS
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                Hydrogen
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                PHSP
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>
            </table>

            <!-- Solar Rooftop -->
            <table class="w-100">
                <tr>
                    <td class=" py-3">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                <b>Solar Rooftop</b>
                            </h3>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                Regulations
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                Policies
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                Feed-in-Tariffs
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>
            </table>

            <!-- Open Access -->

            <table class="w-100">
                <tr>
                    <td class=" py-3">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                <b>Open Access</b>
                            </h3>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                SOlar Source
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                Wind Source
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                Hybrid Source
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>
            </table>

            <!-- News Letter -->

            <table class="w-100">
                <tr>
                    <td class=" py-3">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                <b>Newsletter</b>
                            </h3>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                Weekly
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>


            </table>

            <!-- Infographics -->
            <table class="w-100">
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                <b>Infographics</b>
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>



            </table>

            <!-- Number of Subscribers -->
            <table class="w-100">
                <tr>
                    <td class=" py-3">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                <b>Number of Subscribers</b>
                            </h3>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                Upto 5
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                >5 & Upto 10
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                >10 & Upto 15
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                >15 (Custom)
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>

                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>


            </table>

            <!-- Updates Views -->

            <table class="w-100">
                <tr>
                    <td class=" py-3">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                <b>Update Views</b>
                            </h3>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                Upto 5
                            </h3>
                        </div>
                    </td>

                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                Unlimited
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>
            </table>

            <!-- Archive Access -->
            <table class="w-100">
                <tr>
                    <td class=" py-3">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                <b>Archive Access</b>
                            </h3>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                Yes
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                </tr>

                <tr>
                    <td class="w-25 py-3 border-all-left-none">
                        <div class="d-flex">
                            <div class="me-1 d-block"></div>
                            <h3 class="fs-14 fw-400 me-1 lh-1">
                                No
                            </h3>
                        </div>
                    </td>
                    <td class=" py-3 border-all-left-none text-success text-center">
                        <i class="icofont-tick-mark text-primary fs-24"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>
                    <td class=" py-3 border-all-left-none text-danger text-center">
                        <i class="icofont-close"></i>
                    </td>


                </tr>
            </table>
        </div>
    </section>
</div>

<script>
    const position_section = document.querySelector(".position_section")
    const scrolltag = document.querySelector(".scrolltag ")
    const lasteleTag = document.querySelector(".lasteleTag")


    // console.log(scrolltag.scrollTop)
    function isElementIsAtTop(element) {
        const elementreact = element.getBoundingClientRect()
        const viewPortHeight = 1;
        return elementreact.top <= viewPortHeight

    }

    window.addEventListener("scroll", function() {
        if (isElementIsAtTop(scrolltag)) {
            let bottom = scrolltag.getBoundingClientRect().bottom
            if (bottom > -3100) {
                position_section.classList.add("position_section-visible")
            } else {
                position_section.classList.remove("position_section-visible")
            }
        } else {
            position_section.classList.remove("position_section-visible")
        }

    })
</script>

<?php require(APPPATH . 'views/frontend/footer.php'); ?>