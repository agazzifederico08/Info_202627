<?php
    $elenco = [
        1 => ['nome' => 'Agazzi Federico', 'anno' => 2008, 'colore' => 'purple', 'materia' => 'geografia', 'sport' => 'badminton', 'img' => 'monterarena.jpg'],
        ['nome' => 'Azzolari Emilio', 'anno' => 2008, 'colore' => 'purple', 'materia' => 'geografia', 'sport' => 'badminton', 'img' => 'cyberrun.jpg'],
        ['nome' => 'Ba Coumba', 'anno' => 2008, 'colore' => 'purple', 'materia' => 'geografia', 'sport' => 'badminton', 'img' => 'arcadelegends.jpg']
    ];

    $studente =  ['nome' => 'Doe John', 'anno' => 2010, 'colore' => 'black', 'materia' => 'matematica', 'sport' => 'basket', 'img' => 'alienattack.jpg'];
    print_r($elenco);

    if(isset($_GET['nElenco'])){
        if(array_key_exists($_GET['nElenco'], $elenco)){
            $studente = $elenco[$_GET['nElenco']];
            echo 'Ho tutto';
        }else{
            echo 'Qualcuno sta cercando di forzare i parametri';
        }
    }else{
        echo 'studente inesistente';
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
</head>
<body>

    <form class="w3-container w3-crimson" method="get">
        <h2>Classe 5Ai</h2>
        <p> Scegli il nome dello studente/esssa preferita
        <label>Numero di elenco</label>
        <input class="w3-input" type="number" name="nElenco" type="number" min="1" max="20" value="1">
    
        </p>
        <button class="w3-btn w3-blue">Visualizza</button>

    </form>

    <div class="w3-container w3-card-4 w3-center w3-dark-grey">
        <h3>Friend Request</h3>
        <img src="immagini/<?= $studente['img']?>" alt="Avatar" style="width:40%">
        <h5>John Doe</h5>
        <button class="w3-button w3-green">Accept</button>
        <button class="w3-button w3-red">Decline</button>
    </div>





    <?php
        echo $studente['nome'];
        echo $studente['colore'];
        echo $studente['anno'];
    ?>
</body>
</html>

// Il prof ci da un array associativo con i dati (es. squadre di clacio)
// Ci dice di fare qualcosa con quell'array
// Per esempio scegli la squadra di calcio e fai comparire a schermo quanti scudetti ha vinto (magari un for che stampa tante immagini quanti gli scudetti)
// Usare anche il get