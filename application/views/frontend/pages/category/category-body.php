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

                <div class="fixed w-100  ">
                    <div class="sidebar-area-container-wrapper position-relative">
                        <ul class="sidebar-area-container m-0 p-0 list-style-none w-100 pb-5">
                            <li class="p-2 fs-16 text-white fw-bold bg-primary-600"><small>Orders Archives</small></li>
                            <li class="dropdown-container py-2  sd-bar d-inline-flex align-items-center">
                                <input type="text" placeholder="Search orders" style="border-radius:0;" class="form-control form-control-sm fs-14">
                                <div class="fs-14 py-1 border cursor-pointer bg bg-light  px-2">
                                    <i class="icofont-search-1"></i>
                                </div>
                            </li>
                            <li class="sd-bar dropdown-container pb-2">
                                <div class="d-flex justify-content-start align-items-center gap-2 mb-1 mt-2">
                                    <i class="fs-12 fw-600 icofont-ui-calendar"></i>
                                    <span class="fs-12">Select date Range</span>

                                </div>
                                <input type="date" class="form-control fs-14" name="" id="">
                            </li>
                            <li class="dropdown-container  sd-bar">
                                <div class="dropdown-action w-100 d-flex justify-content-between align-items-center">
                                    <span class=" fs-16 fw-bold">Central</span>
                                    <i class="arrow-ico icofont-rounded-up fs-20"></i>
                                </div>
                                <ul class="m-0 p-0 list-style-none d-none" style="overflow-y:scroll; height:100px;">
                                    <li>
                                        <a href="#" type="button" class="d-flex dropdown-item px-4 py-1 justify-content-start gap-2 align-items-center">
                                            <input type="checkbox" name="" id="">
                                            <small>CERC</small>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" type="button" class="d-flex px-4 py-1 dropdown-item justify-content-start gap-2 align-items-center">
                                            <input type="checkbox" name="" id="">
                                            <small>MoP</small>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown  sd-bar d-inline-flex align-items-center">
                                <input type="text" placeholder="Petitioner Search" style="border-radius:0;" class="form-control form-control-sm fs-14">
                                <div class="fs-14 py-1 border cursor-pointer bg bg-light  px-2">
                                    <i class="icofont-search-1"></i>
                                </div>
                            </li>
                            <li class=" py-2"><button class="btn btn-sm w-100 btn-light">Clear All</button></li>
                        </ul>
                    </div>
                </div>
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