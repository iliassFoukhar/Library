<!DOCTYPE HTML>
<html lang="fr">
<head>
  <title>Librairie 2.0</title>
  <meta name="author" content="Fast&Curious">
  <meta name="description" content="Explore une diversité de livres digitales">
  <meta name="keywords" content="livre, xml">
  <link href="main.css" rel="stylesheet" type="text/css">
  <!-- MY CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- BOOTSTRAP Stuff -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/d01999573a.js" crossorigin="anonymous"></script>

    <!-- My JS -->
    <script src="scrollingBooks.js" type="text/javascript">
    </script>

</head>
<body style="background-color:#121212;">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-md sticky-top navbar-dark bg-dark" id="home">
  <a class="navbar-brand" href="index.php">
    <img src="Images/logo.png" width="60" height="60" alt="logo" style="border-radius:50%" id="logo">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
    <form class="form-inline my-2 my-lg-0" method="post" action="search.php">
      <select class="form-control  mr-sm-2" name="type">
        <option value="0">Par Titre</option>
      <option value="1">Par Auteur</option>
    </select>
      <input class="form-control mr-sm-2" required name="search" type="search" placeholder="Rechercher..." aria-label="Search">
      <button class="btn btn-danger my-2 my-sm-0" type="submit"><img src="Images/search.png" class="img-responsive" height="25" width="25"></button>
    </form>
  </div>
</nav>
<!-- Slider show -->
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Images/BG1" class="d-block w-100" alt="Slider premiere photo">
      <div class="carousel-caption d-none d-md-block">
        <h5>Librairie<span class="pinky"> 2.0</span></h5>
        <p>Bienvenue dans notre platforme !</p>
        <a href="#nouveautes"><button class="btn btn-success btn-lg">Nouvel Arrivage</button></a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Images/BG4" class="d-block w-100" alt="Slider deuxieme photo">
      <div class="carousel-caption d-none d-md-block">
        <h5>Librairie<span class="pinky"> 2.0</span></h5>
        <p>On met plusieurs livres à votre disposition pour les lire en ligne !</p>
        <a href="#nouveautes"><button class="btn btn-warning btn-lg">Nouvel Arrivage</button></a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Images/BG3" class="d-block w-100" alt="Slider troisieme photo">
      <div class="carousel-caption d-none d-md-block">
        <h5>Librairie<span class="pinky"> 2.0</span></h5>
        <p>Prenez un vers de café et enrichissez vos cerveau !</p>
        <a href="#nouveautes"><button class="btn btn-danger btn-lg">Nouvel Arrivage</button></a>

      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- Books At Disposal Section  -->
<div id="nouveautes" class="container-fluid text-center center-text">
    <div class="row text-center">
      <div class="col-md-12 text-center">
        <h3 class="title-section text-center" id="category-first-text">Nouveautés</h3>
      </div>
    </div>
  </div>
  <div class="books" id="outer">
    <div class="book">
      <img class="img-reponsive" src="Covers/livre1.jpg"/>
    </div>
    <div class="book">
      <img class="img-reponsive" src="Covers/livre2.jpg"/>
    </div>
    <div class="book">
      <img class="img-reponsive" src="Covers/livre3.jpg"/>
    </div>
    <div class="book">
      <img class="img-reponsive" src="Covers/livre4.jpg"/>
    </div>
    <div class="book">
      <img class="img-reponsive" src="Covers/livre5.jpg"/>
    </div>
    <div class="book">
      <img class="img-reponsive" src="Covers/livre6.jpg"/>
    </div>
    <div class="book">
      <img class="img-reponsive" src="Covers/livre7.jpg"/>
    </div>
    <div class="book">
      <img class="img-reponsive" src="Covers/livre8.jpg"/>
    </div>
    <div class="book">
      <img class="img-reponsive" src="Covers/livre9.jpg"/>
    </div>
    <div class="book">
      <img class="img-reponsive" src="Covers/livre10.jpg"/>
    </div>
  </div>
  <!-- FOOTER-->
  <div class="row text-center" id="footer">
    <div class="col-md-12">
      <h6 id="myName" class="text-center">&copy; Copyrights Librairie 2.0</h6>
      </div>
  </div>
</body>
</html>
