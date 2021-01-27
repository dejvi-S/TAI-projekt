<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_uzytkownika',
        'imie',
        'nazwisko',
        'mail',
        'adres',
        'nr_domu',
        'kod_pocztowy',
        'telefon',
        'www',
        'opcje',
        'data'
    ];
}
