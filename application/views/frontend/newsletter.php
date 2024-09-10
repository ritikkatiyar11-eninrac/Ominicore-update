<?php require(APPPATH . 'views/frontend/header.php'); ?>
<?php require(APPPATH . 'views/frontend/menu.php'); ?>
<style>
    .subscription-container {
        max-width: 900px;
        margin: 30px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .newsletter-description {
        margin-bottom: 20px;
    }

    .form-footer {
        margin-top: 20px;
    }

    .subscription-container form {
        max-width: 90%;
        margin: 10px auto;
        display: grid;
        column-gap: 20px;
        grid-template-areas:
            'email firstname'
            'lastname company'
            'checkbox-form checkbox-form'
            'btn btn'
    }

    .newsletter-description {
        display: grid;
        row-gap: 20px;
    }
</style>

<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<? base_url() ?>"><i class="icofont-home"></i></a></li>
            <li class="breadcrumb-item active">Newsletter</li>
        </ol>
    </nav>
</div>

<div class="container">
    <div class="subscription-container">
        <h2 class="form-heading" style="margin-bottom: 30px; text-align:center;">Omnicore Newsletter</h2>
        <div class="newsletter-description">
            <p><strong>Daily:</strong> Our Daily newsletter brings you breaking news, comment and insider analysis on the international art world, picked by our editors</p>
            <p><strong>Weekender:</strong> Our Weekender newsletter, sent on Fridays, includes the day's top stories, a guide to must-see exhibitions, long-form features as well as our latest podcast episode and the most recent installment of our series Adventures with Van Gogh</p>
            <p><strong>Sunday Best:</strong> In a hurry? Catch up on the week's most popular stories. Sent weekly on Sundays</p>
            <p><strong>Act Market Eye:</strong> Our monthly Art Market Eye newsletter delivers commentary, insights and analysis from our Art market experts</p>
            <p><strong>Art Fair Daily:</strong> Sent only during the opening days of major Art fairs, the Art Fair Daily newsletter brings live news, gossip, interviews and features from our team on the ground</p>
            <p><strong>Book Club:</strong> One for the bookworms! Our monthly Book Club newsletter brings you exclusive extracts, reviews, features, author interviews and more on the latest Art books</p>
            <p><strong>The Month Ahead:</strong> Want to know all the essential Art world dates for your diary? This newsletter includes our pick of the must-see exhibitions, key fairs and important Art events, sent at the start of the month</p>
        </div>
        <form action="" method="POST">

            <div class="mb-3 form-group" style="grid-area: email;">
                <label for="email" class="form-label mb-0">Email Address</label>
                <input type="email" class="form-control py-3" id="email" name="MERGE0" placeholder="Enter your email" required>
            </div>
            <div class="mb-3 form-group" style="grid-area: firstname;">
                <label for="firstName" class="form-label mb-0">First Name</label>
                <input type="text" class="form-control py-3" id="firstName" name="MERGE1" placeholder="Enter your first name" required>
            </div>
            <div class="mb-3 form-group" style="grid-area: lastname;">
                <label for="lastName" class="form-label mb-0">Last Name</label>
                <input type="text" class="form-control py-3" id="lastName" name="MERGE2" placeholder="Enter your last name" required>
            </div>
            <div class="mb-3 form-group" style="grid-area: company;">
                <label for="company" class="form-label mb-0">Company</label>
                <input type="text" class="form-control py-3" id="company" name="MERGE3" placeholder="Enter your company">
            </div>
            <div class="mb-3 form-group d-flex flex-wrap gap-2" style="grid-area: checkbox-form;">
                <div class=" border rounded d-flex justify-content-center align-items-center  gap-2" style="height: 60px; text-align:center; width:250px;">
                    <input class="form-check-input" type="checkbox" name="group[1][1]" id="dailyNewsletter">
                    <label class="form-check-label" for="dailyNewsletter">Daily Newsletter</label>
                </div>
                <div class=" border rounded d-flex justify-content-center align-items-center gap-2 px-2" style="height: 60px; text-align:center; width:250px;">
                    <input class="form-check-input" type="checkbox" name="group[1][2]" id="weekender">
                    <label class="form-check-label" for="weekender">Weekender</label>
                </div>
                <div class=" border rounded d-flex justify-content-center align-items-center gap-2 px-2" style="height: 60px; text-align:center; width:250px;">
                    <input class="form-check-input" type="checkbox" name="group[1][4]" id="sundayBest">
                    <label class="form-check-label" for="sundayBest">Sunday Best</label>
                </div>
                <div class=" border rounded d-flex justify-content-center align-items-center gap-2 px-2" style="height: 60px; text-align:center; width:250px;">
                    <input class="form-check-input" type="checkbox" name="group[1][8]" id="artMarketEye">
                    <label class="form-check-label" for="artMarketEye">Art Market Eye</label>
                </div>
                <div class=" border rounded d-flex justify-content-center align-items-center gap-2 px-2" style="height: 60px; text-align:center; width:250px;">
                    <input class="form-check-input" type="checkbox" name="group[1][16]" id="artFairDaily">
                    <label class="form-check-label" for="artFairDaily">Art Fair Daily</label>
                </div>
                <div class=" border rounded d-flex justify-content-center align-items-center gap-2 px-2" style="height: 60px; text-align:center; width:250px;">
                    <input class="form-check-input" type="checkbox" name="group[1][32]" id="bookClub">
                    <label class="form-check-label" for="bookClub">Book Club</label>
                </div>
                <div class=" border rounded d-flex justify-content-center align-items-center gap-2 px-2" style="height: 60px; text-align:center; width:250px;">
                    <input class="form-check-input" type="checkbox" name="group[1][64]" id="theMonthAhead">
                    <label class="form-check-label" for="theMonthAhead">The Month Ahead</label>
                </div>

            </div>
            <button type="submit" class="btn  py-2 btn-dark" style="width:32%;grid-area:btn;">Subscribe</button>
        </form>
    </div>
</div>

<?php require(APPPATH . 'views/frontend/footer.php'); ?>