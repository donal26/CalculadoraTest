<?php
    class calculate{
       
       function divide($a,$b){
        if($b!=0) return $a/$b;
        else return "Denominador Incorrecto";
    }



    function igv($a,$b){
        if($a>=$b) return ($a*$b)/$a;
        else return "inocrrecto";

    }

    function igvS($a,$b){
        $n=100;
        if($a>=$b) return ($a*$b)/$n;
        else return "inocrrecto";

    }
    



    }
?>
