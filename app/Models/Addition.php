<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Addition extends Model
{
    protected $table = 'additions';
    protected $fillable = ['name', 'type', 'for', 'price', 'image_url'];
}
