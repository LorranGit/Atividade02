<?php
function fibonacci() {
    $fibonacci = [0, 1];
    for ($i = 2; $i < 10; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return $fibonacci;
}
$fibonacci = fibonacci();
echo "Os primeiros 10 números da sequência de Fibonacci são: " . implode(', ', $fibonacci) . "\n";

?>
