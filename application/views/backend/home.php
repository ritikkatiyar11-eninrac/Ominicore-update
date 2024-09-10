<?php require(APPPATH . 'views/backend/layout/header.php') ?>
<div class="page-header">
    <h1 class="page-title">Add page</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">All page</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add page</li>
        </ol>
    </div>
</div>

<div class="row row-sm">
    <div class="col-lg-12">
        <div class="error mb-4 text-danger text-center"></div>
        <form action="" id="PostPublish">
            <div class="error py-2 text-danger text-center"></div>
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Title</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" name="Post-title" autocomplete="off" class="form-control Post-title" id="title" placeholder="Title" value="">
                                <div id="posttitleid" class="text-end text-primary py-2 mb-2">0/80</div>
                            </div>
                            <div class="fs-14 py-2">
                                <span><?= base_url() ?></span><span class="post-slug"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Description</h3>
                        </div>
                        <div class="card-body">
                            <textarea class="form-control post-content" name="post-description" id="editor" cols="30" rows="8" style="display: none;"></textarea>
                            <!-- Note-editor -->
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
                                <div id="tvalue" class="text-end text-primary py-2 mb-2">0/60</div>
                                <div class="form-group">
                                    <label for="meta-description">Meta description</label>
                                    <textarea class="form-control metaDescription" name="metaDescription" id="metaDescription" rows="3"></textarea>
                                    <div id="dvalue" class="text-end text-primary py-2 mb-2">0/160</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-info publish" name="publish" id="publish">Create</button>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="mb-2" for="publish_date">Publish Date</label>
                                <input type="date" class="form-control publish_date" name="publish_date" id="publish_date" value="2024-08-07" style="height: 3rem;">
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Categories</h3>
                            <i class="fe fe-refresh-cw tag-reload" style="font-size: 15px;color: #fff;padding: 7px;background: #6c5ffc;border-radius: 5px;cursor: pointer;"></i>
                        </div>
                        <div class="card-body">
                            <div class="layout-cat-box my-2" style="overflow: auto; height:170px;">
                                <div class="custom-controls-stacked categoriestags">
                                    <label class="custom-control custom-checkbox mb-3" for="Central-93">
                                        <input type="checkbox" class="custom-control-input taxonomy parent-cat" id="Central-93" value="central" data-target="categories">
                                        <span class="custom-control-label">Central</span>
                                    </label>
                                    <label class="custom-control custom-checkbox mb-3" for="State-93">
                                        <input type="checkbox" class="custom-control-input taxonomy parent-cat" id="State-93" value="state" data-target="categories">
                                        <span class="custom-control-label">State</span>
                                    </label>

                                    <label class="custom-control custom-checkbox mb-3" for="openAccess-93">
                                        <input type="checkbox" class="custom-control-input taxonomy parent-cat" id="openAccess-93" value="opeaccess" data-target="categories">
                                        <span class="custom-control-label">Open Access</span>
                                    </label>
                                    <label class="custom-control custom-checkbox mb-3" for="infographics-93">
                                        <input type="checkbox" class="custom-control-input taxonomy parent-cat" id="infographics-93" value="infographics" data-target="categories">
                                        <span class="custom-control-label">Infographics</span>
                                    </label>
                                    <label class="custom-control custom-checkbox mb-3" for="bidUpdates-93">
                                        <input type="checkbox" class="custom-control-input taxonomy parent-cat" id="bidUpdates-93" value="bidupdates" data-target="categories">
                                        <span class="custom-control-label">Bid Updates</span>
                                    </label>
                                    <label class="custom-control custom-checkbox mb-3" for="solarRooftop-93">
                                        <input type="checkbox" class="custom-control-input taxonomy parent-cat" id="solarRooftop-93" value="solarrooftop" data-target="categories">
                                        <span class="custom-control-label">Solar Rooftop</span>
                                    </label>
                                    <label class="custom-control custom-checkbox mb-3" for="generation-93">
                                        <input type="checkbox" class="custom-control-input taxonomy parent-cat" id="generation-93" value="generation" data-target="categories">
                                        <span class="custom-control-label">Generation</span>
                                    </label>
                                    <label class="custom-control custom-checkbox mb-3" for="transmission-93">
                                        <input type="checkbox" class="custom-control-input taxonomy parent-cat" id="transmission-93" value="transmission" data-target="categories">
                                        <span class="custom-control-label">Transmission</span>
                                    </label>
                                    <label class="custom-control custom-checkbox mb-3" for="distribution-93">
                                        <input type="checkbox" class="custom-control-input taxonomy parent-cat" id="distribution-93" value="distribution" data-target="categories">
                                        <span class="custom-control-label">Distribution</span>
                                    </label>
                                    <label class="custom-control custom-checkbox mb-3" for="newenergies-93">
                                        <input type="checkbox" class="custom-control-input taxonomy parent-cat" id="newenergies-93" value="newenergies" data-target="categories">
                                        <span class="custom-control-label">New Energies</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Sub Categories</h3>
                            <i class="fe fe-refresh-cw tag-reload" style="font-size: 15px;color: #fff;padding: 7px;background: #6c5ffc;border-radius: 5px;cursor: pointer;"></i>
                        </div>
                        <div class="card-body">
                            <div class="layout-cat-box my-2" style="overflow: auto;height: 170px;">
                                <div class="custom-controls-stacked subcategorytags">
                                    <label class="custom-control custom-checkbox mb-3" for="CERC -146">
                                        <input type="checkbox" class="custom-control-input taxonomy child-cat" id="CERC -146" value="central/cerc" data-target="tags">
                                        <span class="custom-control-label">CERC </span>
                                    </label>
                                    <label class="custom-control custom-checkbox mb-3" for="CERC -146">
                                        <input type="checkbox" class="custom-control-input taxonomy child-cat" id="MoP -146" value="central/mop" data-target="tags">
                                        <span class="custom-control-label">MoP</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Tags</h3>
                            <i class="fe fe-refresh-cw tag-reload" style="font-size: 15px;color: #fff;padding: 7px;background: #6c5ffc;border-radius: 5px;cursor: pointer;"></i>
                        </div>
                        <div class="card-body">
                            <div class="layout-cat-box my-2" style="overflow: auto;height: 170px;">
                                <div class="custom-controls-stacked loadtags">
                                    <label class="custom-control custom-checkbox mb-3" for="CERC-tag">
                                        <input type="checkbox" class="custom-control-input taxonomy child-cat" id="CERC-tag" value="cerc" data-target="tags">
                                        <span class="custom-control-label">CERC</span>
                                    </label>
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

