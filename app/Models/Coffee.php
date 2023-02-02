<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{
    use HasFactory;
    public $table = 'coffee';
    public $primaryKey = 'coffee_id';
    public $timestamps = false;
    protected $fillable = [
        'coffee_id','coffee_name', 'coffee_price'
    ];
}
