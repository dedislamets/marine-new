<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use DB;
use App\Slider;
use Illuminate\Support\Facades\Response;

class CalendarController extends Controller
{
    public function __construct()
    {
    	$this->photos_path = public_path('/images');
        $this->response = ['code' => 0, 'message' => 'OK', 'success' => true];
    }

    public function index()
    {
	  
		$status = array('On Schedule', 'Finish', 'Cancel');
		$events = DB::table('calendar_events')
			->select(['calendar_events.*','t_pengajuan.status'])
			->from('calendar_events')
			->join('t_pengajuan', 't_pengajuan.kode_pengajuan','=','calendar_events.kode_pengajuan')->get();	 	
		 	//->whereIn("status", $status)->get();

         $data_events = array();

         foreach($events as $r) {

           $data_events[] = array(
             "id" => $r->ID,
             "title" => $r->title,
             "description" => $r->description,
             "end" => $r->end,
             "start" => $r->start,
             "kode_pengajuan" => $r->kode_pengajuan,
             "location" => $r->location,
             "agree_1" => $r->agree_1,
             "agree_2" => $r->agree_2,
             "status" => $r->status,
           );
         }
        return view('pages.calendar', ['users'  => $data_events]);
    }
    public function get_events($start,$end)
	{         
        $startdt = new DateTime('now');
        $startdt->setTimestamp($start);
        $start_format = $startdt->format('Y-m-d H:i:s');

        $enddt = new DateTime('now');
        $enddt->setTimestamp($end); 
        $end_format = $enddt->format('Y-m-d H:i:s');
         
		$status = array('On Schedule', 'Finish', 'Cancel');
		$events = DB::table('calendar_events')
			->select(['calendar_events.*','t_pengajuan.status'])
			->from('calendar_events')
			->join('t_pengajuan', 't_pengajuan.kode_pengajuan','=','calendar_events.kode_pengajuan')		 	
		 	->whereIn("status", $status)->get();

         $data_events = array();

         foreach($events as $r) {

           $data_events[] = array(
             "id" => $r->ID,
             "title" => $r->title,
             "description" => $r->description,
             "end" => $r->end,
             "start" => $r->start,
             "kode_pengajuan" => $r->kode_pengajuan,
             "location" => $r->location,
             "agree_1" => $r->agree_1,
             "agree_2" => $r->agree_2,
             "status" => $r->status,
           );
         }
        return response()->json(array("events" => $data_events));         
    }
    public function upload_slide(Request $request){  
    	$photos = $request->file('file');

        if (!is_array($photos)) {
            $photos = [$photos];
        }

        if (!is_dir($this->photos_path)) {
            mkdir($this->photos_path, 0777);
        }

        for ($i = 0; $i < count($photos); $i++) {
            $photo = $photos[$i];
            $name = sha1(date('YmdHis') . str_random(30));
            $save_name = $name . '.' . $photo->getClientOriginalExtension();
            $resize_name = $name . str_random(2) . '.' . $photo->getClientOriginalExtension();

            // Image::make($photo)
            //     ->resize(250, null, function ($constraints) {
            //         $constraints->aspectRatio();
            //     })
            //     ->save($this->photos_path . '/' . $resize_name);

            $photo->move($this->photos_path, $save_name);

            // $upload = new Upload();
            // $upload->filename = $save_name;
            // $upload->resized_name = $resize_name;
            // $upload->original_name = basename($photo->getClientOriginalName());
            // $upload->save();

            $c = new Slider;
            $c->img_slider = $save_name;
            $c->url = "#";       
	    	$c->save();
        }        
        return response()->json($this->response);     
    }
    public function get_slider(){
    	$slider = DB::table('t_slider')->get();    	
    	return response()->json(array("slider" => $slider));        
    }

    public function destroy(Request $request)
    {
        $filename = $request->name;
        $uploaded_image = Slider::where('img_slider', $filename)->first();

        if (empty($uploaded_image)) {
            return Response::json(['message' => 'Sorry file does not exist'], 400);
        }

        $file_path = $this->photos_path . '/' . $uploaded_image->img_slider;        

        if (file_exists($file_path)) {
            unlink($file_path);
        }

        if (!empty($uploaded_image)) {
            $uploaded_image->delete();
        }

        return Response::json(['message' => 'File successfully delete'], 200);
    }
}
