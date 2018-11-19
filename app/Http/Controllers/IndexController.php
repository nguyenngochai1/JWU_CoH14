<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\sukien;
use App\slide;
use App\register_event;
use Darryldecode\Cart\CartServiceProvider;
use Cart;
Use Alert;
Use Session;
Use Illuminate\Support\Facades\Input;
class IndexController extends Controller
{
	function __construct(){
		$sukien = sukien::all();
		//$slide = slide::all();
    $register_event=register_event::all();
		view()->share('sukien',$sukien);	
    view()->share('register_event',$register_event);
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
          'email.unique' => 'email đã tồn tại'
      ]);
      $register_event = new register_event;
      $register_event->name = $request->name;
      $register_event->email = $request->email;
      $register_event->save();
      alert()->success('Cảm ơn! Chúng tôi sẽ gửi thông báo cho bạn ngay khi chúng tôi có những sự kiện mới','ĐĂNG KÍ THÀNH CÔNG')->persistent('OK');
      return redirect()->back();
    }
    public function addgiohang(Request $req,$id){
      $product_buy = DB::table('event')->where('Event_id',$id)->first();
      //$quantity =  Session::get('quantity');
      Cart::add(array(
        'id'=>$id,
        'name'=>$product_buy->name,
        'quantity'=> 1,
        'price'=>$product_buy->price_basic,
        'attributes'=>array(
        'img'=>$product_buy->cover_image,
        )
      ));
      $content = Cart::getContent();
      //print_r($content);
      return redirect()->route('viewgiohang');
    }
    public function viewgiohang(){
       $content = Cart::getContent();
       //print_r($content);
       return view('event.cart.cart',compact('content'));
     }
     public function removeCart($id){
      $rowId = Cart::search(array('id' => Request::get('Event_id')));
      Cart::remove($rowId[0]);
       /* Cart::remove($id); */
        return redirect()->back();
     }
     public function sweet(){
       return view('sweet');
     }
    
/*    public function cart() {
        $arProduct = Cart::getContent();
        dd($arProduct);
        $subtotal = Cart::subtotal(0, '.', '.');
        return view('template.event.header', compact('arProduct', 'subtotal'));
        // đúng rồi, chừ e tạo một cái view để show cái giỏ hàng của e ra nữa,
    }*/
  


       

}
