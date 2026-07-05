<?php
namespace Validacion;

class ValidacionForm{
    // Aqui se ingresan los datos de cada campo del formulario.
    private array $campo;
    
    // Límite de caracteres por campo. Deben ser menor o igual.
    private static $maxChar = array (
        'nombre' => 50,
        'direccion' => 100,
        'telefono' => 20
    );

    public function __construct(array $formData)
    {
        $this -> campo = [
            // Operador ??: si es null, entonces se ingresa un string vacio. Para evitar problemas con otras funciones.
            'nombre' => trim($formData['nombre'] ?? ''),
            'direccion' => trim($formData['direccion'] ?? ''),
            'telefono' => trim($formData['telefono'] ?? '')
        ];
    }
    
    public function validar()
    {
        $errores = [
            'nombre' => '',
            'direccion' => '',
            'telefono' => ''
        ];
        $campo = $this -> campo;
        $maxChar = self::$maxChar;
        
        // Controles para el nombre: ¿vacio? | Menor o igual al límite de caracteres
        $nombre = $campo['nombre'];
        if (empty($nombre)) $errores['nombre'] = "Se require su nombre";
        elseif (strlen($nombre) > $maxChar['nombre']) $errores['nombre'] = 'Ingrese un nombre menor a ' . $maxChar['nombre'] . 'caracteres';
        
        // Controles para la direccion:  ¿vacio? | Menor o igual al límite de caracteres
        $direccion = $campo['direccion'];
        if (empty($direccion)) $errores['direccion'] = "Se require su dirección";
        elseif (strlen($direccion) > $maxChar['direccion']) $errores['direccion'] = 'Ingrese una direccion menor a ' . $maxChar['direccion'] . 'caracteres';
        
        // Controles para el teléfono:  ¿vacio? | ¿Es int? | Menor o igual al límite de caracteres
        $telefono = $campo['telefono'];
        if (empty($telefono)) $errores['telefono'] = "Se require su número de teléfono";
        elseif (!ctype_digit($telefono)) $errores['telefono'] = "Ingrese solo números";
        elseif (strlen($telefono) > $maxChar['telefono']) $errores['telefono'] = 'Ingrese un número menor a ' . $maxChar['telefono'] . 'caracteres';

        return $errores;
    }

    public static function getMaxChar () {
        return self::$maxChar;
    }
}
