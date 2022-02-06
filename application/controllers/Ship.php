<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ship extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	    $this->load->model('Pengaturan');
	    $this->load->library('user_agent');
	   
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
	    $this->db->select('t_kapal.*,t_iklan.id as iklan_id, `title`, `description`,`date_iklan`, `status`, `service`, `type`, `type_charter`, `price_charter`, `duration`, `duration_uom`, `area`, `price_freight`, `portloading`, `portdiscarge`, `qty_freight`, `price_csm`, `duration_csm`, `area_csm`, `duration_csm_uom`, `type_comodity`, `dest_comodity`, `qty_comodity`,country.name as country_name, `address_from`, `address_to`, `fee`, `price`');
        $this->db->from('t_kapal');
        $this->db->join('t_iklan', 't_iklan.clasification_no=t_kapal.clasification_no');   
        $this->db->join('country', 'country.iso=t_iklan.country');   
        $this->db->where(array('t_iklan.id'=>$uri_2));
		$row	= $this->db->get()->result();	                  
		$data['data']  = $row;		
		$this->db->from('t_foto_kapal');
		$this->db->where(array('clasification_no'=>$row[0]->clasification_no));
		$data['foto'] = $this->db->get()->result();
	    $data['title'] = 'Ship';
		$data['main'] = 'ship/index';
		$data['uri'] = $this->uri->uri_string;	
		$data['notifikasi'] = $this->Pengaturan->get_notification_global();       			
		$data['script'] = 'script/ship';
		
		$this->load->view('home', $data, FALSE);
	}
}
