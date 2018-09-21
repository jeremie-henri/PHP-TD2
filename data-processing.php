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
    $cookies = $_POST['cookies'];
    $action = $_POST['action'];

    if ($action == 'mailer')
    {
        $message = 'Voici vos identifiants d\'inscription :'.$identifiant . PHP_EOL;
        $message .= 'Email : ' . $mail . PHP_EOL;
        $message .= 'Mot de passe : ' . PHP_EOL . $mdp;
        echo $message;

        $to = 'jeremimiehenri+php@gmail.com';
        $from = 'jeremimiehenri@gmail.com';
        $reply = 'reply_mail@fai.org';
        $subject = 'Test mail';
        $bndary = md5(uniqid(mt_rand()));
        $headers = 'From: Name <' . $from . '>' . "\n";
        $headers .= 'Return-Path: <' . $reply . '>' . "\n";
        $headers .= 'Content-type: multipart/alternative; boundary="' . $bndary. '"';
        $message_text = 'Hello world!';
        $message_html = '<html><body><strong>Hello world!</strong></body></html>';
        $message = '--' . $bndary . "\n";
        $message .= 'Content-Type: text/plain; charset=utf-8' . "\n\n";
        $message .= $message_text . "\n\n";
        $message .= '--' . $bndary . "\n";
        $message .= 'Content-Type: text/html; charset=utf-8' . "\n\n";
        $message .= $message_html . "\n\n";

        mail($to, $subject, $message, $headers);

    }
    else
    {
        echo '<br/><strong>Bouton non gere !</strong><br/>';
    }
}
?>