<?php
$owner = $_SESSION['owner'];
$sql = 'SELECT * FROM `ouvrages` where `idAdministre` = ' .$owner;
?>