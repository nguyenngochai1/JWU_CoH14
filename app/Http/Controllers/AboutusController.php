<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutusController extends Controller
{
    function index() {
    	return view('event.aboutus.aboutus' ) ;
    }
    
}
