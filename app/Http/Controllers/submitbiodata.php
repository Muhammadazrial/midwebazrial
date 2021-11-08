<?php

namespace App\Http\Controllers;

use App\Http\Requests\validbiodata;
use Illuminate\Http\Request;

class submitbiodata extends Controller
{
    public function store(validbiodata $request){
        $validatedData = $request->validated();
        return $validatedData;
    }
    public function create(){
        return view('biodata');
    }
}
