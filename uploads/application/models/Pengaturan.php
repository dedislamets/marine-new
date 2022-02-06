<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
    }

    function getAllGroups()
    {        
        $query = $this->db->query('SELECT type FROM t_sertifikat_mst group by type order by type asc');
        return $query->result();        
    }
    function getAllKab()
    {        
        $query = $this->db->query('SELECT * FROM t_sertifikat_mst WHERE TYPE = (SELECT TYPE FROM t_sertifikat_mst GROUP BY TYPE ORDER BY TYPE ASC LIMIT 1)');
        return $query->result();        
    }
    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    function sendMail($email) {
        $ci = get_instance();
        
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "ssl://mail.marinebusiness.co.id";
        $config['smtp_port'] = "465";
        $config['smtp_user'] = "cs@marinebusiness.co.id";
        $config['smtp_pass'] = "admin123^";
        $config['charset'] = 'utf-8';
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";
              
        $config['send_multipart'] = FALSE;
        
        
        $ci->email->initialize($config);
 
        $ci->email->from('cs@marinebusiness.co.id', 'Marine Business');
        $list = array($email);
        $ci->email->to($list);
        $ci->email->subject('Verifikasi Akun Anda Sekarang');
        $ci->email->message('isi email');
        if ($this->email->send()) {
            // echo 'Email sent.';
        } else {
            show_error($this->email->print_debugger());
        }
    }
}
