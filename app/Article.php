<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'user_articles';

    #----dates
    protected $dates = ['date', 'inicio','fin','purchase_at'];
}
