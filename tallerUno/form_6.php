<?php 
        $VV = $_GET ['V'];
        $VP = $_GET ['P'];
        $VT = $_GET ['T'];

        $TV = ($VV * 2000);
        $TP = ($VP * 5000);
        $TT = ($VT * 500);
        $TTT = $TV + $TP + $TT;

        echo "El total a pagar por los volantes es: ", $TV, "   <br><br>  "; 
        echo "El total a pagar por los posters es: ", $TP, "   <br><br>  "; 
        echo "El total a pagar por los targetas de presentación es: ", $TT, "  <br><br>   "; 
        echo "Dando un total a pagar de: ", $TTT, "  <br><br>   "; 
        
?>