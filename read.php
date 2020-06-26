<?php
  if(isset($_GET["id"]) && $_GET["id"] != null)
  {
    $i = $_GET["id"];
    echo "<p class='bookToRead' style='display:none;'>{$i}</p>";
  }
  else{
    header("location: index.php");
  }
?>
<!DOCTYPE HTML>
<html lang="fr" style="background-color:#FEFEFE;">
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
    <script src="read.js" type="text/javascript">
    </script>
    <script src="audioBook.js" type="text/javascript">
    </script>
</head>
<body style="background-color:#FEFEFE;">
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
<!-- Read-->
<div id="readPage">
  <div class="row text-center">

    <div class="col-md-4 offset-4">
      <button class="btn btn-warning btn-lg lpr" onclick="decrementPage()"><i style="font-size:3rem" class="fa fa-arrow-circle-left" aria-hidden="true"></i></button>
      <button class="btn btn-danger btn-lg lpr" onClick="playPressed()"><i class="fas fa-play-circle" style="font-size:3rem"></i></button>
      <button class="btn btn-warning btn-lg lpr" onclick="incrementPage()"><i style="font-size:3rem" class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
    </div>

  </div>


  <?php
    $xml = simplexml_load_file("Books/livre{$i}.xml");
    echo "<p class='content title' style='display:block;'>".$xml->titre."</p>";
    echo "<p class='content author' style='display:none;'>écrit par : <br/>".$xml->auteur->nom." ".$xml->auteur->prenom."</p>";
    foreach($xml->section->children() as $content){
      echo "<p class='content' style='display:none;'>".$content."</p>";
    }
    ?>
</div>

</html>
