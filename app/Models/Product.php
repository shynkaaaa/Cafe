<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'type', 'default_price', 'default_size', 'description', 'image_url'];

    public function defaultAdditions()
    {
        return $this->belongsToMany(Addition::class, 'products_default_additions', 'product_id', 'addition_id');
    }
}
