<?php require(APPPATH . 'views/frontend/components/header.php'); ?>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h2 class=" fw-600  my-4">Unsubscribe from Emails</h2>
                </div>
                <div class="card-body">

                    <p class="text-center mb-4">Unsubscribe email@example.com from all marketing email messages?We're sorry to see you go! <br> Please let us know which emails you'd like to unsubscribe from:</p>
                    <form>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="newsletter">
                            <label class="form-check-label" for="newsletter">
                                Newsletter
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="promotions">
                            <label class="form-check-label" for="promotions">
                                Promotions
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="updates">
                            <label class="form-check-label" for="updates">Product Updates</label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="events">
                            <label class="form-check-label" for="events">
                                Event Invitations
                            </label>
                        </div>
                        <div class="w-100 text-center">

                            <button type="submit" onclick="alert('successfully unsubscribed from Omnicore newsletter')" class="btn btn-danger ">Unsubscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let newsletterLabels = document.querySelectorAll(".form-check-input")
    let checkeditemsNews = [];
    let temp;
    newsletterLabels.forEach(item => {

        item.addEventListener("click", function() {

            if (item.checked) {
                checkeditemsNews.push(item.id);
            } else {
                checkeditemsNews = checkeditemsNews.filter(id => id !== item.id)
            }
            console.log(checkeditemsNews)
        })

    })
</script>
<?php require(APPPATH . 'views/frontend/components/footer.php'); ?>