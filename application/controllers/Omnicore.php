<?php
defined('BASEPATH') or exit('No direct script access allowed');
require(APPPATH . 'controllers/Default_Controler.php');
class Omnicore extends Default_Controler
{
    public function index()
    {
        $this->load->view('frontend/home');
    }
    public function demo()
    {
        $this->load->view('home');
    }
    public function page($id)
    {
        if ($id == 'login') $this->login();
        if ($id == 'newsletter') $this->newsletter();
        if ($id == 'check-pricing') $this->check_pricing();
        if ($id == 'infographic') $this->infographic();
        if ($id == 'post-page') $this->postpage();
        if ($id == 'privacy-policy') $this->privacy_policy();
        if ($id == 'infodetail') $this->infodetail();
        if ($id == 'postdetail') $this->postdetail();
        if ($id == 'postbycategory') $this->getdateaccordingtocategory();
        if ($id == 'omniweeklynews') $this->omniweeklynews();
        if ($id == 'download-image') $this->downloadImage();
        if ($id == 'omninews') $this->omninews();
        if ($id == 'ourteam') $this->ourteam();
    }

    private function login()

    {
        $this->load->view('frontend/login');
    }
    private function ourteam()

    {
        $this->load->view('frontend/ourteam');
    }
    private function omninews()

    {
        $this->load->view('frontend/omninews');
    }
    private function newsletter()
    {
        $this->load->view('frontend/newsletter');
    }
    private function omniweeklynews()
    {
        $this->load->view('frontend/omniweeklynews');
    }
    private function check_pricing()
    {
        $this->load->view('frontend/check-pricing');
    }
    private function infographic()
    {
        $this->load->view('frontend/infographic');
    }
    private function postpage()
    {
        $this->load->view('frontend/detail-post');
    }
    private function infodetail()
    {
        $this->load->view('frontend/infodetail');
    }
    private function postdetail()
    {
        $this->load->view('frontend/detail-post');
    }
    public function subscribe()
    {
        $this->load->view('subscribe');
    }
    public function privacy_policy()
    {
        $this->load->view('frontend/privacy_policy');
    }

    public function contact()
    {
        $this->load->view('contact');
    }
    public function signup()
    {
        $this->load->view('signup');
    }
    public function search()
    {
        $this->load->view('search');
    }

    public function refund_policy()
    {
        $this->load->view('refund_policy');
    }
    public function cookie_page()
    {
        $this->load->view('cookie_page');
    }

    public function sitemap()
    {
        $this->load->view('sitemap');
    }

    public function terms_and_condition()
    {
        $this->load->view('terms_and_condition');
    }

    public function remainingsection()
    {
        $this->load->view('remainingsection');
    }

