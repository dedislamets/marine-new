<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengajuan;
use App\Iklan;
use App\Foto;
use App\Register;
use App\Kapal;
use Yajra\Datatables\Datatables;
use DB;
use URL;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PengajuanController extends Controller
{
    public function __construct()
    {
        $this->response = ['code' => 0, 'message' => 'OK', 'success' => true];
    }

    public function index()
    {
        return view('pages.pengajuan');
    }
    public function sign_a()
    {
            
        return view('pages.pengajuan-sign-a');
    }
    public function sign_b()
    {
            
        return view('pages.pengajuan-sign-b');
    }
    public function meetup()
    {
            
        return view('pages.pengajuan-meetup');
    }
    public function deal()
    {
            
        return view('pages.pengajuan-deal');
    }
    public function verified()
    {
            
        return view('pages.pengajuan-verified');
    }
    public function cancel()
    {
            
        return view('pages.pengajuan-cancel');
    }
    public function aprv($id)
    {        
        $c = Pengajuan::find($id);         
        $c->status = "Verified";     
        $kode_pengajuan = $c->kode_pengajuan;
        $c->save();
        $insertedId = $c->id;
        $this->response['inserted'] = $insertedId;
        $data = array('name'=>"Marine Business");
        
        $string = "Thank you for waiting, your inquiry number ". $c->kode_pengajuan .", we have reviewed and approved.
You can proceed to the document signing process.


Marine Business";
        Mail::raw($string, function ($message) use ($c){
            $message->to($c->email)->subject
            ("Your Inquiry No. ". $c->kode_pengajuan ." Approved ");
            $message->from('admin@marinebusiness.co.id','Marine');
        });
        
        
        $data = array(
	    	'kategori'			=> 'Inquiry Review Status',
		    'message_notif' 	=> "Your Inquiry No.". $c->kode_pengajuan ." Approved, please upload sign document ",	
		    'email'				=> $c->email,	
		    'url'				=> "https://marinebusiness.co.id/setting/upload",
		    'action'            => 'read'
		);
		$id = DB::table('t_notification')->insertGetId($data);
        $this->response["tes"] = $c;
        return response()->json($this->response); 
    }
    public function rjc(Request $request)
    {        
        $c = Pengajuan::find($request->input('idPengajuan'));         
        $c->reason = $request->input('alasan');  
        $c->status = "Cancel";        
        $c->save();
        $insertedId = $c->id;
        $this->response['inserted'] = $insertedId;
        
        $string = "Thank you for waiting, sorry your inquiry number ". $c->kode_pengajuan .", can not be approved.


Marine Business";
        Mail::raw($string, function ($message) use ($c){
            $message->to($c->email)->subject
            ("Your Inquiry No. ". $c->kode_pengajuan ." Not Approved ");
            $message->from('admin@marinebusiness.co.id','Marine');
        });
        
        
        $data = array(
	    	'kategori'			=> 'Inquiry Review Status',
		    'message_notif' 	=> "Your Inquiry No.". $c->kode_pengajuan ." Not Approved ",	
		    'email'				=> $c->email,	
		    'url'				=> "#",
		    'action'            => 'read'
		);
		$id = DB::table('t_notification')->insertGetId($data);
        return redirect('pengajuan');
    }
    public function dt_waiting() {
        $data = Pengajuan::where('status','=','Waiting Verification');
        return Datatables::of($data)
            ->addColumn('action', function($data) {
                return '<a class="btn btn-sm btn-primary btn-edit" data-id="'.$data->id .'" data-name="'. $data->pdf_1.'" onclick="showpdf(this)" href="javascript:void(0);" title="View"><i class="fa fa-book"></i></a> <a href="javascript:void(0);" class="btn btn-sm btn-blue-alt" data-id="'.$data->id .'" title="Approve" onclick="approve('.$data->id .')">
                        <span class="fa fa-thumbs-up"></span>
                    </a><a href="javascript:void(0);" data-id="'.$data->id .'" class="btn btn-sm btn-danger btnreject" onclick="confirmrjc('.$data->id .')" >
                        <span class="fa fa-thumbs-down" title="Reject"></span>
                    </a><a href="'. url::to('/')."/pengajuan/view/". $data->id .'" class="btn btn-sm btn-warning" >
                        <span class="fa fa-info-circle" title="Detail"></span>
                    </a>';
            })
            ->make(true);
    }
    public function dt_verified() {
        $data = Pengajuan::where('status','=','Verified');
        return Datatables::of($data)
            ->addColumn('action', function($data) {
                return '<a class="btn btn-sm btn-primary btn-edit" data-id="'.$data->id .'" data-name="'. $data->pdf_1.'" onclick="showpdf(this)" href="javascript:void(0);" title="Preview"><i class="fa fa-book"></i></a><a href="'. url::to('/')."/pengajuan/view/". $data->id .'" class="btn btn-sm btn-warning" >
                        <span class="fa fa-info-circle" title="Detail"></span>
                    </a>';
            })
            ->make(true);
    }
    public function dt_sign_1() {
        $data = Pengajuan::where('status','=','Sign 1');
        return Datatables::of($data)
            ->addColumn('action', function($data) {
                return '<a class="btn btn-sm btn-primary btn-edit" data-id="'.$data->id .'" data-name="'. $data->pdf_2.'" onclick="showpdf(this)" onclick="editmodal(this)" href="javascript:void(0);"><i class="fa fa-book"></i></a><a href="'. url::to('/')."/pengajuan/view/". $data->id .'" class="btn btn-sm btn-warning" >
                        <span class="fa fa-info-circle" title="Detail"></span>
                    </a>';
            })
            ->make(true);
    }
    public function dt_sign_2() {
        $data = Pengajuan::where('status','=','Sign 2');
        return Datatables::of($data)
            ->addColumn('action', function($data) {
                return '<a class="btn btn-sm btn-primary btn-edit" data-id="'.$data->id .'" data-name="'. $data->pdf_3.'" onclick="showpdf(this)" onclick="editmodal(this)" href="javascript:void(0);"><i class="fa fa-book"></i></a><a href="'. url::to('/')."/pengajuan/view/". $data->id .'" class="btn btn-sm btn-warning" >
                        <span class="fa fa-info-circle" title="Detail"></span>
                    </a>';
            })
            ->make(true);
    }
    public function dt_meet() {
        $data = Pengajuan::where('status','=','On Schedule');
        return Datatables::of($data)
            ->addColumn('action', function($data) {
                return '<a class="btn btn-sm btn-primary btn-edit" data-id="'.$data->id .'" data-name="'. $data->pdf_3.'" onclick="showpdf(this)" onclick="editmodal(this)" href="javascript:void(0);"><i class="fa fa-book"></i></a><a href="'. url::to('/')."/pengajuan/view/". $data->id .'" class="btn btn-sm btn-warning" >
                        <span class="fa fa-info-circle" title="Detail"></span>
                    </a>';
            })
            ->make(true);
    }
    public function dt_deal() {
        $data = Pengajuan::where('status','=','Finish');
        return Datatables::of($data)
            ->addColumn('action', function($data) {
                return '<a class="btn btn-sm btn-primary btn-edit" data-id="'.$data->id .'" data-name="'. $data->pdf_4.'" onclick="showpdf(this)" onclick="editmodal(this)" href="javascript:void(0);"><i class="fa fa-papers"></i></a><a href="'. url::to('/')."/pengajuan/view/". $data->id .'" class="btn btn-sm btn-warning" >
                        <span class="fa fa-info-circle" title="Detail"></span>
                    </a>';
            })
            ->make(true);
    }
    public function dt_cancel() {
        $data = Pengajuan::where('status','=','Cancel');
        return Datatables::of($data)
            ->addColumn('action', function($data) {
                return '<a class="btn btn-sm btn-primary btn-edit" data-id="'.$data->id .'" data-name="'. $data->pdf_1.'" onclick="showpdf(this)" onclick="editmodal(this)" href="javascript:void(0);"><i class="fa fa-papers"></i>&nbsp;&nbsp;Preview</a><a onclick="confirmrjc('.$data->id .')" class="btn btn-sm btn-danger" >
                        <span class="fa fa-info-circle" title="Reason">&nbsp;Reason</span>
                    </a>';
            })
            ->make(true);
    }

    public function reason($id)
    {

        $reason = db::table('t_pengajuan')     
                ->select("reason")           
                ->where('id',$id)                                
                ->first();   
        return response()->json([
            'reason' => $reason
        ]); 
    }
    public function view($id)
    {
            
        $pengajuan = Pengajuan::where('id', $id)->first();  
        
        $user = Register::where('id', $pengajuan->id_buyer)->first();   
        $iklan = Iklan::where('id', $pengajuan->id_kapal)->first();  
        $kapal = Kapal::where('clasification_no', $pengajuan->id_kapal)->first(); 

        $sertifikat = DB::table('t_sertifikat') 
                            ->select(['nama_sertifikat','dokumen'])   
                            ->join('t_sertifikat_mst','t_sertifikat.kode_sertifikat','=','t_sertifikat_mst.kode_sertifikat')
                            ->where('clasification_no','=', $pengajuan->id_kapal)
                            ->get();             
        $files = DB::table('files')->where('email', $user->email)->get();

        $foto = db::table('t_foto_kapal')                
                ->where('clasification_no',$pengajuan->id_kapal)                                
                ->get();    
        
        return view('pages.detail-pengajuan',[  'iklan' => $iklan,
                                              'pengajuan' => $pengajuan,
                                              'foto'  => $foto,
                                              'user'  => $user,
                                              'ship'  => $kapal,
                                              'sertifikat' => $sertifikat,
                                              'files'   => $files
                                    ]);
        
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->input('id')==""){
    		$c = new Profil;
    		$check = Profil::find(1)
    				->first();
    		if(!empty($check)) {
    			$c = Profil::find(1);
    		}
    	}else{
    		$c = Profil::find($request->input('id'));
    	}            
        $c->history = $request->input('history');
        $c->visi = $request->input('visi');
        $c->misi = $request->input('misi'); 
        $c->service_desc = $request->input('service_desc'); 
        $c->trading_desc = $request->input('trading_desc'); 
        $c->chartering_desc = $request->input('chartering_desc'); 
        $c->csm_desc = $request->input('csm_desc'); 
        $c->transportation_desc = $request->input('transportation_desc');        
	    $c->save();
	    $insertedId = $c->id;
	    return redirect('profil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
