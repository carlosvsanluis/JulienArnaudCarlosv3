<?php session_start();


$currentPage = 'prive';   


// Je vérifie que ma super globale contient une valeur et que cette valeur est stockée dans une clé "page"
if (isset ($_GET['page'])){
    // je veux récupérer la valeur stockée dans la clé page de $_GET. Cette valeur va me permettre d'appeler la bonne template.
    $currentPage = $_GET['page'];
}


require __DIR__."/inc/header.tpl.php";

require __DIR__.'/view/'.$currentPage.".tpl.php";

require __DIR__."/inc/footer.tpl.php"
?>