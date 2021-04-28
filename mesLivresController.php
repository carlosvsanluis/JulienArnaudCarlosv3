
<?php session_start();
 if (empty($_SESSION)) : ?>
    <h1>Vous n'êtes pas autorisé à voir cette page</h1>  
    <a href="index.php" class="btn btn-info offset-md-80">Me connecter</a>      
    <?php else :?>
        <?php $currentPage = 'mesLivres';

require __DIR__.'/inc/db.php'; 

$dbConnexion = new DB; 
$pdo = $dbConnexion->getPdo();
$owner = $_SESSION['owner'];
$sql = 'SELECT * FROM `ouvrages` where `idAdministre` = ' .$owner;
// Si un tri a été demandé, on réécrit la requête
if (!empty($_GET['ordermeslivres'])) {
    // Récupération du tri choisi
    $ordermeslivres = trim($_GET['ordermeslivres']);
    if ($ordermeslivres == 'titre') {
        // TODO #2 écrire la requête avec un tri par titre croissant
        $sql = 'SELECT * from `ouvrages` WHERE  `idAdministre` = ' .$owner .' 
        ORDER BY `titreOuvrage` ASC
        ;';
    }
    else if ($ordermeslivres == 'auteur') {
        // TODO #2 écrire la requête avec un tri par autheur croissant
        $sql = 'SELECT * from `ouvrages` WHERE  `idAdministre` = ' .$owner .'
        ORDER BY `auteur` ASC 
        ;';
    }
}



$pdoStatement = $pdo->query($sql);
$bookList = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);

require __DIR__."/inc/header.tpl.php";


// Inclusion du fichier s'occupant d'afficher le code HTML
require __DIR__."/view/mesLivres.tpl.php";

require __DIR__."/inc/footer.tpl.php";

?>
<?php endif; ?> 




