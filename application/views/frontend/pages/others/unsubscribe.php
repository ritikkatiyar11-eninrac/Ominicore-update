<?php require(APPPATH . 'views/frontend/components/header.php'); ?>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h2 class=" fw-600  my-4">Manage your preferences</h2>
                </div>
                <div class="card-body">

                    <p class="text-center mb-4">Unsubscribe email@example.com from all marketing email messages?We're sorry to see you go! <br> Please let us know which emails you'd like to unsubscribe from:</p>
                    <form>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="omnicore">
                            <label class="form-check-label" for="omnicore">
                                Omnicore Newsletter
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="ev">
                            <label class="form-check-label" for="ev">
                                Einfews EV Newsletter
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="solar">
                            <label class="form-check-label" for="solar">Einfews Solar Newsletter</label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="wind">
                            <label class="form-check-label" for="wind">
                                Einfews Wind Newsletter
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="new-energies">
                            <label class="form-check-label" for="new-energies">Einfews New Energies Newsletter</label>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="infrastructure">
                            <label class="form-check-label" for="infrastructure">Einfews Infrastructure Newsletter</label>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="eninrac-reports">
                            <label class="form-check-label" for="eninrac-reports">Eninrac Reports Updates</label>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="eninrac-other">
                            <label class="form-check-label" for="eninrac-other">Eninrac Other Updates</label>
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