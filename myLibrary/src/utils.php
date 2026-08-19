<?php
namespace MyLibrary\Utils;

class Helpers {
    /**
     * Se comprueba que el array unidimensional se encuentra vacio o contiene posiciones vacías.
     * @param array $array El array que se quiere comprobar si cada posición está vacía.
     * @return boolean $isEmpty `True` si todas las posiciones están vacías. `False` si al menos una contiene algún elemento.
     */
    public static function emptyArray (array $array) {
        $isEmpty = true;
        // en caso que el array no contenga casillas.
        if (empty($array)) return $isEmpty;

        //se comprueba, por cada posición, si el array contiene alguna posición con algún dato.
        foreach ($array as $item) {
            if (!empty($item)){
                $isEmpty = false;
                return $isEmpty;
            }
        }
        return $isEmpty;
    }

    /**
     * Función que estandariza el muestreo de errores en todos los proyectos aquí incluídos.
     *  
     * Sirve para mostrar un mensaje de error al usuario, facil de entender, dentro de la clase "error", manejado por el stylesheet de cada proyecto.
     * Además, se arroja una excepción junto al mensaje de error que muestra más detalles del origen del error para el desarrollador.
     * 
     * @param string $mensaje_error Mensaje que resume la causa del problema.
     * @return never
     */
    public static function tirarError(string $mensaje_error){
        echo '<span class="error">', $mensaje_error, '</span>';
        throw new \Exception($mensaje_error);
    }
}
