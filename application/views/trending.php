<style>
    .trending-container {
        display: grid;
        gap: 2rem;
        align-items: flex-start;
        grid-template-rows: auto auto;
        grid-template-columns: repeat(4, minmax(0, 1fr));
    }

    @media screen and (max-width:1024px){
        .trending-container{
            grid-template-columns: repeat(1, minmax(0, 1fr));
        }

        .trending-container-left{
            grid-row-start: none!important;
        }

        .trending-container-left ul {
        list-style: none;
        display: grid;
        grid-template-columns: repeat(1, minmax(0, 1fr));
        gap: 1rem;
    }

    .right-img-content{
        margin-top: 2.75rem;
    }

    .trending-container-left h2{
        margin-bottom: 2.5rem;
    }

    .blog-card-content-{
        display: none;
    }
      
    }

    .trending-container-left ul {
        list-style: none;
        display: grid;
        grid-template-columns: repeat(1, minmax(0, 1fr));
        gap: 1rem;
    }

    .description {
        font-size: 12px;
        font-style: normal;
        letter-spacing: -.48px;
        font-weight: 500;
        line-height: 110%;
        color: #949596;

    }

    .trending-container-right {
        display: grid;
        gap: 2rem;
        grid-column: span 3 / span 3;
        grid-column-start: auto;
        grid-template-columns: repeat(3, minmax(0, 1fr));
    }

    .trending-container-right .trending-news-right {
        grid-column: span 3 / span 3;
    }

    .trending-container-left {
       
        display: flex;
        justify-content: space-between;
        flex-direction: column;
        grid-row: span 2 / span 2;
        grid-row-start: 1;
        padding-top: 0.5rem;
        border-top-width: 4px;
        border-color: rgb(18 18 18 black);
    }

    .trending-container-left h2 {
        font-size: 32px;
        letter-spacing: -1.92px;
        font-weight: 600;
        line-height: 100%;
        margin-bottom: 88px;
    }

    


    .trending-container-left ul li>div .news-image {
        flex: 0 0 105px;
        aspect-ratio: 1/1;
        display: inline-block;
        text-decoration: inherit;

    }

img {
    max-width: 100%;
        width: 100%;
        object-fit: cover;
       
        object-position: center top;
    }
</style>

