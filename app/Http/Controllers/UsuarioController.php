<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return Usuario::all();
    }

   
    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        return Usuario::find($request->id);
    }

 
    }

