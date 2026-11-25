<?php
try{
    $connessione = new PDO('mysql:host=localhost;dbname=concorsi', 'root', '');
    $stm = $connessione->prepare("SELECT * FROM bevievinci");
    $stm->execute();
    $premi = $stm->fetchAll();
}catch (Exception $err){
    $premi = [];
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Premi</title>
</head>
<body>
<header>
    <a href="nuovo.php">Nuovo premio</a>
</header>
    <br><br>
    <table border="1">
        <tr>
            <th>Codice</th>
            <th>Premio</th>
            <th>Scansionato</th>
            <th>Modifica</th>
            <th>Elimina</th>
        </tr>
        <?php foreach($premi as $p): ?>
        <tr>
            <td><?php echo $p['codice'] ?></td>
            <td><?php echo $p['premio'] ?></td>
            <td><?php echo $p['scansionato'] ?></td>
            <td><a href="modifica.php?cod=<?php echo $p['codice'] ?>">Modifica</a></td>
            <td><a href="elimina.php?cod=<?php echo $p['codice'] ?>">Elimina</a></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>
