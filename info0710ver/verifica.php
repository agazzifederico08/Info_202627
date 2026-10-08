<?php
$dati = [
    "prom001" => ["nome" => "Luca Bianchi", "importo" => 12.00, "citta" => "Milano"],
    "gift002" => ["nome" => "Giulia Verdi", "importo" => 18.50, "citta" => "Roma"],
    "scon003" => ["nome" => "Marco Rossi", "importo" => 7.25, "citta" => "Napoli"],
    "autu004" => ["nome" => "Sara Neri", "importo" => 9.90, "citta" => "Torino"],
    "deal005" => ["nome" => "Davide Gallo", "importo" => 15.00, "citta" => "Firenze"],
    "fest006" => ["nome" => "Elena Conti", "importo" => 6.75, "citta" => "Bologna"],
    "prim007" => ["nome" => "Francesco Moretti", "importo" => 19.99, "citta" => "Genova"],
    "prom008" => ["nome" => "Alessia Romano", "importo" => 5.50, "citta" => "Palermo"],
    "gift009" => ["nome" => "Matteo Greco", "importo" => 13.30, "citta" => "Venezia"],
    "scon010" => ["nome" => "Chiara De Luca", "importo" => 11.20, "citta" => "Cagliari"],
    "autu011" => ["nome" => "Simone Ferri", "importo" => 14.60, "citta" => "Milano"],
    "deal012" => ["nome" => "Federica Costa", "importo" => 6.90, "citta" => "Roma"],
    "fest013" => ["nome" => "Giorgio Fontana", "importo" => 17.80, "citta" => "Napoli"],
    "prim014" => ["nome" => "Martina Riva", "importo" => 8.25, "citta" => "Torino"],
    "prom015" => ["nome" => "Fabio Leone", "importo" => 10.00, "citta" => "Firenze"],
    "gift016" => ["nome" => "Stefano Marchetti", "importo" => 5.75, "citta" => "Bologna"],
    "scon017" => ["nome" => "Laura Gatti", "importo" => 16.40, "citta" => "Genova"],
    "autu018" => ["nome" => "Andrea De Santis", "importo" => 7.10, "citta" => "Milano"],
    "deal019" => ["nome" => "Valentina Greco", "importo" => 13.90, "citta" => "Venezia"],
    "fest020" => ["nome" => "Riccardo Pugliese", "importo" => 19.50, "citta" => "Cagliari"],
    "prim021" => ["nome" => "Chiara Mancini", "importo" => 6.30, "citta" => "Milano"],
    "prom022" => ["nome" => "Luca Romano", "importo" => 12.80, "citta" => "Roma"],
    "gift023" => ["nome" => "Giulia Costa", "importo" => 9.50, "citta" => "Napoli"],
    "scon024" => ["nome" => "Marco Fontana", "importo" => 18.20, "citta" => "Torino"],
    "autu025" => ["nome" => "Sara Riva", "importo" => 7.90, "citta" => "Firenze"],
    "deal026" => ["nome" => "Davide Leone", "importo" => 15.60, "citta" => "Bologna"],
    "fest027" => ["nome" => "Elena Marchetti", "importo" => 6.10, "citta" => "Genova"],
    "prim028" => ["nome" => "Francesco Gatti", "importo" => 11.75, "citta" => "Palermo"],
    "prom029" => ["nome" => "Alessia De Santis", "importo" => 5.90, "citta" => "Venezia"],
    "gift030" => ["nome" => "Matteo Pugliese", "importo" => 13.10, "citta" => "Cagliari"],
    "scon031" => ["nome" => "Chiara Ferri", "importo" => 17.00, "citta" => "Milano"],
    "autu032" => ["nome" => "Simone Costa", "importo" => 8.60, "citta" => "Roma"],
    "deal033" => ["nome" => "Federica Fontana", "importo" => 10.90, "citta" => "Napoli"],
    "fest034" => ["nome" => "Giorgio Riva", "importo" => 6.50, "citta" => "Torino"],
    "prim035" => ["nome" => "Martina Leone", "importo" => 14.20, "citta" => "Firenze"],
    "prom036" => ["nome" => "Fabio Marchetti", "importo" => 9.30, "citta" => "Bologna"],
    "gift037" => ["nome" => "Stefano Gatti", "importo" => 5.20, "citta" => "Genova"],
    "scon038" => ["nome" => "Laura De Santis", "importo" => 16.90, "citta" => "Palermo"],
    "autu039" => ["nome" => "Andrea Pugliese", "importo" => 7.40, "citta" => "Venezia"],
    "deal040" => ["nome" => "Valentina Mancini", "importo" => 12.10, "citta" => "Cagliari"],
    "fest041" => ["nome" => "Riccardo Romano", "importo" => 18.75, "citta" => "Milano"],
    "prim042" => ["nome" => "Chiara Costa", "importo" => 6.80, "citta" => "Roma"],
    "prom043" => ["nome" => "Luca Fontana", "importo" => 13.50, "citta" => "Napoli"],
    "gift044" => ["nome" => "Giulia Riva", "importo" => 8.00, "citta" => "Torino"],
    "scon045" => ["nome" => "Marco Leone", "importo" => 15.30, "citta" => "Firenze"],
    "autu046" => ["nome" => "Sara Marchetti", "importo" => 6.20, "citta" => "Bologna"],
    "deal047" => ["nome" => "Davide Gatti", "importo" => 11.40, "citta" => "Genova"],
    "fest048" => ["nome" => "Elena De Santis", "importo" => 5.80, "citta" => "Palermo"],
    "prim049" => ["nome" => "Francesco Pugliese", "importo" => 14.90, "citta" => "Venezia"],
    "prom050" => ["nome" => "Alessia Mancini", "importo" => 9.70, "citta" => "Cagliari"]
];

$messaggio = '';
$biglietto = null;

if (isset($_GET['codice'])) {

    $codice = $_GET['codice'];

    if ($codice == '') {

        $messaggio = 'Non hai inserito nessun codice';

    } else if (array_key_exists($codice, $dati)) {

        $biglietto = $dati[$codice];

    } else {

        $messaggio = 'Codice non verificato';

    }
}

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biglietti fortunati</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body style="background-color: LightGray; text-align: center"> 
    <header>
        <h1>Biglietti fortunati</h1>
        <p>Verifica un codice oppure scopri un biglietto casuale</p>
    </header>

    <div style="width: 80%; margin: 20px auto; padding: 20px; background-color: #f0f0f0; border: 2px solid #2876ca; border-radius: 8px; text-align: center;">
        <h2>Verifica un biglietto</h2>

        <form method="get">

            <label for="codice">
                Inserisci il codice (es. prom050)
            </label>

            <input 
                type="text" 
                name="codice" 
                id="codice"
            >

            <button type="submit">
                Verifica codice
            </button>

        </form>

    </div>

    <div style="width: 80%; margin: 20px auto; padding: 20px; background-color: #f0f0f0; border: 2px solid #2876ca; border-radius: 8px; text-align: center;" >
        
        <?php

        if ($biglietto != null) {

            echo "<h2>Codice verificato</h2>";

            echo "Nome: " . $biglietto['nome'] . "<br>";
            echo "Importo: € " . $biglietto['importo'] . "<br>";
            echo "Città: " . $biglietto['citta'];

        } else {

            echo $messaggio;

        }

        ?>

    </div>

</body>
</html>
