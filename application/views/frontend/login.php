<?php require(APPPATH . 'views/frontend/header.php'); ?>

<style>
    .login-wrapper {
        /* height: 70vh; */
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

<section class="login-wrapper w-100 my-5">
    <div class="login-area">
        <div class="login-form w-100" style="max-width: 500px;padding: 15px;box-shadow: 0 0 11px -3px var(--primary-100);border-radius: 10px;">
            <div class="d-flex align-items-center justify-content-center h-100">
                <div class="w-100">
                    <form action="" class="login-data-form py-5" id="flogin-Submission" style="width: 400px;display: block;margin: auto;">
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
                                <input type="hidden" name="URL" value="<?= $this->input->get('q') ?>">
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
    function redirectToLogin() {
        localStorage.setItem('redirectUrl', window.location.href);
        window.location.href = base_url() + 'login';
    }

    function setCookie(token, value) {
        document.cookie = token + "=" + (value || "")
    }

    function getCookie(name) {
        const nameEQ = name + "=";
        const ca = document.cookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) === ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    function deleteCookie(token) {
        document.cookie = token + '=;';
    }

    // setCookie('token', 'your_token_value');
    // console.log(getCookie('token')); 
    // deleteCookie('token')

    function postLoginApiRequest(url, data, callback) {
        fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(responseData => callback(responseData))
            .catch(error => console.error('Error:', error))
    }

    let floginSubmission = document.getElementById("flogin-Submission")
    if (floginSubmission) {
        floginSubmission.addEventListener('submit', function(e) {
            e.preventDefault();
            let fUsername = document.getElementById("f-username").value
            let fpassword = document.getElementById("f-password").value
            let error = document.querySelector(".error")

            if (fUsername == "" && fpassword === "") {
                error.innerHTML = "Credential is required";
                if (!error.classList.contains('text-danger')) {
                    error.classList.add('text-danger')
                }
                return false;
            }

            // let url = base_url() + 'assets/vendor/js/dummyjsondata.json'
            let url = base_url() + `frontend/api/authentication/`;
            let data = {
                'username': fUsername,
                'password': fpassword
            }


            postLoginApiRequest(url, data, function(result) {
                if (result.responseCode == 200) {
                    if (error.classList.contains('text-danger')) {
                        error.classList.remove('text-danger')
                    }
                    setCookie('token', result.token);
                    const redirectUrl = localStorage.getItem('redirectUrl') || base_url()
                    localStorage.removeItem('redirectUrl');
                    window.location.href = redirectUrl;
                    error.classList.add('text-success')
                    error.innerHTML = result.message;
                    setInterval(function() {
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
<script src="<?= base_url() ?>assets/vendor/script/script.js"></script>
<?php require(APPPATH . 'views/frontend/footer.php'); ?>