<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
class Mpdf { 
	function __construct(){ 
		//include_once APPPATH.'third_party\mpdf\vendor\autoload.php';
		require_once("./application/third_party/mpdf/vendor/autoload.php");
		//require_once("./vendor/dompdf/dompdf/dompdf_config.inc.php");
	} 
	function pdf(){ 
		$CI = & get_instance(); 
		log_message('Debug', 'mPDF class is loaded.'); 
	} 
	function load($param=[]){ 
		return new \Mpdf\Mpdf($param); 
	} 
} 