<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [

        'title',
        'description',
        'amount',

    ];

    # sintax
    # get + field name + attribute
    public function getFullNameAttribute()
    {
        return $this->title . ' ' . $this->description;
    }
}
