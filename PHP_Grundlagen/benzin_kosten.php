<?php
// Tankfüllung in Liter
$liter1 = 40.5;
$liter2 = 35.7;

// Preis pro Liter
$preis = 1.499;

// Gesamtkosten berechnen
$kosten = ($liter1 + $liter2) * $preis;

// Ergebnis ausgeben
echo "Die Benzinkosten betragen für " . ($liter1 + $liter2) . " Liter " . $kosten . " €.";
?>