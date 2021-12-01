<?php

namespace App\Models;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Konsultant extends Authenticatable
{
  use HasFactory;
  use Notifiable;
  protected $guard = 'konsultant';
  protected $table = 'konsultant';
  protected $primaryKey = 'KonsultantID';
  /**
   * The attributes that are mass assignable.
   *
   * @var string[]
   */
  protected $fillable = [
      'password','Imie','Nazwisko','email','telefon', 'is_admin'
  ];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array
   */
  protected $hidden = [
      'password'
  ];

  public function setPasswordAttribute($value)
  {

      if (strlen($value) != 60) {
          return $this->attributes['password'] = Hash::make($value);
      }
  }

}
