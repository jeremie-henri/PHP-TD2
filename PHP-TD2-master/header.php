<?php
/**
 * Created by PhpStorm.
 * User: h17004901
 * Date: 02/10/2018
 * Time: 13:55
 */
session_start();

if($_SESSION['login'] != 'ok'){
    die('t qui toi ?');
}
    echo '<!DOCTYPE html><html lang="fr">';
    echo '<title>Site Ultra Secret</title>' . '<h1>Ézéchiel 25:17</h1>' . '<p>

La marche des vertueux est semée d\'obstacles
Qui sont les entreprises égoïstes
Que fait sans fin surgir l\'œuvre du malin.

Béni soit-il l\'homme de bonne volonté qui,
Au nom de la charité se fait le berger des faibles
Qu\'il guide dans la vallée d\'ombre, de la mort et des larmes
Car il est le gardien de son frère
Et la providence des enfants égarés.

J\'abattrai alors le bras d\'une terrible colère
D\'une vengeance furieuse et effrayante
Sur les hordes impies qui pourchassent et réduisent à néant les brebis de Dieu.

Et tu connaîtras pourquoi mon nom est l\'Éternel quand sur toi
S\'abattra la vengeance du Tout-Puissant.</p>';
    echo '<img src="sam.jpg" alt="Trulli" width="500" height="333">'

?>