    public function getdateaccordingtocategory($id)
    {
        $Html = "";
        $this->db->select('filter.DB_ID,filter.NAME,filter.URL_SLUG,post.id,post.slug,post.count,post.title,post.created_at,post.content');
        $this->db->where('filter.DB_ID', $id);
        $this->db->where('filter.STATUS', 1);
        $this->db->where('post.status', 1);
        $this->db->from('filter_post_relationship');
        $this->db->join('filter', 'filter_post_relationship.RELATION_ID = filter.DB_ID');
        $this->db->join('post', 'filter_post_relationship.OBJECT_ID = post.id');
        $query = $this->db->get();
        $data = $query->result_array();
        if (!empty($data)) {
            $CategoryName = $data[0]['NAME'];
            $CategoryURL = base_url() . $data[0]['URL_SLUG'];
            $Html .= "<div class='page-header d-flex align-items-center justify-content-between mb-4'>
                         <h1 class='page-header d-flex align-items-center justify-content-between text-primary-600 fw-bold fs-36'>" . $CategoryName . "</h1>
                            <a href='" . $CategoryURL . "' class='d-flex align-items-center justify-content-between fs-14'>
                                <span>Read all</span>
                                <i class='icofont-long-arrow-right'></i>
                            </a>
                        </div>";

            $Html .= "<div class=''><div class='content-section' id='toparticlecontent'>";
            $sectionOne = "";
            $sectionTwo = "";
            foreach ($data as $key => $value) {
                $textColor = $key == 5 ? "text-darklight-100" : "";
                $feature_image = "";
                $alt = "";
                $image = $this->db->select('POST_VALUE')->from('postmeta')->where('POST_ID', $value['id'])->where('POST_KEY', 'feature_image')->get();
                if ($image->num_rows() > 0) {
                    $feature_image = base_url() . "assets/om-upload/" . $image->row('POST_VALUE');
                    $alt = $image->row('POST_VALUE');
                }
                $filter_Array = [];
                $filters = $this->db->select('DB_ID,NAME,URL_SLUG')->from('filter')->where('TYPE', "category")->where('FILTER_LEVEL !=', 0)->where('OBJECT_ID', $value['id'])->join('filter_post_relationship', 'filter_post_relationship.RELATION_ID = filter.DB_ID')->get();
                if ($filters->num_rows() > 0) {
                    $filter_Array = $filters->result_array();
                }
                $spam = "";
                foreach ($filter_Array as $filterkey => $valueFIlters) {
                    if ($filterkey == 0) {
                        $path = explode('/', $valueFIlters['URL_SLUG']);
                        if ($path[1] == "state") {
                            $staterow = $this->db->select('URL_SLUG,NAME')->from('filter_post_relationship')
                                ->where('OBJECT_ID', $value['id'])
                                ->where('TYPE', 'state')
                                ->where('FILTER_LEVEL', '1')
                                ->join('filter', 'filter.DB_ID = filter_post_relationship.RELATION_ID')->get();
                            if ($staterow->num_rows() > 0) {
                                $result = $staterow->result();
                                $spam .= "<a href='" . base_url() . $result[0]->URL_SLUG . "'>
                                                        <span style='font-weight:600; opacity:1;'>" . $result[0]->NAME . "</span>
                                                    </a>";
                            }
                        }
                    }
                    $spam .= "<a href='" . base_url() . $valueFIlters['URL_SLUG'] . "'>
                        <span style='font-weight:600; opacity:1;'>" . $valueFIlters['NAME'] . "</span>
                    </a>";
                }
                $Post_date = date_format(date_create($value['created_at']), "F d,Y");
                $ago = $this->time_elapsed_string($value['created_at']);
                if ($key < 5) {
                    if ($key == 0) {
                        $sectionOne .= "<div class='trending-card card-placeholder-img-01 imghover' style='grid-area: trendingfull-card;'>
                                                        <div style='border-radius: 10px;position: relative;overflow: hidden;'>
                                                            <div class='bg-overlay' style='background: linear-gradient(180deg, transparent 48%, rgba(0, 0, 0, 0.8) 86%);position: absolute;top: 0;left: 0;width: 100%;height: 100%;'></div>
                                                             <img src='" . $feature_image . "' alt='" . $alt . "'>
                                                            <div style='position: absolute;bottom: 10px;left: 15px;color: white;font-size: 14px;'>" . $Post_date . "</div>
                                                        </div>
                                                        <div class='trending-card-content'>
                                                            <div class='card-meta'>" . $spam . "</div>
                                                            <a href='" . base_url() . "post/" . $value['slug'] . "'>
                                                                <h3 class='trending-card-title' style='font-size:18px;line-height:28px; font-weight:600; margin-top:0; margin-bottom:0;'>" . $value['title'] . "</h3>
                                                            </a>
                                                            <p class='fs-14'>" . substr(strip_tags($value['content']), 0, 200) . " <a href='" . base_url() . "post/" . $value['slug'] . "'><span class='text-primary-600'> Read more</span></a></p>
                                                        </div>
                                                </div>";
                    } else {
                        $sectionOne .= "<div class='trending-card card-half placeholder-image-03 w-inline-block' style='grid-area: trendinghalf-1;'>
                                                    <div style='border-radius: 10px;position: relative;overflow: hidden;'>
                                                        <div class='bg-overlay' style='background: linear-gradient(180deg, transparent 48%, rgba(0, 0, 0, 0.8) 86%);position: absolute;top: 0;left: 0;width: 100%;height: 100%;'></div>
                                                        <img src='" . $feature_image . "' alt='" . $alt . "'>
                                                        <div style='position: absolute;bottom: 10px;left: 15px;color: white;font-size: 14px;'>" . $Post_date . "</div>
                                                    </div>
                                                    <div class='trending-card-content'>
                                                        <div class='card-meta'>" . $spam . "</div>
                                                        <a href='" . base_url() . "post/" . $value['slug'] . "'>
                                                            <h3 class='child-card-title' style='font-size:16px;line-height:20px; font-weight:600; margin-top:0; margin-bottom:0;'>" . $value['title'] . "</h3>
                                                        </a>
                                                        <p class='fs-14'>" . substr(strip_tags($value['content']), 0, 140) . '...' . "<a href='" . base_url() . "post/" . $value['slug'] . "'><span class='text-primary-600'> Read more</span></a></p>
                                                    </div>
                                                </div>";
                    }
                } else {
                    if ($key == 5) {
                        $sectionTwo .= "<div style='border-radius: 10px;position: relative;overflow: hidden;min-height: 220px;'>
                                <div class='bg-overlay' style='background: linear-gradient(180deg, transparent 25%, rgba(0, 0, 0, 0.8) 72%);position: absolute;top: 0;left: 0;width: 100%;height: 100%;'></div>
                                <img src='" . $feature_image . "' alt='$alt' style='width: 100%;height: 220px;object-fit: fill;'>
                                <div style='position: absolute;bottom: 10px;left: 15px;color: #686868;font-size: 14px;right: 15px;'>
                                    <div style='color: #c6c6c6;' class='mb-2'>" . $ago . "</div>
                                    <div style='color: white;' class='fs-14 mb-1'>" . $spam . "</div>
                                     <a href='" . base_url() . "post/" . $value['slug'] . "'>
                                        <h4 class='card-title fs-14 text-darklight-100' style='line-height: 20px;'>" . $value['title'] . "</h4>
                                    </a>
                                </div>
                             </div>";
                    } else {
                        $sectionTwo .= "<div class='placeholder-image-05'>
                                <div>
                                    <div class='card-meta'>" . $Post_date . "</div>
                                    <p class='card-title fw-400' style='line-height: 20px;'>" . $value['title'] . "</p>
                                </div>
                            </div>";
                    }
                }
            }
            $Html .= "<div class='content-col'>$sectionOne</div>";
            $Html .= "<div class='side-col'>$sectionTwo </div>";
            $Html .= "</div></div>";
        }
        return $Html;
    }






