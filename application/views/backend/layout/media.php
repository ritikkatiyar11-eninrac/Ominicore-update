<?php require(APPPATH . 'views/backend/layout/header.php') ?>
<div class="page-header">
    <h1 class="page-title">Dashboard</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header justify-content-between align-items-center">
                <form id="fileuploader" class="d-none" action="post" enctype="multipart/form-data">
                    <input type="file" id="file" name="file">
                </form>
                <button type="button" class="media-toggle btn btn-primary btn-sm">Add media</button>
            </div>
        </div>
    </div>
    <div class="media-error text-danger text-center"></div>
    <div class="col-md-12">
        <div class="card h-100">
            <div class="card-header justify-content-between align-items-center">
                <div class="paginnation-value">Showing 1 to 20 of 179 entries</div>
                <div>
                    <span>Page no: </span>
                    <select class="mediaPages" style="padding: 5px 10px;width: 60px;border-radius: 5px;border: 1px solid #c1c1c1;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                </div>
            </div>
            <div class="masonry media-page row m-2">
                <div class="col-xs-3 col-lg-3 col-sm-6">
                    <div class="brick">
                        <img src="https://ticketstotrip.com/t3upload/thumbnail/location-icon.png" alt="">
                        <input type="text" class="form-control disable" value="https://ticketstotrip.com/t3upload/thumbnail/location-icon.png">
                        <button class="btn btn-danger btn-sm med-close">
                            <i class="side-menu__icon fe fe-x"></i>
                        </button>
                    </div>
                </div>
                <div class="col-xs-3 col-lg-3 col-sm-6">
                    <div class="brick">
                        <img src="https://ticketstotrip.com/t3upload/1.png" alt="">
                        <input type="text" class="form-control disable" value="https://ticketstotrip.com/t3upload/1.png">
                        <button class="btn btn-danger btn-sm med-close">
                            <i class="side-menu__icon fe fe-x"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<?php require(APPPATH . 'views/backend/layout/footer.php') ?>