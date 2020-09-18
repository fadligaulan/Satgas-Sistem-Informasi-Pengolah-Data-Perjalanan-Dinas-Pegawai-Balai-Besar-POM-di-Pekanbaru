<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	 public function __construct()
    {
        parent::__construct();
         $this->load->model('Model_peserta');
    }

    public function input($param = '')
    {
       
        // $this->db->insert('peserta', array('token' => $data));
        
        
        
    }
    
}
