<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Setting extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
    date_default_timezone_set('Asia/Jakarta');
    $this->load->model('Registrasi');
    $this->load->model('file');
    $this->load->model('Pengaturan');
    $this->load->model('Email');
    $this->load->model('Pengajuan_model');
    $this->load->helper('date');
    $this->load->model("calendar_model");
    $this->load->library('pagination');
    $this->load->library('Mpdf');
    $this->load->library('user_agent');
    $email = $this->session->userdata('email');
    if (empty($email)) { 
      redirect('register');    
    } 
  }

  public function index()
  {
    $data['script'] = '';    
    $email = $this->session->userdata('email');
    if (empty($email)) { 
      redirect('register');    
    } 
    $data = array();		    
    $data['title'] = 'Pengaturan';
    $data['main'] = 'setting/index';		
    $data['data'] = $this->Pengaturan->getProfil($email);     
    $data['notifikasi'] = $this->Pengaturan->get_notification_global();       		
    $this->load->view('home', $data, FALSE);
  }

  public function dokumen()
  {
    $data['script'] = '';    
    $email = $this->session->userdata('email');
    if (empty($email)) { 
      redirect('register');    
    } 
    $data = array();        
    if($this->input->post('fileSubmit') && !empty($_FILES['userFiles']['name'])){
      $filesCount = count($_FILES['userFiles']['name']);
      for($i = 0; $i < $filesCount; $i++){
        $_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
        $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
        $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
        $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
        $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];
        $uploadPath = 'uploads/files/';
        $config['upload_path'] = $uploadPath;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('userFile')){
          $fileData = $this->upload->data();
          $uploadData[$i]['file_name'] = $fileData['file_name'];
          $uploadData[$i]['created'] = date("Y-m-d H:i:s");
          $uploadData[$i]['modified'] = date("Y-m-d H:i:s");
          $uploadData[$i]['jenis'] = "KTP";
          $uploadData[$i]['email'] = $email;
        }
      }                        
    }
    if($this->input->post('fileSubmitNPWP') && !empty($_FILES['userFilesNPWP']['name'])){
      $filesCount = count($_FILES['userFilesNPWP']['name']);
      for($i = 0; $i < $filesCount; $i++){
        $_FILES['userFilesNPWP']['name'] = $_FILES['userFilesNPWP']['name'][$i];
        $_FILES['userFilesNPWP']['type'] = $_FILES['userFilesNPWP']['type'][$i];
        $_FILES['userFilesNPWP']['tmp_name'] = $_FILES['userFilesNPWP']['tmp_name'][$i];
        $_FILES['userFilesNPWP']['error'] = $_FILES['userFilesNPWP']['error'][$i];
        $_FILES['userFilesNPWP']['size'] = $_FILES['userFilesNPWP']['size'][$i];
        $uploadPath = 'uploads/files/';
        $config['upload_path'] = $uploadPath;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('userFilesNPWP')){
          $fileData = $this->upload->data();
          $uploadData[$i]['file_name'] = $fileData['file_name'];
          $uploadData[$i]['created'] = date("Y-m-d H:i:s");
          $uploadData[$i]['modified'] = date("Y-m-d H:i:s");
          $uploadData[$i]['jenis'] = "NPWP";
          $uploadData[$i]['email'] = $email;
        }
      }                
    }
    if($this->input->post('fileSubmitIJAZAH') && !empty($_FILES['userFilesIJAZAH']['name'])){
      $filesCount = count($_FILES['userFilesIJAZAH']['name']);
      for($i = 0; $i < $filesCount; $i++){
        $_FILES['userFilesIJAZAH']['name'] = $_FILES['userFilesIJAZAH']['name'][$i];
        $_FILES['userFilesIJAZAH']['type'] = $_FILES['userFilesIJAZAH']['type'][$i];
        $_FILES['userFilesIJAZAH']['tmp_name'] = $_FILES['userFilesIJAZAH']['tmp_name'][$i];
        $_FILES['userFilesIJAZAH']['error'] = $_FILES['userFilesIJAZAH']['error'][$i];
        $_FILES['userFilesIJAZAH']['size'] = $_FILES['userFilesIJAZAH']['size'][$i];
        $uploadPath = 'uploads/files/';
        $config['upload_path'] = $uploadPath;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('userFilesIJAZAH')){
          $fileData = $this->upload->data();
          $uploadData[$i]['file_name'] = $fileData['file_name'];
          $uploadData[$i]['created'] = date("Y-m-d H:i:s");
          $uploadData[$i]['modified'] = date("Y-m-d H:i:s");
          $uploadData[$i]['jenis'] = "IJAZAH";
          $uploadData[$i]['email'] = $email;
        }
      }                
    }
    if($this->input->post('fileSubmitSIUP') && !empty($_FILES['userFilesSIUP']['name'])){
      $filesCount = count($_FILES['userFilesSIUP']['name']);
      for($i = 0; $i < $filesCount; $i++){
        $_FILES['userFilesSIUP']['name'] = $_FILES['userFilesSIUP']['name'][$i];
        $_FILES['userFilesSIUP']['type'] = $_FILES['userFilesSIUP']['type'][$i];
        $_FILES['userFilesSIUP']['tmp_name'] = $_FILES['userFilesSIUP']['tmp_name'][$i];
        $_FILES['userFilesSIUP']['error'] = $_FILES['userFilesSIUP']['error'][$i];
        $_FILES['userFilesSIUP']['size'] = $_FILES['userFilesSIUP']['size'][$i];
        $uploadPath = 'uploads/files/';
        $config['upload_path'] = $uploadPath;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('userFilesSIUP')){
          $fileData = $this->upload->data();
          $uploadData[$i]['file_name'] = $fileData['file_name'];
          $uploadData[$i]['created'] = date("Y-m-d H:i:s");
          $uploadData[$i]['modified'] = date("Y-m-d H:i:s");
          $uploadData[$i]['jenis'] = "SIUP";
          $uploadData[$i]['email'] = $email;
        }
      }                
    }
    if($this->input->post('fileSubmitTDP') && !empty($_FILES['userFilesTDP']['name'])){
      $filesCount = count($_FILES['userFilesTDP']['name']);
      for($i = 0; $i < $filesCount; $i++){
        $_FILES['userFilesTDP']['name'] = $_FILES['userFilesTDP']['name'][$i];
        $_FILES['userFilesTDP']['type'] = $_FILES['userFilesTDP']['type'][$i];
        $_FILES['userFilesTDP']['tmp_name'] = $_FILES['userFilesTDP']['tmp_name'][$i];
        $_FILES['userFilesTDP']['error'] = $_FILES['userFilesTDP']['error'][$i];
        $_FILES['userFilesTDP']['size'] = $_FILES['userFilesTDP']['size'][$i];
        $uploadPath = 'uploads/files/';
        $config['upload_path'] = $uploadPath;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('userFilesTDP')){
          $fileData = $this->upload->data();
          $uploadData[$i]['file_name'] = $fileData['file_name'];
          $uploadData[$i]['created'] = date("Y-m-d H:i:s");
          $uploadData[$i]['modified'] = date("Y-m-d H:i:s");
          $uploadData[$i]['jenis'] = "TDP";
          $uploadData[$i]['email'] = $email;
        }
      }                
    }
    if(!empty($uploadData)){
            //Insert file information into the database
      $insert = $this->file->insert($uploadData);
      $statusMsg = $insert?'Files uploaded successfully.':'Some problem occurred, please try again.';
      $this->session->set_flashdata('statusMsg',$statusMsg);
    }
    $data['title'] = 'Pengaturan';
    $data['main'] = 'setting/dokumen';
        //Get files data from database
    $data['data'] = $this->Pengaturan->getProfil($email);        
    $data['files_ktp'] = $this->file->getRows($email,'KTP');
    $data['files_npwp'] = $this->file->getRows($email,'NPWP');      
    $data['files_ijazah'] = $this->file->getRows($email,'IJAZAH');      
    $data['files_siup'] = $this->file->getRows($email,'SIUP');      
    $data['files_tdp'] = $this->file->getRows($email,'TDP'); 
    $data['notifikasi'] = $this->Pengaturan->get_notification_global();       
    $this->load->view('home', $data, FALSE);
  }

  public function iklan()
  {
    $email = $this->session->userdata('email');
    //$email = 'onemulyadi@gmail.com';
    $listing = $this->db->select('t_iklan.*,nama_foto,nama_foto_thumb')
    ->from('t_iklan')
    ->join('t_foto_kapal', 't_foto_kapal.clasification_no=t_iklan.clasification_no','left')
    ->where(array('email'=>$email, 'main' => 1))
    ->group_by('t_iklan.id')
    ->order_by('date_iklan','desc')
    ->get()
    ->result();		
    $live = $this->db->select('t_iklan.*,nama_foto,nama_foto_thumb')
    ->from('t_iklan')
    ->join('t_foto_kapal', 't_foto_kapal.clasification_no=t_iklan.clasification_no','left')
    ->where(array('email'=>$email, 'status' => 1, 'main' => 1))
    ->group_by('t_iklan.id')
    ->order_by('date_iklan','desc')				
    ->get()
    ->result();
    $nonaktif = $this->db->select('t_iklan.*,nama_foto,nama_foto_thumb')
    ->from('t_iklan')
    ->join('t_foto_kapal', 't_foto_kapal.clasification_no=t_iklan.clasification_no','left')
    ->where(array('email'=>$email, 'status' => 0, 'main' => 1))
    ->group_by('t_iklan.id')
    ->order_by('date_iklan','desc')				
    ->get()
    ->result();
    $data['data'] = $this->Pengaturan->getProfil($email);
    $data['title'] = 'Pengaturan';
    $data['main'] = 'setting/iklan';	
    $data['listing'] = $listing;
    $data['live'] = $live;	
    $data['script'] = 'script/index';  
    $data['nonaktif'] = $nonaktif;	
    $data['notifikasi'] = $this->Pengaturan->get_notification_global();
    $this->load->view('home', $data, FALSE);
  }

  public function pengajuan()
  {        
    $email = $this->session->userdata('email');  
    $data['data'] = $this->Pengaturan->getProfil($email);      
    $data['title'] = 'List Pengajuan';
    $data['main'] = 'setting/pengajuan';
    

    //konfigurasi pagination      
        $total = $this->db->select('t_pengajuan.*,nama_foto,nama_foto_thumb,title')
            ->from('t_pengajuan')
            ->join('t_iklan', 't_iklan.id=t_pengajuan.id_kapal','left')
            ->join('t_foto_kapal', 't_foto_kapal.clasification_no=t_iklan.clasification_no','left')
            ->where(array('t_pengajuan.email'=>$email))
            ->get()
            ->result();
            
            // echo $this->db->last_query(); exit();
        $config['total_rows'] = count($total);
      $config['base_url'] = site_url('setting/pengajuan');
      $config['per_page'] = 10;  //show record per halaman
      $config["uri_segment"] = 3;  // uri parameter
      $choice = $config["total_rows"] / $config["per_page"];
      $config["num_links"] = floor($choice);

      // Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
      $config['last_link']        = 'Last';
      $config['next_link']        = 'Next';
      $config['prev_link']        = 'Prev';
      $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
      $config['full_tag_close']   = '</ul></nav></div>';
      $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
      $config['num_tag_close']    = '</span></li>';
      $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
      $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
      $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
      $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
      $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
      $config['prev_tagl_close']  = '</span>Next</li>';
      $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
      $config['first_tagl_close'] = '</span></li>';
      $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
      $config['last_tagl_close']  = '</span></li>';

      $this->pagination->initialize($config);
      $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
      
      $list = $this->db->query('SELECT `t_pengajuan`.*, `nama_foto`, `nama_foto_thumb`, `title` 
                                FROM `t_pengajuan` 
                                LEFT JOIN `t_iklan` ON `t_iklan`.`id`=`t_pengajuan`.`id_kapal` 
                                LEFT JOIN `t_foto_kapal` ON `t_foto_kapal`.`clasification_no`=`t_iklan`.`clasification_no` 
                                where t_pengajuan.email="'. $email .'" limit '.$data["page"].','.$config["per_page"])->result();            
      $data['list'] = $list;
           
      $data['pagination'] = $this->pagination->create_links();
      $data['notifikasi'] = $this->Pengaturan->get_notification_global();
    if(!empty($this->input->post())) {
        $data_post = array(          
          'status' => "Cancel"        
        );
        $where = array(
          'id' => $this->input->post('id'),
        );
        $this->db->where($where);
        $this->db->update('t_pengajuan',$data_post); 
        $this->session->set_flashdata('success', 'Change Status to Cancel successfully...');        
    }         
    $this->load->view('home', $data, FALSE);
  }

  public function baru()
  {
    $email = $this->session->userdata('email');  								
    $data['title'] = 'Tambah Iklan';
    $data['main'] = 'setting/iklanbaru';
    $data['script'] = '';
    $data['data'] = $this->Pengaturan->getProfil($email); 
    $data['groups'] = $this->Pengaturan->getAllGroups();
    $data['kab'] = $this->Pengaturan->getAllKab();		
    $data['country'] = $this->Pengaturan->getCountry();	
    $data['mode']	= 'new';	
    $data['notifikasi'] = $this->Pengaturan->get_notification_global();
    $this->load->view('home', $data, FALSE);		
  }

  public function edit($id)
  {							
    $email = $this->session->userdata('email');  	
    $data['title'] = 'Edit Iklan';
    $data['main'] = 'setting/iklanbaru';
    $data['script'] = '';
    $data['groups'] = $this->Pengaturan->getAllGroups();
    $data['kab'] = $this->Pengaturan->getAllKab();		
    $data['country'] = $this->Pengaturan->getCountry();
    $data['edit1'] = $this->Pengaturan->getDataIklan($id);
    $data['edit2'] = $this->Pengaturan->getDataKapal($id);
    $data['image'] = $this->Pengaturan->getImage($id);
    $data['data'] = $this->Pengaturan->getProfil($email);   
    $data['mode'] = 'edit';	
    $data['notifikasi'] = $this->Pengaturan->get_notification_global();	
    $this->load->view('home', $data, FALSE);		
  }

  public function upload()
  {                                              
    $email = $this->session->userdata('email');
    $data['title'] = 'Upload Sign';
    $data['main'] = 'setting/upload-sign';
    $data['script'] = '';
    $data['data'] = $this->Pengaturan->getProfil($email);
    $data['groups'] = $this->Pengaturan->getPengajuan($email);
    $data['groups_2'] = $this->Pengaturan->getPengajuan_2($email);
    $data['mode'] = 'edit';     
    $data['notifikasi'] = $this->Pengaturan->get_notification_global();
    $this->load->view('home', $data, FALSE);        
  }

  public function calendar()
  {                                  

    $email = $this->session->userdata('email');
    $data['title'] = 'Calendar Meet Up';
    $data['main'] = 'setting/calendar';
    $data['script'] = '';
    $data['data'] = $this->Pengaturan->getProfil($email);
    $data['groups'] = $this->Pengaturan->getMeetSaya($email);
    $data['groups_2'] = $this->Pengaturan->getMeetClient($email);
    $data['mode'] = 'edit';  
    $data['notifikasi'] = $this->Pengaturan->get_notification_global();   
    $this->load->view('home', $data, FALSE);        
  } 
  public function notifikasi()
  {                                  

    $email = $this->session->userdata('email');    
    $data['main'] = 'setting/notifikasi';    
    $data['data'] = $this->Pengaturan->getProfil($email);      
    $data['notifikasi'] = $this->Pengaturan->get_notification_global();   
    $this->load->view('home', $data, FALSE);        
  } 
  public function negotiation()
  {                                  
    $email = $this->session->userdata('email');    
    $data['main'] = 'setting/negotiation';    
    $data['data'] = $this->Pengaturan->getProfil($email);      
    $data['notifikasi'] = $this->Pengaturan->get_notification_global(); 
    $data['negotiation'] = $this->Pengaturan->getNego(); 
    $this->load->view('home', $data, FALSE);        
  }
  public function dnego($id)
  {                                  

    $email = $this->session->userdata('email');    
    $data['main'] = 'setting/detailnegotiation';    
    $data['data'] = $this->Pengaturan->getProfil($email);      
    $data['notifikasi'] = $this->Pengaturan->get_notification_global(); 
    $data['negotiation'] = $this->Pengaturan->getDNego($id); 
    $query = $this->db->get_where('t_nego',array('id'=>$id))->result(); 
    $data['history'] = $this->Pengaturan->getHNego($query[0]->id_iklan, $query[0]->email); 
    $this->load->view('home', $data, FALSE);        
  }
    public function vnego($id)
    {                                  
        $email = $this->session->userdata('email');    
        $data['main'] = 'setting/detailnegotiation';    
        $data['data'] = $this->Pengaturan->getProfil($email);      
        $data['notifikasi'] = $this->Pengaturan->get_notification_global(); 
        $data['negotiation'] = $this->Pengaturan->getDNego($id); 
        $query = $this->db->get_where('t_nego',array('id'=>$id))->result(); 
        $data['history'] = $this->Pengaturan->getHNego($query[0]->id_iklan); 
        $data['view'] = "view";
        $this->load->view('home', $data, FALSE);        
    }
    public function not_deal()
    {       
        if(!empty($this->input->post('btnNoDeal'))){
            $status=2;
        }else{
            $status=1;
            $query = $this->db->get_where('t_nego',array('id' => $this->input->post('id_nego')))->result(); 
            $this->export_pdf($query[0]->id_iklan, 0, $query[0]->email, $query[0]->price_nego, $query[0]->f_komisi,$query[0]->n_komisi);
        }
        $data = array(
            'note_nego'     => $this->input->post('note'), 
            'status_nego'   => $status
        );
        $this->db->where('id', $this->input->post('id_nego'));
        $this->db->update('t_nego',$data);
        
        $this->db->where('url', "https://marinebusiness.co.id/setting/dnego/".$this->input->post('id_nego'));
        $this->db->update('t_notification',array('status' => 1));
        
        $data_nego = $this->db->get_where('t_nego',array('id' => $this->input->post('id_nego')))->result();
        $data = array(
	    	'kategori'			=> 'Seller make advice negotiation price',
		    'message_notif' 	=> "Advice negotiation price from seller already done. Please check your negotiation in menu.",	
		    'email'				=> $data_nego[0]->email,	
		    'url'				=> "https://marinebusiness.co.id/setting/negotiation",
		    'action'            => "read"
		);
		$this->db->insert('t_notification', $data); 
		
		$this->session->set_flashdata('success', 'Data saved successfully !!');
        redirect('setting/dnego/'. $this->input->post('id_nego'));
                    
    }
    
    public function view_re_nego($id){
        $query = $this->db->select('t_iklan.*,nama_foto,nama_foto_thumb')
                ->from('t_iklan')
                ->join('t_foto_kapal', 't_foto_kapal.clasification_no=t_iklan.clasification_no')
                ->where(array('t_iklan.id'=>$id))
                ->get()
                ->result();
		echo json_encode(array("ok" => true, "row" => $query));
        exit();
	}
	
	public function read_notif($id){
        $this->db->where('id', $id);
        $this->db->update('t_notification',array('status' => 1));
        
		echo json_encode(array("ok" => true));
        exit();
	}

  public function calendar_json()
  { 
      $email = $this->session->userdata('email');
      $data['groups'] = $this->Pengaturan->getMeetSaya($email);
      $data['groups_2'] = $this->Pengaturan->getMeetClient($email);

      $this->output->set_content_type('application/json')
          ->set_output(json_encode($data));
  }
  public function get_calendar()
  {                                              
    $email = $this->session->userdata('email');        
    $data['calendar'] = $this->Pengaturan->get_calendar($email);        
    $this->load->view('home', $data, FALSE);        
  }

	  public function get_events()
	  {
         // Our Start and End Dates
   		$start = $this->input->get("start");
   		$end = $this->input->get("end");

         $startdt = new DateTime('now'); // setup a local datetime
         $startdt->setTimestamp($start); // Set the date based on timestamp
         $start_format = $startdt->format('Y-m-d H:i:s');

         $enddt = new DateTime('now'); // setup a local datetime
         $enddt->setTimestamp($end); // Set the date based on timestamp
         $end_format = $enddt->format('Y-m-d H:i:s');

         $events = $this->calendar_model->get_events($start_format, $end_format);

         $data_events = array();

         foreach($events->result() as $r) {

           $data_events[] = array(
             "id" => $r->ID,
             "title" => $r->title,
             "description" => $r->description,
             "end" => $r->end,
             "start" => $r->start,
             "kode_pengajuan" => $r->kode_pengajuan,
             "location" => $r->location,
             "agree_1" => $r->agree_1,
             "agree_2" => $r->agree_2,
             "status" => $r->status,
           );
         }

         echo json_encode(array("events" => $data_events));
         exit();
       }

       public function add_event() 
       {
        /* Our calendar data */
        $name = $this->input->post("name", TRUE);
        $desc = $this->input->post("description", TRUE);
        $location = $this->input->post("location");
        $start_date = $this->input->post("start_date", TRUE);
        $end_date = $this->input->post("end_date", TRUE);

        if(!empty($start_date)) {            
         $sd = date("Y-m-d H:i:s",strtotime($start_date));           
         $start_date = $sd;           
           //$start_date_timestamp = $sd->getTimestamp();
       } else {
         $start_date = date("Y-m-d H:i:s", time());
           //$start_date_timestamp = time();
       }

       if(!empty($end_date)) {           
         $end_date = date("Y-m-d H:i:s",strtotime($end_date));
           //$end_date_timestamp = $ed->getTimestamp();
       } else {
         $end_date = date("Y-m-d H:i:s", time());
           //$end_date_timestamp = time();
       }

        $this->calendar_model->add_event(array(
          "title" => $name,
          "description" => $desc,
          "start" => $start_date,
          "end" => $end_date,
          "kode_pengajuan" => $this->input->post('kode_pengajuan_2'),
          "location" => $this->input->post('location'),
          "agree_1" => 1 
          )
        );

        $data = array(          
          'onschedule' => 1         
        );
        $where = array(
          'kode_pengajuan' => $this->input->post('kode_pengajuan_2'),
        );
        $this->db->where($where);
        $this->db->update('t_pengajuan',$data); 
        $body = '<div style="background-color:transparent;width:100%!important">
        <div style="border-top:0px solid transparent;border-left:0px solid transparent;border-bottom:0px solid transparent;border-right:0px solid transparent;padding-top:5px;padding-bottom:5px;padding-right:0px;padding-left:0px">
            <div style="font-family:"Roboto",Tahoma,Verdana,Segoe,sans-serif;line-height:120%;color:#1b334b;padding-right:0px;padding-left:10px;padding-top:5px;padding-bottom:5px"> 
                <div style="font-size:12px;line-height:14px;font-family:Roboto,Tahoma,Verdana,Segoe,sans-serif;color:#1b334b;text-align:left">
                    <p style="margin:0;font-size:24px;line-height:29px;text-align:center">
                        <a style="color:#1b334b;text-decoration:none" href="#" target="_blank" >&#65279;Request Schedule Meetup for Agreement No. '.$this->input->post('kode_pengajuan_2').'</a>
                    </p>
                </div> 
            </div>
            <hr>
            <div style="font-family:"Roboto",Tahoma,Verdana,Segoe,sans-serif;line-height:180%;color:#1b334b;padding-right:10px;padding-left:10px;padding-top:10px;padding-bottom:10px">  
                <div style="font-size:12px;line-height:22px;font-family:Roboto,Tahoma,Verdana,Segoe,sans-serif;color:#1b334b;text-align:left">
                    <p style="margin:0;font-size:14px;line-height:25px;text-align:center">Terima kasih telah memilih jasa layanan kami untuk menunjang bisnis anda.</p>
                    <p style="margin:0;font-size:14px;line-height:25px;text-align:center">
                        Kami mengundang saudara untuk meeting dan membahas perjanjian kontrak berhubungan dengan transaksi dengan no diatas.  
                    </p>
                    <div style="margin:0;font-size:14px;line-height:25px;width: auto;">
                    <table style="width: auto;" align="center">
                        <tr>
                            <td>Event Name</td><td>:</td><td>'. $name .'</td>
                        </tr>
                        <tr>
                            <td>Date</td><td>:</td><td>'. $start_date .'</td>
                        </tr>
                        <tr>
                            <td>Location</td><td>:</td><td>'. $location .'</td>
                        </tr>
                        <tr>
                            <td>Description</td><td>:</td><td>'. $desc.'</td>
                        </tr>
                        
                    </table>
                    </div>
                </div> 
            </div>';

            $body.='<div align="center" class="" style="padding-right:10px;padding-left:10px;padding-top:5px;padding-bottom:15px">
                <a href="https://marinebusiness.co.id/notification/coming/'.$this->input->post('kode_pengajuan_2').'" style="display:inline-block;padding-top:12px;padding-left:24px;padding-bottom:12px;padding-right:24px;text-decoration:none;background-color:#47bbe4;border-radius:5px;font-weight:bold;color:#ffffff;text-transform:uppercase;font-size:16px">                        
                    <strong>Datang</strong>                    
                </a> 
                <a href="https://marinebusiness.co.id/notification/reschedule/'.$this->input->post('kode_pengajuan_2').'" style="display:inline-block;padding-top:12px;padding-left:24px;padding-bottom:12px;padding-right:24px;text-decoration:none;background-color:#47bbe4;border-radius:5px;font-weight:bold;color:#ffffff;text-transform:uppercase;font-size:16px">                        
                    <strong>Reschedule</strong>                    
                </a>                
            </div>';
        $body.='</div>
    </div>';
    	$getPengajuan=$this->db->get_where('t_pengajuan',array('kode_pengajuan'=> $this->input->post('kode_pengajuan_2')))->result();        
    	$getEmail=$this->db->get_where('t_registrasi',array('id'=> $getPengajuan[0]->id_buyer))->result(); 
       
        $this->Pengaturan->sendMail($getEmail[0]->email, $body, 'Request Schedule Meetup for Agreement No. '.$this->input->post('kode_pengajuan_2'));  

        $data = array(
	    	'kategori'			=> 'You have new schedule meetup',
		    'message_notif' 	=> "Seller make a schedule meet up on '". $start_date."' at '" . $location ."' (". $this->input->post('kode_pengajuan_2') .")" ,	    
		    'email'				=> $getEmail[0]->email,	
		    'url'				=> "https://marinebusiness.co.id/setting/calendar"	        		        
		);
		$this->db->insert('t_notification', $data);             
       redirect(site_url("setting/calendar"));
     }

    public function edit_event()
    {
        $eventid = intval($this->input->post("eventid"));      
        $event = $this->calendar_model->get_event($eventid);
        if($event->num_rows() == 0) {
           echo"Invalid Event";
           exit();
        }

        $event->row();

         /* Our calendar data */
         $name = $this->input->post("name");
         $desc = $this->input->post("description");
         $start_date = $this->input->post("start_date");
         //$end_date = $this->input->post("end_date");
         $location = $this->input->post("location");
         $delete = intval($this->input->post("delete"));

        if(!$delete) {
            if(!empty($start_date)) {
                $sd = date("Y-m-d H:i:s",strtotime($start_date));                     
                $start_date = $sd;                    
            } else {
                $start_date = date("Y-m-d H:i:s", time());                    
            }

            if(!empty($end_date)) {                    
                $ed = date("Y-m-d H:i:s",strtotime($end_date)); 
                $end_date = $ed;                    
            } else {
                $end_date = date("Y-m-d H:i:s", time());                    
            }

            $this->calendar_model->update_event($eventid, array(
                "title" => $name,
                "description" => $desc,
                "start" => $start_date,
                // "end" => $end_date,   
                "location" => $location)
            );

            $body = '<div style="background-color:transparent;width:100%!important">
        <div style="border-top:0px solid transparent;border-left:0px solid transparent;border-bottom:0px solid transparent;border-right:0px solid transparent;padding-top:5px;padding-bottom:5px;padding-right:0px;padding-left:0px">
            <div style="font-family:"Roboto",Tahoma,Verdana,Segoe,sans-serif;line-height:120%;color:#1b334b;padding-right:0px;padding-left:10px;padding-top:5px;padding-bottom:5px"> 
                <div style="font-size:12px;line-height:14px;font-family:Roboto,Tahoma,Verdana,Segoe,sans-serif;color:#1b334b;text-align:left">
                    <p style="margin:0;font-size:24px;line-height:29px;text-align:center">
                        <a style="color:#1b334b;text-decoration:none" href="#" target="_blank" >&#65279;Revise Schedule Meetup for Agreement No. '.$this->input->post('kode_pengajuan_2').'</a>
                    </p>
                </div> 
            </div>
            <hr>
            <div style="font-family:"Roboto",Tahoma,Verdana,Segoe,sans-serif;line-height:180%;color:#1b334b;padding-right:10px;padding-left:10px;padding-top:10px;padding-bottom:10px">  
                <div style="font-size:12px;line-height:22px;font-family:Roboto,Tahoma,Verdana,Segoe,sans-serif;color:#1b334b;text-align:left">
                    <p style="margin:0;font-size:14px;line-height:25px;text-align:center">Terima kasih telah memilih jasa layanan kami untuk menunjang bisnis anda.</p>
                    <p style="margin:0;font-size:14px;line-height:25px;text-align:center">
                        Kami mengundang saudara untuk meeting dan membahas perjanjian kontrak berhubungan dengan transaksi dengan no diatas.  
                    </p>
                    <div style="margin:0;font-size:14px;line-height:25px;width: auto;">
                    <table style="width: auto;" align="center">
                        <tr>
                            <td>Event Name</td><td>:</td><td>'. $name .'</td>
                        </tr>
                        <tr>
                            <td>Date</td><td>:</td><td>'. $start_date .'</td>
                        </tr>
                        <tr>
                            <td>Location</td><td>:</td><td>'. $location .'</td>
                        </tr>
                        <tr>
                            <td>Description</td><td>:</td><td>'. $desc.'</td>
                        </tr>
                        
                    </table>
                    </div>
                </div> 
            </div>';

            $body.='<div align="center" class="" style="padding-right:10px;padding-left:10px;padding-top:5px;padding-bottom:15px">
                <a href="https://marinebusiness.co.id/notification/coming/'.$this->input->post('kode_pengajuan_2').'" style="display:inline-block;padding-top:12px;padding-left:24px;padding-bottom:12px;padding-right:24px;text-decoration:none;background-color:#47bbe4;border-radius:5px;font-weight:bold;color:#ffffff;text-transform:uppercase;font-size:16px">                        
                    <strong>Datang</strong>                    
                </a> 
                <a href="https://marinebusiness.co.id/notification/reschedule/'.$this->input->post('kode_pengajuan_2').'" style="display:inline-block;padding-top:12px;padding-left:24px;padding-bottom:12px;padding-right:24px;text-decoration:none;background-color:#47bbe4;border-radius:5px;font-weight:bold;color:#ffffff;text-transform:uppercase;font-size:16px">                        
                    <strong>Reschedule</strong>                    
                </a>                
            </div>';
        $body.='</div>
    </div>';
    	$getPengajuan=$this->db->get_where('t_pengajuan',array('kode_pengajuan'=> $this->input->post('kode_pengajuan_2')))->result();        
    	$getEmail=$this->db->get_where('t_registrasi',array('id'=> $getPengajuan[0]->id_buyer))->result(); 
       
        $this->Pengaturan->sendMail($getEmail[0]->email, $body, 'Revise Schedule Meetup for Agreement No. '.$this->input->post('kode_pengajuan_2'));  

        $data = array(
	    	'kategori'			=> 'Reschedule meetup',
		    'message_notif' 	=> "Seller re-schedule meet up on '". $start_date."' at '" . $location ."' (". $this->input->post('kode_pengajuan_2') .")" ,	    
		    'email'				=> $getEmail[0]->email,	
		    'url'				=> "https://marinebusiness.co.id/setting/calendar"	        		        
		);
		$this->db->insert('t_notification', $data);   

        } else {
            $data = array(          
                'onschedule' => 0         
            );
            $where = array(
                'kode_pengajuan' => $this->input->post('kode_pengajuan_2'),
            );
            $this->db->where($where);
            $this->db->update('t_pengajuan',$data); 
            $this->calendar_model->delete_event($eventid);
        }
        redirect(site_url("setting/calendar"));
 }
    public function update_active_product($active,$id)
    {                                 
        $data = array(          
            'active' => $active         
        );
        $where = array(
            'id' => $id,
        );
        $this->db->where($where);
        $this->db->update('t_iklan',$data); 
        $response = array(
            'error' => false,                    
        );  
        $this->output->set_content_type('application/json')
            ->set_output(json_encode($response));
    }
public function update_calendar()
 {                                 
  $startdate = $this->input->post('startdate').'+'.$this->input->post('zone');             
  $type =  $this->input->post('type');
  $email = $this->session->userdata('email');
  $data = array(
    'title'     => $this->input->post('title'),
    'startdate' => $startdate,
    'enddate'   => $startdate,
    'allDay'    => false,
    'kode_pengajuan' => $this->input->post('kode_pengajuan'),
    'location' => $this->input->post('location'),
    'agree_1' => 1                     
  );
  $this->db->insert('t_calendar', $data);
  $lastid = $this->db->insert_id();
  $response = array(
    'error' => false,                    
    'id'    => $lastid
  );                          
  $this->output->set_content_type('application/json')
  ->set_output(json_encode($response));
}

public function foto($id='')
{							
  $response = [];
  if(!empty($id)) {
   $response = $this->Pengaturan->getImage($id);
 }													
 $this->output->set_content_type('application/json')
 ->set_output(json_encode($response));			
}

public function get_sertifikat($id){
  $data=$this->db->get_where('t_sertifikat_mst',array('type'=>$id))->result();
  $response = array(
   'error' => false,
   'data'	=> $data
 );											
  $this->output->set_content_type('application/json')
  ->set_output(json_encode($response));
}

public function get_pdf($kode_pengajuan){
  $data=$this->db->get_where('t_pengajuan',array('kode_pengajuan'=>$kode_pengajuan))->result();        
  $response = array(
    'error' => false,
    'data'  => $data
  );                                          
  $this->output->set_content_type('application/json')
  ->set_output(json_encode($response));
}
public function download($id,$sign){
  $data=$this->db->get_where('t_pengajuan',array('id'=>$id))->result(); 

  $this->load->helper('download'); 
  if($sign==1){
    $pdf = $data[0]->pdf_1;  
  }else{
    $pdf = 'assets/pdf/'. $data[0]->pdf_2;  
  }                             
  force_download($pdf,NULL);        
}

public function proses_upload(){
  $uploadPath = 'uploads/iklan/';
  $config['upload_path'] = $uploadPath;        
  $config['allowed_types'] = 'gif|jpg|png|ico|jpeg';
  $this->load->library('upload',$config);
  $this->upload->initialize($config);       
  if($this->upload->do_upload('userfile')){
   $token = $this->input->post('token_foto');
   $nama = $this->upload->data('file_name');
   $thumbnail = $this->resizeImage($nama, "uploads/iklan/".$nama, "uploads/iklan/thumbnail/",250,250);   
   $id = $this->input->post('clasification_no');
   $this->db->insert('t_foto_kapal',array('nama_foto'=>$nama,
        'nama_foto_thumb'=>$thumbnail,
        'token'=>$token,
        'main' => 1,
        'clasification_no' => $id));
   echo $this->db->last_query();
 }
}
public function proses_upload_sign(){
  $uploadPath                 = 'assets/pdf/';
  $config['upload_path']      = $uploadPath;        
  $config['allowed_types']    = 'jpg|png|pdf|jpeg';

  $this->load->library('upload',$config);
  $this->upload->initialize($config);        
  if($this->upload->do_upload('userfile')){
    $token  = $this->input->post('token_sertifikat');
    $kode_pengajuan     = $this->input->post('kode');            
    $nama   = $this->upload->data('file_name');

    $where = array(
      'kode_pengajuan' => $kode_pengajuan
    );
    $data = array(
      'pdf_2' => $nama, 
      'tgl_sign_1' => date('Y-m-d h:i:s'),
      'status' => 'Sign 1'         
    );
    $this->db->where($where);
    $this->db->update('t_pengajuan',$data); 
    
    $query = $this->db->get_where('t_pengajuan',array('kode_pengajuan' => $kode_pengajuan))->result();           
    foreach ($query as $key => $value) {
        $body   = "<h3>Pemberitahuan upload sign agreement dengan kode ". $kode_pengajuan ." oleh Buyer telah berhasil</h3>";
        $body .="<p>Silahkan cek information pengajuan pada halaman pengaturan di <a href='https://marinebusiness.co.id/setting/upload'>marinebusiness.co.id</a></p>";
         $getEmail=$this->db->get_where('t_registrasi',array('id'=> $value->id_seller))->result(); 
       
        $this->Pengaturan->sendMail($getEmail[0]->email, $body,"Pemberitahuan upload sign agreement dengan kode ". $kode_pengajuan ." oleh Buyer telah berhasil" ); 

        $data = array(
	    	'kategori'			=> 'Inquery Success Sign by Buyer',
		    'message_notif' 	=> "Your Inquery code number '". $kode_pengajuan."' already sign by Buyer.",	    
		    'email'				=> $getEmail[0]->email,	
		    'url'				=> "https://marinebusiness.co.id/setting/pengajuan"	        		        
		);
		$this->db->insert('t_notification', $data);    
    }  
            
  }
  $response = array(
    'error' => false,                    
  );  
  $this->output->set_content_type('application/json')->set_output(json_encode($response));

}

public function proses_upload_sign_2(){
  $uploadPath                 = 'assets/pdf/';
  $config['upload_path']      = $uploadPath;        
  $config['allowed_types']    = 'jpg|png|pdf|jpeg';

  $this->load->library('upload',$config);
  $this->upload->initialize($config);        
  if($this->upload->do_upload('userfile')){
    $token  = $this->input->post('token_sertifikat');
    $kode_pengajuan     = $this->input->post('kode');            
    $nama   = $this->upload->data('file_name');

    $where = array(
      'kode_pengajuan' => $kode_pengajuan
    );
    $data = array(
      'pdf_3' => $nama, 
      'tgl_sign_2' => date('Y-m-d h:i:s'),
      'status' => 'Sign 2'         
    );
    $this->db->where($where);
    $this->db->update('t_pengajuan',$data);    

    $query = $this->db->get_where('t_pengajuan',array('kode_pengajuan' => $kode_pengajuan))->result();       
    foreach ($query as $key => $value) {    	
        $body   = "<h3>Pemberitahuan upload sign agreement dengan kode ". $kode_pengajuan ." oleh Seller telah berhasil</h3>";
        $body .="<p>Silahkan cek information pengajuan pada halaman pengaturan di <a href='https://marinebusiness.co.id/setting/upload'>marinebusiness.co.id</a></p>";
        $getEmail=$this->db->get_where('t_registrasi',array('id'=> $value->id_buyer))->result(); 
       
        $this->Pengaturan->sendMail($getEmail[0]->email, $body,"Pemberitahuan upload sign agreement dengan kode ". $kode_pengajuan ." oleh Seller telah berhasil" ); 

        $data = array(
	    	'kategori'			=> 'Inquery Success Sign by Seller',
		    'message_notif' 	=> "Your Inquery code number '". $kode_pengajuan."' already sign by Seller.",	    
		    'email'				=> $getEmail[0]->email,	
		    'url'				=> "https://marinebusiness.co.id/setting/pengajuan"	        		        
		);
		$this->db->insert('t_notification', $data); 
    }       
  }
  $response = array(
    'error' => false,                    
  );  
  $this->output->set_content_type('application/json')->set_output(json_encode($response));

}

public function proses_upload_sertifikat(){
  $uploadPath 				= 'uploads/';
  $config['upload_path'] 		= $uploadPath;        
  $config['allowed_types'] 	= 'gif|jpg|png|ico|jpeg';

  $this->load->library('upload',$config);
  $this->upload->initialize($config);        
  if($this->upload->do_upload('userfile')){
   $token 	= $this->input->post('token_sertifikat');
   $id 	= $this->input->post('id');
   $clasification_no 	= $this->input->post('clasification_no');
   $nama 	= $this->upload->data('file_name');

   $where = array(
    'id' => $id
  );
   $data = array(
    'dokumen' => $nama,	
    'clasification_no' => $clasification_no			
  );
   $this->db->where($where);
   $this->db->update('t_sertifikat',$data);        	
 }
 $table = '<table class="table table-dark"><thead class="thead-dark"><tr><th scope="col">#</th><th scope="col">Type</th><th scope="col" class="center">Certificate</th><th scope="col" class="center">Document</th><th class="center">Action</th></tr></thead><tbody>';
 $email = $this->session->userdata('email');    

 $this->db->select('t_sertifikat_mst.kode_sertifikat,nama_sertifikat,dokumen,t_sertifikat.id');
 $this->db->from('t_sertifikat');
 $this->db->join('t_sertifikat_mst', 't_sertifikat.kode_sertifikat=t_sertifikat_mst.kode_sertifikat');        
 $this->db->where('token', $token);
 $this->db->or_where('clasification_no', $this->input->post('clasification_no'));
 $query = $this->db->get();

 $no=1;  
 foreach ($query->result() as $value) {
  $table .='<tr><th scope="row">'.$no.'</th><td>'.$value->kode_sertifikat.'</td><td class="left">'.$value->nama_sertifikat.'</td><td class="left"><a href="'.base_url().'uploads/'. $value->dokumen .'" data-lightbox="roadtrip">'.$value->dokumen.'</a></td><td><a href="javascript:void(0)" onclick="hapus_sertifikat('.$value->id.')"><i class="fa fa-eraser"></i>&nbsp;Remove</a></td></tr>';			
  $no++;
}

$table .= "</tbody></table>";
$response = array(
 'error' => false,
 'tabel'	=> $table
);											
$this->output->set_content_type('application/json')->set_output(json_encode($response));
}
public function find_calendar($kode_pengajuan){  
  $this->db->from('calendar_events');  
  $this->db->where(array('kode_pengajuan' => $kode_pengajuan));
  $query = $this->db->get()->result_array();

  $response = array(
   'error' => false,
   'data'  => $query   
  );                     
  $this->output->set_content_type('application/json')->set_output(json_encode($response));
}
public function find_sertifikat($clasification_no){
  $table = '<table class="table table-dark"><thead class="thead-dark"><tr><th scope="col">#</th><th scope="col">Type</th><th scope="col" class="center">Certificate</th><th scope="col" class="center">Document</th><th class="center">Action</th></tr></thead><tbody>';

  $email = $this->session->userdata('email');   

  $this->db->select('t_sertifikat_mst.kode_sertifikat,nama_sertifikat,dokumen,t_sertifikat.id');
  $this->db->from('t_sertifikat');
  $this->db->join('t_sertifikat_mst', 't_sertifikat.kode_sertifikat=t_sertifikat_mst.kode_sertifikat');
  $this->db->where(array('clasification_no' => $clasification_no));
  $query = $this->db->get();

  $no=1;  
  foreach ($query->result() as $value) {
    $table .='<tr><th scope="row">'.$no.'</th><td>'.$value->kode_sertifikat.'</td><td class="left">'.$value->nama_sertifikat.'</td><td class="left"><a href="'.base_url().'uploads/'. $value->dokumen .'" data-lightbox="roadtrip">'.$value->dokumen.'</a></td><td><a href="javascript:void(0)" onclick="hapus_sertifikat('.$value->id.')"><i class="fa fa-eraser"></i>&nbsp;Remove</a></td></tr>';			
    $no++;
  }	

  $table .= "</tbody></table>";
  $response = array(
   'error' => false,
   'tabel'	=> $table
 );											
  $this->output->set_content_type('application/json')->set_output(json_encode($response));
}

public function simpan()
{		
  $token =  $this->input->post('token');
  $email = $this->session->userdata('email');
  $data = array(
    'kode_sertifikat' 	=> $this->input->post('type'),
    'token'				=> $token,
    'email'				=> $email,		        		        
  );
  $this->db->insert('t_sertifikat', $data);
  $lastid = $this->db->insert_id();
  $response = array(
   'error' => false,
   'token' => $token,
   'id'	=> $lastid
 );							
  $this->output->set_content_type('application/json')
  ->set_output(json_encode($response));
}

public function getlist($limit, $start)
{     
  //header('Content-Type: application/json');
      
  return $data;
  //echo $this->Pengajuan_model->get_all_produk($email);           

        //$email = $this->session->userdata('email');  
        // $this->db->from('t_pengajuan');
        // $this->db->where('email',$email);        
        // $query = $this->db->get();
        // $result = $query->result_array();


        // $response = array(
        //             'total' => $query->num_rows(),
        //             'rows' => $result
        //             );                                          
        // $this->output->set_content_type('application/json')->set_output(json_encode($response));
}
public function updatepassword(){       
    if($this->input->post('newPassword') != $this->input->post('newPassword2')) {
        $this->session->set_flashdata('error', 'Your New Password not same value..');   
        redirect('setting');
    }
    $email = $this->session->userdata('email'); 
    $query = $this->db->get_where('t_registrasi',array('email' => $email, 'pass' => $this->input->post('oldPassword'), 'verified' => 1));       
    if ($query->num_rows() > 0) {
        foreach ($query->result() as $key => $value) {              
            $data = array(
                'pass'      => $this->input->post('newPassword'),                                                     
            );
            $this->db->where('email', $email);
            $this->db->update('t_registrasi',$data);

            $this->session->set_flashdata('statusMsg', 'Your Password has been changed successfully..');                        
        }
    }else{      
        $this->session->set_flashdata('error', 'Your Password wrong..');            
    }
    redirect('setting');
                
}

public function foto_profil()
{               

    $email = $this->session->userdata('email');   
    $uploadPath = 'uploads/profile/';
    $config['upload_path'] = $uploadPath;
    $config['allowed_types'] = 'jpg|png|jpeg';
    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    if($this->upload->do_upload('file')){
      $fileData = $this->upload->data();   
      $thumbnail = $this->resizeImage($fileData['file_name'], 'uploads/profile/'.$fileData['file_name'],'uploads/profile/thumbnail/',150,150);   
    } 
    $data = array(
        'foto_profil' => $fileData['file_name'],
        'thumbnail' => $thumbnail                                            
    );
    $this->db->where('email', $email);
    $this->db->update('t_registrasi',$data);


    $response = array(
       'error' => false,
       'foto'    => '<img id="profileimg" src="https://marinebusiness.co.id/'.$uploadPath."thumbnail/". $thumbnail.'" alt="">'                                    
    );                         
    $this->output->set_content_type('application/json')->set_output(json_encode($response));
}

public function resizeImage($filename, $source_path, $target_path, $width, $height)
{
    //$source_path = 'uploads/profile/' . $filename;
    //$target_path = 'uploads/profile/thumbnail/';
    $config_manip = array(
          'image_library' => 'gd2',
          'source_image' => $source_path,
          'new_image' => $target_path,
          'maintain_ratio' => TRUE,
          'create_thumb' => TRUE,
          'thumb_marker' => '_thumb',
          'width' => $width,
          'height' => $height
    );


    $this->load->library('image_lib', $config_manip);
    if(!$this->image_lib->resize()) {
      echo $this->image_lib->display_errors();
      return false;
    }

    $this->image_lib->clear();
    preg_match('/(?<extension>\.\w+)$/im', $filename, $matches);
    $extension = $matches['extension'];
    $thumbnail = preg_replace('/(\.\w+)$/im', '', $filename) . '_thumb' . $extension;
    return $thumbnail;
}

public function ajax_save_profil()
{				
  $email = $this->session->userdata('email');  
  $data = array(
    'nama' 		=> $this->input->post('fullName'),
    'phone' 	=> $this->input->post('hp'),
    'biodata' 	=> $this->input->post('biodata'),
    'address' 	=> $this->input->post('address'),		        	        		       
  );
  $this->db->where('email', $email);
  $this->db->update('t_registrasi',$data);


  $response = array(
   'error' => false,
   'msg'	=> 'Sukses'									
 );							
  $this->output->set_content_type('application/json')
  ->set_output(json_encode($response));
}

public function simpan_data()
{				
  	$datestring = '%Y-%m-%d';
  	$email = $this->session->userdata('email');
  	$data = array(
	    'title' 			=> $this->input->post('title'),
	    'description' 		=> $this->input->post('description'),
	    'date_iklan' 		=> mdate($datestring),    	        
	    'type' 				=> $this->input->post('inputState'),
	    'type_charter' 		=> $this->input->post('typeCharter'),
	    'service' 			=> $this->input->post('gridRadios'),
	    'price'             => str_replace(",","",$this->input->post('price')),
			        //Time & bareboat Charter
	    'price_charter'		=> str_replace(",","",$this->input->post('price_charter')),
	    'duration' 			=> $this->input->post('duration'),
	    'duration_uom' 		=> $this->input->post('duration_uom'),
	    'area' 				=> $this->input->post('area'),
			        //freight Charter
	    'price_freight'		=> str_replace(",","",$this->input->post('price_freight')),
	    'portloading' 		=> $this->input->post('portloading'),
	    'portdiscarge' 		=> $this->input->post('portdiscarge'),
	    'qty_freight' 		=> str_replace(",","",$this->input->post('qty_freight')),
			        //CSM
	    'price_csm'			=> str_replace(",","",$this->input->post('price_csm')),
	    'duration_csm' 		=> $this->input->post('duration_csm'),
	    'duration_csm_uom' 	=> $this->input->post('duration_csm_uom'),
	    'area_csm'	 		=> $this->input->post('area_csm'),
	    'country'	 		=> $this->input->post('country'),
	    'type_comodity'	 	=> $this->input->post('type_comodity'),
	    'dest_comodity'	 	=> $this->input->post('dest_comodity'),
	    'qty_comodity'	 	=> str_replace(",","",$this->input->post('qty_comodity')),
			        // 'address_from' 		=> $this->input->post('address'),
			        // 'latitude' 			=> $this->input->post('latitude'),
			        // 'longitude' 		=> $this->input->post('longtitude'),		        
	    'email'				=> $email,
  	);
  	$data_kapal = array(
	    'vessel_nama' 			=> $this->input->post('vessel'),
	    'owners' 				=> $this->input->post('owner'),
	    'place_build' 			=> $this->input->post('place_build'),
	    'year_build' 			=> $this->input->post('year_build'),		        
	    'builder' 				=> $this->input->post('builder'),
	    'keel_laid' 			=> $this->input->post('keel'),
	    'launching' 			=> $this->input->post('launching'),
	    'port_registry' 		=> $this->input->post('port'),
	    'construction' 			=> $this->input->post('construction'),
	    'call_sign'				=> $this->input->post('call'),
	    'clasification'			=> $this->input->post('clasification'),
	    'imo'					=> $this->input->post('imo'),
			        //'s_phone'				=> $this->input->post('phone'),
	    'loa'					=> str_replace(",","",$this->input->post('loa')),
	    'length'				=> str_replace(",","",$this->input->post('length')),
	    'breadth'				=> str_replace(",","",$this->input->post('breadth')),
	    'depth'					=> str_replace(",","",$this->input->post('dept')),
	    'summer_draught'		=> str_replace(",","",$this->input->post('summer')),
	    'grt'					=> str_replace(",","",$this->input->post('grt')),
	    'nrt'					=> str_replace(",","",$this->input->post('nrt')),
	    'sideboard'				=> str_replace(",","",$this->input->post('side')),
	    'deck_capacity'			=> str_replace(",","",$this->input->post('desk2')),
	    'max_deck_load'			=> str_replace(",","",$this->input->post('load')),		        
	    'deck_area'				=> $this->input->post('desk'),
	    'email'					=> $email,
  	);

  	if($this->input->post('mode') == "edit") {

	   	$this->db->where('id', $this->input->post('idKapal'));
	   	$this->db->update('t_kapal',$data_kapal);

	   	$this->db->where('id', $this->input->post('idIklan'));
	   	$this->db->update('t_iklan',$data); 
	   	$str = $this->db->last_query();

 	} else {
	   	$data['token'] = $this->input->post('token_s');

	   	$this->db->insert('t_iklan', $data);
	   	$id = $this->db->insert_id();

	   	$data_kapal['clasification_no'] = $id;
	   	$this->db->insert('t_kapal', $data_kapal);
	   	$str = $this->db->last_query();

	   	$token=$this->input->post('token_s');    	
	   	$where = array(
	    	'token' => $token
	  	);
   		$updatedata = array(
    		'clasification_no' => $id,				
  		);
	   	$this->db->where($where);
	   	$this->db->update('t_foto_kapal',$updatedata);
	   	$this->db->where($where);
	   	$this->db->update('t_iklan',$updatedata);
	   	$this->db->where($where);
	   	$this->db->update('t_sertifikat',$updatedata);  

 	}


 $response = array(
   'error' => false,
   'data'	=>$data,
   'data_kapal'	=> $data_kapal,
   'query'			=> $str					
 );							
 $this->output->set_content_type('application/json')
 ->set_output(json_encode($response));
}

public function renego() {
    $id = $this->input->post('number');
    $email = $this->session->userdata('email');
    $data = array(
        'id_iklan'    => $id,
        'price_nego'  => $this->input->post('txtNego'),
        'email'       => $email,
        'f_komisi'      => $this->input->post('bcomision'),
        'n_komisi'      => $this->input->post('txtKomisi'),
    );
    $this->db->insert('t_nego', $data);
    $id_nego = $this->db->insert_id();
    
    $this->db->set(array('kirim'=> 1 ));
    $this->db->where('id', $this->input->post('id_nego'));
    $this->db->update('t_nego');	
   
    $data_produk = $this->db->get_where('t_iklan',array('id' => $id))->result();
    $data = array(
    	'kategori'			=> 'Your have Re-Negotiation Price by Client',
	    'message_notif' 	=> $this->session->userdata('nama'). " want you to advice negotiation price.",	
	    'email'				=> $data_produk[0]->email,	
	    'url'				=> "https://marinebusiness.co.id/setting/dnego/". $id_nego	        		        
	);
	$this->db->insert('t_notification', $data); 
	
	$body = "<h2>Anda mendapatkan penawaran harga dari Client</h2>";
    $body .= "<p>Terdapat pengajuan penawaran harga sebagai berikut :</p>";
    $body .= "<table>";
    $body .= "<tr><td>Nama</td><td>:</td><td>". $this->session->userdata('nama') ."</td></tr>";
    $body .= "<tr><td>Title</td><td>:</td><td>". $data_produk[0]->title ."</td></tr>";
    $body .= "<tr><td>Price</td><td>:</td><td>". number_format($this->input->post('txtNego')) ."</td></tr>";
    $body .= "<tr><td>Komisi</td><td>:</td><td>". number_format($this->input->post('n_komisi')) ."</td></tr>";
    $body .= "</table>";

    $this->Pengaturan->sendMail($data_produk[0]->email, $body, "Re-Nego Harga Terbaru");
	
    $this->session->set_flashdata('success', 'Request sent successfully !!'); 
    redirect("setting/negotiation");   
    
}
public function nego() {
    $id = $this->input->post('number');
    if(!empty($this->session->userdata('email'))){
        $email = $this->session->userdata('email');

        $this->db->from('t_nego');
        $this->db->where('email', $email);
        $this->db->where('id_iklan', $id);
        $ck_status=$this->db->where('status_nego', 0)->get();
        if($ck_status->num_rows()>0) {
            $this->session->set_flashdata('error', 'Nego not allowed, You have Nego not complete.. !!'); 
            redirect($this->input->post('uri'));                      
        }else{
            $data = array(
              'id_iklan'    => $id,
              'price_nego'  => $this->input->post('txtNego'),
              'email'       => $email,
              'f_komisi'      => $this->input->post('bcomision'),
              'n_komisi'      => $this->input->post('txtKomisi'),
                                    
            );
            $this->db->insert('t_nego', $data);
            $id_nego = $this->db->insert_id();
            
            $data_produk = $this->db->get_where('t_iklan',array('id' => $id))->result();
            $data = array(
    	    	'kategori'			=> 'Your have Nego Price by Client',
    		    'message_notif' 	=> $this->session->userdata('nama'). " want you to advice negotiation price.",	
    		    'email'				=> $data_produk[0]->email,	
    		    'url'				=> "https://marinebusiness.co.id/setting/dnego/". $id_nego	        		        
    		);
    		$this->db->insert('t_notification', $data); 
    		
    		$body = "<h2>You get quotes from Client</h2>";
            $body .= "<p>There is a price quote with details :</p>";
            $body .= "<table>";
            $body .= "<tr><td>Name</td><td>:</td><td>". $this->session->userdata('nama') ."</td></tr>";
            $body .= "<tr><td>Title</td><td>:</td><td>". $data_produk[0]->title ."</td></tr>";
            $body .= "<tr><td>Price</td><td>:</td><td>". number_format($this->input->post('txtNego')) ."</td></tr>";
            $body .= "<tr><td>Commision</td><td>:</td><td>". $this->input->post('txtKomisi') ." % </td></tr>";
            $body .= "</table>";
            $body .='<p>Please click the following link for the process. <a href="https://marinebusiness.co.id/setting/dnego/'. $id_nego .'">Here</a></p>';

            $this->Pengaturan->sendMail($data_produk[0]->email, $body, "Nego Harga Terbaru");
    		
            $this->session->set_flashdata('success', 'Your request will be processed by Author. Please wait for confirmation no later than 1 x 24 hours'); 
            redirect($this->input->post('uri'));   
        }
    }else{
        redirect('register');
    }
}
public function cek_status_pengajuan() {
    $id = $this->input->post('number');
    if(!empty($this->session->userdata('email'))){
        $email = $this->session->userdata('email');

        $status = array('Cancel', 'Finish');
        $this->db->from('t_pengajuan');
        $this->db->where('email', $email);
        $ck_status = $this->db->where_not_in('status', $status)->get();
        if($ck_status->num_rows()>0) {
            $this->session->set_flashdata('error', 'Agreement not allowed, You have transaction not complete.. !!'); 
            redirect($this->input->post('uri'));                      
        }else{
            $this->export_pdf($id,1);
        }
    }else{
        redirect('register');
    }
}
public function export_pdf($id = "",$ref= "", $email_nego="", $price_nego=0, $f_komisi = "N", $n_komisi = 0) {
        
    if(!empty($this->session->userdata('email'))){
        if($ref==1){
            $email = $this->session->userdata('email');
        }else{
            $email = $email_nego;
        }
        $datestring = '%Y-%m-%d';                        

        
        $data_produk = $this->db->get_where('t_iklan',array('id' => $id))->result();
        $data_kapal = $this->db->get_where('t_kapal',array('clasification_no' => $id))->result();
        $data_buyer = $this->db->get_where('t_registrasi',array('email'=>$email, 'verified' => 1))->result();
        $data_seller = $this->db->get_where('t_registrasi',array('email'=>$data_produk[0]->email, 'verified' => 1))->result();
        if($data_produk[0]->price_charter > 0) {
          $price = $data_produk[0]->price_charter;
        }elseif($data_produk[0]->price_freight > 0) {
          $price = $data_produk[0]->price_freight;
        }elseif($data_produk[0]->price_csm > 0) {
          $price = $data_produk[0]->price_csm;
        }else{
          $price = $data_produk[0]->price;
        }
        
        if($ref==0){
            $price = $price_nego;
        }

        $html = '
        <style type="text/css">
        td {                    
          padding-left: 0;
          font-size:12px;
        }                
        p {
            text-align:justify;
            font-size:12px;
        }
        </style>
        <h3 style="text-align: center;font-weight: bold;display: block;font-size: 1.17em;padding-bottom:0;margin-bottom:0">COMMITMENT FEE OF MARINE BUSINESS</h3>
        <div class="container" style="margin-right: auto;margin-left: auto;padding-left: 15px;padding-right: 15px;">
        <div style="padding: 15px;padding-top:0">
        <hr>
        <p>We are here by agreed to offer commission fees of ...... % from purchase rate for below transaction who act as broker throughout hire period</p>
        <p>The above broker commission is under Owner’s account, where will take obligation to transfer fees once buyer sign CPA and upon received step payment from Buyer</p>
        <p>Fees is based brief description below spec of the Vessel’s, Ship owner and Buyer</p>
        <table>
        <tr>
        <td>Title</td>
        <td>:</td>
        <td>'. $data_produk[0]->title .'</td>
        </tr>
        <tr>
        <td>Type of Transaction</td>
        <td>:</td>
        <td>'. $data_produk[0]->service .'</td>
        </tr>
        <tr>
        <td>Vessel Name</td>
        <td>:</td>
        <td>'. $data_kapal[0]->vessel_nama .'</td>
        </tr>
        <tr>
        <td>Type of Vessel</td>
        <td>:</td>
        <td>'. $data_produk[0]->type .'</td>
        </tr>
        
        </table>
        <table style="margin-top: 10px;margin-bottom:10px">
        <tr>
            <td>1.</td>
            <td colspan="3">As parties 1 owner or shipper </td>
        </tr>
        <tr>
            <td></td>
            <td style="vertical-align: top">Name</td>
            <td style="vertical-align: top">:</td>
            <td>'. $data_seller[0]->nama .'</td>
        </tr>
        <tr>
            <td></td>
            <td style="vertical-align: top">Identity Number</td>
            <td style="vertical-align: top">:</td>
            <td>'. $data_seller[0]->ktp .'</td>
        </tr>               
        <tr>
            <td></td>
            <td style="vertical-align: top">Adress</td>
            <td style="vertical-align: top">:</td>
            <td>'. $data_seller[0]->address .'</td>
        </tr>
        <tr>
            <td></td>
            <td style="vertical-align: top">Company</td>
            <td style="vertical-align: top">:</td>
            <td>'. $data_seller[0]->perusahaan .'</td>
        </tr>
        <tr>
        <tr>
            <td></td>
            <td>Phone</td>
            <td>:</td>
            <td>'. $data_seller[0]->phone .'</td>
        </tr>

        </table>
        
        <table style="margin-top: 10px;margin-bottom:10px">
        <tr>
            <td>2.</td>
            <td colspan="3">As parties 2 Buyer or user</td>
        </tr>
        <tr>
            <td></td>
            <td style="vertical-align: top">Name</td>
            <td style="vertical-align: top">:</td>
            <td>'. $data_buyer[0]->nama .'</td>
        </tr>
        <tr>
            <td></td>
            <td style="vertical-align: top">Identity Number</td>
            <td style="vertical-align: top">:</td>
            <td>'. $data_buyer[0]->ktp .'</td>
        </tr>
        <tr>
            <td></td>
            <td style="vertical-align: top">Address</td>
            <td style="vertical-align: top">:</td>
            <td>'. $data_buyer[0]->address .'</td>
        </tr>
        <tr>
            <td></td>
            <td style="vertical-align: top">Company</td>
            <td style="vertical-align: top">:</td>
            <td>'. $data_buyer[0]->perusahaan .'</td>
        </tr>
        <tr>
            <td></td>
            <td>Phone</td>
            <td>:</td>
            <td>'. $data_buyer[0]->phone .'</td>
        </tr>
        </table>
        
        <p style="margin-top: 20px">Commission fees under account of Marine Business and company detail as below.</p>
        <table>
        <tr>
            <td>Company</td>
            <td>:</td>
            <td></td>
        </tr>           
        <tr>
            <td style="vertical-align: top">Address</td>
            <td style="vertical-align: top">:</td>
            <td></td>
        </tr>
        <tr>
            <td style="vertical-align: top"></td>
            <td style="vertical-align: top"></td>
            <td></td>
        </tr>
        <tr>
            <td>Phone/Fax</td>
            <td>:</td>
            <td></td>
        </tr> 
        <tr>
            <td>Bank Name</td>
            <td>:</td>
            <td></td>
        </tr> 
        <tr>
            <td>Branch</td>
            <td>:</td>
            <td></td>
        </tr>
        <tr>
            <td>No</td>
            <td>:</td>
            <td></td>
        </tr> 
        <tr>
            <td>Swift Code</td>
            <td>:</td>
            <td></td>
        </tr> 
        <tr>
            <td>Account Name</td>
            <td>:</td>
            <td></td>
        </tr> 
        </table>
        
        <p style="margin-bottom: 0">Fee will be deduction from total transaction and all parties will be received as below percentage:</p>
        <table>
        <tr>
        <td style="vertical-align: top">1.</td>
        <td>Percentage fee :</td>
        </tr>
        <tr>
        <td></td>
        <td>a.  42% for Part 1</td>
        </tr>
        <tr>
        <td></td>
        <td>b.  42% for Part 2</td>
        </tr>
        <tr>
        <td></td>
        <td>c.  16% for Admin</td>
        </tr>
        </table>

        <div style="width:70%;float:left">
        <p>Parties 1</p>  
        <br>
        <p>.........................</p>
        </div>                
        <div style="width:20%;float:right">
        <p>Parties 2</p>   
        <br>
        <p>..........................</p>
        </div>            
        </div>
        </div>  ';
        $data = array(                             
          "id" => $id,
          "email" => $email,
          "html" => $html                
        );
        $filename = "assets/pdf/". $data['email'].'_'. $data['id'].'.pdf';
        $kode_pengajuan = $this->Pengaturan->Autonumber();
        $data = array(
          'id_kapal'          => $id,
          'jenis_pengajuan'   => $data_produk[0]->type_charter .' ' .$data_produk[0]->service,
          'tgl_pengajuan'     => mdate($datestring),
          'status'            => "Waiting Verification",               
          'nilai_pengajuan'   => $price,
          'title_pengajuan'   => $data_produk[0]->title,
          'id_buyer'          => $data_buyer[0]->id,                
          'nama_buyer'        => $data_buyer[0]->nama,
          'id_seller'         => $data_seller[0]->id,
          'nama_seller'       => $data_seller[0]->nama, 
          'kode_pengajuan'    => $kode_pengajuan,
          'email'             => $email,
          'pdf_1'             => $filename,
          'with_nego'         => $f_komisi
        );
        $this->db->insert('t_pengajuan', $data);
        $id_pengajuan = $this->db->insert_id();

    		    //$filename = $this->pdf->load_view('agreement/index', $data2);
                //$html = $this->load->view('agreement/index', $data2, true);
        //$mpdf = new \Mpdf\Mpdf();
        $this->load->library('Mpdf');
        $mpdf = $this->mpdf->load([
			'mode' => 'utf-8',
			'format' => 'Letter'
		  ]);
        $mpdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822));
        $mpdf->WriteHTML($html);
        $mpdf->Output($filename);
        

        $body = "<h2>Thank you for using Marine Business services for your business.</h2>";
        $body .= "<p>You have already filed an agreement with the advertiser, we will process your submission immediately. Please wait 2x24 Hours.</p>";
        $body .= "<p>Our Approval Letter, please sign it below as valid proof and re-upload here.</p><br>";
        $body .="<p>This email is automatically sent by the system. Do not reply to this email. If you have any questions please contact our contact person (021) 0878787877</p>";
        $body .="CS Marine Business";
        //$this->Email->sendPhpMail($this->session->userdata('email'), 'Agreement Letter Marine Business', $body, $filename);	
        
        if($f_komisi=="Y"){
            $this->Pengaturan->sendMail($email, $body, "Agreement Letter Marine Business", $filename);	
        }

        $getEmail=$this->db->get_where('t_registrasi',array('id'=> $data_seller[0]->id))->result(); 
       
        $data = array(
	    	'kategori'			=> 'Your Product submitted by client',
		    'message_notif' 	=> $data_buyer[0]->nama ." already submit inquiry from your product ". $data_produk[0]->title .". Progress checking by Admin.",	
		    'email'				=> $getEmail[0]->email,	
		    'url'				=> "#",
		    'action'            => 'read'
		);
		$this->db->insert('t_notification', $data); 

        if($ref==1){
            $data = array(
    	    	'kategori'			=> "Inquiry No. ". $kode_pengajuan ."  Progress Checking by Admin",
    		    'message_notif' 	=> "Your submission is in the process of checking by admin.",	
    		    'email'				=> $email,	
    		    'url'				=> "#",
    		    'action'            => 'read'
    		);
    		            
    		$this->db->insert('t_notification', $data); 
    		
            $link = 'notification/success/'. $id_pengajuan;
            echo'<script>window.location.href = "'.base_url().''.$link.'";</script>';
        }
    }else{
       redirect('register');
    }

}

