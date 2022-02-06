<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activation extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Registrasi');
		$this->load->model('Pengaturan');
        $this->load->model('Email');
	}
	public function index()
	{						
		$this->load->view('register/active');
	}
	public function sf($token)
	{				
		$where = array(
		    'token' => $token,
		    'verified' => 0
		);
		   $updatedata = array(
		    'verified' => 1,				
		  );
		$this->db->update('t_registrasi',$updatedata);
		$this->db->where($where);
		$result = $this->db->affected_rows();
		if($result>0){
			$this->load->view('register/active');	
		}else{
			echo "Activation Failed.";
		}
		
	}
	
}
