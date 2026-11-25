<?php
try{
    $connessione = new PDO('mysql:host=localhost;dbname=concorsi', 'root', '');
    $stm = $connessione->prepare("INSERT INTO bevievinci (codice, premio) VALUES (:c, :p)");
    $stm->bindParam(":c", $_POST['cod']);
    $stm->bindParam(":p", $_POST['money']);
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
    <title>Conferma inserimento</title>
</head>
<body>
    <?php if($righe == 1): ?>
        Inserimento avvenuto
    <?php else: ?>
        Errore durante l'inserimento
    <?php endif ?>
    <br>
    <a href="index.php">Torna all'elenco</a>
</body>
</html>