    private function featureSection($data, $classAdd)
    {
        $html = "";
        foreach ($data as $data) {
            $spam = $this->get_filter_array_list($data->id);
            $feature_image = $this->db->select('POST_VALUE')->from('postmeta')->where('POST_ID', $data->id)->where('POST_KEY', 'feature_image')->get()->row('POST_VALUE');
            $today = date("Y-m-d");
            $publish_data = date_format(date_create($data->created_at), "Y-m-d");
            $post_date = $today == $publish_data ? $this->time_elapsed_string($data->created_at) : date_format(date_create($data->created_at), "F d,Y");
            $html .= "<div class='" . $classAdd . "'>
            <div class='rounded position-relative overflow-hidden'>
                <div class='bg-overlay position-absolute w-100 h-100 top-0 end-0'></div>
                <img src='" . base_url() . "assets/om-upload/" . $feature_image . "' alt=''>
                <div class='position-absolute trending-data'>" . $post_date . "</div>
            </div>
            <div class='trending-card-content'>
                <div class='card-meta'>
                    " . $spam . "
                </div>
                <a href='" . base_url() . "post/" . $data->slug . "/'>
                    <h3 class='trending-card-title'>$data->title</h3>
                </a>
                <p class='fs-14'>
                    <a class='text-primary-800' href='" . base_url() . "post/" . $data->slug . "/'>" . substr(strip_tags($data->content), 0, 200) . "...
                        <span class='text-primary-600'>Read more</span>
                    </a>
                </p>
            </div>
        </div>";
        }
        return $html;
    }

