<?php
# Écrire une fonction qui prend une chaîne de caractères en paramètre
# et retourne "longue" si la longueur de la chaîne est supérieure à 10,
# sinon "courte".
# Ensuite, affichez le résultat suivi d'un saut de ligne.



$text = "Excalibur est une épée incroyable !";

function determinerLongueur($text){
if (iconv_strlen($text) > 10){
    return"la phrase est longue. \n";
}
else {
    return"la phrase est courte. \n";}
}
$result = determinerLongueur($text);
echo "La phrase  $result. \n";


?>






?>