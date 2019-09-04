<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Sensibilisation;
use App\Recense;

class DashboardController extends Controller
{
    protected $arrayT = [];
    protected $arrayF = [];
    protected $arrayG = [];

    public function index()
    {
        
        $s = Sensibilisation::respo()->get();
        $flattened = Arr::flatten($s);
        $filtered = Arr::where($flattened, function ($value, $key) {
            $sensib_id = $value->id;
            $rt = Recense::where('sensibilisation_id',$sensib_id)->get();
            $this->arrayT = Arr::prepend($this->arrayT,count($rt));

            $rf = Recense::where('sensibilisation_id',$sensib_id)->where('sexe','Feminin')->get();
            $this->arrayF = Arr::prepend($this->arrayF,count($rf));

            $rg = Recense::where('sensibilisation_id',$sensib_id)->where('sexe','Masculin')->get();
            $this->arrayG = Arr::prepend($this->arrayG,count($rg));
        });
        $total = $this->arrayT;
        $fille = $this->arrayF;
        $garcon = $this->arrayG;
        return View('dashboard.dashboard')->with('fille',$fille)->with('garcon',$garcon)->with('total',$total);
    }
}
