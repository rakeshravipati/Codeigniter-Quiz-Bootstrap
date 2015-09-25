<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_Model extends CI_Model {
    
    const TABLE_NAME = "users";

    public function __construct(){
    	parent::__construct();
    }

    public function authenticate($post){
    	$resid = $this->db->get_where(self::TABLE_NAME,$post);
    	$data = $resid->row_array();
    	if($resid->num_rows() == 1){
    		return $data;
    	} 
    	return FALSE;	
    }
}
