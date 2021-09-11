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






    *, html, body, ul, li {
      margin: 0;
      padding: 0;
      font-family: Arial, Helvetica, sans-serif;
      font-size: 100%;
      color: #000;
    }
    
    html, body {
      height: 100%;
    }
    
    
    
    body {
      display: flex;
      flex-direction: column;
    }
    body header {
      min-height: 100%;
      height: 100%;
      width: 100%;
    }
    body header div.container {
      padding-left: 4rem;
      padding-right: 4rem;
      padding-top: 1rem;
      max-width: 72rem;
      margin: auto;
      display: flex;
      flex-direction: column;
      height: 100%;
      max-width: 100%;
    }
    body header div.container div#menu {
      display: flex;
      justify-content: space-between;
    }
    body header div.container div#menu a img {
      display: block;
      height: 60px;
    }
    body header div.container div#menu ul#nav-wrap {
      display: flex;
      align-items: center;
    }
    body header div.container div#menu ul#nav-wrap li {
      list-style-type: none;
      padding-left: 1rem;
    }
    body header div.container div#menu ul#nav-wrap li a {
      text-decoration: none;
    }
    body header div.container div#center-text {
      align-self: center;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      height: 100%;
    }
    body header div.container div#center-text h2 {
      font-size: 2rem;
    }
    body header div.container div#center-text p {
      margin-top: 0.1rem;
    }
    body header div.container div#center-text a {
      text-decoration: none;
    }
    body header div.container div#center-text a div {
      border: 1px solid #000;
      border-radius: 3px;
      padding: 1rem;
      margin-top: 1rem;
    }
    body header div.header-bg {
      background: url("https://awesomewallpapers.files.wordpress.com/2010/05/white.jpg") no-repeat center center;
      background-size: cover;
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
    }
        
    
    
    </style>
<body>
  
    <div class="container">
      <div id="menu" class="hover">
        <a href="#" id="logo">
          <img src="img/barid.png" alt="" />
        </a>
      </div>
      <div id="center-text" class="hover">
        <h2>FICHE D'APPRECIATION DIFFEREE DE L'ACTION DE FORMATION </h2>
        <p>(A renseigner par le participant 3 mois après la formation avec avis du Responsable hiérarchique, et faire retourner au Service Académique Bancaire)</p>

      </div>    
        <div class="row justify-content-center">
            <div class="col-md-8">
              <form  action="/search" method="GET">
                    <div class="form-group">
                      <input type="text" class="form-control" id="nom"  placeholder="Nom">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="p_matricule" name="p_matricule"  placeholder="Matricule">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="p_chef" name="p_chef"  placeholder="Chef">
                      </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="p_formation" name="p_formation" placeholder="Formation">
                    </div>
                    <input style= "background-color: #d1b94e; "type="submit" class="btn btn-primary" value="submit"/>
                  </form>
            </div>
        </div>
      </div>
</body>