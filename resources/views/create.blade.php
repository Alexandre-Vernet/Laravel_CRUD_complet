@extends('layout')

@section('titre')
    Créer un client
@endsection
@section('content')
    <h1>Créer un client</h1>
    <form action="/clients" method="POST">
        @include('includes.form')
        <button type="submit" class="btn btn-primary">Créer</button>
    </form>
@endsection
