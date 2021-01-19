<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Log;
class PagesController extends Controller
{
    //

    public function index() {
       
        return view('pages.homepage',);
      }
      public function about() {
       
        return view('pages.about');
      }
      public function contact() {
       
        return view('pages.contact');
      }
      public function order() {
       
        return view('pages.how-to-order');
      }
      public function product() {
       
        return view('pages.product');
      }

      public function store(Request $request)
      {
          //
          Log::error('uuuu');
          $data = array();
          $data['name'] = $request->name;
          $data['email'] = $request->email;
          $data['password'] = $request->password;
          $data['comment'] = $request->comment;
          
          $contact=DB::table('contact')->insert($data);
          return redirect('/');
      }
      
}
