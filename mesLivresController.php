
<?php 

if (!empty($_GET['order'])) {
    
    $order = trim($_GET['order']);
    if ($order == 'titre') {
        $sqlMesLivres = 'SELECT * from ouvrages WHERE  idAdministre = ' .$owner .' ORDER BY titreOuvrage ASC
        ';
    }
    else if ($order == 'auteur') {
        $sqlMesLivres = 'SELECT * FROM `ouvrages` where `idAdministre` = '.$owner.' ORDER BY `auteur` ASC';  
    }
}

$pdoStatement = $pdo->query($sqlMesLivres);
$bookList = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);







