<!-- <?php require(APPPATH . 'views/header.php'); ?> -->

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
        font-size: 32px;
        letter-spacing: 5px;
        line-height: 32px;
        text-align: center;
        color: #fff;
    }

    .langing_page-top-sidebar {
        display: flex;
        overflow: hidden;
        position: fixed;
        top: 0;
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
        background-color: #fff;
    }

    .langing_page-top-sidebar h3 {
        margin-top: 0px;

        font-size: 14px;
        line-height: 20px;

    }

    .langing_page-top-sidebar .label {
        margin-bottom: 5px;
        color: #3243e9;
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

    .langing_page-contentwrapper {
        display: flex;
        margin-left: 400px;
        flex-direction: column;
        flex: 1;
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
        padding-left: 5%;
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
        padding-right: 5%;
        padding-bottom: 5%;
        padding-left: 5%;
        align-items: flex-start;
    }

    .langing_page-contentwrapper .content-section .content-col {
        display: grid;
        grid-template-areas: "trendingfull-card trendingfull-card side-trending"
            "trendinghalf-1 trendinghalf-2 side-trending"
            "trendinghalf-3 trendinghalf-4 side-trending"
        ;
        width: 100%;
        width:863px;
    }



    .content-col.card {
        -webkit-transform: translateZ(0) scale(1.0, 1.0);
        transform: translateZ(0);
        display: flex;
        min-height: 200px;
        margin-right: 2%;
        margin-bottom: 30px;
        margin-left: 2%;
        padding: 20px;
        flex-direction: column;
        justify-content: flex-end;
        align-items: stretch;
        flex: 1;
        border-radius: 10px;
        background-color: #ccc8ff;
        filter: blur(0px);
        color: #fff;
    }

    .card-placeholder-img-01 {
        background-image: linear-gradient(180deg, transparent, rgba(0, 0, 0, 0.8)), url(https://assets.website-files.com/5c394f2a6bc471310401932a/5c3a50a35c550c635c4af28a_photo-1501523460185-2aa5d2a0f981.jpeg);
        background-position: 0px 0px, 50%;
        background-size: auto, cover;
        background-repeat: repeat, no-repeat;
        height: 280px;
        width: 100%;
        color: #fff;
        flex: 0 auto;
        padding: 20px;
        display: flex;
        justify-content: flex-end;
        flex-direction: column;
        align-items: flex-start;
        border-radius: 10px;
    }

    .card-half {
        width: 100%;
        max-width: 46%;
        flex: 0 auto;
    }

    .placeholder-image-03 {
        background-image: linear-gradient(180deg, transparent, rgba(0, 0, 0, 0.6)), url(../assets/images/placeholder-image-03.jpeg);
    }

    .imghover:hover {
        transform-style: preserve-3d;
        transform: translate3d(0px, 0px, 0px) scale3d(1.01, 1.01, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);
    }
</style>

<div class="langing_page-top">
    <div class="langing_page-top-sidebar position-fixed" style=" z-index:20; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;">
        <div class="menuwrapper d-flex flex-column" style="width:120px;">
            <a href="<?= base_url() ?>" class="menu-logo">
                <div class="logo">FN</div>
            </a>
            <div class="tickerwrapper">
                <div class="menu-ticker">
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
        <div class="feedwrapper d-flex flex-column" style="width:280px; ">
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
        <div class="top-nav">
            <div class="navwrapper" style="width:70%;justify-content: space-between;align-items: center;">
                <a href="" class="nav-link">My Account</a>
                <a href="" class="nav-link">Analytics</a>
                <a href="" class="nav-link">Events</a>
                <a href="" class="nav-link">ICo</a>
                <a href="" class="nav-link">
                    <i class="icofont-search-1"></i>
                </a>
            </div>
        </div>
        <div class="page-header">
            <h1 class="page-title">Top Articles</h1>
        </div>
        <div class="content-section">
            <div class="content-col">
                <a href="" class="card card-placeholder-img-01 imghover" style="grid-area: trendingfull-card; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <div class="card-meta">{Jan 12}</div>
                    <h3 class="trending-card-title" style="font-size:24px;line-height:28px; font-weight:400; margin-top:0; margin-bottom:0;">The Verge Struck by Second POW Attack in as Many Months</h3>
                </a>
                <a href="" class="card card-half placeholder-image-03 w-inline-block" style="grid-area: trendinghalf-1;">
                    <div class="card-meta">{Jan 11}</div>
                    <h3 class="child-card-title" style="font-size:16px;line-height:20px; font-weight:400; margin-top:0; margin-bottom:0;">Bitcoin Use Case: Limiting Government Growth</h3>
                </a>
                <a href="" class="card card-half placeholder-image-03 w-inline-block" style="grid-area: trendinghalf-2;">
                    <div class="card-meta">{Jan 11}</div>
                    <h3 class="child-card-title" style="font-size:16px;line-height:20px; font-weight:400; margin-top:0; margin-bottom:0;">Bitcoin Use Case: Limiting Government Growth</h3>
                </a>
            </div>
            <div class="content-col side-col">

            </div>
        </div>
    </div>
</div>