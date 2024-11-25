<?php

$texte = "Hello World";
$entier = 42;
$booleen = true;

echo "Variable texte: " . $texte . "\n";
echo "Variable entier: " . $entier . "\n";
echo "Variable booléen: " . ($booleen ? "true" : "false") . "\n";

echo "Nombres pairs entre 1 et 20:\n";
for ($nombre = 1; $nombre <= 20; $nombre++) {
    if ($nombre % 2 == 0) {
        echo $nombre . "\n";
    }
}
?>