    private function get_filter_array_list($id)
    {
        $spam = ""; // Initialize an empty string to hold the HTML
        // Initialize an array to hold filters
        $filtersArray = [];
        // Fetch filters with the necessary join and conditions in one go
        $filters = $this->db->select('f.DB_ID, f.NAME, f.URL_SLUG, f.TYPE, f.FILTER_LEVEL')
            ->from('filter f')
            ->join('filter_post_relationship fpr', 'fpr.RELATION_ID = f.DB_ID')
            ->where('f.TYPE', 'category')
            ->where('f.FILTER_LEVEL !=', 0)
            ->where('fpr.OBJECT_ID', $id)
            ->get();
        // If filters exist, convert the result to an array
        if ($filters->num_rows() > 0) {
            $filtersArray = $filters->result_array();
        }
        foreach ($filtersArray as $index => $filter) {
            // If it's the first filter and the URL contains "state"
            if ($index === 0 && strpos($filter['URL_SLUG'], '/state') !== false) {
                // Fetch the related state filter in a single optimized query
                $stateRow = $this->db->select('f.URL_SLUG, f.NAME')
                    ->from('filter_post_relationship fpr')
                    ->join('filter f', 'f.DB_ID = fpr.RELATION_ID')
                    ->where('fpr.OBJECT_ID', $id)
                    ->where('f.TYPE', 'state')
                    ->where('f.FILTER_LEVEL', 1)
                    ->get();

                if ($stateRow->num_rows() > 0) {
                    $state = $stateRow->row();
                    $spam .= "<a href='" . base_url() . htmlspecialchars($state->URL_SLUG) . "'>
                        <span>" . htmlspecialchars($state->NAME) . "</span>
                    </a>";
                }
            }

            // Add the current filter to the spam string
            $spam .= "<a href='" . base_url() . htmlspecialchars($filter['URL_SLUG']) . "'>
                <span>" . htmlspecialchars($filter['NAME']) . "</span>
            </a>";
        }
        return $spam;
    }

    private function BreakingSection($data)
    {
        $html = "";
        foreach ($data as $data) {
            $spam = $this->get_filter_array_list($data->id);
            $feature_image = $this->db->select('POST_VALUE')->from('postmeta')->where('POST_ID', $data->id)->where('POST_KEY', 'feature_image')->get()->row('POST_VALUE');
            $today = date("Y-m-d");
            $publish_data = date_format(date_create($data->created_at), "Y-m-d");
            $post_date = $today == $publish_data ? $this->time_elapsed_string($data->created_at) : date_format(date_create($data->created_at), "F d,Y");
            $html .= "<div style='border-radius: 10px;position: relative;overflow: hidden;min-height: 220px;'>
                    <div class='bg-overlay' style='background: linear-gradient(180deg, transparent 25%, rgba(0, 0, 0, 0.8) 72%);position: absolute;top: 0;left: 0;width: 100%;height: 100%;'></div>
                        <img alt='' style='width: 100%;height: 220px;object-fit: fill;' src='" . base_url() . "assets/om-upload/" . $feature_image . "'>
                        <div style='position: absolute;bottom: 10px;left: 15px;color: #686868;font-size: 14px;'>
                            <div style='color: #c6c6c6;' class='mb-2'>" . $post_date . "</div>
                            <div class='card-meta' style='opacity:1;'>
                                " . $spam . "
                            </div>
                        <a href='" . base_url() . "post/" . $data->slug . "/'>
                            <div class='card-title' style='line-height: 20px;color: white;'>$data->title</div>
                        </a>
                    </div>
                    <a href='#' style='position: absolute;top: 10px;right: 10px;background: red;color: white;padding: 3px 10px;border-radius: 6px;font-size: 14px;'>Breaking</a>
                </div>";
        }
        return $html;
    }

    public function top_articles($Name = "Featured Article")
    {
        $feature = $this->db->select('*')->from('filter_post_relationship')->where('filter.NAME', $Name)->where('post.status', 1)
            ->join('post', 'post.id = filter_post_relationship.OBJECT_ID')
            ->join('filter', 'filter.DB_ID = filter_post_relationship. RELATION_ID')
            ->order_by('created_at', 'desc')->limit(1)->get();
        if ($feature->num_rows() > 0) {
            $data = $feature->result();
            if ($Name == "Featured Article") {
                return $this->featureSection($data, "trending-card card-placeholder-img-01 imghover");
            }
            if ($Name == "P1") {
                return $this->featureSection($data, "trending-card card-half placeholder-image-03 w-inline-block");
            }
            if ($Name == "P2") {
                return $this->featureSection($data, "trending-card card-half placeholder-image-03 w-inline-block");
            }
            if ($Name == "Breaking") {
                return $this->BreakingSection($data);
            }
        }
    }
}
