let baseurlforSingleItem = "http://192.168.1.156/omnicore/";

const singleItemObject = {
  singlePostData: {},

  setSingPostData(singlePostData) {
    this.singlePostData = singlePostData;
  },

  fetchData(dataUrl) {
    let self = this;
    fetch(dataUrl)
      .then((res) => res.json())
      .then((result) => {
        singleItemObject.setSingPostData(result);
        
      });
  },

  getSingleitem(id) {
    let self = this;
    console.log(self.singlePostData);
    
    let postitem = self.singlePostData.find((item) => item.id === id);
    console.log(postitem)
  },
};

document.addEventListener("DOMContentLoaded", () => {
  singleItemObject.fetchData(baseurlforSingleItem + `assets/js/post.json`);
  singleItemObject.getSingleitem(12)
});
