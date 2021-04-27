<?php 

if (!empty($_GET['order'])) {
    
    $order = trim($_GET['order']);
    if ($order == 'titre') {
        $sqlBiblio = 'SELECT * FROM `ouvrages` ORDER BY `titreOuvrage` ASC';
    }
    else if ($order == 'auteur') {
        $sqlBiblio = 'SELECT * FROM `ouvrages` ORDER BY `auteur` ASC';  
    }
}
$pdoStatement = $pdo->query($sqlBiblio);
$bookList = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);