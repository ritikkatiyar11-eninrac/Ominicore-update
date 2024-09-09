<style>
    .login-wrapper {
        height: 70vh;
    }

    .login-wrapper .login-area {
        display: flex;
        justify-content: center;
        height: 100%;
    }

    .login-wrapper .login-area .login-form .login-body {
        max-width: 500px;
        margin: auto;
        padding: 20px;
    }

    .login-wrapper .login-area .login-form .login-body .login-inputs {
        position: relative;
        margin-bottom: 20px;
    }

    .login-inputs i {
        position: absolute;
        left: 0;
        height: 40px;
        width: 40px;
        background: white;
        border-radius: 7px 0 0 7px;
        text-align: center;
        line-height: 40px;
        color: var(--bs-gray-600);
        font-size: 20px;
        border-right: 1px solid var(--bs-gray-400);
    }

    .login-wrapper .login-area .login-form .login-body .login-inputs .login-inputs-fields {
        width: 100%;
        border: none;
        border-radius: 7px;
        padding: 5px 10px 5px 45px;
        font-size: 14px;
        color: var(--bs-gray-600);
        height: 40px;
        box-shadow: 0 0 0px 1px var(--bs-gray-400);
    }

    .form-footer button {
        border: none;
        background: #0f3f6e;
        color: white;
        width: 100px;
    }

    .form-footer button:hover {
        transform: scale(0.98);
    }
</style>

<section class="login-wrapper w-100 mx-auto">
    <div class="login-area">
        <div class="login-form w-100">
            <div class="d-flex align-items-center justify-content-center h-100">
                <div class="w-100">
                    <button class="btn btn-primary" id="logoutBtn">Logout</button>
                    <form action="" class="login-data-form" id="flogin-Submission">
                        <div class="login-text py-2 mb-2">
                            <h1 class="text-center fs-25">Login</h1>
                            <p class="error text-danger fs-14 text-center"></p>
                        </div>
                        <div class="form-inputs">
                            <div class="login-body">
                                <div class="login-inputs">
                                    <input class="login-inputs-fields username" id="f-username" type="text" placeholder="Enter Your Email">
                                    <i class="icofont-email"></i>
                                </div>
                                <div class="login-inputs">
                                    <input class="login-inputs-fields password" id="f-password" type="password" placeholder="Enter Your Password">
                                    <i class="icofont-eye"></i>
                                </div>
                                <div class="form-footer py-2 d-md-flex justify-content-md-between align-items-md-center">
                                    <button type="submit" class="fs-14 fw-300 d-block  px-4 py-2 my-2 rounded">Login</button>
                                    <a href="" class="p-1">Forgot username or password</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    let floginSubmission = document.getElementById("flogin-Submission")
    let logoutBtn = document.getElementById("logoutBtn")
    floginSubmission.addEventListener('submit', function(e) {
        e.preventDefault();

        let fUsername = document.getElementById("f-username").value
        let fpassword = document.getElementById("f-password").value
        let error = document.querySelector(".error")

        if (fUsername == "" && fpassword === "") {
            document.querySelector('.error').innerHTML = "Credential is required";
            if (!error.classList.contains('text-danger')) {
                error.classList.add('text-danger')
            }
            return false;
        }

        const usersArray = [{
                username: "mahesh@gmail.com",
                password: "12345"
            },
            {
                username: "admin@gmail.com",
                password: "admin123"
            }
        ]

        for (let i = 0; i < usersArray.length; i++) {
            if (usersArray[i].username === fUsername && usersArray[i].password === fpassword) {
                postLoginRequest(fUsername, fpassword, (request) => {
                    if (request.status === 200) {
                        const redirectUrl = localStorage.getItem('redirectUrl') || 'https://omnicoreplus.com/omni/';
                        localStorage.removeItem('redirectUrl'); // Clear the stored URL
                        window.location.href = redirectUrl;
                        setCookie('token', request.token);
                        window.location.href = "http://localhost/omnicore/"
                        error.innerHTML = request.message
                        error.classList.remove('text-danger')
                        error.classList.add('text-success')
                    }
                })
                break;
            } else {
                document.querySelector('.error').innerHTML = "Invalid credentials";
                if (!error.classList.contains('text-danger')) {
                    error.classList.add('text-danger')
                }
            }
        }
    })

    function redirecToUrl() {
        localStorage.setItem("redirectUrl", window.location.href)
        window.location.href = "http://localhost/omnicore/login"
    }

    function setCookie(token, value) {
        document.cookie = token + "=" + (value || "")
    }





    // login({
    //     'username': fUsername,
    //     'password': fpassword,
    // }, function(result) {
    // if (result.success) {
    //     if (error.classList.contains('text-danger')) {
    //         error.classList.remove('text-danger')
    //     }
    //     error.classList.add('text-success')
    //     error.innerHTML = result.msg
    //     setInterval(function() {
    //         location.reload();
    //     }, 1000);
    // } else {
    //     if (error.classList.contains('text-success')) {
    //         error.classList.remove('text-success')
    //     }
    //     error.classList.add('text-danger')
    //     error.innerHTML = result.msg
    // }
    // })
</script>