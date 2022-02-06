<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	    $this->load->model('Pengaturan');
	    $this->load->library('user_agent');
	   
	}
	public function index()
	{						  
		$live = $this->db->select('t_iklan.*,nama_foto,nama_foto_thumb,vessel_nama,place_build,year_build,construction')
				->from('t_iklan')
				->join('t_foto_kapal', 't_foto_kapal.clasification_no=t_iklan.clasification_no','left')
				->join('t_kapal', 't_kapal.clasification_no=t_iklan.clasification_no','left')
				->where(array('status' => 1,'active' => 1))
				->group_by('t_iklan.id')
				->order_by('date_iklan','desc')				
				->get()
				->result();

		$query = [];
		$senders = [];
		$data['notifikasi']["count"] = 0;
		$data['notifikasi']["count_submission"] = 0;
		$data['notifikasi']["count_sign"] = 0;
		$data['notifikasi']["count_meetup"] = 0;
		if(!empty($this->session->userdata('nama'))) {
			$query = $this->db->query("SELECT distinct id_buyer as `from`, nama_buyer as from_name,id_seller as `to`,nama_seller as to_name FROM t_pengajuan where (id_buyer='".$this->session->userdata('id')."' OR id_seller='".$this->session->userdata('id')."') and status in ('Sign 1','Sign 2','On Schedule')")->result();

            $senders = $this->db->query("SELECT distinct id_buyer as `from`, nama_buyer as from_name,id_seller as `to`,nama_seller as to_name, ( SELECT COUNT(*) from frei_chat WHERE ((`to`=t_pengajuan.id_buyer and `from`=t_pengajuan.id_seller) OR (`from`=t_pengajuan.id_buyer and `to`=t_pengajuan.id_seller)) and recd=1 and `to`= '".$this->session->userdata('id')."')jml, case WHEN id_buyer='".$this->session->userdata('id')."' THEN 
                (
                	SELECT thumbnail from t_registrasi where id=id_seller    
                )ELSE (
                    SELECT thumbnail from t_registrasi where id=id_buyer
                )END AS thumbnail
                FROM t_pengajuan  where (id_buyer='".$this->session->userdata('id')."' OR id_seller='".$this->session->userdata('id')."') and status in ('Sign 1','Sign 2','On Schedule')")->result();	

			$data['notifikasi'] = $this->Pengaturan->get_notification_global();
		}
		$data['live'] = $live;	
		$data['title'] = 'Home';
		$data['main'] = 'home';
		$data['senders'] = $senders;
		$data['data'] = $this->Pengaturan->getFoto();
		$data['slider'] = $this->Pengaturan->getSlider();
		$data['chat'] = $query;
		$this->load->view('home',$data,FALSE);				
	}

	public function get_sender(){
		$ck_chat=[];
		$mapData = [];	
		$ck_chat_date = [];
		$query = [];
		$ck_pengajuans = [];
		$query_count = [];
		if(!empty($this->session->userdata('nama'))) {								
			$query = $this->db->query("SELECT distinct id_buyer as `from`, nama_buyer as from_name,id_seller as `to`,nama_seller as to_name, ( SELECT COUNT(*) from frei_chat WHERE ((`to`=t_pengajuan.id_buyer and `from`=t_pengajuan.id_seller) OR (`from`=t_pengajuan.id_buyer and `to`=t_pengajuan.id_seller)) and recd=1 and `to`= '".$this->session->userdata('id')."')jml, case WHEN id_buyer='".$this->session->userdata('id')."' THEN 
				(
					SELECT thumbnail from t_registrasi where id=id_seller    
				)ELSE (
				    SELECT thumbnail from t_registrasi where id=id_buyer
				)END AS thumbnail
				FROM t_pengajuan  where (id_buyer='".$this->session->userdata('id')."' OR id_seller='".$this->session->userdata('id')."') and status in ('Sign 1','Sign 2','On Schedule')")->result();						
		} 
		echo json_encode(array("senders" => $query));
        exit();
	}
	public function get_chat($id){
		$ck_chat=[];
		$mapData = [];	
		$ck_chat_date = [];
		$query = [];
		$ck_pengajuans = [];
		$query_count = [];

		if(!empty($this->session->userdata('nama'))) {	
			$get_pengajuan = $this->db->query("SELECT * FROM `t_pengajuan` where (id_buyer=".$id." or id_seller=".$id.") and status in ('Sign 1','Sign 2','On Schedule')")->result();
			if(!empty($get_pengajuan)) {

				$where = "(`from`='".$this->session->userdata('id')."' and `to`='".$id."') OR (`to`='".$this->session->userdata('id')."' and `from`='".$id."')";
				$ck_chat = $this->db->from('frei_chat')
							->where($where)							
							->order_by('sent','ASC')			
							->get()->result_array();
				$mapChat = [];

				$senderTo="";
				$senderToName = "";
				$senderFrom = "";
				$senderFromName = "";
				foreach ($ck_chat as $k => $ck_chats) {						
					$dt = DateTime::createFromFormat("Y-m-d H:i:s", $ck_chats["sent"]);
					$hours = $dt->format('H:i'); // '20'
					$tgl = $dt->format('d-m-Y'); 
					$ck_chat[$k]["periode"] = $hours;
					$ck_chat[$k]["tgl"] = $dt->format('Y-m-d');;	
					$ck_chat[$k]["date"] = $tgl;

					if($ck_chats["from"] == $this->session->userdata('id')){
						$senderTo = $ck_chats["to"];	
					} else {
						$senderTo = $ck_chats["from"];						
					}
							 					 			    			    
		        }

		    	foreach ($ck_chat as $k => $ck_chats) {		    		
		    		if($ck_chats['tgl']){
		    			$mapData[$ck_chats['tgl']][] = $ck_chats;
		    		}     
		        }
		        
		        $ck_chat_date = $this->db->query("SELECT DATE(sent) DateOnly FROM frei_chat where (`from`='".$this->session->userdata('id')."' and `to`='".$id."') OR (`to`='".$this->session->userdata('id')."' and `from`='".$id."') GROUP BY DateOnly ORDER BY DateOnly ASC")->result_array();
		        if(empty($ck_chat_date)){		            
		            $ck_chat_date[0]["DateOnly"] = date("d-m-Y");
		        }
		    }				
		} 
		echo json_encode(array("chats" => $mapData, "chats_dates" => $ck_chat_date));
        exit();
	}
	public function count_chat($to){
		
	}
	public function insert_chat(){
		$data = array(
          "from" => $this->session->userdata('id'),
          "from_name" => $this->session->userdata('nama'),
          "to" => $this->input->post('id'),
          "to_name" => $this->input->post('nama'),
          "message" => $this->input->post('message'),
          "sent" =>  date("Y-m-d H:i:s"),
          "recd" => 1           
        );        
		$this->db->insert("frei_chat", $data);
		echo json_encode(array("ok" => true));
        exit();
	}

	public function read_chat(){
		$data = array(          
          'recd' => 2         
        );
        $where = array('to' => $this->session->userdata('id'));
        $this->db->where($where);
        $this->db->update('frei_chat',$data); 
		echo json_encode(array("ok" => true));
        exit();
	}	
}
