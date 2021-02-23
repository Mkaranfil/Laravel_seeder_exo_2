@extends('template/main')


@section('content')

    <h1>More informations: </h1>
    
    <a href="/" type="button" class="btn btn-secondary" >Retour Welcome</a>

    <div class="card" style="width: 18rem;">
        <img src="{{$company->photo}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$company->nom_company}}</h5>
          <h5>Adresse:</h5>
          <p class="card-text">{{$company->rue}} , {{$company->numero_commune}},{{$company->numero_porte}}</p>
          <h5>Contact:</h5>
          <p class="card-text">{{$company->nom_contact}} , {{$company->prenom_contact}}</p>
          <p> Phone: {{$company->phone}}</p>
          <p> Email: {{$company->email}}</p>
          <a href="/company/edit/{{$company->id}}" class="btn btn-warning">Edit</a>
        </div>
      </div>



    
@endsection