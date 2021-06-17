<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'images',
        'description',
        'categoryslug',
        'qrcode',
        'marketing',
        'videorecipes'
    ];
    public function recipes (){
        return $this->hasMany(\App\Models\Recipe::class);
    }
    public function reviews (){
        return $this->hasMany(\App\Models\Recipe::class);
    }
    public function questions (){
        return $this->hasMany(\App\Models\Recipe::class);
    }
}
