<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    //
    public function getTrainers(Request $request){
        $per_page = $request->input('per_page');
        
        // $obj = new Trainer();
        // $Trainers = $obj->paginate($per_page);
        return view ('perpage' , ['per_page'=>$per_page]);
        
    }
}
