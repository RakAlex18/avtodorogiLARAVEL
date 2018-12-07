<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fact extends Model
{
    protected $fillable = [

        'title', 'content','id_author', 'link_content'
    ];
}
