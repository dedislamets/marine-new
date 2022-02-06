<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Notification extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	    $this->load->model('Pengaturan');
	   
	}
	public function index()
	{
		$data['title'] = 'Success';
		$data['main'] = 'notification/index';
		$data['notifikasi'] = $this->Pengaturan->get_notification_global();       				
		$this->load->view('home', $data, FALSE);		
	}
	public function success($id)
	{
		$data_pengajuan = $this->db->get_where('t_pengajuan',array('id' => $id))->result();
		$data['title'] = 'Success';
		$data['main'] = 'notification/index';
		$data['notifikasi'] = $this->Pengaturan->get_notification_global();       			
		$data['data'] = $data_pengajuan;
		
		$this->load->view('home', $data, FALSE);		
	}

	public function coming($kode_pengajuan="")
	{                                      
	    $data = array(          
	      'agree_2' => 1         
	    );
	    $where = array(
	      'kode_pengajuan' => $kode_pengajuan
	    );
	    $this->db->where($where);
	    $this->db->update('calendar_events',$data); 

	    $query = $this->db->get_where('calendar_events',array('kode_pengajuan' => $kode_pengajuan));  
   		$result = $query->row();
   		$start = $result->start;

   		$data = array(          
	      'tgl_meetup' => $start,
	      'status' => "On Schedule"         
	    );	    
	    $this->db->where($where);
	    $this->db->update('t_pengajuan',$data); 

	    echo "Sukses";            
	}
	public function reschedule($kode_pengajuan="")
	{                                      
	    // $data = array(          
	    //   'agree_2' => 1         
	    // );
	    // $where = array(
	    //   'kode_pengajuan' => $kode_pengajuan
	    // );
	    // $this->db->where($where);
	    // $this->db->update('calendar_events',$data); 
	    echo "Sedang dalam Proses";            
	}
}
