<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{


    //this section of content is the many to one relationship from bookings to store
    public function bookings()
    {
      return $this->hasMany('Booking');
    }

    //this section of content is the many toone relationship from barbers to store
    public function barbers()
    {
      return $this->hasMany('User');
    }
}
