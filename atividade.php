<?php
function tabuada($numero) {
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado\n";
    }
}
echo "Por favor, insira um número inteiro positivo: ";
$numero = intval(readline());
if ($numero > 0) {
    tabuada($numero);
} else {
    echo "Por favor, insira um número inteiro positivo válido.\n";
}
?>
