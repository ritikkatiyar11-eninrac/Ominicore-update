<?php require(APPPATH . 'views/frontend/header.php'); ?>
<?php require(APPPATH . 'views/frontend/menu.php'); ?>
<div class="container-fluid p-0">
    <div class="langing_page-top d-flex gap-4">
        <div class="langing_page-top-sidebar" id="landing_top-sidebar">
            <div class="menuwrapper" style="width:45%;">
                <a href="" class="menu-logo">
                    <div class="logo fs-20 fw-bold px-2">Recent Updates</div>
                </a>
                <div class="tickerwrapper">
                    <div class="menu-ticker">
                        <a href="http://localhost/omnicore/recent-updates/central">
                            <div class="d-flex gap-1 align-items-center w-100">
                                <div class="fs-14 text-center text-primary-800 text-capitalized position-relative">Central</div>
                                <div style="width: 30px;height: 30px;line-height: 30px;text-align: center;font-size: 19px;">
                                    <i class="icofont-ui-rotation"></i>
                                    <span style="position: absolute;margin-top: -11px;font-size: 12px;background: red;height: 20px;line-height: 20px;width: max-content;padding: 0 3px;color: white;border-radius: 6px;margin-left: -10px;">19+</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="menu-ticker">
                        <a href="http://localhost/omnicore/recent-updates/state">
                            <div class="d-flex gap-1 align-items-center w-100">
                                <div class="fs-14 text-center text-primary-800 text-capitalized position-relative">State</div>
                                <div style="width: 30px;height: 30px;line-height: 30px;text-align: center;font-size: 19px;">
                                    <i class="icofont-ui-rotation"></i>
                                    <span style="position: absolute;margin-top: -11px;font-size: 12px;background: red;height: 20px;line-height: 20px;width: max-content;padding: 0 3px;color: white;border-radius: 6px;margin-left: -10px;">10+</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="menu-ticker">
                        <a href="http://localhost/omnicore/recent-updates/bidupdate">
                            <div class="d-flex gap-1 align-items-center w-100">
                                <div class="fs-14 text-center text-primary-800 text-capitalized position-relative">Bid Updates</div>
                                <div style="width: 30px;height: 30px;line-height: 30px;text-align: center;font-size: 19px;">
                                    <i class="icofont-ui-rotation"></i>
                                    <span style="position: absolute;margin-top: -11px;font-size: 12px;background: red;height: 20px;line-height: 20px;width: max-content;padding: 0 3px;color: white;border-radius: 6px;margin-left: -10px;">13+</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="menu-ticker">
                        <a href="http://localhost/omnicore/recent-updates/openaccess">
                            <div class="d-flex gap-1 align-items-center w-100">
                                <div class="fs-14 text-center text-primary-800 text-capitalized position-relative">Open Access</div>
                                <div style="width: 30px;height: 30px;line-height: 30px;text-align: center;font-size: 19px;">
                                    <i class="icofont-ui-rotation"></i>
                                    <span style="position: absolute;margin-top: -11px;font-size: 12px;background: red;height: 20px;line-height: 20px;width: max-content;padding: 0 3px;color: white;border-radius: 6px;margin-left: -10px;">5+</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="menu-ticker">
                        <a href="http://localhost/omnicore/recent-updates/newenergies">
                            <div class="d-flex gap-1 align-items-center w-100">
                                <div class="fs-14 text-center text-primary-800 text-capitalized position-relative">New Energies</div>
                                <div style="width: 30px;height: 30px;line-height: 30px;text-align: center;font-size: 19px;">
                                    <i class="icofont-ui-rotation"></i>
                                    <span style="position: absolute;margin-top: -11px;font-size: 12px;background: red;height: 20px;line-height: 20px;width: max-content;padding: 0 3px;color: white;border-radius: 6px;margin-left: -10px;">9+</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <a href="<?= base_url() ?>recent-updates/others" class="menu-link">
                        <i class="icofont-edit text-primary-600"></i>
                        <div class="fs-14 fw-bold text-center text-primary-600">Other Updates</div>
                    </a>
                </div>
            </div>
            <div class="feedwrapper" style="width:65%; ">
                <div class="feed-header">
                    <h2 class="fs-20 text-primary-600 fw-bold">Recent News</h2>
                </div>
                <a href="" class="feed-item">
                    <h3 class="label" style=" color: #3243e9;">3h ago</h3>
                    <p>SEC Chairman Applauds ‘Operation Crypto-Sweep’</p>
                </a>
                <a href="" class="feed-item">
                    <h3 class="label" style=" color: #3243e9;">5h ago</h3>
                    <p>Darknet Market Rapture Has Been Down 18% Retroactive Tax Has Been Down 18% Re</p>
                </a>
                <a href="" class="feed-item">
                    <h3 class="label" style=" color: #3243e9;">8h ago</h3>
                    <p>Indian Government Considering 18% Retroactive Tax</p>
                </a>
                <a href="" class="feed-link">
                    <div class="">
                        More Updates
                    </div>
                    <i class="icofont-long-arrow-right"></i>
                </a>
            </div>
        </div>
        <div class="langing_page-contentwrapper">
            <!-- section one -->
            <div class="mb-4">
                <div class="page-header d-flex align-items-center justify-content-between mb-4">
                    <h1 class="page-header d-flex align-items-center justify-content-between text-primary-600 fw-bold fs-36">Top Articles</h1>
                    <a href="<?= base_url() ?>category" class="d-flex align-items-center justify-content-between fs-14">
                        <span>Read all</span>
                        <i class="icofont-long-arrow-right"></i>
                    </a>
                </div>
                <div class="">
                    <div class="content-section" id="toparticlecontent">
                        <div class="content-col">
                            <?= $this->CI->top_articles("Featured Article") ?>
                            <?= $this->CI->top_articles("P1") ?>
                            <?= $this->CI->top_articles("P2") ?>
                        </div>
                        <div class="side-col">
                            <?= $this->CI->top_articles("Breaking") ?>
                            <div class="placeholder-image-05 d-flex flex-column align-items-start">
                                <div class="thumbnailwrapper mb-2">
                                    <i class="icofont-light-bulb"></i>
                                </div>
                                <div>
                                    <div class="card-meta">
                                        INSIGHTS
                                    </div>
                                    <div class="fs-14">CERC // Orders</div>
                                    <p class="card-title fw-400" style="line-height: 20px;">McAfee Predicts Bull Run as Crypto Markets Dip</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- section one -->
            <div class="mb-4">
                <?= $this->CI->getdateaccordingtocategory(1); ?>
            </div>
            <div class="mb-4">
                <?= $this->CI->getdateaccordingtocategory(33); ?>
            </div>
            <div class="mb-4">
                <?= $this->CI->getdateaccordingtocategory(76); ?>
            </div>
            <div class="mb-4">
                <?= $this->CI->getdateaccordingtocategory(91); ?>
            </div>
        </div>
    </div>
</div>
<?php require(APPPATH . 'views/frontend/footer.php'); ?>