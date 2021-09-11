@extends('layouts.acceuil')
@section('content')

<div class="home-content">
  <form action="/search4" class="d-flex mr-10">
    <div class="form-group mb-0 mr-10" >
      <input type="text" name="matricule" class="form-control" placeholder="Rechercher...">
      <button type="submit" class="btn btn-info">
        <i class='bx bx-search' ></i>
      </button>   
    </div>
    </form>
    <div class="formateur-card">
    <h4>Bienvenue sur votre espace formateur</h4>
    <br>
  
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Matricule</th>
          <th scope="col">Nom</th>
          <th scope="col">Prenom</th>
          <th scope="col">Poste</th>
          <th scope="col">Responsable</th>
          <th scope="col">Formation</th>
          <th scope="col">Reponses</th>
        </tr>
      </thead>
      
      <tbody>
        @foreach ($rep_participants as $participants)
        <tr>
          <td >{{ $participants->matricule }}</td>
          <td >{{ $participants->nom }}</td>
          <td >{{ $participants->prenom }}</td>
          <td >{{ $participants->poste }}</td>
          <td >{{ $participants->chef->nom }}</td>
          <td >{{ $participants->formation->nom_formation }}</td>
          <td>             <a style= "background-color: #d1b94e; " href="edit-fiche/{{$participants->id}}" class="btn btn-success">Détails</a>

          </td>
        </tr>
        @endforeach
      </tbody>
     
    </table>
    </div>
    </div>
      </div>
  
  @endsection