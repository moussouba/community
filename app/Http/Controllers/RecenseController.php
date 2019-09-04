<?php

namespace App\Http\Controllers;
use App\Http\Requests\AddRecenseRequest;
use App\Recense;
use App\Sensibilisation;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RecenseController extends Controller
{
    public function listRecense($id){
        $sensib = Sensibilisation::respo()->findOrFail($id);
        $perso = Recense::where('sensibilisation_id',$id)->paginate(12);
        return View('recense.listRecense')->with('items',$perso)->with('sensib',$sensib)->with('id',$id);
    }

    public function addRecenseView($id){
        $sensib = Sensibilisation::respo()->findOrFail($id);
        $perso = Recense::where('sensibilisation_id',$id)->get();
        return View('recense.addRecense')->with('id',$id)->with('sensib',$sensib)->with('perso',$perso);
    }

    public function validRecense(AddRecenseRequest $request, $id){

        $sensibi = Sensibilisation::respo()->findOrFail($id);
        
        $parameters = $request->except('_token');
        $sensib = new Recense();
        $date = new \DateTime(null);

        //add to database
        $sensib->nom = $parameters['nom'];
        $sensib->prenom = $parameters['prenom'];
        $sensib->niveau = $parameters['niveau'];
        $sensib->tel = $parameters['tel'];
        $sensib->matricule = $parameters['matricule'];
        $sensib->sexe = $parameters['sexe'];

        $sensib->sensibilisation_id = $sensibi->id;
        /*$sensib->sensibilisation()->associate($sensib);
        dd($sensib);*/
        $sensib->save();

        //redirect to ...
        return redirect()->back()->with('success',"Vous avez bien été enregistré.   Merci bien $sensib->prenom :)");
        //return redirect()->route('addS')->back()
        
    }

    public function deleteRecense($sensi,$id){
        $resp = Sensibilisation::respo()->findOrFail($sensi);
        $perso = Recense::findOrFail($id);
        $perso->delete();
        return redirect()->back()->with('success',"$perso->nom $perso->prenom a été supprimé avec succès");
    }
}
