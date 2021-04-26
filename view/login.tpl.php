<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css\style.css" media="screen" type="text/css">

    <title>Connexion</title>
  </head>
  <?php

//Random Background 
      $bg = array('bg1.jpg', 'bg2.jpg', 'bg3.jpg', 'bg4.jpg', 'bg5.jpg', 'bg6.jpg'); // array of filenames
       $i = rand(0, count($bg)-1); // generate random number size of the array
       $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>
    <style type="text/css">
      <!--
        body{
        color: black;
        background: url(docs/<?php echo $selectedBg; ?>) no-repeat;
      

        }
      -->
    </style>


  
  <body>
    <div id="container">
        <form action="loginController.php" method="POST">
            <h1>Connexion</h1>
            <label><strong>E-mail utilisateur</strong></label>
            <input type="text" placeholder="Entrer votre E-mail utilisateur" name="usermail" required>
            <label><strong>Mot de passe</strong></label>
            <input type="password" placeholder="Entrer votre mot de passe" name="password" required>
            <input type="submit" value="LOGIN">
            <a href="index.php" class="btn btn-info offset-md-80">Retour</a>
            <?php 
            if (isset($_GET['erreur'])) {
              $erreur = $_GET['erreur'];
              if($erreur == 1){
                echo "<p style='color: red'> Utilisateur ou mot de passe incorrect</p>";
              }
            }
            ?>

        </form>
    </div>
  </body>
</html>