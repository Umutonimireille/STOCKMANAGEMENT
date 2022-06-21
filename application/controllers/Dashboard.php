<?php

class Dashboard extends CI_Controller{
    public function __construct(){
        parent::__construct();

        
    }
    function index(){
        $this->load->view('dashboard/index.php');
    }
}
?>