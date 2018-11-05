<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DangnhapController extends Controller
{
    function index(){
    	return view('event.login.login');
    }

    function postDangnhap(Request $request){
   		$this->validate($request,[
    		'username'=>'required',
    		'pass'=>'required|min:3|max:32'
    	],[
    		'username.required'=>'Bạn chưa nhập username',
    		'pass.required'=>'Bạn chưa nhập password',
    		'pass.min'=>'password không được nhỏ hơn 3 ký tự',
    		'pass.max'=>'password không được lớn hơn 32 ký tự'
    	]);
    if(Auth::attempt(['username'=>$request->username,'pass'=>$request->password]))
    {
    	return redirect('index');
    }
    else{
    	return redirect('login')->with('thongbao','Đăng nhập không thành công');
    }


    }
}
