function base_url() {
  var pathparts = location.pathname.split("/");
  if (location.host == "localhost") {
    var url = location.origin + "/" + pathparts[1].trim("/") + "/";
  } else {
    var url = location.origin + "/";
  }
  return url;
}
if (
  document.querySelector(".side-menu") != null ||
  document.querySelector(".side-menu") != undefined
) {
  let side = document.querySelector(".side-menu");
  side.nextSibling.remove();
}
function convertToSlug(str) {
  str = str.replace(/^\s+|\s+$/g, "");
  str = str.toLowerCase();
  var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
  var to = "aaaaeeeeiiiioooouuuunc------";
  for (var i = 0, l = from.length; i < l; i++) {
    str = str.replace(new RegExp(from.charAt(i), "g"), to.charAt(i));
  }
  str = str
    .replace(/[^a-z0-9 -]/g, "")
    .replace(/\s+/g, "-")
    .replace(/-+/g, "-");
  return str;
}
function login(data, callback) {
  let url =
    base_url() +
    "console-admin/login/loginattempt?username=" +
    data.username +
    "&password=" +
    data.password;
  fetch(url)
    .then((response) => response.json())
    .then((result) => {
      callback(result);
    })
    .catch((err) => console.error(err));
}

function requestAPI(url, data, callback) {
  fetch(url, {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify(data)
  })
    .then(response => response.json())
    .then(responseData => callback(responseData))
    .catch(error => console.error('Error:', error))
}




