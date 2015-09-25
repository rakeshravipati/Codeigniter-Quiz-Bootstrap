<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Subject extends CI_Controller {

    function __construct() {
        parent::__construct();
        if($this->session->userdata('userdetails') == false){
            redirect("admin/");
        }
    }

    function index() {
    	$subjectdata = $this->subject_model->get();
    	$data = ["view"=>"subject/list.php",'data'=>['subjects'=>$subjectdata]];
        $this->load->view(THEME_PAGE, $data);
    }

    public function create(){
    	if($_POST != FALSE){
    		if($this->subject_model->insert($_POST)){
                $this->session->set_flashdata('success', 'Subject has been successfully created!.');
                redirect('admin/subject/','refresh');
                exit;
            }
    	}
    	$data = ["view"=>"subject/create_form.php"];
    	$this->load->view(THEME_PAGE, $data);
    }
}
