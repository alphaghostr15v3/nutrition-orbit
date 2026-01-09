<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NutritionOrder extends Model
{
    protected $table = 'nutrition_orders';

    protected $fillable = [
        'order_id_custom',
        'customer_name',
        'phone_number',
        'product_name',
        'brand',
        'quantity',
        'order_status',
        'description',
        'order_date',
    ];
}
