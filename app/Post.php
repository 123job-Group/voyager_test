<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'author_id',
        'title',
        'excerpt',
        'body',
        'slug',
        'meta_description',
        'meta_keywords',
    ];
}
