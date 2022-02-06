<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Registrasi');
		$this->load->model('Pengaturan');
        $this->load->model('Email');
		$this->load->library('user_agent');
		
		// $this->load->library('m_pdf');
	}
	public function index()
	{
		$email = $this->session->userdata('email');
	    if(!empty($email)) { 
	      redirect('home');    
	    } 
		$data['title'] = 'Register';
		$data['main'] = 'register/index';		
		$data['notifikasi'] = $this->Pengaturan->get_notification_global();       		
		$this->load->view('home', $data, FALSE);
	}
	public function cek_fb()
	{
		$response = array(
					'error' => false 
					);	
		$this->db->from('t_registrasi');		      
		$this->db->where('nama', $this->input->post('name'));
		$this->db->or_where('id_fb', $this->input->post('id'));
		$query = $this->db->get();			
		if ($query->num_rows() > 0) {			
			foreach ($query->result() as $key => $value) {
				if(empty($value->id_fb)) {
					$data = array(
		                'id_fb' => $this->input->post('id'),                                                     
		            );
		            $this->db->where('email', $value->email);
		            $this->db->update('t_registrasi',$data);
				}
				$sess['email'] = $value->email;										
				$sess['nama'] = $value->nama;
				$sess['id'] = $value->id;
				$this->session->set_userdata($sess);					
				$response['status'] = 0;
			}
		}else{
			$response['status'] = 1;
			$response['data'] = array(
									'id' => $this->input->post('id'),
									'name' => $this->input->post('name')
								);
		}
		$this->output->set_content_type('application/json')
             ->set_output(json_encode($response));
	}

	public function reg_fb()
	{		
		$response = array(
					'error' => false 
					);	
		$data = array(
		        'nama' => $this->input->post('txtNameFB'),
		        'email' => $this->input->post('txtEmail3'),
		        'pass' => $this->input->post('txtPass3'),
		        'verified' => 1,
		        'token' => $this->input->post('csrf_token'),
		        'id_fb' => $this->input->post('txtidFB')
		);		

		$query = $this->db->get_where('t_registrasi',array('email' => $this->input->post('txtEmail3')));		
		if ($query->num_rows() > 0) {			
			foreach ($query->result() as $key => $value) {
				$response['error'] = TRUE;
				$response['message'] = "Email already registered.";			
			}
		}else{
			$this->db->insert('t_registrasi', $data);
			$lastid = $this->db->insert_id();	
			$sess['email'] = $this->input->post('txtEmail3');										
			$sess['nama'] = $this->input->post('txtNameFB');
			$sess['id'] = $lastid;
			$this->session->set_userdata($sess);			
		}
		
		redirect('home');
	}
	public function simpan()
	{		
		$response = array(
					'error' => false 
					);	
		$data = array(
		        'nama' => $this->input->post('nama'),
		        'email' => $this->input->post('email'),
		        'phone' => $this->input->post('phone'),
		        'pass' => $this->input->post('pass'),
		        'token' => $this->input->post('token')
		);		

				
		$body = '<div bgcolor="#f0f0f0" style="margin:0;padding:0">
				    <table cellpadding="0" cellspacing="0" style="min-width:320px" width="100%">
				        <tbody>
				            <tr>
				                <td bgcolor="#f0f0f0" style="padding:0 0 50px">
				                    <table align="center" cellpadding="0" cellspacing="0" style="margin:0 auto" width="600">
				                        <tbody><tr>
				                            <td>
				                                <table cellpadding="0" cellspacing="0" width="100%">
				                                    <tbody>
				                                    <tr>
				                                        <td bgcolor="#ffffff" style="padding:50px 30px;border:1px solid #e0e0e0;border-radius:0 0 3px 3px;font-size:14px">
				                                            <table cellpadding="0" cellspacing="0" width="100%">
				                                                <tbody><tr>
				                                                    <td style="padding:0 0 30px;font-size:18px;color:#404448">Hi '. $this->input->post('nama') .',</td>
				                                                </tr>
				                                                <tr>
				                                                    <td style="padding:0 0 30px;font-size:14px;color:#404448">
				                                                        Selamat! Selangkah lagi untuk mengaktifkan Account anda. Aktifkan akun Anda dengan mengklik link ini <a href="https://marinebusiness.co.id/activation/sf/'. $this->input->post('token') .'" target="_blank">Klik disini</a>
				                                                        <br>
				                                                    </td>
				                                                </tr>
				                                                <tr>
				                                                    <td align="center" colspan="2">
				                                                    	<a href="https://marinebusiness.co.id/activation/sf/'. $this->input->post('token') .'" style="display:inline-block;padding-top:12px;padding-left:24px;padding-bottom:12px;padding-right:24px;text-decoration:none;background-color:#47bbe4;border-radius:5px;font-weight:bold;color:#ffffff;text-transform:uppercase;font-size:16px" target="_blank">Aktivasi Sekarang!</a>
				                                                    </td>
				                                                </tr>
				                                                <tr>
				                                                    <td colspan="2" height="25"></td>
				                                                </tr>				                                                
				                                                <tr>
				                                                    <td colspan="2" height="25">&nbsp;</td>
				                                                </tr>
				                                                <tr>
				                                                    <td style="font-size:14px;color:#404448">
				                                                        Terima kasih.<br>
				                                                        <strong>Tim Marine Business</strong>
				                                                    </td>
				                                                </tr>
				                                            </tbody></table>
				                                        </td>
				                                    </tr>
				                                </tbody></table>
				                            </td>
				                        </tr>
				                    </tbody></table>
				                </td>
				            </tr>        
				        </tbody>
				    </table>
				</div>';
			
		$query = $this->db->get_where('t_registrasi',array('email' => $this->input->post('email')));		
		if ($query->num_rows() > 0) {			
			foreach ($query->result() as $key => $value) {
				$response['error'] = TRUE;
				if($value->verified == 1){
					$response['message'] = "Email already registered.";
				}else{
					$response['message'] = "Email already registered and verify your account now.. Please check your email";	
					$this->Pengaturan->sendMail($this->input->post('email'), $body, "Verify your account now..");	
				}				
			}
		}else{
			$this->db->insert('t_registrasi', $data);	
			$this->Pengaturan->sendMail($this->input->post('email'), $body, "Verify your account now..");	
		}
		$this->output->set_content_type('application/json')
             ->set_output(json_encode($response));
	}
	public function signin()
	{		
		if ($this->input->post()) {			

			$email = $this->input->post('txtEmail2');			
			$password = $this->input->post('txtPass2');				
			$query = $this->db->get_where('t_registrasi',array('email' => $email, 'pass' => $password, 'verified' => 1));		
			if ($query->num_rows() > 0) {
				foreach ($query->result() as $key => $value) {
					$sess['email'] = $this->input->post('txtEmail2');										
					$sess['nama'] = $value->nama;
					$sess['id'] = $value->id;
					$this->session->set_userdata($sess);					
					redirect('home');
				}
			}else{
				$this->session->set_flashdata('error', 'Incorrect username or password !!');
				redirect('register');
			}			
		}
	}

	public function reset()
	{		
		if ($this->input->post()) {			

			if($this->input->post('txtPass') != $this->input->post('txtPass2')) {				
		        $this->session->set_flashdata('error', 'Your New Password not same value..');   
		        redirect($this->agent->referrer());
		    }
		    $email = $this->input->post('email'); 
		    $query = $this->db->get_where('t_registrasi',array('email' => $email, 'verified' => 1));       
		    if ($query->num_rows() > 0) {
		        foreach ($query->result() as $key => $value) {              
		            $data = array(
		                'pass'      => $this->input->post('txtPass'),                                                     
		            );
		            $this->db->where('email', $email);
		            $this->db->update('t_registrasi',$data);
		            
		            $this->db->where('kode', $this->input->post('code'));
		            $this->db->update('t_forgot',array('status' => 1));

		            $this->session->set_flashdata('success', 'Your Password has been changed successfully.. You can login now!');
		            redirect('register');
		        }
		    }
		    
		                		
		}
	}

	public function recover($kode)
	{
		$code = base64_decode($kode);		
		$query = $this->db->get_where('t_forgot',array('kode' => $code));		
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $key => $value) {
				$email = $value->email;
				if($value->status>0) {
					$this->session->set_flashdata('error', 'Link expired.. !!');
					redirect('register');
				}else{
					$data['title'] = 'Register';
					$data['code'] = $code;
					$data['email'] = $email;
					$data['main'] = 'register/recover';		
					$this->load->view('home', $data, FALSE);	
				}
				
			}
		}else{			
			redirect('register');
		}			
			 

	}
	public function forgot()
	{		
		$response = array(
					'error' => false 
					);	
		$email = $this->input->post('txtForgotEmail');
		$query = $this->db->get_where('t_registrasi',array('email' => $email));
		$verified = 0;
		$username = "";
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $key => $value) {				
				$verified = $value->verified;
				$username = $value->nama;
				if($verified==0) {
					$this->session->set_flashdata('error', 'Your email not verified, Please check your email !!');
					redirect('register');
				}
			}
		}else{
			$this->session->set_flashdata('error', 'Your email not registered !!');
			redirect('register');
		}	

		$number = "";
		for($i=0; $i<10; $i++) {
		    $min = ($i == 0) ? 1:0;
		    $number .= mt_rand($min,9);
		}
 		
 		$data = array(		        
		        'email' => $this->input->post('txtForgotEmail'),		        		        
		        'kode' => $number
		);
 		$this->db->insert('t_forgot', $data);	

		$body = '<div bgcolor="#f0f0f0" style="margin:0;padding:0">
				    <table cellpadding="0" cellspacing="0" style="min-width:320px" width="100%">
				        <tbody>
				            <tr>
				                <td bgcolor="#f0f0f0" style="padding:0 0 50px">
				                    <table align="center" cellpadding="0" cellspacing="0" style="margin:0 auto" width="600">
				                        <tbody><tr>
				                            <td>
				                                <table cellpadding="0" cellspacing="0" width="100%">
				                                    <tbody>
				                                    <tr>
				                                        <td bgcolor="#ffffff" style="padding:50px 30px;border:1px solid #e0e0e0;border-radius:0 0 3px 3px;font-size:14px">
				                                            <table cellpadding="0" cellspacing="0" width="100%">
				                                                <tbody><tr>
				                                                    <td style="padding:0 0 30px;font-size:18px;color:#404448">Hi '. $username .',</td>
				                                                </tr>
				                                                <tr>
				                                                    <td style="padding:0 0 30px;font-size:14px;color:#404448">
				                                                        We have received a request for rearranging the password.<br> 
				                                                        To rearrange , please click here or copy address in the following in your browser <a href="https://marinebusiness.co.id/register/recover/'. base64_encode($number) .'" target="_blank">https://marinebusiness.co.id/register/recover/'. base64_encode($number) .'</a>
				                                                        <br>
				                                                    </td>
				                                                </tr>				                                                
				                                                <tr>
				                                                    <td colspan="2" height="25"></td>
				                                                </tr>				                                                
				                                                <tr>
				                                                    <td colspan="2" height="25">&nbsp;</td>
				                                                </tr>
				                                                <tr>
				                                                    <td style="font-size:14px;color:#404448">
				                                                        Thanks you.<br>
				                                                        <strong>Tim Marine Business</strong>
				                                                    </td>
				                                                </tr>
				                                            </tbody></table>
				                                        </td>
				                                    </tr>
				                                </tbody></table>
				                            </td>
				                        </tr>
				                    </tbody></table>
				                </td>
				            </tr>        
				        </tbody>
				    </table>
				</div>';		

		$this->Pengaturan->sendMail($this->input->post('txtForgotEmail'), $body, "Request Change Password");
		$this->session->set_flashdata('success', 'Link for resetting the password already sent to this email !!');
		redirect("register");							
	}

	public function keluar()
	{
		$this->session->sess_destroy();
		redirect('register');
	}
	
}

/* End of file Laporan.php */
/* Location: ./application/controllers/Laporan.php */