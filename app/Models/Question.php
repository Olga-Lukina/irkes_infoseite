<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'content'
    ];
    public function product()
    {
        return $this->belongsTo(\App\Models\Product::class, 'product_id');
    }
}
