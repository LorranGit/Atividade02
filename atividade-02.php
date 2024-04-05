<?php
function imprimirDivisores($numero) {
    echo "Divisores de $numero: ";

    for ($i = 1; $i <= $numero; $i++) {

        if ($numero % $i == 0) {

            echo "$i ";
        }
    }
    echo "\n";
}
echo "Por favor, insira um número inteiro positivo: ";
$numero = intval(readline());
if ($numero > 0) {
    imprimirDivisores($numero);
} else {
    echo "Por favor, insira um número inteiro positivo válido.\n";
}
?>
