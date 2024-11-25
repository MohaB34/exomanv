<?php

function verifierAge($age) {
    if ($age >= 18) {
        return "Majeur";
    } else {
        return "Mineur";
    }
}

$age = 20;
echo "L'âge $age correspond à : " . verifierAge($age) . "\n";
?>
