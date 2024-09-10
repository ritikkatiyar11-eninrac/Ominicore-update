<div class="container-fluid">
    <div class="bn-filter-tab-wrapper">
        <div class="bn-filter-tabs-inner">
            <div class="bn-filter-tabs justify-content-center">
                <ul id="parent-category">
                    <?php
                    $bredcom = [];
                    $parentID = 0;
                    $childID = 0;
                    $grandChildID = 0;
                    $currentPath = current_url();
                    $basePath = base_url();
                    $slug = str_replace($basePath . "category/", '', $currentPath);
                    $parentFIlter = $this->db->select('*')->from('filter')->where('IS_PARENT', '1')->where('GROUP_OF', '0')->where('Type', 'category')->get();
                    if ($parentFIlter->num_rows() > 0) {
                        foreach ($parentFIlter->result() as $key => $value) {
                            $makeActive = "";
                            if ($this->uri->segment(2) == $value->URL_SLUG) {
                                $parentID = $value->DB_ID;
                                $makeActive = "bn-subfilter--active";
                                $bredcom[] = [
                                    'name' => $value->NAME,
                                    'slug' => $value->URL_SLUG,
                                ];
                                $cat_slug =  str_replace($value->SLUG . "", '', base_url() . "category/" . $value->URL_SLUG);
                            } else {
                                $cat_slug =  base_url() . "category/" . $value->URL_SLUG;
                            }
                            echo "<li class='bn-filter-item'>
                                            <a href='" . $cat_slug . "'>
                                            <button class='bn-filter bn-filter-top $makeActive'>$value->NAME</button>
                                            </a>
                                        </li>";
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="bn-subfilter-tabs-inner">
            <div class="bn-subfilter-tabs">
                <ul id="sub-category">
                    <?php
                    if ($parentID > 0) {
                        $childFIlter = $this->db->select('*')->from('filter')->where('GROUP_OF', $parentID)->where('Type', 'category')->get();
                        if ($childFIlter->num_rows() > 0) {
                            foreach ($childFIlter->result() as $key => $value) {
                                $makeActive = "";
                                if ($this->uri->segment(2) . "/" . $this->uri->segment(3) == $value->URL_SLUG) {
                                    $childID = $value->DB_ID;
                                    $makeActive = "bn-subfilter--active";
                                    $bredcom[] = [
                                        'name' => $value->NAME,
                                        'slug' => $value->URL_SLUG,
                                    ];
                                    $cat_slug =  str_replace($value->SLUG . "", '', base_url() . "category/" . $value->URL_SLUG);
                                } else {
                                    $cat_slug =  base_url() . "category/" . $value->URL_SLUG;
                                }
                                echo "<li class='bn-filter-item'>
                                            <a href='" . $cat_slug . "'>
                                            <button class='bn-filter bn-filter-top $makeActive'>$value->NAME</button>
                                            </a>
                                        </li>";
                            }
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="bn-subfilter-tabs-inner">
            <div class="bn-subfilter-tabs">
                <ul id="grand-category">
                    <?php
                    if ($childID > 0) {
                        $grandFIlter = $this->db->select('*')->from('filter')->where('GROUP_OF', $childID)->where('Type', 'category')->get();
                        if ($grandFIlter->num_rows() > 0) {
                            foreach ($grandFIlter->result() as $key => $value) {
                                $makeActive = $value->URL_SLUG == $slug ? "bn-subfilter--active" : "";
                                if ($this->uri->segment(2) . "/" . $this->uri->segment(3) . "/" . $this->uri->segment(4) == $value->URL_SLUG) {
                                    $grandChildID = $value->DB_ID;
                                    $bredcom[] = [
                                        'name' => $value->NAME,
                                        'slug' => $value->URL_SLUG,
                                    ];
                                    $cat_slug =  str_replace($value->SLUG . "", '', base_url() . "category/" . $value->URL_SLUG);
                                } else {
                                    $cat_slug =  base_url() . "category/" . $value->URL_SLUG;
                                }
                                echo "<li class='bn-filter-item'>
                                            <a href='" . $cat_slug . "'>
                                            <button class='bn-filter bn-filter-top $makeActive'>$value->NAME</button>
                                            </a>
                                        </li>";
                            }
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>