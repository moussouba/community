<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensibilisation extends Model
{
    protected $table = 'sensibilisation';

    protected $fillable = [
        'libelle', 'description', 'beginAt','endAt','updated_at','created_at'
    ];

    public function recense(){
        return $this->hasMany('App\Recense');
    }

    public function communaute(){
        return $this->belongsTo('App\Communaute');
    }

    public function getLibelleAttribute($value){
        return strtoupper($value);
    }

    public function scopeRespo($query)
    {
        if(auth()->user()->type > 1){
            $usr = auth()->user()->communaute()->first()->id;
            return $query->where('communaute_id',$usr);
        }else{
            return $query;
        }
        
    }
}
