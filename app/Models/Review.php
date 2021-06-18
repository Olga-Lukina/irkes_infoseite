<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'rating'
    ];
    public function product()
    {
        return $this->belongsTo(\App\Models\Product::class, 'product_id');
    }
}
