<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Elenco prodotti</title>
</head>
<body>

<h1>Elenco prodotti</h1>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Marca</th>
        <th>Modello</th>
        <th>Prezzo</th>
        <th>Numero</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= htmlspecialchars($row["id"]) ?></td>
            <td><?= htmlspecialchars($row["marca"]) ?></td>
            <td><?= htmlspecialchars($row["modello"]) ?></td>
            <td><?= htmlspecialchars($row["prezzo"]) ?> €</td>
            <td><?= htmlspecialchars($row["numero"]) ?></td>
        </tr>
    <?php } ?>

</table>

</body>
</html>

<?php
$conn->close();
?>