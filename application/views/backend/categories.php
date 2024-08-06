<div class="contentArea"></div>
</div>
<div class="modal fade import-img-model" tabindex="9" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="row ">
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
                            <div class="paginnation-value">Showing 1 to 1 of 1 entries</div>
                            <div>
                                <span>Page no: </span>
                                <select class="mediaPages" style="padding: 5px 10px;width: 60px;border-radius: 5px;border: 1px solid #c1c1c1;">
                                    <option value="1">1</option>
                                </select>
                            </div>
                        </div>
                        <div class="masonry media-page row m-2">

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script src="/assets/vendor/script/categories.js"></script>