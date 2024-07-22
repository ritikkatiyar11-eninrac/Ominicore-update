<?php
defined('BASEPATH') or exit('No direct script access allowed');
require(APPPATH . 'controllers/Default_Controler.php');
class Omnicore extends Default_Controler
{
    public function index()
    {
        $this->load->view('home');
    }
    public function category(){
        $this->load->view('category');
    }

    public function login(){
        $this->load->view('login');
    }

    public function notfound(){
        $this->load->view('notfound');
    }
   
    public function newsletter_signup(){
        $this->load->view('newsletter_signup');
    }
    public function subscribe(){
        $this->load->view('subscribe');
    }
    public function newsdetailspage(){
        $this->load->view('detailspage/newsdetailspage');
    }
   
    public function infodetailspage(){
        $this->load->view('detailspage/infodetailspage');
    }
    public function infographicpage(){
        $this->load->view('infographicpage');
    }
    // newsdetailspage infodetailspage

    public function privacy_policy(){
        $this->load->view('privacy_policy');
    }
}
