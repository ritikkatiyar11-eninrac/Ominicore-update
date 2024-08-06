var imgSelectionType = "Editor images";
// Function to get the base URL
function getBaseUrl() {
  const pathParts = location.pathname.split("/");
  if (location.host === "localhost") {
    return `${location.origin}/${pathParts[1].trim("/")}/`;
  } else {
    return `${location.origin}/`;
  }
}

// Function to confirm media deletion and display information
function confirmMediaDeletion(x) {
  let error = document.querySelector('.media-error');
  const confirmation = confirm('Are you sure you want to delete this file?');
  if (confirmation) {
    let id = x.tagName === "I" ? x.parentElement.getAttribute('data-target') : x.getAttribute('data-target');
    fetch(`${getBaseUrl()}console-admin/media/delete?attachment=` + id, {
      method: "get",
    })
      .then((res) => res.json())
      .then((result) => {
        if (result.responseStatus) {
          getAttachment(1);
        } else {
          if (!error.classList.contains('mb-4')) {
            error.classList.add('mb-4')
          }
          error.innerHTML = result.responseData;
        }
      })
  } else {
    return false;
  }
}

// function to manage media on post blog pages
function fileManagerHandler(x) {
  if (imgSelectionType == "features images") {
    document.querySelector('.add-media').innerHTML = `<div class="img-ifream-section" style="width: 100px;height: 100px;margin: 10px 0;">
      <span class="btn btn-danger btn-sm rmv" style="position: absolute;cursor: pointer;">X</span>
      <input type="hidden" class="postimage" name="image" value="${x.getAttribute('data-post')}">
      <img src="${x.src}" style="width: 100px;height: 100px;border: 1px solid #eee;">
  </div>`
  }
  if (imgSelectionType == "editorUpload") {
    let filename = x.src.split('/');
    let HTMLstring = "<img src='/t3upload/" + filename[filename.length - 1] + "' alt='" + x.alt + "' style='width: 100%;'>";
    summernoteImage(HTMLstring)
  }

  if (document.querySelectorAll('.rmv') != undefined || document.querySelectorAll('.rmv') != null) {
    let remove = document.querySelectorAll('.rmv')
    remove.forEach((item) => {
      item.addEventListener('click', (e) => e.target.parentElement.remove());
    })
  }

  let importModel = document.querySelector('.import-img-model');
  let close = bootstrap.Modal.getInstance(importModel)
  close.hide();
}

// Function to render a media item with HTML
function renderMediaItem(item) {
  const mediaPage = document.querySelector(".masonry.media-page");
  const div = document.createElement("div");
  div.classList.add("col-xl-3", "col-lg-3", "col-sm-6");
  div.innerHTML = `<div class="brick">
      <img src="${getBaseUrl()}${item.post_excerpt}thumbnail/${item.post_title}" alt="${item.post_meta_title}" data-post="${item.ID}">
      <input type="text" class="form-control disable" value="${item.post_slug}${item.post_meta_excerpt}">
      <button type="button" data-target="${item.ID}" class="btn btn-danger btn-sm med-close">
        <i class="side-menu__icon fe fe-x"></i>
      </button>
    </div>`;
  mediaPage.appendChild(div);
}

// Event listener for the mediaToggle button
const mediaToggle = document.querySelector(".media-toggle");
if (mediaToggle) {
  mediaToggle.addEventListener("click", (e) => {
    const fileUploader = document.getElementById("fileuploader");
    fileUploader.classList.toggle("d-none");
  });
}

// Event listener for the mediaUpload input element
const mediaUpload = document.querySelector("#file");
if (mediaUpload) {
  mediaUpload.addEventListener("change", (e) => {
    let error = document.querySelector('.media-error');
    error.innerHTML = "";
    const formData = new FormData();
    formData.append("file", e.target.files[0]);
    fetch(`${getBaseUrl()}console-admin/media/insert`, {
      method: "POST",
      body: formData,
    })
      .then((res) => res.json())
      .then((result) => {
        if (result.responseCode === 200) {
          getAttachment(1)
        } else {
          if (!error.classList.contains('mb-4')) {
            error.classList.add('mb-4');
          }
          error.innerHTML = result.responseData;
        }
      });
  });
}

// Function to fetch media attachments and display them on the page
function getAttachment(pages) {
  const mediaPage = document.querySelector('.mediaPages');
  const pagination = document.querySelector('.paginnation-value');
  fetch(`${getBaseUrl()}console-admin/media/get?attachment=all&p=${pages}`, {
    method: "get",
  })
    .then((res) => res.json())
    .then((result) => {
      if (result.responseCode === 200) {
        document.querySelector(".masonry.media-page").innerHTML = "";
        result.responseData.data.forEach(element => {
          renderMediaItem(element);
        });
        mediaPage.innerHTML = "";
        for (let i = 1; i <= result.responseData.total_pages; i++) {
          const option = document.createElement("option");
          option.value = i;
          option.textContent = i;
          if (result.responseData.current_page === i) {
            option.selected = true;
          }
          mediaPage.appendChild(option);
        }

        mediaPage.addEventListener('change', (e) => getAttachment(e.target.value));
        pagination.textContent = result.responseData.current_page_results;

        const closeButtonList = document.querySelectorAll('.med-close');
        closeButtonList.forEach(element => {
          element.addEventListener('click', (e) => confirmMediaDeletion(e.target));
        });

        const imgList = document.querySelectorAll('.brick img');
        imgList.forEach(element => {
          element.addEventListener('click', (e) => fileManagerHandler(e.target));
        });
      } else {
        // Handle error case
        document.querySelector('.media-page').innerHTML = result.responseMessage
      }
    });
}
