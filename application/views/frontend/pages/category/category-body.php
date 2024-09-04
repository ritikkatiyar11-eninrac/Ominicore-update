<style>
    .fixed {
        position: sticky;
        top: 88px;
    }

    .sidebar-area-container li {
        display: block;
        width: 100%;
        color: var(--darklight-600);
    }


    .sidebar-area-container li.dropdown-container i {
        cursor: pointer;
    }

    .sidebar-area-container li.dropdown-container .dropdown-action {
        padding: 7px 5px 7px 5px;
        display: flex;
        align-items: center;
        color: var(--darklight-600);
        font-size: 14px;
    }

    .sidebar-area-container li.dropdown-container.active .dropdown-action,
    .sidebar-area-container li.dropdown-container .dropdown-action:hover {
        color: var(--darklight-100);
        background: var(--primary-600);
    }

    .sidebar-area-container li.dropdown-container .dropdown-action .menu-ico {
        min-width: 50px;
        text-align: center;
    }

    .sidebar-area-container li.dropdown-container .dropdown-action .m-title {
        width: 100%;
    }

    .sidebar-area-container li ul li {
        border-top: 1px solid var(--darklight-600);
    }

    .sidebar-area-container li ul li:last-child {
        border-bottom: 1px solid var(--darklight-600);
    }
</style>

