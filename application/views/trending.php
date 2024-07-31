<style>
    .page-header a {
        color: #0f3f6e;
        width: max-content;
        transition: all 0.4s ease-in-out;
        transition-timing-function: cubic-bezier(.4, 0, .2, 1);

    }

    .page-header a:hover {
        transform: scale(0.98);
        color: #3243e9;
        transition-duration: .4s;
    }

    .page-header a span {
        text-transform: uppercase;
    }

    .page-header a i {
        font-size: 1.5rem;
    }
</style>

<div class="langing_page-top d-flex">
    <div class="langing_page-top-sidebar" id="landing_top-sidebar">

        <div class="menuwrapper" style="width:35%;">
            <a href="" class="menu-logo">
                <div class="logo"><span>Recent Updates</span><br /> <span id="totalUpdates"></span></div>
            </a>
            <div class="tickerwrapper">
                <div class="menu-ticker --active" id="central">
                    <div class="label">Central</div>
                    <div class="ticker-up" style="color: #8cd19e;">60</div>
                </div>
                <div class="menu-ticker" id="state">
                    <div class="label">State</div>
                    <div class="ticker-up" style="color: #f2555d;">40</div>
                </div>
                <div class="menu-ticker" id="powergeneration">
                    <div class="label">Generation</div>
                    <div class="ticker-up" style="color: #8cd19e;">50</div>
                </div>
                <div class="menu-ticker" id="infographic">
                    <div class="label">Infographics</div>
                    <div class="ticker-up" style="color: #f2555d;">50</div>
                </div>
                <div class="menu-ticker" id="openaccess">
                    <div class="label">Open Access</div>
                    <div class="ticker-up" style="color:#8cd19e ;">50</div>
                </div>
                <a href="" class="menu-link">
                    <i class="icofont-edit"></i>
                    <div class="">Edit List</div>
                </a>
            </div>
        </div>
        <div class="feedwrapper" style="width:65%; ">
            <div class="feed-header">
                <h2>Recent news</h2>
            </div>
            <a href="" class="feed-item">
                <h3 class="label" style=" color: #3243e9;">3h ago</h3>
                <p>SEC Chairman Applauds &#8216;Operation Crypto-Sweep&#8217;</p>
            </a>
            <a href="" class="feed-item">
                <h3 class="label" style=" color: #3243e9;">5h ago</h3>
                <p>Darknet Market Rapture Has Been Down for a Week — Users Grow Leery</p>
            </a>
            <a href="" class="feed-item">
                <h3 class="label" style=" color: #3243e9;">8h ago</h3>
                <p>Indian Government Considering 18% Retroactive Tax on Crypto Trading, Mining</p>
            </a>


            <a href="" class="feed-link">
                <div class="">
                    More Updates
                </div>
                <i class="icofont-long-arrow-right"></i>
            </a>
        </div>
    </div>
    <div class="langing_page-contentwrapper" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;">

        <!-- section one -->
        <div class="page-header flex-column">
            <h1 class="page-title" style="color: #3243e9; margin-top:0;">Top Articles</h1>
            <a href="<?= base_url() ?>category"  class="d-flex" style="cursor:pointer;margin-left: 2%;"><span>Read all</span><i class="icofont-long-arrow-right"></i></a>
        </div>
        <div class="content-section">
            <div class="content-col">
                <div class="trending-card card-placeholder-img-01 imghover" style="grid-area: trendingfull-card;">
                    <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                    <div class="trending-card-content">
                        <div class="card-meta"> <span style="color: #0f3f6e; font-weight:600; opacity:1;">CERC </span>// Orders</div>
                        <h3 class="trending-card-title" style="font-size:18px;line-height:28px; font-weight:600; margin-top:0; margin-bottom:0;">The Verge Struck by Second POW Attack in as Many Months</h3>
                        <p class="fs-14">In Guggenheim exhibition, Jenny Holzer grapples with the post-internet Lorem ipsum dolor sit amet, consectetur adipisicing. world she helped inspire Lorem ipsum dolor sit amet consectetur Reiciendis, cum... <span style="color:blue">Read more</span></p>
                    </div>
                </div>

                <div class="trending-card card-half placeholder-image-03 w-inline-block" style="grid-area: trendinghalf-1;">
                    <div class="">
                        <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                    </div>
                    <div class="trending-card-content">
                        <div class="card-meta"> <span style="color: #0f3f6e; font-weight:600; opacity:1;">CERC </span>// Orders</div>
                        <h3 class="child-card-title" style="font-size:16px;line-height:20px; font-weight:600; margin-top:0; margin-bottom:0;">Bitcoin Use Case: Limiting Govt. Growth</h3>
                        <p class="fs-14">In Guggenheim exhibition, Jenny Holzer grapples with the post-internet world she helped inspire</p>
                    </div>
                </div>
                <div class="trending-card card-half placeholder-image-03 w-inline-block" style="grid-area: trendinghalf-2;">
                    <div class="">
                        <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                    </div>
                    <div class="trending-card-content">
                        <div class="card-meta"> <span style="color: #0f3f6e; font-weight:600; opacity:1;">CERC </span>// Orders</div>
                        <h3 class="child-card-title" style="font-size:16px;line-height:20px; font-weight:600; margin-top:0; margin-bottom:0;">Bitcoin Use Case: Limiting Government Growth</h3>
                    </div>
                </div>


            </div>
            <div class="side-col">
                <div class="placeholder-image-04" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <div class="tag-breaking"><span>Breaking</span></div>
                    <div class="">
                        <div class="card-meta mb-2">
                            2h ago
                        </div>
                        <div class="card-title" style="line-height: 20px;">U.S. Government Shutdown Hits Record Length With No End Seen</div>
                    </div>
                </div>
                <div class="placeholder-image-05 d-flex flex-column align-items-start">
                    <div class="thumbnailwrapper mb-2">
                        <i class="icofont-light-bulb"></i>
                    </div>
                    <div>
                        <div class="card-meta">
                            INSIGHTS
                        </div>
                        <p class="card-title fw-400" style="line-height: 20px;">McAfee Predicts Bull Run as Crypto Markets Dip</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- section one -->
        <div class="page-header flex-column">
            <h1 class="page-title" style="color: #3243e9; margin-top:0;">CERC</h1>
            <a href="<?= base_url() ?>category/central/central-cerc"  class="d-flex" style="cursor:pointer;margin-left: 2%;"><span>Read all</span><i class="icofont-long-arrow-right"></i></a>
        </div>
        <div class="content-section">
            <div class="content-col">
                <div class="trending-card card-placeholder-img-01 imghover" style="grid-area: trendingfull-card;">
                    <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                    <div class="trending-card-content">
                        <div class="card-meta"> <span style="color: #0f3f6e; font-weight:600; opacity:1;">CERC </span>// Orders</div>
                        <h3 class="trending-card-title" style="font-size:18px;line-height:28px; font-weight:600; margin-top:0; margin-bottom:0;">The Verge Struck by Second POW Attack in as Many Months</h3>
                        <p class="fs-14">In Guggenheim exhibition, Jenny Holzer grapples with the post-internet Lorem ipsum dolor sit amet, consectetur adipisicing. world she helped inspire Lorem ipsum dolor sit amet consectetur Reiciendis, cum... <span style="color:blue">Read more</span></p>
                    </div>
                </div>

                <div class="trending-card card-half placeholder-image-03 w-inline-block" style="grid-area: trendinghalf-1;">
                    <div class="">
                        <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                    </div>
                    <div class="trending-card-content">
                        <div class="card-meta"> <span style="color: #0f3f6e; font-weight:600; opacity:1;">CERC </span>// Orders</div>
                        <h3 class="child-card-title" style="font-size:16px;line-height:20px; font-weight:600; margin-top:0; margin-bottom:0;">Bitcoin Use Case: Limiting Govt. Growth</h3>
                        <p class="fs-14">In Guggenheim exhibition, Jenny Holzer grapples with the post-internet world she helped inspire</p>
                    </div>
                </div>
                <div class="trending-card card-half placeholder-image-03 w-inline-block" style="grid-area: trendinghalf-2;">
                    <div class="">
                        <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                    </div>
                    <div class="trending-card-content">
                        <div class="card-meta"> <span style="color: #0f3f6e; font-weight:600; opacity:1;">CERC </span>// Orders</div>
                        <h3 class="child-card-title" style="font-size:16px;line-height:20px; font-weight:600; margin-top:0; margin-bottom:0;">Bitcoin Use Case: Limiting Government Growth</h3>
                    </div>
                </div>


            </div>
            <div class="side-col">
                <div class="placeholder-image-04" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <div class="tag-breaking"><span>breaking</span></div>
                    <div class="">
                        <div class="card-meta mb-2">
                            2h ago
                        </div>
                        <div class="card-title" style="line-height: 20px;">U.S. Government Shutdown Hits Record Length With No End Seen</div>
                    </div>
                </div>
                <div class="placeholder-image-05">

                    <div>
                        <div class="card-meta">
                            30 july 2024
                        </div>
                        <p class="card-title fw-400" style="line-height: 20px;">McAfee Predicts Bull Run as Crypto Markets Dip</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-header flex-column">
            <h1 class="page-title" style="color: #3243e9; margin-top:0;">MoP</h1>
            <a href="<?= base_url() ?>category/central/central-mop" class="d-flex" style="cursor:pointer;margin-left: 2%;"><span>Read all</span><i class="icofont-long-arrow-right"></i></a>
        </div>
        <div class="content-section">
            <div class="content-col">
                <div class="trending-card card-placeholder-img-01 imghover" style="grid-area: trendingfull-card;">
                    <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                    <div class="trending-card-content">
                        <div class="card-meta"> <span style="color: #0f3f6e; font-weight:600; opacity:1;">CERC </span>// Orders</div>
                        <h3 class="trending-card-title" style="font-size:18px;line-height:28px; font-weight:600; margin-top:0; margin-bottom:0;">The Verge Struck by Second POW Attack in as Many Months</h3>
                        <p class="fs-14">In Guggenheim exhibition, Jenny Holzer grapples with the post-internet Lorem ipsum dolor sit amet, consectetur adipisicing. world she helped inspire Lorem ipsum dolor sit amet consectetur Reiciendis, cum... <span style="color:blue">Read more</span></p>
                    </div>
                </div>

                <div class="trending-card card-half placeholder-image-03 w-inline-block" style="grid-area: trendinghalf-1;">
                    <div class="">
                        <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                    </div>
                    <div class="trending-card-content">
                        <div class="card-meta"> <span style="color: #0f3f6e; font-weight:600; opacity:1;">CERC </span>// Orders</div>
                        <h3 class="child-card-title" style="font-size:16px;line-height:20px; font-weight:600; margin-top:0; margin-bottom:0;">Bitcoin Use Case: Limiting Govt. Growth</h3>
                        <p class="fs-14">In Guggenheim exhibition, Jenny Holzer grapples with the post-internet world she helped inspire</p>
                    </div>
                </div>
                <div class="trending-card card-half placeholder-image-03 w-inline-block" style="grid-area: trendinghalf-2;">
                    <div class="">
                        <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                    </div>
                    <div class="trending-card-content">
                        <div class="card-meta"> <span style="color: #0f3f6e; font-weight:600; opacity:1;">CERC </span>// Orders</div>
                        <h3 class="child-card-title" style="font-size:16px;line-height:20px; font-weight:600; margin-top:0; margin-bottom:0;">Bitcoin Use Case: Limiting Government Growth</h3>
                    </div>
                </div>

                <div class="trending-card card-half placeholder-image-03 w-inline-block" style="grid-area: trendinghalf-3;">
                    <div class="">
                        <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                    </div>
                    <div class="trending-card-content">
                        <div class="card-meta"> <span style="color: #0f3f6e; font-weight:600; opacity:1;">CERC </span>// Orders</div>
                        <h3 class="child-card-title" style="font-size:16px;line-height:20px; font-weight:600; margin-top:0; margin-bottom:0;">Bitcoin Use Case: Limiting Government Growth</h3>
                        <p class="fs-14">In Guggenheim exhibition, Jenny Holzer grapples with the post-internet world she helped inspire</p>
                    </div>
                </div>


                <div class="trending-card card-half placeholder-image-03 w-inline-block" style="grid-area: trendinghalf-4;">
                    <div class="">
                        <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                    </div>
                    <div class="trending-card-content">
                        <div class="card-meta"> <span style="color: #0f3f6e; font-weight:600; opacity:1;">CERC </span>// Orders</div>
                        <h3 class="child-card-title" style="font-size:16px;line-height:20px; font-weight:600; margin-top:0; margin-bottom:0;">Bitcoin Use Case: Limiting Government Growth</h3>
                        <p class="fs-14">In Guggenheim exhibition, Jenny Holzer grapples with the post-internet world she helped inspire</p>
                    </div>
                </div>
            </div>
            <div class="side-col">
                <div class="placeholder-image-04" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <div class="tag-breaking"><span>breaking</span></div>
                    <div class="">
                        <div class="card-meta mb-2">
                            2h ago
                        </div>
                        <div class="card-title" style="line-height: 20px;">U.S. Government Shutdown Hits Record Length With No End Seen</div>
                    </div>
                </div>
                <div class="placeholder-image-05">
                    <div>
                        <div class="card-meta">
                            30 july 2024
                        </div>
                        <p class="card-title fw-400" style="line-height: 20px;">Texas city faces backlash for stripping local arts centre's funding over drag performances</p>
                    </div>
                </div>
                <div class="placeholder-image-05">

                    <div>
                        <div class="card-meta">
                            30 july 2024
                        </div>
                        <p class="card-title fw-400" style="line-height: 20px;">McAfee Predicts Bull Run as Crypto Markets Dip</p>
                    </div>
                </div>
                <div class="placeholder-image-05">

                    <div>
                        <div class="card-meta">
                            30 july 2024
                        </div>
                        <p class="card-title fw-400" style="line-height: 20px;">Texas city faces backlash for stripping local arts centre's funding over drag performance</p>
                    </div>
                </div>
                <div class="placeholder-image-05">

                    <div>
                        <div class="card-meta">
                            30 july 2024
                        </div>
                        <p class="card-title fw-400" style="line-height: 20px;">Texas city faces backlash for stripping local arts centre's funding over drag performance</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url() ?>assets/js/trendingjs.js"></script>