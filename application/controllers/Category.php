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
        if($val > 4) echo '404';

    }

    private function findroutes(){
        $total = count($this->uri->segment_array());
        return $total;
    }

    private function temp1(){
        $this->load->view('header');
        $this->load->view('category/category-body');
    }
    private function temp2(){
        $this->load->view('header');
        $this->load->view('category/parent-category');
        $this->load->view('category/category-body');
    }
    private function temp3(){
        $this->load->view('header');
        $this->load->view('category/sub-category');
        $this->load->view('category/category-body');
    }
    private function temp4(){
        $this->load->view('header');
        $this->load->view('category/grand-category');
        $this->load->view('category/category-body');
    }




}
