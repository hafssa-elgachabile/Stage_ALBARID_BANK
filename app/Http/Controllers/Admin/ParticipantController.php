<?php

namespace App\Http\Controllers\Admin;
use App\Models\Participant;
use App\Models\RepParticipant;
use App\Models\Formation;
use App\Models\Chef;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Mail\TestMail;
use App\Mail\TestMail1;
use App\Mail\TestMail2;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request as FacadesRequest;

class ParticipantController extends Controller
{
    public function index(){
        $chefs=Chef::all();
        $formations = Formation::all();
        $participants=Participant::where('region', '=', Auth::user()->region)->get();
        return view('admin.participant',['formations'=>$formations],['chefs'=>$chefs])
        ->with('participants',$participants);
    }
    public function store(Request $request){
    Participant::create([
        "matricule"=>$request->matricule,
        "nom"=>$request->nom,
        "prenom"=>$request->prenom,
        "poste"=>$request->poste,
        "email"=>$request->email,
        "region"=>$request->region,
        "chef_id"=>$request->chef,
        "formation_id"=>$request->formation_id,
        
        
    ]);
    return redirect('/participants')->with('success', 'Data Added for participant');
}
    public function edit($id){
        $participants=Participant::find($id);
        $chefs=Chef::all();
        $formations=Formation::all();
        return view('admin.participant-edit',['formations'=>$formations],['chefs'=>$chefs])->with('participants',$participants);
    }   
    
    public function sendEmail()
    {
        $details=Participant::where('region','=',Auth::user()->region)->get()->toArray();
        foreach($details as $dd){
            
            Mail::to($dd['email'])           
                ->send(new TestMail($dd));
        }
        return back()->with("success", "Votre email est envoyé avec succès");
    }
    public function sendEmail1($id){
        $details=Participant::find($id)->toArray();        
        Mail::to($details['email'])           
            ->send(new TestMail1($details));
            return back()->with("success", "Votre email est envoyé avec succès");
    }
    
    

    public function updateparticipant(Request $request,$id){
        $participants=Participant::find($id);
        $formations=Formation::all();
        $chefs=Chef::all();
        $participants -> update([
            "matricule"=>$request->matricule,
            "nom"=>$request->nom,
            "prenom"=>$request->prenom,
            "poste"=>$request->poste,
            "email"=>$request->email,
            "region"=>$request->region,
            "chef_id"=>$request->chef,
            "formation_id"=>$request->formation_id,


        ]);
        return redirect('/participants')->with('status','Data updated for participant');
    }
    public function deleteparticipant($id){
        $participants=Participant::find($id);
        $participants->delete();
        return redirect('/participants')->with('status','Data deleted for participant');

    } 
}