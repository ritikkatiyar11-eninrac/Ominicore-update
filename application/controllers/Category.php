<?php
defined('BASEPATH') or exit('No direct script access allowed');
require(APPPATH . 'controllers/Default_Controler.php');
class Category extends Default_Controler
{

    public function index()
    {
        $posts = $this->getallpost();
        $this->load->view('frontend/category', ['posts' => $posts]);
    }

    public function single($id)
    {
        $posts = $this->get_data_as_per_category($id);
        $this->load->view('frontend/category', ['posts' => $posts]);
    }

    private function getallpost()
    {
        $tranding_post_data = [];
        $html = "";
        $tranding = $this->db->select('id,title,content,slug,created_at')->from('post')->where('status', 1)->order_by('created_at', 'DESC')->get();
        if ($tranding->num_rows() > 0) {
            foreach ($tranding->result() as $key => $row) {
                $filter_Array = [];
                $feature_image = $this->db->select('POST_VALUE')->from('postmeta')->where('POST_ID', $row->id)->where('POST_KEY', 'feature_image')->get()->row('POST_VALUE');
                $meta_description = $this->db->select('POST_VALUE')->from('postmeta')->where('POST_ID', $row->id)->where('POST_KEY', 'meta_description')->get()->row('POST_VALUE');
                $filters = $this->db->select('DB_ID,NAME,URL_SLUG')->from('filter')->where('TYPE', "category")->where('FILTER_LEVEL !=', 0)->where('OBJECT_ID', $row->id)->join('filter_post_relationship', 'filter_post_relationship.RELATION_ID = filter.DB_ID')->get();
                if ($filters->num_rows() > 0) {
                    $filter_Array = $filters->result_array();
                }
                $tranding_post_data[] = [
                    'id' => $row->id,
                    'title' => $row->title,
                    'content' => substr(strip_tags($row->content), 0, 200) . '...',
                    'meta_description' => empty($meta_description) ? "" : $meta_description,
                    'slug' => $row->slug,
                    'created_at' => date_format(date_create($row->created_at), "F d,Y"),
                    'feature_image' => empty($feature_image) ? "" : $feature_image,
                    'filters' => $filter_Array,
                ];
            }
        }
        if (!empty($tranding_post_data)) {
            foreach ($tranding_post_data as $key => $value) {
                $spam = "";
                foreach ($value['filters'] as $valueFIlters) {
                    $spam .= "<a href='" . base_url() . $valueFIlters['URL_SLUG'] . "'>
                        <span style='color: #0f3f6e; font-weight:600; opacity:1;'>" . $valueFIlters['NAME'] . "</span>
                    </a>";
                }
                $Post_date = $value['created_at'];

                $html .= "<div class='col-lg-4 col-md-6 col-sm-6'>
                                <div class='w-100 mb-3 carditem category-card-item position-relative'>
                                    <a href='' class='cursor-pointer' style='color:inherit;text-decoration: inherit;'>
                                        <div class='overflow-hidden rounded' style='background-image:linear-gradient(45deg, #0d0d0d 0%, #0d1012 11%, #0d1b20 24%, #0d2c39 39%, #0d455b 54%, #0d6487 70%, #0d8abc 86%, #0dafef 100%)'>
                                            <img src='" . base_url() . "assets/om-upload/" . $value['feature_image'] . "' loading='lazy' class='' alt='" . $value['feature_image'] . "'>
                                        </div>
                                    </a>
                                </div>
                                <div class='mb-1'>
                                    <div class='card-meta'>
                                        $spam
                                    </div>
                                </div>
                                <a target='_blank' href='" . base_url() . "post/" . $value['slug'] . "' class='cursor-pointer d-block mb-md-1'>
                                    <h4 class='fs-16 card-title' style=''>" . $value['title'] . "</h4>
                                </a>
                                <div class='w-100 my-2'>
                                    <p class='fs-14 w-100 text-justify card-description'>" . $value['title'] . " <a href='" . base_url() . "post/" . $value['slug'] . "'><span class='text-primary'>Readmore</span></a></p>
                                </div>
                            </div>";
            }
        }
        return $html;
    }

