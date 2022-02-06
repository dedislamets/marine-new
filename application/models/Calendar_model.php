<?php

class Calendar_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_events($start, $end)
	{
		$id = $this->session->userdata('id');  
		$status = array('On Schedule', 'Finish', 'Cancel');
		$this->db->select('calendar_events.*,t_pengajuan.status');
		 $this->db->from('calendar_events');
		 $this->db->join('t_pengajuan', 't_pengajuan.kode_pengajuan=calendar_events.kode_pengajuan');        
		 $this->db->where("start >=", $start);
		 $this->db->where("end <=", $end);
		 $this->db->where("id_buyer", $id);
		 $this->db->where_in("status", $status);
		 $this->db->or_where('id_seller', $id);		 
		 $query = $this->db->get();
	    return $query;
	}

	public function add_event($data)
	{
	    $this->db->insert("calendar_events", $data);
	}

	public function get_event($id)
	{
	    return $this->db->where("ID", $id)->get("calendar_events");
	}

	public function update_event($id, $data)
	{
	    $this->db->where("ID", $id)->update("calendar_events", $data);
	}

	public function delete_event($id)
	{
	    $this->db->where("ID", $id)->delete("calendar_events");
	}

}