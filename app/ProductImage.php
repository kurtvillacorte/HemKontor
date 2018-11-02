<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productImage extends Model
{
    //Table Name
    public $table = "productimage";
    public $timestamps = false;

    public function Product(){
        return $this->belongsTo('App\Product', 'productCode', 'productCode');
    }
}
