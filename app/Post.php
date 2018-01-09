<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    public $incrementing = false;

    public $timestamps = false;

    public $fillable = ['id_user','title', 'description','created_at', 'updated_at'];
}
