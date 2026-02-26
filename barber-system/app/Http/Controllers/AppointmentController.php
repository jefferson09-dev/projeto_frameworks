<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Client;
 
class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = \App\Models\Appointment::with('client')->get();
        return view('appointments.index', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $clients = Client::all();  // 👈 BUSCA CLIENTES
        // return view('appointments.create', compact('clients')); // 👈 ENVIA PARA VIEW

        $clients = \App\Models\Client::all();

        return view('appointments.create', [
        'clients' => $clients
    ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
        ], [
            'name.required' => 'O nome é obrigatório.',
            'phone.required' => 'O telefone é obrigatório.',
        ]);

        Client::create([
            'name' => $request->name,
            'phone' => $request->phone,
        ]);

        return redirect()->route('appointments.create')
            ->with('success', 'Cliente cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
