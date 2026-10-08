<?php

    $errore = "Hai dimenticato il codice";

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w"
            background-color: black;
            color: green;
            border: solid 2px gray;

    </style>
</head>
<body>

    <div class="debug">
        <?= $errore ?>
    </div>

    <?php if ($errore == "noerror") : ?>

        <div class="w3-panel w3-blue">
            <p>London is the capital of England.</p>
        </div>

    <?php else : ?>

        <div class="w3-panel w3-red">
            <h3>Danger!</h3>
            <p><?= $errore ?></p>
        </div>

    <?php endif; ?>

</body>
</html>