<?php

class Connection
{
    //defining the pdo instance en una funcion 
    public static function make() // se usa un metodo estatico cuando no se requiere la instancia de una clase
    {
        // si el metodo no fuese estatico se llamaria por medi ode una instancia. Como es estatico se llamaria de la forma Conection::make() desde afuera de la clase
        //aparece el try catch para intentar ejecutar algo y si algo malo pasa, captura la excepcion.
        try {
            //mysql_connect es una funcion de php deprecada.
            return new PDO("mysql:host=127.0.0.1;dbname=mytodo", 'ssulbaran','1SopadepollO');
        
        } catch (PDOException $e) {
            dd($e->getMessage()); // se pueden usar mensajes especificos genericos o informacion detallada del error
            //E cual vamos a usar va a depender de nuestras definiciones de seguridad y que tanta data queremos mostrar
            // die('Couldnt connect');
        }
    }
}
