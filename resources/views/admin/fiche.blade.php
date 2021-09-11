@extends('layouts.acceuil')

@section('content')

<style>

  body {
    color: white;
    font-family: 'Lato', sans-serif;
    font-size: 14px;
  }
  
  [id=container] {
    width: 50vw;
    background: white;
    color: #000;
    margin: 20px auto;
    overflow: auto;
    padding: 2.6rem;
    border: 2px solid #B2967D;
  }
  
  header {
    text-align: center;
    border-bottom: #E7D8C9 dashed 1px;
  }
  
  header h1 {
    margin: 0;
    padding: 0;
  }
  
  header p {
    padding: 0;
    margin-top: 5px;
    color: #000;
  }
  
  input[type="submit"] {
    background: #B2967D;
    border: 0;
    color: #fff;
    padding: 10px 12px;
    cursor: pointer;
  }
  
  [id=results] {
    margin-top: 1rem;
  }
  
  [id=results] h3 {
    background: #EEE4E1;
    padding: 10px;
    margin: 10px 0;
    color: #000;
  }
  
  </style>
 <section class="content container-fluid">
       <div class="row">
    
   <div class="table-responsive">
<div id="container">
  <div class="col">
  <header>
    <br>
    <br>
    <h1>Fiche d'appreciation</h1>
    <p>L’évaluation de la formation a pour but  <strong>d'assurer la pertinence et la rentabilité des actions de formation au niveau de l'entreprise.</strong></p>
    <p><strong>Nom participant:</strong> {{$rep_participants->participant->nom}} {{$rep_participants->participant->prenom}} <strong>  Nom formation:</strong> {{$rep_participants->formation->nom_formation}} </p>
  </header>
  <section>
    <form name="quizForm" action="/edit-fiche/{{$rep_participants->participant_id}}" methode="GET">
      @csrf
     
