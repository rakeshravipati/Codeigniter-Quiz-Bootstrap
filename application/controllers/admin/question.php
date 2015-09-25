<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Question extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index($id = NULL) { //get questions list or get question details by primary id
    	$questiondata = $this->question_model->get($id);
    	$data = ['view'=>'questions/list','data'=>['questions'=>$questiondata]];
        $this->load->view(THEME_PAGE, $data);
    }

    public function create(){
        if($_POST != FALSE){
            if($this->question_model->insert($_POST)){
                $this->session->set_flashdata('success', 'Subject has been successfully created!.');
                redirect('admin/question/','refresh');
                exit;
            }
        }
        $subjects = $this->subject_model->get();
        $data = ['view'=>'questions/create_form','data'=>['subjects'=>$subjects]];
        $this->load->view(THEME_PAGE, $data);   
    }
}