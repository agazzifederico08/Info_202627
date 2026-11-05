<?php
try{
    $connessione = new PDO('mysql:host=localhost;dbname=concorsi', 'root', '');
    $stm = $connessione->prepare("DELETE FROM bevievinci WHERE codice = :c");
    $stm->bindParam(":c", $_GET['cod']);
    $stm->execute();
    $righe = $stm->rowCount();

}catch (Exception $err){
    $righe = 0;
}

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conferma eliminazione</title>
</head>
<body>
    <?php if($righe == 1): ?>
        Eliminazione avvenuta
    <?php else: ?>
        Errore durante l'eliminazione
    <?php endif ?>
    <br>
    <a href="index.php">Torna all'elenco</a>
</body>
</html>