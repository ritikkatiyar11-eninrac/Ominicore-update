let baseurl_ = "http://localhost/omnicore/";
const topArticleObject = {
  toparticleData: {},

  setTopArticleData(toparticleData) {
    this.toparticleData = toparticleData;
  },
  fetchData() {
    let self = this;
    fetch(`${window.location.origin}/omnicore/assets/js/post.json`)
      .then((response) => response.json())
      .then((result) => {
        self.setTopArticleData(result);
        self.getTopArticle(result);
        self.getShortData(result);
      });
  },

  getTopArticle(data) {
    let self = this;
    let topArticleArr = [];
    let toparticlecontent = document.getElementById("toparticlecontent");
    let toparticleid = document.getElementById("toparticleid");

    let recent = data.filter((item) => item.topArticle === true);
    topArticleArr = recent;

    topArticleArr.forEach((item, idx) => {
      let div = document.createElement("div");
      let addClass = idx == 0 ? "card-placeholder-img-01" : "card-half";
      div.className = `trending-card top-article_card imghover ${addClass}`;
      div.innerHTML = `<div>
                        <img src="${baseurl_}${item.imageUrl}" alt="" style="border-radius:10px">
                        <div class="trending-card-content">
                            <div class="card-meta"> <span>${
                              item.category.child.name
                            } </span><span>/ ${item.category.grandChild.name}</span></div>
                            <a href="${baseurl_}/category/${item.category.parent.slug}/${item.category.child.slug}/${item.category.grandChild.slug}/${item.id}">
                            <h3 class="trending-card-title" style="font-size:16px; font-weight:600; margin-top:0; margin-bottom:10px;">${
                              item.title
                            }</h3>
                            </a>
                            <p class="fs-14">${item.description.slice(
                              0,
                              60
                            )}... <span style="color:blue">Read more</span></p>
                        </div>
                    </div>`;
      toparticleid.appendChild(div);
    });
    toparticlecontent.appendChild(toparticleid);
  },

  getShortData(data) {
    let self = this;
    let shortData = [];
    let centralmainContent = document.getElementById("centralmainContent");
    let centralcontent = document.getElementById("centralcontent");
    let recent = data.filter((item) => item.topArticle === true);
    shortData = recent;
  },
};

document.addEventListener("DOMContentLoaded", () => {
  topArticleObject.fetchData();
});

topArticleObject.getTopArticle();
