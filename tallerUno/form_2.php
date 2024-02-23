<?php 
        $A = $_GET ['asignatura'];
        $N1 = $_GET ['nota_1'];
        $N2 =  $_GET ['nota_2'];
        $N3 =  $_GET ['nota_3'];

        $P = ($N1 + $N2 + $N3) / 3;
        echo "el promedio en ", $A , " es de: ", $P;

?>