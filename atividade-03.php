<?php
$numbers = [2, 6, 10, 20, 42, 50, -200];
$sum = 0;
$count = 0;
foreach ($numbers as $number) {
    if ($number < 0) {
        break;
    }
    if ($number >= 0) {
        $sum += $number;
        $count++;
    }
}
if ($count > 0) {
    $average = $sum / $count;
    echo "A média dos valores positivos é: $average\n";
} else {
    echo "Nenhum número positivo foi fornecido.\n";
}
?>
