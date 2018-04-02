<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestOneToMany extends Model
{
    //
    public function belongsTo1()
    {
        return $this->belongsTo(\App\User::class, 'user_id', 'id');
    }

}
