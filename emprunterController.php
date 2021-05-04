
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

$dbConnexion = new DB; 

$pdo = $dbConnexion->getPdo();
$owner = $_SESSION['owner']; 


if($_POST['idOuvrageEmprunt']!=="" && $_POST['titreEmprunt']!==""){

    $pdoConnexionSecured3 = $pdo->prepare("SELECT * FROM ouvrages WHERE `idOuvrage`=:idOuvrageEmprunt and `idAdministre`=:$owner");
    $pdoConnexionSecured3->bindValue(':idOuvrage', $_POST['idOuvrageEmprunt']);
    $pdoConnexionSecured3->bindValue(':titreOuvrage', $_POST['titreEmprunt']);
    $pdoConnexionSecured3->bindValue(':auteur', $_POST['auteurEmprunt']);

    $pdoConnexionSecured3->execute();
    
    $pdoStatement = $pdo->query($sql);
    
    $bookList = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);

    $result = $pdoConnexionSecured3->fetch(PDO::FETCH_ASSOC);

    

        if ($result[':disponible'] == "OUI" ) {

            if ($_POST['idOuvrageEmprunt']== $book['idOuvrage']){

                $titre = $_POST['titreEmprunt'];
                $auteur = $_POST['auteurEmprunt'];
                $idOuvrage = $_POST['idOuvrageEmprunt'];
            
                $insertQuery = "INSERT into `emprunter` (idAdministre, idOuvrages, titreOuvrage, 
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
 else { echo "" ;
                
 }
 endif ;
 ?> 
    