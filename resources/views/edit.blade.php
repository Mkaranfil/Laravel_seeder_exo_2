@extends('template/main')
@section('content')


    <h1 class="text-danger">Seeders exo2 - edit company</h1>
    <section>
        <form action="/company/update/{{$edit->id}}" method="post">
            @csrf
                <label for="nom_company">Company name : 
                    <input type="text" name="nom_company" id="nom_company" value="{{$edit->nom_company}}">
                </label>
                <label>Rue : 
                    <input type="text" name="rue" value="{{$edit->rue}}">
                </label>
                <label>numero_commune : 
                    <input type="number" name="numero_commune" value="{{$edit->numero_commune}}">
                </label>
                <label>numero_porte : 
                    <input type="number" name="numero_porte" value="{{$edit->numero_porte}}">
                </label>
                <label>nom_contact : 
                    <input type="text" name="nom_contact" value="{{$edit->nom_contact}}">
                </label>
                <label>prenom_contact : 
                    <input type="text" name="prenom_contact" value="{{$edit->prenom_contact}}">
                </label>
                <label>phone : 
                    <input type="text" name="phone" value="{{$edit->phone}}">
                </label>
                <label>email : 
                    <input type="text" name="email" value="{{$edit->email}}">
                </label>
               
                <button type="submit" class="btn btn-info">Update</button>
        </form>
    </section>

    
@endsection