public function view_agreement_pdf($id = "") {

  if(!empty($this->session->userdata('email'))){

    $datestring = '%Y-%m-%d';                        

    $email = $this->session->userdata('email');
    $data_pengajuan = $this->db->get_where('t_pengajuan',array('id' => $id, 'email' => $email))->result();           
    $data_buyer = $this->db->get_where('t_registrasi',array('id'=>$data_pengajuan[0]->id_seller, 'verified' => 1))->result();
    $data_seller = $this->db->get_where('t_registrasi',array('id'=>$data_pengajuan[0]->id_buyer, 'verified' => 1))->result();       
    
    $data_produk = $this->db->get_where('t_iklan',array('id' => $data_pengajuan[0]->id_kapal))->result();
    $data_kapal = $this->db->get_where('t_kapal',array('clasification_no' =>  $data_produk[0]->clasification_no))->result();

    $html = '
    <style type="text/css">
    td {                    
      padding-left: 0;
      font-size:12px;
    }                
    p {
        text-align:justify;
        font-size:12px;
    }
    </style>
    <h3 style="text-align: center;font-weight: bold;display: block;font-size: 1.17em;padding-bottom:0;margin-bottom:0">COMMITMENT FEE OF MARINE BUSINESS</h3>
    <div class="container" style="margin-right: auto;margin-left: auto;padding-left: 15px;padding-right: 15px;">
    <div style="padding: 15px;padding-top:0">
    <hr>
    <p>We are here by agreed to offer commission fees of ...... % from purchase rate for below transaction who act as broker throughout hire period</p>
    <p>The above broker commission is under Owner’s account, where will take obligation to transfer fees once buyer sign CPA and upon received step payment from Buyer</p>
    <p>Fees is based brief description below spec of the Vessel’s, Ship owner and Buyer</p>
    <table>
    <tr>
    <td>Title</td>
    <td>:</td>
    <td>'. $data_produk[0]->title .'</td>
    </tr>
    <tr>
    <td>Type of Transaction</td>
    <td>:</td>
    <td>'. $data_produk[0]->service .'</td>
    </tr>
    <tr>
    <td>Vessel Name</td>
    <td>:</td>
    <td>'. $data_kapal[0]->vessel_nama .'</td>
    </tr>
    <tr>
    <td>Type of Vessel</td>
    <td>:</td>
    <td>'. $data_produk[0]->type .'</td>
    </tr>
    
    </table>
    <table style="margin-top: 10px;margin-bottom:10px">
    <tr>
        <td>1.</td>
        <td colspan="3">As parties 1 owner or shipper </td>
    </tr>
    <tr>
        <td></td>
        <td style="vertical-align: top">Name</td>
        <td style="vertical-align: top">:</td>
        <td>'. $data_seller[0]->nama .'</td>
    </tr>
    <tr>
        <td></td>
        <td style="vertical-align: top">Identity Number</td>
        <td style="vertical-align: top">:</td>
        <td>'. $data_seller[0]->ktp .'</td>
    </tr>               
    <tr>
        <td></td>
        <td style="vertical-align: top">Adress</td>
        <td style="vertical-align: top">:</td>
        <td>'. $data_seller[0]->address .'</td>
    </tr>
    <tr>
        <td></td>
        <td style="vertical-align: top">Company</td>
        <td style="vertical-align: top">:</td>
        <td>'. $data_seller[0]->perusahaan .'</td>
    </tr>
    <tr>
    <tr>
        <td></td>
        <td>Phone</td>
        <td>:</td>
        <td>'. $data_seller[0]->phone .'</td>
    </tr>

    </table>
    
    <table style="margin-top: 10px;margin-bottom:10px">
    <tr>
        <td>2.</td>
        <td colspan="3">As parties 2 Buyer or user</td>
    </tr>
    <tr>
        <td></td>
        <td style="vertical-align: top">Name</td>
        <td style="vertical-align: top">:</td>
        <td>'. $data_buyer[0]->nama .'</td>
    </tr>
    <tr>
        <td></td>
        <td style="vertical-align: top">Identity Number</td>
        <td style="vertical-align: top">:</td>
        <td>'. $data_buyer[0]->ktp .'</td>
    </tr>
    <tr>
        <td></td>
        <td style="vertical-align: top">Address</td>
        <td style="vertical-align: top">:</td>
        <td>'. $data_buyer[0]->address .'</td>
    </tr>
    <tr>
        <td></td>
        <td style="vertical-align: top">Company</td>
        <td style="vertical-align: top">:</td>
        <td>'. $data_buyer[0]->perusahaan .'</td>
    </tr>
    <tr>
        <td></td>
        <td>Phone</td>
        <td>:</td>
        <td>'. $data_buyer[0]->phone .'</td>
    </tr>
    </table>
    
    <p style="margin-top: 20px">Commission fees under account of Marine Business and company detail as below.</p>
    <table>
    <tr>
            <td>Company</td>
            <td>:</td>
            <td></td>
        </tr>           
        <tr>
            <td style="vertical-align: top">Address</td>
            <td style="vertical-align: top">:</td>
            <td></td>
        </tr>
        <tr>
            <td style="vertical-align: top"></td>
            <td style="vertical-align: top"></td>
            <td></td>
        </tr>
        <tr>
            <td>Phone/Fax</td>
            <td>:</td>
            <td></td>
        </tr> 
        <tr>
            <td>Bank Name</td>
            <td>:</td>
            <td></td>
        </tr> 
        <tr>
            <td>Branch</td>
            <td>:</td>
            <td></td>
        </tr>
        <tr>
            <td>No</td>
            <td>:</td>
            <td></td>
        </tr> 
        <tr>
            <td>Swift Code</td>
            <td>:</td>
            <td></td>
        </tr> 
        <tr>
            <td>Account Name</td>
            <td>:</td>
            <td></td>
        </tr>  
    </table>
    
    <p style="margin-bottom: 0">Fee will be deduction from total transaction and all parties will be received as below percentage:</p>
    <table>
    <tr>
    <td style="vertical-align: top">1.</td>
    <td>Percentage fee :</td>
    </tr>
    <tr>
    <td></td>
    <td>a.  42% for Part 1</td>
    </tr>
    <tr>
    <td></td>
    <td>b.  42% for Part 2</td>
    </tr>
    <tr>
    <td></td>
    <td>c.  16% for Admin</td>
    </tr>
    </table>

    <div style="width:70%;float:left">
    <p>Parties 1</p>  
    <br>
    <p>.........................</p>
    </div>                
    <div style="width:20%;float:right">
    <p>Parties 2</p>   
    <br>
    <p>..........................</p>
    </div>            
    </div>
    </div>  ';                
    $mpdf = new \Mpdf\Mpdf();
    $mpdf->SetWatermarkImage('assets/images/watermark.jpg');
    $mpdf->showWatermarkImage = true;
    $mpdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822));
    $mpdf->WriteHTML($html);
    $mpdf->Output();

  }else{
    redirect('register');
  }

}
function delete_ship($id){
    $this->db->from('t_foto_kapal');
    $foto=$this->db->where('clasification_no', $id)->get()->result();
	if (!empty($foto)) {
        $nama_foto=$foto[0]->nama_foto;
        if(file_exists($file='uploads/'.$nama_foto)){
            unlink($file);
        }
        $this->db->from('t_foto_kapal');
        $this->db->where('clasification_no', $id)->delete();
        
        $this->db->from('t_iklan');
        $this->db->where('clasification_no', $id)->delete();
    }		
    $this->session->set_flashdata('success', 'Change Status to Cancel successfully...');   
    redirect('setting/iklan');
}
	//Untuk menghapus foto
