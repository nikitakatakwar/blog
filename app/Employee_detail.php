<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee_detail extends Model
{
    protected $fillable = ['user_id', 'employee_id', 'superior_id'];

    public function user()
    {
        return $this->belongsTo(Employee_detail::class);
    }

    public function superior()
    {
        return $this->belongsTo('App\User', 'superior_id');
    }

    public function author(){
        return $this->belongsTo(Author::class);
    }
}
