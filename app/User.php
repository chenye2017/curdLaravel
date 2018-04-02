<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
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

    public function hasOne1()
    {
        return $this->hasOne(TestOneToOne::class, 'user_id', 'id');
    }

    public function belongsTo1()
    {
        return $this->belongsTo(TestOneToOne::class, 'id', 'user_id');
    }

    public function hasMany1()
    {
        return $this->hasMany(TestOneToMany::class, 'user_id', 'id');
    }
    public function belongsToMany1()
    {
        return $this->belongsToMany(\App\User::class, 'test_many_to_many', 'user_id', 'test_id');
    }
}
