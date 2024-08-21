let dataUrl = `${window.location.origin}/omnicore/assets/js/post.json`;

const storedData = {
  data: {},
  setdata(data) {
    this.data = data;
  },
  fetchData(dataUrl) {
    fetch(dataUrl)
      .then((res) => res.json())
      .then((result) => {
        storedData.setdata(result);
      })
      .catch((err) => {
        console.log("err", err);
      });
  },
  functionToCallDataBySlug() {
    document.querySelectorAll(".menu-ticker").forEach((item) => {
      item.addEventListener("click", function (e) {
        let itemId = item.getAttribute("id");
        console.log(itemId);
        let activeStyle = document.getElementsByClassName("--active");
        activeStyle[0].className = activeStyle[0].className.replace(
          "--active",
          ""
        );
        this.className += " --active";
        const filteredData = storedData.data.find(
          (ite) => ite.category.parent.slug === itemId
        );
        console.log("filterData", filteredData);
      });
    });
  },

  

  cardTitleChar() {
    let title = document.querySelectorAll(".card-title");
    title.forEach((item) => {
      item.textContent += "...";
    });
  },

  renderparentDataOnHomePage(){
    let self = this;
    let centralData = [];
     self.data.find(item => {
       if(item.category.parent.slug === ''){
         centralData.push(item);
       }
     })
  },

  totalRecentUpdates() {
    let c = document.querySelectorAll(".ticker-up");
    let totalUpdates = document.getElementById("totalUpdates");
    let total = 0;
    c.forEach((item) => {
      let temp = Number(item.children[0].innerHTML);
      total = total + temp;
      // console.log(item.children)
    });

    totalUpdates.innerHTML = total;

    return totalUpdates;
  },
};
storedData.fetchData(dataUrl);
storedData.functionToCallDataBySlug();
storedData.cardTitleChar();
storedData.totalRecentUpdates();
