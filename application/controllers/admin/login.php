<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("user_model",'um');
    }

    function index() {
        if($this->session->userdata('userdetails') != false){
            redirect('admin/subject');
        }
    	if(!empty($_POST)){
    		$userdetails = $this->um->authenticate($_POST);
    		if($userdetails !== False){
    			$data['userdetails'] = $userdetails;
    			$this->session->set_userdata($data);
    			$this->session->set_userdata('recent_activity',strtotime(date("d-m-Y h:i:s")));
    			$this->session->set_flashdata('success', 'You havebeen loggedin successfully!.');
    			redirect('admin/subject');
    		}
    	}
    	$data = ['view'=>"admin/login",'data'=>['title'=>'login']];
        $this->load->view("templates/main",$data);
    }

    function logout(){
        $this->session->sess_destroy();
        redirect('admin/','refresh');
   }
}