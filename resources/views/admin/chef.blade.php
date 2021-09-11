@extends('layouts.acceuil')
@section('content')
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nouveau Chef</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/save-chef" methode="GET" >   
              @csrf    
            <div class="modal-body">
                 <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nom</label>
                        <input type="text" name="nom" class="form-control" id="nom">
                    </div>
                     <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Matricule</label>
                        <input type="text" name="matricule" class="form-control" id="matricule">
                    </div>
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Email</label>
                      <input type="text" name="email" class="form-control" id="email">
                  </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Poste</label>
                        <input type="text" name="poste" class="form-control" id="poste">
                    </div>             
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary " data-dismiss="modal">Fermer</button>
                <button style= "background-color: #d1b94e; "type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
            </form>
        </div>
    </div>
</div>
<div class="home-content">
  <form action="/search3" class="d-flex mr-10">
    <div class="form-group mb-0 mr-10" >
      <input type="text" name="matricule" class="form-control" placeholder="Rechercher...">
      <button type="submit" class="btn btn-info">
        <i class='bx bx-search' ></i>
      </button>   
    </div>
    </form>
  <div class="formateur-card">
  <h4>Bienvenue sur votre espace formateur</h4>
  <button type="button" class="button" data-toggle="modal" data-target="#exampleModalCenter">
    <h6>Ajouter un chef</h6>
  </button>  
  <br>
  <br>

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Nom</th>
        <th scope="col">Matricule</th>
        <th scope="col">Email</th>
        <th scope="col">Poste</th>
        <th scope="col">Modifier</th>
        <th scope="col">Supprimer</th>

      </tr>
    </thead>
    <tbody>
      @foreach($chefs as $data)
      <tr>
        <td>{{$data->nom}}</td>
        <td>{{$data->matricule}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->poste}}</td>
        <td>
            <a style= "background-color: #d1b94e; " href="edit-chef/{{$data->id}}" class="btn btn-success">Modifier</a>
        </td>
        <td>
          <form action="delete-chef/{{$data->id}}" method="POST">
            @csrf
            {{method_field('DELETE')}}
        <button type="submit" class="btn btn-danger" classe="delete">Supprimer</button>
        </form>        </td>
      </tr>
     @endforeach
    </tbody>
  </table>
  </div>
  </div>
    </div>

@endsection