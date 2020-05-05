<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visualisation;

class VisualisationController extends Controller
{
    public function index(){
        return view("Visualisation");
    }
    public function store(Request $request){

       $Visualisation = new Visualisation();

       $Visualisation->DocumentName  = $request->input('DocumentName');
       $Visualisation->Description  = $request->input('Description');

        if($request->hasfile('image')){
                $file=$request->file('image');
                $extension =$file->getClientOriginalExtension(); //getting image extension 
                $filename=time().'.'.$extension;
                $file->move('uploads/Visualisation/', $filename);
                $Visualisation->image=$filename;

        }else{
                return $request;
                $Visualisation->image ='';
        } 

         $Visualisation->save() ;
         return redirect('/displayfiles')->with('Visualisation',$Visualisation);
        }
    public function display(){
        $Visualisation = Visualisation::all(); 
        return view("VisualisationDisplay")->with('Visualisation',$Visualisation);
    }
    public function editfile($id){
        $Visualisation = Visualisation::find($id); 
        return view("VisualisationUpdate")->with('Visualisation',$Visualisation);
    }
    public function update(Request $request, $id){
        $Visualisation = Visualisation::find($id); 

       $Visualisation->DocumentName  = $request->input('DocumentName');
       $Visualisation->Description  = $request->input('Description');

        if($request->hasfile('image')){
                $file=$request->file('image');
                $extension =$file->getClientOriginalExtension(); //getting image extension 
                $filename=time().'.'.$extension;
                $file->move('uploads/Visualisation/', $filename);
                $Visualisation->image=$filename;

        } 

        $Visualisation->save() ;
        return redirect('/displayfiles')->with('Visualisation',$Visualisation);
    }
    public function delet($id){
        $Visualisation = Visualisation::find($id); 
        $Visualisation->delete();

        return redirect('/displayfiles')->with('Visualisation',$Visualisation);
    }
    public function Authentification(){
        return view("Authentification");
    }
    public function Profile(){
        return view("Profile");
    }
}
