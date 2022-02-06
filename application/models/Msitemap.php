<?php
class Msitemap extends CI_Model {
  
    function __construct()
    {
        parent::__construct();
    }
     
    function generate()
    {
        $this->db->select('t_kapal.*,t_iklan.title,description,service,latitude,longitude,t_iklan.id as iklan_id, t_iklan.type_charter,price_charter,price_csm,price,tgl');
        $this->db->from('t_kapal');
        $this->db->join('t_iklan', 't_iklan.clasification_no=t_kapal.clasification_no');        
		$row	= $this->db->get()->result();	         
		
        return $row;
    }
}