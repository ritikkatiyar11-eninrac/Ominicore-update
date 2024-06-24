<?php
defined('BASEPATH') or exit('No direct script access allowed');
require(APPPATH . 'controllers/Default_Controler.php');
class OpenAccess extends Default_Controler
{
    public function index()
    {
        $this->load->view('home');
    }
    public function overview(){
        $this->load->view("overview/overview");
    }

    public function commercialNr()
    {
        $this->load->view('sales/commercialNr');
    }
    public function commercialSr()
    {
        $this->load->view('sales/commercialSr');
    }
    public function commercialWr()
    {
        $this->load->view('sales/commercialWr');
    }
    public function commercialEr()
    {
        $this->load->view('sales/commercialEr');
    }
    public function industryNr()
    {
        $this->load->view('sales/industryNr');
    }
    public function industrySr()
    {
        $this->load->view('sales/industrySr');
    }
    public function industryWr()
    {
        $this->load->view('sales/industryWr');
    }
    public function industryEr()
    {
        $this->load->view('sales/industryEr');
    }

    public function industryAllindia()
    {
        $this->load->view('sales/industryAllindia');
    }
    public function clusterAnalysis()
    {
        $this->load->view('clusterAnalysis/clusterAnalysis');
    }
    // energy_loss_estimation.php
    public function energy_loss_estimation()
    {
        $this->load->view('attractive-index/energy_loss_estimation');
    }
    public function discom_saving()
    {
        $this->load->view('attractive-index/discom_saving');
    }
    // transmission_losses.php
    public function transmission_losses()
    {
        $this->load->view('attractive-index/transmission_losses');
    }
    public function distribution_charges_losses()
    {
        $this->load->view("attractive-index/distribution_charges_losses");
    }
}
