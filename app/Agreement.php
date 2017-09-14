<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agreement extends Model
{
    public function contacts()
    {
        return $this->belongsToMany('App\Contact');
    }

    public function certs()
    {
        return $this->hasMany('App\Cert');
    }
}