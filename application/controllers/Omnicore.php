<?php
defined('BASEPATH') or exit('No direct script access allowed');
require(APPPATH . 'controllers/Default_Controler.php');
class Omnicore extends Default_Controler
{
    public function index()

    {
        $this->load->view('frontend/pages/home');

        // $this->load->library('myLibrary');
        // echo $this->mylibrary->resultD("hello");
    }

    public function page($id)
    {
        if ($id == 'login') $this->login();
        if ($id == 'infodetail') $this->infodetail();
        if ($id == 'newsletter') $this->newsletter();
        if ($id == 'subscribe') $this->subscribe();
        if ($id == 'newsdetailspage') $this->newsdetailspage();
        if ($id == 'infographicpage') $this->infographicpage();
        if ($id == 'privacy-policy') $this->privacy_policy();
        if ($id == 'user_profile') $this->user_profile();
        if ($id == 'contact') $this->contact();
        if ($id == 'catalog') $this->catalog();
        if ($id == 'dummypage') $this->dummypage();
        if ($id == 'cookie_page') $this->cookie_page();
        if ($id == 'pricing_page') $this->pricing_page();
        if ($id == 'omninews') $this->omninews();
        if ($id == 'unsubscribe') $this->unsubscribe();
    }

    private function login()
    {
        $this->load->view('frontend/components/header');
        $this->load->view('frontend/pages/login');
    }
    public function infodetail()
    {
        $this->load->view('frontend/pages/others/infodetail');
    }

    public function unsubscribe()
    {
        $this->load->view('frontend/pages/others/unsubscribe');
    }


    public function omninews()
    {
        $this->load->view('frontend/pages/others/omninews');
    }

    public function pricing_page()
    {
        $this->load->view('frontend/pages/others/pricing_page');
    }

    public function cookie_page()
    {
        $this->load->view('frontend/pages/others/cookie_page');
    }

    public function dummypage()
    {
        $this->load->view('frontend/components/header');
        $this->load->view('frontend/pages/others/dummypage');
    }
    public function user_profile()
    {
        $this->load->view('frontend/pages/others/user_profile');
    }
    public function newsletter()
    {
        $this->load->view('frontend/pages/others/newsletter');
    }
    public function subscribe()
    {
        $this->load->view('frontend/pages/others/subscribe');
    }
    public function newsdetailspage()
    {
        $this->load->view('frontend/pages/others/newsdetailspage');
    }
    public function infographicpage()
    {
        $this->load->view('frontend/pages/others/infographicpage');
    }


    public function privacy_policy()
    {
        $this->load->view('frontend/pages/others/privacy_policy');
    }

    public function contact()
    {
        $this->load->view('frontend/components/contact');
    }
    public function signup()
    {
        $this->load->view('frontend/pages/others/signup');
    }
    public function search()
    {
        $this->load->view('frontend/pages/others/search');
    }

    public function refund_policy()
    {
        $this->load->view('frontend/pages/others/refund_policy');
    }


    public function sitemap()
    {
        $this->load->view('sitemap');
    }

    public function terms_and_condition()
    {
        $this->load->view('frontend/pages/others/terms_and_condition');
    }
    public function catalog()
    {
        // $this->load->view('remainingsection');
        echo "<pre>";
        $filter = $this->db->select('*')->from('filter')->get();
        if ($filter->num_rows() > 0) {
            print_r($filter->result());
        } else {
            echo "No Data Found";
        }
    }
}
