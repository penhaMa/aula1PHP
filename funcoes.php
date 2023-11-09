<?php
    function coletar(){
        $num1 = (int)$_POST["num1"];
        $num2 = (int)$_POST["num2"];
    }//Fim do método coletar

    function somar($num1,$num2){
        $soma = $num1 + $num2;
        return "A Soma do $num1 + $num2 é igual a = $soma";
    }//Fim do método somar

    function subtrair($num1,$num2){
         $sub =  $num1 - $num2;
         return  "A Subtração do $num1 - $num2 é igual a = $sub";
    }//Fim do método subtrair

    function divisao($num1,$num2){
        if($num2 != 0){
        $div =  $num1 / $num2;
    }else{
        $div =  "Impossível dividir por zero!!!";
    }//Fim da Operação
        return  "A Divisão do $num1 / $num2 é igual a = $div";
    }//Fim do método divisao

    function multiplicacao($num1,$num2){
        $mult = $num1 * $num2;
        return  "A Multiplicação do $num1 * $num2 é igual a = $mult";
    }//Fim do método multiplicacao

    function potencia($num1,$num2){
        $pot = pow($num1,$num2);
        return  "A Potência do $num1 ^ $num2 é igual a = $pot";
    }//Fim do método potência

    function raiz($num1){
        $rai = sqrt($num1);
        return  "A Raiz do $num1 é igual a = $rai";
    }//Fim do método raiz

    function tabuada($num1){
        $msg = "";
        for($i = 0;$i <= 10; $i++){
            $msg .= "$i * $num1 = ".($i * $num1)."\n";
        }return $msg;
    }//Fim do método tabuada

?><!--Fim da Tag PHP-->