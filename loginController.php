<?php

require __DIR__.'/inc/db.php';

session_start();
//print_r($_POST);

if (isset($_POST['usermail']) && isset($_POST['password']))
{

    $dbConnexion = new DB ;
    $pdo = $dbConnexion->getPdo();

    print_r($_POST);
    //die;

    if($_POST['usermail']!=="" && $_POST['password']!==""){

        $pdoConnexionSecured = $pdo->prepare("SELECT * FROM administres WHERE `emailAdministre`=:email and `password`=:password");
        $pdoConnexionSecured->bindValue(':email', $_POST['usermail']);
        $pdoConnexionSecured->bindValue(':password', $_POST['password']);


        $pdoConnexionSecured->execute();
        $result = $pdoConnexionSecured->fetch(PDO::FETCH_ASSOC);
        print_r($result);
        var_dump($result);

        $_SESSION['owner'] = $result['idAdministre'];
        $_SESSION['dispo'] = $result['disponible'];

        if ($result != 0) {
            $_SESSION['name'] = $result['prenomAdministre'];
    
            //die;
            header('Location: privatespace.php');
        } 
        else {
            header('Location: connexion.php?erreur=1');
        }   
    } 
    else {
        // fonction header me permet de faire une redirection cf la documentation : https://www.php.net/manual/fr/function.header.php
        header('Location: connexion.php?erreur=1');
    }
} 
else {
    header('Location: connexion.php');
}