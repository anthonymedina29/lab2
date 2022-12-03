<?php
$años=$_GET["años"];

 

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 14</title>
</head>
<body>
    <div class="container-sm">
        <h3>Problema 14</h3>

 <?php

        if ($años== 1) 
        echo "Tienes ".$años. " Años trabajando y tu bono es de 100$";
        elseif($años == 2) 
        echo "Tienes ".$años. " Años Trabajando y tu bono es de 200$";
        elseif($años == 3)
        echo "Tienes ".$años. " Años trabajando y tu bono es de 300$";
        elseif($años == 4)
        echo "Tienes ".$años. " Añoa trabajando y tu bono es de 400$";
        elseif($años == 5)
        echo "Tienes ".$años. " Años trabajando y tu bono es de 500$";
        elseif($años > 5)
        echo "Tienes ".$años. " Años trabajando y tu bono es de 1000";
?>

        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>