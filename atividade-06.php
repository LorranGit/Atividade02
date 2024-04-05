<?php

function bubbleSort($array) {
    $n = count($array);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    return $array;
}
$array = [999, 80, 500, 10000, 102, 01];
echo "Array antes da ordenação: " . implode(', ', $array) . "\n";
$arrayOrdenado = bubbleSort($array);
echo "Array ordenado: " . implode(', ', $arrayOrdenado) . "\n";

?>
