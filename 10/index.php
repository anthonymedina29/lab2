<?php
$horas=$_GET["horas"];
$min=$_GET["min"];

$seg=0.25;
$hr=$horas*$seg/3600;
$mn=$min*$seg/60;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema10</title>
</head>
<body>
    <div class="container-sm">
        
    
<h2>
     Problema 10
        
    </h2>

<?php
echo "  Costo total es de" .$hr."$ horas y  " .$mn."$ POR minitos" ;

?> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </div>

</body>
</html>