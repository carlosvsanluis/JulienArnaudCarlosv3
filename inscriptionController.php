<?php

require __DIR__.'/inc/db.php';

$dbConnexion = new DB; 

$pdo = $dbConnexion->getPdo();

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $telephone = $_POST['telephone'];
    $adresse = $_POST['adresse'];
    $email = $_POST['email'];
    $npassword = $_POST['npassword'];
    $password2 = $_POST['password2'];
    

    $insertQuery = "INSERT into `administres` (idAdministre, nomAdministre, prenomAdministre, 
    telephoneAdministre, emailADministre, adresseAdministre, password)
    VALUES (NULL, '{$nom}', '{$prenom}', '{$telephone}', '{$adresse}', '{$email}',
    '{$npassword}');
    ";
    $pdoStatement = $pdo->exec($insertQuery);

  
  





