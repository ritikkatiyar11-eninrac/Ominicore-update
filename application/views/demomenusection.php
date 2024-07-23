<style>
    .toggleClass {
        transform: scale(1);
        opacity: 1;
    }

    .showTransition {
        transform: translateY(10px);
        opacity: 0;
    }

    @media (min-width: 941px) {

        body[data-view=page] .bn-controls-wrapper,
        body[data-view=single] .bn-controls-wrapper {
            display: none;
            height: 0;
            opacity: 0;
            overflow: hidden;
            pointer-events: none;
            visibility: hidden
        }
    }


    .bn-filter-tab-wrapper {
        display: block;
        padding: 10px 20px 0
    }

    @media (min-width: 501px) {
        .bn-filter-tab-wrapper {
            padding: 20px 20px 0
        }
    }

    @media (min-width: 941px) {
        .bn-filter-tab-wrapper {
            display: block;
            margin-bottom: 15px;
            padding: 15px 0 0;
            position: static
        }
    }

    @media (min-width: 1201px) {
        .bn-filter-tab-wrapper .bn-filter-tabs ul {
            display: flex;
            justify-content: space-between
        }
    }

    .bn-filter-tab-wrapper .bn-filter-item {
        display: inline-block;
        margin-right: 5px
    }

    @media (min-width: 1201px) {
        .bn-filter-tab-wrapper .bn-filter-item {
            display: block;
            flex-grow: 1;
            justify-content: center;
            text-align: center
        }
    }

    .bn-filter-tab-wrapper .bn-filter-item:last-child {
        margin-right: 0
    }

    .bn-filter-tab-wrapper .bn-filter-item .bn-filter {

        cursor: pointer;
        display: block;
        font-size: 14px;
        margin-bottom: 5px;
        padding: 3px 7px;
        position: relative;
        text-transform: capitalize;
        transition: all .2s ease-out;
        width: 100%
    }

    /* .bn-filter-tab-wrapper .bn-filter-item .bn-filter:hover {
    background: #1e1e21
} */

    .bn-filter-tab-wrapper .bn-filter-item .bn-filter:after {
        content: "\e804";
        display: none;

        font-size: 10px;
        font-weight: 400;
        margin-left: 5px;
        transform: translateY(-1px)
    }

    @media (min-width: 801px) {
        .bn-filter-tab-wrapper .bn-filter-item .bn-filter {
            font-weight: 700;
            line-height: 25px
        }
    }

    @media (min-width: 1201px) {
        .bn-filter-tab-wrapper .bn-filter-item .bn-filter {
            padding: 8px 12px
        }
    }



    @media (min-width: 941px) {
        .bn-controls-wrapper {
            background: none;
            height: auto;
            padding: 0;
            position: static;
            transform: none;
            width: 100%;
            z-index: 3;
        }
    }
</style>
<div class="container-xl">
    <div class="bn-controls-wrapper">
        <div class="container-xl p-0">
            <div class="bn-filter-tab-wrapper">
                <div class="bn-filter-tabs-inner">
                    <ul class="list-style-none d-flex flex-wrap" id="parent-category"></ul>
                </div>
                <div class="bn-subfilter-tabs-inner">
                    <div class="bn-subfilter-tabs">
                        <ul class="list-style-none d-flex flex-wrap" id="sub-category"></ul>
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
                    children: ["orders", "petitions", "Consultation on Draft Regulations", "Regulations", "Policies", "Eninrac Comments on Draft Regulations", "Public Hearings", "Ammendments", "MOM"],
                },
                {
                    name: "MOP",
                    children: ["Regulations", "Policy", "Announcements"],
                },
                {
                    name: "MNRE",
                    children: ["Regulations", "Policy", "Announcements"],
                },
                {
                    name: "MOF",
                    children: ["Announcements"],
                },
                {
                    name: "MOC",
                    children: ["Announcements"],
                },
                {
                    name: "Apellate Tribunal",
                    children: ["Landmark Judgements", "Interim Orders", "Final Orders"],
                },
                {
                    name: "Honb'le Supreme Court",
                    children: ["Landmark Judgements", "Interim Orders", "Final Orders"],
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
                    children: ["GERC"],
                },
                {
                    name: "maharashtra",
                    children: ["MERC"],
                },
                {
                    name: "Rajsthan",
                    children: ["RERC"],
                },
                {
                    name: "Panjab",
                    children: ["PERC"],
                },
                {
                    name: "Haryana",
                    children: ["HERC"],
                },
                {
                    name: "Uttarakhand",
                    children: ["UERC"],
                },
                {
                    name: "Odisa",
                    children: ["OERC"],
                },
                {
                    name: "Bihar",
                    children: ["BERC"],
                },
                {
                    name: "Asam",
                    children: ["AERC"],
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
                    children: ["Charges", "Duty", "Waivers", "Banking"],
                },
                {
                    name: "Wind",
                    children: ["Charges", "Duty", "Waivers", "Banking"],
                },
                {
                    name: "Hybrid",
                    children: ["Charges", "Duty", "Waivers", "Banking"],
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
                bn-filter bn-filter-top bn-filter--active border-0"
                data-slug=${pCat.name} 
                data-parent=${idx} data-title=${pCat.name} data-sub=""
                style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">${pCat.name}</button>`
            categorytree.appendChild(categoryElement)

            // for child
            const childrenContainer = document.getElementById("sub-category")
            // console.log(childrenContainer)
            pCat.children.forEach((childCat, childIdx) => {
                const childElement = document.createElement("li");
                childElement.classList.add("bn-subfilter-item", "child");
                childElement.setAttribute("style", "transform: scale(1); opacity: 1;")
                childElement.innerHTML = `
                <button class="bn-subfilter" data-slug=${ptemp.name.concat(childCat)} data-parent=${pCat.idx} data-title=${childCat.name} data-sub="28">${childCat.name}</button>
                `
                childrenContainer.appendChild(childElement)
            })
        })

    }

    createCategoryTree()
</script>