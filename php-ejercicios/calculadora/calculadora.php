<?php
class Calculadora {
    private static $valor1;
    private static $valor2;

    public function __construct($val1, $val2) {
        // Verificamos si ambos son numéricos
        if (is_numeric($val1) && is_numeric($val2)) {
            $this->valor1 = $val1;
            $this->valor2 = $val2;
        }
        else {
            return null;
        }
            
    }
    function sumar() {
        return ($this->valor1 + $this->valor2);
    }
    
    function restar() {
        return ($this->valor1 - $this->valor2);
    }

    function multiplicar() {
        return ($this->valor1 * $this->valor2);
    }

    function dividir() {
        if ($this->valor2 == 0){
            return null;
        }
        return ($this->valor1 * $this->valor2);
    }
}
