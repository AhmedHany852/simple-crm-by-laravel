<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    
    protected $fillable = [
        'name','businessCategory','birthDate','phone','address','city','notes','fileInput','created_at','type_id'
    ];

     public function Typename(){
        return $this->belongsTo(Type::class, 'type_id');
     }


     protected function fileInput(): Attribute
     {
       return Attribute::make(
           get: fn ($value) => url('').'/file/clients/'.$value,
       );
     }
}
