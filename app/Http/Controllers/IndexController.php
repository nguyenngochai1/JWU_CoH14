<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\sukien;
use App\slide;
use App\register_event;
class IndexController extends Controller
{
	function __construct(){
		$sukien = sukien::all();
		//$slide = slide::all();
		view()->share('sukien',$sukien);	
		//view()->share('slide',$slide);	
	}
    public function index(){
    	//$slide = slide::all();
    	return view('event.index.index');
    }
    public function SearchEvent(Request $req){
    	//$name = $req->key;
    	$sukien = DB::table('event')
    	->where('name','LIKE','%'.$req->key.'%')
    	->where('start_time','LIKE','%'.$req->date.'%')
    	->where('location','LIKE','%'.$req->location.'%')
    	->get();
    	return view('event.search.search',compact('sukien'));
    	// e có file search chưa, khi search thì nó chuyển về trang đó đó, à 
    }
    public function dangkisukien(Request $request){
      $this->validate($request,[
          'name' => 'required|min:3',
          'email' => 'required|email|unique:register_event,email'
      ],[
          'name.required' => 'bạn chưa nhập tên người dùng',
          'name.min' => 'tên người dùng phải có ít nhất 3 ký tự',
          'email.required' => 'bạn chưa nhập email',
          'email.email' => 'bạn chưa nhập đúng định danh email',
          'email.unique' => 'email đã tồn tại'
      ]);
      $register_event = new register_event;
      $register_event->name = $request->name;
      $register_event->email = $request->email;
      $register_event->save();
      return redirect('trangchu')->with('thongbao','chúc mừng bạn đã đăng ký thành công');
    }
    //sao cái category của e nó nulll thế, dạ chưa nhập dữ liệu hết đó anh, mà cái này cần cái đó hả a, ví dụ e tìm cái tin nớ e biết cái tin nớ nó thuộc category nào chứ, mà để a xem lại thử
 		// $cat_id = $request->cat_id;
   //      $value = $request->value;
   //      if ($cat_id == 0) {
   //          $Result = DB::table('products')
   //          ->where('name','LIKE',"%$value%")
   //          ->orderBy('id','DESC')
   //          ->paginate(6);
   //      }else{
   //          $Result = DB::table('products')
   //          ->join('categories','categories.id','=','products.cat_id')
   //          ->where('products.name','LIKE',"%$value%")
   //          ->where('categories.id','=',$cat_id)
   //          ->orderBy('products.id','DESC')
   //          ->paginate(6);
   //      }

   //      if (sizeof($Result) ==0) {
   //          $request->session()->flash('msgSearch',"Không có kết quả phù hợp với keyword : {$value}");
   //          //return redirect()->route('aboutme.news.search');
   //      }

  
   

}
