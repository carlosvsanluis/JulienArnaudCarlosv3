
<?php session_start();
 if (empty($_SESSION)) : ?>
    <h1>Vous n'êtes pas autorisé à voir cette page</h1>  
    <a href="index.php" class="btn btn-info offset-md-80">Me connecter</a>      
    <?php else :?>
        <?php $currentPage = 'mesinfos';?>
<?php

require __DIR__.'/inc/db.php'; 

$dbConnexion = new DB ;
$pdo = $dbConnexion->getPdo();


    print_r($_POST);

    $dbConnexion = new DB; 
    $pdo = $dbConnexion->getPdo();

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $telephone = $_POST['telephone'];
    $adresse = $_POST['adresse'];
    $email = $_POST['email'];
    
    $idSession = $_SESSION['owner'];
    
  
    if(isset($nom))
    {

    $updateQuery = "UPDATE `administres` SET `nomAdministre` = '{$nom}', `prenomAdministre` = '{$prenom}', 
    `telephoneAdministre` = '{$telephone}', `emailAdministre` = '{$email}', 
    `adresseAdministre` = '{$adresse}' WHERE `administres`.`idAdministre` = '{$idSession}'";
    
    $pdoStatement = $pdo->exec($updateQuery);

    header('Location: subscribed.php');
    }
    
    else { 
    echo ("<h2>Veuillez réessayer</h2>") ;
    
    }

    ?>
    <?php endif; ?> 