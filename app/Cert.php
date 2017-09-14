<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cert extends Model
{
    public function agreement()
    {
        return $this->belongsTo('App\Agreement');
    }
}