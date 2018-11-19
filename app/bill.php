<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
   protected $table = "bill";
    public $timestamps = false;
    protected $primaryKey = "id";
}
