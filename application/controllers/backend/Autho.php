<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Autho extends CI_Controller
{
    public function index()
    {
        
      $this->load->view('backend/login');
    }

    public function login(){
        $this->load->view('backend/login');
    }

}
