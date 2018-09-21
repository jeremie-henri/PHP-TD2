<html>
<?php
/**
 * Created by PhpStorm.
 * User: h17004901
 * Date: 21/09/2018
 * Time: 10:50
 */
include 'utils.inc.php';
start_page('FORMULAIRE');

/*echo getenv('REMOTE_ADDR') . '<br/>' . getenv('HTTP_HOST'). '<br/>' . getenv('SERVER_SOFTWARE').'<br/>';
*/
echo '<form action="data-processing.php" method="post">';
echo 'Identifiant :   <input type="text" name="Identifiant"/><br/>';
echo '<input type="radio" name="Civilité" value="H" checked/>Homme'.'<input type="radio" name="Civilité" value="F" />Femme<br/>';
echo 'Mail :   <input type="text" name="mail"/><br/>';
echo 'Mdp :    <input type="password" name="mdp"/><br/>';
echo 'Telephone :   <input type="text" name="Tel"/><br/>';

echo 'Pays :<select name="Pays">';
echo'<option value="F">France</option>';
echo'<option value="J">Japon</option>';
echo'<option value="A">Amerique</option>';
echo '</select><br/>';

echo 'Condition General :   '.'<input type="checkbox" name="cookies"/><br/>';
echo 'Soumission :   '.'<input type="submit" name="action" value="mailer"/><br/>';
echo '</form>';


end_page();
?>
</html>
