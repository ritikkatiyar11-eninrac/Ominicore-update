<div class="page-header">
    <h1 class="page-title">All Media</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">All Media</li>
        </ol>
    </div>
</div>
<style>
    #image-container .img-thumbnail button {
        position: absolute;
        text-align: center;
        border-radius: 50%;
        right: 3px;
        top: 3px;
        font-size: 16px;
        width: 28px;
        height: 28px;
        border: none;
        z-index: 1;
    }

    #image-container .img-thumbnail .main-thumbnail {
        cursor: pointer;
        overflow: hidden;
    }

    #image-container .img-thumbnail .main-thumbnail img {
        height: 130px;
        object-fit: cover;
        width: 100%;
        transition: 500ms;
    }

    #image-container .img-thumbnail .main-thumbnail img:hover {
        transform: scale(1.3);
        transition: 500ms;
    }

    #image-container .img-thumbnail .main-thumbnail input {
        width: 100%;
        position: absolute;
        bottom: 0;
        left: 0;
        background: gray;
        border: 0;
        padding: 2px;
        color: white;
    }
</style>
<!-- PAGE-HEADER END -->
<div class="row row-sm">
    <div class="col-md-12">
        <div class="card d-none media-uploader">
            <div class="card-body">
                <div class="form-group mb-0">
                    <input type="file" class="dropify file-upload" data-bs-height="180">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <input type="search" name="search" id="media-search" class="media-search" placeholder="Search..." style="border: 1px solid #eee;padding: 5px 10px;border-radius: 20px;width: 172px;">
                <button class="btn btn-primary btn-sm toggle-media-box">Add Media</button>
            </div>
            <div class="card-body">
                <div class="panel panel-primary">

                    <div class="d-flex justify-content-between align-items-center mb-5">
                        <div class="error-message-container">
                            <div class="media-error-message d-block text-center">

                            </div>
                        </div>
                        <div class="paginnation-container">
                            <select name="goto-page" id="goto-page" class="goto-page" style="width: 140px;padding: 5px 11px;border: 1px solid #eee;background: white;border-radius: 17px;">

                            </select>
                        </div>
                    </div>
                    <!-- <div class="mediaDataContainer"></div> -->
                    <div id="loader" style="display: none;">Loading...</div>
                    <div id="image-container"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <script src="<?= base_url() ?>assets/vendor/script/media.js" defer></script> -->
<script src="<?= base_url() ?>assets/js/imageUrl.js"></script>
<script>
    // window.addEventListener('DOMContentLoaded', (event) => {
    //     mediaObject.init();
    // });
</script>