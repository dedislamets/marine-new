<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Faq extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	    $this->load->model('Pengaturan');
	   
	}
	public function index()
	{
		$this->db->from('t_profil');
		$data['data'] = $this->db->get()->result();		
		
		$data['title'] = 'Faq';
		$data['main'] = 'faq/index';	
		$data['notifikasi'] = $this->Pengaturan->get_notification_global();       		
		$this->load->view('home', $data, FALSE);
	}
}