<?php require(APPPATH . 'views/header.php'); ?>
<style>
    .hidden {
        display: none;
    }

    .active {
        color: red;
    }
</style>
<div class="container-xl">
    <div class="bn-controls-wrapper">
        <div class="container-xl p-0">
            <div class="bn-filter-tab-wrapper">
                <div class="bn-filter-tabs-inner">
                    <div class="bn-filter-tabs">
                        <ul id="parent-category">
                        </ul>
                    </div>
                </div>
                <div class="bn-subfilter-tabs-inner">
                    <div class="bn-subfilter-tabs">
                        <ul id="sub-category">
                        </ul>
                    </div>
                </div>
                <div class="bn-subfilter-tabs-inner">
                    <div class="bn-subfilter-tabs">
                        <ul id="grand-category"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    const categories = [{
            name: "Central",
            slug: "central",
            children: [{
                    name: "CERC",
                    slug: "central-cerc",
                    children: [{
                        name: "orders",
                        slug: "central-cerc-orders",
                    }, {
                        name: "petitions",
                        slug: "central-cerc-petitions",
                    }, {
                        name: "Consultation on Draft Regulations",
                        slug: "central-cerc-codr",
                    }, {
                        name: "Regulations",
                        slug: "central-cerc-regulation",
                    }, {
                        name: "Policies",
                        slug: "central-cerc-policy",
                    }, {
                        name: "Eninrac Comments on Draft Regulations",
                        slug: "central-cerc-ecodr",
                    }, {
                        name: "Public Hearings",
                        slug: "central-cerc-publichearings",
                    }, {
                        name: "Ammendments",
                        slug: "central-cerc-ammendments",
                    }, {
                        name: "MOM",
                        slug: "central-cerc-mom",
                    }],
                },
                {
                    name: "MOP",
                    slug: "central-mop",
                    children: [{
                        name: "Regulations",
                        slug: "central-mop-regulations",
                    }, {
                        name: "Policy",
                        slug: "central-mop-policy",
                    }, {
                        name: "Announcements",
                        slug: "central-mop-announcements",
                    }],
                },
                {
                    name: "MNRE",
                    slug: "central-mnre",
                    children: [{
                        name: "Regulations",

                    }, {
                        name: "Policy",
                        slug: "central-mnre-policy"
                    }, {
                        name: "Announcements",
                        slug: "central-mnre-announcements"
                    }],
                },
                {
                    name: "MOF",
                    slug: "central-mof",
                    children: [{
                        name: "Announcements",
                        slug: "central-mof-announcements"
                    }],
                },
                {
                    name: "MOC",
                    slug: "central-moc",
                    children: [{
                        name: "Announcements",
                        slug: "central-moc-announcements"
                    }],
                },
                {
                    name: "Apellate Tribunal",
                    slug: "central-apellatetribunal",
                    children: [{
                        name: "Landmark Judgements",
                        slug: "central-apellatetribunal-landmarkjudgements"
                    }, {
                        name: "Interim Orders",
                        slug: "central-apellatetribunal-interimorders"
                    }, {
                        name: "Final Orders",
                        slug: "central-apellatetribunal-finalorders"
                    }],
                },
                {
                    name: "Honb'le Supreme Court",
                    slug: "central-supreme-court",
                    children: [{
                        name: "Landmark Judgements",
                        slug: "central-supremecourt-landmarkjudgements"

                    }, {
                        name: "Interim Orders",
                        slug: "central-supremecourt-interimorders"
                    }, {
                        name: "Final Orders",
                        slug: "central-supremecourt-finalorders"
                    }],
                },
                {
                    name: "others",
                    slug: "central-others",
                    children: [],
                },
            ],
        },
        {
            name: "State",
            slug: "state",
            children: [{
                    name: "Gujrat",
                    slug: "state-gujrat",
                    children: [{
                        name: "GERC"
                    }],
                },
                {
                    name: "maharashtra",
                    slug: "state-maharashtra",
                    children: [{
                        name: "MERC",
                        slug: "state-maharashtra-merc"
                    }],
                },
                {
                    name: "Rajsthan",
                    slug: "state-rajsthan",
                    children: [{
                        name: "RERC",
                        slug: "state-rajsthan-rerc"
                    }],
                },
                {
                    name: "Panjab",
                    slug: "state-panjab",

                    children: [{
                        name: "PERC",
                        slug: "state-panjab-perc"
                    }],
                },
                {
                    name: "Haryana",
                    slug: "state-haryana",
                    children: [{
                        name: "HERC",
                        slug: "state-haryana-herc"
                    }],
                },
                {
                    name: "Uttarakhand",
                    slug: "state-uttarakhand",
                    children: [{
                        name: "UERC",
                        slug: "state-uttarakhand-uerc"
                    }],
                },
                {
                    name: "Odisa",
                    slug: "state-odisa",
                    children: [{
                        name: "OERC",
                        slug: "state-odisa-oerc"
                    }],
                },
                {
                    name: "Bihar",
                    slug: "state-bihar",
                    children: [{
                        name: "BERC",
                        slug: "state-bihar-berc"
                    }],
                },
                {
                    name: "Asam",
                    slug: "state-asam",
                    children: [{
                        name: "AERC",
                        slug: "state-asam-aerc"
                    }],
                },
                {
                    name: "others",
                    slug: "state-others",
                    children: [],
                },
            ],
        },
        {
            name: "Power Generation",
            slug: "powergeneration",
            children: [{
                    name: "Thermal",
                    slug: "powergeneration-thermal",
                    children: [],
                },
                {
                    name: "Solar",
                    slug: "powergeneration-solar",

                    children: [],
                },
                {
                    name: "Wind",
                    slug: "powergeneration-wind",
                    children: [],
                },
                {
                    name: "Biomass",
                    slug: "powergeneration-biomass",
                    children: [],
                },
                {
                    name: "Small Hydro Plants",
                    slug: "powergeneration-smallhydro",
                    children: [],
                },
                {
                    name: "Nuclear",
                    slug: "powergeneration-nuclear",
                    children: [],
                },
                {
                    name: "Others",
                    slug: "powergeneration-others",
                    children: [],
                },

            ],
        },
        {
            name: "Power Distribution",
            slug: "powerdistribution",
            children: [{
                name: "Tariff",
                slug: "powerdistribution-tariff",
                children: []
            }, {
                name: "C&I Consumers",
                slug: "powerdistribution-ci",
                children: []
            }, {
                name: "Network Augmentation",
                slug: "powerdistribution-networkaugmentation",
                children: []
            }],
        },
        {
            name: "Power Transmission",
            slug: "powertansmission",
            children: [{
                    name: "Connectivity",
                    slug: "powertansmission-connectivity",
                    children: [{
                            name: "STU",
                            slug: "powertansmission-connectivity-stu",
                            children: []
                        },
                        {
                            name: "CTU",
                            slug: "powertansmission-connectivity-ctu",
                            children: []
                        }
                    ],
                },
                {
                    name: "Charges",
                    slug: "powertansmission-charges",
                    children: [{
                            name: "STU",
                            slug: "powertansmission-charges-stu",
                            children: []
                        },
                        {
                            name: "CTU",
                            slug: "powertansmission-charges-ctu",
                            children: []
                        }
                    ],
                },
                {
                    name: "Projects",
                    slug: "powertansmission-projects",
                    children: [],
                },
                {
                    name: "Govt Announcements",
                    slug: "powertansmission-govtannouncements",

                    children: [{
                            name: "Central",
                            slug: "powertansmission-govtannouncements-central",
                            children: []
                        },
                        {
                            name: "State",
                            slug: "powertansmission-govtannouncements-state",
                            children: []
                        }
                    ],
                },
            ],
        },
        {
            name: "bidupdates",
            slug: "bidupdates",
            children: [{
                    name: "Bid Invites",
                    slug: "bidupdates-bidinvites",
                    children: [{
                            name: "SECI",
                            slug: "bidupdates-bidinvites-seci",
                            children: []
                        },
                        {
                            name: "PSU",
                            slug: "bidupdates-bidinvites-psu",
                            children: []
                        },
                        {
                            name: "State Govt",
                            slug: "bidupdates-bidinvites-state",
                            children: []
                        },
                        {
                            name: "Others",
                            slug: "bidupdates-bidinvites-others",
                            children: []
                        }

                    ]
                },
                {
                    name: "Bid Results",
                    slug: "bidupdates-bidresults",
                    children: []
                },
                {
                    name: "Others",
                    slug: "bidupdates-others",
                    children: []
                }
            ],
        },
        {
            name: "new energies",
            slug: "newenergies",
            children: [{
                    name: "BESS",
                    slug: "newenergies-bess",
                    children: []
                },
                {
                    name: "Hydrogen",
                    slug: "newenergies-hydrogen",
                    children: []
                },
                {
                    name: "PSHP (Pump Storage Hydro Plants)",
                    slug: "newenergies-pshp",
                    children: []
                },
            ],
        },
        {
            name: "Infographic",
            slug: "infographic",
            children: [{
                    name: "Central",
                    slug: "infographic-central",
                    children: []
                },
                {
                    name: "State",
                    slug: "infographic-state",
                    children: []
                },
                {
                    name: "Generation",
                    slug: "infographic-generation",
                    children: []
                },
                {
                    name: "Distribution",
                    slug: "infographic-distribution",
                    children: []
                },
                {
                    name: "Transmission",
                    slug: "infographic-transmission",
                    children: []
                },
                {
                    name: "Bid Updates",
                    slug: "infographic-bidupdates",
                    children: []
                },
                {
                    name: "OpenAccess",
                    slug: "infographic-openaccess",
                    children: []
                },
                {
                    name: "New Energies",
                    slug: "infographic-newenergies",
                    children: []
                },
                {
                    name: "Misc",
                    slug: "infographic-misc",
                    children: []
                },

            ],
        },
        {
            name: "solar rooftop",
            slug: "solar-rooftop",
            children: [{
                    name: "Regulations",
                    slug: "solar-rooftop-regulations",
                    children: []
                },
                {
                    name: "Policies",
                    slug: "solar-rooftop-policies",
                    children: []
                },
                {
                    name: "Feed in Tariffs",
                    slug: "solar-rooftop-feedintariffs",
                    children: []
                },
            ],
        },
        {
            name: "Open Access",
            slug: "openaccess",
            children: [{
                    name: "Solar",
                    slug: "openaccess-solar",
                    children: [{
                        name: "Charges",
                        slug: "openaccess-solar-charges",

                        children: []
                    }, {
                        name: "Duty",
                        slug: "openaccess-solar-duty",
                        children: []
                    }, {
                        name: "Waivers",
                        slug: "openaccess-solar-waivers",
                        children: []
                    }, {
                        name: "Banking",
                        slug: "openaccess-solar-banking",
                        children: []
                    }],
                },
                {
                    name: "Wind",
                    slug: "openaccess-wind",
                    children: [{
                        name: "Charges",
                        slug: "openaccess-wind-charges",
                        children: []
                    }, {
                        name: "Duty",
                        slug: "openaccess-wind-duty",
                        children: []
                    }, {
                        name: "Waivers",
                        slug: "openaccess-wind-waivers",
                        children: []
                    }, {
                        name: "Banking",
                        slug: "openaccess-wind-banking",
                        children: []
                    }],
                },
                {
                    name: "Hybrid",
                    slug: "openaccess-hybrid",
                    children: [{
                        name: "Charges",
                        slug: "openaccess-hybrid-charges",
                        children: []
                    }, {
                        name: "Duty",
                        slug: "openaccess-hybrid-duty",
                        children: []
                    }, {
                        name: "Waivers",
                        slug: "openaccess-hybrid-waivers",
                        children: []
                    }, {
                        name: "Banking",
                        slug: "openaccess-hybrid-banking",
                        children: []
                    }],
                },
            ],
        },
    ];

    function createCategoryTree() {
        const categorytree = document.getElementById("parent-category")
        categorytree.innerHTML = "";

        categories.forEach((pCat, idx) => {
            let ptemp = pCat
            const categoryElement = document.createElement("li");
            categoryElement.classList.add("bn-filter-item", "parent");
            categoryElement.innerHTML = `
                <button class="fs-14
                    bn-filter bn-filter-top border-0"
                    data-slug=${pCat.slug} 
                    data-parent=${idx} data-title=${pCat.name} data-sub=""
                    style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">${pCat.name}
                </button>`
            categorytree.appendChild(categoryElement)

            // for child
            const childrenContainer = document.getElementById("sub-category")
            // console.log(childrenContainer)
            pCat.children.forEach((childCat, childIdx) => {
                const childElement = document.createElement("li");
                childElement.classList.add("bn-subfilter-item", "child");
                childElement.setAttribute("style", "transform: scale(1); opacity: 1;")
                childElement.innerHTML = `
                <button class="bn-subfilter"
                    data-slug=${childCat.slug}
                    data-parent=${childIdx} data-title=${childCat.name}
                    data-sub="28">${childCat.name}
                </button>
                `
                childrenContainer.appendChild(childElement)

                // for grandchildren
                const grandchildrenContainer = document.getElementById("grand-category")
                childCat.children.forEach((grandchildCat, grandchildIdx) => {
                    if (grandchildCat) {
                        const grandchildElement = document.createElement("li");
                        grandchildElement.classList.add("bn-subfilter-item", "grandchild");
                        grandchildElement.setAttribute("style", "transform: scale(1); opacity: 1;");

                        grandchildElement.innerHTML = `
                            <button 
                                class="bn-subfilter"
                                data-slug=${grandchildCat.slug}
                                data-parent=${childIdx} data-title=${grandchildCat.name} 
                                data-sub="28">${grandchildCat.name}
                            </button>
                            `
                        grandchildrenContainer.appendChild(grandchildElement)
                    }
                })
            })
        })

        addEventListeners()
    }

    function addEventListeners() {
        const parents = document.querySelectorAll(".parent")
        const childs = document.querySelectorAll(".child")
        const grandchilds = document.querySelectorAll(".grandchild");

        parents.forEach(parent => {
            parent.addEventListener("click", function(e) {
                if (e.target === parent || e.target.tagName === "BUTTON") {
                    toggleChildren(parent);
                }
            })
        })

        childs.forEach(child => {
            child.addEventListener("click", function(e) {
                if (e.target === child || e.target.tagName === "BUTTON") {
                    toggleChildren(child);
                }
            })
        })

        grandchilds.forEach(grandChild => {
            grandChild.addEventListener("click", function(e) {
                if (e.target === grandChild || e.target.tagName === "BUTTON") {
                    toggleChildren(grandChild)
                }
            })
        })
    }

    function toggleChildren(parent) {
        let tempParent = parent.children[0].getAttribute("data-slug")
        const parentEle = document.querySelectorAll(".parent")
        const childContent = document.querySelector(".sub-category")
        const grandchilds = document.querySelectorAll(".grandchild")

        parentEle.forEach(p => {
            // console.log(p)
            if (p !== parent) {
                const c = document.querySelector(".child")

            }
        })


    }


    // createCategoryTree()

    function getData(callback) {
        let URl = "http://localhost/omnicore/assets/js/data.json"
        fetch(URl)
            .then(response => response.json())
            .then(result => {
                // console.log(result);
                callback(result)
            })
    }

    getData(data => {
        data.forEach(item => {
            document.getElementById('parent-category').innerHTML += `<li class="parent bn-filter-item" data-slug="${item.slug}">${item.name}</li>`
        })

        document.querySelectorAll('.parent').forEach((item, key) => {

            item.addEventListener('click', function(e) {
                let slug = e.target.getAttribute('data-slug');


                document.querySelectorAll('.parent').forEach((items, keys) => {
                    if (keys == key) {

                        items.classList.add('active');


                        data.forEach(x => {
                       
                            if (slug == x.slug) {
                                x.children.forEach(w => {
                                    document.getElementById("sub-category").innerHTML += `
                                     <li class="bn-filter-item" >${w.name}</li>
                                    `
                                })
                            }
                        })


                    } else {
                        items.classList.remove('active');
                    }
                })
            })
        })

    })
</script>