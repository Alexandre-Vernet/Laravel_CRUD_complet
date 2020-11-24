@csrf
<div class="form-group">
    <label for="exampleInputEmail1">Nom</label>
    <input type="text" value="{{ old('nom') ?? $client->nom }}" class="form-control @error('nom') is-invalid @enderror"
        name="nom">
    @error('nom')
        <div class="invalid-feedback">
            {{ $errors->first('nom') }}
        </div>
    @enderror
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Prénom</label>
    <input type="text" value="{{ old('prenom') ?? $client->prenom }}"
        class="form-control @error('prenom') is-invalid @enderror" name="prenom">
    @error('prenom')
        <div class="invalid-feedback">
            {{ $errors->first('prenom') }}
        </div>
    @enderror
</div>
<div class="form-group">
    <label for="exampleInputPassword1">E-mail</label>
    <input type="email" value="{{ old('email') ?? $client->email }}"
        class="form-control @error('email') is-invalid @enderror" name="email">
    @error('email')
        <div class="invalid-feedback">
            {{ $errors->first('email') }}
        </div>
    @enderror
</div>