<script>
    let Taxonomy;
    let postPublish = document.getElementById("PostPublish")
    let publish_date = document.getElementById("publish_date")
    let error = document.querySelector(".error")
    let title = document.getElementById("title")
    let editor = document.getElementById("editor")
    let metaTitle = document.getElementById("metaTitle")
    let metaDescription = document.getElementById("metaDescription")
    let categories = document.querySelectorAll('.categoriestags .taxonomy');
    let subcategorytags = document.querySelectorAll('.subcategorytags .taxonomy');

    title.addEventListener("input", function(e) {
        let titleCounter = document.getElementById("posttitleid")
        titleCounter.innerHTML = ``;
        max_char = 80;
        if (e.target.value.length > max_char) {
            e.target.value = e.target.value.substr(0, max_char)
        }

        let eurlhypn = e.target.value;
        let tempString = eurlhypn.replace(/&/g, "and").replace(/[^A-Za-z0-9]/g, "-")


        // console.log(eurlhypn)
        document.querySelector('.post-slug').innerHTML = tempString;
        titleCounter.innerHTML = `${e.target.value.length}/80`
    })

    metaTitle.addEventListener("input", function(e) {
        let metaTitleCounter = document.getElementById("tvalue")
        metaTitleCounter.innerHTML = ``;
        max_char = 60;
        if (e.target.value.length > max_char) {
            e.target.value = e.target.value.substr(0, max_char)
        }
        metaTitleCounter.innerHTML = `${e.target.value.length}/60`
    });

    metaDescription.addEventListener("input", function(e) {
        let metaDescriptionCounter = document.getElementById("dvalue")
        metaDescriptionCounter.innerHTML = ``;
        max_char = 160;
        if (e.target.value.length > max_char) {
            e.target.value = e.target.value.substr(0, max_char)
        }
        metaDescriptionCounter.innerHTML = `${e.target.value.length}/160`
    })

    postPublish.addEventListener("submit", function(e) {
        e.preventDefault();
        // validator()
        if (title.value == "" || editor.value == "" || metaTitle.value == "" || metaDescription.value == "") {
            error.innerHTML = `All Field are mandatory`
            if (!error.classList.contains('text-danger')) {
                error.classList.add('text-danger')
            }
            return false
        } else {
            error.innerHTML = "News Added successful";
            if (!error.classList.contains('text-success')) {
                error.classList.add('text-success')
                error.classList.remove('text-danger')
            }
            console.log({
                "publish_date": publish_date.value,
                "title": title.value,
                "editor": editor.value,
                "metaTitle": metaTitle.value,
                "metaDescription": metaDescription.value,
                'taxonomy': Taxonomy.value,
            })
            resetFormData();
        }
    });

    function validator() {
        Taxonomy = [];
        categories.forEach(items => {
            if (items.checked) {
                Taxonomy.push(items.value);
            }
        })
        subcategorytags.forEach(items => {
            if (items.checked) {
                Taxonomy.push(items.value);
            }
        })
        tags.forEach(items => {
            if (items.checked) {
                Taxonomy.push(items.value);
            }
        })

        if (Taxonomy == "" || Taxonomy == undefined || Taxonomy == null || Taxonomy == []) {
            error.innerHTML = "Please select anyone filter"
            return false
        }
    }

    function resetFormData() {
        postPublish.reset()
    }
</script>
<?php require(APPPATH . 'views/backend/layout/footer.php') ?>