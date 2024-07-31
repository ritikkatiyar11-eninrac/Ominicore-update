<?php require(APPPATH . 'views/header.php'); ?>

<style>
    @media (min-width:1280px) {
        .remaining-section-content {
            grid-template-areas: "col1 col2 feed";
        }

        .remaining-section-content .child-1 {
            margin-bottom: 0;
        }
    }

    @media (min-width:1024px) {
        .remaining-section-content {
            grid-template-areas:
                "col1 col2"
                "feed feed";
        }

        .remaining-section-content .child-1 {
            display: block;
        }
    }

    @media (min-width:768px) {
        .remaining-section-content {
            grid-template-areas:
                "col1 feed"
                "col2 feed"
                ".  feed";
        }



        .remaining-section-content .child-1 {
            max-width: 28rem;
            display: flex;
        }

      
    }

    .child2-container h4 {
        font-size: 18px;
    }

    @media(max-width:767px) {
        .remaining-section-content {
            grid-template-areas:
                "col1"
                "col2"
                "feed";
        }
    }

    .remaining-section-content {
        display: grid;
        column-gap: 2rem;

    }

    .remaining-section-content .child-1 {
        justify-content: space-between;
        align-self: flex-start;
        margin-bottom: 3.5rem;
    }

    .remaining-section-content .child2-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(208px, 1fr));
    }

   </style>
<section class="section">
    <div class="px-0 container-xl">
        <div class="category-header d-flex flex-column">
            <h2 class="text-darklight-800">Opinion</h2>
            <div class="">
                <a href="" class="category-link d-flex flex"><span>READ ALL</span></p>
                    <i class="icofont-long-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="remaining-section-content">
            <div class="child-1" style="grid-area:col1;">
                <div class="w-100">
                    <div class="w-100">
                        <img width="100%" height="354" src="https://cdn.sanity.io/images/cxgd3urn/production/3dfadeb93e7dca981f6f0b836b9ef6bc54c5eef9-1518x1138.jpg?rect=0,0,1517,1138&w=640&h=480&fit=crop&auto=format" alt="">
                    </div>
                    <a href="">Technology</a>
                    <div class="titile-text">where is the big museum blockbuster on AI?</div>
                    <div class="description">Even the science-themed PST Art exhibitions, opening in Los Angeles in September, avoid the tech revolutions of our day</div>
                    <div class="timestamp">
                        <span class="author">jhon</span>
                        <span class="time">1 July</span>
                    </div>
                </div>
            </div>

            <div class="child-2 " style="grid-area:col2;">
                <div class="child2-container">
                    <div class="child-card-1">
                        <div class="mb-2">
                            <img width="208" height="156" src="<?= base_url() ?>assets/images/child-card-img-1.webp" alt="">
                        </div>
                        <div class="mb-2" style="grid-column-start: 1;">
                            <div class="fs-14 fw-900">CERC // orders</div>
                        </div>
                        <a href="#" style="transition-duration: 0.3s;transition-property: color, background-color, border-color, text-decoration-color, fill, stroke;transition-timing-function: cubic-bezier(.4,0,.2,1);transition-duration: .15s;"
                        >
                        <h4 style="letter-spacing:.015em;line-height: 1.1;">Los Angeles museum repatriates 20 objects to the Warumungu people of Australia</h4>
                    </a>
                        <div class=""></div>
                    </div>
                    <div class="child-card-2">
                        <div class="">
                            <img width="208" height="156" src="<?= base_url() ?>assets/images/child-card-img-1.webp" alt="">
                        </div>
                        <div class=""></div>
                        <a href="#"></a>
                        <div class=""></div>
                    </div>
                    <div class="child-card-3"></div>
                    <div class="child-card-4"></div>
                </div>

            </div>

            <div class="child-3" style="grid-area:feed;">

                <div class="news-block">

                    <div class="timestamp">
                        <span>16 July 2024</span>
                    </div>
                    <div class="news-link">
                        <a href="">
                            Lorem ipsum, dolor sit ametddd jhgconsectetur adipisicing elit. A numquam modi labore et debitis.

                        </a>
                    </div>

                </div>

                <div class="news-block">

                    <div class="timestamp">
                        <span>16 July 2024</span>
                    </div>
                    <div class="news-link">
                        <a href="">
                            Lorem ipsum, dolor sit ametddd jhgconsectetur adipisicing elit. A numquam modi labore et debitis.

                        </a>
                    </div>

                </div>
                <div class="news-block">

                    <div class="timestamp">
                        <span>16 July 2024</span>
                    </div>
                    <div class="news-link">
                        <a href="">
                            Lorem ipsum, dolor sit ametddd jhgconsectetur adipisicing elit. A numquam modi labore et debitis.

                        </a>
                    </div>

                </div>
                <div class="news-block">

                    <div class="timestamp">
                        <span>16 July 2024</span>
                    </div>
                    <div class="news-link">
                        <a href="">
                            Lorem ipsum, dolor sit ametddd jhgconsectetur adipisicing elit. A numquam modi labore et debitis.

                        </a>
                    </div>

                </div>
                <div class="news-block">

                    <div class="timestamp">
                        <span>16 July 2024</span>
                    </div>
                    <div class="news-link">
                        <a href="">
                            Lorem ipsum, dolor sit ametddd jhgconsectetur adipisicing elit. A numquam modi labore et debitis.

                        </a>
                    </div>

                </div>


            </div>

        </div>


    </div>
    <!-- <hr> -->
</section>