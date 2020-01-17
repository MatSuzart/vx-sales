<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    //
   public function product() {
        return $this->hasOne('App\Product', 'sales_id');
    }

    protected $fillable = [
        'delivery',
    ];
}
