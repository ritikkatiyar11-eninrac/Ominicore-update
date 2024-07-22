<?php require(APPPATH . 'views/header.php') ?>
<section class="form-section">
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
            <p>Minimum 8 characters. Must contain one number, special character, lowercase letter, and uppercase letter</p>
        </div>
        <div class="mb-2">
            <label for="first-name" class=" ">First Name</label>
            <input data-testid="first-name-input" id="first-name" name="fname" type="text" required class="form-control ">
        </div>
        <div class="mb-2">
            <label for="last-name" class=" ">Last Name</label>
            <input data-testid="last-name-input" id="last-name" name="lname" type="text" required class="form-control ">
            <div class="d-flex flex py-1 align-items-start gap-2 justify-content-start">
                <input type="checkbox" name="" id="" style="width: auto;">
                <label for="">

                    I agree to receive updates and offers from Eninrac. You may opt out anytime.</label>
            </div>
        </div>
        <div class="mb-2">
        By creating an account you agree to the Terms of Service and acknowledge the Privacy Policy.


        </div>
        <div>
            <button type="submit" data-testid="login-button" class="btn btn-primary text-white py-2 px-4 rounded-md " style="width: 100%;">Create Account</button>
        </div>
    </form>
</section>

<?php require(APPPATH . 'views/footer.php') ?>