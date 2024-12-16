<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = ['name', 'category_id', 'description', 'price', 'tags', 'main_image_path', 'status',]; 
}
