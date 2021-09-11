@extends('layouts.acceuil')
@section('content')
<div class="home-content">

  <div class="formateur-card">
  <h4>Bienvenue sur votre espace formateur</h4>
  <br>
  @if(session()->has("success"))
  <div class="alert alert-success">
    <h6>{{session()->get('success')}} </h6>
  </div>
  @endif
  @if(session()->has("successDelete"))
  <div class="alert alert-success">
    <h6>{{session()->get('successDelete')}} </h6>
  </div>
  @endif
  
  <div className= "row">
    <button class="button" data-toggle="modal" data-target="#exampleModal"  >Ajouter une formation</button>
  </div>
  

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nouvelle formation</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
        <form method="post" action="{{route('formation.store')}} ">
          @csrf
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nom de la formation</label>
            <input type="text" class="form-control" id="recipient-name" name="nom_formation"required>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Question 1:</label>
            <textarea class="form-control" id="message-text" name="question1" required="required"></textarea>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Question 2:</label>
            <textarea class="form-control" id="message-text" name="question2" required ></textarea>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Question 3:</label>
            <textarea class="form-control" id="message-text" name="question3" required></textarea>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Question 4:</label>
            <textarea class="form-control" id="message-text"name="question4" required></textarea>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Question 5:</label>
            <textarea class="form-control" id="message-text" name="question5" required></textarea>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Question 6:</label>
            <textarea class="form-control" id="message-text" name="question6" required></textarea>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Question 7:</label>
            <textarea class="form-control" id="message-text" name="question7" required></textarea>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Question 8:</label>
            <textarea class="form-control" id="message-text" name="question8" required></textarea>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Question 9:</label>
            <textarea class="form-control" id="message-text" name="question9" required></textarea>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Question 10:</label>
            <textarea class="form-control" id="message-text" name="question10" required></textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
            <button type="submit" class="btn btn-primary">Ajouter</button>
          </div>
          
        </form>
      </div>
      
    </div>
  </div>
</div>




  <div class="row">
    @foreach ($formations as $formation)
    <div class="column">
      <div class="card">
      
        <div class="card-image"></div>
        <div class="card-text">
          <h2>{{$formation -> nom_formation}}</h2>
          
        </div>
        <div class="card-stats">
          <div class="stat">
            <a style="color: white" href="{{route('formation.edit',['formations'=>$formation->id] )}}" ><h5>Modifier</h5></a>
            
          </div>
          <div class="stat border">
            <a style="color: white" href="#" onclick="if(confirm('Voulez-vous vraiment supprimer cette formation?')){document.getElementById('form-{{$formation->id}}').submit()}"><h5>Supprimer</h5></a>
            <form id="form-{{$formation->id}}" action="{{route('formation.supprimer',
              ['formation'=>$formation->id ] )}} " method="post">
                  @csrf
                  <input type="hidden" name="_method" value="delete">
                  
              </form>
          </div>

          
          
          
        </div>
      </div>
    </div>
   
    @endforeach
  </div>
  </div>
</div>


@endsection