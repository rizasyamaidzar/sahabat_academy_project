<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{
    public function index(){
        return view('program',[
            "title" => "Program Detail",
            "detail" => Program::all()
        ]);
    }

    public function show(Program $program){
        return view('detail',[
            "title" => "Detail Program",
            "detail" => $program
        ]);
    }
}
