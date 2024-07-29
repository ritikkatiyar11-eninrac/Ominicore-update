let dataUrl = "http://localhost/omnicore/assets/js/data.json"
    const storedData = {
        data: {},
        setdata(data) {
            this.data = data;
        },
        fetchData() {
            fetch(dataUrl)
                .then(res => res.json())
                .then(result => {
                    storedData.setdata(result)
                }).catch(err => {
                    console.log("err", err)
                })
        },
        functionToCallDataBySlug() {
            document.querySelectorAll(".menu-ticker").forEach(item => {
                item.addEventListener("click", function(e) {
                    itemId = item.getAttribute("id")
                    console.log(itemId)
                    let activeStyle = document.getElementsByClassName("--active");
                    activeStyle[0].className = activeStyle[0].className.replace("--active", "")
                    this.className += " --active"
                    const filteredData = storedData.data.find(ite => ite.slug === itemId)
                    console.log("filterData", filteredData.children)
                })
            })

        }
    };
    storedData.fetchData();
    storedData.functionToCallDataBySlug()