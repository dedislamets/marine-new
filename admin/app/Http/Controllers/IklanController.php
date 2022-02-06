<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Iklan;
use App\Foto;
use App\Register;
use App\Files;
use App\Kapal;
use Yajra\Datatables\Datatables;
use DB;
use URL;

class IklanController extends Controller
{
    public function __construct()
    {
        $this->response = ['code' => 0, 'message' => 'OK', 'success' => true];
    }

    public function index()
    {
	        
        return view('pages.iklan');
    } 

    public function all()
    {
            
        return view('pages.iklan-all');
    }
     public function approved()
    {
            
        return view('pages.iklan-approved');
    }
    public function reject()
    {
            
        return view('pages.iklan-reject');
    }  

    public function view($id)
    {
            
        $iklan = Iklan::where('id', $id)->first();  
        $user = Register::where('email', $iklan->email)->first();   
        $kapal = Kapal::where('clasification_no', $id)->first(); 
        $files = Files::where('email', $iklan->email)->get();

        $sertifikat = DB::table('t_sertifikat') 
                            ->select(['nama_sertifikat','dokumen'])   
                            ->join('t_sertifikat_mst','t_sertifikat.kode_sertifikat','=','t_sertifikat_mst.kode_sertifikat')
                            ->where('clasification_no','=', $id)
                            ->get();             

        $foto = db::table('t_foto_kapal')                
                ->where('clasification_no',$id)                                
                ->get();    
        
        return view('pages.detail-product',[  'iklan' => $iklan,
                                              'foto'  => $foto,
                                              'user'  => $user,
                                              'ship'  => $kapal,
                                              'sertifikat' => $sertifikat,
                                              'files' => $files
                                    ]);
        
    }    

    public function need() {
        $data = Iklan::where('status','=','0');
        return Datatables::of($data)
            ->addColumn('action', function($data) {
                return '<a class="btn btn-sm btn-primary btn-edit" data-id="'.$data->id .'" href="'. url::to('/')."/iklan/view/". $data->id .'"><i class="fa fa-book"></i>&nbsp;&nbsp;Preview</a>';
            })
            ->make(true);
    }
    public function approve() {
        $data = Iklan::where('status','=','1');
        return Datatables::of($data)
            ->addColumn('action', function($data) {
                return '<a class="btn btn-sm btn-primary btn-edit" data-id="'.$data->id .'" href="'. url::to('/')."/iklan/view/". $data->id .'"><i class="fa fa-book"></i>&nbsp;&nbsp;Preview</a>';
            })
            ->make(true);
    }
    public function iklan_all() {
        $data = Iklan::all();
        return Datatables::of($data)
            ->addColumn('action', function($data) {
                return '<a class="btn btn-sm btn-primary btn-edit" data-id="'.$data->id .'"  href="'. url::to('/')."/iklan/view/". $data->id .'"><i class="fa fa-book"></i>&nbsp;&nbsp;Preview</a>';
            })
            ->make(true);
    }

    public function iklan_reject() {
        $data = Iklan::where('status','=','2');
        return Datatables::of($data)
            ->addColumn('action', function($data) {
                return '<a class="btn btn-sm btn-primary btn-edit" data-id="'.$data->id .'" href="'. url::to('/')."/iklan/view/". $data->id .'"><i class="fa fa-book"></i>&nbsp;&nbsp;Preview</a>';
            })
            ->make(true);
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

    public function rjc(Request $request)
    {        
        $c = Iklan::find($request->input('idIklan'));         
        $c->reason = $request->input('alasan');  
        $c->status = 2;        
        $c->save();
        $insertedId = $c->id;
        $this->response['inserted'] = $insertedId;
        return redirect('iklan/reject');
    }
    public function aprv($id)
    {        
        $c = Iklan::find($id);                 
        $c->status = 1;        
        $c->save();
        $insertedId = $c->id;
        $this->response['inserted'] = $insertedId;
        return response()->json($this->response); 
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
