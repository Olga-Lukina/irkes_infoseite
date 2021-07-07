<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Techsheets extends Model
{
    use HasFactory;
    protected $fillable = [
        'showcontent',
        'product_id'
    ];
    public function product()
    {
        return $this->belongsTo(\App\Models\Product::class, 'product_id');
    }
}
