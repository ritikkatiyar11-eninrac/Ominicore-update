<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Art Newspaper Newsletter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .subscription-container {
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-heading {
            margin-bottom: 30px;
        }
        .newsletter-description {
            margin-bottom: 20px;
        }
        .form-footer {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="subscription-container">
            <h2 class="text-center form-heading">The Art Newspaper Newsletter</h2>
            <div class="newsletter-description">
                <p><strong>Daily:</strong> Our Daily newsletter brings you breaking news, comment and insider analysis on the international art world, picked by our editors</p>
                <p><strong>Weekender:</strong> Our Weekender newsletter, sent on Fridays, includes the day's top stories, a guide to must-see exhibitions, long-form features as well as our latest podcast episode and the most recent installment of our series Adventures with Van Gogh</p>
                <p><strong>Sunday Best:</strong> In a hurry? Catch up on the week's most popular stories. Sent weekly on Sundays</p>
                <p><strong>Art Market Eye:</strong> Our monthly Art Market Eye newsletter delivers commentary, insights and analysis from our art market experts</p>
                <p><strong>Art Fair Daily:</strong> Sent only during the opening days of major art fairs, the Art Fair Daily newsletter brings live news, gossip, interviews and features from our team on the ground</p>
                <p><strong>Book Club:</strong> One for the bookworms! Our monthly Book Club newsletter brings you exclusive extracts, reviews, features, author interviews and more on the latest art books</p>
                <p><strong>The Month Ahead:</strong> Want to know all the essential art world dates for your diary? This newsletter includes our pick of the must-see exhibitions, key fairs and important art events, sent at the start of the month</p>
            </div>
            <form action="" method="POST">
                <input type="hidden" name="u" value="2b93c36d5d680004a859c739e">
                <input type="hidden" name="id" value="c459f924d0">
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="MERGE0" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="MERGE1" placeholder="Enter your first name" required>
                </div>
                <div class="mb-3">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="MERGE2" placeholder="Enter your last name" required>
                </div>
                <div class="mb-3">
                    <label for="company" class="form-label">Company</label>
                    <input type="text" class="form-control" id="company" name="MERGE3" placeholder="Enter your company">
                </div>
                <div class="mb-3">
                    <label class="form-label">Please send me:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="group[1][1]" id="dailyNewsletter">
                        <label class="form-check-label" for="dailyNewsletter">Daily Newsletter</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="group[1][2]" id="weekender">
                        <label class="form-check-label" for="weekender">Weekender</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="group[1][4]" id="sundayBest">
                        <label class="form-check-label" for="sundayBest">Sunday Best</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="group[1][8]" id="artMarketEye">
                        <label class="form-check-label" for="artMarketEye">Art Market Eye</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="group[1][16]" id="artFairDaily">
                        <label class="form-check-label" for="artFairDaily">Art Fair Daily</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="group[1][32]" id="bookClub">
                        <label class="form-check-label" for="bookClub">Book Club</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="group[1][64]" id="theMonthAhead">
                        <label class="form-check-label" for="theMonthAhead">The Month Ahead</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="group[1][128]" id="allNewsletters">
                        <label class="form-check-label" for="allNewsletters">All of the above, including future The Art Newspaper newsletters</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100">Subscribe</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>