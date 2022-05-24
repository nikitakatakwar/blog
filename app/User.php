<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class User extends Authenticatable
{    use HasRoles;
    use Notifiable;

    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function employee()
    {
        return $this->belongsToMany('App\User', 'customer_employee', 'customer_id', 'employee_id')->withPivot('employee_type');
    }


    public function Employee_detail()
    {
        return $this->hasOne(Employee_detail::class, 'user_id');
    }

    public function  Phone_number()
    {
        return $this->hasOne(Phone_number::class);
    }


    public function target()
    {
        return $this->hasOne(Target::class, 'user_id');
    }

    public function employees()
    {
        return $this->belongsToMany('App\User', 'customer_employee', 'customer_id', 'employee_id')->withPivot('employee_type');
    }

    // public function customer_details()
    // {
    //     return $this->hasOne(CustomerDetail::class, 'customer_id');
    // }

    public function customers()
    {
        return $this->hasOne('App\Customer', 'customer_id');
    }



    public function package()
    {
        return $this->hasOne('App\Package', 'id');
    }



    public function products()
    {
        return $this->hasMany('App\Product', 'user_id');
    }

    public function transactions()
    {
        return $this->hasMany('App\Transaction', 'user_id');
    }

    public function assigned_customers()
    {
        return $this->hasMany('App\AssignedCustomer', 'employee_id');
    }

    public function customerRelatedTasks()
    {
        return $this->hasMany('App\AssignedTask', 'customer_id');
    }


    public function documents()
    {
        return $this->hasOne('App\Document', 'user_id');
    }



    public function moving_status()
    {
        return $this->hasOne('App\AssignedCustomer', 'customer_id');
    }


    public function scopeNotRole(Builder $query, $roles, $guard = null): Builder

    {
                if ($roles instanceof Collection) {
                    $roles = $roles->all();
                }

                if (!is_array($roles)) {
                    $roles = [$roles];
                }

                $roles = array_map(function ($role) use ($guard) {
                    if ($role instanceof Role) {
                        return $role;
                    }

                    $method = is_numeric($role) ? 'findById' : 'findByName';
                    $guard  = $guard ?: $this->getDefaultGuardName();

                    return $this->getRoleClass()->{$method}($role, $guard);
                }, $roles);

                return $query->whereHas('roles', function ($query) use ($roles) {
                    $query->where(function ($query) use ($roles) {
                        foreach ($roles as $role) {
                            $query->where(config('permission.table_names.roles') . '.id', '!=', $role->id);
                        }
                    });
                });
    }


}
