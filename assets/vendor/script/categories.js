const categoriesTransaction = {
    inputs: {
        name: "",
        slug: "",
        type: "",
        UID: "",
        parent: "",
        description: "",
        action: "",
        CID: "",
        image: "",
    },
    base_url: '/console-admin/categories/',
    requestAPI(url, data, callback) {
        fetch(this.base_url + url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(responseData => callback(responseData))
            .catch(error => console.error('Error:', error))
    },
    UID() {
        let userdataValue = getCookieValue('userdata')
        if (userdataValue == null) {
            return false
        } else {
            let cookieData = JSON.parse(userdataValue)
            categoriesTransaction.inputs.UID = cookieData.TP_UID;
            return cookieData.TP_UID;
        }
    },
    theme: {
        getparent(callback) {
            let url = categoriesTransaction.base_url + "getparent?q=all&type=" + categoriesTransaction.inputs.type
            fetch(url).then(response => response.json())
                .then(result => {
                    if (result.responseCode == 200) {
                        callback(result.responseData)
                    }
                })
                .catch(err => console.error(err));
        },
        pageHeader() {
            return `<div class="page-header">
                        <h1 class="page-title">${categoriesTransaction.inputs.type.toUpperCase()}</h1>
                        <div>
                    </div>
                </div>`
        },
        structure() {
            return `${categoriesTransaction.theme.pageHeader()}
            <div class="row row-sm">
            <div class="col-lg-4">
                <div class="CreateForm">
                    ${categoriesTransaction.theme.form()}
                </div>
            </div>
            <div class="col-lg-8">
                <div class="dataTableCreate">
                    ${categoriesTransaction.theme.table()}
                </div>
            </div>
            </div>`
        },
        form() {
            return `<div class="card">
            <div class="card-header justify-content-between">
                <h3 class="card-title">${categoriesTransaction.inputs.action == "insert"?"Add":"Update"} ${categoriesTransaction.inputs.type}</h3>
            </div>
            <div class="card-body">
                <div class="error mb-4 text-danger text-center"></div>
                    <form id="ajaxCategories">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="" placeholder=" Enter Name">
                            <input type="hidden" class="form-control" name="type" id="type" value="${categoriesTransaction.inputs.type}">
                            <input type="hidden" class="form-control" name="UID" id="UID" value="${categoriesTransaction.UID()}">
                            <input type="hidden" class="form-control" name="CID" id="CID" value="${categoriesTransaction.inputs.CID}">
                        </div>
                        <div class="form-group">
                            <label for="parent">Parent</label>
                            <select name="parent" id="parent" value="" class="form-control">
                            <option value="0">None</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug (optional)</label>
                            <input type="text" class="form-control" name="slug" id="slug" placeholder="Enter Slug">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" placeholder="Enter Description"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="mb-2">Features images</label>
                            <span class="add-img" data-name="Features images" data-append="features images" data-bs-toggle="modal" data-bs-target=".import-img-model"></span>
                            <br>
                            <div class="addClass">
                                <div class="add-media" style="display:flex;flex-wrap:wrap;"></div>
                            </div>
                        </div>
                        <input type="submit" value="${categoriesTransaction.inputs.action}" class="btn btn-primary">
                    </form>
                </div>
            </div>`
        },
        table() {
            return `<div class="card">
            <div class="card-header justify-content-between">
                <h3 class="card-title">All ${categoriesTransaction.inputs.type}</h3>
                <button class="btn btn-sm btn-primary bulk-delete">Bulk Delete</button>
            </div>
            <div class="card-body">
                <div class="panel panel-primary">
                    <div class="table-responsive">
                        <table id="file-datatable2" class="table table-bordered text-wrap key-buttons border-bottom">
                            <thead>
                                <tr>
                                    <th class="border-bottom-0">#</th>
                                    <th class="border-bottom-0">Image</th>
                                    <th class="border-bottom-0">Name</th>
                                    <th class="border-bottom-0">Description</th>
                                    <th class="border-bottom-0">Slug</th>
                                    <th class="border-bottom-0">Type</th>
                                    <th class="border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>`
        }
    },
    paramString(callback) {
        let urlString = window.location.href
        let paramString = urlString.split('?')[1];
        let params_arr = paramString.split('&');
        let pair = params_arr[0].split('=');
        if (pair[0] === "type") {
            this.inputs.type = pair[1]
        } else {
            document.querySelector('.contentArea').innerHTML = "404 page not found"
        }
        callback()
    },
    init() {
        // Adding Default action to insert
        this.inputs.action = "insert"
        // Checking the valid param for the string
        this.paramString((res) => {
            // Create the categories page layout for CRUD Operation 
            document.querySelector('.contentArea').innerHTML = this.theme.structure()
            categoriesTransaction.theme.getparent((data) => {
                let templete = '<option value="0">None</option>';
                data.forEach((item, key) => {
                    templete += `<option value="${item.term_id}">${item.name}</option>`
                })
                document.querySelector('#parent').innerHTML = templete
            });
            // Create a table for display all the categories
            categoriesTransaction.getCategories()
            // Show the table div if it is hide
            if (document.querySelector('.dataTableCreate').classList.contains('d-none')) document.querySelector('.dataTableCreate').classList.remove('d-none')
            // creating slug for URL for change event
            document.querySelector('#name').addEventListener('change', e => this.createSlug(e))
            // creating slug for URL for blur event
            document.querySelector('#name').addEventListener('blur', e => this.createSlug(e))
            // load media librery for import media 
            document.querySelector('.add-img').addEventListener('click', (e) => {
                imgSelectionType = e.target.getAttribute('data-append');
                getAttachment(1);
            })
            // add event lisiner on insert form submition
            document.querySelector('#ajaxCategories').addEventListener('submit', e => this.insertData(e));
        })
    },
    createSlug(e) {
        document.querySelector('#slug').value = convertToSlug(e.target.value)
        this.inputs.slug = document.querySelector('#slug').value
    },
    insertData(event) {
        event.preventDefault()
        const error = document.querySelector('.error')
        this.inputs.name = document.querySelector('#name').value
        this.inputs.slug = document.querySelector('#slug').value
        this.inputs.parent = document.querySelector('#parent').value
        this.inputs.description = document.querySelector('#description').value
        if (!(document.querySelector('input[name="image"]') == undefined || document.querySelector('input[name="image"]') == null)) {
            this.inputs.image = document.querySelector('input[name="image"]').value
        }
        let validator = this.formValidator()
        if (!validator) {
            error.innerHTML = ""
        } else {
            if (error.classList.contains('text-success')) {
                error.classList.remove('text-success')
            }
            if (!error.classList.contains('text-danger')) {
                error.classList.add('text-danger')
            }
            error.innerHTML = validator
            return true
        }
        let url = "insert"

        if(this.inputs.action !== "insert"){
            url = "update"
        }            
        categoriesTransaction.requestAPI(url, categoriesTransaction.inputs, (result) => {
            if (result.responseCode === 200) {
                categoriesTransaction.init()
                error.innerHTML = categoriesTransaction.inputs.type + " inserted successfully"
                if (error.classList.contains('text-danger')) {
                    error.classList.remove('text-danger')
                }
                if (!error.classList.contains('text-success')) {
                    error.classList.add('text-success')
                }
            } else {
                error.innerHTML = categoriesTransaction.inputs.type + " inserted successfully"
                if (!error.classList.contains('text-danger')) {
                    error.classList.add('text-danger')
                }
                if (error.classList.contains('text-success')) {
                    error.classList.remove('text-success')
                }
            }
        })
    },
    formValidator() {
        if (this.inputs.name == "") {
            return "Name required"
        }
        if (this.inputs.slug == "") {
            return "Slug required"
        }
        if (this.inputs.parent == "") {
            return "Please select parent"
        }
        if (this.inputs.description == "") {
            return "Description required"
        }
        if (this.inputs.image == "") {
            return "Please select image"
        }
        return false
    },
    getCategories() {
        let url = "get"
        categoriesTransaction.requestAPI(url, {
            q: "all",
            type: categoriesTransaction.inputs.type,
        }, (result) => {
            let templete = "";
            let deletebtn = document.querySelector('.bulk-delete')
            destroyDataTable('#file-datatable2')
            if (result.responseCode == 200) {
                result.responseData.forEach((item, key) => {
                    templete += `<tr>
                            <td><input type="checkbox" value="${item.term_id}" class="blukDelete"></td>
                            <td><img src="/${item.post_excerpt}thumbnail/${item.post_meta_title}${item.post_meta_excerpt}" alt="${item.name}" style="height: 35px;"></td>
                            <td>${item.name}</td>
                            <td>${item.description}</td>
                            <td>${item.slug}</td>
                            <td>${item.taxonomy}</td>
                            <td><span class="fe fe-edit fs-14 text-success cateditable" aria-label="${item.term_id}"></span></td>
                        </tr>`
                })
                if (deletebtn.classList.contains('d-none')) deletebtn.classList.remove('d-none')
            } else {
                if (!deletebtn.classList.contains('d-none')) deletebtn.classList.add('d-none')
            }
            document.querySelector('#file-datatable2 tbody').innerHTML = templete

            createDatatable('#file-datatable2')
            document.querySelectorAll('.cateditable').forEach((item) => {
                item.addEventListener('click', () => categoriesTransaction.catUpdateEvent(item))
            })
            deletebtn.addEventListener('click', function() {
                categoriesTransaction.deleteCategoriesData()
            })
        })
    },
    deleteCategoriesData() {
        let inputChecked = document.querySelectorAll('.blukDelete')
        let categoresID = [];
        inputChecked.forEach((item, key) => {
            if (item.checked) {
                categoresID.push(item.value);
            }
        })
        if (categoresID.length === 0) {
            alert('first you need to select the input field');
            return false
        } else {
            if (confirm("Are you sure want to remove all the selected items")) {
                let id = categoresID.join(',')
                categoriesTransaction.requestAPI('delete', {
                    q: id,
                    type: categoriesTransaction.inputs.type,
                }, (result) => {
                    if (result.responseCode == 200) {
                        categoriesTransaction.init()
                    } else {
                        alert(result.responseMessage);
                    }
                })
            } else {
                return false
            }
        }
    },
    catUpdateEvent(element) {
        // add Categories id to the object inputs
        categoriesTransaction.inputs.CID = element.getAttribute('aria-label')
        // set the request URL
        let url = "get"
        // sending the fetch request
        categoriesTransaction.requestAPI(url, {
            q: categoriesTransaction.inputs.CID,
            type: categoriesTransaction.inputs.type,
        }, (result) => {
            if (result.responseCode == 200) {
                // Change the input action default to update
                categoriesTransaction.inputs.action = 'update'
                // replace the insert form to update form
                document.querySelector('.CreateForm').innerHTML = categoriesTransaction.theme.form()
                // hide the datatable
                if (!document.querySelector('.dataTableCreate').classList.contains('d-none')) document.querySelector('.dataTableCreate').classList.add('d-none')
                // Create a button for back to default
                let btn = document.createElement("button");
                btn.setAttribute("class", "btn btn-sm btn-primary catback")
                btn.innerText = 'back'
                document.querySelector('.CreateForm .card-header').appendChild(btn)
                // set the value for name input
                document.querySelector('#name').value = result.responseData[0].name
                // set the value for slug input
                document.querySelector('#slug').value = result.responseData[0].slug
                // set the value for parent input
                categoriesTransaction.theme.getparent((data) => {
                    let templete = '<option value="0">None</option>';
                    data.forEach((item, key) => {
                        if (item.term_id == result.responseData[0].parent) {
                            templete += `<option value="${item.term_id}" selected>${item.name}</option>`
                        } else {
                            templete += `<option value="${item.term_id}">${item.name}</option>`
                        }
                    })
                    document.querySelector('#parent').innerHTML = templete
                });
                // set the value for description input
                document.querySelector('#description').value = result.responseData[0].description
                // set the value for image date
                document.querySelector('.add-media').innerHTML = `<div class="img-ifream-section" style="width: 100px;height: 100px;margin: 10px 0;">
                    <span class="btn btn-danger btn-sm rmv" style="position: absolute;cursor: pointer;">X</span>
                    <input type="hidden" name="image" value="${result.responseData[0].meta_value}">
                    <img src="/${result.responseData[0].post_excerpt}thumbnail/${result.responseData[0].post_meta_title+result.responseData[0].post_meta_excerpt}" style="width: 100px;height: 100px;border: 1px solid #eee;">
                </div>`;
                // adding the eventlistener for reset or go back
                document.querySelector('.catback').addEventListener('click', () => categoriesTransaction.init())
                // load media librery for import media 
                document.querySelector('.add-img').addEventListener('click', (e) => {
                    imgSelectionType = e.target.getAttribute('data-append');
                    getAttachment(1);
                })

                // add event lisiner on insert form submition
                document.querySelector('#ajaxCategories').addEventListener('submit', e => this.insertData(e));
            }
        })
    }
}

function getCookieValue(cookieName) {
    var cookies = document.cookie.split('; ');
    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i].split('=');
        var name = decodeURIComponent(cookie[0]);
        var value = decodeURIComponent(cookie[1]);
        if (name === cookieName) {
            return value;
        }
    }
    return null;
}

function destroyDataTable(element) {
    $(element).DataTable().clear().destroy();
}

function createDatatable(element) {
    $(document).ready(function() {
        $(element).DataTable();
    })
}

document.addEventListener('DOMContentLoaded', categoriesTransaction.init());