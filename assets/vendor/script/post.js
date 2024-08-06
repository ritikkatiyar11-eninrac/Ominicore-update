const Post = {
    input: {},
    init: function () {        
        this.paramString()
        if (this.input.action === "view"){
            createDatatable('#file-datatable2')
        }else{
            this.errormessage = document.querySelector('.error')
            this.gettaxonomy();
            this.UID()
            if (this.input.action === "update" && this.input.id != undefined) {
                let post = this.input
                this.requestAPI('/console-admin/post/singlepost', this.input, function (data) {
                    if (data.responseCode == 200 && data.responseMessage == "OK") {
                        document.querySelector('.Post-title').value = data.responseData[0].post_title
                        document.querySelector('.Post-title').nextElementSibling.innerHTML = data.responseData[0].post_title.length + "/80"
                        post.title = document.querySelector('.Post-title').value;
    
                        document.querySelector('.Post-slug').value = data.responseData[0].post_slug
                        document.querySelector('.Post-slug').style.width = (data.responseData[0].post_slug.length * 0.8) + "ch"
                        post.postSlug = data.responseData[0].post_slug
    
                        summernoteImage(data.responseData[0].post_content)
                        document.querySelector('.post-content').value = data.responseData[0].post_content
                        post.postContent = document.querySelector('.post-content').value
    
                        document.querySelector('.metaTitle').value = data.responseData[0].post_meta_title
                        document.querySelector('.metaTitle').nextElementSibling.innerHTML = data.responseData[0].post_meta_title.length + "/60"
                        document.querySelector('.meta-title-content').innerHTML = data.responseData[0].post_meta_title
                        post.metaTitle = data.responseData[0].post_meta_title;
    
                        document.querySelector('.metaDescription').value = data.responseData[0].post_meta_excerpt
                        document.querySelector('.metaDescription').nextElementSibling.innerHTML = data.responseData[0].post_meta_excerpt.length + "/160"
                        document.querySelector('.meta-Description-content').innerHTML = data.responseData[0].post_meta_excerpt
                        post.metaDescription = data.responseData[0].post_meta_excerpt;
    
                        document.querySelector('.publish_date').value = data.responseData[0].publish_date.split(' ')[0]
                        post.publishDate = data.responseData[0].publish_date.split(' ')[0]
    
                        document.querySelector('.addClass').innerHTML = `<div class="add-media" style="display:flex;flex-wrap:wrap;"><div class="img-ifream-section" style="width: 100px;height: 100px;margin: 10px 0;">
                                <span class="btn btn-danger btn-sm rmv" style="position: absolute;cursor: pointer;">X</span>
                                <input type="hidden" class="postimage" name="image" value="${data.responseData[0].post_image.ID}">
                                <img src="/${data.responseData[0].post_image.post_excerpt}thumbnail/${data.responseData[0].post_image.post_meta_title}${data.responseData[0].post_image.post_meta_excerpt}" style="width: 100px;height: 100px;border: 1px solid #eee;">
                            </div>
                        </div>`
                        post.postimage = document.querySelector('.postimage').value
    
                        document.querySelectorAll('.taxonomy').forEach(item => {
                            let taxonomy = data.responseData[0].taxonomy
                            for (let i = 0; i < taxonomy.length; i++) {
                                if (item.value == taxonomy[i].term_id) item.checked = true;
                            }
                        })
                        Post.taxonomyhandler()
                    }
                })
            }
            document.querySelector('.Post-title').addEventListener('change', (event) => this.titlehandler(event))
            document.querySelector('.Post-title').addEventListener('input', (event) => this.titlehandler(event))
            document.querySelector('.metaTitle').addEventListener('change', (event) => this.metaTitlehandler(event))
            document.querySelector('.metaTitle').addEventListener('input', (event) => this.metaTitlehandler(event))
            document.querySelector('.metaDescription').addEventListener('change', (event) => this.metaDescriptionhandler(event))
            document.querySelector('.metaDescription').addEventListener('input', (event) => this.metaDescriptionhandler(event))
            document.querySelector('.publish_date').addEventListener('change', (event) => this.publishDateHandler(event))
            document.querySelector('.publish_date').addEventListener('input', (event) => this.publishDateHandler(event))
            document.querySelector('#insertPostContent').addEventListener('submit', (event) => this.formRequest(event))
            document.querySelector('.act-reload').addEventListener('click', () => this.gettaxonomy())
            document.querySelector('.tag-reload').addEventListener('click', () => this.gettaxonomy())
        }        
    },
    UID: function () {
        let userdataValue = getCookieValue('userdata')
        if (userdataValue == null) {
            return false
        } else {
            let cookieData = JSON.parse(userdataValue)
            document.querySelector('.User-ID').value = cookieData.TP_UID
            this.input.UID = document.querySelector('.User-ID').value;
        }
    },
    paramString() {
        let urlString = window.location.href
        let paramString = urlString.split('?')[1];
        let params_arr = paramString.split('&');
        params_arr.forEach((item, key) => {
            let pair = item.split('=');
            if (pair[0] === "type") {
                this.input.type = pair[1]
            }
            if (pair[0] === "action") {
                this.input.action = pair[1]
            }
            if (pair[0] === "id") {
                this.input.id = pair[1]
            }
        })
    },
    gettaxonomy: function () {
        this.input.taxonomyTags = ""
        this.input.taxonomyActivities = ""
        Promise.all([
            fetch('/console-admin/post/gettaxonomy?type=activities'),
            fetch('/console-admin/post/gettaxonomy?type=tags')
        ]).then(function (responses) {
            // Get a JSON object from each of the responses
            return Promise.all(responses.map(function (response) {
                return response.json();
            }));
        }).then(function (data) {
            // Log the data to the console
            // You would do something with both sets of data here
            let Activities = document.querySelector('.loadActivities')
            let tags = document.querySelector('.loadtags')
            Activities.innerHTML = ""
            tags.innerHTML = ""
            if (data[0].responseCode === 200) {
                data[0].responseData.forEach(item => {
                    Activities.innerHTML += `<label class="custom-control custom-checkbox mb-3" for="${item.name}-${item.term_id}">
                    <input type="checkbox" class="custom-control-input taxonomy" id="${item.name}-${item.term_id}" value="${item.term_id}" data-target="${item.taxonomy}">
                    <span class="custom-control-label">${item.name}</span>
                    </label>`
                });
            }
            if (data[1].responseCode === 200) {
                data[1].responseData.forEach(item => {
                    tags.innerHTML += `<label class="custom-control custom-checkbox mb-3" for="${item.name}-${item.term_id}">
                    <input type="checkbox" class="custom-control-input taxonomy" id="${item.name}-${item.term_id}" value="${item.term_id}" data-target="${item.taxonomy}">
                    <span class="custom-control-label">${item.name}</span>
                    </label>`
                });
            }
            document.querySelectorAll('.taxonomy').forEach(item => {
                item.addEventListener('click', () => Post.taxonomyhandler())
            })
        }).catch(function (error) {
            console.log(error);
        });
    },
    taxonomyhandler: function () {
        let tags = [];
        let activities = [];
        document.querySelectorAll('.taxonomy').forEach((item) => {
            if (item.checked && item.getAttribute('data-target') === "tags") {
                tags.push(item.value)
            }
            if (item.checked && item.getAttribute('data-target') === "activities") {
                activities.push(item.value)
            }
        })
        this.input.taxonomyTags = tags.toString()
        this.input.taxonomyActivities = activities.toString();
    },
    titlehandler: function (event) {
        if (event.target.value.length > 80) {
            event.target.value = event.target.value.substring(0, 80)
        }
        event.target.nextElementSibling.innerHTML = event.target.value.length + "/80"
        this.input.title = event.target.value;
        if (this.input.action != "update") {
            document.querySelector('.Post-slug').value = convertToSlug(event.target.value)
            document.querySelector('.Post-slug').style.width = (document.querySelector('.Post-slug').value.length * 0.8) + "ch";
            this.input.postSlug = document.querySelector('.Post-slug').value
        }  
    },
    metaTitlehandler: function (event) {
        if (event.target.value.length > 60) {
            event.target.value = event.target.value.substring(0, 60)
        }
        event.target.nextElementSibling.innerHTML = event.target.value.length + "/60"
        document.querySelector('.meta-title-content').innerHTML = event.target.value
        this.input.metaTitle = event.target.value;
    },
    metaDescriptionhandler: function (event) {
        if (event.target.value.length > 160) {
            event.target.value = event.target.value.substring(0, 160)
        }
        event.target.nextElementSibling.innerHTML = event.target.value.length + "/160"
        document.querySelector('.meta-Description-content').innerHTML = event.target.value
        this.input.metaDescription = event.target.value;
    },
    publishDateHandler: function (event) {
        this.input.publishDate = event.target.value;
    },
    validator() {
        let input = this.input
        if (input.title === "" || input.title === undefined) {
            this.errormessage.innerHTML = "Title is empty"
            return false
        }
        if (input.postContent === "" || input.postContent === undefined) {
            this.errormessage.innerHTML = "Content is empty"
            return false
        }
        if (input.metaTitle === "" || input.metaTitle === undefined) {
            this.errormessage.innerHTML = "Meta Title is empty"
            return false
        }
        if (input.metaDescription === "" || input.metaDescription === undefined) {
            this.errormessage.innerHTML = "Meta Description is empty"
            return false
        }
        if (input.taxonomyActivities === "" || input.taxonomyActivities === undefined) {
            this.errormessage.innerHTML = "Activities is empty"
            return false
        }
        if (input.taxonomyTags === "" || input.taxonomyTags === undefined) {
            this.errormessage.innerHTML = "Tags is empty"
            return false
        }
        if (input.postimage === "" || input.postimage === undefined) {
            this.errormessage.innerHTML = "Please select the image"
            return false
        }
        if (input.publishDate === "" || input.publishDate === undefined) {
            this.errormessage.innerHTML = "Please select publish Date"
            return false
        }
        this.errormessage.innerHTML = ""
        return true
    },
    formRequest: function (event) {
        event.preventDefault();
        this.input.postContent = document.querySelector('.post-content').value
        if (document.querySelector('.postimage') == undefined || document.querySelector('.postimage') == null) {
            this.errormessage.innerHTML = "please select the image"
            return false;
        } else {
            this.input.postimage = document.querySelector('.postimage').value
        }
        if (this.validator() != true) return false;

        requestAPI("/console-admin/post/postrequest", this.input, function (data) {
            console.log(data);
            if (data.responseCode == 200 && data.responseMessage == "OK") {
                window.location.href = "/console-admin/post/?type=" + Post.input.type + "&action=update&id=" + data.responseData;
            }
        })
    },
    requestAPI(url, data, callback) {
        fetch(url, {
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
    $(document).ready(function () {
        $(element).DataTable();
    })
}
window.addEventListener('DOMContentLoaded', () => Post.init());