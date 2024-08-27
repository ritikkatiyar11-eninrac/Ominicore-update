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
      div.className = "col-lg-4 col-md-6 col-sm-6 mb-3";
      div.innerHTML = `<div class="w-100 mb-2 position-relative">
                            <a href="" class="cursor-pointer" style="color:inherit;text-decoration: inherit;">
                                <div class="overflow-hidden rounded" style="background-image:${item.gradient}">
                                    <img src="${baseurl_ + item.imageUrl}" height="156" loading="lazy" class="w-100"  alt="${item.category.child.name}">
                                </div>
                            </a>
                      </div>
                      <div class="fs-12 lh-sm mb-1">
                        <a id="categoryPathName">${item.category.child.name}</a>
                        <span>//</span>
                        <span class="text-capitalize">${item.category.grandChild.name}</span>
                      </div>
                      <a target="_blank" href="http://localhost/omnicore/detailspage/newsdetailspage" class="cursor-pointer d-block pb-2">
                            <h4 class="fs-16 text-justify fw-bold text-dark">
                              ${item.name}
                            </h4>
                      </a>
                      <div class="w-100 pb-2">
                            <p class="fs-14 w-100 text-justify card-description" style="line-height:13px;" >
                            <small>
                            ${item.description.length > 110
          ? item.description.substr(0, 98)
          : item.description
        }... <a href="#" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Readmore</a></small></p>
                        </div>
                        <a href="" class="mb-3 authorname fs-14 fw-600">${item.author}</a>
                       
                   
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
