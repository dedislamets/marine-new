<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Registrasi');
		$this->load->model('file');
		$this->load->model('Pengaturan');
		$this->load->helper('date');
	}
	public function index()
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
		$data['main'] = 'setting/index';

		//Get files data from database
        $data['files_ktp'] = $this->file->getRows($email,'KTP');
        $data['files_npwp'] = $this->file->getRows($email,'NPWP');		
        $data['files_ijazah'] = $this->file->getRows($email,'IJAZAH');		
        $data['files_siup'] = $this->file->getRows($email,'SIUP');		
        $data['files_tdp'] = $this->file->getRows($email,'TDP');		
		$this->load->view('home', $data, FALSE);
	}
	public function iklan()
	{
		$email = $this->session->userdata('email');
		$listing = $this->db->select('t_iklan.*,nama_foto')
				->from('t_iklan')
				->join('t_foto_kapal', 't_foto_kapal.clasification_no=t_iklan.clasification_no','left')
				->where(array('email'=>$email))
				->group_by('t_iklan.id')
				->order_by('date_iklan','desc')
				->get()
				->result();

		$live = $this->db->select('t_iklan.*,nama_foto')
				->from('t_iklan')
				->join('t_foto_kapal', 't_foto_kapal.clasification_no=t_iklan.clasification_no','left')
				->where(array('email'=>$email,'status' => 1))
				->group_by('t_iklan.id')
				->order_by('date_iklan','desc')				
				->get()
				->result();

		$nonaktif = $this->db->select('t_iklan.*,nama_foto')
				->from('t_iklan')
				->join('t_foto_kapal', 't_foto_kapal.clasification_no=t_iklan.clasification_no','left')
				->where(array('email'=>$email,'status' => 0))
				->group_by('t_iklan.id')
				->order_by('date_iklan','desc')				
				->get()
				->result();


		$data['title'] = 'Pengaturan';
		$data['main'] = 'setting/iklan';	
		$data['listing'] = $listing;
		$data['live'] = $live;	
		$data['nonaktif'] = $nonaktif;	
		$this->load->view('home', $data, FALSE);
	}
	public function baru()
	{								
		$data['title'] = 'Tambah Iklan';
		$data['main'] = 'setting/iklanbaru';
		$data['script'] = 'script/tambah-iklan';
		$data['groups'] = $this->Pengaturan->getAllGroups();
		$data['kab'] = $this->Pengaturan->getAllKab();		
		$this->load->view('home', $data, FALSE);		
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
	public function proses_upload(){

		$uploadPath = 'uploads/';
        $config['upload_path'] = $uploadPath;        
        $config['allowed_types'] = 'gif|jpg|png|ico|jpeg';
        $this->load->library('upload',$config);

        $this->upload->initialize($config);        

        if($this->upload->do_upload('userfile')){
        	$token=$this->input->post('token_foto');
        	$nama=$this->upload->data('file_name');
        	$this->db->insert('t_foto_kapal',array('nama_foto'=>$nama,'token'=>$token));
        }
	}
	public function proses_upload_sertifikat(){

		$uploadPath = 'uploads/';
        $config['upload_path'] = $uploadPath;        
        $config['allowed_types'] = 'gif|jpg|png|ico|jpeg';
        $this->load->library('upload',$config);

        $this->upload->initialize($config);        

        if($this->upload->do_upload('userfile')){
        	$token=$this->input->post('token_sertifikat');
        	$id=$this->input->post('id');
        	$nama=$this->upload->data('file_name');
        	$where = array(
				'id' => $id
			);
			$data = array(
				'dokumen' => $nama,				
			);
        	$this->db->where($where);
			$this->db->update('t_sertifikat',$data);        	
        }
        $table = '<table class="table table-dark"><thead class="thead-dark"><tr><th scope="col">#</th><th scope="col">Type</th><th scope="col" class="left">Certificate</th><th scope="col" class="left">Document</th><th class="center">Action</th></tr></thead><tbody>';
        $email = $this->session->userdata('email');        
        $this->db->select('t_sertifikat_mst.kode_sertifikat,nama_sertifikat,dokumen,t_sertifikat.id');
        $this->db->from('t_sertifikat');
        $this->db->join('t_sertifikat_mst', 't_sertifikat.kode_sertifikat=t_sertifikat_mst.kode_sertifikat');
        $this->db->where(array('token'=>$token));
		$query = $this->db->get();
		
        $no=1;  
        foreach ($query->result() as $value) {
         	$table .='<tr><th scope="row">'.$no.'</th><td>'.$value->kode_sertifikat.'</td><td class="left">'.$value->nama_sertifikat.'</td><td class="left">'.$value->dokumen.'</td><td><a href="javascript::void(0)" onclick="hapus_sertifikat('.$value->id.')"><i class="fa fa-eraser"></i>Remove</a></td></tr>';			
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
		        'clasification_no'	=> $this->input->post('clasification_no'),
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
	public function simpan_data()
	{				
		$datestring = '%Y-%m-%d';
		
		$email = $this->session->userdata('email');
		$data = array(
		        'title' 			=> $this->input->post('title'),
		        'description' 		=> $this->input->post('description'),
		        'date_iklan' 		=> mdate($datestring),
		        'status' 			=> 0,
		        'clasification_no' 	=> $this->input->post('clasification_no'),
		        'type' 				=> $this->input->post('inputState'),
		        'service' 			=> $this->input->post('gridRadios'),
		        'address_from' 		=> $this->input->post('address'),
		        'latitude' 			=> $this->input->post('latitude'),
		        'longitude' 		=> $this->input->post('longtitude'),
		        'token'				=> $this->input->post('token_s'),
		        'email'				=> $email,

		);
		$data_kapal = array(
		        'vessel_nama' 			=> $this->input->post('vessel'),
		        'owners' 				=> $this->input->post('owner'),
		        'place_build' 			=> $this->input->post('place_build'),
		        'year_build' 			=> $this->input->post('year_build'),
		        'clasification_no' 		=> $this->input->post('clasification_no'),
		        'builder' 				=> $this->input->post('builder'),
		        'keel_laid' 			=> $this->input->post('keel'),
		        'launching' 			=> $this->input->post('launching'),
		        'port_registry' 		=> $this->input->post('port'),
		        'construction' 			=> $this->input->post('construction'),
		        'call_sign'				=> $this->input->post('call'),
		        'clasification'			=> $this->input->post('clasification'),
		        'imo'					=> $this->input->post('imo'),
		        's_phone'				=> $this->input->post('phone'),
		        'loa'					=> str_replace(",","",$this->input->post('loa')),
		        'length'				=> str_replace(",","",$this->input->post('length')),
		        'breadth'				=> str_replace(",","",$this->input->post('breadth')),
		        'depth'					=> str_replace(",","",$this->input->post('dept')),
		        'summer_draught'		=> str_replace(",","",$this->input->post('summer')),
		        'grt'					=> str_replace(",","",$this->input->post('grt')),
		        'nrt'					=> str_replace(",","",$this->input->post('nrt')),
		        'sideboard'					=> str_replace(",","",$this->input->post('side')),
		        'deck_capacity'				=> str_replace(",","",$this->input->post('desk2')),
		        'max_deck_load'				=> str_replace(",","",$this->input->post('load')),
		        'price'				=> str_replace(",","",$this->input->post('price')),
		        'deck_area'				=> $this->input->post('desk'),
		        'email'					=> $email,

		);

		$this->db->insert('t_iklan', $data);
		$this->db->insert('t_kapal', $data_kapal);

		$token=$this->input->post('token_s');    	
    	$where = array(
			'token' => $token
		);
		$data = array(
			'clasification_no' => $this->input->post('clasification_no'),				
		);
    	$this->db->where($where);
		$this->db->update('t_foto_kapal',$data);  

		$response = array(
					'error' => false,
					'data'	=>$data,
					'data_kapal'	=> $data_kapal					
					);							
		$this->output->set_content_type('application/json')
             ->set_output(json_encode($response));
	}
	//Untuk menghapus foto
	function remove_foto(){

		//Ambil token foto
		$token=$this->input->post('token');

		
		$foto=$this->db->get_where('t_foto_kapal',array('token'=>$token));


		if($foto->num_rows()>0){
			$hasil=$foto->row();
			$nama_foto=$hasil->nama_foto;
			if(file_exists($file='uploads/'.$nama_foto)){
				unlink($file);
			}
			$this->db->delete('t_foto_kapal',array('token'=>$token));

		}


		echo "{}";
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
		$table = '<table class="table table-dark"><thead class="thead-dark"><tr><th scope="col">#</th><th scope="col">Type</th><th scope="col" class="left">Certificate</th><th scope="col" class="left">Document</th><th class="center">Action</th></tr></thead><tbody>';
        $email = $this->session->userdata('email');        
        $this->db->select('t_sertifikat_mst.kode_sertifikat,nama_sertifikat,dokumen,t_sertifikat.id');
        $this->db->from('t_sertifikat');
        $this->db->join('t_sertifikat_mst', 't_sertifikat.kode_sertifikat=t_sertifikat_mst.kode_sertifikat');
        $this->db->where(array('token'=>$token));
		$query = $this->db->get();
		
        $no=1;  
        foreach ($query->result() as $value) {
         	$table .='<tr><th scope="row">'.$no.'</th><td>'.$value->kode_sertifikat.'</td><td class="left">'.$value->nama_sertifikat.'</td><td class="left">'.$value->dokumen.'</td><td><a href="javascript::void(0)" onclick="hapus_sertifikat('.$value->id.')"><i class="fa fa-eraser"></i>Remove</a></td></tr>';			
	 		$no++;
	 	}		
		$table .= "</tbody></table>";
		$response = array(
					'error' => false,
					'tabel'	=> $table
					);											
		$this->output->set_content_type('application/json')->set_output(json_encode($response));
	}
}