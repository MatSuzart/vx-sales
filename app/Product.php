<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
   public function sales() {
        return $this->belongsTo('App\Sales');
    }

    
    
    protected $fillable = [
        'name', 'delivery', 'price'
    ];
}
