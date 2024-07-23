<?php require(APPPATH . 'views/header.php'); ?>
<div class="container-xl">
    <div class="bn-controls-wrapper">
        <div class="container-xl p-0">
            <div class="bn-filter-tab-wrapper">
                <div class="bn-filter-tabs-inner">
                    <div class="bn-filter-tabs">
                        <ul id="parent-category"></ul>
                    </div>
                </div>
                <div class="bn-subfilter-tabs-inner">
                    <div class="bn-subfilter-tabs">
                        <ul id="sub-category"></ul>
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
            children: [{
                    name: "CERC",
                    children: [{
                        name: "orders"
                    }, {
                        name: "petitions"
                    }, {
                        name: "Consultation on Draft Regulations"
                    }, {
                        name: "Regulations"
                    }, {
                        name: "Policies"
                    }, {
                        name: "Eninrac Comments on Draft Regulations"
                    }, {
                        name: "Public Hearings"
                    }, {
                        name: "Ammendments"
                    }, {
                        name: "MOM"
                    }],
                },
                {
                    name: "MOP",
                    children: [{
                        name: "Regulations"
                    }, {
                        name: "Policy"
                    }, {
                        name: "Announcements"
                    }],
                },
                {
                    name: "MNRE",
                    children: [{
                        name: "Regulations"
                    }, {
                        name: "Policy"
                    }, {
                        name: "Announcements"
                    }],
                },
                {
                    name: "MOF",
                    children: [{
                        name: "Announcements"
                    }],
                },
                {
                    name: "MOC",
                    children: [{
                        name: "Announcements"
                    }],
                },
                {
                    name: "Apellate Tribunal",
                    children: [{
                        name: "Landmark Judgements"
                    }, {
                        name: "Interim Orders"
                    }, {
                        name: "Final Orders"
                    }],
                },
                {
                    name: "Honb'le Supreme Court",
                    children: [{
                        name: "Landmark Judgements"
                    }, {
                        name: "Interim Orders"
                    }, {
                        name: "Final Orders"
                    }],
                },
                {
                    name: "others",
                    children: [],
                },
            ],
        },
        {
            name: "State",
            children: [{
                    name: "Gujrat",
                    children: [{
                        name: "GERC"
                    }],
                },
                {
                    name: "maharashtra",
                    children: [{
                        name: "MERC"
                    }],
                },
                {
                    name: "Rajsthan",
                    children: [{
                        name: "RERC"
                    }],
                },
                {
                    name: "Panjab",
                    children: [{
                        name: "PERC"
                    }],
                },
                {
                    name: "Haryana",
                    children: [{
                        name: "HERC"
                    }],
                },
                {
                    name: "Uttarakhand",
                    children: [{
                        name: "UERC"
                    }],
                },
                {
                    name: "Odisa",
                    children: [{
                        name: "OERC"
                    }],
                },
                {
                    name: "Bihar",
                    children: [{
                        name: "BERC"
                    }],
                },
                {
                    name: "Asam",
                    children: [{
                        name: "AERC"
                    }],
                },
                {
                    name: "others",
                    children: [],
                },
            ],
        },
        {
            name: "Power Generation",
            children: [{
                    name: "Thermal",
                    children: [],
                },
                {
                    name: "Solar",
                    children: [],
                },
                {
                    name: "Wind",
                    children: [],
                },
                {
                    name: "Biomass",
                    children: [],
                },
                {
                    name: "Small Hydro Plants",
                    children: [],
                },
                {
                    name: "Nuclear",
                    children: [],
                },
                {
                    name: "Others",
                    children: [],
                },

            ],
        },
        {
            name: "Power Distribution",
            children: [{
                name: "Tariff",
                children: []
            }, {
                name: "C&I Consumers",
                children: []
            }, {
                name: "Network Augmentation",
                children: []
            }],
        },
        {
            name: "Power Transmission",
            children: [{
                    name: "Connectivity",
                    children: [{
                            name: "STU",
                            children: []
                        },
                        {
                            name: "CTU",
                            children: []
                        }
                    ],
                },
                {
                    name: "Charges",
                    children: [{
                            name: "STU",
                            children: []
                        },
                        {
                            name: "CTU",
                            children: []
                        }
                    ],
                },
                {
                    name: "Projects",
                    children: [],
                },
                {
                    name: "Govt Announcements",
                    children: [{
                            name: "Central",
                            children: []
                        },
                        {
                            name: "State",
                            children: []
                        }
                    ],
                },
            ],
        },
        {
            name: "bidupdates",
            children: [{
                    name: "Bid Invites",
                    children: [{
                            name: "SECI",
                            children: []
                        },
                        {
                            name: "PSU",
                            children: []
                        },
                        {
                            name: "State Govt",
                            children: []
                        },
                        {
                            name: "Others",
                            children: []
                        }

                    ]
                },
                {
                    name: "Bid Results",
                    children: []
                },
                {
                    name: "Others",
                    children: []
                }
            ],
        },
        {
            name: "new energies",
            children: [{
                    name: "BESS",
                    children: []
                },
                {
                    name: "Hydrogen",
                    children: []
                },
                {
                    name: "PSHP (Pump Storage Hydro Plants)",
                    children: []
                },
            ],
        },
        {
            name: "Infographic",
            children: [{
                    name: "Central",
                    children: []
                },
                {
                    name: "State",
                    children: []
                },
                {
                    name: "Generation",
                    children: []
                },
                {
                    name: "Distribution",
                    children: []
                },
                {
                    name: "Transmission",
                    children: []
                },
                {
                    name: "Bid Updates",
                    children: []
                },
                {
                    name: "OpenAccess",
                    children: []
                },
                {
                    name: "New Energies",
                    children: []
                },
                {
                    name: "Misc",
                    children: []
                },

            ],
        },
        {
            name: "solar rooftop",
            children: [{
                    name: "Regulations",
                    children: []
                },
                {
                    name: "Policies",
                    children: []
                },
                {
                    name: "Feed in Tariffs",
                    children: []
                },
            ],
        },
        {
            name: "Open Access",
            children: [{
                    name: "Solar",
                    children: [{
                        name: "Charges",
                        children: []
                    }, {
                        name: "Duty",
                        children: []
                    }, {
                        name: "Waivers",
                        children: []
                    }, {
                        name: "Banking",
                        children: []
                    }],
                },
                {
                    name: "Wind",
                    children: [{
                        name: "Charges",
                        children: []
                    }, {
                        name: "Duty",
                        children: []
                    }, {
                        name: "Waivers",
                        children: []
                    }, {
                        name: "Banking",
                        children: []
                    }],
                },
                {
                    name: "Hybrid",
                    children: [{
                        name: "Charges",
                        children: []
                    }, {
                        name: "Duty",
                        children: []
                    }, {
                        name: "Waivers",
                        children: []
                    }, {
                        name: "Banking",
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
                    data-slug=${pCat.name} 
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
                    data-slug=${ptemp.name.concat(childCat.name)}
                    data-parent=${pCat.idx} data-title=${childCat.name}
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
                                data-slug=${ptemp.name.concat(childCat.name.concat(grandchildCat.name)).trim()}
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
        const grandchilds = document.querySelectorAll(".grandchild")

        parents.forEach(parent => {
            parent.addEventListener("click", function(e) {
                if (e.target === parent || e.target.tagName === "BUTTON") {
                    console.log(parent)
                }
            })
        })

        childs.forEach(child => {
            child.addEventListener("click", function(e) {
                if (e.target === child || e.target.tagName === "BUTTON") {
                    console.log(child)
                }
            })
        })

        grandchilds.forEach(grandChild => {
            grandChild.addEventListener("click", function(e) {
                if (e.target === grandChild || e.target.tagName === "BUTTON") {
                    console.log(grandChild)
                }
            })
        })

    }



    createCategoryTree()
</script>