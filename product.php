<?php

require_once 'index.php';

$calogero = new Utenti('calogero','incavolato');

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
    
    <h2><?php echo $calogero->name . '' . $calogero->surname;?></h2>

</body>
</html>