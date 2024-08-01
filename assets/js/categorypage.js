// console.log(removedbaseUrlfromMainUrl);
const slugs = [];

let activeCategory = document.getElementById("activeCategory");
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
    console.log(updatedurl);
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
    fetch("http://192.168.29.156/omnicore/assets/js/post.json")
      .then((response) => response.json())
      .then((result) => {
        this.setPostData(result);
        let tempUrlLastItem = this.updatedurl;

        let t = tempUrlLastItem.length;
        console.log(t);

        if (t === 2) {
          result.find((parentitem) => {
            if (parentitem.slug === tempUrlLastItem[t - 1]) {
              console.log(parentitem);
            }
          });
        } else if (t === 3) {
          result.find((childitem) => {
            childitem.childCategory.find((ci) => {
              if (ci === tempUrlLastItem[t - 1]) {
                console.log(ci);
              }
            });
          });
        } else if (t === 4) {
          result.find((granditem) => {
            granditem.grandCategory.find((gditem) => {
              if (gditem === tempUrlLastItem[t - 1]) {
                console.log(gditem);
              }
            });
          });
        }
      })
      .catch((err) => {
        console.log("error", err);
      });
  },
};

let url = "http://192.168.29.156/omnicore";
let dataUrl = "http://192.168.29.156/omnicore/assets/js/data.json";
getObjectFunction.dataObjectforGetUrl(dataUrl);
getObjectFunction.removeBaseUrl(url);
getObjectFunction.findCategory();
