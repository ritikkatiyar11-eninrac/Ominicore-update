function fetchPages() {
    fetch("http://localhost/omnicore/api/v1/category/get")
        .then((res) => res.json())
        .then((result) => {
            if (result.responseCode == 200) {
                let tbody = document.querySelector('#file-datatable2 tbody');
                result.responseData.forEach((item, key) => {
                    let tr = document.createElement('tr');
                    tr.innerHTML = `<td>${key + 1}</td>
                        <td><a href="http://localhost/omnicore/backend-dashboard/pages?action=edit&id=${item.DB_ID}" target="_blank"><small>${item.NAME}</small></a></td>
                        <td><a href="http://localhost/omnicore/category/${item.URL_SLUG}" target="_blank"><small>View Page</small></a></td>
                        <td><small>${item.STATUS == 0 ? "disable" : "active"}</small></td>
                        <td><small>${item.TYPE}</small></td>
                        <td><button class="btn btn-sm btn-danger" data-target="${item.DB_ID}">X</button></td>`
                    tbody.appendChild(tr);
                });
            }
            createDatatable('#file-datatable2')
        })
        .catch((err) => {
            console.log("err", err);
        });
}
function destroyDataTable(element) {
    $(element).DataTable().clear().destroy();
}

function createDatatable(element) {
    $(document).ready(function () {
        $(element).DataTable();
    })
}

window.addEventListener('DOMContentLoaded', () => fetchPages());