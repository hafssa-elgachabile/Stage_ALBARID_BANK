@extends('layouts.acceuil')
@section('content')
<div class="home-content">
<div class="row">
    <div class="col-md-12">
        <div class="card1">

            <div class="card1-header">
                <h4 class="card1-title">Modifier Chef</h4>
                <form action="/update-chef/{{$chefs->id}}" methode="GET" >   
                    @csrf    
                  <div class="modal-body">
                       <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Nom</label>
                              <input type="text" name="nom" class="form-control" id="nom" value="{{$chefs->nom}}">
                          </div>
                           <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Matricule</label>
                              <input type="text" name="matricule" class="form-control" id="matricule" value="{{$chefs->matricule}}">
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Email</label>
                            <input type="text" name="email" class="form-control" id="email" value="{{$chefs->email}}">
                        </div>
                          <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Poste</label>
                              <input type="text" name="poste" class="form-control" id="poste" value="{{$chefs->poste}}">
                          </div>             
                  </div>
                  <div class="modal-footer">
                      <a href="{{url('chefs')}}" class="btn btn-primary " data-dismiss="modal">Fermer</a>
                      <button type="submit" class="btn btn-primary">Modifier</button>
                  </div>
                  </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection