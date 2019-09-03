<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Sensibilisation;
use App\Recense;

class DashboardController extends Controller
{
    protected $array = [];

    public function index()
    {
        
        $s = Sensibilisation::all();
        $flattened = Arr::flatten($s);
        $filtered = Arr::where($flattened, function ($value, $key) {
            $sensib_id = $value->id;
            $r = Recense::where('sensibilisation_id',$sensib_id)->get();
            $this->array = Arr::prepend($this->array,count($r));
        });
        $fille = $this->array;
        return View('dashboard.dashboard')->with('fille',$fille);
    }
}
