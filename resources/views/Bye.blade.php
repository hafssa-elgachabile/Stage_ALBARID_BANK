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
<!--
In Chrome browser #center-text item doesn't get 100% height.
UPD. if parent element have height: 100% all works fine.
-->

<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Merci</title>
</head>
<body>
  <header>
    <div class="container">
      <div id="menu" class="hover">
        <a href="#" id="logo">
          <img src="/barid2.png" alt="" />
        </a>
      </div>
      <div id="center-text" class="hover">
        <h2>Vos réponses ont été bien enregistrés.</h2>
        <h2>Merci pour votre participation.</h2>
        <p> À bientôt</p>
        
      </div>
    </div>
    <div class="header-bg">
    </div>
  </header>
</body>
</html>