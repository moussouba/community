<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddSensibilisationRequest;
use App\Sensibilisation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SensibilisationController extends Controller
{

    public function listSensibilisation()
    {

        $items = Sensibilisation::respo()->get();
        return View('sensibilisation.listSensibilisation')->with('items', $items);
    }

    public function addSensibilisation()
    {
        return View('sensibilisation.addSensibilisation');
    }

    public function validSensibilisation(AddSensibilisationRequest $request)
    {
        $parameters = $request->except('_token');
        $sensib = new Sensibilisation();
        $date = new \DateTime(null);

        //add to database
        $sensib->libelle = $parameters['libelle'];
        $sensib->description = $parameters['description'];
        $sensib->beginAt = $parameters['beginAt'];
        $sensib->endAt = $parameters['endAt'];
        $sensib->communaute_id = auth()->user()->communaute()->first()->id;
        $sensib->slug = Str::slug($parameters['libelle']) .'-'. $date->format('dmYhis');
        $sensib->save();

        //redirect to ...
        return redirect()->route('listS')->with('success','Vous avez bien ajouté une campagne');
        //return redirect()->route('addS')->back('')
    }

    public function updateView($id)
    {
        $sensib = Sensibilisation::respo()->findOrFail($id);
        return View('sensibilisation.addSensibilisation')->with('items',$sensib);
    }

    public function updateSensibilisation(AddSensibilisationRequest $request,$id)
    {
        $sensib = Sensibilisation::respo()->findOrFail($id);

        if($request->isMethod('post')){
            $parameters = $request->except('_token');
            $date = new \DateTime(null);

            //add to database
            $sensib->libelle = $parameters['libelle'];
            $sensib->description = $parameters['description'];
            $sensib->beginAt = $parameters['beginAt'];
            $sensib->endAt = $parameters['endAt'];
            $sensib->slug = Str::slug($parameters['libelle']) .'-'. $date->format('dmYhis');
            $sensib->save();

            //redirect to ...
            return redirect()->route('listS')->with('success','success','Vous avez bien modifié une campagne');
        }

    }

    public function deleteSensibilisation($id)
    {
        $sensib = Sensibilisation::respo()->findOrFail($id);
        
        $sensib->delete();
        return redirect()->back()->with('success','Vous avez bien supprimé une campagne');;
    }

}