@extends('layouts.acceuil')
@section('content')
<div class="home-content">
<div class="row">
    <div class="col-md-12">
        <div class="card1">

            <div class="card1-header">
                <h4 class="card1-title">Modifier Participant</h4>
                <form action="/update-participant/{{$participants->id}}" methode="GET" >   
                    @csrf    
                  <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Matricule</label>
                        <input type="text" name="matricule" class="form-control" id="matricule" value="{{$participants->matricule}}">
                    </div>
                       <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Nom</label>
                              <input type="text" name="nom" class="form-control" id="nom" value="{{$participants->nom}}">
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Prénom</label>
                            <input type="text" name="prenom" class="form-control" id="prenom" value="{{$participants->prenom}}">
                        </div>
                        
                          <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Poste</label>
                              <input type="text" name="poste" class="form-control" id="poste" value="{{$participants->poste}}">
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Email</label>
                            <input type="text" name="email" class="form-control" id="email" value="{{$participants->email}}">
                        </div>
                          <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Region</label>
                            <input type="text" name="region" class="form-control" id="region" value="{{$participants->region}}">
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
                  </div>
                  <div class="modal-footer">
                      <a href="{{url('participants')}}" class="btn btn-primary " data-dismiss="modal">Fermer</a>
                      <button type="submit" class="btn btn-primary">Modifier</button>
                  </div>
                  </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection