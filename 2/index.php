<?php
$n1=$_GET["n1"];
$n2=$_GET["n2"];
$suma= $n1+$n2;
$resta= $n1-$n2;
$multiplicacion= $n1*$n2;
$division= ($n1 / $n2)
?>





<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 2</title>
</head>
<body>
    <h2>Problema 2</h2>
    <?php 

echo " La Suma de los numeros es ".$suma ."<br>".  " La Resta de los numeros es ".$resta. "<br>". 
" La Multiplicacion de los numeros es ".$multiplicacion."<br>". " La Division de los numeros es ".$division;




    ?>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>