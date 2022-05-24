<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DueDate extends Model
{
    protected $fillable = ['user_id', 'due'];
}
