<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $register   = DB::table('t_registrasi')->get();
        $iklan      = DB::table('t_iklan')->get();
        $pengajuan     = DB::table('t_pengajuan')->get();
        $kapal     = DB::table('t_kapal')
            			->select(['t_kapal.*'])
            			->join('t_iklan', 't_iklan.clasification_no','=','t_kapal.clasification_no')
            			->whereIn("status", array(1))->get();
        
        $chart = DB::table('t_pengajuan')
                    ->select(['tgl_pengajuan',DB::raw("count(*) as jml")])
                    ->groupBy('tgl_pengajuan')
    				->orderBy('tgl_pengajuan','asc')
    				->get()->toArray();
    	$array = [];
    	foreach ($chart as $k => $value) {
    		$array[$k]['x'] = $value->tgl_pengajuan;
    		$array[$k]['y'] = $value->jml;
        }
        
        $data_reg = DB::table('t_registrasi')
                    ->select([DB::raw("DATE(tanggal_join) as tanggal_join"),DB::raw("count(*) as jml")])
                    ->groupBy(DB::raw("DATE(tanggal_join)"))
    				->orderBy(DB::raw("DATE(tanggal_join)"),'asc')
    				->get()->toArray();
    	$array_reg = [];
    	foreach ($data_reg as $k => $value) {
    		$array_reg[$k]['x'] = $value->tanggal_join;
    		$array_reg[$k]['y'] = $value->jml;
        }
        
        return view('pages.home', [ 'j_registrasi' => count($register),
                                    'j_iklan' => count($iklan),
                                    'j_pengajuan' => count($pengajuan),
                                    'j_kapal' => count($kapal),
                                    'chart_pengajuan' => json_encode($array),
                                    'chart_registrasi' => json_encode($array_reg)
                                    ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
    
    public function showChangePasswordForm(){
        return view('auth.reset');
    }
    
    public function changePassword(Request $request){

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Password changed successfully !");

    }
}
