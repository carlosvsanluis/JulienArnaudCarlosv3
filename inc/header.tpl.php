
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
        <nav class="left__nav">
          <ul>
            <li <?php if ($currentPage == 'acceuilCO') {echo ' id="en-cours"';} ?>class="left__nav-item left__nav-link:hover"><a  href="privatespace.php?page=acceuilCO" class="left__nav-link">Acceuil</a></li>
            <li <?php if ($currentPage == 'bibliothèque') {echo ' id="en-cours"';} ?>class="left__nav-item left__nav-link:hover"><a href="privatespace.php?page=bibliothèque" class="left__nav-link">Bibliothèque</a></li>
            <li <?php if ($currentPage == 'mesLivres') {echo ' id="en-cours"';} ?>class="left__nav-item left__nav-link:hover"><a href="privatespace.php?page=mesLivres" class="left__nav-link">Mes Livres</a></li>
            <li <?php if ($currentPage == 'mesEmprunts') {echo ' id="en-cours"';} ?>class="left__nav-item left__nav-link:hover"><a href="privatespace.php?page=mesEmprunts" class="left__nav-link">Mes emprunts</a></li>
            <li <?php if ($currentPage == 'profil') {echo ' id="en-cours"';} ?>class="left__nav-item left__nav-link:hover"><a href="privatespace.php?page=profil" class="left__nav-link">Profil</a></li>
            <li <?php if ($currentPage == 'deconnexion') {echo ' id="en-cours"';} ?>class="left__nav-item left__nav-link:hover"><a href="privatespace.php?page=deconnexion" class="left__nav-link">Déconnexion</a></li>
          </ul>
        </nav>
      </header>
