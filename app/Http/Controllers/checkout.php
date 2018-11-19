<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\customer;
use App\bill;
use App\billdetail;
use Cart;
use Session;
class checkout extends Controller
{
    public function getcheckout(){
    	$this->data['cart'] = Cart::getContent();
        $this->data['total'] = Cart::getSubTotal();
        return view('event.checkout.checkout', $this->data);
    	/*return view('event.checkout.checkout');*/
    }
    public function postcheckout(Request $req){
    	$cartInfor = Cart::getContent();
    	$customer = new customer;
    	$customer->name= $req->name;
		$customer->email= $req->email;
		$customer->phone= $req->phone;
		$customer->address= $req->address;
		$customer->note= $req->note;
		$customer->save();

 		$bill = new Bill;
        $bill->id_customer = $customer->id;
        $bill->date_oder=date('y-m-d');
        $bill->total = str_replace(',', '', Cart::getSubTotal());
        $bill->payment=$req->payment;
        $bill->save();
		/*$billdetail = new billdetail;
		$billdetail->id_bill=$bill->id;
		//$billdetail->id_product
		//$billdetail->quantity =
		//$billdetail->price =
		$billdetail->save();*/
		alert()->success('Bộ phận khách hàng sẽ liên hệ với bạn trong thời gian sớm nhất','ĐẶT VÉ THÀNH CÔNG')->persistent('OK');
		return redirect()->back();




    }
}
