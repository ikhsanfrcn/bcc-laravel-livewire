<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    public $table = "products";
    public $timestamps = false;
    protected $fillable = [
        'product_id','product_name','product_type_id','product_image','product_price','product_description'
    ];
}
