<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dejeuner extends Model
{
    protected $table = 'dejeuner';
    protected $fillable = ['libelle', 'description', 'prix', 'image'];
}

