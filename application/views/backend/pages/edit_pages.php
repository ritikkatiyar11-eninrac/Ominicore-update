    <div class="page-header">
        <h1 class="page-title">Edit Pages</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>backend-dashboard/pages">All Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Pages</li>
            </ol>
        </div>
    </div>
    <?php
    $inst = $this;
    function generateFilterHTML($inst, $groupOf, $filterLevel, $type, $category_array = [])
    {
        $filter = $inst->db->select('*')
            ->from('filter')
            ->where('GROUP_OF', $groupOf)
            ->where('FILTER_LEVEL', $filterLevel)
            ->where('TYPE', $type)
            ->get();

        if ($filter->num_rows() > 0) {
            $html = ($filterLevel > 0) ? "<div class='d-none'>" : "<div class='custom-controls-stacked px-1'>";

            foreach ($filter->result() as $value) {
                $childCount = $inst->db->select('*')->where('GROUP_OF', $value->DB_ID)->get('filter')->num_rows();
                $checked = in_array($value->DB_ID, $category_array) ? "checked" : '';
                $html .= "<div class='position-relative ms-" . $filterLevel . "'>
                                <label class='custom-control custom-checkbox mb-1' for='" . $value->SLUG . "-" . $value->DB_ID . "'>
                                    <input type='checkbox' class='custom-control-input checkbox-" . $type . "' id='" . $value->SLUG . "-" . $value->DB_ID . "' value='" . $value->DB_ID . "' data-target='" . $value->NAME . "' $checked>
                                    <span class='custom-control-label'>" . $value->NAME . "</span>
                                </label>
                        " . ($childCount > 0 ? '<span class="custom-control-indicator">+</span>' : '') . "
                      </div>";
                // Recursive call for the next filter level
                $html .= generateFilterHTML($inst, $value->DB_ID, $filterLevel + 1, $type, $category_array);
            }

            $html .= "</div>";
            return $html;
        }

        return ''; // Return empty string if no filters are found
    }
    ?>
    <style>
        .mediaDataContainer .img-thumbnail button {
            position: absolute;
            text-align: center;
            border-radius: 50%;
            right: 3px;
            top: 3px;
            font-size: 16px;
            width: 28px;
            height: 28px;
            border: none;
            z-index: 1;
        }

        .mediaDataContainer .img-thumbnail .main-thumbnail {
            cursor: pointer;
            overflow: hidden;
        }

        .mediaDataContainer .img-thumbnail .main-thumbnail img {
            height: 130px;
            object-fit: cover;
            width: 100%;
            transition: 500ms;
        }

        .mediaDataContainer .img-thumbnail .main-thumbnail img:hover {
            transform: scale(1.3);
            transition: 500ms;
        }

        .mediaDataContainer .img-thumbnail .main-thumbnail input {
            width: 100%;
            position: absolute;
            bottom: 0;
            left: 0;
            background: gray;
            border: 0;
            padding: 2px;
            color: white;
        }

        .custom-control-indicator {
            position: absolute;
            left: -18px;
            border: 1px solid var(--primary09);
            padding: 2px;
            line-height: 10px;
            top: 4px;
            cursor: pointer;
            width: 15px;
            height: 16px;
            text-align: center;
        }

        .add-tags {
            position: relative;
            border: 1px solid #eee;
            height: 40px;
            padding: 5px;
        }

        .add-tags .tags:focus-visible {
            outline: none;
        }

        .tags {
            height: 30px;
            font-size: 13px;
            padding: 5px 10px;
            overflow: hidden;
            text-wrap: nowrap;
            margin-right: 33px;
        }

        .add-tags button {
            position: absolute;
            top: 0;
            right: 0;
            width: 40px;
            height: 39px;
            border: none;
            font-size: 21px;
            line-height: 1;
            font-weight: bold;
            background: var(--bs-primary);
            color: white;
        }

        .add-tags .tag-list-array {
            position: absolute;
            background: #f5f1f1;
            top: 38px;
            left: 0;
            width: 100%;
            color: var(--bs-body-color);
            max-height: 103px;
            overflow-x: scroll;
            z-index: -1;
            opacity: 0;
        }

        .add-tags .tag-list-array li {
            font-size: 14px;
            padding: 5px;
            border-bottom: 1px solid white;
            cursor: pointer;
        }

        .tags-list {
            padding: 20px 5px;
        }

        .tags-list li {
            display: inline-block;
            padding: 5px 40px 5px 24px;
            border-radius: 16px;
            margin-bottom: 5px;
            background: var(--bs-blue);
            color: white;
            font-size: 16px;
            line-height: 1.2;
            margin-left: 2px;
            margin-right: 2px;
            position: relative;
        }

        .tags-list li .remove-tag {
            font-size: 12px;
            position: absolute;
            right: 0;
            width: 29px;
            background: red;
            text-align: center;
            height: 29px;
            top: 0;
            text-align: center;
            line-height: 26px;
            border-radius: 0 13px 13px 0;
            cursor: pointer;
        }
    </style>
    <?php
    $id = $this->input->get('id');
    $post = $this->db->select('*')->from('post')->where('id', $id)->get();
    if ($post->num_rows() > 0) {
        $page = $post->row();
        $images = $this->db->select('*')->from('postmeta')->where('POST_ID', $id)->where('POST_KEY', 'feature_image')->get()->row('POST_VALUE');
        $meta_title = $this->db->select('*')->from('postmeta')->where('POST_ID', $id)->where('POST_KEY', 'meta_title')->get()->row('POST_VALUE');
        $meta_description = $this->db->select('*')->from('postmeta')->where('POST_ID', $id)->where('POST_KEY', 'meta_description')->get()->row('POST_VALUE');
        $comments = $this->db->select('*')->from('postmeta')->where('POST_ID', $id)->where('POST_KEY', 'comments')->get()->row('POST_VALUE');
        $insights = $this->db->select('*')->from('postmeta')->where('POST_ID', $id)->where('POST_KEY', 'is_insights')->get()->row('POST_VALUE');
        $newsletter = $this->db->select('*')->from('postmeta')->where('POST_ID', $id)->where('POST_KEY', 'is_newsletter')->get()->row('POST_VALUE');
        $source = $this->db->select('*')->from('postmeta')->where('POST_ID', $id)->where('POST_KEY', 'source')->get()->row('POST_VALUE');


        $category_array = [];
        $tag_array = [];
        $category_list = $this->db->select('RELATION_ID')->from('filter_post_relationship')->where('OBJECT_ID', $id)->get();
        if ($category_list->num_rows() > 0) {
            foreach ($category_list->result() as $value) {
                $category_array[] = $value->RELATION_ID;
            }
        }

        if ($category_array != null) {
            foreach ($category_array as $value) {
                $tag = $this->db->select('NAME')->from('filter')->where('DB_ID', $value)->where('TYPE', 'tags')->get();
                if ($tag->num_rows() > 0) {
                    $tag_array[] = $tag->row('NAME');
                }
            }
        }
    ?>
        <div class="row row-sm">
            <div class="col-lg-12 position-relative">
                <form id="PostContentUpdate">
                    <div class="error text-danger text-center py-2"></div>
                    <div class="row">
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Title</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="text" name="Post-title" class="form-control Post-title" id="title" data-limit="120" placeholder="Title" value="<?= $page->title ?>">
                                        <div class="text-end text-primary py-2 mb-2 title-count"><?= strlen($page->title) ?>/120</div>
                                    </div>
                                    <input type="hidden" class="form-control userid" name="userid" id="userid" value="<?= $page->user_id ?>">
                                    <input type="hidden" class="form-control type" name="type" id="type" value="<?= $page->type ?>">
                                    <input type="hidden" class="form-control post-id" name="post-id" id="post-id" value="<?= $this->input->get('id') ?>">
                                    <div class="fs-14 py-2 d-flex data-slug-modifier">
                                        <span style="min-width: max-content;"><?= base_url() ?>post/</span>
                                        <input class="post-slug" type="text" name="slug" id="post-slug" value="<?= $page->slug ?>" disabled style="border: none;color: blue;width: 100%;">
                                        <i class="fe fe-edit-2" id="editSlug" title="Edit Slug" style="color: white;background-color: blue;cursor: pointer;height: 25px;width: 40px;text-align: center;line-height: 25px;"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Content</h3>
                                </div>
                                <div class="card-body">
                                    <textarea class="form-control post-content" name="post-content" id="editor" cols="30" rows="8"><?= $page->content ?></textarea>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Content Source Link</h3>
                                </div>
                                <div class="card-body">
                                    <table style="width: 100%;">
                                        <tbody>
                                            <?php
                                            if (!empty($source)) {
                                                $sourceData = json_decode($source);
                                                if (!empty($sourceData)) {
                                                    foreach ($sourceData->name as $key => $value) {
                                                        $name = empty($sourceData->name[$key]) ? 'See the source' : $sourceData->name[$key];
                                                        $value = empty($sourceData->value[$key]) ? 'See the source' : $sourceData->value[$key];
                                                        $button = $key == 0 ? "<button type='button' class='btn btn-primary btn-sm m-auto d-block add-source'>Add</button>" : "<button type='button' class='btn btn-danger btn-sm m-auto d-block' onclick='this.parentElement.parentElement.remove()'>Remove</button>";
                                                        echo "<tr>
                                                        <td class='p-2'>
                                                            <div class='form-group'>
                                                                <label>Source Link Text</label>
                                                                <input type='text' class='form-control source-text' value='" . $name . "'>
                                                            </div>
                                                        </td>
                                                        <td class='p-2'>
                                                            <div class='form-group'>
                                                                <label>Source Link URL</label>
                                                                <input type='text' class='form-control source-link id='source-link' value='" . $value . "'>
                                                            </div>
                                                        </td>
                                                        <td class='p-2'>
                                                            " . $button . "
                                                        </td>
                                                    </tr>";
                                                    }
                                                }else{
                                                    echo "<tr>
                                                            <td class='p-2'>
                                                               <div class='form-group'>
                                                                  <label>Source Link Text</label>
                                                                  <input type='text' class='form-control source-text' value='See the source'>
                                                               </div>
                                                            </td>
                                                            <td class='p-2'>
                                                               <div class='form-group'>
                                                                   <label>Source Link URL</label>
                                                                   <input type='text' class='form-control source-link' id='source-link'>
                                                               </div>
                                                            </td>
                                                            <td class='p-2'>
                                                          	    <button type='button' class='btn btn-primary btn-sm m-auto d-block add-source'>Add</button>
                                                            </td>
                                                          </tr>";
                                                }
                                            }else{
                                                echo "<tr>
                                                        <td class='p-2'>
                                                          <div class='form-group'>
                                                             <label>Source Link Text</label>
                                                             <input type='text' class='form-control source-text' value='See the source'>
                                                          </div>
                                                        </td>
                                                        <td class='p-2'>
                                                          <div class='form-group'>
                                                             <label>Source Link URL</label>
                                                             <input type='text' class='form-control source-link' id='source-link'>
                                                          </div>
                                                        </td>
                                                        <td class='p-2'>
                                                          <button type='button' class='btn btn-primary btn-sm m-auto d-block add-source'>Add</button>
                                                        </td>
                                                      </tr>";
                                            }
                                            ?>
                                        <tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Seo Meta</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="meta-title">Meta Title</label>
                                        <input type="text" class="form-control metaTitle" name="metaTitle" id="metaTitle" value="<?= $meta_title ?>" data-limit="60">
                                        <div id="tvalue" class="text-end text-primary py-2 mb-2 metaTitle-count"><?= $meta_title == "" ? 0 : strlen($meta_title) ?>/60
                                        </div>
                                        <div class="form-group">
                                            <label for="meta-description">Meta description</label>
                                            <textarea class="form-control metaDescription" name="metaDescription" id="metaDescription" rows="3" required="" data-limit="160"><?= $meta_description ?></textarea>
                                            <div id="dvalue" class="text-end text-primary py-2 mb-2 metaDescription-count"><?= $meta_description == "" ? 0 : strlen($meta_description) ?>/160</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Google Data Representation</h3>
                                </div>
                                <div class="card-body">
                                    <div class="google-data-rep p-3">
                                        <h3 class="text-info mb-2 meta-title-content">
                                            <?= $meta_title ?>
                                        </h3>
                                        <p class="fs-16 c-dark-gray meta-Description-content">
                                            <?= $meta_description ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h3 class="card-title">Keywords</h3>
                                </div>
                                <div class="card-body">
                                    <div class="layout-cat-box" style="min-height: 170px;">
                                        <label for="">Add Tags</label>
                                        <div class="add-tags">
                                            <div class="tags" contenteditable></div>
                                            <button class="add-tag-btn" type="button">+</button>
                                            <ul class="tag-list-array">
                                                <li>Solar</li>
                                                <li>Wind</li>
                                                <li>Renewable</li>
                                            </ul>
                                        </div>
                                        <ul class="tags-list">
                                            <?php
                                            foreach ($tag_array as $value) {
                                                echo "<li>$value
                                                    <span onclick='this.parentElement.remove()' class='remove-tag'>x</span>
                                                    <input type='hidden' name='tag[]' value='$value'>
                                                </li>";
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Post Review or (Comment)</h3>
                                </div>
                                <div class="card-body">
                                    <div style="min-height: 170px;">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="" name="post-review" id="post-review" style="border-radius: 0;">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-secondary add-review-btn" type="button" style="border: none;height: 38px;width: 38px;background: var(--bs-blue);color: white;font-size: 30px;line-height: 1px;text-align: center;padding: 0;font-weight: bold;border-radius: 0;">+</button>
                                            </div>
                                        </div>
                                        <div class="post-review-container py-3">
                                            <?= $comments ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-info publish" name="publish" id="publish">Update</button>
                                        <button type="submit" class="btn btn-info draft" name="draft" id="draft">Save As Draft</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="mb-2" for="publish_date">Publish Date</label>
                                        <input type="date" class="form-control publish_date" name="publish_date" id="publish_date" value="<?= date_format(date_create($page->created_at), "Y-m-d") ?>" style="height: 3rem;">
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h3 class="card-title">Newsletter</h3>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <label for="newsletter-yes">
                                            <input type="radio" name="newsletter" class="newsletter" id="newsletter-yes" value="1" <?= $newsletter ? 'checked' : '' ?>>
                                            Yes
                                        </label>
                                        <label for="newsletter-no">
                                            <input type="radio" name="newsletter" class="newsletter" id="newsletter-no" value="0" <?= !$newsletter ? 'checked' : '' ?>>
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h3 class="card-title">Insights</h3>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <label for="insights-yes">
                                            <input type="radio" name="insights" class="insights" id="insights-yes" value="1" <?= $insights ? 'checked' : '' ?>>
                                            Yes
                                        </label>
                                        <label for="insights-no">
                                            <input type="radio" name="insights" class="insights" id="insights-no" value="0" <?= !$insights ? 'checked' : '' ?>>
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h3 class="card-title">Top Articles</h3>
                                </div>
                                <div class="card-body">
                                    <div class="layout-cat-box my-2 px-4" style="overflow: scroll;height: 170px;">
                                        <?= generateFilterHTML($inst, 0, 0, "top-articles", $category_array)  ?>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h3 class="card-title">Categories</h3>
                                    <i class="fe fe-refresh-cw act-reload" style="font-size: 15px;color: #fff;padding: 7px;background: #6c5ffc;border-radius: 5px;"></i>
                                </div>
                                <div class="card-body">
                                    <div class="layout-cat-box my-2 px-4" style="overflow: scroll;height: 170px;">
                                        <?= generateFilterHTML($inst, 0, 0, "category", $category_array)  ?>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h3 class="card-title">States</h3>
                                </div>
                                <div class="card-body">
                                    <div class="layout-cat-box my-2 px-4" style="overflow: scroll;height: 170px;">
                                        <div class="position-relative ms-0">
                                            <label class="custom-control custom-checkbox mb-1" for="check-all">
                                                <input type="checkbox" class="custom-control-input check-all" onchange="checkAll(this)" id="check-all" value="135" data-target=".checkbox-state">
                                                <span class="custom-control-label">All State</span>
                                            </label>
                                        </div>
                                        <?= generateFilterHTML($inst, 0, 0, "state", $category_array)  ?>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h3 class="card-title">Sub Categories</h3>
                                </div>
                                <div class="card-body">
                                    <div class="layout-cat-box my-2 px-4" style="overflow: scroll;height: 170px;">
                                        <?= generateFilterHTML($inst, 0, 0, "type", $category_array)  ?>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Features images</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <span class="add-img" data-name="Features images" data-append="features images" data-bs-toggle="modal" data-bs-target=".import-img-model"></span>
                                        <br>
                                        <div class="addClass">
                                            <?php if ($images != "") { ?>
                                                <div class="position-relative features-image">
                                                    <span style="position: absolute;right: 2px;height: 30px;width: 30px;text-align: center;background: red;color: white;font-size: 20px;top: 2px;font-weight: bold;cursor: pointer;" onclick="this.parentElement.remove()">X</span>
                                                    <img src="<?= base_url() ?>assets/om-upload/thumbnail/<?= $images ?>" alt="<?= $images ?>">
                                                    <input type="hidden" class="media-title" value="<?= $images ?>">
                                                </div>
                                            <?php  } ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    <?php
    } else {
    ?>
        <div class="d-flex justify-content-center align-items-center w-100 fw-bold fs-30" style="min-height: 60vh;">
            Invalid Request ! Page Not Found
        </div>
    <?php
    }
    ?>
    <div aria-live="polite" aria-atomic="true" style="z-index: 11;transform: translate(-50%,-50%);left: 50%;top: 50%;position: fixed;background: white;">
        <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto fw-bold">Error Message</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close">X</button>
            </div>
            <div class="toast-body">
                <div class="text-danger py-5 px-3 fw-bold text-center fs-20" id="toastNotice">Hello, world! This is a toast message.</div>
            </div>
        </div>
    </div>
    <div class="modal fade import-img-model" tabindex="9" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="row row-sm">
                    <div class="col-md-12">
                        <div class="card d-none media-uploader">
                            <div class="card-body">
                                <div class="form-group mb-0">
                                    <input type="file" class="dropify file-upload" data-bs-height="180">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <input type="search" name="search" id="media-search" class="media-search" placeholder="Search..." style="border: 1px solid #eee;padding: 5px 10px;border-radius: 20px;width: 172px;">
                                <button class="btn btn-primary btn-sm toggle-media-box">Add Media</button>
                            </div>
                            <div class="card-body">
                                <div class="panel panel-primary">

                                    <div class="d-flex justify-content-between align-items-center mb-5">
                                        <div class="error-message-container">
                                            <div class="media-error-message d-block text-center">

                                            </div>
                                        </div>
                                        <div class="paginnation-container">
                                            <select name="goto-page" id="goto-page" class="goto-page" style="width: 140px;padding: 5px 11px;border: 1px solid #eee;background: white;border-radius: 17px;">

                                            </select>
                                        </div>
                                    </div>
                                    <div class="mediaDataContainer"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url() ?>assets/vendor/script/media.js" defer></script>
    <script src="<?= base_url() ?>assets/vendor/script/dependencies/tagmanager.js"></script>
    <script src="<?= base_url() ?>assets/vendor/script/post.js"></script>
    <script>
        const tagManager = new TagManager("<?= base_url() ?>");
        const reviewManager = new ReviewManager();
        initializeCharacterLimit('.Post-title', '.title-count', function() {});
        initializeCharacterLimit('.metaTitle', '.metaTitle-count', function(item) {
            document.querySelector(".meta-title-content").innerHTML = item.value;
        });
        initializeCharacterLimit('.metaDescription', '.metaDescription-count', function(item) {
            document.querySelector(".meta-Description-content").innerHTML = item.value;
        });
      
      function checkAll(x) {
        let element = x.getAttribute('data-target');
        document.querySelectorAll(element).forEach((item) => {
            if (x.checked) {
                item.checked = true;
            } else {
                item.checked = false;
            }
        });
    }

    const addSource = document.querySelector('.add-source')
    addSource.addEventListener('click', function(e) {
        let tBody = e.target.parentElement.parentElement.parentElement
        let tr = document.createElement('tr')
        tr.innerHTML = `<td class="p-2">
                                <div class="form-group">
                                    <label>Source Link Text</label>
                                    <input type="text" class="form-control source-text" name="source-text" value="See the source">
                                </div>
                            </td>
                            <td class="p-2">
                                <div class="form-group">
                                    <label>Source Link URL</label>
                                    <input type="text" class="form-control source-link" name="source-link">
                                </div>
                            </td>
                            <td class="p-2">
                                <button type="button" class="btn btn-danger btn-sm m-auto d-block" onclick="this.parentElement.parentElement.remove()">Remove</button>
                            </td>`
        tBody.appendChild(tr);
    })
    </script>