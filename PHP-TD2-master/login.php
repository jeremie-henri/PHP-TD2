<?php
/**
 * Created by PhpStorm.
 * User: h17004901
 * Date: 02/10/2018
 * Time: 13:41
 */

$step=$_GET['step'];
if ($step == NULL){
    header('Location: login.php?step=LOGIN');
}
session_unset();
echo $step;

echo '<form action="test-pass.php" method="post">';
echo 'Identifiant :   <input type="text" name="Identifiant"/><br/>';
echo 'Mdp :    <input type="password" name="mdp"/><br/>';
echo 'Soumission :   '.'<input type="submit" name="action" value="ok"/><br/>';
echo '</form>';
?>