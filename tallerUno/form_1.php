<?php 
        $V = $_GET ['velocidad'];
        $T =  $_GET ['tiempo'];

        $D = $V * $T;
        echo "la distancia recorrida es de ", $D, " m";

?>