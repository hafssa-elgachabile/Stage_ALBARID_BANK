<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepParticipant extends Model
{
    use HasFactory;
    protected $table='rep_participants';
    protected $fillable = ["participant_id","formation_id" ,"q1","q2","q3","q4","q5","q6","q7","q8","q9","q10"];
    public function participant(){
        return $this->belongsTo(Participant::class);
    }
    public function formation(){
        return $this->belongsTo(Formation::class);
    }
    public function chef(){
        return $this->belongsTo(Chef::class);
    }
}