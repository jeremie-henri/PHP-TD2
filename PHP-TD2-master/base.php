<?php
$link = mysqli_connect('mysql-elvex.alwaysdata.net', 'elvex', '123')
or die('Pb de connexion au serveur: ' . mysqli_connect_error());


mysqli_select_db($link ,'elvex_2')
or die('Erreur dans la sélection de la base : ' . mysqli_error($link));

$query = 'SELECT ID, MAIL_USER, DATE FROM user';


if(!($dbResult = mysqli_query($link, $query))) {
    echo 'Erreur de requête<br/>';
    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
    echo 'Requête : ' . $query . '<br/>';
    exit();
}
while($dbRow = mysqli_fetch_assoc($dbResult))
{
    echo $dbRow['ID'] . '<br/>';
    echo $dbRow['MAIL_USER'] . '<br/>';
    echo date('d.m.Y', strtotime($dbRow['DATE'])); '<br/>';
    echo '<br/><br/>';

}
?>