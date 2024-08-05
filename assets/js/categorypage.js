const slugs = [];
let baseurl_ = "http://192.168.1.156/omnicore/";

const getObjectFunction = {
  postData: {},
  setPostData(data) {
    this.postData = data;
  },

  dataObjectforGetUrl() {
    fetch(dataUrl)
      .then((response) => response.json())
      .then((result) => {
        getObjectFunction.setPostData(result);
        getObjectFunction.renderDataOnCategoryPage(result);
      })
      .catch((err) => {
        console.log("error", err);
      });
  },

  renderDataOnCategoryPage(postDataList) {
    let categoryContainer = document.getElementById("categoryitemslist");
    categoryContainer.innerHTML = "";

    postDataList.forEach((item) => {
      let div = document.createElement("div");
      div.innerHTML = `
        <div class="category-card-item position-relative" style="margin-bottom:3rem; width:100%;">
                        <div class="w-100 " style="margin-bottom: .75rem;">
                            <a href="" class="cursor-pointer" style="color:inherit;text-decoration: inherit;">
                                <div class="overflow-hidden" style="border-radius:10px">
                                    <img src="${
                                      baseurl_ + item.imageUrl
                                    }" width="208" height="156" loading="lazy" class="" style="color:transparent; height:auto;width:100%;transition-timing-function: cubic-bezier(0,0,.2,1);transition-duration: 1s; border-radius:10px;transition-property: transform;" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="mb-1">
                            <div class="fs-14" style=" letter-spacing: .015em; line-height:1.1;">
                                <span class="mr-1">
                                    <a id="categoryPathName">${
                                      item.category.child.name
                                    }</a>
                                </span>
                                <span class="mr-1 -mb-1" style="width:.5rem; display:inline-block;">//</span>
                                <span class="text-capitalize">${
                                  item.category.grandChild.name
                                }</span>
                            </div>
                        </div>
                        <a target="_blank" href="http://192.168.29.156/omnicore/detailspage/newsdetailspage" class="cursor-pointer d-block mb-md-1">
                            <h4 class="fs-16 card-title" style="letter-spacing: .015em; font-weight:inherit; line-height: 1.1;">
                              ${item.title}
                            </h4>
                        </a>
                        <div class="w-100 mb-1">
                            <p class="fs-14 w-100" style="line-height: 1.3;"></p>
                        </div>
                        <div class="sm-mb" style="line-height: 1;">
                            <span class="fs-14 text-nowrap">
                                ${item.author}
                            </span>
                        </div>
                    </div>
      `;
      categoryContainer.appendChild(div);
    });

    categoryParentDiv.appendChild(categoryContainer);
  },
};

let url = window.location.href;
let dataUrl = `${window.location.origin}/omnicore/assets/js/post.json`;
getObjectFunction.dataObjectforGetUrl();

// getObjectFunction.renderDataOnCategoryPage();
