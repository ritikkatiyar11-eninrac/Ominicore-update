const slugs = [];

let baseurl_ = "http://localhost/omnicore/";


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
        // getObjectFunction.addgradientToData(result);
      })
      .catch((err) => {
        console.log("error", err);
      });
  },

  renderDataOnCategoryPage(postDataList) {
    let parentCategoryDiv = document.getElementById("categoryParentDivTag");
    let categoryContainer = document.getElementById("categoryitemslist");
    categoryContainer.innerHTML = "";

    postDataList.forEach((item, idx) => {
      let div = document.createElement("div");
      div.className = "col-lg-4 col-md-6 col-sm-6";
      div.innerHTML = `
                      <div class="w-100 mb-3 carditem category-card-item position-relative">
                            <a href="" class="cursor-pointer" style="color:inherit;text-decoration: inherit;">
                                <div class="overflow-hidden rounded" style="background-image:${
                                  item.gradient
                                }">
                                    <img src="${
                                      baseurl_ + item.imageUrl
                                    }" width="208" height="156" loading="lazy" class=""  alt="">
                                </div>
                            </a>
                      </div>
                      <div class="mb-1">
                            <div style="font-size:13px;letter-spacing: .015em; line-height:1.1;">
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
                        <a target="_blank" href="http://localhost/omnicore/detailspage/newsdetailspage" class="cursor-pointer d-block mb-md-1">
                            <h4 class="fs-16 card-title" style="">
                              ${item.title}
                            </h4>
                        </a>
                        <div class="w-100 my-2">
                            <p class="fs-14 w-100 text-justify card-description" >${
                              item.description.length > 110
                                ? item.description.substr(0, 98)
                                : item.description
                            }... <span class="text-primary">Readmore</span></p>
                        </div>
                        <div class="sm-mb">
                            <a href="" class=" authorname fs-14 fw-600">
                                ${item.author}
                            </a>
                        </div>
                   
      `;
      categoryContainer.appendChild(div);
    });
    parentCategoryDiv.appendChild(categoryContainer);
  },

  // addgradientToData(data) {
  //   let gr_idx = 0;
  //   let newGArr = [];
  //   let temp;
  //   for (let i = 0; i < data.length; i++) {
  //     temp = gradients[gr_idx].linearGradient;
  //     data[i].gradient = temp;
  //     newGArr.push(data[i]);
  //     if (gr_idx == gradients.length) {
  //       gr_idx = -1;
  //     }
  //     gr_idx++;
  //   }
  //   console.log(newGArr);
  // },
};

let url = window.location.href;
let dataUrl = `${baseurl_}/assets/js/post.json`;
getObjectFunction.dataObjectforGetUrl();
