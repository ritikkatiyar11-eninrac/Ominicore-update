// console.log(removedbaseUrlfromMainUrl);
const slugs = [];

let activeCategory = document.getElementById("activeCategory");


let categoryPathName = document.getElementById("categoryPathName");
// activeCategory.innerHTML = `<span>${removedbaseUrlfromMainUrl[1]}</span>`;

const getObjectFunction = {
  data: {},
  setdata(data) {
    this.data = data;
  },

  postData: {},
  setPostData(data) {
    this.data = data;
  },

  updatedurl: {},

  setUpdatedurl(updatedurl) {
    this.updatedurl = updatedurl;
    // console.log(updatedurl);
  },

  dataObjectforGetUrl() {
    fetch(dataUrl)
      .then((response) => response.json())
      .then((result) => {
        this.setdata(result);
      })
      .catch((err) => {
        console.log("error", err);
      });
  },

  removeBaseUrl(url) {
    let baselocalurl =
      window.location.origin + "/omnicore" == url
        ? window.location.href.replace(url, "")
        : window.location.origin;
    let updatedBaseUrl = baselocalurl.split("/").slice(1, baselocalurl.length);
    this.setUpdatedurl(updatedBaseUrl);
  },

  findCategory() {
    let self = this;
    let baseUrl = `${window.location.origin}/omnicore/assets/js/post.json`;
    fetch(baseUrl)
      .then((response) => response.json())
      .then((result) => {
        self.setPostData(result);
        let tempUrlLastItem = this.updatedurl;

        let t = tempUrlLastItem.length;

        if (t === 2) {
          result.find((parentitem) => {
            if (parentitem.slug === tempUrlLastItem[t - 1]) {
              console.log(parentitem);
              activeCategory.innerHTML = `<span>${parentitem.name}</span>`;
            }
          });
        } else if (t === 3) {
          result.find((childitem) => {
            childitem.childCategory.find((ci) => {
              if (ci.slug === tempUrlLastItem[t - 1]) {
                activeCategory.innerHTML = `<span>${ci.name}</span>`;
                categoryPathName.innerHTML = ci.name;
              }
            });
          });
        } else if (t === 4) {
          result.find((granditem) => {
            granditem.grandCategory.find((gditem) => {
              if (gditem === tempUrlLastItem[t - 1]) {
                activeCategory.innerHTML = `<span>${ci.name}</span>`;
              }
            });
          });
        }
      })
      .catch((err) => {
        console.log("error", err);
      });
  },

  renderDatOnCategoryPage() {
    let categoryListparent = document.getElementById("categoryitemslist");
    console.log(categoryListparent);
  },
};

let url = `${window.location.origin}/omnicore`;
let dataUrl = `${window.location.origin}/omnicore/assets/js/data.json`;
getObjectFunction.dataObjectforGetUrl(dataUrl);
getObjectFunction.removeBaseUrl(url);
// getObjectFunction.findCategory();
// getObjectFunction.renderDatOnCategoryPage();
