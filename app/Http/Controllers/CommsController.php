<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comms;

class CommsController extends Controller
{
    public function index(){
        $comms= Comms::all();
        return view('welcome', ["comms"=>$comms]);
    }

    public function store(Request $request){
        return Comms::Create([
            "user"=> request('user') ,
            "content"=>request('content')
        ]);
    }
}
