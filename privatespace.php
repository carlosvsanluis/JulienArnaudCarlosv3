
<?php session_start();
 if (empty($_SESSION)) : ?>
    <h1>Vous n'êtes pas autorisé à voir cette page</h1>  
    <a href="index.php" class="btn btn-info offset-md-80">Me connecter</a>      
    <?php else :?>
        <?php $currentPage = 'prive';


// Je vérifie que ma super globale contient une valeur et que cette valeur est stockée dans une clé "page"
if (isset ($_GET['page'])){
    // je veux récupérer la valeur stockée dans la clé page de $_GET. Cette valeur va me permettre d'appeler la bonne template.
    $currentPage = $_GET['page'];
}
require __DIR__.'/inc/db.php'; // Pour __DIR__ => http://php.net/manual/fr/language.constants.predefined.php
// Rappel : la variable $pdo est disponible dans ce fichier
//          car elle a été créée par le fichier inclus ci-dessus
$dbConnexion = new DB; 
$pdo = $dbConnexion->getPdo();
$sql = 'SELECT * FROM `ouvrages` 
';
// Si un tri a été demandé, on réécrit la requête
if (!empty($_GET['order'])) {
    // Récupération du tri choisi
    $order = trim($_GET['order']);
    if ($order == 'titre') {
        // TODO #2 écrire la requête avec un tri par titre croissant
        $sql = 'SELECT * from `ouvrages`
        ORDER BY `titreOuvrage` ASC
        ';
    }
    else if ($order == 'auteur') {
        // TODO #2 écrire la requête avec un tri par autheur croissant
        $sql = 'SELECT * from `ouvrages`
        ORDER BY `auteur` ASC 
        ';
    }
}
$pdoStatement = $pdo->query($sql);
$bookList = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);

require __DIR__."/inc/header.tpl.php";


// Inclusion du fichier s'occupant d'afficher le code HTML
require __DIR__.'/view/'.$currentPage.".tpl.php";

require __DIR__."/inc/footer.tpl.php";

?>
<?php endif; ?> 