function remove_foto(){
		//Ambil token foto
  $token=$this->input->post('token');
  $this->db->from('t_foto_kapal');
  //$this->db->where('token', $token);
  $this->db->or_where('clasification_no', $this->input->post('id'));
  $foto = $this->db->where('nama_foto', $this->input->post('name'))->get();
  $last_query = $this->db->last_query();

    if($foto->num_rows()>0){
        $hasil=$foto->row();
        $nama_foto=$hasil->nama_foto;
        if(file_exists($file='uploads/'.$nama_foto)){
            unlink($file);
        }
        $this->db->from('t_foto_kapal');
        $this->db->where('clasification_no', $this->input->post('id'));
        $this->db->where('nama_foto', $this->input->post('name'))->delete();			
    }
    echo $last_query;
}

function remove_sertifikat(){
		//Ambil token foto
  $token=$this->input->post('token');		
  $id=$this->input->post('id');		
  $foto=$this->db->get_where('t_sertifikat',array('id'=>$id));
  if($foto->num_rows()>0){
   $hasil=$foto->row();
   $dokumen=$hasil->dokumen;
   if(file_exists($file='uploads/'.$dokumen)){
    unlink($file);
  }
  $this->db->delete('t_sertifikat',array('id'=>$id));
}

$table = '<table class="table table-dark"><thead class="thead-dark"><tr><th scope="col">#</th><th scope="col">Type</th><th scope="col" class="center">Certificate</th><th scope="col" class="center">Document</th><th class="center">Action</th></tr></thead><tbody>';
$email = $this->session->userdata('email');

$this->db->select('t_sertifikat_mst.kode_sertifikat,nama_sertifikat,dokumen,t_sertifikat.id');
$this->db->from('t_sertifikat');
$this->db->join('t_sertifikat_mst', 't_sertifikat.kode_sertifikat=t_sertifikat_mst.kode_sertifikat');
$this->db->where('token', $token);
$this->db->or_where('clasification_no', $this->input->post('clasification_no'));
$query = $this->db->get();

$no=1;  
foreach ($query->result() as $value) {
  $table .='<tr><th scope="row">'.$no.'</th><td>'.$value->kode_sertifikat.'</td><td class="left">'.$value->nama_sertifikat.'</td><td class="left"><a href="'.base_url().'uploads/'. $value->dokumen .'" data-lightbox="roadtrip">'.$value->dokumen.'</a></td><td><a href="javascript:void(0)" onclick="hapus_sertifikat('.$value->id.')"><i class="fa fa-eraser"></i>&nbsp;Remove</a></td></tr>';			
  $no++;
}		
$str = $this->db->last_query();
$table .= "</tbody></table>";
$response = array(
 'error' => false,
 'tabel'	=> $table,
 'query'	=> $str
);											
$this->output->set_content_type('application/json')->set_output(json_encode($response));
}

public function setutama(){
  $response = array('error' => true);
  $this->db->from('t_foto_kapal');
  $this->db->where('main', 1);
  $cek = $this->db->where('clasification_no', $this->input->post('clasification_no'))->get();
  if($cek->num_rows()>0){
   $hasil=$cek->row();
   $this->db->set(array('main'=> 0 ));
   $this->db->where('clasification_no', $this->input->post('clasification_no'));
   $this->db->update('t_foto_kapal');						

   $this->db->set(array('main'=> 1 ));
   $this->db->where('id', $this->input->post('id'));
   $this->db->update('t_foto_kapal');	

   $response['error'] = false;
   $response['data'] = $hasil->id;	
 }

 $this->output->set_content_type('application/json')
 ->set_output(json_encode($response));
}    

}