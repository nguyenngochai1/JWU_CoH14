<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tintuc;
class NewController extends Controller
{
    //
    function index(){
    	$tintuc = tintuc::all();
    	return view('event.news.tintuc',['tintuc'=>$tintuc]);
    }
    
}
