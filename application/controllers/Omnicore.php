<?php
defined('BASEPATH') or exit('No direct script access allowed');
require(APPPATH . 'controllers/Default_Controler.php');
class Omnicore extends Default_Controler
{
    public function index()
    {
        $this->load->view('home');
    }
   
}
