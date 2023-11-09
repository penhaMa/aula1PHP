<?php
    function coletarB(){
        $a = (int)$_POST["a"];
        $b = (int)$_POST["b"];
        $c = (int)$_POST["c"];
    }//Fim do método coletar

    function bhaskara($a,$b,$c){
        $delta = pow($b, 2) - (4 * $a) * $c;

        if ($delta < 0) {
            return "Não existe delta negativo";
        }
        $x1 =  (-($b) + sqrt($delta)) / (2 * $a);
        $x2 = (-($b) - sqrt($delta)) / (2 * $a);

        return "Delta = $delta"."\n"
        ."X1 = $x1"."\n"
        ."X1 = $x2";
    }//Fim do método Bhaskara
?><!--Fim da Tag PHP-->