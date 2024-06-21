function base_url() {
    var currentUrl = window.location.href;
    var url = new URL(currentUrl);
    if (url.hostname === "localhost" || url.hostname === "127.0.0.1") {
        let segment = url.pathname.split('/');
        return url.protocol + "//" + url.host + '/' + segment[1] + '/';
    } else {
        return url.protocol + "//" + url.hostname + '/';
    }
}

if(document.querySelectorAll('[data-bs-toggle="tooltip"]') != undefined || document.querySelectorAll('[data-bs-toggle="tooltip"]') != null){
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    })
}

const showNavbar = (toggleId, wrapper) => {
    let nevToggle = document.querySelector(toggleId)
    let wrapperNev = document.querySelector(wrapper)
    nevToggle.addEventListener('click', () => {
        // show navbar
        wrapperNev.classList.toggle('desk-v-width')
        wrapperNev.classList.toggle('mobi-v-width')
        // change icon
        nevToggle.classList.toggle('icon-burger-icon')
        nevToggle.classList.toggle('icofont-close-line')
    })
}

const activateDropDown = (element) => {
    let dropDownAction = document.querySelectorAll(element);
    dropDownAction.forEach((item, key) => {
        item.addEventListener('click', (e) => {
            item.parentElement.classList.toggle('active')
            item.lastElementChild.classList.toggle('icofont-rounded-up')
            item.lastElementChild.classList.toggle('icofont-rounded-down')
            dropDownAction.forEach((i, k) => {
                if (key != k) {
                    i.parentElement.classList.remove('active')
                    if (i.lastElementChild.classList.contains('icofont-rounded-down')) {
                        i.lastElementChild.classList.toggle('icofont-rounded-up')
                        i.lastElementChild.classList.toggle('icofont-rounded-down')
                    }
                }
            })
        })
    })
    let currentUrl = window.location.href;
    let links = document.querySelectorAll('.sidebar-area-container-wrapper a');
    links.forEach((link, key) => {
        if (link.href == currentUrl) {
            if (link.parentElement.parentElement.classList.contains('sidebar-area-container')) {
                link.parentElement.classList.add('active');
            } else {
                link.classList.add('active');
                link.parentElement.parentElement.parentElement.classList.add('active')
            }
        }
    })
}
const sideBarScroll = (element) => {
    let container = document.querySelector(element);
    let ps = new PerfectScrollbar(container, {
        wheelSpeed: 2,
        wheelPropagation: true,
        minScrollbarLength: 100,
        scrollTop: 0,
    });
    container.addEventListener('mouseenter', () => {
        document.querySelector('body').style.overflow = "hidden"
        document.querySelector('.mobi-v-width').classList.add('resize-auto')
    })

    container.addEventListener('mouseleave', () => {
        document.querySelector('body').style.overflow = "auto"
        document.querySelector('.mobi-v-width').classList.remove('resize-auto')
    })
}



function observatoryShowAndHide(element) {
    if (document.querySelectorAll(element) != null || document.querySelectorAll(element) != undefined) {
        let observatoryBtn = document.querySelectorAll(element);
        observatoryBtn.forEach((item) => {
            item.addEventListener('click', () => {
                item.classList.toggle('icofont-plus')
                item.classList.toggle('icofont-minus')
                item.parentElement.nextElementSibling.firstElementChild.classList.toggle('blur')
                item.parentElement.nextElementSibling.lastElementChild.classList.toggle('d-none')
            })
        })
    }
}
document.addEventListener("DOMContentLoaded", function (event) {
    showNavbar('#header-toggle', '.wrapper-container')
    activateDropDown('.dropdown-action')
    sideBarScroll('.sidebar-area-container-wrapper')
    observatoryShowAndHide('.observatory-btn')
    updateSection('.notification_img', '.update-title-wrapper li', '.content-text-update')
});
function updateSection(notification, update, content_text_update) {
    if (document.querySelector(notification) != null || document.querySelector(notification) != undefined) {
        let notification_img = document.querySelector(notification)
        let list = document.querySelectorAll(update)
        let listContent = document.querySelectorAll(content_text_update)
        list.forEach((item, key) => {
            item.addEventListener('click', () => {
                if (item.classList.contains('text-darklight-400')) {
                    item.classList.toggle('text-darklight-400');
                    listContent[key].classList.toggle('d-none')
                    list.forEach((i, k) => {
                        if (key != k) {
                            i.classList.toggle('text-darklight-400');
                            listContent[k].classList.toggle('d-none')
                        }
                    })
                }
            })
        })
        notification_img.addEventListener('click', () => {
            notification_img.classList.toggle('arrowActive')
            document.querySelector('.update-wrapper').classList.toggle('d-none')
            if (notification_img.classList.contains('arrowActive')) {
                document.querySelector('body').style.overflow = "hidden"
            } else {
                document.querySelector('body').style.overflow = "auto"
            }
        })
    }
}