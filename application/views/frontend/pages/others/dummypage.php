<?php require(APPPATH . 'views/frontend/components/header.php'); ?>
<div class="row">
    <div class="col-md-4" id="landing_top-sidebar">
        <div class="d-flex">
            <div class="menuwrapper" style="width:35%;">
                <a href="" class="menu-logo">
                    <div class="logo"><span>Recent Updates</span><br /> <span id="totalUpdates"></span></div>
                </a>
                <div class="tickerwrapper">
                    <div class="menu-ticker --active" id="central">
                        <a href="<?= base_url() ?>recentupdate/central">
                            <div class="label text-dark">Central</div>
                            <div class="ticker-up" style="color: #8cd19e;"><span> 20</span></div>
                        </a>
                    </div>
                    <div class="menu-ticker">
                        <a href="<?= base_url() ?>recentupdate/state" style="color: black;">
                            <div class="label text-dark">State</div>
                            <div class="ticker-up" style="color: #f2555d;"><span> 20</span></div>
                        </a>
                    </div>

                    <div class="menu-ticker" id="bidupdate">
                        <a href="<?= base_url() ?>recentupdate/bidupdate">
                            <div class="label text-dark">Bid Updates</div>
                            <div class="ticker-up" style="color: #f2555d;"> <span> 20</span></div>
                        </a>
                    </div>

                    <div class="menu-ticker" id="openaccess">
                        <a href="<?= base_url() ?>recentupdate/openaccess">
                            <div class="label text-dark">Open Access</div>
                            <div class="ticker-up" style="color:#8cd19e ;"> <span> 20</span></div>
                        </a>
                    </div>

                    <div class="menu-ticker" id="newenergies">
                        <a href="<?= base_url() ?>recentupdate/newenergies">
                            <div class="label text-dark">New Energies</div>
                            <div class="ticker-up" style="color: #8cd19e;"> <span> 20</span></div>
                        </a>
                    </div>
                    <a href="<?= base_url() ?>recentupdate/others" class="menu-link">
                        <i class="icofont-edit"></i>
                        <div class="">other Updates</div>
                    </a>
                </div>
            </div>
            <div class="feedwrapper">
                <div class="feed-header">
                    <h2>Recent news</h2>
                </div>
                <a href="" class="feed-item">
                    <h3 class="label" style=" color: #3243e9;">3h ago</h3>
                    <p>SEC Chairman Applauds &#8216;Operation Crypto-Sweep&#8217;</p>
                </a>

                <a href="" class="feed-item">
                    <h3 class="label" style=" color: #3243e9;">5h ago</h3>
                    <p>Darknet Market Rapture Has Been Down 18% Retroactive Tax Has Been Down 18% Re</p>
                </a>
                <a href="" class="feed-item">
                    <h3 class="label" style=" color: #3243e9;">8h ago</h3>
                    <p>Indian Government Considering 18% Retroactive Tax</p>
                </a>


                <a href="" class="feed-link">
                    <div class="">
                        More Updates
                    </div>
                    <i class="icofont-long-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="h-article-section">
            <h1 class="fw-bold mb-2 text-primary-600">Top Articles</h1>
            <a href="<?= base_url() ?>category" class="cursor-pointer mt-3 text-uppercase text-primary-900"><span>Read all</span><i class="icofont-long-arrow-right"></i></a>
            <div class="py-3">
                <div class="row">
                    <div class="col-md-7" id="">
                        <div class="d-flex flex-wrap">
                            <div class="flex-grow-1">
                                <div class="">
                                    <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" width="100%" alt="" style="border-radius:10px">
                                </div>
                                <div class="trending-card-content">
                                    <div class="card-meta card-path"><span>CERC </span> <span>/ Orders</span></div>
                                    <h3 class="child-card-title fs-16">Bitcoin Use Case: Limiting Govt. Growth</h3>
                                    <p class="fs-14">In Guggenheim exhibition, Jenny Holzer grapples with the post-internet world she helped inspire</p>
                                </div>
                            </div>
                            <div class="w-50">
                                <div class="">
                                    <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" width="100%" alt="" style="border-radius:10px">
                                </div>
                                <div class="trending-card-content">
                                    <div class="card-meta card-path"><span>CERC </span> <span>/ Orders</span></div>
                                    <h3 class="child-card-title fs-16">Bitcoin Use Case: Limiting Govt. Growth</h3>
                                    <p class="fs-14">In Guggenheim exhibition, Jenny Holzer grapples with the post-internet world she helped inspire</p>
                                </div>
                            </div>
                            <div class="w-50">
                                <div class="">
                                    <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" width="100%" alt="" style="border-radius:10px">
                                </div>
                                <div class="trending-card-content">
                                    <div class="card-meta card-path"> <span>MNRE </span>// Orders</div>
                                    <h3 class="child-card-title fs-16">Bitcoin Use Case: Limiting Government Growth</h3>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-md-5">
                        <div class="w-100 mx-auto">
                            <div class="mb-3 d-flex flex-column align-items-start gap-3 bg-darklight-300   p-3 rounded ">
                                <span class="bg bg-danger py-1 px-2 float-end text-white rounded">Breaking</span>
                                <div class="">
                                    <div class="fw-bold mb-2 text-primary-900">
                                        2h ago
                                    </div>
                                    <a href="#" class="fw-400" style="line-height: 20px;">McAfee Predicts Bull Run as Crypto Markets Dip</a>
                                </div>
                            </div>
                            <div class=" d-flex flex-column align-items-start gap-3 bg-lavender-100 p-3 rounded">
                                <div class="mb-2">
                                    <i class="icofont-light-bulb"></i>
                                </div>
                                <div>
                                    <div class=" fw-bold mb-2 text-primary-900">
                                        INSIGHTS
                                    </div>
                                    <a href="#" class="fw-400" style="line-height: 20px;">McAfee Predicts Bull Run as Crypto Markets Dip</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="h-article-section">
            <h1 class="fw-bold mb-2 text-primary-600">Central</h1>
            <a href="<?= base_url() ?>category/central" class="cursor-pointer mt-3 text-uppercase text-primary-900"><span>Read all</span><i class="icofont-long-arrow-right"></i></a>
            <div class="py-3">
                <div class="row">
                    <div class="col-md-7" id="">
                        <div class="">
                            <div class="row">
                                <div class="">
                                    <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" width="100%" height="300px" alt="" style="border-radius:10px">
                                    <div class="trending-card-content">
                                        <div class="card-meta card-path">
                                            <span>CERC </span>
                                            <span>/ Orders</span>
                                        </div>
                                        <h3 class="trending-card-title">The Verge Struck by Second POW Attack in as Many Months</h3>
                                        <p class="fs-14">In Guggenheim exhibition, Jenny Holzer grapples with the post-internet Lorem ipsum dolor sit amet, consectetur adipisicing. world she helped inspire Lorem ipsum dolor sit amet consectetur Reiciendis, cum... <span style="color:blue">Read more</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="">
                                        <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" width="100%" alt="" style="border-radius:10px">
                                    </div>
                                    <div class="trending-card-content">
                                        <div class="card-meta card-path"><span>CERC </span> <span>/ Orders</span></div>
                                        <h3 class="child-card-title fs-16">Bitcoin Use Case: Limiting Govt. Growth</h3>
                                        <p class="fs-14">In Guggenheim exhibition, Jenny Holzer grapples with the post-internet world she helped inspire</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="">
                                        <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" width="100%" alt="" style="border-radius:10px">
                                    </div>
                                    <div class="trending-card-content">
                                        <div class="card-meta card-path"> <span>MNRE </span>// Orders</div>
                                        <h3 class="child-card-title fs-16">Bitcoin Use Case: Limiting Government Growth</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-5">
                        <div class="w-100 mx-auto">
                            <div class="mb-3 d-flex flex-column align-items-start gap-3 bg-darklight-300   p-3 rounded ">
                                <span class="bg bg-danger py-1 px-2 float-end text-white rounded">Breaking</span>
                                <div class="">
                                    <div class="fw-bold mb-2 text-primary-900">
                                        2h ago
                                    </div>
                                    <a href="#" class="fw-400" style="line-height: 20px;">McAfee Predicts Bull Run as Crypto Markets Dip</a>
                                </div>
                            </div>
                            <div class=" d-flex flex-column align-items-start gap-3 bg-lavender-100 p-3 rounded">
                                <div class="mb-2">
                                    <i class="icofont-light-bulb"></i>
                                </div>
                                <div>
                                    <div class=" fw-bold mb-2 text-primary-900">
                                        INSIGHTS
                                    </div>
                                    <a href="#" class="fw-400" style="line-height: 20px;">McAfee Predicts Bull Run as Crypto Markets Dip</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="assets/js/gradArrObj.js"></script>