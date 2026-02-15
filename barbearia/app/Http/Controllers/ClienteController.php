<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    protected $fillable = ['nome', 'telefone', 'email'];
    public function create()
    {
        // Adicione esta linha abaixo:
        return view('clientes.create');
    }
 
}
