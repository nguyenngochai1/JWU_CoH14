<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class register_event extends Model
{
    protected $table = "register_event";
    public $timestamps = false;
    protected $primaryKey = "id";
}
