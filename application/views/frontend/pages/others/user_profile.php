<?php require(APPPATH . 'views/frontend/components/header.php'); ?>
<div class="container-fluid">
    <div class="user_profile-section">

    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="profile-pic">
                <img width="100px" height="100px" src="https://lh5.googleusercontent.com/-V-l3HiidoJM/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucmHlabnZfElxh_nBDC8DWYSeILb8Q/photo.jpg" alt="">
            </div>
            <div class="form-group">
                <label for="">Gender</label>
                <select class="form-control" name="" id="">
                    <option value="">Select Your Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <a href="#" class="mt-3">Change Password</a>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="form-label"></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="form-label"></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="form-label"></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="form-label"></label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="form-label"></label>
                <textarea name="" id="" class="form-control"></textarea>
            </div>
            <div class="mt-2">
                <button class="btn btn-primary">Send</button>
            </div>
        </div>
    </div>
    <div class="row">

    </div>
    <table id="datatable-buttons" class="table table-striped table-bordered wrap dataTable no-footer" role="grid" aria-describedby="datatable-buttons_info">
        <thead>
            <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 8.58333px;">#</th>
                <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 351.208px;">Name</th>
                <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" aria-label="Type: activate to sort column ascending" style="width: 31.4375px;">Title</th>
                <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" aria-label="Created: activate to sort column ascending" style="width: 67.1979px;">Created</th>
                <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" aria-label="Update: activate to sort column ascending" style="width: 63.6667px;">Update</th>
                <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" aria-label="status: activate to sort column ascending" style="width: 40.3021px;">Author</th>
                <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 54.4479px;">Action</th>
            </tr>
        </thead>
        <tbody id="tbody"></tbody>
    </table>
</div>

<script>
    let baseurl_ = `http://localhost/omnicore/`
    let dataUrl = `${baseurl_}/assets/js/post.json`
    fetch(dataUrl).then(res => res.json()).then(data => {
       
        createTable(data)
    })

    function createTable(data) {
        let tbody = document.getElementById("tbody")
        data.forEach(post => {
            let tr = document.createElement("tr")
            tr.innerHTML = ` <td class="sorting_1">${post.id}</td>
                <td>${post.name}</td>
                <td>${post.title}</td>
                <td>${post.createdAt}</td>
                <td>${post.isAproved}</td>
                <td>${post.author}</td>
                <td>
                    <a href="" class="btn btn-xs btn-success"></a><span> </span>
                    <a href="javascript:void(0)" onclick="deletefilter('https://eninrac.com/delete/page/6163')" class="btn btn-xs btn-warning">x</a>
                    <a title="View" target="_blank" class="btn btn-xs btn-primary" href="https://eninrac.com/open-access-services"><i class="mdi mdi mdi-link"></i></a>
                </td>`

            tbody.appendChild(tr)
        })


    }
</script>