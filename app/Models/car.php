<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    use HasFactory;

    protected $fillable =[
        "plate",
        "brand",
        "color",
        "price"
    ];

    public $timestamps = false;
}