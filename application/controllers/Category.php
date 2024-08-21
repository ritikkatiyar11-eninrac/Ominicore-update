<?php
defined('BASEPATH') or exit('No direct script access allowed');
require(APPPATH . 'controllers/Default_Controler.php');
class Category extends Default_Controler
{
    public function index()
    {
        $val = $this->findroutes();
        if($val == 1) $this->temp1();
        if($val == 2) $this->temp2();
        if($val == 3) $this->temp3();
        if($val == 4) $this->temp4();
        if($val == 5) $this->temp5();
        if($val > 5) echo "404";
    }

    private function findroutes(){
        $total = count($this->uri->segment_array());
        return $total;
    }

    private function temp1(){
        $this->load->view('frontend/components/header');
        $this->load->view('frontend/pages/category/category-body');
    }
    private function temp2(){
         $this->load->view('frontend/components/header');
        $this->load->view('frontend/pages/category/parent-category');
        $this->load->view('frontend/pages/category/category-body');
    }
    private function temp3(){
         $this->load->view('frontend/components/header');
        
        $this->load->view('frontend/pages/category/sub-category');
        $this->load->view('frontend/pages/category/category-body');
    }
    private function temp4(){
         $this->load->view('frontend/components/header');
        $this->load->view('frontend/pages/category/grand-category');
        $this->load->view('frontend/pages/category/category-body');
    }
    private function temp5(){
         $this->load->view('frontend/components/header');
        $this->load->view('frontend/pages/detailspage/infodetailspage');
        
    }




}
