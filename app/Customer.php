<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function package()
    {
        return $this->belongsTo('App\Package', 'package_id');
    }

    public function transactions()
    {
        return $this->hasMany('App\Transaction', 'user_id');
    }
    public function customers()
    {
        return $this->belongsTo('App\User', 'customer_id');
    }

     public function employee()
    {
        return $this->hasOne(Employee_detail::class, 'user_id');
    }

    public function business_category()
    {
        return $this->belongsTo('App\Category', 'business_category_id');
    }

    public function product_category()
    {
        return $this->belongsTo('App\Category', 'product_category_id');
    }
    public function user(){
        return $this->belongsTo('user');
    }
}
