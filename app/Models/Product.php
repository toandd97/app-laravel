<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'sale_price',
        'image',
        'category_id',
        'slug',
        'description',
    ];
    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
}
