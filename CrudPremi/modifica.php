<?php
try{
    $connessione = new PDO('mysql:host=localhost;dbname=concorsi', 'root', '');
    $stm = $connessione->prepare("SELECT * FROM bevievinci WHERE codice = :c");
    $stm->bindParam(":c", $_GET['cod']);
    $stm->execute();
    $premio = $stm->fetch();
}catch (Exception $err){
    $premio = false;
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Modifica premio</title>
</head>
<body>
    <?php if($premio): ?>
    <form action="aggiornamento.php" method="post">
        Codice: <?php echo $premio['codice'] ?><br>
        <input type="hidden" name="cod" value="<?php echo $premio['codice'] ?>">
        Importo vincita
        <input type="number" name="money" value="<?php echo $premio['premio'] ?>"><br>
        Scansionato
        <input type="checkbox" name="scan" value="1" <?php if($premio['scansionato'] == 1): ?>checked<?php endif ?>><br>
        <input type="submit" value="Salva modifiche">
    </form>
    <?php else: ?>
        Premio non trovato
    <?php endif ?>
    <br>
    <a href="index.php">Torna all'elenco</a>
</body>
</html>
