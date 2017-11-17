<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
  //this section of code accounts for the one to many relationship between store and bookings
  public function shop()
  {
    return $this->belongsTo('Store');
  }
}
