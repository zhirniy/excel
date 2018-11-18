<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $fillable = ['id','length', 'width', 'perimeter', 'user_name'];
}
