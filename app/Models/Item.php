<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    protected $table = 'items';

    protected $fillable = ['product_id', 'price', 'size', 'order_id'];

    public function additions()
    {
        return $this->belongsToMany(Addition::class, 'items_additions', 'item_id', 'addition_id');
    }
}
