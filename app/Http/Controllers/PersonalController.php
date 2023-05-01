<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Personal;

class PersonalController extends Controller
{
    //
    public function index(){
     $u = Personal::select('users.*','personals.*')
     ->join('users','personals.p','=','users.id')->get();
     return view('livewire.example-laravel.user-management',compact('u'));
    }

}
