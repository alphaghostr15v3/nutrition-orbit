<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataScrapper extends Model
{
    use HasFactory;

    protected $table = 'datascrapper'; // Explicitly set the table name

    protected $fillable = [
        'Name',
        'Address',
        'Phone',
        'Website',
        'Review',
    ];
    protected $guarded = [];
}
