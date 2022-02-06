<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use DB;
use App\Slider;
use Illuminate\Support\Facades\Response;

class ChatController extends Controller
{
    public function __construct()
    {
    	$this->photos_path = public_path('/images');
        $this->response = ['code' => 0, 'message' => 'OK', 'success' => true];
    }

    public function index()
    {
		$users = DB::table('t_registrasi')
			    ->where('verified',1)->get();	 	
		 
        return view('pages.chat', ['users'  => $users]);
    }
    public function get_chat($from,$to){
		$ck_chat=[];
		$mapData = [];	
		$ck_chat_date = [];
		$query = [];
		$ck_pengajuans = [];
		$query_count = [];

		$qry = "select * from frei_chat where (`from`='".$from."' and `to`='".$to."') OR (`to`='".$from."' and `from`='".$to."') order by sent ASC";
		$ck_chat = DB::select($qry);
		$mapChat = [];

		$senderTo="";
		$senderToName = "";
		$senderFrom = "";
		$senderFromName = "";
		foreach ($ck_chat as $k => $ck_chats) {	
		    
			$dt = DateTime::createFromFormat("Y-m-d H:i:s", $ck_chats->sent);
			$hours = $dt->format('H:i'); // '20'
			$tgl = $dt->format('d-m-Y'); 
			$ck_chat[$k]->periode = $hours;
			$ck_chat[$k]->tgl = $dt->format('Y-m-d');;	
			$ck_chat[$k]->date = $tgl;

			if($ck_chats->from == $from){
				$senderTo = $ck_chats->to;	
			} else {
				$senderTo = $ck_chats->from;						
			}
					 					 			    			    
        }

    	foreach ($ck_chat as $k => $ck_chats) {	
    		if($ck_chats->tgl){
    			$mapData[$ck_chats->tgl][] = $ck_chats;
    		}     
        }
        
        $ck_chat_date = DB::select("SELECT DATE(sent) DateOnly FROM frei_chat where (`from`='".$from."' and `to`='".$to."') OR (`to`='".$from."' and `from`='".$to."') GROUP BY DateOnly ORDER BY DateOnly ASC");
        if(empty($ck_chat_date)){		            
            $ck_chat_date[0]["DateOnly"] = date("d-m-Y");
        }
        $this->response['chats'] = $mapData;
        $this->response['chats_dates'] = $ck_chat_date;
        return response()->json($this->response); 
	}
    public function curr_chat($id)
    {   
        $txt = "SELECT case when `from`=$id THEN `to` when `to`=$id THEN `from` end as id_chat, case when `from`=$id THEN `to_name` when `to`=$id THEN `from_name` end as name,(SELECT t_registrasi.thumbnail from t_registrasi WHERE id=id_chat) as thumbnail, (SELECT t_registrasi.email from t_registrasi WHERE id=id_chat) as email FROM `frei_chat` where `from`=$id or `to`=$id GROUP BY id_chat";
        $results = DB::select($txt);
        $this->response['data'] = $results;
        return response()->json($this->response); 
    }
}
