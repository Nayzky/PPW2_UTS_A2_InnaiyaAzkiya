<?php

namespace App\Http\Controllers;
use App\Models\Pemainn;

use Illuminate\Http\Request;

class PemainnController extends Controller
{
    //
}
function pemainn(){
    $pemainn = Pemainn::all();

    return view('pemainn.index', compact('pemainn'));
}
