<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$live = $this->db->select('t_iklan.*,nama_foto,vessel_nama,place_build,year_build,construction')
				->from('t_iklan')
				->join('t_foto_kapal', 't_foto_kapal.clasification_no=t_iklan.clasification_no','left')
				->join('t_kapal', 't_kapal.clasification_no=t_iklan.clasification_no','left')
				->where(array('status' => 1))
				->group_by('t_iklan.id')
				->order_by('date_iklan','desc')				
				->get()
				->result();

		$data['live'] = $live;	
		$data['title'] = 'Home';
		$data['main'] = 'home';
		$this->load->view('home',$data,FALSE);		
		// $this->load->view('home');
	}
}
