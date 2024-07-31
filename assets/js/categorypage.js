function removeBaseUrl(url) {
  let baselocalurl =
    window.location.origin + "/omnicore" == url
      ? window.location.href.replace(url, "")
      : window.location.origin;
  let updatedBaseUrl = baselocalurl.split("/").slice(1, baselocalurl.length);
  return updatedBaseUrl;
}

let url = "http://192.168.29.156/omnicore";
const removedbaseUrlfromMainUrl = removeBaseUrl(url);

console.log(removedbaseUrlfromMainUrl);

let activeCategory = document.getElementById("activeCategory");

activeCategory.innerHTML = `<span>${removedbaseUrlfromMainUrl[1]}</span>`;

let dataUrl = "http://localhost/omnicore/assets/js/data.json";

const getObjectFunction = {
  dataObjectforGetUrl() {
    fetch(dataUrl)
      .then((response) => response.json())
      .then((data) => {
        console.log("data", data);
      })
      .catch((err) => {
        console.log("error", err);
      });
  },
};
