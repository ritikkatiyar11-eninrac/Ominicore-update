<?php require(APPPATH . 'views/frontend/header.php'); ?>
<style>
    .bgheader {
        background-repeat: no-repeat;
        background-position: center;
        -webkit-background-size: 100%;
        -webkit-background-size: cover;
        -moz-background-size: 100%;
        -moz-background-size: cover;
        background-size: 100%;
        background-size: cover;
        height: 415px;
        margin-top: 0px !important;
        background-image: url(https://cjp-rbi-icis.s3.eu-west-1.amazonaws.com/wp-content/uploads/sites/7/2018/10/17170633/ICIS-Contact_Page_Hero_v5.jpg);
    }



    .ui-switcher {
        background-color: #bdc1c2;
        display: inline-block;
        width: 48px;
        height: 20px;
        border-radius: 10px;
        box-sizing: border-box;
        vertical-align: middle;
        position: relative;
        cursor: pointer;
        transition: border-color 0.25s;
        margin: -2px 4px 0 0;
        box-shadow: inset 1px 1px 1px rgba(0, 0, 0, 0.15);
    }

    .ui-switcher::after {
        background-color: #ffffff;
        content: '\0020';
        display: inline-block;
        position: absolute;
        top: 2px;
        height: 16px;
        width: 16px;
        border-radius: 50%;
        transition: left 0.25s;
    }

    .ui-switcher::before {
        font-family: sans-serif;
        font-size: 10px;
        font-weight: 400;
        color: #ffffff;
        line-height: 1;
        display: inline-block;
        position: absolute;
        top: 6px;
        height: 12px;
        width: 20px;
        text-align: center;
    }

    .ui-switcher[aria-checked=true] {
        background-color: #0f3f6e;
    }


    .ui-switcher[aria-checked=true]::before {
        content: 'ON';
        left: 7px;
    }

    .ui-switcher[aria-checked=false]::before {
        content: 'OFF';
        right: 7px;
    }

    .ui-switcher[aria-checked=true]::after {
        left: 30px;
    }

    .ui-switcher[aria-checked=false]::after {
        left: 2px;
    }
</style>

<body>
    <div class="bgheader">&nbsp;</div>

    <div class="container px-0 position-relative pb-5" style="margin-top: -420px;">
        <div class="maintitle w-75  text-center mx-auto mt-5 mb-3 bg-darklight-800" style="opacity: 0.6;">
            <h1 class="text-white px-3 py-5 fs-36 fw-500 mb-2 mt-0">Manage your preferences</h1>
        </div>
        <div class="mainwhite  p-4 bg-darklight-200" style=" background-color:#efefef; box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
            <p class="my-3">
                <span>Hello,</span>
                <br>
                <br>
                <span>Thank you for your interest in Eninrac. Please update your preferences to ensure you receive the information that really matters to you.</span>
            </p>

            <form action="">
                <div class="row">
                    <div class="col-md-5">
                        <div class="sectiontitle d-flex align-items-center mt-4   justify-content-start gap-4 mb-2 text-left text-darklight-800 border-bottom border-primary">
                            <h3 class="text-uppercase fs-14 fw-600 pb-3">Your Email Preference</h3>
                        </div>
                        <div class="form-check">
                            <div class="ui-switcher wantall" aria-checked=false></div>
                            <input class="form-check-input d-none" type="checkbox" value="" id="omnicore">
                            <label class="form-check-label" for="omnicore">
                                I want to receive emails from Omnicore
                            </label>
                        </div>
                        <div class="ps-4">
                            <p class="my-3">Please choose the types of emails you would like to receive:</p>
                        </div>

                        <div class="form-check d-flex justify-content-start align-items-end gap-4 d-flex justify-content-start align-items-end gap-4">
                            <input class="form-check-input d-none" type="checkbox" value="" id="omnicore">

                            <div class="ui-switcher" aria-checked=false></div>
                            <label class="form-check-label">
                                Omnicore Newsletter
                            </label>
                        </div>
                        <div class="form-check d-flex justify-content-start align-items-end gap-4">

                            <input class="form-check-input d-none" type="checkbox" value="" id="ev">
                            <div class="ui-switcher" aria-checked=false></div>
                            <label class="form-check-label" for="ev">
                                Einfews EV Newsletter
                            </label>
                        </div>
                        <div class="form-check d-flex justify-content-start align-items-end gap-4">

                            <input class="form-check-input d-none" type="checkbox" value="" id="solar">
                            <div class="ui-switcher" aria-checked=false></div>
                            <label class="form-check-label" for="solar">Einfews Solar Newsletter</label>
                        </div>
                        <div class="form-check d-flex justify-content-start align-items-end gap-4">

                            <input class="form-check-input d-none" type="checkbox" value="" id="wind">
                            <div class="ui-switcher" aria-checked=false></div>
                            <label class="form-check-label" for="wind">
                                Einfews Wind Newsletter
                            </label>
                        </div>
                        <div class="form-check d-flex justify-content-start align-items-end gap-4">

                            <input class="form-check-input d-none" type="checkbox" value="" id="new-energies">
                            <div class="ui-switcher" aria-checked=false></div>
                            <label class="form-check-label" for="new-energies">Einfews New Energies Newsletter</label>
                        </div>

                        <div class="form-check pl-0 d-flex justify-content-start align-items-end gap-4">

                            <input class="form-check-input d-none" type="checkbox" value="" id="infrastructure">
                            <div class="ui-switcher" aria-checked=false></div>
                            <label class="form-check-label" for="infrastructure">Einfews Infrastructure Newsletter</label>
                        </div>

                        <div class="form-check d-flex justify-content-start align-items-end gap-4">

                            <input class="form-check-input d-none" type="checkbox" value="" id="eninrac-reports">
                            <div class="ui-switcher" aria-checked=false></div>
                            <label class="form-check-label" for="eninrac-reports">Eninrac Reports Updates</label>
                        </div>

                        <div class="form-check mb-3 d-flex justify-content-start align-items-end gap-4">
                            <input class="form-check-input d-none" type="checkbox" value="" id="eninrac-other">
                            <div class="ui-switcher" aria-checked=false></div>
                            <label class="form-check-label" for="eninrac-other">Eninrac Other Updates</label>
                        </div>

                    </div>
                    <div class="contactDetails d-none col-md-7">
                        <div class="sectiontitle d-flex align-items-center mt-4   justify-content-start gap-4 mb-2 text-left text-darklight-800 border-bottom border-primary">
                            <h3 class="text-uppercase fs-14 fw-600 pb-3">Your contact details</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3 ">
                                            <label for="" class="fomr-control-label fs-14">First Name</label>
                                            <input type="text" name="name" id="" class="form-control py-2">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="" class="fomr-control-label fs-14">Last Name</label>
                                            <input type="text" name="name" id="" class="form-control py-2">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="" class="fs-14 fomr-control-label ">Telephone</label>
                                            <input type="text" name="name" id="" class="form-control py-2">
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="" class="fomr-control-label fs-14">Company</label>
                                            <input type="text" name="name" id="" class="form-control py-2">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="" class="fomr-control-label fs-14">Job level</label>
                                            <select name="" id="" class="form-select py-2">
                                                <option value="">--please select--</option>
                                                <option value=""></option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="" class="fomr-control-label fs-14">Job function</label>
                                            <select name="" id="" class="form-select py-2">
                                                <option value="">--please select--</option>
                                                <option value=""></option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="" class="fomr-control-label fs-14">Industry</label>
                                            <select name="" id="" class="form-select py-2">
                                                <option value="">--please select--</option>
                                                <option value=""></option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3 ">
                                            <label for="" class="fomr-control-label fs-14">Country / region</label>
                                            <select name="" id="" class="form-select py-2">
                                                <option value="">--please select--</option>
                                                <option value=""></option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <textarea class="form-control" rows="3" placeholder="Please add message" name="" id=""></textarea>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mt-2">
                        <button class="btn btn-primary w-50" style="margin-left: 25px;">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>



    <script>
        // Switcher functionality
        const switchers = document.querySelectorAll('.ui-switcher');
        const wantall = document.querySelector(".wantall")
        switchers.forEach(switcher => {
            switcher.addEventListener('click', () => {
                const isChecked = switcher.getAttribute('aria-checked') === 'true';
                switcher.setAttribute('aria-checked', !isChecked);
                switcher.nextElementSibling.checked = !isChecked;
            });
        });

        wantall.addEventListener("click", function() {
            if (wantall.getAttribute("aria-checked") === "true") {
                // console.log(wantall)
                document.querySelector(".contactDetails").classList.add("d-block")
                document.querySelector(".contactDetails").classList.remove("d-none")
            } else {
                document.querySelector(".contactDetails").classList.remove("d-block")
                document.querySelector(".contactDetails").classList.add("d-none")

            }
        })
    </script>
    <script src="<?=base_url()?>assets/js/imageUrl.js"></script>
    <?php require(APPPATH . 'views/frontend/footer.php'); ?>