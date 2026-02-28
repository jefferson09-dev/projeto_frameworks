<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Appointment;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.   
     */
    public function index()
    {
        // return view('clients.index');
        $clients = \App\Models\Client::all();

        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::all();
        return view('appointments.create', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Client::create([
            'name' => $request->name,
            'phone' => $request->phone,
        ]);

        return redirect()->route('appointments.create');
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
    public function edit(Appointment $appointment)
    {
        $clients = Client::all();
        return view('appointments.edit', compact('appointment', 'clients'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $client = \App\Models\Client::findOrFail($id);
        // $client->update($request->all());

        $client = Client::findOrFail($id);
        $client->update($request->all());

        return redirect()->route('clients.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $client = \App\Models\Client::findOrFail($id);
        // $client->delete();

        $client = Client::findOrFail($id);
        $client->delete();

        return redirect()->route('clients.index');
    }
}
