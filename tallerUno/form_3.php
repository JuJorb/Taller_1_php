<?php 
    $W = $_GET['W'];
    $L = $_GET['L'];
    $D = $_GET['D'];

    $pGanados = $W * 3;
    $pPerdidos = $L * 0;
    $pEmpatados = $D * 1;

    $T = $pGanados + $pPerdidos + $pEmpatados; 

    echo "El total de puntos de tu equipo es de " , $T;
?>
