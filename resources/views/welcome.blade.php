
@extends('template/main')
@section('content')


    <div class="container">
        <h1>Liste des Company: </h1>



        <table class="table">
            <thead class="bg-success">
              <tr>
                <th scope="col">Company Name </th>
                <th scope="col">Name of Contact</th>
                <th scope="col">Phone number of Contact</th>
                <th class="">MORE</th>
                <th class="">EDIT</th>
                <th class="">Delet</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($company as $item)

                <tr>
                  <td>{{$item->nom_company}}</td>
                  <td>{{$item->prenom_contact}}</td>
                  <td>{{$item->phone}}</td>
                  <td><a href="/company/show/{{$item->id}}" class="btn btn-info">SHOW</a></td>
                  <td><button type="button" class="btn btn-warning">EDIT</button></td>
                  <td><button type="button" class="btn btn-danger">DELET</button></td>
                 
                </tr>
                
                @endforeach
            </tbody>
          </table>

    </div>


    
@endsection