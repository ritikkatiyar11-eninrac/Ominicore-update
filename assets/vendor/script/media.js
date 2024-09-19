const mediaObject = {
  ObjectData: {
    URL: base_url(),
    entryPath: "api/v1/media/",
    uploadfile: ".file-upload",
    errorMessage: ".media-error-message",
    pageOption: ".goto-page",
    currentPage: 1,
    dataOutput: ".mediaDataContainer",
    mediaUploader: ".media-uploader",
    toggleMediaBox: ".toggle-media-box",
    searchInput: ".media-search",
    gotoPage: ".goto-page",
    attachmentSelector: ".main-thumbnail img",
    appendImage: ".addClass"
  },
  mediaType: "Default",
  setmediaType: function (type) {
    this.mediaType = type
  },
  gotopage: function () {
    let self = this
    let gotoPage = document.querySelector(self.ObjectData.gotoPage)
    if (gotoPage) {
      gotoPage.addEventListener('change', function (e) {
        self.ObjectData.currentPage = e.target.value
        self.getAttachment();
      })
    }
  },
  mediaCloseBtnClick: function (e) {
    let self = this
    let mediaCloseBtn = document.querySelectorAll('.media-close-btn')
    mediaCloseBtn.forEach(item => {
      item.addEventListener('click', function (e) {
        let id = item.getAttribute('data-id');
        self.DeleteAttachment(id)
      })
    })
  },
  fileUpload: function () {
    let self = this;
    let fileUpload = document.querySelector(self.ObjectData.uploadfile)
    if (fileUpload) {
      document.querySelector('.file-upload').addEventListener('change', function (e) {
        let error = document.querySelector(self.ObjectData.errorMessage)
        let uploadedFiles = new FormData();
        uploadedFiles.append('file', e.target.files[0]);
        let URL = self.ObjectData.URL + self.ObjectData.entryPath + 'add';
        fetch(URL, {
          method: 'POST',
          body: uploadedFiles
        }).then(function (response) {
          response.json().then(function (data) {
            if (data.responseCode == 200) {
              error.style.color = 'green';
              error.style.border = '1px solid green';
            } else {
              error.style.color = 'red';
              error.style.border = '1px solid red';
            }
            error.style.padding = '10px';
            error.style.background = 'rgba(255, 255, 255, 0.6)';
            error.style.borderRadius = '5px';
            error.style.margin = '10px 0px';
            error.style.boxShadow = '0 0 10px 0 rgba(0,0,0,0.2)';
            error.innerHTML = data.responseData;
            self.getAttachment();
          })
        })
      })
    }
  },
  getAttachment: function () {
    let self = this
    let currentPage = self.ObjectData.currentPage
    let URL = self.ObjectData.URL + self.ObjectData.entryPath + 'get?page=' + currentPage;
    fetch(URL).then(function (response) {
      response.json().then(function (data) {
        if (data.responseCode == 200) {
          let dataOutput = document.querySelector(self.ObjectData.dataOutput);
          dataOutput.innerHTML = "";
          let rowDiv = document.createElement('div')
          rowDiv.setAttribute('class', 'row align-items-center')
          rowDiv.setAttribute('style', 'gap: 15px 0;')
          data.responseData.data.forEach(item => {
            let colDiv = document.createElement('div')
            colDiv.setAttribute('class', 'col-md-2')
            colDiv.innerHTML = `<div class="img-thumbnail position-relative">
                <button class="media-close-btn btn-danger" data-id="${item.ATT_ID}">x</button>
                <div class="main-thumbnail">
                    <img src="${item.ATT_BASE_PATH}${item.ATT_ENTRY_PATH}thumbnail/${item.ATT_TITLE}" alt="${item.ATT_TITLE}">
                    <input type="text" disabled="" value="${item.ATT_BASE_PATH}${item.ATT_ENTRY_PATH}${item.ATT_TITLE}">
                    <input type="hidden" class="media-title" value="${item.ATT_TITLE}">
                </div>
            </div>`
            rowDiv.appendChild(colDiv)
          });
          dataOutput.appendChild(rowDiv)
          self.CreatePageOption(data.responseData.total_pages)
          self.mediaCloseBtnClick()
          self.appendAttachmentHandler()
        }
      })
    })
  },
  CreatePageOption: function (no) {
    let self = this
    let pageOption = document.querySelector(self.ObjectData.pageOption)
    pageOption.innerHTML = ''
    for (let i = 1; i <= no; i++) {
      let option = document.createElement('option')
      option.value = i
      option.innerHTML = "Page No. " + i
      if (i == self.ObjectData.currentPage) option.setAttribute('selected', 'selected')
      pageOption.appendChild(option)
    }
  },
  DeleteAttachment: function (id) {
    let self = this
    let confirmation = confirm('Are you sure want to delete this attachment?')
    if (confirmation) {
      let error = document.querySelector(self.ObjectData.errorMessage)
      let URL = self.ObjectData.URL + self.ObjectData.entryPath + 'delete?id=' + id;
      fetch(URL).then(function (response) {
        response.json().then(function (data) {
          if (data.responseCode = 200) {
            error.style.color = 'green';
            error.style.border = '1px solid green';
          } else {
            error.style.color = 'red';
            error.style.border = '1px solid red';
          }
          error.style.padding = '10px';
          error.style.background = 'rgba(255, 255, 255, 0.6)';
          error.style.borderRadius = '5px';
          error.style.margin = '10px 0px';
          error.style.boxShadow = '0 0 10px 0 rgba(0,0,0,0.2)';
          error.innerHTML = data.responseData;
          self.getAttachment();
        })
      })
      return true;
    } else {
      return false
    }

  },
  mediaUploaderHandler: function () {
    let self = this
    let mediaUploader = document.querySelector(self.ObjectData.mediaUploader)
    let toggleMediaBox = document.querySelector(self.ObjectData.toggleMediaBox)
    if (toggleMediaBox && mediaUploader) {
      toggleMediaBox.addEventListener('click', function () {
        mediaUploader.classList.toggle('d-none');
      })
    }
  },
  mediaSearchHandler: function () {
    let self = this
    let searchInput = document.querySelector(self.ObjectData.searchInput)
    if (searchInput) {
      searchInput.addEventListener('input', function () {
        let currentPage = self.ObjectData.currentPage = 1
        let keyword = searchInput.value
        let URL = self.ObjectData.URL + self.ObjectData.entryPath + 'search?page=' + currentPage + "&keyword=" + keyword;
        fetch(URL).then(function (response) {
          response.json().then(function (data) {
            if (data.responseCode == 200) {
              let dataOutput = document.querySelector(self.ObjectData.dataOutput);
              dataOutput.innerHTML = "";
              let rowDiv = document.createElement('div')
              rowDiv.setAttribute('class', 'row align-items-center')
              rowDiv.setAttribute('style', 'gap: 15px 0;')
              data.responseData.data.forEach(item => {
                let colDiv = document.createElement('div')
                colDiv.setAttribute('class', 'col-md-2')
                colDiv.innerHTML = `<div class="img-thumbnail position-relative">
                <button class="media-close-btn btn-danger" data-id="${item.ATT_ID}">x</button>
                <div class="main-thumbnail">
                    <img src="${item.ATT_BASE_PATH}${item.ATT_ENTRY_PATH}thumbnail/${item.ATT_TITLE}" alt="${item.ATT_TITLE}">
                    <input type="text" disabled="" value="${item.ATT_BASE_PATH}${item.ATT_ENTRY_PATH}${item.ATT_TITLE}">
                    <input type="hidden" value="${item.ATT_TITLE}">
                </div>
            </div>`
                rowDiv.appendChild(colDiv)
              });
              dataOutput.appendChild(rowDiv)
              self.CreatePageOption(data.responseData.total_pages)
              self.mediaCloseBtnClick()
              self.appendAttachmentHandler()
            }
          })
        })
      })
    }
  },

  appendAttachmentHandler: function () {
    let self = this
    document.querySelectorAll(self.ObjectData.attachmentSelector).forEach(item => {
      item.addEventListener('click', function () {
        if (self.mediaType == "features images") self.fetchImage(item)
        if (self.mediaType == "editor images") self.editorImage(item)
        if (self.mediaType == "Default") self.ZoomFeature(item)
      })
    })
  },
  fetchImage: function (item) {
    let self = this
    let featuresImage = document.querySelector(self.ObjectData.appendImage)
    let imageSRC = item.getAttribute('src')
    let imputelement = item.nextElementSibling.nextElementSibling.value
    featuresImage.innerHTML = `<div class="position-relative features-image">
          <span style="position: absolute;right: 2px;height: 30px;width: 30px;text-align: center;background: red;color: white;font-size: 20px;top: 2px;font-weight: bold;cursor: pointer;">X</span>
          <img src="${imageSRC}" alt="">
          <input type="hidden" class="media-title" value="${imputelement}">
          </div>`

    document.querySelector('.addClass span').addEventListener('click', function () {
      document.querySelector('.addClass').innerHTML = ""
    })
    hideFunc('.import-img-model')
  },
  editorImage: function (item) {
    let self = this
    let imputelement = item.nextElementSibling.nextElementSibling.value
    let imgSrc = self.ObjectData.URL + "assets/om-upload/" + imputelement
    let name = imputelement.split('.');
    let HTMLstring = `<img src="${imgSrc}" alt="${name[0]}" style="width: 100%;">`;
    summernoteImage(HTMLstring)
    hideFunc('.import-img-model');
  },
  ZoomFeature: function (item) {

  },
  init: function () {
    this.getAttachment();
    this.fileUpload();
    this.mediaUploaderHandler();
    this.mediaSearchHandler();
    this.gotopage();
  }
}

function hideFunc(selected) {
  const truck_modal = document.querySelector(selected);
  const modal = bootstrap.Modal.getInstance(truck_modal);
  modal.hide();
}