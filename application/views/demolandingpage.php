<head>
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/fonts.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <style>
        body {
            padding: 0;
            margin: 0;
        }

        .langing_page-top {
            letter-spacing: 0.5px;
        }

        .feed-header {

            display: flex;
            height: 100px;
            padding-left: 15%;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 auto;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            background-color: #eee9ff;
        }

        .menu-logo {
            display: flex;
            height: 100px;
            align-items: center;
            justify-content: center;
            flex: 0 0 auto;
            background-color: #3243e9;
            text-decoration: none;
        }

        .menu-logo .logo {
            /* font-size: px; */
            letter-spacing: 0.9px;
            line-height: -2px;
            text-align: center;
            color: #fff;
        }




        .tickerwrapper {
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        .tickerwrapper .menu-link {
            display: flex;
            height: 100px;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            flex: 0 0 auto;
            color: #3243e9;
            background-color: #fff;
            max-width: 100%;
        }

        .langing_page-top-sidebar .menu-ticker {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            flex: 1;
            cursor: pointer;
            transition: all 0.3s ease-out;
            /* background-color: #fff; */
        }

        .langing_page-top-sidebar .menu-ticker:hover {
            background-color: #ccc8ff
        }

        .langing_page-top-sidebar h3 {
            margin-top: 0px;
            font-size: 14px;
            line-height: 20px;

        }

        .langing_page-top-sidebar .label {
            margin-bottom: 5px;
            /* color: #3243e9; */
            font-weight: 700;
        }

        .menuwrapper {
            display: flex;
            width: 120px;
            height: 100vh;
            flex-direction: column;
        }

        a {
            text-decoration: none;
        }

        .feedwrapper .feed-item {
            display: flex;
            height: auto;
            min-height: 90px;
            padding: 5% 15%;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            flex: 1;
            border-top: 1px solid #ccc8ff;
            background-color: #eee9ff;
            color: #464646;
        }

        .feedwrapper a:hover {
            background-color: #ccc8ff;
        }



        .feedwrapper a p {
            line-height: 18px;
            margin-bottom: 10px;
            font-size: 14px;
            margin-top: 0;
        }

        .feedwrapper .feed-link {
            display: flex;
            padding: 5% 15%;
            height: 100px;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            flex: 0 0 auto;
            border-top: 1px solid #ccc8ff;
            background-color: #eee9ff;
            color: #3243e9;
        }



        .top-nav {
            display: flex;
            height: 100px;
            justify-content: flex-end;
            align-items: stretch;
            flex: 0 0 auto;
            background-color: #fff;

        }

        .top-nav a:hover {
            background-color: rgba(96, 50, 233, 0.08);
        }

        .top-nav .nav-link {
            height: 100%;
            padding-right: 15px;
            padding-left: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 120px;
            transition: background-color 400ms cubic-bezier(.77, 0, .175, 1);
            letter-spacing: 0.5px;
            font-size: 14px;
        }

        .navwrapper {
            background-image: linear-gradient(90deg, transparent, #fff), linear-gradient(180deg, transparent, #fff), linear-gradient(180deg, #eee9ff, #eee9ff);
            display: flex;
            flex: 0 auto;
        }

        .page-header {
            display: flex;
            padding-top: 10px;
            padding-bottom: 20px;
            padding-left: 3%;
        }

        .page-header .page-title {
            margin-left: 1%;
            margin-top: 20px;
            margin-bottom: 10px;
            font-size: 38px;
            line-height: 44px;
            font-weight: 700;
        }

        .langing_page-contentwrapper .content-section {
            display: flex;
            gap: 20px;
            padding-right: 3%;
            padding-bottom: 5%;
            padding-left: 3%;
            align-items: flex-start;

        }

        .content-col {
            width: 64%;
            overflow: hidden;
            display: grid;
            gap: 20px;
            grid-template-areas:
                "trendingfull-card trendingfull-card"
                "trendinghalf-1 trendinghalf-2"
            ;
        }

        .content-col img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            opacity: 0.8;
            background-image: linear-gradient(180deg, transparent, rgba(0, 0, 0, 0.8)), ;
        }

        .trending-card-content {
            display: block;
            padding: 10px 0;

        }

        .trending-card-content .card-meta {
            margin-right: 10px;
            margin-bottom: 5px;
            opacity: 0.8;
        }

        .side-col .card-meta {
            opacity: 0.5;
        }

        .trending-card-content h3 {
            /* color: #fff; */
            color: #464646;
            font-weight: 600;
        }

        .trending-card-content p {
            text-align: justify;
            color: #464646;
        }

        .trending-card-content p {
            margin-top: 0;
        }

        .side-col {
            width: 40%;
            gap: 20px;
        }

        .side-col .placeholder-image-04 {
            padding: 10px 10px;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 100%;
            min-height: 200px;
            height: auto;
            opacity: 0.8;
            background-image: linear-gradient(180deg, transparent, rgba(0, 0, 0, 0.8)), url(https://tinyurl.com/52zpfvfm);
            color: white;
        }

        .side-col .placeholder-image-05 {
            padding: 20px;
            border-radius: 10px;
            background-color: #eee9ff;
            min-height: 200px;
            height: auto;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            color: #2b03a4;
        }

        .side-col .placeholder-image-05 .card-meta {
            margin-bottom: 10px;
        }

        .side-col .placeholder-image-05 .thumbnailwrapper {
            /* margin-bottom: 15px; */
            margin-top: 20px;
            font-size: 20px;
            font-weight: 800;
        }

        .side-col .placeholder-image-05 .card-title {
            font-weight: 400;
        }

        .side-col .placeholder-image-04 .tag-breaking {
            display: flex;
            flex-direction: row-reverse;

        }

        .side-col .placeholder-image-04 .tag-breaking span {
            background-color: red;
            color: white;
            padding: 2px 4px;
            border-radius: 5px;
        }

        /* .--active{
            background-color: red;
            color: white;
        } */

        .langing_page-top-sidebar {
            display: none;
        }



        .content-section .side-col {
            display: flex;
            flex-direction: column;
        }

        @media(max-width:510px) {
            .content-col {
                grid-template-areas:
                    "trendingfull-card trendingfull-card"
                    "trendinghalf-1 trendinghalf-1"
                    "trendinghalf-2 trendinghalf-2"
                ;
            }
        }

        @media (min-width:811px) and (max-width:1023px) {
            .langing_page-contentwrapper {
                display: flex;
                margin: 0 auto;
                max-width: 90%;
                flex-direction: column;
                flex: 1;
            }
        }

       

        @media(max-width:810px) {
            .content-section {
                display: flex;
                flex-direction: column;
                width: 100%;
            }

            .langing_page-contentwrapper {
                display: flex;
                margin: 0 auto;
                max-width: 90%;
                flex-direction: column;
                flex: 1;
            }

            .content-section .content-col {
                width: 100%;
            }

            .content-section .side-col {
                display: flex;
                width: 100%;
            }
        }

        @media (min-width:1024px) {
            .langing_page-contentwrapper {
                display: flex;
                float: right;
                flex-direction: column;
                flex: 1;
                width: calc(100% - 380px);
            }

            .langing_page-top-sidebar {
                display: flex;
                z-index: 9999;
            max-width: 370px;
            overflow: hidden;
            position: fixed;
            top: 0;
            }
        }
    </style>
</head>

<body>
    <div class="langing_page-top">
       
        <div class="langing_page-top-sidebar position-fixed" id="landing_top-sidebar" style=" z-index:20; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;">
            <div class="menuwrapper d-flex flex-column" style="width:35%;">
                <a href="" class="menu-logo">
                    <div class="logo"><span> Today </span><br /> <span style="line-height: 10px;"> Updates</span></div>
                </a>
                <div class="tickerwrapper">
                    <div class="menu-ticker --active">
                        <div class="label">Central</div>
                        <div class="ticker-up">30</div>
                    </div>
                    <div class="menu-ticker">
                        <div class="label">State</div>
                        <div class="ticker-up">40</div>
                    </div>
                    <div class="menu-ticker">
                        <div class="label">Generation</div>
                        <div class="ticker-up">50</div>
                    </div>


                    <div class="menu-ticker">
                        <div class="label">Infographics</div>
                        <div class="ticker-up">50</div>
                    </div>
                    <div class="menu-ticker">
                        <div class="label">Open Access</div>
                        <div class="ticker-up">50</div>
                    </div>
                    <a href="" class="menu-link">
                        <i class="icofont-edit"></i>
                        <div class="">Edit List</div>
                    </a>
                </div>
            </div>
            <div class="feedwrapper d-flex flex-column" style="width:65%; ">
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
            <div class="page-header">
                <h1 class="page-title">Top Articles</h1>
            </div>
            <div class="content-section">
                <div class="content-col">
                    <div class="trending-card card-placeholder-img-01 imghover" style="grid-area: trendingfull-card;">
                        <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                        <div class="trending-card-content">
                            <div class="card-meta">CERC // Orders</div>
                            <h3 class="trending-card-title" style="font-size:18px;line-height:28px; font-weight:600; margin-top:0; margin-bottom:0;">The Verge Struck by Second POW Attack in as Many Months</h3>
                            <p class="fs-14">In Guggenheim exhibition, Jenny Holzer grapples with the post-internet Lorem ipsum dolor sit amet, consectetur adipisicing. world she helped inspire Lorem ipsum dolor sit amet consectetur Reiciendis, cum... <span style="color:blue">Read more</span></p>
                        </div>
                    </div>

                    <div class="trending-card card-half placeholder-image-03 w-inline-block" style="grid-area: trendinghalf-1;">
                        <div class="">
                            <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                        </div>
                        <div class="trending-card-content">
                            <div class="card-meta">Jan 11</div>
                            <h3 class="child-card-title" style="font-size:16px;line-height:20px; font-weight:600; margin-top:0; margin-bottom:0;">Bitcoin Use Case: Limiting Govt. Growth</h3>
                            <p class="fs-14">In Guggenheim exhibition, Jenny Holzer grapples with the post-internet world she helped inspire</p>
                        </div>
                    </div>
                    <div class="trending-card card-half placeholder-image-03 w-inline-block" style="grid-area: trendinghalf-2;">
                        <div class="">
                            <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                        </div>
                        <div class="trending-card-content">
                            <div class="card-meta">Jan 11</div>
                            <h3 class="child-card-title" style="font-size:16px;line-height:20px; font-weight:600; margin-top:0; margin-bottom:0;">Bitcoin Use Case: Limiting Government Growth</h3>
                        </div>
                    </div>


                </div>
                <div class="side-col">
                    <div class="placeholder-image-04" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                        <div class="tag-breaking"><span>breaking</span></div>
                        <div class="card-meta">
                            2h ago
                        </div>
                        <div class="card-title" style="line-height: 20px;">U.S. Government Shutdown Hits Record Length With No End Seen</div>
                    </div>
                    <div class="placeholder-image-05">
                        <div class="thumbnailwrapper">
                            <i class="icofont-bulb-alt"></i>
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
            <div class="page-header">
                <h1 class="page-title">Top Articles</h1>
            </div>
            <div class="content-section">
                <div class="content-col">
                    <div class="trending-card card-placeholder-img-01 imghover" style="grid-area: trendingfull-card;">
                        <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                        <div class="trending-card-content">
                            <div class="card-meta">CERC // Orders</div>
                            <h3 class="trending-card-title" style="font-size:18px;line-height:28px; font-weight:600; margin-top:0; margin-bottom:0;">The Verge Struck by Second POW Attack in as Many Months</h3>
                            <p class="fs-14">In Guggenheim exhibition, Jenny Holzer grapples with the post-internet Lorem ipsum dolor sit amet, consectetur adipisicing. world she helped inspire Lorem ipsum dolor sit amet consectetur Reiciendis, cum... <span style="color:blue">Read more</span></p>
                        </div>
                    </div>

                    <div class="trending-card card-half placeholder-image-03 w-inline-block" style="grid-area: trendinghalf-1;">
                        <div class="">
                            <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                        </div>
                        <div class="trending-card-content">
                            <div class="card-meta">Jan 11</div>
                            <h3 class="child-card-title" style="font-size:16px;line-height:20px; font-weight:600; margin-top:0; margin-bottom:0;">Bitcoin Use Case: Limiting Govt. Growth</h3>
                            <p class="fs-14">In Guggenheim exhibition, Jenny Holzer grapples with the post-internet world she helped inspire</p>
                        </div>
                    </div>
                    <div class="trending-card card-half placeholder-image-03 w-inline-block" style="grid-area: trendinghalf-2;">
                        <div class="">
                            <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                        </div>
                        <div class="trending-card-content">
                            <div class="card-meta">Jan 11</div>
                            <h3 class="child-card-title" style="font-size:16px;line-height:20px; font-weight:600; margin-top:0; margin-bottom:0;">Bitcoin Use Case: Limiting Government Growth</h3>
                        </div>
                    </div>


                </div>
                <div class="side-col">
                    <div class="placeholder-image-04" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                        <div class="tag-breaking"><span>breaking</span></div>
                        <div class="card-meta">
                            2h ago
                        </div>
                        <div class="card-title" style="line-height: 20px;">U.S. Government Shutdown Hits Record Length With No End Seen</div>
                    </div>
                    <div class="placeholder-image-05">
                        <div class="thumbnailwrapper">
                            <i class="icofont-bulb-alt"></i>
                        </div>
                        <div>
                            <div class="card-meta">
                                INSIGHTS
                            </div>
                            <p class="card-title fw-400" style="line-height: 20px;">McAfee Predicts Bull Run as Crypto Markets Dip</p>
                        </div>
                    </div>

                    <div class="placeholder-image-05">
                        <div class="thumbnailwrapper">
                            <i class="icofont-bulb-alt"></i>
                        </div>
                        <div>
                            <div class="card-meta">
                                INSIGHTS
                            </div>
                            <p class="card-title fw-400" style="line-height: 20px;">McAfee Predicts Bull Run as Crypto Markets Dip</p>
                        </div>
                    </div>
                    <div class="placeholder-image-05">
                        <div class="thumbnailwrapper">
                            <i class="icofont-bulb-alt"></i>
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
        </div>
    </div>
</body>