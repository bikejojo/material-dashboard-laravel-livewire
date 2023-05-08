<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal;
use App\Models\Evento;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Post;
use Illuminate\Support\Facades\DB;


use Carbon\Carbon;
class EventoController extends Controller
{
    //
    public function index(){
        $event = Evento::select('personals.*','eventos.*')
        ->join('personals','personals.p','=','eventos.pe')
        ->get();
        return view('livewire.event',compact('event'));
    }

    public function store(Request $request){

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
