<!doctype html>
<html lang="en" dir="ltr">

<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Energy infra market login panel">
    <meta name="author" content="Energy infra market login panel">
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/vendor/images/brand/favicon.ico" />
    <!-- TITLE -->
    <title>Omnicore Backend Panel</title>
    <!-- BOOTSTRAP CSS -->
    <link id="style" href="<?= base_url() ?>assets/vendor/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <!-- STYLE CSS -->
    <link href="<?= base_url() ?>assets/vendor/css/style.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/vendor/css/dark-style.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/vendor/css/transparent-style.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/css/skin-modes.css" rel="stylesheet" />
    <!--- FONT-ICONS CSS -->
    <link href="<?= base_url() ?>assets/vendor/css/icons.css" rel="stylesheet" />
    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="<?= base_url() ?>assets/vendor/colors/color1.css" />

</head>

<body class="app sidebar-mini ltr">

    <!-- BACKGROUND-IMAGE -->
    <div class="login-img">

        <!-- GLOABAL LOADER -->
        <div id="global-loader">
            <img src="<?= base_url() ?>assets/vendor/images/loader.svg" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOABAL LOADER -->

        <!-- PAGE -->
        <div class="page">
            <!-- CONTAINER OPEN -->
            <div class="container-login100">
                <div class="wrap-login100 p-6">
                    <form class="login100-form validate-form" id="form-login">
                        <span class="login100-form-title pb-5">Login</span>
                        <p class="error text-center w-100 mb-0"></p>
                        <div class="panel panel-primary">
                            <div class="panel-body tabs-menu-body p-0 pt-5">
                                <div class="tab-content">
                                    <div class="tab-pane active">
                                        <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                            </a>
                                            <input class="input100 border-start-0 form-control ms-0" type="email" name="email" id="email" placeholder="Email">
                                        </div>
                                        <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                            </a>
                                            <input class="input100 border-start-0 form-control ms-0" type="password" name="password" id="password" placeholder="Password">
                                        </div>
                                        <div class="container-login100-form-btn">
                                            <button type="submit" class="login100-form-btn btn-primary">Login</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- CONTAINER CLOSED -->
        </div>
        <!-- End PAGE -->

    </div>
    <!-- BACKGROUND-IMAGE CLOSED -->
    <!-- JQUERY JS -->
    <script src="<?= base_url() ?>assets/vendor/js/jquery.min.js"></script>
    <!-- BOOTSTRAP JS -->
    <script src="<?= base_url() ?>assets/vendor/plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- SHOW PASSWORD JS -->
    <script src="<?= base_url() ?>assets/vendor/js/show-password.min.js"></script>
    <!-- GENERATE OTP JS -->
    <script src="<?= base_url() ?>assets/vendor/js/generate-otp.js"></script>
    <!-- Perfect SCROLLBAR JS-->
    <script src="<?= base_url() ?>assets/vendor/plugins/p-scroll/perfect-scrollbar.js"></script>
    <!-- Color Theme js -->
    <script src="<?= base_url() ?>assets/vendor/js/themeColors.js"></script>
    <!-- CUSTOM JS -->
    <script src="<?= base_url() ?>assets/vendor/js/custom.js"></script>
    <script src="<?= base_url() ?>assets/vendor/script/script.js"></script>

    <script>
        const formlogin = document.querySelector('#form-login')
        formlogin.addEventListener('submit', function(e) {
            e.preventDefault();
            let error = document.querySelector('.error')
            let email = document.querySelector('#email').value
            let password = document.querySelector('#password').value

            
            if (email == "" && password === "") {
                error.innerHTML = "Credential is required";
                if (!error.classList.contains('text-danger')) {
                    error.classList.add('text-danger')
                }
                return false;
            }

            if (email === "email@email.com" && password === "123456") {
                error.innerHTML = "Login successful";
                if (!error.classList.contains('text-success')) {
                    error.classList.add('text-success')
                    error.classList.remove('text-danger')
                }
                setTimeout(function() {
                    location.href = "<?= base_url() ?>"
                }, 1000);

            } else {
                error.innerHTML = "Invalid credentials";
                if (!error.classList.contains('text-danger')) {
                    error.classList.add('text-danger')
                    error.classList.remove('text-success')
                }
                return false
            }



            console.log({
                'username': email,
                'password': password,
            }, )
            // login({
            //     'username': email,
            //     'password': password,
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

            setInterval(function() {
                formReset()
            }, 1000);
        })

        function formReset() {
            formlogin.reset()
        }
    </script>
</body>

</html>