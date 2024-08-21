<?php require(APPPATH . 'views/frontend/components/header.php'); ?>
<section class="signup-form-section">
    <div class="form-head text-center pb-2">
        <h1>Create your account</h1>

    </div>
    <form action="" method="POST">

        <div class="mb-2">
            <label for="username" class=" ">Email Address</label>
            <input data-testid="Email-Address-input" id="username" name="log" type="text" autocomplete="username" required class="form-control bg-white ">
        </div>
        <div class="mb-2">
            <label for="password" class=" ">Password</label>
            <input data-testid="password-input" id="password" name="pwd" type="password" autocomplete="current-password" required class="form-control ">
            <p class="password-rules">Minimum <span class="colblue">8 characters.</span> Must contain <span class="colblue">one number, special character, lowercase letter</span>, and uppercase letter</p>
        </div>
        <div class="mb-2">
            <label for="first-name" class=" ">First Name</label>
            <input data-testid="first-name-input" id="first-name" name="fname" type="text" required class="form-control ">
        </div>
        <div class="mb-2">
            <label for="last-name" class=" ">Last Name</label>
            <input data-testid="last-name-input" id="last-name" name="lname" type="text" required class="form-control ">
            <div class="d-flex flex py-3 align-items-start gap-2 justify-content-start" style="line-height: 100%;">
                <input type="checkbox" name="" id="" style="width: auto;">
                <label for="">

                    I agree to receive updates and offers from Eninrac. You may opt out anytime.</label>
            </div>
        </div>
        <div class="mb-2" style="font-size: 14px;">
            By creating an account you agree to the Terms of Service and acknowledge the <span><a href="<?= base_url('privacy_policy') ?>">Privacy Policy</a></span>.


        </div>
        <div>
            <button type="submit" data-testid="login-button" class="btn btn-primary text-white py-2 px-4 rounded-md " style="width: 100%;">Create Account</button>
        </div>
        <div class="d-flex flex gap-2 pt-2 justify-content-center">
            <p>Already have an account?</p>
            <p><u><a href="<?= base_url('login') ?>">Log in to your account</a></u></p>


        </div>
    </form>
</section>

<?php require(APPPATH . 'views/frontend/components/footer.php'); ?>