@csrf
<div class="form-group">
    <label for="exampleInputEmail1">Nom</label>
    <input type="text" value="{{ old('nom') ?? $client->nom }}" class="form-control" name="nom">
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Prénom</label>
    <input type="text" value="{{ old('prenom') ?? $client->prenom }}" class="form-control" name="prenom">
</div>
<div class="form-group">
    <label for="exampleInputPassword1">E-mail</label>
    <input type="email" value="{{ old('email') ?? $client->email }}" class="form-control" name="email">
</div>
