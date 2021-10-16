<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    protected $fillable = [
        'title', 'description'
    ];

    public function variant()
    {
       
            return $this->hasMany(ProductVariant::class,);
        
    }

}
