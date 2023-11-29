<?php 
  # Écrivez une fonction qui prend en paramètre un tableau de nombres. 
# La fonction doit renvoyer un nouveau tableau contenant les mêmes 
# nombres, mais dans l'ordre inverse. 
# Affichez le tableau original et le tableau inversé dans le terminal 


$list = array("1","2","3","4","5");
echo $list ["0"] . "\n";
echo $list ["1"] . "\n";
echo $list ["2"] . "\n";
echo $list ["3"] . "\n";
echo $list ["4"] . "\n";

/*$i = 0;
for (($i=0; $i <=1; $i--) )$list{
    echo $list \n";
}*/

function inverserTableau($tableau) {
    return array_reverse($tableau);
}
$resultTaboriginal = $list;
echo " $resultTaboriginal, $inverserTableau"; 



?>

