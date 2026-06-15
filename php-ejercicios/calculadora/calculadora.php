<?php
class Calculadora {
    private $valor1;
    private $valor2;

    public function __construct(string $val1, string $val2) {

        // Verificamos si ambos son numéricos
        if (is_numeric($val1) && is_numeric($val2)) {
            $this->valor1 = $val1;
            $this->valor2 = $val2;
        }
        else {
            throw new Exception();
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
