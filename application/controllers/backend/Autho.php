<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Autho extends CI_Controller
{
  public function index()
  {

    $this->load->view('backend/login');
  }

  public function login()
  {
    $this->load->view('backend/login');
  }
  public function home()
  {
    $this->load->view('backend/layout/home');
  }

  public function dashboard()
  {
    $this->load->view('backend/layout/dashboard');
  }

  public function media()
  {
    $this->load->view('backend/layout/media');
  }
}
