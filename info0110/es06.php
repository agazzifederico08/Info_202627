<?php

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

if(isset($_GET['nSquadra'])) {

    if(array_key_exists($_GET['nSquadra'], $squadre)) {

        $squadra = $squadre[$_GET['nSquadra']];

    } else {

        echo 'La squadra non esiste';

    }
}

?>


<!DOCTYPE html>
<html lang="it">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Squadre di calcio</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">

</head>

<body>

    <form class="w3-container w3-green" method="get">

        <h2>Scegli una squadra</h2>

        <p>

            <label>Squadra</label>

            <select class="w3-select" name="nSquadra">

                <option value="">-- Seleziona una squadra --</option>
                <option value="1">Juventus</option>
                <option value="2">Inter</option>
                <option value="3">Milan</option>

            </select>

        </p>

        <button class="w3-btn w3-orange">
            Visualizza
        </button>

    </form>


    <?php

    if(isset($squadra)) {

    ?>

        <div class="w3-container w3-card-4 w3-center">

            <h2>
                <?php echo $squadra['nome']; ?>
            </h2>

            <img 
                src="immagini/<?php echo $squadra['img']; ?>"
                style="width:200px"
            >

            <p>
                Questa squadra ha vinto
                <?php echo $squadra['scudetti']; ?>
                scudetti.
            </p>

            <h3>Scudetti vinti:</h3>

            <?php

            for($i = 0; $i < $squadra['scudetti']; $i++) {

                echo '<img src="immagini/scudetto.jpg" style="width:50px">';

            }

            ?>

        </div>
    
    <?php

    }

    ?>

</body>

</html>
