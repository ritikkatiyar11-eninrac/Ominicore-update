<ul class="side-menu">
    <li class="sub-category">
        <h3>Main</h3>
    </li>
    <li class="slide">
        <a class="side-menu__item" data-bs-toggle="slide" href="<?= base_url('backend-dashboard/autho/dashboard') ?>"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
    </li>
    <li class="sub-category">
        <h3>Attachments</h3>
    </li>
    <li class="slide">
        <a class="side-menu__item" data-bs-toggle="slide" href="<?= base_url('backend-dashboard/autho/media') ?>">
            <i class="side-menu__icon fe fe-image"></i>
            <span class="side-menu__label">Media</span>
        </a>
    </li>
    <li class="sub-category">
        <h3>Filter</h3>
    </li>
    <li class="slide">
        <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
            <i class="side-menu__icon fe fe-filter"></i>
            <span class="side-menu__label">Filter</span>
            <i class="angle fe fe-chevron-right"></i>
        </a>
        <ul class="slide-menu">
            <li><a href="<?= base_url() ?>console-admin/categories?type=amenities" class="slide-item">Amenities</a></li>
            <li><a href="<?= base_url() ?>console-admin/categories?type=activities" class="slide-item">Activities</a></li>
            <li><a href="<?= base_url() ?>console-admin/categories?type=categories" class="slide-item">Categories</a></li>
            <li><a href="<?= base_url() ?>console-admin/categories?type=hoteltypes" class="slide-item">Hoteltypes</a></li>
            <li><a href="<?= base_url() ?>console-admin/categories?type=inclusions" class="slide-item">Inclusions</a></li>
            <li><a href="<?= base_url() ?>console-admin/categories?type=meals" class="slide-item">Meals</a></li>
            <li><a href="<?= base_url() ?>console-admin/categories?type=roomtypes" class="slide-item">Roomtypes</a></li>
            <li><a href="<?= base_url() ?>console-admin/categories?type=tags" class="slide-item">Tags</a></li>
            <li><a href="<?= base_url() ?>console-admin/categories?type=vehicles" class="slide-item">Vehicles</a></li>
            
        </ul>
    </li>
    <li class="sub-category">
        <h3>Categories</h3>
    </li>
    <li class="sub-category">
        <h3>Posts</h3>
    </li>
    <li class="slide">
        <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
            <i class="side-menu__icon fe fe-globe"></i>
            <span class="side-menu__label">Pages</span>
            <i class="angle fe fe-chevron-right"></i>
        </a>
        <ul class="slide-menu">
            <li><a href="<?= base_url() ?>console-admin/post/?type=page&action=view" class="slide-item">All Pages</a></li>
            <li><a href="<?= base_url() ?>console-admin/post/?type=page&action=add" class="slide-item">Add Pages</a></li>
        </ul>
    </li>
    <li class="slide">
        <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
            <i class="side-menu__icon fe fe-file-text"></i>
            <span class="side-menu__label">Blogs</span>
            <i class="angle fe fe-chevron-right"></i>
        </a>
        <ul class="slide-menu">
            <li><a href="<?= base_url() ?>console-admin/post/?type=blog&action=view" class="slide-item">All Blogs</a></li>
            <li><a href="<?= base_url() ?>console-admin/post/?type=blog&action=add" class="slide-item">Add Blog</a></li>
        </ul>
    </li>
    <li class="slide">
        <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
            <i class="side-menu__icon fe fe-navigation-2"></i>
            <span class="side-menu__label">Destinations</span>
            <i class="angle fe fe-chevron-right"></i>
        </a>
        <ul class="slide-menu">
            <li><a href="<?= base_url() ?>console-admin/post/?type=destination&action=view" class="slide-item">All Destinations</a></li>
            <li><a href="<?= base_url() ?>console-admin/post/?type=destination&action=add" class="slide-item">Add Destination</a></li>
        </ul>
    </li>
</ul>