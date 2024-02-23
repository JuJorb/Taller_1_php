<?php 
        $H1 = $_GET ['Uno'];
        $H2 = $_GET ['Dos'];

        $D = $H1 - $H2; 

        if ($H1>$H2){
            if ($H1>$H2){
                echo "Hermano 1 tiene ", $H1, " años.  tiene ", $D, " años de diferencia con el hermano 2";
            }else{
                echo "Hermano 1 tiene ", $H2, " años. entonces tiene ", $D, " años de diferencia con el hermano 2";
            }
        }
?>