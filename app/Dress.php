<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dress extends Model
{
    protected $fillable = [
        'name', 'item_id', 'color', 'size', 'price', 'overview'
    ];
}
