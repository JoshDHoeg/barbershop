<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{



    //this section of content is the many toone relationship from barbers to store
    public function barbers()
    {
      return $this->hasMany('User');
    }
}
