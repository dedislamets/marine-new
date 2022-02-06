<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index()
	{
		$config['enable_query_strings'] = TRUE;
		$params   = $_SERVER['QUERY_STRING'];		
		if ($params != "") {
			$params = explode("=", $params);
			$params = $params[1];
		}		
		$live = $this->db->select('t_iklan.*,nama_foto,vessel_nama,place_build,year_build,construction')
				->from('t_iklan')
				->join('t_foto_kapal', 't_foto_kapal.clasification_no=t_iklan.clasification_no','left')
				->join('t_kapal', 't_kapal.clasification_no=t_iklan.clasification_no','left')
				->where(array('status' => 1))
				->like('vessel_nama', $params)
	    		->or_like('title', $params)
	    		->or_like('service', $params)
				->group_by('t_iklan.id')
				->order_by('date_iklan','desc')				
				->get()
				->result();

		$data['live'] = $live;
		$data['cari'] = $params;	
		$data['title'] = 'Home';
		$data['main'] = 'search/index';
		$this->load->view('home',$data,FALSE);				
	}

}
