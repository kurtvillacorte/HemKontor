<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobOrder extends Model
{
    //
    public $primaryKey = 'joNo';
    public $incrementing = false;
    public $table = "joborder";
    public $timestamps = false;
}
