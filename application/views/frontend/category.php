<?php require(APPPATH . 'views/frontend/header.php'); ?>
<?php require(APPPATH . 'views/frontend/menu.php'); ?>
<style>
    .card-meta a::after {
        content: "/";
    }

    .card-meta a:last-child::after {
        display: none;
    }
</style>
<section class="section category-section">
    <div class="container-fluid">
        <div class="category-container pt-xl">
            <div class="position-relative d-flex my-3">
                <div class="position-relative w-100">
                    <div class="page-header flex-column px-0 pb-0">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="<?= base_url() ?>">
                                        <i class="icofont-home"></i>
                                    </a>
                                </li>
                                <?= $bredcom == null ? "<li class='breadcrumb-item active'>Category</li>" : "<li class='breadcrumb-item'><a href='" . base_url() . "category'>Category</a></li>" ?>
                                <?php
                                if ($bredcom != null) {
                                    $lastid = count($bredcom);
                                    foreach ($bredcom as $key => $value) {
                                        if ($key != $lastid - 1) {
                                            echo "<li class='breadcrumb-item'>
                                            <a href='" . base_url() . $value['slug'] . "'>" . $value['name'] . "</a>
                                            </li>";
                                        } else {
                                            echo "<li class='breadcrumb-item active'>" . $value['name'] . "</li>";
                                        }
                                    }
                                }
                                ?>
                            </ol>
                        </nav>
                        <h1 class="page-title mb-2" style="color: #3243e9;" id="activeCategory"><span><?php echo $bredcom == null ? "Category" : $bredcom[$lastid - 1]['name']; ?></span></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 px-0">
                    <?php require(APPPATH . 'views/frontend/sidebar-filter.php'); ?>
                </div>
                <div class="col-md-9">
                    <div id="categoryParentDivTag">
                        <div class="row" id="categoryitemslist">
                            <?php if (!empty($posts)) echo $posts ?>
                        </div>
                    </div>
                    <!-- <div class="position-relative d-flex align-items-center justify-content-center my-3" id="load-more-btn">
                        <button class="btn btn-warning">Load More</button>
                    </div> -->
                </div>
            </div>
        </div>
</section>
<!-- <script src="<?= base_url() ?>assets/js/categorypage.js"></script> -->
<?php require(APPPATH . 'views/frontend/footer.php'); ?>