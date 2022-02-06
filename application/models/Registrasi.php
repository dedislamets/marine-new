<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Model {

	public function mapel()
	{
		$query = $this->db->select('*')->from('mapel')->order_by('id_mapel','DESC')->get()->result();		
		return $query;
	}

	// public function kelas()
	// {
	// 	return $this->db->select('*')->from('kelas')->order_by('id_kelas','desc')->get()->result();
	// }

	// public function detail_kelas($id)
	// {
	// 	return $this->db->select('detail_kelas.id_siswa, detail_kelas.id_kelas,siswa.nisn, siswa.id_siswa, siswa.nama_siswa')
	// 	->from('detail_kelas')
	// 	->join('siswa','siswa.id_siswa = detail_kelas.id_siswa')->where('id_kelas',$id)->get()->result();
	// }
	// public function detail_kelas_data($id)
	// {
	// 	$query = $this->db->select('detail_kelas.id_siswa, detail_kelas.id_kelas,siswa.nisn, siswa.id_siswa, siswa.nama_siswa')
	// 	->from('detail_kelas')
	// 	->join('siswa','siswa.id_siswa = detail_kelas.id_siswa')->where('id_kelas',$id)->get()->result();
	// 	return json_encode($query);
	// }
}
