<?php
function byAuthor($searched){
    $found = false;
    $i = 1;

    while(is_readable("Books/livre".$i.".xml")){
      $xmlFileName = "Books/livre".$i.".xml";
      $xml = simplexml_load_file($xmlFileName) or die("Erreur : fichier introuvable");
      $authorName1 = strtolower(str_replace(' ', '', $xml->auteur->nom.$xml->auteur->prenom));
      $authorName2 = strtolower(str_replace(' ', '',$xml->auteur->prenom.$xml->auteur->nom));
      if((strstr($authorName1,strtolower(str_replace(' ', '', $searched))) != false)
 or (strstr($authorName2,strtolower(str_replace(' ', '', $searched))) != false))
        {
        $found = true;
        echo "<div class='col-md-3 offset-1 found'>";
        echo "<img class='img-responsive' src='Covers/livre{$i}'/><br>";
        echo "<a href='Books/livre{$i}.xml'><button type='button' class='btn btn-success btn-lg'>Lire en XML</button></a> &nbsp;";
        echo "<a href='read.php?id={$i}'><button type='button' class='btn btn-info btn-lg'>Lire en JS</button></a>";
        echo "</div>";
      }
      $i++;
    }

  }

  function byTitle($searched){
      $found = false;
      $i = 1;

      while(is_readable("Books/livre".$i.".xml")){
        $xmlFileName = "Books/livre".$i.".xml";
        $xml = simplexml_load_file($xmlFileName) or die("Erreur : fichier introuvable");
        $bookTitle = strtolower(str_replace(' ', '', $xml->titre));
        if(strstr($bookTitle,strtolower(str_replace(' ', '', $searched))) != false){
          $found = true;
          echo "<div class='col-md-3 offset-1 found'>";
          echo "<img class='img-responsive' src='Covers/livre{$i}'/><br>";
          echo "<a href='Books/livre{$i}.xml'><button type='button' class='btn btn-success btn-lg'>Lire en XML</button></a> &nbsp;&nbsp";
          echo "<a href='read.php?id={$i}'><button type='button' href='Books/livre{$i}.xml' class='btn btn-info btn-lg'>Lire en JS</button></a>";
          echo "</div>";
        }
        $i++;
      }
    }

  $text = $_POST["search"];
  $type = $_POST["type"];


?>

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
<!-- l3AYBAT -->
<div id="searchResults" class="container-fluid text-center center-text">
    <div class="row text-center">
      <div class="col-md-12 text-center">
        <h3 class="title-section text-center" id="category-first-text">Resultats</h3>
      </div>
       <?php
       switch($type){
         case 0:
           byTitle($text);
           break;
         case 1:
           byAuthor($text);
           break;
         default:
           echo "Asb7an lah";
           break;
       }
       ?>

  </div>
</div>


<!-- Books At Disposal Section  -->
<div id="nouveautes" class="container-fluid text-center center-text">
    <div class="row text-center">
      <div class="col-md-12 text-center">
        <h3 class="title-section text-center" id="category-first-text">Nouveautés</h3>
      </div>
    </div>
  </div>
  <div class="books">
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
