<?php

$nota1 = 9;
$nota2 = 7;
$nota3 = 8;
$media = (($nota1 + $nota2 + $nota3)/3);

if($media >= 7) { 
    echo "aprovado";
} 
elseif (($media < 7) && ($media >= 4)) {
    echo "prova final";
}
else {
    echo "reprovado";
}
?>












?>