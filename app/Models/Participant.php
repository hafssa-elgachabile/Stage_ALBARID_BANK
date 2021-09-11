<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{

    protected $table='participants';
    protected $fillable=['matricule', 'nom', 'prenom','poste','email' , 'region', 'chef_id', 'formation_id'];
    public function formation(){
        return $this->belongsTo(Formation::class);
    }
    public function chef(){
        return $this->belongsTo(Chef::class);
    }
}