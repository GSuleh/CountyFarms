<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{

	 protected $fillable = [
        'farmname','location', 'mainproduce','description',
    ];

    //one to one relationship
    //a user/farmer can only be allocated work in one farm
    public function user()
    {
      return $this->belongsTo(User::class);
    }

    //one farm will have many inventory
    public function inventory()
    {
      return $this->hasMany(Inventory::class);
    }
}
