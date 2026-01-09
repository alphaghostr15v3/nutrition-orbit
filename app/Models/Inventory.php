<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = [
        'product_id_custom',
        'product_name',
        'brand_name',
        'category_name',
        'price',
        'available_quantity',
        'stock_status',
    ];
}
