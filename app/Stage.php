<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
  protected $fillable = [
    'stagiaire_id',
    'encadrant_id',
    'debut',
    'fin',
    'projet',
  ];
}
