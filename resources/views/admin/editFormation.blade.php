
@extends('layouts.acceuil')
@section('content')
<div class="home-content">
  
  <div class="formateur-card">
  <h4>Modifier formation</h4>
  <br>
  <div class="modal-body">
  <form method="post" action="{{route('formation.update',['formations'=>$formations->id])}} ">
    @csrf

    <input type="hidden" name="_method" value="put">

    <div class="mb-3">
      <label for="recipient-name" class="col-form-label">Nom de la formation</label>
      <input type="text" class="form-control" id="recipient-name" name="nom_formation" value="{{$formations->nom_formation}} " >
    </div>
    <div class="mb-3">
      <label for="message-text" class="col-form-label">Question 1:</label>
      <textarea class="form-control" id="message-text" name="question1" >{{$formations->question1}}</textarea>
    </div>
    <div class="mb-3">
      <label for="message-text" class="col-form-label">Question 2:</label>
      <textarea class="form-control" id="message-text" name="question2" >{{$formations->question2}}</textarea>
    </div>
    <div class="mb-3">
      <label for="message-text" class="col-form-label">Question 3:</label>
      <textarea class="form-control" id="message-text" name="question3" >{{$formations->question3}}</textarea>
    </div>
    <div class="mb-3">
      <label for="message-text" class="col-form-label">Question 4:</label>
      <textarea class="form-control" id="message-text"name="question4" >{{$formations->question4}}</textarea>
    </div>
    <div class="mb-3">
      <label for="message-text" class="col-form-label">Question 5:</label>
      <textarea class="form-control" id="message-text" name="question5" >{{$formations->question5}}</textarea>
    </div>
    <div class="mb-3">
      <label for="message-text" class="col-form-label">Question 6:</label>
      <textarea class="form-control" id="message-text" name="question6" >{{$formations->question6}}</textarea>
    </div>
    <div class="mb-3">
      <label for="message-text" class="col-form-label">Question 7:</label>
      <textarea class="form-control" id="message-text" name="question7" >{{$formations->question7}}</textarea>
    </div>
    <div class="mb-3">
      <label for="message-text" class="col-form-label">Question 8:</label>
      <textarea class="form-control" id="message-text" name="question8" >{{$formations->question8}}</textarea>
    </div>
    <div class="mb-3">
      <label for="message-text" class="col-form-label">Question 9:</label>
      <textarea class="form-control" id="message-text" name="question9" >{{$formations->question9}}</textarea>
    </div>
    <div class="mb-3">
      <label for="message-text" class="col-form-label">Question 10:</label>
      <textarea class="form-control" id="message-text" name="question10" >{{$formations->question10}}</textarea>
    </div>
  </div>
    <div class="modal-footer">
      <a href="{{url('formations')}}" class="btn btn-primary " data-dismiss="modal">Fermer</a>
      <button type="submit" class="btn btn-primary">Modifier</button>
  </div>
</form>

  </div>
  </div>
    </div>

@endsection