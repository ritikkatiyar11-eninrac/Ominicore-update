function base_url() {
  var pathparts = location.pathname.split("/");
  if (location.host == "localhost") {
    var url = location.origin + "/" + pathparts[1].trim("/") + "/";
  } else {
    var url = location.origin + "/omni/";
  }
  return url;
}
if(document.querySelector(".side-menu")) {
  let sideMenu = document.querySelector(".side-menu");
  sideMenu.nextSibling.remove();
}
function convertToSlug(str) {
  str = str.replace(/^\s+|\s+$/g, "");
  str = str.toLowerCase();
  var from = "àáäâèéëêìíîóöôùúüûñç·/_,:;";
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
const formlogin = document.querySelector('#form-login')
if (formlogin) {
  formlogin.addEventListener('submit', function (e) {
    e.preventDefault();
    let error = document.querySelector('.error')
    let email = document.querySelector('#email').value
    let password = document.querySelector('#password').value
    if (email === "" && password === "") {
      error.innerHTML = "Credential is required";
      if (!error.classList.contains('text-danger')) {
        error.classList.add('text-danger')
      }
      return false;
    }
    let url = base_url() + `api/v1/authentication/login`;
    let data = {
      'username': email,
      'password': password
    }
    requestAPI(url, data, function (result) {
      if (result.responseCode == 200) {
        if (error.classList.contains('text-danger')) {
          error.classList.remove('text-danger')
        }
        error.classList.add('text-success')
        error.innerHTML = "Login Success redirecting...";
        setInterval(function () {
          location.reload();
        }, 1000);
      } else {
        if (error.classList.contains('text-success')) {
          error.classList.remove('text-success')
        }
        error.classList.add('text-danger')
        error.innerHTML = "Invalid email or password please try again";
      }
    })
  })
}




