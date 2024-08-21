<?php require(APPPATH . 'views/frontend/components/header.php'); ?>
<style>
    .search-block button {
        width: 100px;
        height: 50px;
        border-radius: 0px;
    }

    .search-dropdown {
        padding: .5rem;
        outline: auto;
    }
    .news-title{
        line-height: 1.1;
        font-size: 18px;
        font-weight: 600;
    }
    .news-description{
        font-size: 14px;
    }
    .author{
        font-size: 14px;
        font-weight: 600;
    }


</style>

<div class="container-xl">
    <!-- searching block -->
    <div class="search-block d-flex gap-2 justify-content-center text-center p-4">
        <input class="border-bottom border-dark" spellcheck="false" type="search" value="" style="width: 60%;">
        <button type="button" class="btn btn-primary">Search</button>
        <select name="" id="" class="search-dropdown">
            <option value="relevance">Sort by Relevance</option>
            <option value="newest">Sort by Newest</option>
            <option value="oldest">Sort by Oldest</option>
        </select>
    </div>
    <div>
        <div class="row " style="margin-left: 5rem; padding: 1rem;">

            <!-- search  links -->
            <div class="col-6">
                <div class="fs-30 fw-bold mb-3">
                    Topics
                </div>
                <div><a href="">Solar</a></div>
                <div><a href="">Wind</a></div>
                <div><a href="">Coal</a></div>
                <div><a href="">Hydrogen</a></div>
                <div><a href="">Bess</a></div>
            </div>
            <div class="col-6">
                <div class="fs-30 fw-bold mb-3">
                    Authors
                </div>
                <div><a href="">Solar</a></div>
                <div><a href="">Wind</a></div>
                <div><a href="">Coal</a></div>
                <div><a href="">Hydrogen</a></div>
                <div><a href="">Bess</a></div>
            </div>
        </div>

        <div class="row py-2" style="border-top: 1px solid rgb(220, 220, 220, 1);">
            <div class="col-2">
                23 July 2024
            </div>
            <div class="col-3">
                <img src="https://placehold.co/208x156" alt="">
            </div>
            <div class="col-7">
                <div class="news-title">
                    <p>Dames Tracey Emin and Sonia Boyce contribute works to save cash-strapped Quench</p>
                </div>
                <div class="news-description">
                    <p>The Margate project space has supported 68 artists in the past four years, but is now “on the brink” of closure
                    </p>
                </div>
                <div class="author">
                    <span>The Art News Paper</span>
                </div>
            </div>

        </div>
        <div class="row py-2" style="border-top: 1px solid rgb(220, 220, 220, 1);">
            <div class="col-2">
                23 July 2024
            </div>
            <div class="col-3">
                <img src="https://placehold.co/208x156" alt="">
            </div>
            <div class="col-7">
                <div class="news-title">
                    <p>Dames Tracey Emin and Sonia Boyce contribute works to save cash-strapped Quench</p>
                </div>
                <div class="news-description">
                    <p>The Margate project space has supported 68 artists in the past four years, but is now “on the brink” of closure
                    </p>
                </div>
                <div class="author">
                    <span>The Art News Paper</span>
                </div>
            </div>

            

        </div>
    </div>


</div>


<?php require(APPPATH . 'views/frontend/components/footer.php'); ?>