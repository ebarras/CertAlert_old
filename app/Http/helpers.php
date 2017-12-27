<?php

use Carbon\Carbon;

public static function days_from_now($date) {
  $dateNow = Carbon::now();
  return $dateNow->diffInDays($date);
}