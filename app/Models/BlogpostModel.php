<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogpostModel extends Model
{
    use HasFactory;
    public $table = "post";
    public $timestamps = false;
    protected $fillable = [
        'post_title','post_meta_keyword','post_meta_description','post_image','post_content'
    ];
}
