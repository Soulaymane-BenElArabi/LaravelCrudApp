@extends('master')

@section('content')
<div class="row">
    <div class="col-md-4">
        <h2>Gestion des etudiants</h2>
    </div>
    <div class="col-md-8">
        <form action="{{'/Etudiants'}}" method="POST">
            @csrf
        <div class="form-group">

            <div class="form-group">
              <label for="cin">Cin</label>
              <input type="text" name="cin" id="cin" class="form-control" placeholder="" required="" aria-describedby="helpId">
            </div>

            <div class="form-group">
                <label for="prenom">Prenom</label>
                <input type="text" name="prenom" id="prenom" class="form-control" placeholder="prenom" required="" aria-describedby="helpId">
            </div>

            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" class="form-control" placeholder="nom" required="" aria-describedby="helpId">
            </div>


            <div class="form-group">
                <label for="telephone">Telephone</label>
                <input type="text" name="telephone" id="telephone" class="form-control" placeholder="telephone" required="" aria-describedby="helpId">
            </div>

            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" name="photo" id="photo" class="form-control" placeholder="choose an image" required="" aria-describedby="helpId">
              </div>

              <div class="form-group">
                <label for="filiere">Filiere</label>
                <select class="custom-select" name="FiliereChoisi">
                    <option selected="">Choisir filiere</option>
                    @foreach ($mesFilieres->unique('code') as $filiere)
                         <option value="{{ $filiere->code }}">{{ $filiere->code }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="classe">Classe</label>
                <select class="custom-select" name="ClasseChoisi">
                    <option selected="">Choisir classe</option>
                    @foreach ($mesClasses->unique('code') as $classe)
                         <option value="{{ $classe->code }}">{{ $classe->code }}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-primary btn-block" type="submit">Ajouter</button>

        </div>
    </form>
    </div>
</div>

<div class="row">
    <table class="table table-hover" id="tableetudiant">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">CIN</th>
            <th scope="col">Prenom</th>
            <th scope="col">Nom</th>
            <th scope="col">Telephone</th>
            <th scope="col">Photo</th>
            <th scope="col">Filiere</th>
            <th scope="col">Classe</th>
            <th scope="col">Supprimer</th>
            <th scope="col">Modifier</th>
          </tr>
        </thead>
        <tbody>

        @foreach ($mesEtudiants as $etudiant)
          <tr class="table-info">
            <td>{{ $etudiant->id }}</td>
            <td>{{ $etudiant->cin }}</td>
            <td>{{ $etudiant->prenom }}</td>
            <td>{{ $etudiant->nom }}</td>
            <td>{{ $etudiant->telephne }}</td>
            <td>{{ $etudiant->photo }}</td>
            <td>{{ $etudiant->filiere }}</td>
            <td>{{ $etudiant->classe }}</td>
            <td><button type="button" class="btn btn-primary">Supprimer</button>
              </td>
            <td><button type="button" class="btn btn-success">Modifier</button></td>
          </tr>
        @endforeach

        </tbody>
      </table>
</div>
    
@endsection