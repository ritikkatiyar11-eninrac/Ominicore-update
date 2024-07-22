<?php require(APPPATH . 'views/header.php') ?>
<style>
    .accord-container {
        max-width: 800px;
        margin: 30px auto;
        padding: 20px;

    }

    .form-heading {
        margin-bottom: 30px;
    }

    .main-container {
        margin-bottom: 20px;
    }

    .div h1 {

        font-size: 1.5rem;
        font-weight: 600;
    }

    .accordion-button:focus {
        box-shadow: none !important;
        background-color: white !important;
    }

    .accordion-button:not(.collapsed) {
        background-color: white !important;
    }

    .accordion-button {
        height: 4rem;
    }
</style>
<div class="container">
    <div class="accord-container">
        <h2 class="text-center form-heading">Contact us</h2>
        <div class="main-container">
            <div class="div">
                <h1 class="">Managing Director </h1>
                <p class="py-2 fs-18">Ravi Shekhar</p>
            </div>
            <div class="div">
                <h1 class="">Eninrac Consulting Private Limited</h1>
            </div>
            <div>
                <!-- Accordion 1 - Bootstrap Brain Component -->
                <section class="py-2 py-md-2 ">
                    <div class="container-xxl">
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                Office Address
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Eninrac Consulting Private Limited, 2nd Floor, B-130, B-Block, Sector 65, Noida - 201301, Uttar Pradesh
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Queries
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <span>Mail us at</span><a href="mailto:connect@eninrac.com "> connect@eninrac.com </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Contact us at
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
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
<?php require(APPPATH . 'views/footer.php') ?>