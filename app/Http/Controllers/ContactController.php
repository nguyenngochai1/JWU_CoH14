<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;
class ContactController extends Controller
{
    //
    function __construct(){
		$contact = contact::all();
		view()->share('contact',$contact);	
	}
    function index(){
    	return view('event.contact.contact');
    }
    
    public function sendcontact(Request $request){
    $this->validate($request,[
			'name' => 'required|min:3',
            'email' => 'required|email|unique:contact,email'
     ],[
          'email.unique' => 'email đã tồn tại'
     ]);
      $contact = new contact;
      $contact->name = $request->name;
      $contact->email = $request->email;
      $contact->subject = $request->subject;
      $contact->request = $request->request;
      $contact->save();
      return redirect('event.contact.contact')->with('alert', 'Cảm ơn! Chúng tôi sẽ phản hồi cho bạn trong thời gian sớm nhất ');
    }
}
