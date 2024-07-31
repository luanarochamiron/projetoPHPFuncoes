<?php
    //Instanciar
    $num1 = 0; //Variáveis globais (Código todo utiliza)
    $num2 = 0;

    function somar($num1, $num2){
        return $num1 + $num2;
    }//fim do somar

    function subtrair($num1, $num2){
        return $num1 - $num2;
    }//fim do subtrair
        
    function multiplicar($num1, $num2){
        return $num1 * $num2;
    }//fim do multiplicar

    function dividir($num1, $num2){
        if ($num2 == 0){
            return "Impossivel dividr por zero!";
        }else{
            return $num1 / $num2;
        }
    }//fim do dividir

    function potencia($num1, $num2){
        if($num2 < 0){
            return "Impossível calcular a potencia de expoente negativo";
        }else{
            return pow($num1, $num2);
        }
        
    }//fim do método

    function raiz($num1){
        if($num1 >= 0 ){
            return sqrt($num1); 
        }else{
            return "Impossivel calcular a raiz de número negativo";
        }
        
    }// fim do método

    function tabuada($num1){
        $i = 0;
        $resultado = "";
        for($i; $i<=10;$i++){
            $resultado .= "<br>".$num1." * ".$i." = ".($num1*$i);
        }//fim do for
        return $resultado;
    }//fim do método

    function areaRetangulo($base,$altura){
        if (($base <= 0)|| ($altura <= 0)){   // (||) = ou 
            return "Impossível calcular a área";
        }else{
            return $base * $altura;
        }

    }// fim do método

    function delta($a,$b,$c){
        $delt =  pow($b,2) - 4 * $a * $c;
        if ($delt < 0){
            return -1;
        }else{
            return $delt;
        }
    }//fim do delta

    function x1($a,$b,$c){
        $d = delta($a,$b,$c);
        if($d == -1){
            return"Impossivel calcular  x2, delta negativo";
        }else{
            return (-$b + sqrt($d))/(2*$a);
        }
        
    }//fim do x1

    function x2($a,$b,$c){
        $d = delta($a,$b,$c);
        if($d== -1){
            return"Impossivel calcular  x1, delta negativo";
        }else{
            return (-$b - sqrt($d))/(2*$a);
        }
        
    }//fim do x2

    function parImpar($num){
        if($num % 2 == 0){
            return "Par";
        }else{
            return "Impar";
        }
    }//fim do parImpar

    function maiorIdade($idade){
        if($idade < 18){
            return "Menor de idade";
        }else{
            return "Maior de idade";
        }
    }//fim do maiorIdade

    function dobro($num){
        return $num * 2;
    }

    function celsuisFahrenheit($celsius){
        return($celsius * 1.8)+32;
    }//fim do método

    function buscarMaior($num1,$num2,$num3){
        if(($num1 > $num2) && ($num1 > $num3)){
            return $num1;
        }else if(($num2 > $num1) && ($num2 > $num3)){
            return $num2;
        }else{
            return $num3;
        }
    }//fim do metodo

    function buscarNumero($num){
        if($num < 0){
            return "negativo";
        }else if($num > 0){
            return "positivo";
        }else{
            return"zero";
        }
    }

    function somarNumeros($num){
        $i = 1; 
        $soma = 0;
        for($i; $i<=$num;$i++){
            $soma += $i;
        }
        return $soma;
    }

    function primo($num){
        if($num <=1){
            return"Não é primo!";
        }
        for($i = 2; $i <= sqrt($num); $i++){
            if($num % $i == 0){
                return"Não é primo";
            }
        }
        return $num;
    }//fim do primo
     
    function palavra($string){
        if(strrev($string) == $string){
            return " é um palindromo";
        }else{
            return "não é um palindromo";
        }
    } //fim de palindromo 

    function fatorial($num){
        $fatorial = 1;
        for ($i = 1; $i <= $num; $i++){
            $fatorial = $fatorial * $i;
        }
        return $fatorial;
    } //fim de fatorial

    function pares($num){//exercicio13
        $msg = "";
        if($num < 0){
            return "O numero não pode se calculado";
        }
        for ($i = 1; $i <= $num; $i++) {
            if ($i % 2 == 0){
                $msg.="<br>".$i;
            }
        }
        return $msg;
    }//fim do pares

    function contar_vogais($palavra) {//exercicio14
        $vogais = 'aeiouAEIOU';// Definindo as vogais
        $contador = 0;
        for ($i = 0; $i < strlen($palavra); $i++) { // Iterando sobre cada letra da palavra
            if (strpos($vogais, $palavra[$i]) !== false) {
                $contador++;
            }
        }
     
        return $contador;
    }

    function mediaCinco($num1, $num2, $num3, $num4, $num5){//17
        $soma = $num1 + $num2 + $num3 + $num4 + $num5;
        $media = $soma / 5;
        return $media;
    }//fim media dos cinco numeros


    function divisores($divisor){//18
        for($i = 1, $total = 0; $i < $divisor; $i++){
            if ($divisor % $i == 0){
                $total++;
            }
        }
        return $total;
    }

    function contadorPalavras($texto){//19
        $numero_palavras = str_word_count($texto);
        return $numero_palavras;
    }

    function mostrarPrimos($num){//15
       $numPrimos = "";
       $i = 1;
       for($i;$i <= $num; $i++){
            if(primo($i) != "Não é primo"){
            $numPrimos .= "<br>" .$i;
            }
        
        }
        return $numPrimos;
    }
    function data($month,$day,$year){//exercicio16
        if(checkdate($month,$day,$year)){
            return " Válida";
        }else{
            return " Inválida";
        }  
    }
     function fibonacci($n){
    $resu = "";
    $a = 0;
    $b = 1;
    $c = 1;
    for ($i = 1; $i < $n ; $i++) {
        $c = $a + $b;
        $a = $b;
        $b = $c;
        $resu .= "<br>".$c;
    }
    return $resu;
    }
    

    //lista 2 


    function idadeEmDias($anos, $mes, $dias){//exercicio 11
        if((($anos < 0) || ($mes < 0) || ($dias < 0))){
            return "Não aceitamos valores negativos.";
        }else{
         $idade = ($anos * 365) + ($mes * 30) + $dias;
         return $idade;  
        }
    }//fim idade
 
    function macas($macas){// exercicio 12 e 13
        if($macas < 12){
            $valor = $macas * 1.30;
        }else{
            $valor = $macas * 1;
        }  
        return $valor;
    }//fim maçãs

    function salario($salario, $valorVendas){//exercicio 14
        if(($salario < 0) || ($valorVendas < 0)){
            return "informe um valor positivo.";
        }else{
            if($valorVendas <= 1500){
                $salario2 = ($valorVendas * 0.03) + $salario;
            }else{
                $salario2 = (($valorVendas - 1500)  * 0.05) + $salario;
            }
        }
        return $salario2;
    }//fim salario


    function valor($conta,$saldo,$debito,$credito){ //exercicio15
        if(($debito < 0) || ($credito < 0)){
            return "informe um valor positivo!!";
        }else{
           if(($atual = $saldo - $debito + $credito) == ($atual > 0)){
            return "O saldo da conta é $saldo,sendo positivo";
        }else{
            return "O saldo da conta é $saldo,sendo negativo";
        }
           }
        }
        
    //exercicio 16 ja fizemos
    
    function numeros($num){//17
        if($num < 0){
            return "Erro. Informe um valor positivo.";
        }else{
            for($i = 1; $i <= $num; $i++){
                echo $i . "<br>";
            }
        }
    }
    
    function negativo($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10){ //18
        $negativo = 0;
        if($num1 < 0){
            $negativo++;
        }

        if($num2 < 0){
            $negativo++;
        }

        if($num3 < 0){
            $negativo++;
        }

        if($num4 < 0){
            $negativo++;
        }

        if($num5 < 0){
            $negativo++;
        }

        if($num6 < 0){
            $negativo++;
        }

        if($num7 < 0){
            $negativo++;
        }

        if($num8 < 0){
            $negativo++;
        }

        if($num9 < 0){
            $negativo++;
        }

        if($num10 < 0){
            $negativo++;
        }

        return $negativo;
    }

    function somaNumerosMenor($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10){//19
        $soma = 0;
        if($num1 <= 40){
            $soma = $soma + $num1;
        }
 
        if($num2 <= 40){
            $soma = $soma + $num2;
        }
 
        if($num3 <=  40){
            $soma = $soma + $num3;
        }
 
        if($num4 <= 40){
            $soma = $soma + $num4;
        }
 
        if($num5 <= 40){
            $soma = $soma + $num5;
        }
 
        if($num6 <= 40){
            $soma = $soma + $num6;
        }
 
        if($num7 <= 40){
            $soma = $soma + $num7;
        }
 
        if($num8 <= 40){
            $soma = $soma + $num8;
        }
 
        if($num9 <= 40){
            $soma = $soma + $num9;
        }
 
        if($num10 <= 40){
            $soma = $soma + $num10;
        }
        return $soma;
    }



    //resultados
    echo "<br>A soma dos números é: ".somar(5,8);
    echo "<br>A subtração dos números é: ".subtrair(9, 15);  
    echo "<br>A multiplicação dos números é: ".multiplicar(10, 8);
    echo "<br>A divisão dos números é: ".dividir(3, 1);
    echo "<br>A potencia dos números é: ".potencia(10,2);
    echo "<br> A raiz do número é: ".raiz(10);
    echo "<br> A tabuada do número informado é: ".tabuada(8);
    echo "<br> A área do retangulo é: ".arearetangulo(5,6);
    echo "<br> O x1 é: ".x1(-8,5,9);
    echo "<br> O x2 é: ".x1(-8,5,9);
    echo "<br> O número informado é: ".parImpar(6);
    echo "<br> A pessoa informada é: ".maiorIdade(6);
    echo "<br> o dobro do número informado é: ".dobro(7);
    echo "<br> a temperatura convertida de celsius para fahrenheit é: ".celsuisFahrenheit(25);
    echo "<br> O maior dos tres é: ".buscarMaior(9, 10, 4);
    echo "<br> O número é: ".buscarNumero(0);
    echo "<br> A soma dos todos os números ate ele é: ".somarNumeros(10);
    echo "<br> O número é: ".primo(11);
    echo "<br> a palavra é: ".palavra("ovo");
    echo "<br> O fatoral de: ".fatorial(3);
    echo "<br> Os numeros pares são: ".pares(10);
    echo "<br> A quantidade de vogais que essa palavra tem é: ".contar_vogais("linda");
    echo "<br> A média dos números é: ".mediaCinco(10, 9, 8, 7,6);
    echo "<br> Os divisores do número são: ".divisores(20);
    echo "<br> A quantidade de palavras é: ".contadorPalavras("boa noite");
    echo "<br> Números Primos: ".mostrarPrimos(100);
    echo "<br> A data é: ".data(11, 04,2009);

    // lista 2 

    echo "<br> A idade dessa pessoa é: ".idadeEmDias('12', '20', '2009');
    echo "<br> O valor total é de: ".macas(15);
    echo "<br> O salario total é de: ".salario(1000, 500);
    echo "<br> ".valor(0,100, 50, 30). "<br>";
    echo "<br> ".numeros(5). "<br>";
    echo "<br> A quantidade de números negativo é: ".negativo(1, 2, 3, 4, 5, 6, 7, 8, -9, -10). "<br>";
    echo "<br> Resultado da soma de todos os números é: ".somaNumerosMenor(10, 20,30,40,50,60,70,80,90,145)."<br>";
    echo "<br> A sequencia de fibonacci é: ".fibonacci(10)

    

?>