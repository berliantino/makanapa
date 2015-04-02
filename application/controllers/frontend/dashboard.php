<?php
class Dashboard extends Admin_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index() {
    	$this->data['subview'] = 'frontend/dashboard/index';
    	$this->load->view('frontend/_main_layout', $this->data);
    }
    
    public function modal() {
    	$this->load->view('frontend/_modal_layout', $this->data);
    }
}