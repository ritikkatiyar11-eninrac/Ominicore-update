let newBaseurl = "http://localhost/omnicore/";
const menusectionObject = {
  postData: {},
  setPostData(postData) {
    this.postData = postData;
  },

  fetchData() {
    let self = this;
    fetch(newBaseurl + "assets/js/omnicore-category-final.json")
      .then((response) => response.json())
      .then((result) => {
        menusectionObject.setPostData(result);
        menusectionObject.renderCategories(result);
        menusectionObject.setActiveCategoryFromUrl(result)
      });
  },

  renderCategories(CategoryData) {
    let self = this;
    const parentCategory = document.getElementById("parent-category");

    parentCategory.innerHTML = "";

    CategoryData.forEach((item, index) => {
      if (item.IS_PARENT == 1 && item.GROUP_OF == 0) {
        let li = document.createElement("li");
        li.className = "bn-filter-item";
        let a = document.createElement("a");
        a.className = "a";
        a.href = `${window.location.origin}/omnicore/category/${item.URL_SLUG}`;

        let btn = document.createElement("button");
        btn.className = "bn-filter bn-filter-top";
        btn.dataset.slug = item.SLUG;
        btn.dataset.title = item.NAME;
        btn.textContent = item.NAME;

        a.appendChild(btn);
        li.appendChild(a);
        parentCategory.appendChild(li);
      }
    });
    
self.setActive( l,index)
    
  },

  // showSubCategories(category, parentIndex) {

  //   let self = this;
  //   const subCategory = document.getElementById("sub-category");
  //   const grandCategory = document.getElementById("grand-category");

  //   subCategory.innerHTML = "";
  //   grandCategory.innerHTML = "";
  //   category.children.forEach((sub, subIndex) => {
  //     const li = document.createElement("li");
  //     li.className = "bn-subfilter-item";
  //     li.style = "transform: scale(1); opacity: 1;";
  //     let a = document.createElement("a");
  //     a.className = "";
  //     a.href = `${window.location.origin}/omnicore/category/${category.slug}/${sub.slug}`;
  //     let btn = document.createElement("button");
  //     btn.className = "bn-subfilter child";
  //     btn.dataset.slug = sub.slug;
  //     btn.dataset.title = sub.name;
  //     btn.dataset.parentIndex = parentIndex;
  //     btn.dataset.subIndex = subIndex;
  //     btn.textContent = sub.name;

  //     a.appendChild(btn);
  //     li.appendChild(a);
  //     subCategory.appendChild(li);
  //   });
  //   self.setActive("parent-category", parentIndex);
  // },

  // showGrandCategories(subCategory, ct, pt, cat) {
  //   let self = this;

  //   const grandCategory = document.getElementById("grand-category");

  //   grandCategory.innerHTML = "";
  //   if (subCategory.children) {
  //     subCategory.children.forEach((grand, grandIndex) => {
  //       const li = document.createElement("li");
  //       li.className = "bn-subfilter-item";
  //       li.style = "transform: scale(1); opacity: 1;";
  //       let a = document.createElement("a");
  //       a.className = "";
  //       a.href = `${window.location.origin}/omnicore/category/${cat.slug}/${subCategory.slug}/${grand.slug}`;
  //       let btn = document.createElement("button");
  //       btn.className = "bn-subfilter";
  //       btn.dataset.slug = grand.slug;
  //       btn.dataset.title = grand.name;
  //       btn.textContent = grand.name;
  //       a.appendChild(btn);
  //       li.appendChild(a);
  //       grandCategory.appendChild(li);
  //     });
  //     self.setActive("sub-category", ct);
  //     self.setActive("parent-category", pt);
  //   }
  // },

  setActive(listId, index) {
    console.log(listId, index)
    const activeItems = document.getElementById(listId).children;

    for (let i = 0; i < activeItems.length; i++) {
      activeItems[i].firstChild.firstChild.classList.remove(
        "bn-subfilter--active"
      );
    }
    activeItems[index].firstChild.firstChild.classList.add(
      "bn-subfilter--active"
    );
  },
  clearSubCategories() {
    const subCategory = document.getElementById("sub-category");
    const grandCategory = document.getElementById("grand-category");
    subCategory.innerHTML = "";
    grandCategory.innerHTML = "";
  },

  setActiveCategoryFromUrl(data) {
    let self = this;
    const urlPath = window.location.pathname.split("/").slice(3);
    // console.log(urlPath[urlPath.length - 1 ])
    let tempUrl = urlPath[urlPath.length - 1]
   
    let tempVal = data.find(item => item.SLUG==tempUrl)

    // console.log(tempVal);

    
  
  },
};

menusectionObject.fetchData();

document.addEventListener("DOMContentLoaded", (e) => {
  e.preventDefault();
  menusectionObject.setActiveCategoryFromUrl();
  // menusectionObject.renderCategories();
});
