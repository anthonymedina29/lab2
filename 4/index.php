<?php
$ht=$_GET["ht"];
$pph=$_GET["pph"];
$sb=$ht*$pph;
$des= $sb* 0.2;
$sn=$sb - $des
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 4</title>
</head>
<body>
    <div class="container-sm">
        <h2>Salarios</h2> <br>
        <?php
       
        echo "Su salario bruto es  ".$sb ."<br>".   " Su Descuento es de:" .$des. "<br>". "Y su salarario neto es de: " .$sn;  
        ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>