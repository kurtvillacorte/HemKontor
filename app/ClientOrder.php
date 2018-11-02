<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientOrder extends Model
{
    //
    public $primaryKey = 'clientOrderID';
    public $incrementing = false;
    public $table = "clientorders";
    public $timestamps = false;
}
