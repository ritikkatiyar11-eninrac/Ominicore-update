<?php require(APPPATH . 'views/header.php'); ?>
<style>
    @media(min-width:768px) {
        .notfound-page h1 {
            font-size: 36px;
        }
    }

    .notfound-page h1 {
        font-size: 36px;
    }

    .notfound-page .form-control:focus {
        box-shadow: none;
    }
</style>
<div class="w-100 notfound-page" style="padding-top:6rem; padding-left:1.5rem;padding-right:1.5rem; min-height: 88vh;">
    <div class="position-relative text-center" style="margin-bottom: 3.5rem; z-index:10;">
        <div class="w-100" style="margin-bottom: 3.5rem;">
            <h1 style="line-height: 1;">
                Page not found
            </h1>
            <p class="fs-16 mx-auto" style="max-width:30rem;letter-spacing: .0075em;line-height: 1.3;">We can't seem to find what you're looking for. This may be due to an outdated link or a typo in the URL.</p>
        </div>
    </div>
    <div class="position-relative" style="margin-bottom: 6rem;">
        <div class="w-100 mb-2 mx-auto" style="max-width:30rem;">
            <form action="" class="d-flex align-items-center">
                <input type="text" class="form-control  rounded-0" style="margin-right: 1rem; border:none; border-bottom:1px solid black; padding:.375rem 0;" placeholder="Search for Insights and topic">
                <button class="bg bg-dark text-white w-25 p-2 border-0"> Search</button>
            </form>
        </div>

        <div class="text-center mt-3">
            <a href="" class="shadow-underline pb-1 text-dark" style="text-decoration: underline;">Return to Homepage</a>
        </div>
    </div>
</div>

<?php require(APPPATH . 'views/footer.php'); ?>