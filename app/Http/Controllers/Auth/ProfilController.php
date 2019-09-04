<?php

namespace App\Http\Controllers\Auth;

use App\Communaute;
use App\Http\Requests\AddProfilRequests;
use App\Http\Requests\UpdateProfilRequests;
use App\User;
use App\Http\Controllers\Controller;
use http\Client\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class ProfilController extends Controller
{
    public $niveaux = ["Licence 1", "Licence 2", "Licence 3", "Master 1", "Master 20"];
    public $specialites = ["DAS", "RSI", "DB", "MMX", "CMD", "CD"];

    public function registerView()
    {
        $com = Communaute::all();
        return View('auth.register')->with('communaute',$com);
    }

    public function profil()
    {
        return View('auth.profil')->with('niveau',$this->niveaux)->with('specialite',$this->specialites);
    }

    public function registerValid(AddProfilRequests $request)
    {
        $data = $request;
        if(auth()->user()->type != 1)
        {
            $data['communaute'] = auth()->user()->communaute()->first()->id;
            $data['type'] = 3;
        }

        if($data['type'] == 1){
            $data['communaute'] = null;
        }

        $usr = new User();
        $usr->name = $data['name'];
        $usr->prenom = $data['prenom'];
        $usr->email = $data['email'];
        $usr->tel = $data['tel'];
        $usr->sexe = $data['sexe'];
        $usr->localite = $data['localite'];
        $usr->niveau = $data['niveau'];
        $usr->specialite = $data['specialite'];
        $usr->type = $data['type'];
        $usr->communaute_id = $data['communaute'];
        $usr->password = Hash::make($data['password']);
        $usr->save();

        return redirect()->route('listMembre')->with('success','Vous avez bien ajouté un nouveau membre');

    }

    public function updateProfil(UpdateProfilRequests $request)
    {
        $data = $request;
        $usr = User::findOrFail(auth()->user()->id);
        $usr->name = $data['name'];
        $usr->prenom = $data['prenom'];
        $usr->email = $data['email'];
        $usr->tel = $data['tel'];
        $usr->sexe = $data['sexe'];
        $usr->localite = $data['localite'];
        $usr->niveau = $data['niveau'];
        $usr->specialite = $data['specialite'];
        $usr->password = Hash::make($data['password']);
        $usr->save();

        return redirect()->route('listMembre')->with('success','Vous avez bien modifié votre profil');

    }
}
