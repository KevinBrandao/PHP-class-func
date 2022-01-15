<?php

class Calculadora
{
    /**
     * Calcula soma de dois números
     * @param float $x
     * @param float $y
     * @KevinBrandao
     * @return float
     */
    public function soma($x, $y)
    {
        return $x + $y;
    }
    /**
     * Calcula a subtração de dois numeros
     * @param float $x
     * @param float $y
     * @return float
     */

     public function sub($x, $y)
     {
        return $x - $y;
 
     }
     public function mult($x, $y)
     {
        return $x * $y;

     }
     public function div($x, $y)
     {
        if ($y == 0){
            return 0;
        }
        return $x / $y;

     }
     function pot($x, $y) {
        //verificar se é inteiro
        if (!is_int($y)) {
            return 'Numero não é inteiro';
        }
    
        //verificar se é negativo
        if ($y < 0) {
            $x = 1 /$x;
            $y = $y * -1;
        }
        $total = 1;
    
        for($i = 0; $i < $y; $i++){
            $total = $total * $x;
        }
        return $total;
    }
    
}


?>