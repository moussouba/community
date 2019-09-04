<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','prenom','sexe','localite','tel','type','communaute','niveau','specialite'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function communaute()
    {
        return $this->belongsTo('App\Communaute');
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
