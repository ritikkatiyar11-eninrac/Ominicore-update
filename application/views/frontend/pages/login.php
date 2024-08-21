<style>
    .login-wrapper {
        height: 100vh;
        background: #eee9ff;
        /* background: linear-gradient(45deg, var(--primary-600), var(--extra-800)); */
    }

    .login-wrapper .login-area {
        display: flex;
        justify-content: center;
        height: 100%;
    }

    .login-wrapper .login-area .login-form {
        min-width: 500px;

        /* opacity: 0.6; */
        min-height: 200px;
        flex: 1;
    }

    .login-wrapper .login-area .login-form .login-text {
        margin-bottom: 10px;
    }

    .login-wrapper .login-area .login-form .login-body {
        width: 300px;
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

    .company-info {
        flex: 2;
        min-width: 0;
    }

    .company-info img {
        object-fit: cover;
        width: 200px;
        height: 70px;
        object-position: left;
    }

    .form-footer button {
        border: none;
        background: #0f3f6e;
        color: white;
        width: 260px;
        margin: 0 auto;
        border-radius: 7px;
    }

    .form-footer button:hover {
        transform: scale(0.98);
    }

    .form-footer a {
        display: block;
        margin: auto;
        width: fit-content;
        font-size: 14px;
        padding: 10px;
    }

    @media(max-width:831px) {
        .login-area .company-info {
            display: none;
            flex-direction: column;
        }
    }
</style>
<section class="login-wrapper w-100">
    <div class="login-area">
        <div class="company-info">
            <div class="d-flex justify-content-center flex-column w-100 mx-auto h-75 align-items-center">
                <h1>Regulatory, policy updates</h1>
                <div class="w-75 mx-auto text-center">
                    <p>First of a kind portal to stay updated on core dynamics governing the regulated sectors of India</p>
                </div>
            </div>
        </div>
        <div class="login-form" style="width: 60%;">
            <div class="d-flex align-items-center justify-content-center h-100">
                <div class="w-100">
                    <form action="" class="login-data-form" id="login-Submission">
                        <div class="login-text py-2">
                            <h1 class="text-center fs-25">Login</h1>
                            <p class="error text-danger fs-14   text-center"></p>
                        </div>
                        <div class="form-inputs">
                            <div class="login-body">
                                <div class="login-inputs">
                                    <input class="login-inputs-fields username" type="text" placeholder="Enter Your Email">
                                    <i class="icofont-email"></i>
                                </div>
                                <div class="login-inputs">
                                    <input class="login-inputs-fields password" type="password" placeholder="Enter Your Password">
                                    <i class="icofont-eye"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-footer py-2">
                            <button type="submit" class="fs-14 fw-300 d-block m-auto px-4 py-2 my-2">Login</button>
                            <a href="">Forgot username or password</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>