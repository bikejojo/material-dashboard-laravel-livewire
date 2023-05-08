<?php

namespace App\Http\Livewire;

use App\Http\Controllers\EventoController;
use Livewire\Component;
use Livewire\Request;
use App\Models\Evento;
use Carbon\Carbon;
use Livewire\WithPagination;
use illuminate\support\Facades\Http;
class Event extends Component
{

    public $asunto;
    public $Ubicacion;
    public $FechaInicio;
    public $horaInicio;
    public $horaFin;
    public $fecha_actual;



    public function render()
    {
        $ev=new EventoController();
        return $event=$ev->index();
        //return view('livewire.event');
    }


    public function store(){
        $fecha_actual = Carbon::now();
        $response = Http::post(route('event.store'), [
            'codigo' => 'Event',
            'asunto' => $this->asunto,
            'FechaRegistro' => $this->fecha_actual->format('d-m-Y'),
            'FechaInicio' => $this->FechaInicio,
            'horaInicio' => $this->hora_Inicio,
            'horaFin' => $this->horaFin,
            'Ubicacion' => $this->Ubicacion,
            'tipo' => 0,
            'pe' => 2
       ]);
    }
}


