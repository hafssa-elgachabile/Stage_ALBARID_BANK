<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{

    protected $table='chef';
    protected $fillable=['nom', 'matricule', 'email','poste'];
}
