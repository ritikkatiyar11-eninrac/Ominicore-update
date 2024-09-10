function fetchPages(q = "all") {
    let fileDatatable = document.getElementById('file-datatable2')
    if (!fileDatatable) {
        return false
    }
    let URL = base_url() + "api/v1/pages/get?q=" + q
    fetch(URL)
        .then((res) => res.json())
        .then((result) => {
            if (result.responseCode == 200) {
                let tbody = document.querySelector('#file-datatable2 tbody');
                result.responseData.forEach((item, key) => {
                    let tr = document.createElement('tr');
                    tr.innerHTML = `<td>${key + 1}</td>
                        <td><small>${item.title}</small></td>
                        <td><small>${item.created_at}</small></td>
                        <td><small>${item.update_at}</small></td>
                        <td>
                            <div class="material-switch">
                                <input id="filter-status" name="filter-status" type="checkbox" data-target="${item.id}" ${item.status == 0 ? "" : "checked"} value="${item.status}" onclick=""/>
                                <label for="filter-status" class="label-success"></label>
                            </div>
                        </td>
                        <td>
                            <a class="btn btn-sm btn-success" title="update" href="${base_url()}backend-dashboard/pages?action=edit&id=${item.id}" target="_blank">
                                <i class="fe fe-edit"></i>
                            </a>
                            <a class="btn btn-sm btn-primary" title="View Page" href="${base_url()}post/${item.slug}" target="_blank">
                                <i class="fe fe-link"></i>
                            </a>
                            <span class="fe fe-trash btn btn-sm btn-danger" title="delete" data-target="${item.id}" onclick="deletePost(this)" style="line-height: 1.5;"></span>
                        </td>`
                    tbody.appendChild(tr);
                });
            }
            createDatatable('#file-datatable2')
        })
        .catch((err) => {
            console.log("err", err);
        });
}

function destroyDataTable(element) {
    $(element).DataTable().clear().destroy();
}

function createDatatable(element) {
    $(document).ready(function () {
        $(element).DataTable();
    })
}

function deletePost(ele) {
    if (confirm('Are you sure?')) {
        $id = ele.getAttribute('data-target')
        let URL = base_url() + "api/v1/pages/delete?q=" + $id
        fetch(URL)
            .then((res) => res.json())
            .then((result) => {
                if (result.responseCode == 200) {
                    destroyDataTable('#file-datatable2')
                    fetchPages();
                }
            })
            .catch((err) => {
                console.log("err", err);
            });
    }
}

const PostContentUpdate = document.querySelector("#PostContentUpdate")
if (PostContentUpdate) {
    PostContentUpdate.addEventListener("submit", function (e) {
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
            showMessage("Type is required")
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

        let postId = document.querySelector('.post-id')
        if (postId.value == "") {
            showMessage("Unable to address post id contact to developer")
            return false
        }
        data.postId = postId.value

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

        let URL = base_url() + "api/v1/pages/set"
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
                    location.reload();
                }
            })
            .catch((err) => console.log(err));
    })
}

window.addEventListener('DOMContentLoaded', () => fetchPages());