<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->hasMany(Product::class);
    }
    
    // acessor is used to get the product name capitalize whenever i call it 😎😎😎😎 
    public function getCategoryNameAttribute($value)
    {
        return ucwords($value);
    }
}