<section class="section category-section">
    <div class="container px-0">
        <div class="row">
            <div class="col-md-3 px-0">
                <style>
                    .carditem img {
                        object-fit: cover;
                        width: 100%;
                        height: 200px;
                        transition: 500ms;
                    }

                    .fixed {
                        position: sticky;
                        top: 88px;
                        padding-right: 20px;
                        padding-left: 10px;
                    }

                    .sidebar-area-container-wrapper {
                        position: relative;

                    }

                    .sidebar-area-container li {
                        display: block;
                        width: 100%;
                        color: var(--darklight-600);
                    }

                    .coltitle {
                        font-size: 16px;
                        text-align: start;
                        font-weight: bold;
                        color: white !important;
                        padding-left: 7px;
                        background: var(--primary-600);
                    }



                    .sidebar-area-container li.dropdown-container i {
                        cursor: pointer;
                    }

                    .sidebar-area-container li.dropdown-container .dropdown-action {
                        padding: 7px 5px 7px 5px;
                        display: flex;
                        align-items: center;
                        color: var(--darklight-600);
                        font-size: 14px;
                        border-radius: 10px;
                        color: var(--darklight-100);
                        background: var(--primary-600);
                    }

                    .sidebar-area-container li.dropdown-container.active .dropdown-action,
                    .sidebar-area-container li.dropdown-container .dropdown-action:hover {
                        color: var(--darklight-100);
                        background: var(--primary-600);
                    }

                    .sidebar-area-container li.dropdown-container .dropdown-action .menu-ico {
                        min-width: 50px;
                        text-align: center;
                    }

                    .sidebar-area-container li.dropdown-container .dropdown-action .m-title {
                        width: 100%;
                    }

                    .sidebar-area-container li ul li {
                        /* border-top: 1px solid var(--darklight-600); */
                    }

                    .sidebar-area-container li ul li:last-child {
                        /* border-bottom: 1px solid var(--darklight-600); */
                    }

                    .sidebar-area-container li ul li a {
                        display: block;
                        width: 100%;
                        color: var(--darklight-600);
                        padding: 5px 5px 5px 25px;
                        font-size: 14px;
                    }



                    .dropdown-container .dropdown-content-list {
                        display: none;
                    }

                    .dropdown-container.active .dropdown-content-list {
                        display: block;
                    }
                </style>
                <div class="fixed w-100">
                    <div class="sidebar-area-container-wrapper">
                        <ul class="sidebar-area-container m-0 p-0 list-style-none w-100 pb-5">
                            <li class="coltitle py-2 rounded-3 mb-3"><small>Orders Archives</small></li>
                            <li class="dropdown-container sd-bar d-inline-flex align-items-center mb-3">
                                <input type="text" placeholder="Search orders" class="form-control form-control-sm fs-14" style="border-radius:10px 0 0 10px;">
                                <div class="fs-14 cursor-pointer" style="border-radius: 0 10px 10px 0;height: 31px;width: 45px;text-align: center;line-height: 31px;background: var(--primary-100);color: var(--primary-600);">
                                    <i class="icofont-search-1"></i>
                                </div>
                            </li>
                            <li class="dropdown-container active mb-3">
                                <div class="d-flex justify-content-start align-items-center mb-1" style="gap: 0 7px;">
                                    <i class="fs-14 fw-600 icofont-ui-calendar"></i>
                                    <span class="fs-14">Select date Range</span>
                                </div>
                                <input type="text" name="dates" class="form-control fs-14" id="">
                            </li>
                            <li class="dropdown-container mb-3">
                                <div class="dropdown-action sd-bar w-100 d-flex justify-content-between align-items-center rounded-3">
                                    <span class="m-title">States</span>
                                    <i class="arrow-ico icofont-rounded-up fs-20"></i>
                                </div>
                                <ul class="list-style-none px-2 py-3 dropdown-content-list" style="max-height: 135px;overflow-x: scroll;">
                                    <li class="px-2">
                                        <label class="custom-control custom-checkbox mb-1" for="Eastern Region-252">
                                            <input type="checkbox" class="custom-control-input" id="Eastern Region-252" value="state/eastern-region" data-target="Eastern Region">
                                            <span class="custom-control-label fs-14">Eastern Region</span>
                                        </label>
                                    </li>
                                    <li class="px-2">
                                        <label class="custom-control custom-checkbox mb-1" for="North Eastern Region-254">
                                            <input type="checkbox" class="custom-control-input" id="North Eastern Region-254" value="state/north-eastern-region" data-target="North Eastern Region">
                                            <span class="custom-control-label fs-14">North Eastern Region</span>
                                        </label>
                                    </li>
                                    <li class="px-2">
                                        <label class="custom-control custom-checkbox mb-1" for="Northern Region-255">
                                            <input type="checkbox" class="custom-control-input" id="Northern Region-255" value="state/northern-region" data-target="Northern Region">
                                            <span class="custom-control-label fs-14">Northern Region</span>
                                        </label>
                                    </li>
                                    <li class="px-2">
                                        <label class="custom-control custom-checkbox mb-1" for="Southern Region-256">
                                            <input type="checkbox" class="custom-control-input" id="Southern Region-256" value="state/southern-region" data-target="Southern Region">
                                            <span class="custom-control-label fs-14">Southern Region</span>
                                        </label>
                                    </li>
                                    <li class="px-2">
                                        <label class="custom-control custom-checkbox mb-1" for="Western Region-257">
                                            <input type="checkbox" class="custom-control-input" id="Western Region-257" value="state/western-region" data-target="Western Region">
                                            <span class="custom-control-label fs-14">Western Region</span>
                                        </label>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-container mb-3">
                                <div class="dropdown-action sd-bar w-100 d-flex justify-content-between align-items-center rounded-3">
                                    <span class="m-title">Open Access</span>
                                    <i class="arrow-ico icofont-rounded-up fs-20"></i>
                                </div>
                                <ul class="list-style-none px-2 py-3 dropdown-content-list" style="max-height: 135px;overflow-x: scroll;">
                                </ul>
                            </li>
                            <li class="dropdown-container mb-3">
                                <div class="dropdown-action sd-bar w-100 d-flex justify-content-between align-items-center rounded-3">
                                    <span class="m-title">Type</span>
                                    <i class="arrow-ico icofont-rounded-up fs-20"></i>
                                </div>
                                <ul class="list-style-none px-2 py-3 dropdown-content-list" style="max-height: 135px;overflow-x: scroll;">
                                </ul>
                            </li>
                            <li class="dropdown d-inline-flex align-items-center">
                                <input type="text" placeholder="Petitioner Search" class="form-control form-control-sm fs-14" style="border-radius:10px 0 0 10px;">
                                <div class="fs-14  cursor-pointer" style="border-radius: 0 10px 10px 0;height: 31px;width: 45px;text-align: center;line-height: 31px;background: var(--primary-100);color: var(--primary-600);">
                                    <i class="icofont-search-1"></i>
                                </div>
                            </li>
                            <li class="mt-3">
                                <button class="btn btn-sm w-100 bg-primary-600 text-darklight-100 rounded-3">Clear All</button>
                            </li>
                        </ul>
                    </div>
                </div>

                <script>
                    let ddSelector = document.querySelectorAll('.dropdown-container .sd-bar')
                    ddSelector.forEach(item => {
                        item.addEventListener('click', function(e) {
                            item.parentElement.classList.toggle('active');
                        })
                    })
                </script>
            </div>
            <div class="col-md-9">
                <div id="categoryParentDivTag">
                    <div class="row" id="categoryitemslist"></div>
                </div>
                <div class="position-relative d-flex align-items-center justify-content-center my-3" id="load-more-btn">
                    <button class="btn btn-warning">Load More</button>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    document.querySelectorAll(".dropdown-action").forEach((item) => {
        item.addEventListener('click', () => {
            const dropdownItems = item.nextElementSibling;
            item.parentElement.classList.toggle("active")
            dropdownItems.classList.toggle('d-none');
        });
    })
</script>
<script src="<?= base_url() ?>assets/js/categorypage.js"></script>
<script src="<?= base_url() ?>assets/js/menusectioncat.js"></script>
<?php require(APPPATH . 'views/frontend/components/footer.php'); ?>
<!-- category-card-items-list -->