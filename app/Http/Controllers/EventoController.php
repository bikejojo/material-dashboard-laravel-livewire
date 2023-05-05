<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal;
use App\Models\Evento;
use App\Models\User;

use Carbon\Carbon;
class EventoController extends Controller
{
    //
    public function index(){
        $even = Evento::select('personals.*','eventos.*')
        ->join('personals','personals.p','=','eventos.pe')
        ->get();
        return view('livewire.event',compact('even'));
    }

    public function store(Request $request){

        $evento = new Evento();
        $evento->codigo = 'EVENT';
        $evento->asunto = $request->input('campo1');
        $evento->FechaRegistro = Carbon::now()->format('d/m/Y');
        $evento->FechaInicio = $request->input('campo2');
        $evento->horaInicio = $request->input('campo3');
        $evento->horaFin = $request->input('campo4');
        $evento->Ubicacion = $request->input('campo5');
        $evento->tipo = 0;
        $evento->save();

        session()->flash('message', 'Evento creado con éxito.');

       return redirect(route('event'));

    }

}
