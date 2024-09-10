<?php
defined('BASEPATH') or exit('No direct script access allowed');
require(APPPATH . 'controllers/Default_Controler.php');
class Posts extends Default_Controler
{
    public function index()
    {
        $this->load->view('frontend/home');
    }

    public function single($id = null)
    {
        if($id == null){
            echo "hello this is not working";
        }else{
            $this->load->view('frontend/detail-post' , ['id' => $id]);
        }
    }


    
}
