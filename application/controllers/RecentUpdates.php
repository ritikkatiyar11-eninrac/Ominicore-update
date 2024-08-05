<?php
defined('BASEPATH') or exit('No direct script access allowed');
require(APPPATH . 'controllers/Default_Controler.php');
class RecentUpdates extends Default_Controler
{
    public function index()
    {
        echo "hello";
    }

    public function getRecentUpdates($id){
        echo $id;
    }
}
