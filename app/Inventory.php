<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{	
	//this class has a one to many relationship with farm
	//a farm can have alot of inventory for a particular month
    public function farm()
    {
      return $this->belongsTo(Farm::class);
    }
}
