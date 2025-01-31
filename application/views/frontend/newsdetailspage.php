<?php require(APPPATH . 'views/frontend/components/header.php'); ?>

<style>
    .grid-areas-materialLG {
        display: grid;
        max-width: 62.5rem;
        width: 100%;
        margin-bottom: 2rem;
        align-items: flex-start;
        column-gap: 2rem;
        grid-template-areas:
            "kicker"
            "headline"
            "standfirst"
            "media"
            "sponsor"
            "byline"
            "dateline"
            "toolbar"
            "series"
            "content";
    }

    @media (min-width:1024px) {
        .analyst-details-name {
            position: sticky;
            top: 100px;
        }

        .analyst-details-postdate {
            position: sticky;
            top: 120px;
        }

        .analyst-details-socialmedia {
            position: sticky;
            top: 140px;
        }
    }

    @media (min-width: 1280px) {
        .grid-in-series {
            grid-area: series;
        }
    }

    @media (min-width: 1280px) {
        .grid-areas-materialLG {
            grid-template-areas:
                "kicker headline"
                "sponsor headline"
                "sponsor standfirst"
                "sponsor ."
                "byline media"
                "dateline media"
                "toolbar media"
                ". media"
                ". series"
                ". content";
        }
    }

    @media (min-width: 1280px) {
        .grid-col-13rem {
            grid-template-columns: 13rem;
        }

        .lg-max-w-col-1 {
            max-width: 13rem;
        }

        .lg-justify-between {
            justify-content: space-between;
        }
    }

    @media (min-width: 1280px) {
        .lg-w-col-2 {
            width: 28rem;
        }
    }



    @media (min-width: 520px) {
        .xs-justify-end {
            justify-content: flex-end;
        }
    }
</style>

<div class="container pt-lg-5">
    <div class="w-100 flex mb-5">
        <main class="w-100 lg-w-col-2 flex-grow-1 flex-shrink-1">
            <div class="w-100 grid-areas-materialLG grid-col-13rem">

                <div class="mb-3" style="grid-area:headline;">

                    <h1 class="fs-20" style="font-weight: 600;line-height:1 ">
                        British Museum thefts: Welsh politicians join the queue in calling for objects to be repatriated
                    </h1>
                </div>
                <div class="mb-4" style="grid-area:standfirst ;">
                    <h2 class="fs-16" style="letter-spacing:.03em; line-height:1.1; font-weight: inherit;">The treasures singled out so far include the Mold Gold Cape and Moel Hebog shield</h2>
                    <div class="">
                        <div class="flex items-center fs-14 mt-3 -text-red-900" style="letter-spacing: 0.15em; line-height:1.1">
                            <a href="" class="">CERC // orders</a>
                        </div>
                    </div>
                </div>


                <div class="grid-in-series" style="grid-area: content;">
                    <div class="h-auto">
                    </div>
                    <div>
                        <div class="w-100">
                            <div class="mb-4">
                                <div class="mb-4">
                                    <p class="fs-14" style="margin-bottom:1rem;word-break: break-word;    letter-spacing: .015em;line-height: 1.5;">
                                        First there was Greece, then Nigeria and China—now Wales is demanding that artefacts housed at the British Museum be returned home in the wake of the recent thefts controversy at the beleaguered London institution.
                                    </p>
                                    <p class="fs-14" style="margin-bottom:1rem;word-break: break-word;    letter-spacing: .015em;line-height: 1.5;">
                                        First there was Greece, then Nigeria and China—now Wales is demanding that artefacts housed at the British Museum be returned home in the wake of the recent thefts controversy at the beleaguered London institution.
                                    </p>
                                    <p class="fs-14" style="margin-bottom:1rem;word-break: break-word;    letter-spacing: .015em;line-height: 1.5;">
                                        First there was Greece, then Nigeria and China—now Wales is demanding that artefacts housed at the British Museum be returned home in the wake of the recent thefts controversy at the beleaguered London institution.
                                    </p>
                                    <p class="fs-14" style="margin-bottom:1rem;word-break: break-word;    letter-spacing: .015em;line-height: 1.5;">
                                        First there was Greece, then Nigeria and China—now Wales is demanding that artefacts housed at the British Museum be returned home in the wake of the recent thefts controversy at the beleaguered London institution.
                                    </p>
                                </div>
                            </div>
                            <div class="h-auto"></div>
                            <div class="w-100 border-bottom border-top py-3 flex-wrap flex align-items-center">
                                <a href="#" class="mr-1 mb-3 fs-14 mx-3 p-1 border">Wind</a>
                                <a href="#" class="mr-1 mb-3 fs-14 mx-3 p-1 border">Solar</a>
                                <a href="#" class="mr-1 mb-3 fs-14 mx-3 p-1 border">Hydrogen</a>
                            </div>
                            <div class="w-100 ml-auto d-flex justify-content-end align-items-center">
                                <div class="d-flex justify-content-end align-items-center gap-3 w-100 pt-3">
                                    <span class="fs-14 mr-2 flex-end">share</span>
                                    <div class="d-flex  align-items-center gap-4">
                                        <i class="icofont-linkedin"></i><i class="icofont-brand-nexus"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="" style="grid-area: sponsor;"></div>
                <div class="lg-max-w-col-1 mb-3 analyst-details-name" style="grid-area: byline; line-height: 0;">
                    <div class="fs-16 text-darklight-800" style="line-height:1.2;">
                        <a href="">
                            Gareth Harris
                        </a>
                    </div>
                </div>
                <div class="mb-4 border-top analyst-details-socialmedia" style="grid-area: toolbar; ">
                    <div class="pt-2 d-flex justify-content-between xs-justify-end lg-justify-between  align-items-center">
                        <span class="fs-14 mr-2" style="line-height: 1.2;">share</span>
                        <div class="d-flex items-center align-items-center gap-2" >
                        <i class="icofont-linkedin " style="cursor: pointer;"></i><i class="icofont-brand-nexus " style="cursor: pointer;"></i>
                        </div>
                    </div>
                </div>
                <div class="mb-3" style="grid-area: media;">
                    <figure class="">
                        <img src="<?= base_url() ?>assets/images/1290-vaccine-candidates.svg" style="color: transparent;border-radius:10px; height:auto;width:100%" alt="">
                    </figure>
                </div>
                <div class="mb-2 lg-max-w-col-1 analyst-details-postdate" style="grid-area: dateline;  line-height: 0;">
                    <div class="fs-16 d-inline-block" style="line-height: 1.2;">
                        1 September 2023
                    </div>
                </div>
                <div class="" style="grid-area: series;"></div>
            </div>
        </main>
    </div>
</div>
<script src="<?=base_url("") ?>assets/js/apirequest.js"></script>
<?php require(APPPATH . 'views/frontend/components/footer.php'); ?>