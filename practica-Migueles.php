<?php

    echo "Esta modificación fue hecha desde el repositorio local";
    /**
     * Funcion saludo.
     * 
     * Esta función recibirá dos parámetros que componen el nombre completo del usuario
     * y devolverá un mensaje de saludo para utilizarlo como se quiera.
     * 
     * @author José Migueles Sánchez
     * @version 1.0
     * {@internal Función desarrollada para utilizarse en la tarea 5 de DAW el 20/04/2022 }
     * 
     * @param string $nombre Nombre del usuario para mostrar en el saludo
     * @param string $apellidos Apellidos del usuario para mostrar en el saludo
     * @return string Mensaje de saludo con el nombre completo del usuario
     */
    function saludo($nombre, $apellidos)
    {
        return "Saludos de $nombre $apellidos desde Puente Genil (Córdoba)";
    }

    /**
     * FUnción suma.
     * 
     * Esta función recibirá dos parámetros utilizados para realizar una función suma
     * de forma interna y se devolverá el resultado.
     * 
     * @author José Migueles Sánchez
     * @version 1.0
     * {@internal Función desarrollada para realizar la operación de suma como ejemplo para la tarea 5 de DAW el 20/04/2022}
     * 
     * @param double $num1 Primer dígito para la operación
     * @param double $num2 Segundo dígito para la operación
     * @return double Resultado de la operación
     */
    function suma($num1, $num2)
    {
        return $num1 + $num2;
    }
