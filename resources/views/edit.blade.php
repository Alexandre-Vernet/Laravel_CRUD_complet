@extends('layout')

@section('titre')
    {{ 'Editer ' . $client->prenom . ' ' . $client->nom }}
@endsection
@section('content')
    <h1>Editer {{ $client->prenom }} <span></span> {{ $client->nom }} </h1>

    <form action="/clients/{{ $client->id }}" method="POST">
        @method("PATCH")
        @include('includes.form')
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
    <a href="../ {{ $client->id }} " class="btn btn-secondary my-3">Annuler</a>
@endsection
