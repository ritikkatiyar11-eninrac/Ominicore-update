class TagManager {
    constructor(baseURL) {
        this.baseURL = baseURL;
        this.init();
    }
    init() {
        this.tags = document.querySelector('.add-tags .tags');
        if (this.tags) {
            this.addEventListeners();
        }
    }
    addEventListeners() {
        this.tags.addEventListener('input', (e) => this.handleInput(e));
        this.tags.addEventListener('blur', (e) => this.handleBlur(e));
        document.querySelector('.add-tag-btn').addEventListener('click', (e) => this.handleAddTagClick(e));
    }
    handleInput(e) {
        let keyword = e.target.innerHTML.replace(/<[^>]*>?/gm, '');
        let selectionElement = e.target.nextElementSibling.nextElementSibling;
        let URL = `${this.baseURL}api/v2/filter/search?keyword=${keyword}&type=tags`;
        fetch(URL)
            .then(response => response.json())
            .then(data => this.handleFetchResponse(data, selectionElement));
    }
    handleFetchResponse(data, selectionElement) {
        if (data.responseCode === 200) {
            selectionElement.style.zIndex = 1;
            selectionElement.style.opacity = 1;
            selectionElement.innerHTML = "";
            data.responseData.forEach(element => {
                selectionElement.innerHTML += `<li>${element.NAME}</li>`;
            });
            this.addTagClickListeners();
        } else {
            selectionElement.style.zIndex = -1;
            selectionElement.style.opacity = 0;
            selectionElement.innerHTML = "";
        }
    }
    addTagClickListeners() {
        document.querySelectorAll('.tag-list-array li').forEach(element => {
            element.addEventListener('click', (e) => this.handleTagClick(e));
        });
    }
    handleTagClick(e) {
        let value = e.target.innerHTML;
        if (!this.checkTags(value)) {
            document.querySelector('.tags-list').innerHTML += `
                <li>${value}
                    <span onclick="this.parentElement.remove()" class="remove-tag">x</span>
                    <input type="hidden" name="tag[]" value="${value}">
                </li>`;
        }
        this.tags.innerHTML = "";
    }
    handleBlur(e) {
        let selectionElement = e.target.nextElementSibling.nextElementSibling;
        selectionElement.style.opacity = 0;
        setTimeout(() => {
            selectionElement.style.zIndex = -1;
        }, 1000);
    }
    handleAddTagClick(e) {
        let value = e.target.previousElementSibling.innerHTML.replace(/<[^>]*>?/gm, '');
        if (value === "") {
            e.target.previousElementSibling.innerHTML = "";
            return false;
        }
        e.target.parentElement.nextElementSibling.innerHTML += `
            <li>${value}
                <span onclick="this.parentElement.remove()" class="remove-tag">x</span>
                <input type="hidden" name="tag[]" value="${value}">
            </li>`;
        e.target.previousElementSibling.innerHTML = "";
    }
    checkTags(value) {
        let returnValue = false;
        document.querySelectorAll('.tags-list li').forEach(element => {
            let text = element.firstChild.textContent.trim();
            if (text === value) {
                returnValue = true;
            }
        });
        return returnValue;
    }
}
class ReviewManager {
    constructor() {
        this.reviewInput = document.querySelector('#post-review');
        this.reviewContainer = document.querySelector('.post-review-container');
        this.init();
    }

    init() {
        document.querySelector('.add-review-btn').addEventListener('click', () => this.addReview());
    }

    addReview() {
        if (this.reviewInput && this.reviewContainer) {
            const reviewText = this.reviewInput.value.trim();
            if (reviewText) {
                this.reviewContainer.innerHTML += `
                    <li style="list-style: none;" class="fs-16 d-flex align-items-center gap-2">
                        <span class="text-danger fe fe-x-circle fs-20" style="line-height: 27px;cursor:pointer;" onclick="this.parentElement.remove()" title="Remove Review"></span>
                        ${reviewText}
                    </li>`;
                this.reviewInput.value = "";
            }
        }
    }
}
const customControlsIndicators = document.querySelectorAll('.custom-control-indicator')
if (customControlsIndicators) {
    customControlsIndicators.forEach(element => {
        element.addEventListener('click', function () {
            if (this.parentElement.nextElementSibling.classList.contains('d-none')) {
                this.innerHTML = '-';
                this.parentElement.nextElementSibling.classList.remove('d-none');
            } else {
                this.innerHTML = '+'
                this.parentElement.nextElementSibling.classList.add('d-none');
            }
        })
    })
}
const addImages = document.querySelector('.add-img')
if (addImages) {
    addImages.addEventListener('click', (e) => {
        let domAttribute = e.target.getAttribute('data-append')
        mediaObject.setmediaType(domAttribute)
        mediaObject.init()
    })
}
const editSlug = document.querySelector('.data-slug-modifier #editSlug')
if (editSlug) {
    editSlug.addEventListener('click', function (e) {
        e.target.classList.toggle('active')
        if (e.target.classList.contains('active')) {
            e.target.classList.remove('fe-edit-2')
            e.target.classList.add('fe-check')
            e.target.style.backgroundColor = '#28a745'
            e.target.previousElementSibling.removeAttribute('disabled')
            e.target.previousElementSibling.style.border = '1px solid #eee'

        } else {
            e.target.classList.add('fe-edit-2')
            e.target.classList.remove('fe-check')
            e.target.style.backgroundColor = 'blue'
            e.target.previousElementSibling.setAttribute('disabled', 'true')
            e.target.previousElementSibling.style.border = 'none'
            updateslug(e.target.previousElementSibling);
        }
    })

    function updateslug(element) {
        let URL = base_url() + 'api/v1/pages/check-slug';
        fetch(URL, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ slug: element.value }),
        })
            .then(res => res.json())
            .then(data => {
                if (data.responseCode == 200) {
                    element.value = data.responseData.slug
                }
            })
            .catch(error => {
                console.log(error)
            })
    }

    function initializeCharacterLimit(inputSelector, countSelector, callback) {
        const inputElement = document.querySelector(inputSelector);
        const countElement = document.querySelector(countSelector);
        if (inputElement && countElement) {
            const charLimit = parseInt(inputElement.getAttribute('data-limit'), 10);
            inputElement.addEventListener('input', function (e) {
                if (e.target.value.length > charLimit) {
                    e.target.value = e.target.value.slice(0, charLimit);
                }
                countElement.textContent = e.target.value.length + '/' + charLimit;
                callback(document.querySelector(inputSelector));
            });
        }
    }
    function showMessage(message) {
        document.getElementById('toastNotice').innerHTML = message
        var myAlert = document.getElementById('liveToast'); //select id of toast
        var bsAlert = new bootstrap.Toast(myAlert); //inizialize it
        bsAlert.show();
    }
}