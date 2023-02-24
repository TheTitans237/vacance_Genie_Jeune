@extends('menu.app')
@section('content')
<div class="container">
    <div class="container" style="text-align: center">
        <h3>Enreigistrez vous</h3>
    </div>

    <h1>Formulaire Bootstrap responsive</h1>
    <form action="{{ route('store') }}" method="POST">
        @csrf
      <div class="row">
        <div class="col-md-6">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" required>
            <label for="nom"><i class="fas fa-user"></i> Nom</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="email" name="email" placeholder="email" required>
            <label for="email"><i class="fas fa-user"></i> Email</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="niveau" name="niveau" placeholder="Niveau" required>
            <label for="niveau"><i class="fas fa-graduation-cap"></i> Niveau</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="ecole" name="ecole" placeholder="Ecole" required>
            <label for="ecole"><i class="fas fa-university"></i> Ecole</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating mb-3">
            <input type="number" class="form-control" id="age" name="age" placeholder="Age" required>
            <label for="age"><i class="fas fa-birthday-cake"></i> Age</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nom_tuteur" name="nom_tuteur" placeholder="Nom de tuteur" required>
            <label for="nom_tuteur"><i class="fas fa-user-tie"></i> Nom de tuteur</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating mb-3">
            <input type="phone" class="form-control" id="phone" name="phone" placeholder="email" required>
            <label for="phone"><i class="fas fa-user"></i> phone</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="ville" name="ville" placeholder="Ville de résidence" required>
            <label for="ville"><i class="fas fa-map-marker-alt"></i> Ville de résidence</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating mb-3">
            <select class="form-select" id="sexe" name="sexe" required>
              <option value="">Sélectionnez un sexe</option>
              <option value="femme"><i class="fas fa-venus"></i> Femme</option>
              <option value="homme"><i class="fas fa-mars"></i> Homme</option>
              </select>
            <label for="sexe"><i class="fas fa-venus-mars"></i> Sexe</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating mb-3">
            <input type="date" class="form-control" id="annee_edition" name="annee_edition" placeholder="Année d'edition " required>
            <label for="annee_edition"><i class="fas fa-calendar-alt"></i> Année d'edition</label>
          </div>
        </div>
    </div>
      <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
  </div>
@endsection

