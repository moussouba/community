<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCommunauteRequest;
use App\Communaute;
use App\User;
use Illuminate\Http\Request;

class CommunauteController extends Controller
{
    public function listCommunaute()
    {
        $perso = Communaute::all();
        return View('communaute.listCommunaute')->with('items',$perso);
    }

    public function addCommunauteView()
    {
        return View('communaute.addCommunauteView');
    }

    public function updateCommunauteView($id)
    {
        $usr = auth()->user()->communaute->findOrFail($id);
        $com = Communaute::findOrFail($id);
        return View('communaute.addCommunauteView')->with('items', $com);
    }

    public function addCommunauteValid(AddCommunauteRequest $request)
    {
        $parameters = $request->except('_token'); 
        $com = new Communaute();
        
        $com->nom = $parameters['nom'];
        $com->localite = $parameters['localite'];
        $com->lien = $parameters['lien'];
        $com->save();
        return redirect()->route('listCommunaute')->with('success',"Vous avez bien crée la communauté $com->nom");
    }

    public function updateCommunauteValid(AddCommunauteRequest $request, $id)
    {
        
        $com = Communaute::findOrFail($id);
        $parameters = $request->except('_token');

        $com->nom = $parameters['nom'];
        $com->localite = $parameters['localite'];
        $com->lien = $parameters['lien'];
        $com->save();
        return redirect()->route('listCommunaute')->with('success',"Vous avez bien modifié la communauté $com->nom");
    }

    public function deleteCommunaute($id)
    {
        $com = Communaute::findOrFail($id);
        $com->delete();
        return redirect()->route('listCommunaute')->with('success',"Vous avez bien supprimé la communauté $com->nom");
    }

}
