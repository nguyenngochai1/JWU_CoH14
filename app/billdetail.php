<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class billdetail extends Model
{
      protected $table = "bill_detail";
    public $timestamps = false;
    protected $primaryKey = "id";
}
