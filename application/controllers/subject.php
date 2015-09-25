<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Subject extends CI_Controller {

    function __construct() {
        parent::__construct();
        //$this->load->model('question_model','qm');
    }

    function index($name = NULL, $id = NULL) {
    	$questions= false;
        $subjects=[];
    	if($id !== NULL){
    		$question = ['subject_id'=>$id];
        	$questions = $this->question_model->get($question);
    	}
    	$subjects = $this->subject_model->get();
    	$data = ['view'=>'test/test','data'=>['questions'=>$questions,'subjects'=>$subjects]];
    	$this->load->view(THEME_PAGE, $data, FALSE);
    }

    function submit(){
        $subjetid = $this->uri->segment(3);
        $question = ['subject_id'=>$subjetid];
        $questions = $this->question_model->get($question);
        $data = self::_evaluate($questions); 
        $this->load->view(THEME_PAGE, $data, FALSE); 
    }

    static private function _evaluate($questions){        
        $post = $_POST;
        $correct = 0;
        $wrong   = 0;
        $unanswered = 0;
        self::_formatQuizPost($post);
        $postkeys = array_keys($post);
        foreach ($questions as $key => $value) {
            $keyindex = array_search($value->id, $postkeys);
            if($value->id == $postkeys[$keyindex]){
                if($value->answer == $post[$postkeys[$keyindex]])
                    $correct++;
                else
                    $wrong++;

            }else{
                $unanswered++;
            }
        }
        $data = ['view'=>'test/results','data'=>['correct'=>$correct,'wrong'=>$wrong,'unanswered'=>$unanswered]];
        return $data;
    }

    static private function _formatQuizPost(&$post){
        foreach ($post as $key => $value) {
            if(is_array($value)){
                $post[$key] = implode(',',$value); 
            }
        }
    }
}