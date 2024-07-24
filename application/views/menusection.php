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
                            slug: "central-cerc-orders"
                        },
                        {
                            name: "petitions",
                            slug: "central-cerc-petitions"
                        },
                        {
                            name: "Consultation on Draft Regulations",
                            slug: "central-cerc-codr"
                        },
                        {
                            name: "Regulations",
                            slug: "central-cerc-regulation"
                        },
                        {
                            name: "Policies",
                            slug: "central-cerc-policy"
                        },
                        {
                            name: "Eninrac Comments on Draft Regulations",
                            slug: "central-cerc-ecodr"
                        },
                        {
                            name: "Public Hearings",
                            slug: "central-cerc-publichearings"
                        },
                        {
                            name: "Ammendments",
                            slug: "central-cerc-ammendments"
                        },
                        {
                            name: "MoM",
                            slug: "central-cerc-mom"
                        }
                    ]
                },
                {
                    name: "MoP",
                    slug: "central-mop",
                    children: [{
                            name: "Regulations",
                            slug: "central-mop-regulations"
                        },
                        {
                            name: "Policy",
                            slug: "central-mop-policy"
                        },
                        {
                            name: "Announcements",
                            slug: "central-mop-announcements"
                        }
                    ]
                },
                {
                    name: "MNRE",
                    slug: "central-mnre",
                    children: [{
                            name: "Regulations"
                        },
                        {
                            name: "Policy",
                            slug: "central-mnre-policy"
                        },
                        {
                            name: "Announcements",
                            slug: "central-mnre-announcements"
                        }
                    ]
                },
                {
                    name: "MoF",
                    slug: "central-mof",
                    children: [{
                        name: "Announcements",
                        slug: "central-mof-announcements"
                    }]
                },
                {
                    name: "MoC",
                    slug: "central-moc",
                    children: [{
                        name: "Announcements",
                        slug: "central-moc-announcements"
                    }]
                },
                {
                    name: "Apellate Tribunal",
                    slug: "central-apellatetribunal",
                    children: [{
                            name: "Landmark Judgements",
                            slug: "central-apellatetribunal-landmarkjudgements"
                        },
                        {
                            name: "Interim Orders",
                            slug: "central-apellatetribunal-interimorders"
                        },
                        {
                            name: "Final Orders",
                            slug: "central-apellatetribunal-finalorders"
                        }
                    ]
                },
                {
                    name: "Honb'le Supreme Court",
                    slug: "central-supremecourt",
                    children: [{
                            name: "Landmark Judgements",
                            slug: "central-supremecourt-landmarkjudgements"
                        },
                        {
                            name: "Interim Orders",
                            slug: "central-supremecourt-interimorders"
                        },
                        {
                            name: "Final Orders",
                            slug: "central-supremecourt-finalorders"
                        }
                    ]
                },
                {
                    name: "Others",
                    slug: "central-others",
                    children: []
                }
            ]
        },
        {
            name: "State",
            slug: "state",
            children: [{
                    name: "Gujrat",
                    slug: "state-gujrat",
                    children: [{
                        name: "GERC"
                    }]
                },
                {
                    name: "maharashtra",
                    slug: "state-maharashtra",
                    children: [{
                        name: "MERC",
                        slug: "state-maharashtra-merc"
                    }]
                },
                {
                    name: "Rajsthan",
                    slug: "state-rajsthan",
                    children: [{
                        name: "RERC",
                        slug: "state-rajsthan-rerc"
                    }]
                },
                {
                    name: "Panjab",
                    slug: "state-panjab",
                    children: [{
                        name: "PERC",
                        slug: "state-panjab-perc"
                    }]
                },
                {
                    name: "Haryana",
                    slug: "state-haryana",
                    children: [{
                        name: "HERC",
                        slug: "state-haryana-herc"
                    }]
                },
                {
                    name: "Uttarakhand",
                    slug: "state-uttarakhand",
                    children: [{
                        name: "UERC",
                        slug: "state-uttarakhand-uerc"
                    }]
                },
                {
                    name: "Odisa",
                    slug: "state-odisa",
                    children: [{
                        name: "OERC",
                        slug: "state-odisa-oerc"
                    }]
                },
                {
                    name: "Bihar",
                    slug: "state-bihar",
                    children: [{
                        name: "BERC",
                        slug: "state-bihar-berc"
                    }]
                },
                {
                    name: "Asam",
                    slug: "state-asam",
                    children: [{
                        name: "AERC",
                        slug: "state-asam-aerc"
                    }]
                },
                {
                    name: "others",
                    slug: "state-others",
                    children: []
                }
            ]
        },
        {
            name: "Generation",
            slug: "powergeneration",
            children: [{
                    name: "Thermal",
                    slug: "powergeneration-thermal",
                    children: []
                },
                {
                    name: "Solar",
                    slug: "powergeneration-solar",
                    children: []
                },
                {
                    name: "Wind",
                    slug: "powergeneration-wind",
                    children: []
                },
                {
                    name: "Biomass",
                    slug: "powergeneration-biomass",
                    children: []
                },
                {
                    name: "Small Hydro Plants",
                    slug: "powergeneration-smallhydro",
                    children: []
                },
                {
                    name: "Nuclear",
                    slug: "powergeneration-nuclear",
                    children: []
                },
                {
                    name: "Others",
                    slug: "powergeneration-others",
                    children: []
                }
            ]
        },
        {
            name: "Distribution",
            slug: "powerdistribution",
            children: [{
                    name: "Tariff",
                    slug: "powerdistribution-tariff",
                    children: []
                },
                {
                    name: "C&I Consumers",
                    slug: "powerdistribution-ci",
                    children: []
                },
                {
                    name: "Network Augmentation",
                    slug: "powerdistribution-networkaugmentation",
                    children: []
                }
            ]
        },
        {
            name: "Transmission",
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
                    ]
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
                    ]
                },
                {
                    name: "Projects",
                    slug: "powertansmission-projects",
                    children: []
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
                    ]
                }
            ]
        },
        {
            name: "Bid Updates",
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
            ]
        },
        {
            name: "Infographics",
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
                }
            ]
        },
        {
            name: "New Energies",
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
                }
            ]
        },
        {
            name: "Solar Rooftop",
            slug: "solarrooftop",
            children: [{
                    name: "Regulations",
                    slug: "solarrooftop-regulations",
                    children: []
                },
                {
                    name: "Policies",
                    slug: "solarrooftop-policies",
                    children: []
                },
                {
                    name: "Feed in Tariffs",
                    slug: "solarrooftop-feedintariffs",
                    children: []
                }
            ]
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
                        },
                        {
                            name: "Duty",
                            slug: "openaccess-solar-duty",
                            children: []
                        },
                        {
                            name: "Waivers",
                            slug: "openaccess-solar-waivers",
                            children: []
                        },
                        {
                            name: "Banking",
                            slug: "openaccess-solar-banking",
                            children: []
                        }
                    ]
                },
                {
                    name: "Wind",
                    slug: "openaccess-wind",
                    children: [{
                            name: "Charges",
                            slug: "openaccess-wind-charges",
                            children: []
                        },
                        {
                            name: "Duty",
                            slug: "openaccess-wind-duty",
                            children: []
                        },
                        {
                            name: "Waivers",
                            slug: "openaccess-wind-waivers",
                            children: []
                        },
                        {
                            name: "Banking",
                            slug: "openaccess-wind-banking",
                            children: []
                        }
                    ]
                },
                {
                    name: "Hybrid",
                    slug: "openaccess-hybrid",
                    children: [{
                            name: "Charges",
                            slug: "openaccess-hybrid-charges",
                            children: []
                        },
                        {
                            name: "Duty",
                            slug: "openaccess-hybrid-duty",
                            children: []
                        },
                        {
                            name: "Waivers",
                            slug: "openaccess-hybrid-waivers",
                            children: []
                        },
                        {
                            name: "Banking",
                            slug: "openaccess-hybrid-banking",
                            children: []
                        }
                    ]
                }
            ]
        }
    ]

    function renderCategories() {
        const parentCategory = document.getElementById("parent-category");
        parentCategory.innerHTML = "";
        categories.forEach((category, index) => {
            const li = document.createElement("li");
            li.className = "bn-filter-item";
            
            const btn = document.createElement("button")
            btn.className = "bn-filter bn-filter-top";
            btn.dataset.slug = category.slug;
            btn.dataset.title = category.name;
            btn.dataset.index = index;
            btn.textContent = category.name;
            btn.addEventListener("click", () =>
                showSubCategories(category, index)
            );
            li.appendChild(btn)
            parentCategory.appendChild(li);
        });
    }


    function showSubCategories(category, parentIndex) {
        const subCategory = document.getElementById("sub-category");
        let grandCategory = document.getElementById("grand-category");
        subCategory.innerHTML = "";
        grandCategory.innerHTML = "";
        category.children.forEach((sub, subIndex) => {
            const li = document.createElement("li");
            li.className = "bn-subfilter-item";
            li.style ="transform: scale(1); opacity: 1;"
            const btn = document.createElement("button")
            btn.className = "bn-subfilter child ";
            btn.dataset.slug = sub.slug;
            btn.dataset.title = sub.name;
            btn.dataset.parentIndex = parentIndex;
            btn.dataset.subIndex = subIndex;
            btn.textContent = sub.name;
            btn.addEventListener("click", () => {
                setActive("sub-category", subIndex);
                setActive("parent-category", parentIndex);
                showGrandCategories(sub, subIndex);
            });
            li.appendChild(btn)

            subCategory.appendChild(li);
        });
        setActive("parent-category", parentIndex);
    }

    function showGrandCategories(subCategory) {
        const grandCategory = document.getElementById("grand-category");
        grandCategory.innerHTML = "";
        if (subCategory.children) {
            subCategory.children.forEach((grand) => {
                const li = document.createElement("li");
                li.className = "bn-subfilter-item";
                li.style = "transform: scale(1); opacity: 1;"
                const btn = document.createElement("button")
                btn.className = "bn-subfilter";
                btn.dataset.slug = grand.slug;
                btn.dataset.title = grand.name;
                btn.textContent = grand.name;
                li.appendChild(btn)

                grandCategory.appendChild(li);


            });
        }
    }

    function setActive(listId, index) {
        const items = document.getElementById(listId).children;
        // console.log(items)
        for (let i = 0; i < items.length; i++) {
            items[i].firstChild.classList.remove("bn-subfilter--active");
        }
        items[index].firstChild.classList.add("bn-subfilter--active");
    }


    document.addEventListener("DOMContentLoaded", () => {
        renderCategories();
    });
</script>