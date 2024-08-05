let baseurl_ = "http://192.168.1.156/omnicore/";
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
      });
  },

  getTopArticle(data) {
    let self = this;
    let topArticleArr = [];

    let recent = data.filter((item) => item.topArticle === true);
    topArticleArr = recent;

    let topArticleContainer = document.getElementById("toparticleid");
    let toparticleitem = document.getElementById("toparticleitem");

    topArticleContainer.innerHTML = ``;
    
    topArticleArr.map((item) => {
      toparticleitem.innerHTML = `<div class="content-section" >
                <div class="content-col">
                    <div class="trending-card card-placeholder-img-01 imghover" style="grid-area: trendingfull-card;">
                        <img src="${
                          baseurl_ + item.imageUrl
                        }" alt="" style="border-radius:10px">
                        <div class="trending-card-content">
                            <div class="card-meta"> <span style="color: #0f3f6e; font-weight:600; opacity:1;">${
                              item.category.child.name
                            } </span>// ${item.category.grandChild.name}</div>
                            <h3 class="trending-card-title" style="font-size:18px;line-height:28px; font-weight:600; margin-top:0; margin-bottom:0;">The Verge Struck by Second POW Attack in as Many Months</h3>
                            <p class="fs-14">${
                              item.description
                            } <span style="color:blue">Read more</span></p>
                        </div>
                    </div>

                    <div class="trending-card card-half placeholder-image-03 w-inline-block" style="grid-area: trendinghalf-1;">
                        <div class="">
                            <img src="${
                              baseurl_ + item.imageUrl
                            }" alt="" style="border-radius:10px">
                        </div>
                        <div class="trending-card-content">
                            <div class="card-meta"> <span style="color: #0f3f6e; font-weight:600; opacity:1;">${
                              item.category.child.name
                            } </span>// ${item.category.grandChild.name}</div>
                            <h3 class="child-card-title" style="font-size:16px;line-height:20px; font-weight:600; margin-top:0; margin-bottom:0;">${
                              item.title
                            }</h3>
                            <p class="fs-14">${item.description}</p>
                        </div>
                    </div>
                    <div class="trending-card card-half placeholder-image-03 w-inline-block" style="grid-area: trendinghalf-2;">
                        <div class="">
                            <img src="${
                              baseurl_ + item.imageUrl
                            }" alt="" style="border-radius:10px">
                        </div>
                        <div class="trending-card-content">
                            <div class="card-meta"> <span style="color: #0f3f6e; font-weight:600; opacity:1;">${
                              item.category.child.name
                            } </span>// ${item.category.grandChild.name}</div>
                            <h3 class="child-card-title" style="font-size:16px;line-height:20px; font-weight:600; margin-top:0; margin-bottom:0;">Bitcoin Use Case: Limiting Government Growth</h3>
                        </div>
                    </div>


                </div>
                <div class="side-col">
                    <div class="placeholder-image-04" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                        <div class="tag-breaking"><span>Breaking</span></div>
                        <div class="">
                            <div class="card-meta mb-2">
                                2h ago
                            </div>
                            <div class="card-title" style="line-height: 20px;">U.S. Government Shutdown Hits Record Length With No End Seen</div>
                        </div>
                    </div>
                    <div class="placeholder-image-05 d-flex flex-column align-items-start">
                        <div class="thumbnailwrapper mb-2">
                            <i class="icofont-light-bulb"></i>
                        </div>
                        <div>
                            <div class="card-meta">
                                INSIGHTS
                            </div>
                            <p class="card-title fw-400" style="line-height: 20px;">McAfee Predicts Bull Run as Crypto Markets Dip</p>
                        </div>
                    </div>
                </div>
            </div>`;
    });
    topArticleContainer.appendChild(toparticleitem);
  },
};

document.addEventListener("DOMContentLoaded", () => {
  topArticleObject.fetchData();
});

topArticleObject.getTopArticle();
