<?php

// Creiamo un array che contiene tutte le squadre.
// Ogni squadra ha un numero, un nome, il numero di scudetti,
// un colore e il nome dell'immagine.
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


// Controlliamo se l'utente ha scelto una squadra
// dal menu a tendina.
if(isset($_GET['nSquadra'])) {

    // Controlliamo se il numero della squadra scelto
    // esiste all'interno dell'array $squadre.
    if(array_key_exists($_GET['nSquadra'], $squadre)) {

        // Salviamo nella variabile $squadra
        // i dati della squadra scelta.
        $squadra = $squadre[$_GET['nSquadra']];

    } else {

        // Se il numero scelto non esiste,
        // mostriamo un messaggio di errore.
        echo 'La squadra non esiste';

    }
}

?>


<!DOCTYPE html>
<html lang="it">

<head>

    <!-- Impostiamo la codifica dei caratteri -->
    <meta charset="UTF-8">

    <!-- Rendiamo la pagina adattabile a telefono, tablet e PC -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Titolo della pagina -->
    <title>Squadre di calcio</title>

    <!-- Importiamo il CSS di W3.CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">

</head>


<body>


    <!--
        Creiamo un form.
        Il metodo GET permette di inviare la squadra scelta
        attraverso l'indirizzo della pagina.
    -->
    <form class="w3-container w3-green" method="get">


        <!-- Titolo del form -->
        <h2>Scegli una squadra</h2>


        <p>

            <!-- Etichetta del menu -->
            <label>Squadra</label>


            <!--
                Menu a tendina.
                Il nome "nSquadra" è importante perché
                viene utilizzato da $_GET['nSquadra'].
            -->
            <select class="w3-select" name="nSquadra">


                <!--
                    Opzione iniziale.
                    Ha valore vuoto, quindi non corrisponde
                    a nessuna squadra.
                -->
                <option value="">
                    -- Seleziona una squadra --
                </option>


                <!-- Opzione Juventus -->
                <option value="1">
                    Juventus
                </option>


                <!-- Opzione Inter -->
                <option value="2">
                    Inter
                </option>


                <!-- Opzione Milan -->
                <option value="3">
                    Milan
                </option>


            </select>

        </p>


        <!--
            Pulsante che invia il form
            e permette di visualizzare la squadra.
        -->
        <button class="w3-btn w3-orange">
            Visualizza
        </button>


    </form>


    <?php

    // Controlliamo se esiste una squadra scelta.
    // Se non è stata scelta nessuna squadra,
    // questo blocco non viene mostrato.
    if(isset($squadra)) {

    ?>


        <!--
            Contenitore che mostra le informazioni
            della squadra selezionata.
        -->
        <div class="w3-container w3-card-4 w3-center">


            <!--
                Mostriamo il nome della squadra.
                Ad esempio: Juventus.
            -->
            <h2>
                <?php echo $squadra['nome']; ?>
            </h2>


            <!--
                Mostriamo l'immagine della squadra.
                Il nome dell'immagine viene preso
                dall'array $squadra.
            -->
            <img 
                src="immagini/<?php echo $squadra['img']; ?>"
                style="width:200px"
            >


            <!--
                Mostriamo il numero di scudetti
                vinti dalla squadra.
            -->
            <p>
                Questa squadra ha vinto
                <?php echo $squadra['scudetti']; ?>
                scudetti.
            </p>


            <!-- Titolo della sezione degli scudetti -->
            <h3>Scudetti vinti:</h3>


            <?php

            // Questo ciclo viene ripetuto tante volte
            // quanti sono gli scudetti della squadra.
            //
            // Ad esempio, per l'Inter viene ripetuto 20 volte.
            for($i = 0; $i < $squadra['scudetti']; $i++) {


                // Ad ogni ripetizione viene mostrata
                // un'immagine dello scudetto.
                echo '<img src="immagini/scudetto.jpg" style="width:50px">';

            }


            // Chiudiamo il codice PHP.
            ?>

        </div>


    <?php

    // Chiudiamo l'if che controlla
    // se è stata scelta una squadra.
    }

    ?>

</body>

</html>
