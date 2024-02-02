<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Especialidade;

class especialidadesController extends Controller
{
    //

    public function index(){
        return view('especialidades/index');
    }
}
