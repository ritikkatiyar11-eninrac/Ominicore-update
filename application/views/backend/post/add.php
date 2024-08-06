<div class="page-header">
    <h1 class="page-title">Add <?= $this->input->get('type') ?></h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url() ?>console-admin/post/?type=<?= $this->input->get('type') ?>&action=view">All <?= $this->input->get('type') ?></a></li>
            <li class="breadcrumb-item active" aria-current="page">Add <?= $this->input->get('type') ?></li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="error mb-4 text-danger text-center"></div>
        <form id="insertPostContent">
            <div class="error text-danger text-center py-2"></div>
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Title</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" name="Post-title" class="form-control Post-title" id="title" placeholder="Title" value="">
                                <div class="text-end text-primary py-2 mb-2">0/80</div>
                            </div>
                            <input type="hidden" class="form-control User-ID" name="User-ID" id="User-ID" value="<?= $this->session->userdata('TP_UID') ?>">
                            <input type="hidden" class="form-control type" name="type" id="type" value="<?= $this->input->get('type') ?>">
                            <input type="hidden" class="form-control action" name="action" id="action" value="<?= $this->input->get('action') ?>">
                            <div class="fs-14 py-2">
                                <span><?= base_url() ?>post/</span><input class="Post-slug" type="text" name="slug" id="Post-slug" value="" style="border: none;color: blue;" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Content</h3>
                        </div>
                        <div class="card-body">
                            <textarea class="form-control post-content" name="post-content" id="editor" cols="30" rows="8"></textarea>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Seo Meta</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="meta-title">Meta Title</label>
                                <input type="text" class="form-control metaTitle" name="metaTitle" id="metaTitle" value="">
                                <div id="tvalue" class="text-end text-primary py-2 mb-2">0/60
                                </div>
                                <div class="form-group">
                                    <label for="meta-description">Meta description</label>
                                    <textarea class="form-control metaDescription" name="metaDescription" id="metaDescription" rows="3" required=""></textarea>
                                    <div id="dvalue" class="text-end text-primary py-2 mb-2">0/160</div>
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
                                <h3 class="text-info mb-2 meta-title-content"></h3>
                                <p id="mdis" class="fs-16 c-dark-gray meta-Description-content"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-info" name="publish" id="publish">Publish</button>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="mb-2" for="publish_date">Publish Date</label>
                                <input type="date" class="form-control publish_date" name="publish_date" id="publish_date" value="2023-03-27" style="height: 3rem;">
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Categories</h3>
                            <i class="fe fe-refresh-cw act-reload" style="font-size: 15px;color: #fff;padding: 7px;background: #6c5ffc;border-radius: 5px;"></i>
                        </div>
                        <div class="card-body">
                            <div class="layout-cat-box my-2 " style="overflow: auto;height: 170px;">
                                <div class="custom-controls-stacked loadCategories">
                                <?php
                                    $this->db->select('terms.term_id,taxonomy,parent,name')->from('term_taxonomy');
                                    $this->db->join('terms', 'terms.term_id = term_taxonomy.term_id');
                                    $this->db->where('term_taxonomy.taxonomy', 'Categories');
                                    $this->db->where('parent', 0);
                                    $taxonomy = $this->db->get();
                                    if ($taxonomy->num_rows() > 0) {
                                        foreach ($taxonomy->result() as $value) {
                                            echo "<label class='custom-control custom-checkbox mb-3' for='$value->name-$value->term_id'>
                                                <input type='checkbox' class='custom-control-input taxonomy' id='$value->name-$value->term_id' value='$value->term_id' data-target='$value->taxonomy'>
                                                <span class='custom-control-label'>$value->name</span>
                                            </label>";
                                            $this->db->select('terms.term_id,taxonomy,parent,name')->from('term_taxonomy');
                                            $this->db->join('terms', 'terms.term_id = term_taxonomy.term_id');
                                            $this->db->where('term_taxonomy.taxonomy', 'Categories');
                                            $this->db->where('parent', $value->term_id);
                                            $taxonomyChild = $this->db->get();
                                            if ($taxonomyChild->num_rows() > 0) {
                                                foreach ($taxonomyChild->result() as $valueChild) {
                                                    echo "<label class='custom-control custom-checkbox mb-3 ms-2' for='$valueChild->name-$valueChild->term_id'>
                                                        <input type='checkbox' class='custom-control-input taxonomy' id='$valueChild->name-$valueChild->term_id' value='$valueChild->term_id' data-target='$valueChild->taxonomy'>
                                                        <span class='custom-control-label'>$valueChild->name</span>
                                                    </label>";
                                                }
                                            }
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Activities</h3>
                            <i class="fe fe-refresh-cw act-reload" style="font-size: 15px;color: #fff;padding: 7px;background: #6c5ffc;border-radius: 5px;"></i>
                        </div>
                        <div class="card-body">
                            <div class="layout-cat-box my-2 " style="overflow: auto;height: 170px;">
                                <div class="custom-controls-stacked loadActivities">
                                    <?php
                                    $this->db->select('terms.term_id,taxonomy,parent,name')->from('term_taxonomy');
                                    $this->db->join('terms', 'terms.term_id = term_taxonomy.term_id');
                                    $this->db->where('term_taxonomy.taxonomy', 'activities');
                                    $this->db->where('parent', 0);
                                    $taxonomy = $this->db->get();
                                    if ($taxonomy->num_rows() > 0) {
                                        foreach ($taxonomy->result() as $value) {
                                            echo "<label class='custom-control custom-checkbox mb-3' for='$value->name-$value->term_id'>
                                                <input type='checkbox' class='custom-control-input taxonomy' id='$value->name-$value->term_id' value='$value->term_id' data-target='$value->taxonomy'>
                                                <span class='custom-control-label'>$value->name</span>
                                            </label>";
                                            $this->db->select('terms.term_id,taxonomy,parent,name')->from('term_taxonomy');
                                            $this->db->join('terms', 'terms.term_id = term_taxonomy.term_id');
                                            $this->db->where('term_taxonomy.taxonomy', 'activities');
                                            $this->db->where('parent', $value->term_id);
                                            $taxonomyChild = $this->db->get();
                                            if ($taxonomyChild->num_rows() > 0) {
                                                foreach ($taxonomyChild->result() as $valueChild) {
                                                    echo "<label class='custom-control custom-checkbox mb-3' for='$valueChild->name-$valueChild->term_id'>
                                                        <input type='checkbox' class='custom-control-input taxonomy' id='$valueChild->name-$valueChild->term_id' value='$valueChild->term_id' data-target='$valueChild->taxonomy'>
                                                        <span class='custom-control-label'>$valueChild->name</span>
                                                    </label>";
                                                }
                                            }
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Tags</h3>
                            <i class="fe fe-refresh-cw tag-reload" style="font-size: 15px;color: #fff;padding: 7px;background: #6c5ffc;border-radius: 5px;"></i>
                        </div>
                        <div class="card-body">
                            <div class="layout-cat-box my-2" style="overflow: auto;height: 170px;">
                                <div class="custom-controls-stacked loadtags">
                                <?php
                                    $this->db->select('terms.term_id,taxonomy,parent,name')->from('term_taxonomy');
                                    $this->db->join('terms', 'terms.term_id = term_taxonomy.term_id');
                                    $this->db->where('term_taxonomy.taxonomy', 'tags');
                                    $this->db->where('parent', 0);
                                    $taxonomy = $this->db->get();
                                    if ($taxonomy->num_rows() > 0) {
                                        foreach ($taxonomy->result() as $value) {
                                            echo "<label class='custom-control custom-checkbox mb-3' for='$value->name-$value->term_id'>
                                                <input type='checkbox' class='custom-control-input taxonomy' id='$value->name-$value->term_id' value='$value->term_id' data-target='$value->taxonomy'>
                                                <span class='custom-control-label'>$value->name</span>
                                            </label>";
                                            $this->db->select('terms.term_id,taxonomy,parent,name')->from('term_taxonomy');
                                            $this->db->join('terms', 'terms.term_id = term_taxonomy.term_id');
                                            $this->db->where('term_taxonomy.taxonomy', 'tags');
                                            $this->db->where('parent', $value->term_id);
                                            $taxonomyChild = $this->db->get();
                                            if ($taxonomyChild->num_rows() > 0) {
                                                foreach ($taxonomyChild->result() as $valueChild) {
                                                    echo "<label class='custom-control custom-checkbox mb-3' for='$valueChild->name-$valueChild->term_id'>
                                                        <input type='checkbox' class='custom-control-input taxonomy' id='$valueChild->name-$valueChild->term_id' value='$valueChild->term_id' data-target='$valueChild->taxonomy'>
                                                        <span class='custom-control-label'>$valueChild->name</span>
                                                    </label>";
                                                }
                                            }
                                        }
                                    }
                                    ?>
                                </div>
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
                                    <div class="add-media" style="display:flex;flex-wrap:wrap;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade import-img-model" tabindex="9" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="row ">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header justify-content-between align-items-center">
                            <form id="fileuploader" class="d-none" action="post" enctype="multipart/form-data">
                                <input type="file" id="file" name="file">
                            </form>
                            <button type="button" class="media-toggle btn btn-primary btn-sm">Add media</button>
                        </div>
                    </div>
                </div>
                <div class="media-error text-danger text-center"></div>
                <div class="col-md-12">
                    <div class="card h-100">
                        <div class="card-header justify-content-between align-items-center">
                            <div class="paginnation-value">Showing 1 to 1 of 1 entries</div>
                            <div>
                                <span>Page no: </span>
                                <select class="mediaPages" style="padding: 5px 10px;width: 60px;border-radius: 5px;border: 1px solid #c1c1c1;">
                                    <option value="1">1</option>
                                </select>
                            </div>
                        </div>
                        <div class="masonry media-page row m-2">

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
<!-- <script src="/assets/eg-assets/script/post.js"></script> -->
<script>
    // load media librery for import media 
    document.querySelector('.add-img').addEventListener('click', (e) => {
        imgSelectionType = e.target.getAttribute('data-append');
        getAttachment(1);
    })

    document.querySelector('.Post-title').addEventListener('change', (event) => titlehandler(event))
    document.querySelector('.Post-title').addEventListener('input', (event) => titlehandler(event))

    function titlehandler(event) {
        if (event.target.value.length > 80) {
            event.target.value = event.target.value.substring(0, 80)
        }
        event.target.nextElementSibling.innerHTML = event.target.value.length + "/80"
        document.querySelector('.Post-slug').value = convertToSlug(event.target.value)
        document.querySelector('.Post-slug').style.width = (document.querySelector('.Post-slug').value.length * 0.8) + "ch";
    }
</script>