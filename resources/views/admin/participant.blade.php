@extends('layouts.acceuil')
@section('content')
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nouveau Participant</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/save-participant" methode="GET" >   
              @csrf    
            <div class="modal-body">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Matricule</label>
                    <input type="text" name="matricule" class="form-control" id="matricule">
                </div>
                 <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nom</label>
                        <input type="text" name="nom" class="form-control" id="nom">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Prenom</label>
                        <input type="text" name="prenom" class="form-control" id="prenom">
                    </div>  
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Email</label>
                        <input type="text" name="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Poste</label>
                        <input type="text" name="poste" class="form-control" id="poste">
                    </div>  
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Region</label>
                        <select name="region" id="region">
                          <option name="region" value="Marrakech-safi">Marrakech-safi</option>
                          <option name="region" value="Tanger-Tétouan-Al Hoceïma">Tanger-Tétouan-Al Hoceïma</option>
                          <option name="region" value="Fès-Meknès">Fès-Meknès</option>
                          <option name="region" value="Rabat-Salé-Kénitra">Rabat-Salé-Kénitra</option>
                          <option name="region" value="Béni Mellal-Khénifra">Béni Mellal-Khénifra</option>
                          <option name="region" value="Casablanca-Settat">Casablanca-Settat</option>
                          <option name="region" value="Drâa-Tafilalet">Drâa-Tafilalet</option>
                          <option name="region" value="Souss-Massa">Souss-Massa</option>
                          <option name="region" value="Guelmim-Oued Noun">Guelmim-Oued Noun</option>
                          <option name="region" value="Laâyoune-Sakia El Hamra">Laâyoune-Sakia El Hamra</option>
                          <option name="region" value="Dakhla-Oued Ed-Dahab">Dakhla-Oued Ed-Dahab</option>
                        </select>
                    </div> 
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Chef</label>
                      <select name="chef" id="chef">
                        @foreach ($chefs as $row)
                        <option name="chef" value="{{$row->id}}">{{$row->nom}}</option>
       
                        @endforeach
                      </select>
                  </div>  
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Formation</label>
                      <select name="formation_id" id="formation_id">
                        @foreach ($formations as $row)
                        <option name="formation_id" value="{{$row->id}}">{{$row->nom_formation}}</option>
                            
                        @endforeach
                      </select>
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
  <form action="/search2" class="d-flex mr-10">
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
    <h6>Ajouter un participant</h6>
  </button>  
  <a class="button " href="/send-email" >Envoyer un email</a>
  </div>
 
  <br>
  @include('flash-message')
  <br>
  <table class="table table-striped">
    <thead>
      <tr >
        
        <th scope="col">Matricule</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Poste</th>
        <th scope="col">Region</th>
        <th scope="col">Chef</th>
        
        <th scope="col">Formation</th>
        
        <th scope="col">Modifier</th>
        <th scope="col">Supprimer</th>
        <th scope="col">Lien</th>
        
      </tr>
    </thead>
    <tbody>
      
      @foreach($participants as $data)
      <tr id="sid{{$data->id}} ">
        
        <td>{{$data->matricule}}</td>
        <td>{{$data->nom}}</td>
        <td>{{$data->prenom}}</td>
        <td>{{$data->poste}}</td>
        <td>{{$data->region}}</td>
        <td>{{$data->chef->nom}}</td>
        <td>{{$data->formation->nom_formation}}</td>
        
        <td>
            <a style= "background-color: #d1b94e; " href="edit-participant/{{$data->id}}" class="btn btn-success">Modifier</a>
        </td>
        <td>
          <form action="delete-participant/{{$data->id}}" method="POST">
            @csrf
            {{method_field('DELETE')}}
        <button type="submit" class="btn btn-danger" classe="delete">Supprimer</button>
        </form>        </td>
        <td>
          <a style= "background-color: #d1b94e; " href="/send-email1/{{$data->id}}" class="btn btn-success">Envoyer</a>
      </td>
      </tr>
     @endforeach
    </tbody>
  </table> 
  
    
  
 
 
  </div>
 
  </div>
    </div>
    
@endsection