<?php
// Eingabewerte aus dem Formular holen
$liter1 = $_POST['liter1'];
$liter2 = $_POST['liter2'];
$preis = $_POST['preis'];

// Überprüfen, ob Eingaben Zahlen sind
if (is_numeric($liter1) && is_numeric($liter2) && is_numeric($preis)) {
    // Kostenermittlung
    $kosten = ($liter1 + $liter2) * $preis;
    
    // Ergebnisanzeige
    echo "Die Benzinkosten betragen für " . ($liter1 + $liter2) . " Liter " . $kosten . " €";
} else {
    echo "Bitte geben Sie gültige Zahlen ein.";
}
?>
