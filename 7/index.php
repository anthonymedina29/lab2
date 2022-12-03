<?php
$presupuesto=$_GET["presupuesto"];
$gine= $presupuesto* 40/100;
$trauma=$presupuesto* 30/100;;
$pedia=$presupuesto* 30/100;;


?>




<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 7</title>
</head>
<body>
    <div class="container-sm">
        <h1>Problema 7</h1>
        <table class="table table-warning table-striped table-hover table-bordered table-sm table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">Área </th>
                    <th scope="col">Porcentaje de presupuesto </th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Ginecología</th>
                    <td><?php echo $gine; ?></td>
                    
                </tr>
                <tr>
                    <th scope="row">Traumatología</th>
                    <td><?php echo $trauma; ?></td>
                    
                </tr>
                <tr>
                    <th scope="row">Pediatría</th>
                    <td><?php echo $pedia; ?></td>
                    
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>