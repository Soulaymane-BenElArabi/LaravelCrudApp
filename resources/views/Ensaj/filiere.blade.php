@extends('master')

@section('content')
<script src="{{asset('js/filiere.js')}}" type="text/javascript"></script>
<div class="row">
    <div class="col-md-4">
        <h2>Gestion des Filieres</h2>
    </div>
    <div class="col-md-8">
        <form action="{{'/Filieres'}}" method="POST">
            @csrf
        <div class="form-group">

            <div class="form-group">
              <label for="code">Code</label>
              <input type="code" name="code" id="code" class="form-control" placeholder="code" required="" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="libelle">libelle</label>
                <input type="text" name="libelle" id="libelle" class="form-control" placeholder="libelle" required="" aria-describedby="helpId">
              </div>

           
            <button class="btn btn-danger btn-block" id="ajouter"   type="submit">Ajouter</button>
              
        </div>
    </form>
    </div>
</div>
    <div class="row">
        <table id="tablefiliere" class="table table-hover" style="width: 1250px;">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Code</th>
                <th scope="col">Libelle</th>
                <th scope="col">Supprimer</th>
                <th scope="col">Modifier</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($mesFilieres as $filiere)
                    
                
              <tr class="table-info">
                <th>{{ $filiere->id }}</th>
                <td>{{ $filiere->code }}</td>
                <td>{{ $filiere->libelle }}</td>
                <td><button type="button" class="btn btn-primary supprimer">Supprimer</button></td>
                <td><button type="button" class="btn btn-success modifier">Modifier</button></td>
              </tr>
            @endforeach
            </tbody>
          </table>
    </div>
    
     
@endsection