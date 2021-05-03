
<?php session_start();
 if (empty($_SESSION)) : ?>
    <h1>Vous n'êtes pas autorisé à voir cette page</h1>  
    <a href="index.php" class="btn btn-info offset-md-80">Me connecter</a>      
    <?php else :?>
        <?php $currentPage = 'mesEmprunts';

require __DIR__.'/inc/db.php'; 





$dbConnexion = new DB; 
$pdo = $dbConnexion->getPdo();
$owner = $_SESSION['owner']; 
$_SESSION['name'] = $result['prenomAdministre'];

print_r($_POST);


if($_POST['idOuvrage']!=="" && $_POST['titre']!==""){

    $pdoConnexionSecured2 = $pdo->prepare("SELECT * FROM ouvrages WHERE `idOuvrage`=:idOuvrage and `idAdministre`=:$owner");
    $pdoConnexionSecured2->bindValue(':idOuvrage', $_POST['idOuvrage']);
    $pdoConnexionSecured2->bindValue(':titreOuvrage', $_POST['titre']);
    $pdoConnexionSecured2->bindValue(':auteur', $_POST['auteur']);


    $pdoConnexionSecured2->execute();

    $result = $pdoConnexionSecured2->fetch(PDO::FETCH_ASSOC);

   

    print_r($result);
    var_dump($result);


        if ($result[':diponible'] == "OUI" ) {

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



$sql = 'SELECT * FROM `emprunter` where `idAdministre` = ' .$owner;
// Si un tri a été demandé, on réécrit la requête
if (!empty($_GET['ordermesemprunts'])) {
    // Récupération du tri choisi
    $ordermesemprunts = trim($_GET['ordermesemprunts']);
    if ($ordermesemprunts == 'titre') {
        // TODO #2 écrire la requête avec un tri par titre croissant
        $sql = 'SELECT * from `ouvrages` WHERE  `idAdministre` = ' .$owner .' 
        ORDER BY `titreOuvrage` ASC
        ;';
    }
    else if ($ordermesemprunts == 'auteur') {
        // TODO #2 écrire la requête avec un tri par autheur croissant
        $sql = 'SELECT * from `epmrunter` WHERE  `idAdministre` = ' .$owner .'
        ORDER BY `auteur` ASC 
        ;';
    }
}



$pdoStatement = $pdo->query($sql);
$bookList = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);

require __DIR__."/inc/header.tpl.php";


// Inclusion du fichier s'occupant d'afficher le code HTML
require __DIR__."/view/mesEmprunts.tpl.php";

require __DIR__."/inc/footer.tpl.php";

?>
<?php endif; ?> 
