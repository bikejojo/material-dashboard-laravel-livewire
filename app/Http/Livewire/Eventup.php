<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Personal;
use Livewire\Request;
use App\Models\Evento;
use App\Http\Controllers\EventoController;


use illuminate\support\Facades\Http;


class Eventup extends Component
{

   private $a;
   private $o;

 public function render()
   {
        return view ('livewire.eventup');
   }
}
