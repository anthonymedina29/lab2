<?php
$p1=$_GET["p1"];
$p2=$_GET["p2"];
$p3=$_GET["p3"];
$ne=$_GET["ne"];
$tf=$_GET["tf"];
$pf= $p1+$p2+$p3;
$ppf= $pf/3 ;
$pff= $ppf * 55 /100;
$ef= $ne/100;
$eff=$ef*30;
$tnf=$tf/100;
$tfp=$tnf*15;



$nff=$ppf+$ne+$tf;
$nffp=$nff/3;
$porf=$pff+$eff+$tfp;


?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 6</title>
</head>
<body>
    
    <div class="container-sm">
    <h2>Problema 6</h2>

<table class="table table-light table-striped table-hover table-bordered table-sm table-responsive-sm">
    <thead>
        <tr>
        <th scope="col"></th>
            <th scope="col">Parciales</th>
            <th scope="col">Trabajo final </th>
            <th scope="col">Examen</th>
            <th scope="col">Promedio Final</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">Notas</th>
            <td><?php echo $ppf; ?></td>
            <td><?php echo $tf; ?></td>
            <td><?php echo $ne; ?></td>
            <td><?php echo $nffp; ?></td>
        </tr>
        <tr>
            <th scope="row">Porcentaje</th>
            <td><?php echo $pff; ?></td>
            <td><?php echo $eff; ?></td>
            <td><?php echo $tfp; ?></td>
            <td><?php echo $porf; ?></td>
        </tr>
    </tbody>
</table>



    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>
