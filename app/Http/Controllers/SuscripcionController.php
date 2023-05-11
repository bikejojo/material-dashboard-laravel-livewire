<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suscripcion;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Post;


class SuscripcionController extends Controller
{
    //
    public function index(){
        return view('livewire.suscri');
    }

    public function pago1($request){
        $date = Carbon::now();
//        $date = $date->format('Y-m-d');

        $s=new Suscripcion();
        $s=Suscripcion::find($request->cod);
        $s->fechasuscripcion = $date->addYear(1) ;
        $s->update();

        return view('livewire.table');
    }

    public function pago2($request){

    }

    public function pago3($request){

    }

}
