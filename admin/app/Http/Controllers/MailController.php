<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
   public function basic_email(){
      $data = array('name'=>"Marine Business");
      $string = "Thank you for waiting, your inquiry number 123, we have reviewed and approved.
You can proceed to the document signing process.


Marine Business";
        Mail::raw($string, function ($message){
            $message->to('dedi.supatman@modena.co.id', 'Tutorials Point')->subject
            ('Laravel Basic Testing Mail');
            $message->from('admin@marinebusiness.co.id','Marine');
        });

    //   Mail::send(['text'=>'mail'], $data, function($message) {
    //       $message->to('dedi.supatman@modena.co.id', 'Tutorials Point')->subject
    //         ('Laravel Basic Testing Mail');
    //      $message->from('admin@marinebusiness.co.id','Marine');
    //   });
      echo "Basic Email Sent. Check your inbox.";
   }
   public function html_email(){
      $data = array('name'=>"Dedi Slamet");
      Mail::send('mail', $data, function($message) {
         $message->to('dedi.supatman@modena.co.id', 'Tutorials Point')->subject
            ('Laravel Basic Testing Mail');
         $message->from('admin@marinebusiness.co.id','Marine');
      });
      echo "HTML Email Sent. Check your inbox.";
   }
   public function attachment_email(){
      $data = array('name'=>"Virat Gandhi");
      Mail::send('mail', $data, function($message) {
         $message->to('abc@gmail.com', 'Tutorials Point')->subject
            ('Laravel Testing Mail with Attachment');
         $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
         $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
         $message->from('xyz@gmail.com','Virat Gandhi');
      });
      echo "Email Sent with attachment. Check your inbox.";
   }
}