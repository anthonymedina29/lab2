<?php
$nper=$_GET["nper"];

 

?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>
<body>
    <h2>Problema 13</h2>
    <div class="container-sm">
    <?php

if ($nper >= 200 and $nper<=300) 
echo "El numero de personas es de ".$nper. " El precio del platillo es de 85.00$";
elseif($nper > 300) 
echo  "El numero de personas es de ".$nper. " El precio del platillo es de 75.00$";
elseif($nper <200)
echo  "El numero de personas es de " .$nper. " El precio del platillo es de 95.00$";

?>





    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>