<div class="container-fluid">
    <div class="bn-filter-tab-wrapper">
        <div class="bn-filter-tabs-inner">
            <div class="bn-filter-tabs justify-content-center">
                <ul id="parent-category">
                    <?php
                    $bredcom = [];
                    $parentID = 0;
                    $childID = 0;
                    $currentPath = current_url();
                    $basePath = base_url();
                    $parentFIlter = $this->db->select('*')->from('filter')->where('GROUP_OF', 0)->where('FILTER_LEVEL', 0)->where('TYPE', 'category')->get();
                    if ($parentFIlter->num_rows() > 0) {
                        foreach ($parentFIlter->result() as $key => $value) {
                            $makeActive = "";
                            if (strpos($currentPath, $value->URL_SLUG)) {
                                $parentID = $value->DB_ID;
                                $makeActive = "bn-subfilter--active";
                                $path = explode("/", $basePath . $value->URL_SLUG);
                                $URL = str_replace(end($path), '', $basePath . $value->URL_SLUG);
                                $bredcom[] = [
                                    'name' => $value->NAME,
                                    'slug' => $value->URL_SLUG,
                                ];
                            } else {
                                $URL = $basePath . $value->URL_SLUG;
                            }
                            echo "<li class='bn-filter-item'>
                                <a href='" . $URL . "'>
                                <button class='bn-filter bn-filter-top" . $makeActive . "'>$value->NAME</button>
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
                    $childFIlter = $this->db->select('*')->from('filter')->where('GROUP_OF', $parentID)->where('FILTER_LEVEL', 1)->where('TYPE', 'category')->get();
                    if ($childFIlter->num_rows() > 0) {
                        foreach ($childFIlter->result() as $key => $value) {
                            $makeActive = "";
                            if (strpos($currentPath, $value->URL_SLUG)) {
                                $childID = $value->DB_ID;
                                $makeActive = "bn-subfilter--active";
                                $path = explode("/", $basePath . $value->URL_SLUG);
                                $URL = str_replace(end($path), '', $basePath . $value->URL_SLUG);
                                $bredcom[] = [
                                    'name' => $value->NAME,
                                    'slug' => $value->URL_SLUG,
                                ];
                            } else {
                                $URL = $basePath . $value->URL_SLUG;
                            }
                            echo "<li class='bn-subfilter-item' style='transform: scale(1); opacity: 1;'>
                                <a href='" . $URL . "'>
                                <button class='bn-subfilter  " . $makeActive . "'>$value->NAME</button>
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
                <ul id="grand-category">
                    <?php
                    $GrandFIlter = $this->db->select('*')->from('filter')->where('GROUP_OF', $childID)->where('FILTER_LEVEL', 2)->where('TYPE', 'category')->get();
                    if ($GrandFIlter->num_rows() > 0) {
                        foreach ($GrandFIlter->result() as $key => $value) {
                            $makeActive = "";
                            if (strpos($currentPath, $value->URL_SLUG)) {
                                $GrandID = $value->DB_ID;
                                $makeActive = "bn-subfilter--active";
                                $path = explode("/", $basePath . $value->URL_SLUG);
                                $URL = str_replace(end($path), '', $basePath . $value->URL_SLUG);
                                $bredcom[] = [
                                    'name' => $value->NAME,
                                    'slug' => $value->URL_SLUG,
                                ];
                            } else {
                                $URL = $basePath . $value->URL_SLUG;
                            }
                            echo "<li class='bn-subfilter-item' style='transform: scale(1); opacity: 1;'>
                                <a href='" . $URL . "'>
                                <button class='bn-subfilter " . $makeActive . "'>$value->NAME</button>
                                </a>
                            </li>";
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>