<?php
echo "Definição de constantes no PHP";
echo "<br>";
define("ACELERACAO_GRAVIADE", 9.8);

echo "A aceleração da gravidade é: " , ACELERACAO_GRAVIADE , " m/s"

echo "<br>"

echo "Considerando que F = m * a, exiba o valor de F para o valor de m e a 
m= 101 e acelaração é a constante definida acima. ";

$m = 101;

$F = $m * ACELERACAO_GRAVIADE;
echo "<br>"
echo "A Força é de: $F N";

echo "<br>";
echo "<hr>";

echo "Atribuição de variáveis";

echo " " .$var = 1;  /**Primeira forma comentar direto a variável ou */
echo "<br>"
$var +=2;
echo"<br>"
echo $var;  /**Segunda forma */
echo "<br>"
echo " " .$var -=2;
echo"<br>"
echo " " .$var *=2;
echo " " .$var /=2;

 
?>