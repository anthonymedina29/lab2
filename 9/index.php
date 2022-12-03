<?php

$ah=$_GET["ah"];
$am=$_GET["am"];
$total=$ah+$am;
$th=($ah/$total)*100;
$tm=($am/$total)*100;


?>




<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tp9</title>
</head>
<body>
<div class="container-sm">
    <h2>Problema 9</h2>

<table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
    <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Cantidad</th>
            <th scope="col">Porcentaje</th>
            
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">Alumnos</th>
            <td><?php echo $ah; ?></td>
            <td><?php echo $th." % " ?></td>
           
        </tr>
        <tr>
            <th scope="row">Alumnas</th>
            <td><?php echo $am; ?></td>
            <td><?php echo $tm." % " ?></td>
           
        </tr>
    </tbody>
</table>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>