<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'content', 'img','title','status','writer','keywords'
            ];
}
