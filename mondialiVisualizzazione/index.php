<?php

$conn = new mysqli("localhost", "root", "", "mondiali");

$sql = "SELECT nome, squadra, gol_carriera, ruolo, club
        FROM giocatori
        ORDER BY gol_carriera DESC
        LIMIT 50";

$result = $conn->query($sql);

?>

<html>
<body>

<h1>50 giocatori con più gol</h1>

<table border="1">

<tr>
    <th>Nome</th>
    <th>Squadra</th>
    <th>Gol</th>
    <th>Ruolo</th>
    <th>Club</th>
</tr>

<?php

while ($riga = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $riga["nome"] . "</td>";
    echo "<td>" . $riga["squadra"] . "</td>";
    echo "<td>" . $riga["gol_carriera"] . "</td>";
    echo "<td>" . $riga["ruolo"] . "</td>";
    echo "<td>" . $riga["club"] . "</td>";
    echo "</tr>";
}

?>

</table>

</body>
</html>

<?php
$conn->close();
?>