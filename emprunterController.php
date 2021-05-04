
<?php session_start();
 if (empty($_SESSION)) : ?>
    <h1>Vous n'êtes pas autorisé à voir cette page</h1>  
    <a href="index.php" class="btn btn-info offset-md-80">Me connecter</a>      
    <?php else :?>
        <?php $currentPage = 'emprunter';
require __DIR__.'/inc/db.php'; 
require __DIR__."/inc/header.tpl.php";

require __DIR__.'/view/emprunt.tpl.php'; 



$dbConnexion = new DB; 
$pdo = $dbConnexion->getPdo();
$owner = $_SESSION['owner']; 


print_r($_POST);


if($_POST['idOuvrage']!=="" && $_POST['titre']!==""){

    $pdoConnexionSecured2 = $pdo->prepare("SELECT * FROM ouvrages WHERE `idOuvrage`=:idOuvrage and `idAdministre`=:$owner");
    $pdoConnexionSecured2->bindValue(':idOuvrage', $_POST['idOuvrage']);
    $pdoConnexionSecured2->bindValue(':titreOuvrage', $_POST['titre']);
    $pdoConnexionSecured2->bindValue(':auteur', $_POST['auteur']);

    $pdoConnexionSecured2->execute();
    
    $pdoStatement = $pdo->query($sql);
    $bookList = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);

    $result = $pdoConnexionSecured2->fetch(PDO::FETCH_ASSOC);
    


        if ($result[':disponible'] == "OUI" ) {

            if ($_POST['idOuvrage']== $book['idOuvrage']){

                $titre = $_POST['titre'];
                $auteur = $_POST['auteur'];
                $idOuvrage = $_POST['idOuvrage'];
            
                $insertQuery = "INSERT into `emprunter` (idAdministre, idOuvrages, titreOuvrage, 
                auteur)
                VALUES ({$owner}, '{$idOuvrage}', '{$titre}', '{$auteur}');
                ";
        
                $pdoStatement = $pdo->exec($insertQuery);
        
                header('Location: borrowed.php');
        
                }
                
                else { echo "<h2>Erreur: ID Ouvrages que vous avez saisis ne correspondent pas. Veuillez réessayer</h2>" ;
                
                }
        
           

            //die;
            header('Location: borrowed.php');
        } 
        else {
            echo('Le Livre est ne pas disponible');
        }   
    } 
    else {
        // fonction header me permet de faire une redirection cf la documentation : https://www.php.net/manual/fr/function.header.php
        echo('');
    }

 endif ;
 
 ?> 