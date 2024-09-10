<div class="page-header">
    <h1 class="page-title text-capitalize"><?= $this->input->get('type') ?></h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url() ?>backend-dashboard/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active text-capitalize" aria-current="page"><?= $this->input->get('type') ?></li>
        </ol>
    </div>
</div>
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
<!-- PAGE-HEADER END -->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="error mb-4 text-danger text-center"></div>
        <form id="inserttags">
            <div class="error text-danger text-center py-2"></div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header justify-content-between align-items-center">
                            <h3 class="card-title update-category-title text-capitalize">Create <?= $this->input->get('type') ?></h3>
                            <div class="after-btn"></div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control name" placeholder="Name" value="">
                                <input type="hidden" class="type" name="type" id="type" value="<?= $this->input->get('type') ?>">
                                <input type="hidden" class="filter-id" name="filter-id" id="filter-id" value="">
                            </div>
                            <div class="form-group">
                                <label for="parent">Parent</label>
                                <select class="form-control parent" name="parent" id="parent">
                                    <option value="0">None</option>
                                    <?php
                                    function generateOptions($data, $level = 0)
                                    {
                                        $html = '';

                                        foreach ($data as $item) {
                                            // Generate indentation based on the level
                                            $indent = str_repeat('_ ', $level);

                                            // Add the option tag
                                            $html .= '<option value="' . $item['DB_ID'] . '">' . $indent . $item['NAME'] . '</option>' . PHP_EOL;

                                            // If there are children, recursively call the function
                                            if (!empty($item['children'])) {
                                                $html .= generateOptions($item['children'], $level + 1);
                                            }
                                        }

                                        return $html;
                                    }
                                    $filters = $this->db->select('*')->from('filter')->where('TYPE', $this->input->get('type'))->get();
                                    if ($filters->num_rows() > 0) {

                                        $filter_Array = $filters->result_array();
                                        $items = [];
                                        foreach ($filter_Array as $filter) {
                                            $items[$filter['DB_ID']] = $filter;
                                            $items[$filter['DB_ID']]['children'] = [];
                                        }
                                        $tree = [];
                                        foreach ($items as $id => &$item) {
                                            if ($item['FILTER_LEVEL'] == 0) {
                                                $tree[] = &$item;
                                            } else {
                                                $parentId = $item['GROUP_OF'];
                                                if (isset($items[$parentId])) {
                                                    $items[$parentId]['children'][] = &$item;
                                                }
                                            }
                                        }
                                        $html = generateOptions($tree, $level = 0);
                                        echo $html;
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Description">Description</label>
                                <textarea class="form-control Description" name="Description" id="Description" cols="30" rows="8" placeholder="Description"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header justify-content-between">
                            <h3 class="card-title">Seo Meta</h3>
                            <button type="button" class="border-0" onclick="this.parentElement.nextElementSibling.classList.toggle('d-none')" style="height: 24px;width: 25px;border-radius: 50%;line-height: 25px;"><i class="fe fe-chevron-down"></i></button>
                        </div>
                        <div class="card-body d-none">
                            <div class="form-group">
                                <label for="meta-title">Meta Title (optional)</label>
                                <input type="text" class="form-control metaTitle" name="metaTitle" id="metaTitle" value="" data-limit="60">
                                <div id="tvalue" class="text-end text-primary py-2 mb-2 metaTitle-count">0/60
                                </div>
                                <div class="form-group">
                                    <label for="meta-description">Meta description (optional)</label>
                                    <textarea class="form-control metaDescription" name="metaDescription" id="metaDescription" rows="3" data-limit="160"></textarea>
                                    <div id="dvalue" class="text-end text-primary py-2 mb-2 metaDescription-count">0/160</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header justify-content-between">
                            <h3 class="card-title">Features images</h3>
                            <button type="button" class="border-0" onclick="this.parentElement.nextElementSibling.classList.toggle('d-none')" style="height: 24px;width: 25px;border-radius: 50%;line-height: 25px;"><i class="fe fe-chevron-down"></i></button>
                        </div>
                        <div class="card-body d-none">
                            <div class="form-group">
                                <span class="add-img" data-name="Features images" data-append="features images" data-bs-toggle="modal" data-bs-target=".import-img-model"></span>
                                <br>
                                <div class="addClass">
                                    <div class="add-media" style="display:flex;flex-wrap:wrap;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-info" name="publish" id="publish">Create</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card filter-table">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="card-title text-capitalize">All <?= $this->input->get('type') ?></h3>
                        </div>
                        <div class="card-body">
                            <div class="panel panel-primary">
                                <div class="table-responsive">
                                    <table id="file-datatable2" class="table table-bordered text-wrap key-buttons border-bottom">
                                        <thead>
                                            <tr>
                                                <th class="border-bottom-0">#</th>
                                                <th class="border-bottom-0">Name</th>
                                                <th class="border-bottom-0">Create</th>
                                                <th class="border-bottom-0">Last Update</th>
                                                <th class="border-bottom-0">Status</th>
                                                <th class="border-bottom-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div aria-live="polite" aria-atomic="true" style="z-index: 11;right: 15px;top: 83px;position: fixed;background: white;">
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
<script>
    function showMessage(message) {
        document.getElementById('toastNotice').innerHTML = message
        var myAlert = document.getElementById('liveToast'); //select id of toast
        var bsAlert = new bootstrap.Toast(myAlert); //inizialize it
        bsAlert.show();
    }

    function initializeCharacterLimit(inputSelector, countSelector, callback) {
        const inputElement = document.querySelector(inputSelector);
        const countElement = document.querySelector(countSelector);
        if (inputElement && countElement) {
            const charLimit = parseInt(inputElement.getAttribute('data-limit'), 10);
            inputElement.addEventListener('input', function(e) {
                if (e.target.value.length > charLimit) {
                    e.target.value = e.target.value.slice(0, charLimit);
                }
                countElement.textContent = e.target.value.length + '/' + charLimit;
                callback(document.querySelector(inputSelector));
            });
        }
    }

    function fetchPages(type) {
        fetch(base_url() + "api/v2/filter?type=" + type)
            .then((res) => res.json())
            .then((result) => {
                if (result.responseCode == 200) {
                    let tbody = document.querySelector('#file-datatable2 tbody');
                    result.responseData.forEach((item, key) => {
                        let tr = document.createElement('tr');
                        tr.innerHTML = `<td>${key + 1}</td>
                        <td class="fs-14">${item.NAME}</td>
                        <td class="fs-14">${item.CREATE_AT}</td>
                        <td class="fs-14">${item.LAST_CHANGES}</td>
                        <td>
                            <div class="material-switch">
                                <input id="filter-status" name="filter-status" type="checkbox" data-target="${item.DB_ID}" ${item.STATUS == 0 ? "" : "checked"} value="${item.STATUS}" data-type="${item.TYPE}" onclick="updateFilterStatus(this)"/>
                                <label for="filter-status" class="label-success"></label>
                            </div>                        
                        </td>
                        <td>
                            <span class="fe fe-edit btn btn-sm btn-success" title="update" data-target="${item.DB_ID}" onclick="updateFilterDataPlaced(this)" style="line-height: 1.5;"></span>
                            <a class="btn btn-sm btn-primary" title="View Page" href="${base_url()}${item.URL_SLUG}" target="_blank">
                                <i class="side-menu__icon fe fe-link"></i>
                            </a>
                            <span class="fe fe-trash btn btn-sm btn-danger" title="delete" data-target="${item.DB_ID}" data-type="${item.TYPE}" onclick="DeleteFilterDataPlaced(this)" style="line-height: 1.5;"></span>
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
        $(document).ready(function() {
            $(element).DataTable();
        })
    }

    function updateFilterDataPlaced(x) {
        let id = x.getAttribute('data-target');
        fetch(base_url() + "api/v2/filter/" + id)
            .then((res) => res.json())
            .then((result) => {
                if (result.responseCode == 200) {
                    let data = result.responseData
                    document.querySelector('.name').value = data.NAME
                    document.querySelector('.parent').value = data.GROUP_OF
                    document.querySelector('.Description').value = data.DES
                    document.querySelector('.metaTitle').value = data.meta_title
                    document.querySelector('.metaTitle-count').innerHTML = data.meta_title.length + "/60"
                    document.querySelector('.metaDescription').value = data.meta_description
                    document.querySelector('.metaDescription-count').innerHTML = data.meta_description.length + "/160"
                    document.getElementById('publish').innerHTML = "Update";
                    document.querySelector('.filter-id').value = id;
                    document.querySelector('.addClass').innerHTML = `<div class="position-relative features-image">
                                                                        <span style="position: absolute;right: 2px;height: 30px;width: 30px;text-align: center;background: red;color: white;font-size: 20px;top: 2px;font-weight: bold;cursor: pointer;">X</span>
                                                                        <img src="http://localhost/omnicore/assets/om-upload/thumbnail/${data.IMG}" alt="">
                                                                        <input type="hidden" class="media-title" value="${data.IMG}">
                                                                    </div>`
                    document.querySelector('.filter-table').classList.add('d-none');
                    document.querySelector('.update-category-title').innerHTML = "Update " + document.querySelector('.type').value
                    document.querySelector('.after-btn').innerHTML = `<a href="${window.location.href}" class="btn-sm btn-success">back</a>`

                }
            })
            .catch((err) => {
                console.log("err", err);
            });


    }
    initializeCharacterLimit('.metaTitle', '.metaTitle-count', (item) => {});
    initializeCharacterLimit('.metaDescription', '.metaDescription-count', (item) => {});
    document.querySelector('.add-img').addEventListener('click', (e) => {
        let domAttribute = e.target.getAttribute('data-append')
        mediaObject.setmediaType(domAttribute)
        mediaObject.init()
    })

    const inserttags = document.querySelector('#inserttags')
    if (inserttags) {
        inserttags.addEventListener('submit', function(e) {
            e.preventDefault();
            if (!filterValidation()) {
                return false
            }
            let data = filterValidation();
            let URL = data.publish == "Create" ? base_url() + "api/v2/filter/create" : base_url() + "api/v2/filter/update/" + data.id
            fetch(URL, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data),
                })
                .then((res) => res.json())
                .then((response) => {
                    console.log(response);
                    if (response.responseCode == 200) {
                        if (data.publish == "Create") {
                            destroyDataTable('#file-datatable2')
                            inserttags.reset()
                            document.querySelector('.addClass').innerHTML = "";
                            fetchPages(data.type)
                        } else {
                            window.location.reload();
                        }
                    } else {
                        showMessage(response.responseMessage)
                    }
                })
                .catch((err) => console.log(err));
        })
    }

    function filterValidation() {
        let data = {};
        let name = document.querySelector('.name');
        if (name.value == "") {
            showMessage('Name is required <br> Please Enter The Name')
            return false;
        }

        let parent = document.querySelector('.parent');
        let Description = document.querySelector('.Description');
        let metaTitle = document.querySelector('.metaTitle');
        let metaDescription = document.querySelector('.metaDescription');
        let publish = document.getElementById('publish');
        let id = document.querySelector('.filter-id');
        let type = document.querySelector('.type');
        let media = document.querySelector('.media-title') ? document.querySelector('.media-title').value : "";

        data.name = name.value.trim();
        data.parent = parent.value.trim();
        data.Description = Description.value.trim();
        data.metaTitle = metaTitle.value.trim();
        data.metaDescription = metaDescription.value.trim();
        data.publish = publish.innerHTML.trim();
        data.id = id.value.trim();
        data.type = type.value.trim();
        data.media = media.trim();

        return data;
    }

    function DeleteFilterDataPlaced(x) {
        let id = x.getAttribute('data-target');
        let type = x.getAttribute('data-type');
        let ans = confirm('Are You Sure Want to delete ???')
        if (!ans) {
            return false;
        }
        URL = base_url() + "api/v2/filter/delete/" + id + "?type=" + type;
        fetch(URL)
            .then((res) => res.json())
            .then((result) => {
                if (result.responseCode == 200) {
                    destroyDataTable('#file-datatable2')
                    fetchPages(type)
                }
                if (result.responseCode == 403) {
                    showMessage('You need to delete you child first in order to delete you parent ' + type)
                }
            })
            .catch((err) => {
                console.log("err", err);
            });

    }

    function updateFilterStatus(x) {
        let id = x.getAttribute('data-target');
        let value = x.checked ? 1 : 0;
        let type = x.getAttribute('data-type');
        console.log(id, value);
        data = {
            id: id,
            value: value.toString(),
            type: type
        };
        URL = base_url() + "api/v2/filter/update-filter-status";
        fetch(URL, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data),
            })
            .then((res) => res.json())
            .then((result) => {
                console.log(result);
                // if (result.responseCode == 200) {
                //     destroyDataTable('#file-datatable2')
                //     fetchPages(type)
                // }
                // if (result.responseCode == 403) {
                //     showMessage('You need to delete you child first in order to delete you parent ' + type)
                // }
            })
            .catch((err) => {
                console.log("err", err);
            });
    }
    window.addEventListener('DOMContentLoaded', () => {
        let type = document.querySelector('.type')
        fetchPages(type.value)
    });
</script>