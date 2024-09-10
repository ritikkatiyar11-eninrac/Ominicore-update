function fetchPages() {
    fetch(base_url() + "api/v1/type/get")
        .then((res) => res.json())
        .then((result) => {
            if (result.responseCode == 200) {
                let tbody = document.querySelector('#file-datatable2 tbody');
                result.responseData.forEach((item, key) => {
                    let tr = document.createElement('tr');
                    tr.innerHTML = `<td>${key + 1}</td>
                        <td><a href="${base_url()}backend-dashboard/type?action=edit&id=${item.DB_ID}" target="_blank">${item.NAME}</a></td>
                        <td>${item.CREATE_AT}</td>
                        <td>${item.LAST_CHANGES}</td>
                        <td>${item.STATUS == 0 ? "disable" : "active"}</td>
                        <td>
                            <button class="btn btn-sm btn-danger" title="Goto Page" data-target="${item.DB_ID}">X</button>
                            <a class="btn btn-sm btn-primary" title="View Page" href="${base_url()}${item.URL_SLUG}" target="_blank">
                                <i class="side-menu__icon fe fe-link"></i>
                            </a>
                        </td>`
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