<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sukien;
use Illuminate\Support\Facades\DB;
class EventController extends Controller
{
    function __construct(){
        $sukien = sukien::all();
        view()->share('sukien',$sukien);
    }
    function index(){
    	return view('event.events.sukien');
    } 

    function singleevent($id){
    	$sukien = DB::table('event')->where('Event_id',$id)->first();
    	$image = DB::table('event')->select('Event_id','cover_image')->where('Event_id',$id);
    	return view('event.single-event.single_event',compact('sukien'));

    }
    public function thanhpho(){
    	$sukien=DB::table('event')->select('city','name')->whereNotNull('city')->distinct()->get();
    	return view('event.index.index',compact('sukien'));
    }
    public function sukienthanhpho($city){
    	$sukien = DB::table('event')->where('city',$city)->get();
    	return view('event.event_city.event_city',compact('sukien'));

    }





}

