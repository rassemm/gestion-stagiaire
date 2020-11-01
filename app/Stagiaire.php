<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
  protected $fillable = [
    'nom',
    'prenom',
    'mail',
    'adresse',
    'universite',
    'age',
    'tel'
  ];
}
