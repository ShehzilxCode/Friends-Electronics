<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = ['name', 'category_id', 'description', 'price', 'discount', 'main_image_path', 'sku', 'status']; 

    public function category()
    {
        return $this->belongsTo(category::class, 'category_id');
    }
}
