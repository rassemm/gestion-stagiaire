<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encadrant extends Model
{
    protected $fillable = [
      'nom',
      'prenom',
      'mail',
      'adresse',
      'tel'
    ];

}
