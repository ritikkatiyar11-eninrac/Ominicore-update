<?php
defined('BASEPATH') or exit('No direct script access allowed');
require(APPPATH . 'controllers/backend/Default_Backend_Controler.php');
class Dashboard extends Default_Backend_Controler
{
  public function __construct()
  {
    parent::__construct();
    $this->is_login();
  }
  public function index()
  {
    $this->load->view('backend/layout/header');
    $this->load->view('backend/dashboard');
    $this->load->view('backend/layout/footer');
  }
}
