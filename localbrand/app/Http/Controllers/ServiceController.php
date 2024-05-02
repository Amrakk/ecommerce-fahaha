<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class ServiceController extends Controller
{
    public function index(){
        return view('Service.contact_us');
    }

    public function save_feedback(Request $request){
        $data = array();
        $data['feedback'] = $request->message;
        DB::table('tbl_feedback')->insert($data); 
        return Redirect::to('contact-us');
    }
}
