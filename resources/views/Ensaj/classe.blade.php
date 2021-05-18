@extends('master')

@section('content')

<script src="{{asset('js/classe.js')}}" type="text/javascript"></script>
<div class="row">
    <div class="col-md-4">
        <h2>Gestion des Classes</h2>
    </div>
    <div class="col-md-8">
        <form action="{{'/Classes'}}" method="POST">
            @csrf
        <div class="form-group">

            <div class="form-group">
              <label for="code">Code</label>
              <input type="code" name="code" id="code" class="form-control" placeholder="code" required="" aria-describedby="helpId">
            </div>

            <div class="form-group">
                <label for="Filiere">Filiere</label>
                <select class="custom-select" name="FiliereChoisi">
                    <option selected="">Choisir filiere</option>
                    @foreach ($mesFilieres as $filiere)
                         <option value="{{ $filiere->code }}">{{ $filiere->code }}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-danger btn-block" id="aj" type="submit">Ajouter</button>

        </div>
    </form>
    </div>
</div>
<div class="row">
    <table class="table table-hover" id="tableclasse" style="width: 1250px;">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Code</th>
            <th scope="col">Filiere</th>
            <th scope="col">Supprimer</th>
            <th scope="col">Modifier</th>
          </tr>
        </thead>
        <tbody>

        @foreach ($mesClasses as $classe)
          <tr class="table-info">
            <th>{{ $classe->id }}</th>
            <td>{{ $classe->code }}</td>
            <td>{{ $classe->Filiere }}</td>
            <td><button  class="btn btn-primary supprimer">Supprimer</button></td>
            <td><button  class="btn btn-success modifier">Modifier</button></td>
          </tr>
        @endforeach

        </tbody>
      </table>
</div>
    
@endsection