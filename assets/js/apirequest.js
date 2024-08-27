function getApiRequest() {
  return fetch("https://jsonplaceholder.typicode.com/todos")
    .then((response) => response.json())
    .then((data) => console.log(data))
    .catch((error) => console.error("Error:", error));
}

function postApiRequest() {
  let token = "token";
  let data = {
    title: "foo",
    body: "bar",
    userId: 1,
  };
  let options = {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
      Authorization: token,
    },
    body: JSON.stringify(data),
  };
  fetch("https://jsonplaceholder.typicode.com/posts", options)
    .then((response) => response.json())
    .then((data) => console.log(data))
    .catch((error) => console.error("Error:", error));
}

function putApiRequest() {
  let token = "your_token_here";
  let data = {
    title: "updated foo",
    body: "updated bar",
    userId: 1,
  };
  let options = {
    method: "PUT",
    headers: {
      "Content-Type": "application/json",
      Authorization: token,
    },
    body: JSON.stringify(data),
  };
  fetch("https://jsonplaceholder.typicode.com/posts/1", options)
    .then((response) => response.json())
    .then((data) => console.log(data))
    .catch((error) => console.error("Error:", error));
}

function deleteApiRequest() {
  let token = "token";
  let options = {
    method: "DELETE",
    headers: {
      "Content-Type": "application/json",
      Authorization: token,
    },
  };
  fetch("https://jsonplaceholder.typicode.com/posts/1", options)
    .then((response) => response.json())
    .then((data) => console.log(data))
    .catch((error) => console.error("Error:", error));
}

// Post request for login user with username and password
function postLoginRequest(username, password, callback) {
  let data = {
    username: username,
    password: password,
  };
  let options = {
    method: "POST",
    headers: {
      "Content-Type":
        "application/json",
    },
    body: JSON.stringify(data),
  };
  fetch("https://omnicoreplus.com/omni/api/v1/authentication/login", options)
    .then((response) => response.json())
    .then((data) => callback(data))
    .catch((error) => console.error("Error:", error));
}

