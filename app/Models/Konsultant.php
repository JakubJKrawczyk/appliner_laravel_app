<?php

namespace App\Models;



use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class Konsultant extends Autenticable
{
  use HasApiTokens, HasFactory, Notifiable;
protected $table = 'konsultant';
protected $primaryKey = 'KonsultantID';
  /**
   * The attributes that are mass assignable.
   *
   * @var string[]
   */
  protected $fillable = [
      'Login',
      'Haslo',
  ];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array
   */
  protected $hidden = [
      'Haslo'
  ];



}