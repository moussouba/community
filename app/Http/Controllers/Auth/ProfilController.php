<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class ProfilController extends Controller
{
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'prenom' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);
    // }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    // protected function create(array $data)
    // {
    //     if(auth()->user()->type != 1)
    //     {
    //         $data['communaute'] = auth()->user()->communaute()->first()->id;
    //         $data['type'] = 3;
    //     }
    //     dd("ok");
    //     if($data['type'] == 1){
    //         $data['communaute'] = null;
    //     }
    //     return User::create([
    //         'name' => $data['name'],
    //         'prenom' => $data['prenom'],
    //         'email' => $data['email'],
    //         'tel' => $data['tel'],
    //         'sexe' => $data['sexe'],
    //         'localite' => $data['localite'],
    //         'niveau' => $data['niveau'],
    //         'specialite' => $data['specialite'],
    //         'type' => $data['type'],
    //         'communaute_id' => $data['communaute'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }

    public function registerView()
    {
        return View('auth.register')->with('test','oklm');
    }
}
