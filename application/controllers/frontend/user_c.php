<?php
class User_C extends CI_Controller{
    function __construct() {
        parent::__construct();
            
    }
    function index(){
        $this->load->view('_main_layout');
    }
    
    function validation() {
        $this->load->model(user_m);
        
        $this->user_m->validate();
        $query = $this->db->get('users');
        if($query)
            {
            $data = array(                
                'email' => $this->input->post('email'), 'is_logged_in' => true
                        );
                        $this->session->set_userdata($data);
                        $redirect('page_login');
        }
            
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

