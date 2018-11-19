<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class customer extends Model
{
     protected $table = "customer";
    public $timestamps = false;
    protected $primaryKey = "id";
}
