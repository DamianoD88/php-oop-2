<?php

// metto il require per richiamare clienti.php
require_once 'client.php';

// invoco la classe Client per invocarla devo mettere tutti i public, se no da errore

$calogero = new Client('calogero','incavolato','calogero.inc@gmail.com','37');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- richiamo la funzione -->
    <h2><?php echo $calogero->name . '' . $calogero->surname;?></h2>

</body>
</html>