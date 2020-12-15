<!-- Creare un array $matches che contiene dei sotto-array, i quali rappresentano delle partite di basket.
ogni partita avrà le seguenti caratteristiche:
squadra di casa
squadra ospite
punti fatti dalla squadra di casa
punti fatti dalla squadra ospite
Stampa a schermo tutte le partite presenti nell'array $matches -->

<?php

// Creo un array matches
$matches = [
    [
        "casa" => "Universo Treviso",
        "ospite"  => "Trento",
        "punti_casa" => 84,
        "punti_ospite" => 80,
    ],
    [
        "casa" => "Varese",
        "ospite"  => "Brescia",
        "punti_casa" => 94,
        "punti_ospite" => 89,
    ],
    [
        "casa" => "Trieste",
        "ospite"  => "Cremona",
        "punti_casa" => 102,
        "punti_ospite" => 77,
    ],
    [
        "casa" => "Virtus Bologna",
        "ospite"  => "Cantù",
        "punti_casa" => 84,
        "punti_ospite" => 65,
    ],
    [
        "casa" => "Virtus Roma",
        "ospite"  => "Fortitudo Bologna",
        "punti_casa" => 81,
        "punti_ospite" => 76,
    ],
    [
        "casa" => "Reggiana",
        "ospite"  => "Olimpia Milano",
        "punti_casa" => 71,
        "punti_ospite" => 87,
    ],
    [
        "casa" => "VL Pesaro",
        "ospite"  => "Dinamo Sassari",
        "punti_casa" => 85,
        "punti_ospite" => 95,
    ],
    [
        "casa" => "Venezia",
        "ospite"  => "Brindisi",
        "punti_casa" => 75,
        "punti_ospite" => 67,
    ]
];

// Faccio un ciclo for per ciclare l'array matches
for ($i=0; $i < count($matches); $i++) {
    // stampo a schermo le partite concatenando gli elenti tra loro con il punto
    echo ($matches[$i]["casa"] . "-" . $matches[$i]["ospite"] . " | " . $matches[$i]["punti_casa"] . "-" .  $matches[$i]["punti_ospite"]) . "<br>";
}
?>
