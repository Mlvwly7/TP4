<?php
$hostnom = 'host=btssio.dedyn.io';
$usernom = 'KHIMMOL';
$password = '26/01/2003';
$bdd = 'KHIMMOL_Bibliothèque';

try {
    $monPdo = new PDO("mysql:$hostnom;dbname=$bdd;charset=utf8", $usernom, $password);
    $monPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
    $monPdo = null;
}
?>