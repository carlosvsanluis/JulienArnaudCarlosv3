
<?php 

//Start session from login controller, privatesspace.php

session_start();
 if (empty($_SESSION)) : ?>
    <h1>Vous n'êtes pas autorisé à voir cette page</h1>  
    <a href="index.php" class="btn btn-info offset-md-80">Me connecter</a>      
    <?php else :?>
        <?php $currentPage = 'emprunter';

require __DIR__.'/inc/db.php'; 
require __DIR__."/inc/header.tpl.php";

require __DIR__.'/view/emprunter.tpl.php'; 



if (isset($_POST['idOuvrageEmprunt']) && isset($_POST['titreEmprunt'])){
    
$dbConnexion = new DB; 

$pdo = $dbConnexion->getPdo();
$owner = $_SESSION['owner']; 


//var_dump(+$owner);
//var_dump($owner);
////var_dump($_POST['idOuvrageEmprunt']);
//var_dump($_POST['titreEmprunt']);

    if($_POST['idOuvrageEmprunt']!=="" && $_POST['titreEmprunt']!==""){

   

    $pdoConnexionSecured = $pdo->prepare("SELECT * FROM ouvrages WHERE idOuvrage=:idOuvrageEmprunt and idAdministre=:owner"); 
    $pdoConnexionSecured->bindValue(':idOuvrageEmprunt', +$_POST['idOuvrageEmprunt']); //Added + to make your param an INT since idOuvrage is expecting and int, not a string. 
    $pdoConnexionSecured->bindValue(':owner', +$owner);


    $pdoConnexionSecured->execute();
    
    //$pdoStatement = $pdo->query($sql);
    
    //$bookList = $pdoStatement->fetchAll(PDO::FETCH_ASSOC); 

    $result = $pdoConnexionSecured->fetch(PDO::FETCH_ASSOC);

    echo "<br>";
   

        if ($result['disponible'] == "OUI" ) { 

            if ($_POST['idOuvrageEmprunt']== $result['idOuvrage']){ 

                $owner = $_SESSION['owner']; 
                $titre = $_POST['titreEmprunt'];
                $auteur = $_POST['auteurEmprunt'];
                $idOuvrage = $_POST['idOuvrageEmprunt'];
            
                $insertQuery = "INSERT into `emprunter` (idAdministre, idOuvrage, titreOuvrage, 
                auteur)
                VALUES ({$owner}, '{$idOuvrage}', '{$titre}', '{$auteur}');
                ";
                $pdoStatement = $pdo->exec($insertQuery);
                header('Location: borrowed.php');
            }
            else { echo "<h2>Erreur: ID Ouvrages que vous avez saisis ne correspondent pas. Veuillez réessayer</h2>" ;  

            }
        }
        else { echo "Erreur: Le Ouvrage ne sont pas disponible. Veuillez réessayer</h2>" ;
        }        
    }

}  
 else { echo "" ;
 }
 
 endif
 ?>
 <? require __DIR__."/inc/footer.tpl.php";?>
 