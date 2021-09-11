<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Models\RepChef;
use Illuminate\Http\Request;

class RepChefController extends Controller
{
    public function index()
    {
        $repchefs=RepChef::all();
        
        return view('admin.reponsesChefs')
        ->with('rep_chefs',$repchefs);
    }
    public function par()
    {
        $repchefs=Participant::where();
        
        return view('admin.reponsesChefs')
        ->with('rep_chefs',$repchefs);
    }

    public function store(Request $request){
        $request->validate([
            
            'participant_id'=>'unique:rep_chefs',
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
            'q4' => 'required',
            'q5' => 'required',
            'q6' => 'required',
            'q7' => 'required',
            'q8' => 'required',
            'q9' => 'required',
            'q10' => 'required',
            
        ]);
        
    
        $reponse=new RepChef;
        $reponse->participant_id=$request->input('participant_id');
        
        $reponse->formation_id=$request->input('formation_id');
        $reponse->chef_id=$request->input('chef_id');


        $reponse->q1=$request->input('q1');
        $reponse->q2=$request->input('q2');
        $reponse->q3=$request->input('q3');
        $reponse->q4=$request->input('q4');
        $reponse->q5=$request->input('q5');
        $reponse->q6=$request->input('q6');
        $reponse->q7=$request->input('q7');
        $reponse->q8=$request->input('q8');
        $reponse->q9=$request->input('q9');
        $reponse->q10=$request->input('q10');
       
        $reponse->save();
        return view('Bye');
    } 
}
