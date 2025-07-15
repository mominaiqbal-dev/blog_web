<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //new
    protected $fillable = [
    'name',
    'description',
    'price',
    'quantity',
];
}
