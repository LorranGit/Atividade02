<?php
function calcularIMC($peso, $altura) {
    return $peso / ($altura * $altura);
}
echo "Digite o seu peso (em kg): ";
$peso = floatval(readline());
echo "Digite a sua altura (em metros): ";
$altura = floatval(readline());
$imc = calcularIMC($peso, $altura);
echo "Seu IMC é: $imc\n";
if ($imc < 18.5) {
    echo "Você está abaixo do peso.\n";
} elseif ($imc < 25) {
    echo "Seu peso está normal.\n";
} elseif ($imc < 30) {
    echo "Você está com sobrepeso.\n";
} else {
    echo "Você está obeso.\n";
}
?>
