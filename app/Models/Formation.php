<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
    protected $table='formations';
    protected $fillable = ["nom_formation","question1","question2","question3","question4","question5","question6","question7","question8","question9","question10"];
}
