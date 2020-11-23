@extends('layout')

@section('titre')
    {{ 'Afficher ' . $client->prenom . ' ' . $client->nom }}
@endsection
@section('content')
    <h1>{{ $client->prenom }} <span> </span> {{ $client->nom }} </h1>
    <form action="/clients/ {{ $client->id }}" method="post" style="display: inline">
        <a href="/clients/ {{ $client->id }}/edit" class="btn btn-secondary my-3">Editer</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Supprimer</button>
    </form>
    <hr>
    <strong>E-mail : </strong> {{ $client->email }}
@endsection
