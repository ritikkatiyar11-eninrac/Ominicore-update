<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="<?= base_url('assets/fonts/fonts.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        
    </style>
</head>

<body>
    <div>

        <header>
            <div class="container">
                <div class="d-flex justify-content-between" style="padding: 20px 0 0;">
                    <div class="logo">
                        <a href="">
                            <img src="<?= base_url() ?>assets/images/logo_dark.png" style="max-width: 200px;" id="logo-img" alt="logo">
                        </a>
                    </div>
                    <ul style="margin-bottom: 0;"></ul>
                    <ul class="d-flex list-style-none" style="margin-bottom: 0;">
                        <li class="subscriptions py-2 px-3 border cursor-pointer" style="border-width:1px;border-style:solid;padding:13px 37px;">
                            <a href="" target="_blank" rel="noopener noreferrer">subscriptions</a>
                        </li>
                        <li class="NewsLetter py-2 px-3 border cursor-pointer" style="border-width:1px;border-style:solid;padding:13px 37px;">
                            <a href="" target="_blank" rel="noopener noreferrer">NewsLetter</a>
                        </li>
                    </ul>
                </div>
                <div class="bn-filter-tabs-mobile"></div>
                <div class="bn-controls-wrapper">
                    <div class="bn-filter-tab-wrapper" style="margin-bottom: 15px; padding:15px 0 0;">
                        <div class="bn-filter-tabs-inner">
                            <ul class="list-style-none d-flex justify-content-between" style="padding-left: 0; margin-bottom:0;">
                                <li class="bn-filter-item text-center flex-grow-1" style="margin-right: 5px;">
                                    <button class="bn-filter w-100  active bn-filter-top fs-14 border-0 fw-bold" data-slug="central" data-parent="false" data-group="1" data-title="Central" style="padding: 8px 12px; margin-bottom:5px; line-height: 25px;">
                                        Central
                                    </button>
                                </li>
                                <li class="bn-filter-item text-center flex-grow-1" style="margin-right: 5px;">
                                    <button class="bn-filter w-100   bn-filter-top fs-14 border-0 fw-bold" data-slug="state" data-parent="false" data-group="2" data-title="State" style="padding: 8px 12px; margin-bottom:5px; line-height: 25px;">
                                        State
                                    </button>
                                </li>
                                <li class="bn-filter-item text-center flex-grow-1" style="margin-right: 5px;">
                                    <button class="bn-filter w-100   bn-filter-top fs-14 border-0 fw-bold" data-slug="generation" data-parent="false" data-group="3" data-title="Generation" style="padding: 8px 12px; margin-bottom:5px; line-height: 25px;">
                                        Generation
                                    </button>
                                </li>
                                <li class="bn-filter-item text-center flex-grow-1" style="margin-right: 5px;">
                                    <button class="bn-filter w-100   bn-filter-top fs-14 border-0 fw-bold" data-slug="distribution" data-parent="false" data-group="4" data-title="Distribution" style="padding: 8px 12px; margin-bottom:5px; line-height: 25px;">
                                        Distribution
                                    </button>
                                </li>
                                <li class="bn-filter-item text-center flex-grow-1" style="margin-right: 5px;">
                                    <button class="bn-filter w-100   bn-filter-top fs-14 border-0 fw-bold" data-slug="transmission" data-parent="false" data-group="5" data-title="Transmission" style="padding: 8px 12px; margin-bottom:5px; line-height: 25px;">
                                        Transmission
                                    </button>
                                </li>
                                <li class="bn-filter-item text-center flex-grow-1" style="margin-right: 5px;">
                                    <button class="bn-filter w-100   bn-filter-top fs-14 border-0 fw-bold" data-slug="bid updates" data-parent="false" data-group="6" data-title="Bid Updates" style="padding: 8px 12px; margin-bottom:5px; line-height: 25px;">
                                        Bid Updates
                                    </button>
                                </li>
                                <li class="bn-filter-item text-center flex-grow-1" style="margin-right: 5px;">
                                    <button class="bn-filter w-100   bn-filter-top fs-14 border-0 fw-bold" data-slug="infographics" data-parent="false" data-group="7" data-title="Infographics" style="padding: 8px 12px; margin-bottom:5px; line-height: 25px;">
                                        Infographics
                                    </button>
                                </li>
                                <li class="bn-filter-item text-center flex-grow-1" style="margin-right: 5px;">
                                    <button class="bn-filter w-100   bn-filter-top fs-14 border-0 fw-bold" data-slug="openaccess" data-parent="false" data-group="8" data-title="Open Access" style="padding: 8px 12px; margin-bottom:5px; line-height: 25px;">
                                        Open Access
                                    </button>
                                </li>
                                <li class="bn-filter-item text-center flex-grow-1" style="margin-right: 5px;">
                                    <button class="bn-filter w-100   bn-filter-top fs-14 border-0 fw-bold" data-slug="newenergies" data-parent="false" data-group="9" data-title="New Energies" style="padding: 8px 12px; margin-bottom:5px; line-height: 25px;">
                                        New Energies
                                    </button>
                                </li>
                                <li class="bn-filter-item text-center flex-grow-1" style="margin-right: 5px;">
                                    <button class="bn-filter w-100   bn-filter-top fs-14 border-0 fw-bold" data-slug="solarrooftop" data-parent="false" data-group="10" data-title="Solar Rooftop" style="padding: 8px 12px; margin-bottom:5px; line-height: 25px;">
                                        Solar Rooftop
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="bn-subfilter-tabs-inner">
                            <div class="bn-subfilter-tabs">
                                <ul class="d-flex flex-wrap list-style-none" data-category="central" style="margin-bottom: 0; margin-top: 5px; padding-left: 0;">
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0" data-slug="central-cerc" data-parent="1" data-title="cerc" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">CERC</button>
                                    </li>
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="central-mop" data-parent="1" data-title="mop" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">MOP</button>
                                    </li>
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0" data-slug="central-mnre" data-parent="1" data-title="mnre" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">MNRE</button>
                                    </li>
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="central-mof" data-parent="1" data-title="mof" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">MOF</button>
                                    </li>
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0" data-slug="central-moc" data-parent="1" data-title="moc" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">MOC</button>
                                    </li>
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0" data-slug="central-aptel" data-parent="1" data-title="aptel" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">APTEL</button>
                                    </li>
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="central-supremecourt" data-parent="1" data-title="supreme court" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Supreme Court</button>
                                    </li>
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="central-others" data-parent="1" data-title="others" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Others</button>
                                    </li>
                                </ul>
                                <!-- second data group state -->
                                <ul class="d-flex flex-wrap list-style-none" data-category="state" style="margin-bottom: 0; margin-top: 5px; padding-left: 0;">
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0" data-slug="state-gujrat" data-parent="2" data-title="Gujrat" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Gujrat</button>
                                    </li>
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="state-maharashtra" data-parent="2" data-title="maharashtra" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Maharashtra</button>
                                    </li>
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0" data-slug="state-rajasthan" data-parent="2" data-title="rajsthan" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Rajsthan</button>
                                    </li>
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="state-panjab" data-parent="2" data-title="panjab" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Panjab</button>
                                    </li>
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="state-others" data-parent="2" data-title="others" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Others</button>
                                    </li>
                                </ul>
                                <!-- third data group generation -->
                                <ul class="d-flex flex-wrap list-style-none" data-category="generation" style="margin-bottom: 0; margin-top: 5px; padding-left: 0;">
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0" data-slug="generation-thermal" data-parent="3" data-title="thermal" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Thermal</button>
                                    </li>
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="generation-solar" data-parent="3" data-title="solar" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Solar</button>
                                    </li>
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="generation-wind" data-parent="3" data-title="wind" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Wind</button>
                                    </li>
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="generation-biomass" data-parent="3" data-title="biomass" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Biomass</button>
                                    </li>
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="generation-shb" data-parent="3" data-title="shb" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">SHB</button>
                                    </li>
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="generation-bess" data-parent="3" data-title="bess" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">BESS</button>
                                    </li>

                                </ul>
                                <!-- fourth data group Distribution -->
                                <ul class="d-flex flex-wrap list-style-none" data-category="distribution" style="margin-bottom: 0; margin-top: 5px; padding-left: 0;">
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0" data-slug="distribution-tariff" data-parent="4" data-title="tariff" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Tariff</button>
                                    </li>
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="distribution-c&iconsumers" data-parent="4" data-title="c&i consumers" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">C&I Consumers</button>
                                    </li>
                                </ul>
                                <!-- fifth data group transmission -->
                                <ul class="d-flex flex-wrap list-style-none" data-category="transmission" style="margin-bottom: 0; margin-top: 5px; padding-left: 0;">
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0" data-slug="transmission-connectivity" data-parent="5" data-title="connectivity" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Connectivity</button>
                                    </li>
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="transmission-charges" data-parent="5" data-title="charges" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Charges</button>
                                    </li>
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="transmission-ists" data-parent="5" data-title="ists" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">ISTS</button>
                                    </li>
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0" data-slug="transmission-nwautomation" data-parent="5" data-title="nwautomation" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">N/W Automation</button>
                                    </li>
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="transmission-govtannouncements" data-parent="5" data-title="govtannouncements" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Govt Announcements</button>
                                    </li>
                                </ul>
                                <!-- sixth data group Bid updates -->
                                <ul class="d-flex flex-wrap list-style-none" data-category="bidupdates" style="margin-bottom: 0; margin-top: 5px; padding-left: 0;">
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0" data-slug="bidupdates-bidinviteseci&psu" data-parent="6" data-title="bidinviteseci&psu" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Bid invites ( SECI & PSU )</button>
                                    </li>
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="bidupdates-banking" data-parent="6" data-title="banking" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Banking</button>
                                    </li>
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="bidupdates-others" data-parent="6" data-title="others" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Others</button>
                                    </li>
                                </ul>
                                <!-- 8th data group openaccess -->
                                <ul class="d-flex flex-wrap list-style-none" data-category="openaccess" style="margin-bottom: 0; margin-top: 5px; padding-left: 0;">
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0" data-slug="openaccess-solar" data-parent="8" data-title="solar" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Solar</button>
                                    </li>
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="openaccess-wind" data-parent="8" data-title="wind" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Wind</button>
                                    </li>
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="openaccess-hybrid" data-parent="8" data-title="hybrid" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Hybrid</button>
                                    </li>
                                </ul>
                                <!-- 9th data group new energies -->
                                <ul class="d-flex flex-wrap list-style-none" data-category="newenergies" style="margin-bottom: 0; margin-top: 5px; padding-left: 0;">
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0" data-slug="newenergies-bess" data-parent="9" data-title="bess" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">BESS</button>
                                    </li>
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="newenergies-hydrogen" data-parent="9" data-title="hydrogen" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Hydrogen</button>
                                    </li>
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="newenergies-psph" data-parent="9" data-title="psph" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">PSPH</button>
                                    </li>
                                </ul>
                                <!-- 10th data group solar rooftop -->
                                <ul class="d-flex flex-wrap list-style-none" data-category="solarrooftop" style="margin-bottom: 0; margin-top: 5px; padding-left: 0;">
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0" data-slug="solarrooftop-regulations" data-parent="9" data-title="regulations" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Regulations</button>
                                    </li>
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="solarrooftop-policies" data-parent="9" data-title="policies" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Policies</button>
                                    </li>
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="solarrooftop-fit'starrif" data-parent="9" data-title="fit'stariff" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Fit's Tariff</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <script>
        const buttons = document.querySelectorAll("[data-slug]")
        const categories = document.querySelectorAll("[data-category]")

        buttons.forEach(item => {
            item.addEventListener("click", function(event) {
                let btn = item.getAttribute("data-slug")
                let dataCategory =
                    console.log(btn.split("-")[0])
            })

        })
    </script>
</body>

</html>