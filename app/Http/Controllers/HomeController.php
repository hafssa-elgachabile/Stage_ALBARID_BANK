<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Models\Chef;
use App\Models\Formation;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $chefs=Chef::all();
        $formations = Formation::all();
        $participants=Participant::where('region', '=', Auth::user()->region)->get();
        return view('admin.participant',['formations'=>$formations],['chefs'=>$chefs])
        ->with('participants',$participants);
    }
}