<section class="section trending-section" style="padding-top: 2rem;">
    <div class="container-xxl">
        <div class="trending-container">
            <div class=" trending-container-right">
                <div class="border-top border-dark pt-2 trending-news-right" >
                    <div class="trending-heading" style="height: 120px;">
                        <div class="d-flex align-items-end" style="column-gap: 7rem;">
                            <a href="" class="text-dark" style="font-size: 40px; letter-spacing:-1.6px; line-height:100%; font-weight:600; text-transform: uppercase;"><span style="-webkit-line-clamp:3; display:-webkit-box; overflow:hidden;-webkit-box-orient:vertical;">'Cross' Star Aldis Hodge Teases Bringing A 'Sexy,'...</span></a>
                            <a href="" style="font-size: 16px; font-style:normal; font-weight:600;letter-spacing:-.64px; line-height: 94%;"><span style="white-space: nowrap;">Read full story </span></a>
                        </div>
                    </div>
                    <div class="-mx-4 mx-0 right-img-content">
                        <a href="">
                            <img style="height:468px;" src="<?= base_url() ?>assets/images/main-background-img.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="flex blog-card-content- flex-column border-bottom " style="padding-bottom: 0.75rem; font-weight:600;">
                    <a href="">
                        <img src="<?= base_url() ?>assets/images/blog-1.webp" style="aspect-ratio: 4/3;" alt="">
                    </a>
                    <div class="d-flex flex-column" style="flex: 1 1 0%; padding-top:1rem;">
                        <a href=""  class="text-dark" style="line-height: 94%; letter-spacing: -.64px;">
                            <span style="-webkit-line-clamp:3; display:-webkit-box; overflow:hidden;-webkit-box-orient:vertical;">Sanaa Lathan, Algee Smith And Sierra Capri On Delving Into The Stigmas Of Mental Health, Young Motherhood And More In 'Young. Wild. Free.'</span>
                        </a>
                        <div class="d-flex flex-wrap align-items-center mt-1" style="flex: 1 1 0%;">
                            <p class="" style="font-size: 12px; font-style:normal;letter-spacing: -.48px; font-weight:400;line-height:16px;flex:100%;margin-top:1.5rem; color:#949494;">Today</p>
                        </div>
                    </div>
                </div>

                <div class="flex blog-card-content- flex-column border-bottom " style="padding-bottom: 0.75rem;">
                    <a href="">
                        <img src="<?= base_url() ?>assets/images/blog-2.jpg" style="aspect-ratio: 4/3;" alt="">
                    </a>
                    <div class="d-flex flex-column" style="flex: 1 1 0%; padding-top:1rem;">
                        <a href=""  class="text-dark"  style="line-height: 94%; letter-spacing: -.64px;font-weight:600;">
                            <span style="-webkit-line-clamp:3; display:-webkit-box; overflow:hidden;-webkit-box-orient:vertical;">Candace Parker Coaches Kobe Bryant's 7-Year-Old Daughter Bianka In Adorable Photo</span>
                        </a>
                        <div class="d-flex flex-wrap align-items-center mt-1" style="flex: 1 1 0%;">
                            <p class="" style="font-size: 12px; font-style:normal;letter-spacing: -.48px; font-weight:400;line-height:16px;flex:100%;margin-top:1.5rem; color:#949494;">Today</p>
                        </div>
                    </div>
                </div>

                <div class="flex blog-card-content- flex-column border-bottom " style="padding-bottom: 0.75rem;">
                    <a href="">
                        <img src="<?= base_url() ?>assets/images/blog-3.jpg" style="aspect-ratio: 4/3;" alt="">
                    </a>
                    <div class="d-flex flex-column" style="flex: 1 1 0%; padding-top:1rem;">
                        <a href="" class="text-dark"  style="line-height: 94%; letter-spacing: -.64px; font-weight:600;">
                            <span style="-webkit-line-clamp:3; display:-webkit-box; overflow:hidden;-webkit-box-orient:vertical;">Man Discovers Bush Family's Ancestors Enslaved His Ancestors</span>
                        </a>
                        <div class="d-flex flex-wrap align-items-center mt-1" style="flex: 1 1 0%;">
                            <p class="" style="font-size: 12px; font-style:normal;letter-spacing: -.48px; font-weight:400;line-height:16px;flex:100%;margin-top:1.5rem; color:#949494;">Today</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-top border-dark col p-0 trending-container-left">
                <h2 class="pt-2">Most rated</h2>
                <ul class="" style="padding-left: 0;">
                    
                    <li>
                        <div class="d-flex gap-2 w-100">
                            <a href="" class="news-image">
                                <img style="width: 105px; height:105px" src="<?= base_url() ?>assets/images/news-image.jpg" alt="news image">
                            </a>
                            <div class="child d-flex flex-column border-bottom justify-content-between" style="padding-bottom:0.5rem ;">
                                <a href="" class="fs-14 fw-500" style="line-height: 1.03;">
                                    <span>Here's What Needs To Happen In 'The Chi' Season 7</span>
                                </a>
                                <div class="">
                                    <p style="opacity: 0.6; margin-bottom:0; font-size:12px;">July 08, 2024</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex gap-2 w-100">
                            <a href="" class="news-image">
                                <img style="width: 105px; height:105px" src="<?= base_url() ?>assets/images/news-image.jpg" alt="news image">
                            </a>
                            <div class="child d-flex flex-column border-bottom justify-content-between" style="padding-bottom:0.5rem ;">
                                <a href="" class="fs-14 fw-500" style="line-height: 1.03;">
                                    <span>Here's What Needs To Happen In 'The Chi' Season 7</span>
                                </a>
                                <div class="">
                                    <p style="opacity: 0.6; margin-bottom:0; font-size:12px;">July 08, 2024</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex gap-2 w-100">
                            <a href="" class="news-image">
                                <img style="width: 105px; height:105px" src="<?= base_url() ?>assets/images/news-image.jpg" alt="news image">
                            </a>
                            <div class="child d-flex flex-column border-bottom justify-content-between" style="padding-bottom:0.5rem ;">
                                <a href="" class="fs-14 fw-500" style="line-height: 1.03;">
                                    <span>Here's What Needs To Happen In 'The Chi' Season 7</span>
                                </a>
                                <div class="">
                                    <p style="opacity: 0.6; margin-bottom:0; font-size:12px;">July 08, 2024</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex gap-2 w-100">
                            <a href="" class="news-image">
                                <img style="width: 105px; height:105px" src="<?= base_url() ?>assets/images/news-image.jpg" alt="news image">
                            </a>
                            <div class="child d-flex flex-column border-bottom justify-content-between" style="padding-bottom:0.5rem ;">
                                <a href="" class="fs-14 fw-500" style="line-height: 1.03;">
                                    <span>Here's What Needs To Happen In 'The Chi' Season 7</span>
                                </a>
                                <div class="">
                                    <p style="opacity: 0.6; margin-bottom:0; font-size:12px;">July 08, 2024</p>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
            <div class="col"></div>
        </div>
    </div>
</section>