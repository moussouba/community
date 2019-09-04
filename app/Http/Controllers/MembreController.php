<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class MembreController extends Controller
{
    public function listMembre()
    {
        $usr = User::respo()->paginate(12);
        return View('membre.listMembre')->with('user',$usr);
    }

    public function deleteMembre($id)
    {
        $usr = User::respo()->findOrFail($id);
        $usr->delete();
        return redirect()->route('listMembre')->with('sucess',"Vous avez supprimé de le compte $usr->name $usr->prenom");
    }
}
