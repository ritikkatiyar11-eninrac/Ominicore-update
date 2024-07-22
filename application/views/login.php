<!DOCTYPE html>
<html lang="en">



<?php require($this->config->item('views') . '/header.php'); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('assets/fonts/fonts.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />

</head>

<body>

    

    <section class="form-section"  style="    ">
        <div class="form-head text-center">
            <h1 style="">Sign in to your account</h1>
            <div class="d-flex flex gap-2">
                <p>Don't have an account?</p>
                <p>Create your free account</p>
                

            </div>

        </div>
        <form action="" method="POST">
            <input type="hidden" name="_token">
            <div class="mb-2">
                <label for="username" class=" ">Email Address</label>
                <input data-testid="Email-Address-input" id="username" name="log" type="text" autocomplete="username" placeholder="Email Address" required class="form-control bg-white py-3">
            </div>
            <div class="mb-2">
                <label for="password" class=" ">Password</label>
                <input data-testid="password-input" id="password" name="pwd" type="password" autocomplete="current-password" placeholder="Password" required class="form-control py-3">
            </div>
            <div class="d-flex justify-content-end mt-3 mb-4">

                <div class="text-sm">
                    <a href="/recover-password" class="text-grey font-medium">Forgot password?</a>
                </div>
            </div>
            <div>
                <button type="submit" data-testid="login-button" class="btn btn-primary text-white py-2 px-4 rounded-md " style="width: 100%;">Login</button>
            </div>
        </form>
    </section>
</body>

</html>

<?php require($this->config->item('views') . '/footer.php'); ?>