<?php
/**
 * Created by PhpStorm.
 * User: h17004901
 * Date: 21/09/2018
 * Time: 11:18
 */

if(isset($_POST['Identifiant']) AND isset($_POST['mail']) AND isset($_POST['mdp']) AND isset($_POST['Tel']) AND isset($_POST['Pays']) AND isset($_POST['cookies'])) {
    $identifiant = $_POST['Identifiant'];
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];
    $tel = $_POST['Tel'];
    $pays = $_POST['Pays'];
    $today = date('Y-m-d');
    $cookies = $_POST['cookies'];
    $action = $_POST['action'];
    $id = $id+4;

    if ($action == 'mailer')
    {
        $link = mysqli_connect('mysql-elvex.alwaysdata.net', 'elvex', '123')
        or die('Pb de connexion au serveur: ' . mysqli_connect_error());

        mysqli_select_db($link ,'elvex_2')
        or die('Erreur dans la sélection de la base : ' . mysqli_error($link));

        $query = 'INSERT INTO user (DATE,MAIL_USER,ID_USER,ID) VALUES (\'' . $today . '\', \''. $mail . '\', \''. $identifiant . '\', \''. $id . '\')';
        if(!($dbResult = mysqli_query($link, $query)))
        {
            echo 'Erreur dans requête<br />';

            echo 'Erreur : ' . mysqli_error($link) . '<br/>';

            echo 'Requête : ' . $query . '<br/>';
            exit();
        }
    }
    else
    {
        echo '<br/><strong>Bouton non gere !</strong><br/>';
    }
}
?>