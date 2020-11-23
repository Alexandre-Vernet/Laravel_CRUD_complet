@extends('layout')

@section('titre')
    Afficher les clients
@endsection
@section('content')
    <a href="/clients/create" class="btn btn-primary my-3">Créer un nouveau client</a>
    <h2>Voici la liste de nos clients : </h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NOM</th>
                <th scope="col">Prénom</th>
                <th scope="col">E-mail</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <th scope="row"> {{ $client->id }}</th>
                    <td><a href="/clients/{{ $client->id }}">{{ $client->nom }} </td></a>
                    <td>{{ $client->prenom }} </td>
                    <td><a href="mailto: {{ $client->email }}">{{ $client->email }}</a></td>
                    <td>
                        <form action="/clients/ {{ $client->id }} " method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            @empty($client)
                <p>La table est vide</p>
            @endempty
        </tbody>
    </table>
@endsection
