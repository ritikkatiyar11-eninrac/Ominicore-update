<?php require(APPPATH . 'views/frontend/header.php'); ?>
<?php require(APPPATH . 'views/frontend/menu.php'); ?>

<style>
    .grid-areas-materialLG {
        display: grid;
        max-width: 62.5rem;
        width: 100%;
        margin-bottom: 2rem;
        align-items: flex-start;
        column-gap: 2rem;
        grid-template-areas:
            "kicker"
            "headline"
            "standfirst"
            "media"
            "sponsor"
            "byline"
            "dateline"
            "toolbar"
            "series"
            "content";
    }

    @media (min-width: 1280px) {
        .grid-in-series {
            grid-area: series;
        }
    }

    @media (min-width: 1280px) {
        .grid-areas-materialLG {
            grid-template-areas:
                "kicker headline"
                "sponsor headline"
                "sponsor standfirst"
                "sponsor ."
                "byline media"
                "dateline media"
                "toolbar media"
                ". media"
                ". series"
                ". content";
        }
    }

    @media (min-width: 1280px) {
        .grid-col-13rem {
            grid-template-columns: 13rem;
        }

        .lg-max-w-col-1 {
            max-width: 13rem;
        }

        .lg-justify-between {
            justify-content: space-between;
        }
    }

    @media (min-width: 1280px) {
        .lg-w-col-2 {
            width: 28rem;
        }
    }

    @media (min-width: 520px) {
        .xs-justify-end {
            justify-content: flex-end;
        }
    }
</style>
<?php
$posts = [];
$post = $this->db->select('*')->from('post')->where('id', $id)->get();
if ($post->num_rows() > 0) {
    $posts = $post->result()[0];
    $filter = $this->db->select('DB_ID,NAME,URL_SLUG')->from('filter')
        ->where('TYPE', "tags")->where('OBJECT_ID', $id)
        ->join('filter_post_relationship', 'filter_post_relationship.RELATION_ID = filter.DB_ID')
        ->get();
    if ($filter->num_rows() > 0) {
        $posts->filters = $filter->result_array();
    } else {
        $posts->filters = [];
    }
    $prev_post = $this->db->select('slug')->from('post')->where('ID <', $id)->where('status', 1)->limit(1)->order_by('id', 'desc')->get();
    $old_post = $prev_post->num_rows() > 0 ? $prev_post->row('slug') : "";

    $next_post = $this->db->select('slug')->from('post')->where('ID >', $id)->where('status', 1)->limit(1)->order_by('id', 'asc')->get();
    $new_post = $next_post->num_rows() > 0 ? $next_post->row('slug') : "";

    $featureImage = $this->db->select('POST_VALUE')->from('postmeta')->where('POST_ID', $id)->where('POST_KEY', 'feature_image')->get();
    $posts->feature_image = $featureImage->num_rows() > 0 ? $featureImage->result()[0]->POST_VALUE : "";

    $source = $this->db->select('POST_VALUE')->from('postmeta')->where('POST_ID', $id)->where('POST_KEY', 'source')->get();
    $posts->source = $source->num_rows() > 0 ? $source->result()[0]->POST_VALUE : "";

    $today = date("Y-m-d");
    $publish_data = date_format(date_create($posts->created_at), "Y-m-d");
    $post_date = $today == $publish_data ? $this->CI->time_elapsed_string($posts->created_at) : date_format(date_create($posts->created_at), "F d,Y");
}
?>
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url() ?>"><i class="icofont-home"></i></a></li>
            <li class="breadcrumb-item"><a href="<?= base_url() ?>post/">Post</a></li>
            <li class="breadcrumb-item active"><?= $posts->title ?></li>
        </ol>
    </nav>
