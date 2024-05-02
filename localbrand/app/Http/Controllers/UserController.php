<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use DB;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Str;
use Illuminate\Support\Facades\Redirect;

session_start();

class UserController extends Controller
{
    public function user_login(){
        return view('users.user_login');
    }

    public function user_register(){
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand_product')->where('brand_status','0')->orderby('brand_id','desc')->get();
        return view('users.user_register')->with('category',$cate_product)->with('brand',$brand_product);
        
    }

    public function save_user(Request $request){
        $pass =$request->user_password;
        $email = $request->user_email;
        if($pass == ""  && $email == "" ){
            Session::put('error','EMAIL OR PASSWORD CAN NOT BE EMPTY');
            return Redirect::to('/user-register');
        }
        elseif(strlen($pass) < 6){
            Session::put('error','NOT LESS THAN SIX');
            return Redirect::to('/user-register');
        }
        else{
            $data = array();
            $data['password'] = md5($request->user_password); 
            $data['name'] = $request->user_name; 
            $data['email'] = $request->user_email;
            $id = DB::table('users')->insertGetId($data);
            Session::put('id',$id);
            Session::put('name',$request->user_name);
            return Redirect::to('/home');
        }
       
    }

    public function verify_login_user(Request $request){
        $user_email = $request->user_email;
        $user_password = md5($request->user_password);

        $result = DB::table('users')->where('email', $user_email)->where('password', $user_password)->first();
        if($result){
            Session::put('user_email', $result->email);
            Session::put('user_password', $result->password);
            Session::put('id',$result->id);
            return Redirect::to('/show-checkout');
        }
        else{
            Session::put('message','EMAIL OR PASSWORD WRONG, PLEASE TRY AGAIN');
            return Redirect::to('/user-register');
        }
    }

}
