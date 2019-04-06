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

    public function getTotalCostAttribute()
    {
        return $this->quantity * $this->price;
    }

    public function getReportingDateAttribute($value)
    {
        $createDate = new \DateTime($value); //2017-08-14 20:58:37
        return $createDate->format('Y-m-d');
    }

    #----------------------- MUTATORS
    # modified values before save it
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = ucfirst($value);
    }
}
