<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profil extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	    $this->load->model('Pengaturan');
	   
	}
	public function index()
	{
		$this->db->from('t_profil');
		$data['data'] = $this->db->get()->result();		
		
		$data['title'] = 'Profil';
		$data['main'] = 'profil/index';	
		$data['notifikasi'] = $this->Pengaturan->get_notification_global();       		
		$this->load->view('home', $data, FALSE);
	}
}