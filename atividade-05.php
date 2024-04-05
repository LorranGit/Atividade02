<?php

$numSecreto = rand(1, 100);
echo "Tente adivinhar o número secreto (entre 1 e 100):\n";
while (true) {
    echo "Digite o seu palpite: ";
    $palpite = intval(readline());

    if ($palpite === $numSecreto) {
        echo "Parabéns! Você acertou o número secreto.\n";
        break;
    } elseif ($palpite < $numSecreto) {
        echo "Tente um número maior.\n";
    } else {
        echo "Tente um número menor.\n";
    }
}
?>
