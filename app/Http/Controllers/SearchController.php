<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\Models\RepParticipant;
use App\Models\Chef;
use App\Models\Participant;
use App\Models\Formation;


use Illuminate\Support\Facades\Auth;

use Request;
class SearchController extends Controller
{
    public function index(){
		$questions=DB::table('formations')
        ->join('participants', function ($join) {
            $join->on('formations.id', '=', 'participants.formation_id')
                 ->where(function($query){
					$p_matricule=Request::has('p_matricule') ? Request::get('p_matricule') : null;
					if(isset($p_matricule) ){
						$query->where('matricule','=',$p_matricule)		
						;
					}
				});
        })
        ->get();
        return view('search',compact('questions'));
    }

    public function index1(){
		$rep_participants=RepParticipant::where(function($query){
					$rep_id=Request::has('rep_id') ? Request::get('rep_id') : null;
					if(isset($rep_id) ){
						$query->where('id','=',$rep_id)		
						;
					}
				})
        ->get();
        return view('admin.fichechef',compact('rep_participants'));
    }
	public function index2(){
		$chefs=Chef::all();
		$formations = Formation::all();
		$participants=Participant::where(function($query){
		$matricule=Request::has('matricule') ? Request::get('matricule') : null;
		if(isset($matricule) ){
			$query->where('matricule','=',$matricule)		
			;
		}
	})->where('region', '=', Auth::user()->region)->get()
	;
	return view('admin.participant',['formations'=>$formations],['chefs'=>$chefs])
	->with('participants',$participants);
}  
	public function index3(){
		$chefs=Chef::where(function($query){
		$matricule=Request::has('matricule') ? Request::get('matricule') : null;
		if(isset($matricule) ){
			$query->where('matricule','=',$matricule)		
			;
		}
	})->get()
	;
	return view('admin.chef')
		->with('chefs',$chefs);
	}
		
	
	public function index4()
    {
        $repparticipants=Participant::join('rep_participants','rep_participants.participant_id','=','participants.id')->where('region', '=', Auth::user()->region)->where(function($query){
			$matricule=Request::has('matricule') ? Request::get('matricule') : null;
			if(isset($matricule) ){
				$query->where('matricule','=',$matricule)		
				;
			}
		})->get();
       
        return view('admin.reponse-participant')
        ->with('rep_participants',$repparticipants);
	}
}
