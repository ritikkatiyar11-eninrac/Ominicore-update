<?php require(APPPATH . 'views/frontend/header.php'); ?>
<?php require(APPPATH . 'views/frontend/menu.php'); ?>

<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mt-3">
            <li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="icofont-home"></i></a></li>
            <li class="breadcrumb-item active" id="btbreadcrumbactiveurllast" aria-current="page">Infographic</li>

        </ol>
    </nav>
</div>

<div class="bn-base">
    <main class="bn-content-area" id="content">
        <div class="container-fluid">
            <div class="bn-grid" id="infographicParent">
            </div>
        </div>
    </main>
</div>

<script>
    // https://s3.amazonaws.com/infobeautiful-bnews/data/data.json

    // setTimeout(() => {
    fetchDataFunction()
    // }, 2000)

    // showSpinner()

    function fetchDataFunction() {
        fetch('http://localhost/omnicore/assets/js/infodata.json')
            .then(response => response.json())
            .then(data => {
                let itemData = data.data.items;
                
                console.log(itemData)
                let infographicParent = document.getElementById("infographicParent")
                itemData.forEach(item => {
                    let a = document.createElement("a")
                    a.className = `bn-item bn-item-${item.size}`
                    a.setAttribute("style", "opacity:1")
                    a.innerHTML = `
                <div class="bn-item-inner">
                    <div class="bn-item-img" style="background-image:${item.gradient}">
                        <img class="lazy" loading="lazy" src="https://s3.amazonaws.com/infobeautiful-bnews/images/${item.id}/${item.filename}.svg" alt="" />
                    </div>
                </div>`
                    infographicParent.appendChild(a)
                    hideSpinner()
                })
            });
    }
</script>

<?php require(APPPATH . 'views/frontend/footer.php'); ?>