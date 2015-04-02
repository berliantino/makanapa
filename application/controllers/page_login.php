<?php

class Page extends Frontend_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('tempatmakan_m');
    }

    public function index() {
    	$this->load->view('_main_layout');
    }
    public function admin() {
        $this->load->view('admin/_layout_main');
    }
}