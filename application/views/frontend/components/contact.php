<?php require(APPPATH . 'views/frontend/components/header.php'); ?>
<style>
    .profile-promo-image img {
        width: 140px;
        height: 140px;
    }

    @media (max-width: 750px) {
        .profile-promo-image {
            width: 96px;
            height: 96px;
        }
    }
</style>
<div class="container">

    <div class="accord-container">
        <h2 class="text-center form-heading">Contact us</h2>
        <div class="main-container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="d-flex flex-column gap-3" style="margin-bottom: 25px">
                        <div class="d-flex" style="gap: 16px">
                            <div class="profile-promo-image">
                                <img src="https://eninrac.com/assets/upload/ravi-shekhar.jpg" alt="ravi-shekhar.jpg" class="rounded-circle">
                            </div>
                            <div class="promo-profile-content">
                                <h4 class="profile-promo_name text-primary-400">
                                    <a href="" class="hover-border text-darklight-700 ">Ravi Shekhar</a>
                                </h4>
                                <div class="profile-promo-title eninrac-card-title">
                                    Managing Director at Eninrac
                                </div>
                                <div class="profile-promo_email">
                                    <a href="mailto:rv@eninrac.com" data-profile-name="Ravi Shekhar" aria-label="rv@eninrac.com" class="hover-border d-flex gap-2 align-items-end">
                                        <i class="icofont-email text-dark" style="font-size: 20px"></i>
                                        <span class="ml-2 text-dark">rv@eninrac.com</span>
                                    </a>
                                </div>

                                <div class="profile-promo-conections">
                                    <ul class="d-flex flex-wrap list-style-none" style="margin: 16px 0 0; gap: 8px">
                                        <li style="line-height: 1.5; margin: 0 0 1em">
                                            <a href="https://www.linkedin.com/in/ravi-shekhar-83ab8219/" target="_blank" class="rounded lh-2" style="font-size: 20px; cursor: pointer">
                                                <i class="icofont-linkedin text-dark"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <section class="py-2 py-md-2 ">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 p-0">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed  fw-bold" type="button">
                                                Office Address
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse">
                                            <div class="accordion-body">
                                                Eninrac Consulting Private Limited, <br> 2nd Floor, B-130, B-Block, <br> Sector 65, Noida - 201301, Uttar Pradesh
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button  collapsed fw-bold" type="button">
                                                Queries
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse">
                                            <div class="accordion-body">
                                                <span>Mail us at</span><a href="mailto:connect@eninrac.com"> connect@eninrac.com </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button  collapsed fw-bold" type="button">
                                                Contact us at
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse">
                                            <div class="accordion-body">

                                                <ul style="list-style: none;">
                                                    <li>(+91) 9319048963</li>
                                                    <li>
                                                        (+91) 9319047963
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll(".accordion-button").forEach(item => {
        item.addEventListener("click", () => {
            item.parentElement.nextElementSibling.classList.toggle("collapse")
            item.classList.toggle("text-primary")
        })
    })
</script>
<?php require(APPPATH . 'views/frontend/components/footer.php'); ?>