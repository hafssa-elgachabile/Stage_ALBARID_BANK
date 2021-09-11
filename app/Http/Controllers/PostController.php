<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Formation;

class PostController extends Controller
{
    public function getAllFormation()
    {
        $formations = Db::table('formations')->get();
        return view('admin.formation',compact('formations'));
    }
    public function edit(Formation $formations)
    {
        return view('admin.editFormation',compact('formations'));
    }
    
    /*public function edit($id){
        $formations=Formation::find($id);
        return view('admin.formation')->with('formations',$formations);
    }   
    public function update(Request $request,$id){
        $formations=Formation::find($id);

        $formations->nom_formation=$request->input('nom_formation');
        $formations->question1=$request->input('question1');
        $formations->question2=$request->input('question2');
        $formations->question3=$request->input('question3');
        $formations->question4=$request->input('question4');
        $formations->question5=$request->input('question5');
        $formations->question6=$request->input('question6');
        $formations->question7=$request->input('question7');
        $formations->question8=$request->input('question8');
        $formations->question9=$request->input('question9');
        $formations->question10=$request->input('question10');
        

        $formations->update();
        return redirect('/formations  ')->with('status','Data updated for chef');
    }
*/
    public function createFormation()
    {
        $formations = Formation::all();
        return view('admin.editFormation',compact('formations'));
    }
    public function store(Request $request)
    {
        $request -> validate([
            "nom_formation"=>"required",
        ]);

        Formation::create([
            "nom_formation"=>$request->nom_formation,
            "question1"=>$request->question1,
            "question2"=>$request->question2,
            "question3"=>$request->question3,
            "question4"=>$request->question4,
            "question5"=>$request->question5,
            "question6"=>$request->question6,
            "question7"=>$request->question7,
            "question8"=>$request->question8,
            "question9"=>$request->question9,
            "question10"=>$request->question10,


        ]);
        return back()->with("success","Formation ajouté avec succès");
    }
    public function update(Request $request, Formation $formations)
    {
        $request -> validate([
            "nom_formation"=>"required",
        ]);

        $formations -> update([
            "nom_formation"=>$request->nom_formation,
            "question1"=>$request->question1,
            "question2"=>$request->question2,
            "question3"=>$request->question3,
            "question4"=>$request->question4,
            "question5"=>$request->question5,
            "question6"=>$request->question6,
            "question7"=>$request->question7,
            "question8"=>$request->question8,
            "question9"=>$request->question9,
            "question10"=>$request->question10,


        ]);
        
        return redirect('/formations')->with("success","Formation modifiée avec succès");
    }
    public function delete(Formation $formation){
        $formation->delete();
        return back()->with("successDelete","Formation supprimée avec succès" );
    }
    /*public function deleteformation($id){
        $formations=Formation::find($id);
        $formations->delete();
        return redirect('/formations')->with('status','Data deleted for chef');

    }*/
}
