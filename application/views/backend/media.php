<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="page-header">
    <h1 class="page-title">Media</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Media</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<!-- ROW-1 OPEN -->
<!-- Row -->
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
                <div class="paginnation-value">25 out of 100</div>
                <div>
                    <span>Page no: </span>
                    <select class="mediaPages" style="padding: 5px 10px;width: 60px;border-radius: 5px;border: 1px solid #c1c1c1;"></select>
                </div>
            </div>
            <div class="masonry media-page row m-2">
                
            </div>
        </div>
    </div>
</div>
<!-- /Row -->
</div>

<script>
    window.addEventListener('DOMContentLoaded', () => getAttachment(1));
</script>