<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModuleControler extends Controller
{
    public  function Module()
    {
        return view('module.module-1');
    }
}
