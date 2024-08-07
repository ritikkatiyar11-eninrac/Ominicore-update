<?php
defined('BASEPATH') or exit('No direct script access allowed');
require(APPPATH . 'controllers/backend/Default_Backend_Controler.php');
class Panel extends Default_Backend_Controler
{
    public function index()
    {
      $this->load->view('backend/login');
    }

    

}
