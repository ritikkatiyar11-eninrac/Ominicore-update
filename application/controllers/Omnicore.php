<?php
defined('BASEPATH') or exit('No direct script access allowed');
require(APPPATH . 'controllers/Default_Controler.php');
class Omnicore extends Default_Controler
{
    public function index()
    {
        $this->load->view('home');
    }

    public function page($id){
        if($id == 'login') $this->login();
        if($id == 'infodetail') $this->infodetail();
        if($id == 'newsletter') $this->newsletter();
        if($id == 'subscribe') $this->subscribe();
        if($id == 'newsdetailspage') $this->newsdetailspage();
        if($id == 'infographicpage') $this->infographicpage();
        if($id == 'privacy-policy') $this->privacy_policy();
        if($id == 'login') $this->login();
        if($id == 'catalog') $this->catalog();
    }


    private function login()
    {
        $this->load->view('login');
    }

    

    public function infodetail()
    {
        $this->load->view('infodetail');
    }

    public function newsletter()
    {
        $this->load->view('newsletter');
    }
    public function subscribe()
    {
        $this->load->view('subscribe');
    }
    public function newsdetailspage()
    {
        $this->load->view('newsdetailspage');
    }

  
    public function infographicpage()
    {
        $this->load->view('infographicpage');
    }
   

    public function privacy_policy()
    {
        $this->load->view('privacy_policy');
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

    

    public function catalog(){
        // $this->load->view('remainingsection');
        echo "<pre>";
        $filter = $this->db->select('*')->from('filter')->get();
        if($filter->num_rows() > 0){
            print_r($filter->result());
        }else{
            echo "No Data Found";
        }
    }
}
