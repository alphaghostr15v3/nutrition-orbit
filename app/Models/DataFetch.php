<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataFetch extends Model
{
    use HasFactory;

    protected $table = 'datafetch'; // Explicitly set the table name

    protected $guarded = [];
}
