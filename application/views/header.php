
    <header class="position-sticky top-0" style="background:rgba(255 255 255 / 90%);backdrop-filter:blur(2px); z-index:11;">
        <div class="container-xl">
            <div class="d-flex justify-content-between align-items-center" style="padding: 20px 0 0;">
                <div class="logo" style="max-width: 200px;" >
                    <a href="<?= base_url() ?>">
                        <img class="w-100" src="<?= base_url() ?>assets/images/logo_dark.png"  id="logo-img" alt="logo">
                    </a>
                </div>
                <ul style="margin-bottom: 0; padding-left:0;" class="d-flex flex-wrap gap-1 list-style-none" ></ul>
                <ul class="d-flex list-style-none" style="margin-bottom: 0;">
                   
                    <li class="subscriptions text-center d-flex justify-content-center align-items-center py-2 px-3 border cursor-pointer" style="padding:13px 37px;background-color: black;">
                        <a href="<?= base_url('subscribe') ?>" class="text-white" style="line-height:20px" target="_blank" rel="noopener noreferrer">Subscriptions</a>
                    </li>
                    <li class="NewsLetter  text-center d-flex justify-content-center align-items-center  py-2 px-3 border cursor-pointer" style="border-width:1px;border-style:solid;padding:13px 37px;">
                        <a href="<?= base_url('newsletter') ?>" class="text-dark" target="_blank" rel="noopener noreferrer">NewsLetter</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

