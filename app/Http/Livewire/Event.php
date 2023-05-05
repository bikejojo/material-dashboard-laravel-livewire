<?php

namespace App\Http\Livewire;

use App\Http\Controllers\EventoController;
use Livewire\Component;
use Livewire\Request;

class Event extends Component
{

    public $campo1;
    public $campo2;
    public $campo3;
    public $campo4;
    public $campo5;

    public function render()
    {
        $event = new EventoController;
        $ev = $event->index();
        return $ev;
        return view('livewire.event');
    }

    public function store(){
        $data = $this->validate([
            'campo1'=> 'required',
            'campo2'=> 'required',
            'campo3'=> 'required',
            'campo4'=> 'required',
            'campo5'=> 'required',
        ]);

        $response = app('App\Http\Controllers\EventoController')->store(new Request($data));

        session()->flash('message', $response->getOriginalContent()['message']);


       return redirect(route('event'));
    }
}
