<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientOrderDetail extends Model
{
    //
    public $primaryKey = 'clientOrderDetailID';
    public $incrementing = false;
    public $table = "clientorderdetails";
    public $timestamps = false;
}
