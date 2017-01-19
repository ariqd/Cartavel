<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
  protected $fillable = ['addressline', 'city', 'district', 'zip', 'phone', 'user_id'];

  public static function boot()
  {
      parent::boot();
      static::creating(function ($address)
      {
          $address->token = str_random(40);
      });
  }
}
