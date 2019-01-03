<?php

namespace fernandogiardina\utils\Http\Controllers;

use App\Http\Controllers\Controller;

class UtilsController extends Controller 
{
    public function index()
    {
        $message = "Hola desde la vista del controllador del package";
        return view('utils::index', compact('message'));
    }
}