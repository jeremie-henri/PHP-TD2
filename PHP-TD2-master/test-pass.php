<?php
/**
 * Created by PhpStorm.
 * User: h17004901
 * Date: 02/10/2018
 * Time: 13:41
 */

include 'erreur.php';
session_start();
$_SESSION['login'];

    if (isset($_POST['Identifiant']) AND isset($_POST['mdp'])) {

        $login = $_POST['Identifiant'];
        $mdp = $_POST['mdp'];

        $link = mysqli_connect('mysql-elvex.alwaysdata.net', 'elvex', '123')
        or die('Pb de connexion au serveur: ' . mysqli_connect_error());

        mysqli_select_db($link, 'elvex_2')
        or die('Erreur dans la sélection de la base : ' . mysqli_error($link));
        $query = 'SELECT ID_USER,MDP_USER FROM user WHERE ID_USER=\'' . $login . '\' AND MDP_USER =\'' . $mdp . '\'';

        if (!($dbResult = mysqli_query($link, $query))) {
            echo 'Erreur dans requête<br />';

            echo 'Erreur : ' . mysqli_error($link) . '<br/>';

            echo 'Requête : ' . $query . '<br/>';
            exit();
        }

        $dbRow = mysqli_fetch_array($dbResult);
        $id_valide = $dbRow['ID_USER'];
        $mdp_valide = $dbRow['MDP_USER'];


        if ($login == $id_valide && $mdp == $mdp_valide && ($login != null && $mdp != null)) {

            $_SESSION['login'] = 'ok';
            header('Location: header.php');
        } else {
            $_SESSION['login'] = 'non';
            header('Location: login.php?step=ERROR');
        }
    }
    else {
        $_SESSION['login'] = 'non';
        start_page('erreur');
    }
?>