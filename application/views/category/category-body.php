<section class="section category-section">
    <div class="container-xl">
        <div class="category-container pt-xl">
            <div class="position-relative d-flex my-3">
                <div class="position-relative w-100">
                    <div class="page-header flex-column px-0 pb-0">
                        <h3 class="fs-16" style="letter-spacing: .0075rem; color: #0f3f6e; line-height:1.2; margin-bottom:20px;" id="breadcum-cat"></h3>
                        <h1 class="page-title mx-0 mt-1" style="color: #3243e9;" id="activeCategory"></h1>
                    </div>
                </div>
            </div>
            <div class="position-relative d-flex my-3" id="categoryParentDiv" style=" padding-bottom:3.5rem; width:100%; margin-top:2rem; margin-bottom:2rem;">
                <div class="position-relative category-card-items-list" id="categoryitemslist">
                </div>
            </div>
        </div>
</section>

<script src="<?= base_url() ?>assets/js/categorypage.js"></script>

<script src="<?= base_url() ?>assets/js/menusectioncat.js"></script>
<?php require(APPPATH . 'views/footer.php'); ?>