<h3>1. {{ $rep_participants->formation->question1 }}  </h3>

    <input type="radio" name="q1" value="100%" id="q1" @if($rep_participants->q1 == '100%') checked="checked"@endif >100%<br>
      <input type="radio" name="q1" value="80%" id="q1" @if($rep_participants->q1 == '80%') checked="checked"@endif>80%<br>
      <input type="radio" name="q1" value="60%" id="q1" @if($rep_participants->q1 == '60%') checked="checked"@endif>60%<br>
      <input type="radio" name="q1" value="40%" id="q1" @if($rep_participants->q1 == '40%') checked="checked"@endif>40%<br>
      <input type="radio" name="q1" value="20%" id="q1" @if($rep_participants->q1 == '20%') checked="checked"@endif>20%<br>

      <h3>2. {{ $rep_participants->formation->question2 }}</h3>
      <input type="radio" name="q2" value="100%" id="q2" @if($rep_participants->q2 == '100%') checked="checked"@endif >100%<br>
      <input type="radio" name="q2" value="80%" id="q2" @if($rep_participants->q2 == '80%') checked="checked"@endif>80%<br>
      <input type="radio" name="q2" value="60%" id="q2" @if($rep_participants->q2 == '60%') checked="checked"@endif>60%<br>
      <input type="radio" name="q2" value="40%" id="q2" @if($rep_participants->q2 == '40%') checked="checked"@endif>40%<br>
      <input type="radio" name="q2" value="20%" id="q2" @if($rep_participants->q2 == '20%') checked="checked"@endif>20%<br>

    <h3>3. {{ $rep_participants->formation->question3 }}</h3>
    <input type="radio" name="q3" value="100%" id="q3" @if($rep_participants->q3 == '100%') checked="checked"@endif >100%<br>
    <input type="radio" name="q3" value="80%" id="q3" @if($rep_participants->q3 == '80%') checked="checked"@endif>80%<br>
    <input type="radio" name="q3" value="60%" id="q3" @if($rep_participants->q3 == '60%') checked="checked"@endif>60%<br>
    <input type="radio" name="q3" value="40%" id="q3" @if($rep_participants->q3 == '40%') checked="checked"@endif>40%<br>
    <input type="radio" name="q3" value="20%" id="q3" @if($rep_participants->q3 == '20%') checked="checked"@endif>20%<br>


      <h3>4. {{ $rep_participants->formation->question4 }}</h3>
      <input type="radio" name="q4" value="100%" id="q1a" @if($rep_participants->q4 == '100%') checked="checked"@endif >100%<br>
      <input type="radio" name="q4" value="80%" id="q1a" @if($rep_participants->q4 == '80%') checked="checked"@endif>80%<br>
      <input type="radio" name="q4" value="60%" id="q1b" @if($rep_participants->q4 == '60%') checked="checked"@endif>60%<br>
      <input type="radio" name="q4" value="40%" id="q1c" @if($rep_participants->q4 == '40%') checked="checked"@endif>40%<br>
      <input type="radio" name="q4" value="20%" id="q1d" @if($rep_participants->q4 == '20%') checked="checked"@endif>20%<br>

      <h3>5. {{ $rep_participants->formation->question5 }}</h3>
      <input type="radio" name="q5" value="100%" id="q1a" @if($rep_participants->q5 == '100%') checked="checked"@endif >100%<br>
      <input type="radio" name="q5" value="80%" id="q1a" @if($rep_participants->q5 == '80%') checked="checked"@endif>80%<br>
      <input type="radio" name="q5" value="60%" id="q1b" @if($rep_participants->q5 == '60%') checked="checked"@endif>60%<br>
      <input type="radio" name="q5" value="40%" id="q1c" @if($rep_participants->q5 == '40%') checked="checked"@endif>40%<br>
      <input type="radio" name="q5" value="20%" id="q1d" @if($rep_participants->q5 == '20%') checked="checked"@endif>20%<br>
      <br><br>
      
      <h3>6. {{ $rep_participants->formation->question6 }}</h3>
      <input type="radio" name="q6" value="100%" id="q6" @if($rep_participants->q6 == '100%') checked="checked"@endif >100%<br>
      <input type="radio" name="q6" value="80%" id="q6" @if($rep_participants->q6 == '80%') checked="checked"@endif>80%<br>
      <input type="radio" name="q6" value="60%" id="q6" @if($rep_participants->q6 == '60%') checked="checked"@endif>60%<br>
      <input type="radio" name="q6" value="40%" id="q6" @if($rep_participants->q6 == '40%') checked="checked"@endif>40%<br>
      <input type="radio" name="q6" value="20%" id="q6" @if($rep_participants->q6 == '20%') checked="checked"@endif>20%<br>

      <h3>7. {{ $rep_participants->formation->question7 }}</h3>
      <input type="radio" name="q7" value="100%" id="q7" @if($rep_participants->q7 == '100%') checked="checked"@endif >100%<br>
      <input type="radio" name="q7" value="80%" id="q7" @if($rep_participants->q7 == '80%') checked="checked"@endif>80%<br>
      <input type="radio" name="q7" value="60%" id="q7" @if($rep_participants->q7 == '60%') checked="checked"@endif>60%<br>
      <input type="radio" name="q7" value="40%" id="q7" @if($rep_participants->q7 == '40%') checked="checked"@endif>40%<br>
      <input type="radio" name="q7" value="20%" id="q7" @if($rep_participants->q7 == '20%') checked="checked"@endif>20%<br>

      <h3>8. {{ $rep_participants->formation->question8 }}</h3>
      <input type="radio" name="q8" value="100%" id="q1a" @if($rep_participants->q8 == '100%') checked="checked"@endif >100%<br>
      <input type="radio" name="q8" value="80%" id="q1a" @if($rep_participants->q8 == '80%') checked="checked"@endif>80%<br>
      <input type="radio" name="q8" value="60%" id="q1b" @if($rep_participants->q8 == '60%') checked="checked"@endif>60%<br>
      <input type="radio" name="q8" value="40%" id="q1c" @if($rep_participants->q8 == '40%') checked="checked"@endif>40%<br>
      <input type="radio" name="q8" value="20%" id="q1d" @if($rep_participants->q8 == '20%') checked="checked"@endif>20%<br>

      <h3>9. {{ $rep_participants->formation->question9 }}</h3>
      <input type="radio" name="q9" value="100%" id="q1a" @if($rep_participants->q9 == '100%') checked="checked"@endif >100%<br>
      <input type="radio" name="q9" value="80%" id="q1a" @if($rep_participants->q9 == '80%') checked="checked"@endif>80%<br>
      <input type="radio" name="q9" value="60%" id="q1b" @if($rep_participants->q9 == '60%') checked="checked"@endif>60%<br>
      <input type="radio" name="q9" value="40%" id="q1c" @if($rep_participants->q9 == '40%') checked="checked"@endif>40%<br>
      <input type="radio" name="q9" value="20%" id="q1d" @if($rep_participants->q9 == '20%') checked="checked"@endif>20%<br>

      <h3>10. {{ $rep_participants->formation->question10 }}</h3>
      <input type="radio" name="q10" value="100%" id="q1a" @if($rep_participants->q10 == '100%') checked="checked"@endif >100%<br>
      <input type="radio" name="q10" value="80%" id="q1a" @if($rep_participants->q10 == '80%') checked="checked"@endif>80%<br>
      <input type="radio" name="q10" value="60%" id="q1b" @if($rep_participants->q10 == '60%') checked="checked"@endif>60%<br>
      <input type="radio" name="q10" value="40%" id="q1c" @if($rep_participants->q10 == '40%') checked="checked"@endif>40%<br>
      <input type="radio" name="q10" value="20%" id="q1d" @if($rep_participants->q10 == '20%') checked="checked"@endif>20%<br>
      
    </form> 
  </section>
  </div>
  <div class="col"> 
    <header>
      <br>
      <br>
      @foreach ($rep_chefs as $rchef)
      <h1>Fiche d'appreciation chef</h1>
      <p><strong>Nom participant:</strong> {{$rep_participants->participant->nom}} {{$rep_participants->participant->prenom}} <strong>  Nom chef:</strong> {{$rchef->chef->nom}} </p>
    </header>
    <section>
      <form name="quizForm" action="" methode="GET">
        @csrf
       
  <h3>1. {{ $rchef->formation->question1 }}  </h3>
  
      <input type="radio" name="q1" value="100%" id="q1" @if($rchef->q1 == '100%') checked="checked"@endif >100%<br>
        <input type="radio" name="q1" value="80%" id="q1" @if($rchef->q1 == '80%') checked="checked"@endif>80%<br>
        <input type="radio" name="q1" value="60%" id="q1" @if($rchef->q1 == '60%') checked="checked"@endif>60%<br>
        <input type="radio" name="q1" value="40%" id="q1" @if($rchef->q1 == '40%') checked="checked"@endif>40%<br>
        <input type="radio" name="q1" value="20%" id="q1" @if($rchef->q1 == '20%') checked="checked"@endif>20%<br>
  
        <h3>2. {{ $rchef->formation->question2 }}</h3>
        <input type="radio" name="q2" value="100%" id="q2" @if($rchef->q2 == '100%') checked="checked"@endif >100%<br>
        <input type="radio" name="q2" value="80%" id="q2" @if($rchef->q2 == '80%') checked="checked"@endif>80%<br>
        <input type="radio" name="q2" value="60%" id="q2" @if($rchef->q2 == '60%') checked="checked"@endif>60%<br>
        <input type="radio" name="q2" value="40%" id="q2" @if($rchef->q2 == '40%') checked="checked"@endif>40%<br>
        <input type="radio" name="q2" value="20%" id="q2" @if($rchef->q2 == '20%') checked="checked"@endif>20%<br>
  
      <h3>3. {{ $rchef->formation->question3 }}</h3>
      <input type="radio" name="q3" value="100%" id="q3" @if($rchef->q3 == '100%') checked="checked"@endif >100%<br>
      <input type="radio" name="q3" value="80%" id="q3" @if($rchef->q3 == '80%') checked="checked"@endif>80%<br>
      <input type="radio" name="q3" value="60%" id="q3" @if($rchef->q3 == '60%') checked="checked"@endif>60%<br>
      <input type="radio" name="q3" value="40%" id="q3" @if($rchef->q3 == '40%') checked="checked"@endif>40%<br>
      <input type="radio" name="q3" value="20%" id="q3" @if($rchef->q3 == '20%') checked="checked"@endif>20%<br>
  
  
        <h3>4. {{ $rchef->formation->question4 }}</h3>
        <input type="radio" name="q4" value="100%" id="q1a" @if($rchef->q4 == '100%') checked="checked"@endif >100%<br>
        <input type="radio" name="q4" value="80%" id="q1a" @if($rchef->q4 == '80%') checked="checked"@endif>80%<br>
        <input type="radio" name="q4" value="60%" id="q1b" @if($rchef->q4 == '60%') checked="checked"@endif>60%<br>
        <input type="radio" name="q4" value="40%" id="q1c" @if($rchef->q4 == '40%') checked="checked"@endif>40%<br>
        <input type="radio" name="q4" value="20%" id="q1d" @if($rchef->q4 == '20%') checked="checked"@endif>20%<br>
  
        <h3>5. {{ $rchef->formation->question5 }}</h3>
        <input type="radio" name="q5" value="100%" id="q1a" @if($rchef->q5 == '100%') checked="checked"@endif >100%<br>
        <input type="radio" name="q5" value="80%" id="q1a" @if($rchef->q5 == '80%') checked="checked"@endif>80%<br>
        <input type="radio" name="q5" value="60%" id="q1b" @if($rchef->q5 == '60%') checked="checked"@endif>60%<br>
        <input type="radio" name="q5" value="40%" id="q1c" @if($rchef->q5 == '40%') checked="checked"@endif>40%<br>
        <input type="radio" name="q5" value="20%" id="q1d" @if($rchef->q5 == '20%') checked="checked"@endif>20%<br>
        <br><br>
        
        <h3>6. {{ $rchef->formation->question6 }}</h3>
        <input type="radio" name="q6" value="100%" id="q6" @if($rchef->q6 == '100%') checked="checked"@endif >100%<br>
        <input type="radio" name="q6" value="80%" id="q6" @if($rchef->q6 == '80%') checked="checked"@endif>80%<br>
        <input type="radio" name="q6" value="60%" id="q6" @if($rchef->q6 == '60%') checked="checked"@endif>60%<br>
        <input type="radio" name="q6" value="40%" id="q6" @if($rchef->q6 == '40%') checked="checked"@endif>40%<br>
        <input type="radio" name="q6" value="20%" id="q6" @if($rchef->q6 == '20%') checked="checked"@endif>20%<br>
  
        <h3>7. {{ $rchef->formation->question7 }}</h3>
        <input type="radio" name="q7" value="100%" id="q7" @if($rchef->q7 == '100%') checked="checked"@endif >100%<br>
        <input type="radio" name="q7" value="80%" id="q7" @if($rchef->q7 == '80%') checked="checked"@endif>80%<br>
        <input type="radio" name="q7" value="60%" id="q7" @if($rchef->q7 == '60%') checked="checked"@endif>60%<br>
        <input type="radio" name="q7" value="40%" id="q7" @if($rchef->q7 == '40%') checked="checked"@endif>40%<br>
        <input type="radio" name="q7" value="20%" id="q7" @if($rchef->q7 == '20%') checked="checked"@endif>20%<br>
  
        <h3>8. {{ $rchef->formation->question8 }}</h3>
        <input type="radio" name="q8" value="100%" id="q1a" @if($rchef->q8 == '100%') checked="checked"@endif >100%<br>
        <input type="radio" name="q8" value="80%" id="q1a" @if($rchef->q8 == '80%') checked="checked"@endif>80%<br>
        <input type="radio" name="q8" value="60%" id="q1b" @if($rchef->q8 == '60%') checked="checked"@endif>60%<br>
        <input type="radio" name="q8" value="40%" id="q1c" @if($rchef->q8 == '40%') checked="checked"@endif>40%<br>
        <input type="radio" name="q8" value="20%" id="q1d" @if($rchef->q8 == '20%') checked="checked"@endif>20%<br>
  
        <h3>9. {{ $rchef->formation->question9 }}</h3>
        <input type="radio" name="q9" value="100%" id="q1a" @if($rchef->q9 == '100%') checked="checked"@endif >100%<br>
        <input type="radio" name="q9" value="80%" id="q1a" @if($rchef->q9 == '80%') checked="checked"@endif>80%<br>
        <input type="radio" name="q9" value="60%" id="q1b" @if($rchef->q9 == '60%') checked="checked"@endif>60%<br>
        <input type="radio" name="q9" value="40%" id="q1c" @if($rchef->q9 == '40%') checked="checked"@endif>40%<br>
        <input type="radio" name="q9" value="20%" id="q1d" @if($rchef->q9 == '20%') checked="checked"@endif>20%<br>
  
        <h3>10. {{ $rchef->formation->question10 }}</h3>
        <input type="radio" name="q10" value="100%" id="q1a" @if($rchef->q10 == '100%') checked="checked"@endif >100%<br>
        <input type="radio" name="q10" value="80%" id="q1a" @if($rchef->q10 == '80%') checked="checked"@endif>80%<br>
        <input type="radio" name="q10" value="60%" id="q1b" @if($rchef->q10 == '60%') checked="checked"@endif>60%<br>
        <input type="radio" name="q10" value="40%" id="q1c" @if($rchef->q10 == '40%') checked="checked"@endif>40%<br>
        <input type="radio" name="q10" value="20%" id="q1d" @if($rchef->q10 == '20%') checked="checked"@endif>20%<br>
          
        @endforeach
      </form> 
    <a style= "background-color: #d1b94e; " href="download-pdf/{{$rep_participants->id}}" class="btn btn-success">Télécharger</a>
    </div>
    <div id="results"></div>
  </section> <footer class="main-footer">
    @endsection