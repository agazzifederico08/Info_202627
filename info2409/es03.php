<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colore preferito</title>
</head>
<body>
    <div>
        Costruire una pagina php+html+css che 
        visualizza uno stile di default scelto dal
        programmatore. Qualora siano presenti uno o
        più parametri, adatta lo stile della pagina
        ai parametri. 
    </div>





<div>
<?php
    //print_r($_GET);
    //var_dump($_GET);

    if(isset($_GET['colore'])){
        echo'Il colore scelto è ' . $_GET['colore'];
    }
    else{
        echo'Useremo il colore di default';
    }

?>
</div>
</body>
</html>


