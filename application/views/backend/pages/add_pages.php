<div class="page-header">
    <h1 class="page-title">Add Pages</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url() ?>backend-dashboard/pages">All Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Pages</li>
        </ol>
    </div>
</div>
<style>
    .custom-control-label {
        width: max-content;
        display: block;
    }
</style>

<?php
$inst = $this;
function generateFilterHTML($inst, $groupOf, $filterLevel, $type)
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
            $checked = $value->NAME == "Top Article" ? "checked" : "";
            $childCount = $inst->db->select('*')->where('GROUP_OF', $value->DB_ID)->get('filter')->num_rows();
            $html .= "<div class='position-relative ms-" . $filterLevel . "'>
                        <label class='custom-control custom-checkbox mb-1' for='" . $value->SLUG . "-" . $value->DB_ID . "'>
                            <input type='checkbox' class='custom-control-input checkbox-" . $type . "' id='" . $value->SLUG . "-" . $value->DB_ID . "' value='" . $value->DB_ID . "' data-target='" . $value->NAME . "' " . $checked . ">
                            <span class='custom-control-label'>" . $value->NAME . "</span>
                        </label>
                        " . ($childCount > 0 ? '<span class="custom-control-indicator">+</span>' : '') . "
                      </div>";
            $html .= generateFilterHTML($inst, $value->DB_ID, $filterLevel + 1, $type);
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
<div class="row row-sm">
    <div class="col-lg-12 position-relative">
        <form id="PostContentInsert">
            <div class="error text-danger text-center py-2"></div>
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Title</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" name="Post-title" class="form-control Post-title" id="title" data-limit="120" placeholder="Title" value="">
                                <div class="text-end text-primary py-2 mb-2 title-count">0/120</div>
                            </div>
                            <input type="hidden" class="form-control userid" name="userid" id="userid" value="1">
                            <input type="hidden" class="form-control type" name="type" id="type" value="policy">
                            <input type="hidden" class="form-control post-id" name="post-id" id="post-id" value="null">
                            <div class="fs-14 py-2 d-flex data-slug-modifier">
                                <span style="min-width: max-content;"><?= base_url() ?>post/</span>
                                <input class="post-slug" type="text" name="slug" id="post-slug" value="" disabled style="border: none;color: blue;width: 100%;">
                                <i class="fe fe-edit-2" id="editSlug" title="Edit Slug" style="color: white;background-color: blue;cursor: pointer;height: 25px;width: 40px;text-align: center;line-height: 25px;"></i>
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
                            <h3 class="card-title">Content Source Link</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="p-2">
                                                <div class="form-group">
                                                    <label>Source Link Text</label>
                                                    <input type="text" class="form-control source-text" value="See the source">
                                                </div>
                                            </td>
                                            <td class="p-2">
                                                <div class="form-group">
                                                    <label>Source Link URL</label>
                                                    <input type="text" class="form-control source-link" id="source-link">
                                                </div>
                                            </td>
                                            <td class="p-2">
                                                <button type="button" class="btn btn-primary btn-sm m-auto d-block add-source">Add</button>
                                            </td>
                                        </tr>
                                    <tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Seo Meta</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="meta-title">Meta Title</label>
                                <input type="text" class="form-control metaTitle" name="metaTitle" id="metaTitle" value="" data-limit="60">
                                <div id="tvalue" class="text-end text-primary py-2 mb-2 metaTitle-count">0/60
                                </div>
                                <div class="form-group">
                                    <label for="meta-description">Meta description</label>
                                    <textarea class="form-control metaDescription" name="metaDescription" id="metaDescription" rows="3" required="" data-limit="160"></textarea>
                                    <div id="dvalue" class="text-end text-primary py-2 mb-2 metaDescription-count">0/160</div>
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
                                <p class="fs-16 c-dark-gray meta-Description-content"></p>
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
                                <ul class="tags-list"></ul>
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
                                <div class="post-review-container py-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-info publish" name="publish" id="publish">Publish</button>
                                <button type="submit" class="btn btn-info draft" name="draft" id="draft">Save As Draft</button>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="mb-2" for="publish_date">Publish Date</label>
                                <input type="date" class="form-control publish_date" name="publish_date" id="publish_date" value="" style="height: 3rem;">
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
                                    <input type="radio" name="newsletter" class="newsletter" id="newsletter-yes" value="1">
                                    Yes
                                </label>
                                <label for="newsletter-no">
                                    <input type="radio" name="newsletter" class="newsletter" id="newsletter-no" value="0">
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
                                    <input type="radio" name="insights" class="insights" id="insights-yes" value="1">
                                    Yes
                                </label>
                                <label for="insights-no">
                                    <input type="radio" name="insights" class="insights" id="insights-no" value="0">
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
                                <?= generateFilterHTML($inst, 0, 0, "top-articles")  ?>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Categories</h3>
                        </div>
                        <div class="card-body">
                            <div class="layout-cat-box my-2 px-4" style="overflow: scroll;height: 170px;">
                                <?= generateFilterHTML($inst, 0, 0, "category")  ?>
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
                                <?= generateFilterHTML($inst, 0, 0, "state")  ?>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Sub Categories</h3>
                        </div>
                        <div class="card-body">
                            <div class="layout-cat-box my-2 px-4" style="overflow: scroll;height: 170px;">
                                <?= generateFilterHTML($inst, 0, 0, "type")  ?>
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
                                <div class="addClass"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


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
    initializeCharacterLimit('.Post-title', '.title-count', function(item) {
        let slug = convertToSlug(item.value)
        document.querySelector(".post-slug").value = slug
    });
    initializeCharacterLimit('.metaTitle', '.metaTitle-count', function(item) {
        document.querySelector(".meta-title-content").innerHTML = item.value;
    });
    initializeCharacterLimit('.metaDescription', '.metaDescription-count', function(item) {
        document.querySelector(".meta-Description-content").innerHTML = item.value;
    });

    const PostContentInsert = document.querySelector("#PostContentInsert")
    if (PostContentInsert) {
        PostContentInsert.addEventListener("submit", function(e) {
            e.preventDefault();
            let submit = e.submitter.getAttribute('name');
            let data = {}
            let status = submit == "draft" ? 0 : 1;
            data.status = status

            let postTitle = document.querySelector('.Post-title')
            if (postTitle.value == "") {
                showMessage("Title is required")
                return false
            }
            data.postTitle = postTitle.value.trim()

            let postSlug = document.querySelector('.post-slug')
            if (postSlug.value == "") {
                showMessage("Post Slug is required")
                return false
            }
            data.postSlug = postSlug.value.trim()

            let type = document.querySelector('.type')
            if (type.value == "") {
                showMessage("Post Type is required")
                return false
            }
            data.type = type.value.trim()

            let postContent = document.querySelector('.post-content')
            if (postContent.value == "") {
                showMessage("Post Content is required")
                return false
            }
            data.postContent = postContent.value.trim()

            let metaTitle = document.querySelector('.metaTitle')
            if (metaTitle.value == "") {
                showMessage("Post Meta Title is required")
                return false
            }
            data.metaTitle = metaTitle.value.trim()

            let metaDescription = document.querySelector('.metaDescription')
            if (metaDescription.value == "") {
                showMessage("Post Meta Description is required")
                return false
            }
            data.metaDescription = metaDescription.value.trim()

            let postReview = document.querySelector('.post-review-container')
            data.postReview = postReview.innerHTML.trim()

            let publish_date = document.querySelector('.publish_date')
            if (publish_date.value == "") {
                showMessage("Post date is required")
                return false
            }
            data.publish_date = publish_date.value.trim()

            let checkboxCategory = document.querySelectorAll('.checkbox-category')
            let categoryValue = []
            checkboxCategory.forEach((item) => {
                if (item.checked) {
                    categoryValue.push(item.value)
                }
            })
            if (categoryValue.length == 0) {
                showMessage("Category is required")
                return false
            }
            data.categoryValue = categoryValue

            let checkboxState = document.querySelectorAll('.checkbox-state')
            let StateValue = []
            checkboxState.forEach((item) => {
                if (item.checked) {
                    StateValue.push(item.value)
                }
            })
            if (StateValue.length == 0) {
                showMessage("State is required")
                return false
            }
            data.StateValue = StateValue

            let checkboxSubCategory = document.querySelectorAll('.checkbox-type')
            let SubCategoryValue = []
            checkboxSubCategory.forEach((item) => {
                if (item.checked) {
                    SubCategoryValue.push(item.value)
                }
            })
            if (SubCategoryValue.length == 0) {
                showMessage("Sub Category is required")
                return false
            }
            data.SubCategoryValue = SubCategoryValue

            let newsletter = document.querySelectorAll('.newsletter')
            let newsletterValue = 0
            newsletter.forEach((item) => {
                if (item.checked) {
                    newsletterValue = item.value
                }
            })
            data.newsletter = newsletterValue

            let insights = document.querySelectorAll('.insights')
            let insightsValue = 0
            insights.forEach((item) => {
                if (item.checked) {
                    insightsValue = item.value
                }
            })
            data.insights = insightsValue

            let tag = document.querySelectorAll('input[name="tag[]"]')
            let tagValue = []
            tag.forEach((item) => {
                tagValue.push(item.value)
            })
            if (tagValue.length == 0) {
                showMessage("Tag is required")
                return false
            }
            data.tagValue = tagValue

            let mediaTitle = document.querySelector('.media-title')
            if (!mediaTitle || mediaTitle.value == "") {
                showMessage("Media is required")
                return false
            }
            data.media = mediaTitle.value

            let userid = document.querySelector('.userid')
            if (userid.value == "") {
                showMessage("Unable to address user id contact to developer")
                return false
            }
            data.userid = userid.value


            let sourcetext = [];
            let sourceLink = [];
            document.querySelectorAll('.source-text').forEach((item) => {
                item.value == "" ? "See the source" : item.value;
                sourcetext.push(item.value)
            })
            document.querySelectorAll('.source-link').forEach((item) => {
                sourceLink.push(item.value)
            })
            if (sourcetext.length != sourceLink.length) {
                showMessage("please add source else remove the empty container")
                return false
            }
            data.source = {
                'name': sourcetext,
                'value': sourceLink
            };

            // checkbox-top-articles
            let checkboxTopArticles = document.querySelectorAll('.checkbox-top-articles')
            let TopArticles = []
            checkboxTopArticles.forEach((item) => {
                if (item.checked) {
                    TopArticles.push(item.value)
                }
            })
            if (TopArticles.length == 0) {
                showMessage("Please select top article is required")
                return false
            }
            data.TopArticles = TopArticles

            let URL = base_url() + "api/v1/pages/add"
            fetch(URL, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data),
                })
                .then((res) => res.json())
                .then((response) => {
                    if (response.responseCode == 400) {
                        showMessage(response.responseMessage)
                    }
                    if (response.responseCode == 200) {
                        window.location.href = base_url() + "backend-dashboard/pages?action=edit&id=" + response.responseData;
                    }
                })
                .catch((err) => console.log(err));
        })
    }

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