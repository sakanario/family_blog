<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected $table = 'blog';
    protected $guarded = ['created_at','updated_at'];

}
