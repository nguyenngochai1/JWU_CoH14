<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class sukien extends Model
{
    protected $table="event" ; 
    public $timestamps = false;
     protected $primaryKey = "id";
  
}
