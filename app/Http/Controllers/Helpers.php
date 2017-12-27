<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class Helpers extends Controller
{
    public static function DaysFromNow ($date) {
        $now = Carbon::now();
        $expiration_date = Carbon::parse($date);
        //The 2nd param is to not return absoloute value and instead include the '-' sign.
        return $now->diffInDays($expiration_date, false);
    }
}