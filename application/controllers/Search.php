<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Search extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	    $this->load->model('Pengaturan');
	   
	}
	public function index()
	{
	    $keyword = "";
	    $service="";
	    $strsvc="";
		$config['enable_query_strings'] = TRUE;
		$params   = $_SERVER['QUERY_STRING'];
		
		if ($params != "") {
			$params = explode("&", $params);
			$n= count($params);
			switch ($n) {
                case 1:
                    $ex = explode("=", $params[0]);
			        $keyword = $ex[1];
                    break;
                case 2:
                    $ex = explode("=", $params[0]);
			        $keyword = $ex[1];
			        
			        $ex = explode("=", $params[1]);
			        $ex = explode(",", $ex[1]);
			        $service = $ex;
			        foreach ($service as $value) {
			            $strsvc .= "'" .$value."',"; 
			        }
                    break;
                case 3:
                    
                    break;
                default:
                    
            }
		}		
        
        $string = "SELECT `t_iklan`.*, `nama_foto`, `vessel_nama`, `place_build`, `year_build`, `construction` FROM `t_iklan` LEFT JOIN `t_foto_kapal` ON `t_foto_kapal`.`clasification_no`=`t_iklan`.`clasification_no` inner JOIN `t_kapal` ON `t_kapal`.`clasification_no`=`t_iklan`.`clasification_no` WHERE `status` = 1 AND `active`=1 AND ( `vessel_nama` LIKE '%". $keyword ."%' ESCAPE '!' OR `title` LIKE '%". $keyword ."%' ESCAPE '!' OR `service` LIKE '%". $keyword ."%' ESCAPE '!'";
        if(!empty($strsvc)){
            $string .=" OR service in (".rtrim($strsvc,',').") ";
        }
        $string .=") GROUP BY `t_iklan`.`id` ORDER BY `date_iklan` DESC";
        
		$live = $this->db->query($string)->result();               
        
        $parameter = [];
        $parameter['keyword'] =$keyword;
        $parameter['service'] =$service;
		// $live = $this->db->select('t_iklan.*,nama_foto,vessel_nama,place_build,year_build,construction')
		// 		->from('t_iklan')
		// 		->join('t_foto_kapal', 't_foto_kapal.clasification_no=t_iklan.clasification_no','left')
		// 		->join('t_kapal', 't_kapal.clasification_no=t_iklan.clasification_no','left')
		// 		->where(array('status' => 1))
		// 		->like('vessel_nama', $params)
	 //    		->or_like('title', $params)
	 //    		->or_like('service', $params)
		// 		->group_by('t_iklan.id')
		// 		->order_by('date_iklan','desc')				
		// 		->get()
		// 		->result();
		$data['live'] = $live;
		$data['cari'] = $parameter;	
		$data['title'] = 'Home';
		$data['main'] = 'search/index';
		$data['notifikasi'] = $this->Pengaturan->get_notification_global();       		
		$this->load->view('home',$data,FALSE);				
	}
}
