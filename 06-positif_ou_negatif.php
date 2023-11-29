<?php
/*
# Écrire une fonction qui prend un nombre en paramètre
# et return "positif" si le nombre est positif, ou bien "négatif" si le nombre
# est negatif ou "nul" si le nombre est null.
# Ensuite, affichez le résultat suivi d'un saut de ligne.
*/

$number = 5;

function param($number)
{
if($number > 0){
    return "$number est positif \n";
}
elseif($number < 0 | $number = 0){
return "$number est négatif \n";
}
else {
    return "$number est nul \n";
}

}
$result = param($number);
echo " le résultat est $result \n" ;

?>



?>