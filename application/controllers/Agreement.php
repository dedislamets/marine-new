<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Agreement extends CI_Controller {
	public function index()
	{
		$this->load->view('agreement/index');		
	}
}
