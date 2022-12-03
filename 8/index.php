<?php

$p1=$_GET["p1"];
$p2=$_GET["p2"];
$p3=$_GET["p3"];
$p4=$_GET["p4"];
$total= $p1+$p2+$p3;
$ttotal=($p4/$total);
$pp1=($p1*$ttotal);
$pp2=($p2*$ttotal);
$pp3=($p3*$ttotal);



?>




<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 8</title>
</head>
<body>
    <h2>Problema 8 </h2>
<table class="table table-secondary table-striped table-hover table-bordered table-sm table-responsive-sm">
<thead>
                <tr>
                    <th scope="col">Inversores </th>
                    <th scope="col">Ganancia</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Persona 1</th>
                    <td><?php echo $pp1; ?></td>
                    
                </tr>
                <tr>
                    <th scope="row">Persona 2</th>
                    <td><?php echo $pp2; ?></td>
                    
                </tr>
                <tr>
                    <th scope="row">Persona 3</th>
                    <td><?php echo $pp3; ?></td>
                    
                </tr>
            </tbody>
        </table>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>