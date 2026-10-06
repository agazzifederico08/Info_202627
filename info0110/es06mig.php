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

$messaggio = '';

if(isset($_GET['nSquadra'])) {

    if($_GET['nSquadra'] == '') {

        $messaggio = 'Non hai selezionato nessuna squadra';

    } else if(array_key_exists($_GET['nSquadra'], $squadre)) {

        $squadra = $squadre[$_GET['nSquadra']];

    } else {

        $messaggio = 'La squadra non esiste';

    }

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

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">

</head>

<body class="w3-light-grey">

    <header class="w3-container w3-blue-grey w3-center">

        <h1>Squadre di calcio</h1>

    </header>

    <div class="w3-content w3-margin-top" style="max-width:400px">

        <form class="w3-card w3-white w3-padding" method="get">

            <label>Scegli una squadra:</label>

            <select class="w3-select w3-border w3-margin-bottom" name="nSquadra">

                <option value="">-- Seleziona --</option>
                <option value="1">Juventus</option>
                <option value="2">Inter</option>
                <option value="3">Milan</option>

            </select>

            <button class="w3-button w3-blue-grey w3-block">Visualizza</button>

        </form>

        <?php

        if($messaggio != '') {

            echo '<div class="w3-panel w3-pale-yellow w3-border w3-center">';
            echo '<p>' . $messaggio . '</p>';
            echo '</div>';

        }

        ?>

    </div>

    <?php

    if(isset($squadra)) {

    ?>

        <div class="w3-content w3-card w3-white w3-padding w3-center w3-margin-top w3-border"
             style="max-width:600px; border-color: <?php echo $squadra['colore']; ?>">

            <h2 style="color: <?php echo $squadra['colore']; ?>">
                <?php echo $squadra['nome']; ?>
            </h2>

            <img src="immagini/<?php echo $squadra['img']; ?>" style="width:200px">

            <p>
                Questa squadra ha vinto
                <?php echo $squadra['scudetti']; ?>
                scudetti.
            </p>

            <?php

            for($i = 0; $i < $squadra['scudetti']; $i++) {

                echo '<img src="immagini/scudetto.jpg" style="width:40px">';

            }

            ?>

        </div>

    <?php

    }

    ?>

</body>

</html>