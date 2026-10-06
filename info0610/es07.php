<?php

$alunni = [
    1 => [
        'nome' => 'Marco',
        'anni' => 17,
        'materia' => 'Informatica',
        'colore' => 'blue'
    ],
    2 => [
        'nome' => 'Giulia',
        'anni' => 16,
        'materia' => 'Matematica',
        'colore' => 'red'
    ],
    3 => [
        'nome' => 'Luca',
        'anni' => 18,
        'materia' => 'Storia',
        'colore' => 'green'
    ]
];

if(isset($_GET['nAlunno'])) {

    if(array_key_exists($_GET['nAlunno'], $alunni)) {

        $alunno = $alunni[$_GET['nAlunno']];

    } else {

        echo 'L\'alunno non esiste';

    }
}

?>


<!DOCTYPE html>
<html lang="it">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Classe di alunni</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">

</head>

<body>

    <form class="w3-container w3-green" method="get">

        <h2>Scegli un alunno</h2>

        <p>

            <label>Alunno</label>

            <select class="w3-select" name="nAlunno">

                <option value="">-- Seleziona un alunno --</option>
                <option value="1">Marco</option>
                <option value="2">Giulia</option>
                <option value="3">Luca</option>

            </select>

        </p>

        <button class="w3-btn w3-orange">
            Visualizza
        </button>

    </form>


    <?php

    if(isset($alunno)) {

    ?>

        <div class="w3-container w3-card-4 w3-center">

            <h2>
                <?php echo $alunno['nome']; ?>
            </h2>

            <p>
                Questo alunno ha
                <?php echo $alunno['anni']; ?>
                anni.
            </p>

            <p>
                Materia preferita:
                <?php echo $alunno['materia']; ?>
            </p>

            <p>
                Colore preferito:
                <?php echo $alunno['colore']; ?>
            </p>

            <h3>Un quadratino per ogni anno:</h3>

            <?php

            for($i = 0; $i < $alunno['anni']; $i++) {

                echo '<span style="display:inline-block; width:20px; height:20px; margin:2px; background-color:' . $alunno['colore'] . '"></span>';

            }

            ?>

        </div>
    
    <?php

    }

    ?>

</body>

</html>