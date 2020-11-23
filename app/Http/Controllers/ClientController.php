<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Récuperer tous les clients dans la bdd
        $clients = Client::all();

        // Retourner la view index en envoyant l'attribut $clients
        return view('index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Créer un client
        $client = new Client();

        // Retourner la view create en envoyant l'attribut $id
        return view('create', compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Récupérer les 3 champs saisies
        $request = request()->validate([
            "nom" => "required",
            "prenom" => "required",
            "email" => "required"
        ]);

        // Créer data dans le model
        Client::create($request);

        // Retourner sur la view clients
        return redirect('clients');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        // Retourner show avec id
        return view('show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        // Retourner edit avec id
        return view('edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        // Récupérer les 3 champs saisies
        $request = request()->validate([
            "nom" => "required",
            "prenom" => "required",
            "email" => "required"
        ]);

        // Les mettres à jour
        $client->update($request);

        // Rediriger vers la view associé au client
        return redirect("clients/" . $client->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        // Supprimer le client
        $client->delete();

        // Revenir sur la view client
        return redirect('clients');
    }
}
