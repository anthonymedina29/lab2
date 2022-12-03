<?php
$tipo=$_GET["tipo"];

 

?>





<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 15</title>
</head>
<body>
    <div class="container-sm">
        <h2>Banco Pueblo desconocido </h2>

        <?php

if ($tipo== 1) 
echo "Tienes tarjeta tipo ".$tipo. " Tu aumento es del 25%";
elseif($tipo == 2) 
echo "Tienes tarjeta tipo ".$tipo. " Tu aumento es del 35%";
elseif($tipo == 3)
echo "Tienes tarjeta tipo ".$tipo. " Tu aumento es del 45%";
else
echo "Tienes otro tipo de tarjeta, tu aumento es del 50% ";
?>

        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>