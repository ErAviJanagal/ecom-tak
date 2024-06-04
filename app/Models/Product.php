<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // acessor is used to get the product name capitalize whenever i call it 😎😎😎😎 
    public function getProductNameAttribute($value)
    {
        return ucwords($value);
    }
    

}
