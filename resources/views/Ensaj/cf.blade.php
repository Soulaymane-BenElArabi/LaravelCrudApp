@extends('master')

@section('content')
<div class="row">
    <div class="col-md-4">
        <h2>Les Classes Par Filiere</h2>
    </div>
    <div class="col-md-8">
        <form action="{{'/CF'}}" method="POST">
            @csrf
        <div class="form-group">
            

            <div class="form-group">
                <label for="Filiere">Filiere</label>
                <select class="custom-select" name="FilChoisi">
                    @foreach ($mes as $filiere)
                         <option value="{{ $filiere->code }}">{{ $filiere->code }}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-sucess btn-block" type="submit">Chercher</button>

        </div>
    </form>
    </div>


</div>

<div class="row">
    <table class="table table-hover" >
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Code</th>
            <th scope="col">Filiere</th>
          </tr>
        </thead>
        <tbody>

        @foreach ($mesCF as $cf)
          <tr class="table-info">
            <th>{{ $cf->id }}</th>
            <td>{{ $cf->code }}</td>
            <td>{{ $cf->Filiere }}</td>
            
          </tr>
        @endforeach

        </tbody>
      </table>
</div>

@endsection