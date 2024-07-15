<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('assets/fonts/fonts.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
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
                                    <button class="bn-filter w-100  active bn-filter-top fs-14 border-0 fw-bold" data-slug="central" data-group="1" data-title="Central" style="padding: 8px 12px; margin-bottom:5px; line-height: 25px;">
                                        Central
                                    </button>
                                </li>
                                <li class="bn-filter-item text-center flex-grow-1" style="margin-right: 5px;">
                                    <button class="bn-filter w-100   bn-filter-top fs-14 border-0 fw-bold" data-slug="state" data-group="2" data-title="State" style="padding: 8px 12px; margin-bottom:5px; line-height: 25px;">
                                        State
                                    </button>
                                </li>
                                <li class="bn-filter-item text-center flex-grow-1" style="margin-right: 5px;">
                                    <button class="bn-filter w-100   bn-filter-top fs-14 border-0 fw-bold" data-slug="generation" data-group="3" data-title="Generation" style="padding: 8px 12px; margin-bottom:5px; line-height: 25px;">
                                        Generation
                                    </button>
                                </li>
                                <li class="bn-filter-item text-center flex-grow-1" style="margin-right: 5px;">
                                    <button class="bn-filter w-100   bn-filter-top fs-14 border-0 fw-bold" data-slug="distribution" data-group="4" data-title="Distribution" style="padding: 8px 12px; margin-bottom:5px; line-height: 25px;">
                                        Distribution
                                    </button>
                                </li>
                                <li class="bn-filter-item text-center flex-grow-1" style="margin-right: 5px;">
                                    <button class="bn-filter w-100   bn-filter-top fs-14 border-0 fw-bold" data-slug="transmission" data-group="5" data-title="Transmission" style="padding: 8px 12px; margin-bottom:5px; line-height: 25px;">
                                        Transmission
                                    </button>
                                </li>
                                <li class="bn-filter-item text-center flex-grow-1" style="margin-right: 5px;">
                                    <button class="bn-filter w-100   bn-filter-top fs-14 border-0 fw-bold" data-slug="bid updates" data-group="6" data-title="Bid Updates" style="padding: 8px 12px; margin-bottom:5px; line-height: 25px;">
                                        Bid Updates
                                    </button>
                                </li>
                                <li class="bn-filter-item text-center flex-grow-1" style="margin-right: 5px;">
                                    <button class="bn-filter w-100   bn-filter-top fs-14 border-0 fw-bold" data-slug="infographics" data-group="7" data-title="Infographics" style="padding: 8px 12px; margin-bottom:5px; line-height: 25px;">
                                        Infographics
                                    </button>
                                </li>
                                <li class="bn-filter-item text-center flex-grow-1" style="margin-right: 5px;">
                                    <button class="bn-filter w-100   bn-filter-top fs-14 border-0 fw-bold" data-slug="open access" data-group="8" data-title="Open Access" style="padding: 8px 12px; margin-bottom:5px; line-height: 25px;">
                                        Open Access
                                    </button>
                                </li>
                                <li class="bn-filter-item text-center flex-grow-1" style="margin-right: 5px;">
                                    <button class="bn-filter w-100   bn-filter-top fs-14 border-0 fw-bold" data-slug="new energies" data-group="9" data-title="New Energies" style="padding: 8px 12px; margin-bottom:5px; line-height: 25px;">
                                        New Energies
                                    </button>
                                </li>
                                <li class="bn-filter-item text-center flex-grow-1" style="margin-right: 5px;">
                                    <button class="bn-filter w-100   bn-filter-top fs-14 border-0 fw-bold" data-slug="solar rooftop" data-group="10" data-title="Solar Rooftop" style="padding: 8px 12px; margin-bottom:5px; line-height: 25px;">
                                        Solar Rooftop
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="bn-subfilter-tabs-inner">
                            <div class="bn-subfilter-tabs">
                                <ul class="d-flex flex-wrap list-style-none" style="margin-bottom: 0; margin-top: 5px; padding-left: 0;">
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0" data-slug="centralcerc" data-parent="1" data-title="cerc" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">CERC</button>
                                    </li>
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="centralmop" data-parent="1" data-title="mop" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">MOP</button>
                                    </li>
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0" data-slug="centralmnre" data-parent="1" data-title="mnre" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">MNRE</button>
                                    </li>
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="centralmof" data-parent="1" data-title="mof" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">MOF</button>
                                    </li>
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0" data-slug="centralmoc" data-parent="1" data-title="moc" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">MOC</button>
                                    </li>
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0" data-slug="centralaptel" data-parent="1" data-title="aptel" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">APTEL</button>
                                    </li>
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="centralsupremecourt" data-parent="1" data-title="supreme court" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Supreme Court</button>
                                    </li>
                                    <li class="bn-subfilter-item" style="transform:scale(1); opacity:1;">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="centralothers" data-parent="1" data-title="others" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Others</button>
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
        console.log("Hello")
        const buttons = document.querySelectorAll("[data-slug]")
        buttons.forEach(item => {
            item.addEventListener("click", function() {
                let btn = item.innerHTML
                console.log(btn)
            })

        })
    </script>
</body>

</html>