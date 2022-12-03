<?php
$nombre=$_GET["nombre"];
$n1=$_GET["n1"];
$n2=$_GET["n2"];
$n3=$_GET["n3"];
$n4=$_GET["n4"];
$n5=$_GET["n5"];
$nf=($n1+$n2+$n3+$n4+$n5);
$nt=($nf / 5)
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
    <div class="container-sm">
        <h2>Suma de nota</h2>
        <?php

        if ($nt >= 91) 
        echo $nombre." Su nota total es ".$nt. " Y es una A";
        elseif($nt <=90 and $nt>=81) 
        echo $nombre. " Su nota total es ".$nt. " Y es una B";
        elseif($nt <=80 and $nt>=71)
        echo $nombre. " Su nota total es ".$nt. " Y es una C";
        elseif($nt <=70 and $nt>=61)
        echo $nombre. " Su nota total es ".$nt. " Y es una D";
        elseif($nt <=60)
        echo $nombre. " Su nota total es ".$nt. " Y es una F";

        ?>




    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>