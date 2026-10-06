<?php

// array associativo di array: la chiave numerica (1, 2, 3) identifica la squadra,
// il valore e' un altro array con i dati della squadra
$squadre = [
    1 => [
        'nome' => 'Juventus',
        'scudetti' => 36,
        'colore' => 'black',
        'img' => 'juventus.jpg'
    ],
    2 => [
        'nome' => 'Inter',
        'scudetti' => 20,
        'colore' => 'blue',
        'img' => 'inter.jpg'
    ],
    3 => [
        'nome' => 'Milan',
        'scudetti' => 19,
        'colore' => 'red',
        'img' => 'milan.png'
    ]
];

// stringa vuota di default: se resta vuota non viene mostrato nessun messaggio
$messaggio = '';

// isset controlla se nell'URL e' arrivato il parametro nSquadra (invio del form con GET)
if(isset($_GET['nSquadra'])) {

    // il form e' stato inviato ma e' rimasta selezionata l'option con value=""
    if($_GET['nSquadra'] == '') {

        $messaggio = 'Non hai selezionato nessuna squadra';

    // array_key_exists controlla se il valore ricevuto e' una chiave esistente in $squadre
    } else if(array_key_exists($_GET['nSquadra'], $squadre)) {

        // salvo in $squadra solo i dati della squadra scelta (un array interno)
        $squadra = $squadre[$_GET['nSquadra']];

    // il parametro c'e' ma non corrisponde a nessuna chiave (es. modificato a mano nell'URL)
    } else {

        $messaggio = 'La squadra non esiste';

    }

// il parametro non c'e': la pagina e' stata aperta per la prima volta
} else {

    $messaggio = 'Scegli una squadra per vedere i suoi scudetti';

}

?>

<!DOCTYPE html>
<html lang="it">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Squadre di calcio</title>

    <!-- collegamento al foglio di stile w3.css con le classi gia' pronte -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">

</head>

<body class="w3-light-grey">

    <header class="w3-container w3-blue-grey w3-center">

        <h1>Squadre di calcio</h1>

    </header>

    <!-- w3-content centra il contenuto, max-width ne limita la larghezza -->
    <div class="w3-content w3-margin-top" style="max-width:400px">

        <!-- method="get": i dati vengono inviati nell'URL (?nSquadra=...)
             senza action, il form invia i dati alla stessa pagina -->
        <form class="w3-card w3-white w3-padding" method="get">

            <label>Scegli una squadra:</label>

            <!-- il name del select diventa la chiave in $_GET -->
            <select class="w3-select w3-border w3-margin-bottom" name="nSquadra">

                <!-- value="" vuoto: serve per riconoscere il caso "nessuna scelta" -->
                <option value="">-- Seleziona --</option>
                <!-- i value corrispondono alle chiavi dell'array $squadre -->
                <option value="1">Juventus</option>
                <option value="2">Inter</option>
                <option value="3">Milan</option>

            </select>

            <button class="w3-button w3-blue-grey w3-block">Visualizza</button>

        </form>

        <?php

        // se $messaggio non e' vuoto lo stampo sotto il form
        if($messaggio != '') {

            echo '<div class="w3-panel w3-pale-yellow w3-border w3-center">';
            // il punto concatena le stringhe
            echo '<p>' . $messaggio . '</p>';
            echo '</div>';

        }

        ?>

    </div>

    <?php

    // $squadra esiste solo se e' stata scelta una squadra valida,
    // quindi la scheda viene stampata solo in quel caso
    if(isset($squadra)) {

    ?>

        <div class="w3-content w3-card w3-white w3-padding w3-center w3-margin-top w3-border"
             style="max-width:600px; border-color: <?php echo $squadra['colore']; ?>">

            <!-- stampo il nome e uso il colore della squadra letto dall'array -->
            <h2 style="color: <?php echo $squadra['colore']; ?>">
                <?php echo $squadra['nome']; ?>
            </h2>

            <!-- il nome del file immagine viene dall'array, la cartella e' fissa -->
            <img src="immagini/<?php echo $squadra['img']; ?>" style="width:200px">

            <p>
                Questa squadra ha vinto
                <?php echo $squadra['scudetti']; ?>
                scudetti.
            </p>

            <?php

            // ciclo for: ripete la stampa dell'immagine tante volte quanti sono gli scudetti
            // $i parte da 0 e arriva a scudetti - 1, quindi fa esattamente "scudetti" giri
            for($i = 0; $i < $squadra['scudetti']; $i++) {

                echo '<img src="immagini/scudetto.jpg" style="width:40px">';

            }

            ?>

        </div>

    <?php

    // chiusura dell'if(isset($squadra))
    }

    ?>

</body>

</html>