<div class="page-header">
    <h1 class="page-title">All Pages</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">All Pages</li>
        </ol>
    </div>
</div>
<style>
    .page-filter {
        display: flex;
        gap: 10px;
    }

    .page-filter li {
        padding: 5px 10px;
        border: 1px solid var(--bs-info);
        cursor: pointer;
    }

    .page-filter li.active {
        background: var(--bs-info);
        color: white;
    }
</style>
<!-- PAGE-HEADER END -->
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <ul class="page-filter">
                    <li class="active" data-target="all">All</li>
                    <li data-target="1">published</li>
                    <li data-target="0">Draft</li>
                </ul>
                <a class="btn btn-primary btn-sm" href="<?= current_url() ?>?action=add">Add Pages</a>
            </div>
            <div class="card-body">
                <div class="panel panel-primary">
                    <div class="table-responsive">
                        <table id="file-datatable2" class="table table-bordered text-wrap key-buttons border-bottom">
                            <thead>
                                <tr>
                                    <th class="border-bottom-0">#</th>
                                    <th class="border-bottom-0">Name</th>
                                    <th class="border-bottom-0">Create</th>
                                    <th class="border-bottom-0">Last_Update</th>
                                    <th class="border-bottom-0">Status</th>
                                    <th class="border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url() ?>assets/vendor/script/post.js"></script>
<script>
    let pageFilter = document.querySelectorAll('.page-filter li');
    pageFilter.forEach((element, key) => {
        element.addEventListener('click', function() {
            let currentElement = element.classList.contains('active')
            if (currentElement) {
                return false
            } else {
                let value = element.getAttribute('data-target');
                element.classList.add('active')
                removeActiveofFilterLi(key)
                destroyDataTable('#file-datatable2');
                fetchPages(value)
            }
        })
    })

    function removeActiveofFilterLi(x) {
        let filter = document.querySelectorAll('.page-filter li');
        filter.forEach((element, key) => {
            if (x != key) element.classList.remove('active');
        })
    }
</script>