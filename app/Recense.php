<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recense extends Model
{
    protected $table = 'recense';

    protected $fillable = [
        'nom', 'prenom', 'email','tel','updated_at','created_at','niveau','matricule','sexe'
    ];

    public function sensibilisation(){
        return $this->belongsTo('App\Sensibilisation');
    }
}