</div>
<main class="py-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <article>
                    <div>
                        <div style="border-radius: 10px;position: relative;overflow: hidden;">
                            <div class="bg-overlay" style="background: linear-gradient(180deg, transparent 48%, rgba(0, 0, 0, 0.8) 86%);position: absolute;top: 0;left: 0;width: 100%;height: 100%;"></div>
                            <img src="<?= base_url() ?>assets/om-upload/<?= $posts->feature_image ?>" alt="" style="width: 100%;height: 350px;object-fit: cover;">
                            <div style="position: absolute;bottom: 10px;left: 15px;color: white;right: 15px;">
                                <span class="fs-14 mb-2 d-block"><?= $post_date ?></span>
                                <h1 class="fs-25 fw-bold"><?= $posts->title ?></h1>
                            </div>
                        </div>
                        <div class="bn-single-image--actions bn-single-meta-col d-flex justify-content-between py-2">
                            <div class="bn-single-image--action">
                                <a href="<?= $old_post != '' ? base_url() . 'post/' . $old_post : 'javascript:void(0)' ?>" class="bn-single-nav btn btn-sm d-flex align-items-center  bn-single-nav--prev bn-single-nav--active">
                                    <i class="icofont-long-arrow-left fs-20"></i><span>Older</span>
                                </a>
                            </div>
                            <div class="bn-single-image--action">
                                <a href="<?= $new_post != '' ? base_url() . 'post/' . $new_post : 'javascript:void(0)' ?>" class="bn-single-nav btn btn-sm d-flex align-items-center  bn-single-nav--next bn-single-nav--active">
                                    <span>Newer</span><i class="icofont-long-arrow-right fs-20"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="py-2" style="line-height: 1.5;">
                        <?= $posts->content ?>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="fs-20 d-flex justify-content-start align-items-center me-2">
                                <span class="fs-14 me-3">Share</span>
                                <ul class="social-media-share d-flex gap-2">
                                    <li>
                                        <a class="text-primary-700" onclick="shareLinkedin(this)" data-url="<?= current_url() ?>" href="JavaScript:void(0)" rel="noreferrer nofollow">
                                            <i class="icofont-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-primary-700" onclick="sharetwitter(this)" data-url="<?= current_url() ?>" href="JavaScript:void(0)" rel="noreferrer nofollow">
                                            <i class="icofont-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-primary-700" onclick="sharefb(this)" data-url="<?= current_url() ?>" href="JavaScript:void(0)" rel="noreferrer nofollow">
                                            <i class="icofont-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-primary-700" href="javascript:void(0);" onclick="javascript:window.print();">
                                            <i class="icofont-print"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="source-link d-flex justify-content-end gap-3 py-2">
                                <?php if (!empty($posts->source)) {
                                    $sourceLink = json_decode($posts->source);
                                    foreach ($sourceLink->name as $key => $value) {
                                        echo "<a class='text-primary-800 fs-14' href='" . $sourceLink->value[$key] . "'> <i class='icofont-external-link'></i> " . $sourceLink->name[$key] . "</a>";
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <?php if (!empty($posts->filters)) { ?>
                        <div class="d-flex align-items-center fs-15 gap-1 w-100 mb-2">
                            <i class="icofont-tag fs-16" style="transform: rotate(90deg);"></i>
                            <span>Tags</span>
                        </div>
                        <div class="category-list">
                        <?php } ?>
                        <div class="">
                            <?php
                            foreach ($posts->filters as $key => $value) {
                                echo "<a class='d-inline-block text-primary-800 fs-14 mx-2 text-decoration-underline' href='" . base_url() .  $value['URL_SLUG'] . "'>" . $value['NAME'] . "</a>";
                            }
                            ?>
                        </div>
                        </div>
                </article>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</main>
<section class="py-5">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center py-4">
            <div class="fs-20">
                <svg width="32" height="32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.333 4H4v9.333h9.333V4ZM28 4h-9.333v9.333H28V4ZM28 18.667h-9.333V28H28v-9.333ZM13.333 18.667H4V28h9.333v-9.333Z" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                Related
            </div>
            <div class="fs-16">
                <a class="text-primary-700" href="<?= base_url() ?>post">See all <i class="icofont-simple-right"></i></a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row row-gap-3">
            <?php
            $filter_array = [];
            $filtersId = $this->db->select('RELATION_ID')->from('filter_post_relationship')->where('OBJECT_ID', $id)->get();
            if ($filtersId->num_rows() > 0) {
                foreach ($filtersId->result() as $value) {
                    $filter_array[] = $value->RELATION_ID;
                }
            }

            $related_post = $this->db->select('post.id,post.slug,post.created_at,post.title')->from('filter_post_relationship')
                ->where('OBJECT_ID !=', $id)->where('post.status', 1)->where_in('RELATION_ID', $filter_array)
                ->join('post', 'post.id = filter_post_relationship.OBJECT_ID')->limit(4)->group_by('post.id')
                ->order_by('RELATION_ID', 'RANDOM')->get();
            if ($related_post->num_rows() > 0) {
                foreach ($related_post->result() as $key => $value) {
                    $featureImage = $this->db->select('POST_VALUE')->from('postmeta')->where('POST_ID', $value->id)->where('POST_KEY', 'feature_image')->get();
                    $image = $featureImage->num_rows() > 0 ? $featureImage->result()[0]->POST_VALUE : "";

                    $today = date("Y-m-d");
                    $publish_data = date_format(date_create($value->created_at), "Y-m-d");
                    $post_date = $today == $publish_data ? $this->CI->time_elapsed_string($value->created_at) : date_format(date_create($value->created_at), "F d,Y");

                    echo "<div class='col-lg-3 col-md-6 col-sm-6'>
                                <div class='position-relative rounded overflow-hidden'>
                                    <div class='bg-overlay' style='background: linear-gradient(180deg, transparent 48%, rgba(0, 0, 0, 0.8) 86%);position: absolute;top: 0;left: 0;width: 100%;height: 100%;'></div>
                                    <img class='w-100' src='" . base_url() . "assets/om-upload/" . $image . "' alt='' style='height: 220px;object-fit: cover;'>
                                    <div class='fs-14 position-absolute text-darklight-100' style='bottom: 10px;left: 15px;right: 15px;'>
                                        <div class='mb-2'>" . $post_date . "</div>
                                        <a href='" . base_url() . "post/" . $value->slug . "'>
                                            <div class='card-title' style='line-height: 20px;color: white;'>" . $value->title . "</div>
                                        </a>
                                    </div>
                                </div>
                            </div>";
                }
            }
            ?>
        </div>
    </div>
</section>
<?php require(APPPATH . 'views/frontend/footer.php'); ?>