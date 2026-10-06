
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scegli il colore</title>

    <?php
        $colore = "lightblue";

        if (isset($_GET['colore'])) {
            $colore = $_GET['colore'];
        }
    ?>

    <style>
        body {
            background-color: <?php echo $colore; ?>;
            text-align: center;
            padding-top:100;  
        }
    </style>
</head>

<body>

    <div>
        <?php
            if (isset($_GET['colore'])) {
                echo "Il colore scelto è " . $_GET['colore'];
            } else {
                echo "Colore defaulf";
            }
        ?>
    </div>

</body>
</html>