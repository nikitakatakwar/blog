<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['customer_id', 'title', 'description', 'price', 'quantity'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
