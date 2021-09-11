<?php
namespace App\Http\Controllers\Admin;
use App\Models\Chef;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class ChefController extends Controller
{
    public function index(){
        $chefs=Chef::all();
        return view('admin.chef')
        ->with('chefs',$chefs);
    }
    public function store(Request $request){
        Chef::create([
            "nom"=>$request->nom,
            "matricule"=>$request->matricule,
            "email"=>$request->email,
            "poste"=>$request->poste,
        ]);
        return redirect('/chefs')->with('success', 'Data Added for Chef');
    }
    public function edit($id){
        $chefs=Chef::find($id);
        return view('admin.chef-edit')->with('chefs',$chefs);
    }   
    public function updatechef(Request $request,$id){
        $chefs=Chef::find($id);
        $chefs->nom=$request->input('nom');
        $chefs->matricule=$request->input('matricule');
        $chefs->poste=$request->input('poste');
        $chefs->email=$request->input('email');
        $chefs->update();
        return redirect('/chefs')->with('status','Data updated for chef');
    }
    public function deletechef($id){
        $chefs=Chef::find($id);
        $chefs->delete();
        return redirect('/chefs')->with('status','Data deleted for chef');
    } 
}
