<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ship extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
	}
	public function index()
	{
		$data['title'] = 'Ship';
		$data['main'] = 'ship/index';		
		$data['script'] = 'script/ship';
		$this->load->view('home', $data, FALSE);
	}
	public function kapal()
	{
	    $uri_2 = $this->uri->segment(2);
	    $uri_3 = $this->uri->segment(3);	    
	    
	    $this->db->select('t_kapal.*,t_iklan.title,description,service,latitude,longitude');
        $this->db->from('t_kapal');
        $this->db->join('t_iklan', 't_iklan.clasification_no=t_kapal.clasification_no');        
        $this->db->where(array('t_iklan.id'=>$uri_2));
		$row	= $this->db->get()->result();	                  
		$data['data']  = $row;		

		
		$this->db->from('t_foto_kapal');
		$this->db->where(array('clasification_no'=>$row[0]->clasification_no));
		$data['foto'] = $this->db->get()->result();

	    $data['title'] = 'Ship';
		$data['main'] = 'ship/index';		
		$data['script'] = 'script/ship';
		$this->load->view('home', $data, FALSE);
	}
		
	
}

/* End of file Laporan.php */
/* Location: ./application/controllers/Laporan.php */