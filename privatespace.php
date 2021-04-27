
<?php session_start();
 if (empty($_SESSION)) : ?>
    <h1>Vous n'êtes pas autorisé à voir cette page</h1>  
    <a href="index.php" class="btn btn-info offset-md-80">Me connecter</a>      
    <?php else :?>
<?php 
$currentPage = 'profil';
if (isset ($_GET['page'])){   
    $currentPage = $_GET['page'];
}
require __DIR__.'/inc/db.php';
$dbConnexion = new DB; 
$pdo = $dbConnexion->getPdo();
$sqlBiblio = 'SELECT * FROM `ouvrages` ';
$owner = $_SESSION['owner'];
$sqlMesLivres = 'SELECT * FROM `ouvrages` where `idAdministre` = '.$owner;
require __DIR__."/".$currentPage."Controller.php";
require __DIR__."/inc/header.tpl.php";
require __DIR__.'/view/'.$currentPage.".tpl.php";
require __DIR__."/inc/footer.tpl.php";
endif?>



