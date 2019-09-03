<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Communaute extends Model
{
    protected $table = 'communaute';
    protected $fillable = [
        'nom', 'localite', 'lien'
    ];

    public function responsable()
    {
        return $this->hasMany('App\User')->where('type',2);
    }

    public function sensibilisation(){
        return $this->hasMany('App\Sensibilisation');
    }

    //les mutations pour transformer tous les champs nom du model
    
    public function getNomAttribute($value)
    {
        return strtoupper($value);
    }
}
