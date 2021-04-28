<?php if (empty($_SESSION)) : ?>
        <h1>Vous n'êtes pas autorisé à voir cette page</h1>        
        <?php else :?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Mezialib</title>
      <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css\style.css" media="screen" type="text/css" />
      <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Espace privé</title>
</head>

      <header class="left">
        <nav class="nav">
          <ul>
            <li <?php if ($currentPage == 'acceuilCO') {echo ' id="en-cours"';} ?>class="nav-item nav-link:hover"><a  href="privatespace.php?page=acceuilCO" class="nav-link">Acceuil</a></li>
            <li <?php if ($currentPage == 'bibliothèque') {echo ' id="en-cours"';} ?>class="nav-item nav-link:hover"><a href="privatespace.php?page=bibliothèque" class="nav-link">Bibliothèque</a></li>
            <li <?php if ($currentPage == 'mesLivres') {echo ' id="en-cours"';} ?>class="nav-item nav-link:hover"><a href="mesLivresController.php?page=mesLivres" class="nav-link">Mes Livres</a></li>
            <li <?php if ($currentPage == 'mesEmprunts') {echo ' id="en-cours"';} ?>class="nav-item nav-link:hover"><a href="mesEmpruntsController.php?page=mesEmprunts" class="nav-link">Mes emprunts</a></li>
            <li <?php if ($currentPage == 'profil') {echo ' id="en-cours"';} ?>class="nav-item nav-link:hover"><a href="privatespace.php?page=profil" class="nav-link">Profil</a></li>
            <li <?php if ($currentPage == 'deconnexion') {echo ' id="en-cours"';} ?>class="nav-item nav-link:hover"><a href="privatespace.php?page=deconnexion" class="nav-link">Déconnexion</a></li>
            
          </ul>
        </nav>
      </header>

<?php endif; ?> 
