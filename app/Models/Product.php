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
        'category_id',
        'qrcode',
        'marketing',
        'videorecipes'
    ];
    public function recipes (){
        return $this->hasMany(\App\Models\Recipe::class);
    }
    public function reviews (){
        return $this->hasMany(\App\Models\Review::class);
    }
    public function questions (){
        return $this->hasMany(\App\Models\Question::class);
    }
}
