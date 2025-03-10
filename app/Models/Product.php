<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
class Product extends Model
{
    use HasFactory;

    protected $table = 'products'; 

    protected $fillable = [
        'name', 'id_type', 'description', 'unit_price', 'promotion_price', 
        'image', 'unit', 'new', 'created_at', 'updated_at'
    ];
}
