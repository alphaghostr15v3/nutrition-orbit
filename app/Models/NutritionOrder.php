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
        'address',
        'city',
        'state',
        'pin_code',
        'product_name',
        'brand',
        'category_name',
        'quantity',
        'order_status',
        'description',
        'order_date',
    ];
}
