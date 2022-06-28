<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Casts\Attribute;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'img',
        'category',
        'projectName'
    ];
    protected function img(): Attribute
     {
       return Attribute::make(
           get: fn ($value) => url('').'/file/portfolio/'.$value,
       );
     }
}

