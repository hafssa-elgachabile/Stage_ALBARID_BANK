<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Participant;
use App\Models\Chef;

use App\Models\RepChef;
use App\Models\RepParticipant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Mail\TestMail2;
use Illuminate\Support\Facades\Mail;

use Barryvdh\DomPDF\Facade as PDF;


class RepParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $repparticipants=Participant::join('rep_participants','rep_participants.participant_id','=','participants.id')->where('region', '=', Auth::user()->region)->get();
       
        return view('admin.reponse-participant')
        ->with('rep_participants',$repparticipants);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request){
        $request->validate([
            
            'participant_id'=>'unique:rep_participants',
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
        
        $reponse=new RepParticipant;
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
       
        $rep=Chef::find($request->input('chef_id'));  
        $details=RepParticipant::where('chef_id','=',$request->input('chef_id'))->get()->toArray();
        foreach($details as $dd){
        Mail::to($rep->email)           
                    ->send(new TestMail2($dd));
        }
       
        return view('Bye');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RepParticipant  $repParticipant
     * @return \Illuminate\Http\Response
     */
    /*public function show(RepParticipant $repParticipant)
    {
        //
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RepParticipant  $repParticipant
     * @return \Illuminate\Http\Response
     */
    
    public function edit($participant_id){
        
        $repparticipants=RepParticipant::find($participant_id);
        $repchefs=RepChef::where('participant_id','=',$repparticipants->participant_id)->get();
        
        return view('admin.fiche',['rep_chefs'=>$repchefs])->with('rep_participants',$repparticipants);
    } 
    
    public function downloadPDF($participant_id)
    {
        $repparticipants=RepParticipant::find($participant_id);
        $repchefs=RepChef::where('participant_id','=',$repparticipants->participant_id)->get();
        view()->share('rep_participants',$repparticipants);
        $pdf = PDF:: loadView('admin.adi',$repparticipants,['rep_chefs'=>$repchefs] )->setOptions(["dpi" => 124,'defaultFont' => 'sans-serif']); 
        return $pdf->download('fiche_participant.pdf');

    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RepParticipant  $repParticipant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RepParticipant $repParticipant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RepParticipant  $repParticipant
     * @return \Illuminate\Http\Response
     */
    public function destroy(RepParticipant $repParticipant)
    {
        //
    }
}
