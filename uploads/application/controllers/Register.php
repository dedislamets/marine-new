<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Registrasi');
		$this->load->model('Pengaturan');
		// $this->load->library('m_pdf');
	}
	public function index()
	{
		$data['title'] = 'Register';
		$data['main'] = 'register/index';		
		$this->load->view('home', $data, FALSE);
	}
	public function simpan()
	{		
		$data = array(
		        'nama' => $this->input->post('nama'),
		        'email' => $this->input->post('email'),
		        'phone' => $this->input->post('phone'),
		        'pass' => $this->input->post('pass')
		);

		$this->db->insert('t_registrasi', $data);
		$this->Pengaturan->sendMail($this->input->post('email'));

		$response = array(
					'error' => false 
					);							
		$this->output->set_content_type('application/json')
             ->set_output(json_encode($response));
	}
	public function signin()
	{		
		if ($this->input->post()) {			

			$email = $this->input->post('txtEmail2');			
			$password = $this->input->post('txtPass2');				
			$query = $this->db->get_where('t_registrasi',array('email'=>$email,'pass'=>$password));			
			if ($query->num_rows() > 0) {
				foreach ($query->result() as $key => $value) {
					$sess['email'] = $this->input->post('txtEmail2');										
					$sess['nama'] = $value->nama;
					$this->session->set_userdata($sess);
					redirect('home');
				}
			}else{
				$this->session->set_flashdata('error', 'Periksa Kembali username dan password anda !!');
				redirect('register');
			}			
		}
	}


	public function keluar()
	{
		$this->session->sess_destroy();
		redirect('register');
	}
	
}

/* End of file Laporan.php */
/* Location: ./application/controllers/Laporan.php */