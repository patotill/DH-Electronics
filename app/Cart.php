<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $guarded = [];

    public function products()
    {
    	return $this->belongsToMany(Product::class)->withPivot('items', 'total_price')
                                                  ->withTimestamps();
    }

    public function getTotalPrice()
    {
      return $cart->products->sum('pivot.total_price');
    }
}
