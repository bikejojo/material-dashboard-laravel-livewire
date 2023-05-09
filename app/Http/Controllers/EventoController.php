<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal;
use App\Models\Evento;
use App\Models\User;
use App\Models\trabajoE;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Post;
use Illuminate\Support\Facades\DB;


use Carbon\Carbon;
class EventoController extends Controller
{
    //
    public $a , $b;

    public function index(){
        $event = Evento::select('personals.*','eventos.*')
        ->join('personals','personals.p','=','eventos.pe')
        ->join('users','users.id','=','personals.p')
        ->where('personals.Estado','=','0')
        ->get();
        $event1 = Personal::select('personals.*')
        ->join('users','users.id','=','personals.p')
        ->where('personals.Estado','=',0)
        ->get();
        return view('livewire.event',compact('event','event1'));
    }

    public function store(Request $request){

        //return $request->input('empleado');

        $fecha_actual = Carbon::now();
        $evento = new Evento();
        $evento->codigo = 'EVENT';
        $evento->asunto = $request->input('asunto');
        $evento->FechaRegistro = $fecha_actual->format('Y-m-d');
        $evento->FechaInicio = $request->input('FechaInicio');
        $evento->horaInicio = $request->input('horaInicio');
        $evento->horaFin = $request->input('horaFin');
        $evento->Ubicacion = $request->input('Ubicacion');
        $evento->tipo = 0;
        $evento->pe = 2;
        $evento->save();
        //return $evento->e;

        $trab = new trabajoE();
        $trab->codfot = $request->input('empleado');
        $trab->codeve = 2 ;
        $trab->codorg = 1;
        $trab->save();
        return redirect(route('event'));
        //return view('livewire.event');
    }

    public function show($request){

        $eve['eve']=Evento::find($request);
        //return dd($eve);
        //$b=$request->input('eve');
        //return dd($b);
        return view('livewire.eventup',$eve);

    }

}
