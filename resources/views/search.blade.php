<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <!-- Boxicons CDN Link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>

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
  
  <body>

 <section class="content container-fluid">
       <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">   
    <div class="form-group">   
     </div>
     <div class="form-group" align="center">
     </div>
    </div>
    <div class="col-md-4"></div>
   </div>
   <div class="table-responsive">
<div id="container">
  <header>
    <br>
    <br>
    <h1>Fiche d'appreciation</h1>
    <p>L’évaluation de la formation a pour but  <strong>d'assurer la pertinence et la rentabilité des actions de formation au niveau de l'entreprise.</strong></p>
  </header>
  <section>
    <form action="/save-rep" methode="GET" >   
      @csrf    
        @foreach($questions as $question )
        <p><strong>Nom participant:</strong> {{$question->nom}} {{$question->prenom}} <strong>  Nom formation:</strong> {{$question->nom_formation}} <br>
         <input type="hidden" id="formation_id" name="formation_id" value="{{$question->formation_id}} " > <input type="hidden" id="participant_id" name="participant_id" value="{{$question->id}} " >
        </p>
        @error('participant_id')
        <div class="alert-danger">{{$message}}</div>
        @enderror
        <p>
        
          <input  type="hidden" id="chef_id" name="chef_id" value="{{$question->chef_id}} "  >
        </p>

<h3>1. {{$question->question1}}</h3>
    <input type="radio" name="q1" value="100%" id="q1a">100%<br>
      <input type="radio" name="q1" value="80%" id="q1a">80%<br>
      <input type="radio" name="q1" value="60%" id="q1b">60%<br>
      <input type="radio" name="q1" value="40%" id="q1c">40%<br>
      <input type="radio" name="q1" value="20%" id="q1d">20%<br>
      @error('q1')
        <div class="alert-danger">{{$message}}</div>
        @enderror

      <h3>2. {{$question->question2}}</h3>
      <input type="radio" name="q2" value="100%" id="q2a">100%<br>
      <input type="radio" name="q2" value="80%" id="q2b">80%<br>
      <input type="radio" name="q2" value="60%" id="q2c">60%<br>
      <input type="radio" name="q2" value="40%" id="q2d">40%<br>
    <input type="radio" name="q2" value="20%" id="q2b">20%<br>
    @error('q2')
    <div class="alert-danger">{{$message}}</div>
    @enderror
    <h3>3. {{$question->question3}}</h3>
      <input type="radio" name="q3" value="100%" id="q3a">100%<br>
      <input type="radio" name="q3" value="80%" id="q3b">80%<br>
      <input type="radio" name="q3" value="60%" id="q3c">60%<br>
      <input type="radio" name="q3" value="40%" id="q3d">40%<br>    <input type="radio" name="q3" value="20%" id="q4b">20%<br>
      @error('q3')
        <div class="alert-danger">{{$message}}</div>
        @enderror
    
      <h3>4. {{$question->question4}}</h3>
      <input type="radio" name="q4" value="100%" id="q4a">100%<br>
      <input type="radio" name="q4" value="80%" id="q4b">80%<br>
    <input type="radio" name="q4" value="60%" id="q4b">60%<br>
  <input type="radio" name="q4" value="40%" id="q4b">40%<br>
 <input type="radio" name="q4" value="20%" id="q4b">20%<br>
 @error('q4')
        <div class="alert-danger">{{$message}}</div>
  @enderror
        <h3>5. {{$question->question5}}</h3>
        <input type="radio" name="q5" value="100%" id="q5a">100%<br>
        <input type="radio" name="q5" value="80%" id="q5b">80%<br>
        <input type="radio" name="q5" value="60%" id="q5c">60%<br>
        <input type="radio" name="q5" value="40%" id="q5d">40%<br>
                <input type="radio" name="q5" value="20%" id="q4b">20%<br>
                @error('q5')
                <div class="alert-danger">{{$message}}</div>
                @enderror
                <h3>6. {{$question->question6}}</h3>
              <input type="radio" name="q6" value="100%" id="q5a">100%<br>
              <input type="radio" name="q6" value="80%" id="q5b">80%<br>
              <input type="radio" name="q6" value="60%" id="q5c">60%<br>
              <input type="radio" name="q6" value="40%" id="q5d">40%<br>
              <input type="radio" name="q6" value="20%" id="q4b">20%<br>
                      @error('q6')
                        <div class="alert-danger">{{$message}}</div>
                       @enderror
                      <h3>7. {{$question->question7}}</h3>
                      <input type="radio" name="q7" value="100%" id="q5a">100%<br>
                      <input type="radio" name="q7" value="80%" id="q5b">80%<br>
                      <input type="radio" name="q7" value="60%" id="q5c">60%<br>
                      <input type="radio" name="q7" value="40%" id="q5d">40%<br>
                      <input type="radio" name="q7" value="20%" id="q4b">20%<br>
                      @error('q7')
                      <div class="alert-danger">{{$message}}</div>
                      @enderror
                              <h3>8. {{$question->question8}}</h3>
                              <input type="radio" name="q8" value="100%" id="q5a">100%<br>
                              <input type="radio" name="q8" value="80%" id="q5b">80%<br>
                              <input type="radio" name="q8" value="60%" id="q5c">60%<br>
                              <input type="radio" name="q8" value="40%" id="q5d">40%<br>
                              <input type="radio" name="q8" value="20%" id="q4b">20%<br>
                              @error('q8')
                              <div class="alert-danger">{{$message}}</div>
                              @enderror       
                                      <h3>9. {{$question->question9}}</h3>
                                      <input type="radio" name="q9" value="100%" id="q5a">100%<br>
                                      <input type="radio" name="q9" value="80%" id="q5b">80%<br>
                                      <input type="radio" name="q9" value="60%" id="q5c">60%<br>
                                      <input type="radio" name="q9" value="40%" id="q5d">40%<br>
                                              <input type="radio" name="q9" value="20%" id="q4b">20%<br>
                                              @error('q9')
                                              <div class="alert-danger">{{$message}}</div>
                                              @enderror
                                         <h3>10. {{$question->question10}}</h3>
                                              <input type="radio" name="q10" value="100%" id="q5a">100%<br>
                                              <input type="radio" name="q10" value="80%" id="q5b">80%<br>
                                              <input type="radio" name="q10" value="60%" id="q5c">60%<br>
                                              <input type="radio" name="q10" value="40%" id="q5d">40%<br>
                                            <input type="radio" name="q10" value="20%" id="q4b">20%<br>
                                            @error('q10')
                                            <div class="alert-danger">{{$message}}</div>
                                            @enderror
      <br><br>
     
      <button  style= "background-color: #d1b94e; color:#fff "  class="btn btn-primary">Enregistrer</button>
      @endforeach
    </form>  
    
    <div id="results"></div>
  </section> <footer class="main-footer">
      </footer>
</div>
   </div>
 </section>
  </body>