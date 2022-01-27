<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Zgloszenie extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'zgloszenia';
    protected $primaryKey = 'ZgloszeniaID';
    protected $fillable = [
        'Konsultant',
        'Opis',
        'Status',
        'Uzytkownik'
    ];
}