    private function get_data_as_per_category($id)
    {
        $html = "";
        $post_by_filter = $this->db->select('*')->from('filter_post_relationship')
            ->where('RELATION_ID', $id)->where('post.status', 1)
            ->join('post', 'post.id = filter_post_relationship.OBJECT_ID')->limit(4)->group_by('post.id')
            ->order_by('post.created_at', "DESC")->get();
        if ($post_by_filter->num_rows() > 0) {
            foreach ($post_by_filter->result() as $key => $value) {


                // Initialize an array to hold filters
                $filtersArray = [];

                // Fetch filters with the necessary join and conditions in one go
                $filters = $this->db->select('f.DB_ID, f.NAME, f.URL_SLUG, f.TYPE, f.FILTER_LEVEL')
                    ->from('filter f')
                    ->join('filter_post_relationship fpr', 'fpr.RELATION_ID = f.DB_ID')
                    ->where('f.TYPE', 'category')
                    ->where('f.FILTER_LEVEL !=', 0)
                    ->where('fpr.OBJECT_ID', $value->id)
                    ->get();

                // If filters exist, convert the result to an array
                if ($filters->num_rows() > 0) {
                    $filtersArray = $filters->result_array();
                }

                $spam = ""; // Initialize an empty string to hold the HTML

                foreach ($filtersArray as $index => $filter) {
                    // If it's the first filter and the URL contains "state"
                    if ($index === 0 && strpos($filter['URL_SLUG'], '/state') !== false) {
                        // Fetch the related state filter in a single optimized query
                        $stateRow = $this->db->select('f.URL_SLUG, f.NAME')
                            ->from('filter_post_relationship fpr')
                            ->join('filter f', 'f.DB_ID = fpr.RELATION_ID')
                            ->where('fpr.OBJECT_ID', $value->id)
                            ->where('f.TYPE', 'state')
                            ->where('f.FILTER_LEVEL', 1)
                            ->get();

                        if ($stateRow->num_rows() > 0) {
                            $state = $stateRow->row();
                            $spam .= "<a class='text-primary-700 fs-14 fw-600' href='" . base_url() . htmlspecialchars($state->URL_SLUG) . "'>
                                            <span>" . htmlspecialchars($state->NAME) . "</span>
                                        </a>";
                        }
                    }

                    // Add the current filter to the spam string
                    $spam .= "<a class='text-primary-700 fs-14 fw-600' href='" . base_url() . htmlspecialchars($filter['URL_SLUG']) . "'>
                                    <span>" . htmlspecialchars($filter['NAME']) . "</span>
                                </a>";
                }








                $featureImage = $this->db->select('POST_VALUE')->from('postmeta')->where('POST_ID', $value->id)->where('POST_KEY', 'feature_image')->get();
                $image = $featureImage->num_rows() > 0 ? $featureImage->result()[0]->POST_VALUE : "";
                $html .= "<div class='col-lg-4 col-md-6 col-sm-6'>
                                <div class='w-100 mb-3 carditem category-card-item position-relative'>
                                    <a href='' class='cursor-pointer' style='color:inherit;text-decoration: inherit;'>
                                        <div class='overflow-hidden rounded' style='background-image:linear-gradient(45deg, #0d0d0d 0%, #0d1012 11%, #0d1b20 24%, #0d2c39 39%, #0d455b 54%, #0d6487 70%, #0d8abc 86%, #0dafef 100%)'>
                                            <img src='" . base_url() . "assets/om-upload/" . $image . "' loading='lazy' class='' alt='" . $image . "'>
                                        </div>
                                    </a>
                                </div>
                                <div class='mb-1'>
                                    <div class='card-meta'>".$spam."</div>
                                </div>
                                <a target='_blank' href='" . base_url() . "post/" . $value->slug . "' class='cursor-pointer d-block mb-md-1'>
                                    <h4 class='fs-16 card-title'>" . $value->title . "</h4>
                                </a>
                                <div class='w-100 my-2'>
                                    <p class='fs-14 w-100 text-justify card-description'>" . $value->title . " <a href='" . base_url() . "post/" . $value->slug . "'><span class='text-primary'>Readmore</span></a></p>
                                </div>
                            </div>";
            }
        }
        return $html;
    }
}
