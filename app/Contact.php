<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function agreements()
    {
        return $this->belongsToMany('App\Agreement');
    }
}