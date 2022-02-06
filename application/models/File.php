<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class File extends CI_Model{
    public function getRows($id = '',$jenis=''){
        $this->db->select('id,file_name,created,status');
        $this->db->from('files');
        if($id){
            $where = array( 'email' => $id, 
                            'jenis' => $jenis);
            $this->db->where($where);
            $query = $this->db->get();
            $result = $query->result_array();
        }
        return !empty($result)?$result:false;
    }
    public function insert($data = array()){
        $insert = $this->db->insert_batch('files',$data);
        return $insert?true:false;
    }
    public function initSave($tombol,$file){
        if($tombol && !empty($file['name'])){
            $filesCount = count($file['name']);
            for($i = 0; $i < $filesCount; $i++){
                // $_FILES['userFilesNPWP']['name'] = $_FILES['userFilesNPWP']['name'][$i];
                // $_FILES['userFilesNPWP']['type'] = $_FILES['userFilesNPWP']['type'][$i];
                // $_FILES['userFilesNPWP']['tmp_name'] = $_FILES['userFilesNPWP']['tmp_name'][$i];
                // $_FILES['userFilesNPWP']['error'] = $_FILES['userFilesNPWP']['error'][$i];
                // $_FILES['userFilesNPWP']['size'] = $_FILES['userFilesNPWP']['size'][$i];
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
    }
}