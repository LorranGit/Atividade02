<?php
function catsay($message) {
    $lines = explode("\n", wordwrap($message, 40, "\n"));
    $maxLength = max(array_map('strlen', $lines));
    echo " " . str_repeat("_", $maxLength + 2) . "\n";
    foreach ($lines as $line) {
        printf("< %s%s >\n", $line, str_repeat(" ", $maxLength - strlen($line)));
    }
    echo " " . str_repeat("-", $maxLength + 2) . "\n";
    echo "   \\      /\\_/\\ \n";
    echo "   (  o.o )  >    \n";
    echo "    > ^ <   // \n";
}
$message = "Olá! Este é o catsay em PHP. Desenvolvido pelos Corujinhas.";
catsay($message);

?>
