@extends('layouts.acceuil')
@section('content')
<div class="home-content">
  
  <div class="formateur-card">
  <h4>Réponses des chefs</h4>
  <br>

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Matricule chef</th>
        <th scope="col">Nom Chef</th>
        <th scope="col">Poste</th>
        <th scope="col">Email</th>
        <th scope="col">Participants</th>
        
        
      </tr>
    </thead>
    <<tbody>
      @foreach ($rep_chefs as $r_chef)
      <tr>
        <td >{{ $r_chef->chef->matricule }}</td>
        <td >{{ $r_chef->chef->nom }}</td>
        <td >{{ $r_chef->chef->poste }}</td>
        <td >{{ $r_chef->chef->email }}</td>
        <td>             <a style= "background-color: #d1b94e; " href="chef-par/{{$r_chef->chef->chef_id}}" class="btn btn-success">Participants</a>

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </div>
    </div>

@endsection