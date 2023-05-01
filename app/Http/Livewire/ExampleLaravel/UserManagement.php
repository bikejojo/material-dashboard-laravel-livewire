<?php

namespace App\Http\Livewire\ExampleLaravel;

use App\Http\Controllers\PersonalController;
use App\Models\Personal;
use Livewire\Component;

class UserManagement extends Component
{
   // public $u;

    //public function index(){
     //  $u=app(PersonalController::class)->index();

   // }

    //public function index2(){ FUNCIONA
      //  $per=Personal::all();
        //return $per;
    //}

    public function render()
    {
        $u = new PersonalController;
        $u1 = $u->index();
        return $u1;
        //return view('livewire.example-laravel.user-management');
    }

}
